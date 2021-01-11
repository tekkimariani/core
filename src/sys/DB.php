<?php
namespace tekki\core\sys;
use PDO;
class DB{
    private static $_instance = null;
    private $log, $_pdo, $_query, $_error = false, $_result, $_count=0, $_lastId;
    
    public function getLastId(){
        return $this->_lastId;
    }
    
    private function __construct(){
        //$this->log = new sys\Log(sys\Config::get('logfile/debug'),sys\Config::get('settings/debug'));
        //$this->log->LogDebugMethod(__METHOD__);
        $host = Config::get('db/sys/host');
        if('localhost'==$host or $host=='127.0.0.1'){
            $pong = true; 
        }else{
            $ping = new Ping($host,32);
            $pong = $ping->ping('fsockopen');
        }
        if($pong){
            try{
                $dsn = 'mysql:host=' . Config::get('db/sys/host') . ';dbname=' . Config::get('db/sys/name').';charset=UTF8';
                $user = Config::get('db/sys/user');
                $pass = Config::get('db/sys/pass');
                $opt = [PDO::ATTR_PERSISTENT=>true];
                $this->_pdo = new PDO($dsn, $user, $pass, $opt);
                //$this->log->LogDebug(__METHOD__.'() => successfully connected to database on "'.Config::get('mysql/host').'"');
                $this->_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
                $this->_pdo->exec("SET CHARACTER SET utf8");
            } catch(\PDOException $e){
                //$this->log->LogDebug(__METHOD__.'() => could not connect to database on "'.Config::get('mysql/host').'"');
                die($e->getMessage());
            }
        }else{
            echo '<br><br><h2>Error</h2><h3>Der Datenbankserver hat keine Lust zu arbeiten, oder eventuell besteht grade keine Internetverbindung.</h3>';
            echo   Config::get('db/sys/host');
            //$this->log->LogFatal(__METHOD__.'() => could not ping the server! (is there an internet connection?)');
            exit();
        }
    }
    
    public final function __clone() {
        throw new \BadMethodCallException("Clone is not allowed");
    }
    
    public static function getInstance() {
        if(!(self::$_instance instanceof DB)) {
            self::$_instance = new DB();
        }
        return self::$_instance;
    }
    public function query($sql, $params = array()){
        //$this->log->LogDebugMethod(__METHOD__,$sql);
        $this->_error = false;
        if($this->_query = $this->_pdo->prepare($sql)){
            $x = 1;
            if(count($params)){
                foreach($params as $param){
                    //$this->log->LogDebug(__METHOD__.'() => $param: "'.$param.'"');
                    if($this->_query->bindValue($x, $param)){
                        #$this->log->LogDebug(__METHOD__.'() => bindValue success');
                    }else{                
                        #$this->log->LogDebug(__METHOD__.'() => bindValue error');
                    }
                    $x++;
                }
            }
            if($this->_query->execute()){
                //$this->log->LogDebug(__METHOD__.'() => execute success');
                $command = explode(' ',$sql)/*[0]*/;
                #$this->log->LogDebug(__METHOD__.'() => $command = '.$command['0']);
                if($command['0']=='INSERT'){
                    $this->_lastId = $this->_pdo->lastInsertId();
                }elseif($command['0'] == 'UPDATE' or $command['0']=='DELETE'){
                    #$this->log->LogDebug(__METHOD__.'() => DELETE or UPDATE');                   
                }else{
                    $this->_results = $this->_query->fetchAll(PDO::FETCH_OBJ);
                    $this->_count = $this->_query->rowCount();
                    #$this->log->LogDebug(__METHOD__.'() => count(): '.$this->_count);
                }
            }else{
                //$this->log->LogDebug(__METHOD__.'() => execute error');
                $this->_error = true;
            }
        }else{
            //$this->log->LogDebug(__METHOD__.'() => prepare error');
        }
        return $this;
    }
    public function search($table, $field, $valuestring, $from=0, $amount=100){
        //$this->log->LogDebugMethod(__METHOD__,$valuestring);        
        $valuearray = explode(' ',$valuestring);
        foreach($valuearray as $valueitem){
            $itemarray = explode('+',$valueitem);
            foreach($itemarray as $item){
                array_push($valuearray, $item);
            }    
        }
        foreach($valuearray as $valueitem){
            array_push($valuearray, '%'.$valueitem.'%');
        }        
        $operator = 'LIKE';
        $count=0;
        $first=true;
        $sql = '';
        foreach($valuearray as $valueitem){
            $values[$count] = $valueitem;
            if($first){
                $sql = "SELECT * FROM {$table} WHERE {$field} {$operator} ?"; 
                $first = false;   
            }else{
                $sql = $sql." OR {$field} {$operator} ?";    
            }
        $count++;
        }
        $till = $amount;#$from+
        $sql = $sql." LIMIT {$from},{$till}";
        if(!$this->query($sql, $values)->error()){
                    return $this;
        }
        return $this;
    }    
    public function getSearchCount($table, $field, $valuestring){
        //$this->log->LogDebugMethod(__METHOD__,$valuestring);
        $data = $this->searchCount($table, $field, $valuestring);
        if($data->count()){
            $d = $data->first();
        }
        return $d->searchcount;
    }
    public function searchCount($table, $field, $valuestring, $from=0, $amount=100){
        //$this->log->LogDebugMethod(__METHOD__,$valuestring);
        $valuearray = explode(' ',$valuestring);
        foreach($valuearray as $valueitem){
            $itemarray = explode('+',$valueitem);
            foreach($itemarray as $item){
                array_push($valuearray, $item);
            }
        }
        foreach($valuearray as $valueitem){
            array_push($valuearray, '%'.$valueitem.'%');
        }
        $operator = 'LIKE';
        $count=0;
        $first=true;
        $sql = '';
        foreach($valuearray as $valueitem){
            $values[$count] = $valueitem;
            if($first){
                $sql = "SELECT COUNT(id) as searchcount FROM {$table} WHERE {$field} {$operator} ?";
                $first = false;
            }else{
                $sql = $sql." OR {$field} {$operator} ?";
            }
            $count++;
        }
        /*
         * Da ich wissen will wieviele datens�tzen angesprochen werden ohne limit
         */
        //$sql = $sql." LIMIT {$from},{$amount}";
        if(!$this->query($sql, $values)->error()){
            return $this;
        }
        return $this;
    }
    private function action($action, $table, $where = array()){
        //$this->log->LogDebugMethod(__METHOD__);
        if(count($where) === 3){
            $operators = array("=",">","<","<=",">=","LIKE");
                
            $field         = $where[0];
            $operator    = $where[1];
            $value        = $where[2];
                
            if(in_array($operator, $operators)){
                $sql = "{$action} FROM {$table} WHERE {$field} {$operator} ?";
                if(!$this->query($sql, array($value))->error()){
                    return $this;
                }
            }
        }
        return $this;
    }
    public function get($table, $where){
        //$this->log->LogDebugMethod(__METHOD__);
        return $this->action('SELECT *', $table, $where);
    }
    public function delete($table, $where){
        //$this->log->LogDebugMethod(__METHOD__);
        return $this->action('DELETE', $table, $where);
    }

    public function insert($table, $fields = array()){
        //$this->log->LogDebugMethod(__METHOD__);
        if(count($fields)){
            $keys = array_keys($fields);
            $values = '';
            $x = 1;
                
            foreach($fields as $field){
                $values .= '?';
                if($x < count($fields)){
                    $values .= ', ';
                }
                $x++;
            }
                
            $sql = "INSERT INTO {$table} (`" . implode('`, `', $keys) . "`) VALUES ({$values})";
                
            if(!$this->query($sql, $fields)->error()){
                return true;
            }
        }
        return false;
    }
    public function update($table, $id, $fields){
        //$this->log->LogDebugMethod(__METHOD__);
        $set = '';
        $x = 1;
    
        foreach($fields as $name => $value){
            $set .= "{$name} = ?";
            if($x < count($fields)){
                $set .= ', ';
            }
            $x++;
        }
    
        $sql = "UPDATE {$table} SET {$set} WHERE id = {$id}";
        if(!$this->query($sql, $fields)->error()){
            return true;
        }
    
    }
    public function results(){
        //$this->log->LogDebugMethod(__METHOD__);
        return $this->_results;
    }
    public function first(){
        //$this->log->LogDebugMethod(__METHOD__);
        return $this->_results[0];
    }
    public function error(){
        //$this->log->LogDebugMethod(__METHOD__,null,$this->_error);
        return $this->_error;
    }
    public function count(){
        //$this->log->LogDebugMethod(__METHOD__,null,$this->_count);
        return $this->_count;
    }

    /**
 * Loads an SQL stream into the database one command at a time.
 *
 * @params $sqlfile The file containing the mysql-dump data.
 * @params $connection Instance of a PDO Connection Object.
 * @return boolean Returns true, if SQL was imported successfully.
 *#@throws Exception
 */
/*
public function importSQL($sqlfile)
{
    //$this->log->LogDebugMethod(__METHOD__);
    $queries = $this->getQueriesFromSQLFile($sqlfile);
 
    foreach($queries as $query)
    {
        try
        {
            $this->_pdo->exec($query);
        }
        catch (\Exception $e)
        {
            echo $e->getMessage() . "<br /> <p>The sql is: $query</p>";
        }
    }
 
    return true;
}
*/
 
/**
 * getQueriesFromSQLFile parses a sql file and extracts all queries
 * for further processing with pdo execute.
 *
 * - strips off all comments, sql notes, empty lines from an sql file
 * - trims white-spaces
 * - filters the sql-string for sql-keywords
 * - replaces the db_prefix
 *
 *#@param $file sqlfile
 * @return array Trimmed array of sql queries, ready for insertion into db.
 */
/*
private function getQueriesFromSQLFile($sqlfile)
{
    //$this->log->LogDebugMethod(__METHOD__);
    if(is_readable($sqlfile) === false)
    {
        throw new \Exception($sqlfile . 'does not exist or is not readable.');
    }
 
    # read file into array
    $file = file($sqlfile);
 
    # import file line by line
    # and filter (remove) those lines, beginning with an sql comment token
    $file = array_filter($file,
                    create_function('$line',
                            'return strpos(ltrim($line), "--") !== 0;'));
 
    # and filter (remove) those lines, beginning with an sql notes token
    $file = array_filter($file,
                    create_function('$line',
                            'return strpos(ltrim($line), "/*") !== 0;'));
 
    # this is a whitelist of SQL commands, which are allowed to follow a semicolon
    $keywords = array(
        'ALTER', 'CREATE', 'DELETE', 'DROP', 'INSERT',
        'REPLACE', 'SELECT', 'SET', 'TRUNCATE', 'UPDATE', 'USE'
    );
 
    # create the regular expression for matching the whitelisted keywords
    $regexp = sprintf('/\s*;\s*(?=(%s)\b)/s', implode('|', $keywords));
 
    # split there
    $splitter = preg_split($regexp, implode("\r\n", $file));
 
    # remove trailing semicolon or whitespaces
    $splitter = array_map(create_function('$line',
                            'return preg_replace("/[\s;]*$/", "", $line);'),
                          $splitter);
 
    # replace the default database prefix "your_prefix_"
    $table_prefix = '';#$_POST['config']['database']['prefix'];
    $splitter = preg_replace("/`your_prefix_/", "`$table_prefix", $splitter);
 
    # remove empty lines
    return array_filter($splitter, create_function('$line', 'return !empty($line);'));
}
*/
   
    public function matrixDelete($table,$firstkey,$firstid,$secoundkey,$secoundid){
        $sql = 'DELETE FROM '.$table.' WHERE '.$firstkey.' = ? and '.$secoundkey.' = ?;';
        if($this->_query = $this->_pdo->prepare($sql)){
            $this->_query->bindValue(1, $firstid);
            $this->_query->bindValue(2, $secoundid);
            if($this->_query->execute()){
                //$this->log->LogDebug(__METHOD__.'() => execute success');
                $command = explode(' ',$sql)/*[0]*/;
                //$this->log->LogDebug(__METHOD__.'() => $command = '.$command['0']);
                if($command['0']=='INSERT'){
                    $this->_lastId = $this->_pdo->lastInsertId();
                }elseif($command['0'] == 'UPDATE' or $command['0']=='DELETE'){
                    //$this->log->LogDebug(__METHOD__.'() => DELETE or UPDATE');
                }else{
                    $this->_results = $this->_query->fetchAll(PDO::FETCH_OBJ);
                    $this->_count = $this->_query->rowCount();
                    //$this->log->LogDebug(__METHOD__.'() => count(): '.$this->_count);
                }
                return true;
            }else{
                //$this->log->LogDebug(__METHOD__.'() => execute error on delete');
                $this->_error = true;
                return false;
            }
        }
    }
}