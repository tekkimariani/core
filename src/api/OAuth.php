<?php
namespace tekki\core\api;

use Exception;
use core\sys\LogDB;
use OAuth2\Request;
use OAuth2\Storage\Pdo;
use OAuth2\Server;
use OAuth2\GrantType\ClientCredentials;
use OAuth2\GrantType\AuthorizationCode;
use OAuth2\GrantType\RefreshToken;

class OAuth{
    
    private $console;
    private $server;
    
    public function __construct(string $host, string $dbname, string $username, string $password){
        date_default_timezone_set("Europe/Berlin");
        #$this->console = FirePHP::getInstance(true);
        $this->console = new LogDB(LogDB::INFO);
        $this->console->LogDebugMethod(__METHOD__);
        $this->server = $this->getServerObject($host, $dbname, $username, $password);
    }
    public function getUserId(){
        $this->console->LogDebugMethod(__METHOD__);
        #$server=$this->getServerObject();
        #$token = $this->server->getAccessTokenDataRequest::createFromGlobals();
        $request = Request::createFromGlobals();
        $result =  $this->server->getAccessTokenData($request);
        #$result = $this->server->getResponse();
        #$result->send();
        $this->console->LogDebugArray('$result',$result);
        return $result['user_id'];
    }
    public function handleResourceRequest(){
        $this->console->LogDebugMethod(__METHOD__);
        #$server=$this->getServerObject();
        // Handle a request to a resource and authenticate the access token
        if (!$this->server->verifyResourceRequest(Request::createFromGlobals())) {
            $this->server->getResponse()->send();
            exit();
        }
    }
    public function handleTokenRequest(){
        $this->console->LogDebugMethod(__METHOD__);
        #$server=$this->getServerObject();
        // Handle a request for an OAuth2.0 Access Token and send the response to the client
        try {
            #$this->server->handleTokenRequest(Request::createFromGlobals())->send();
            $request = Request::createFromGlobals();
            $this->server->handleTokenRequest($request);
            $result = $this->server->getResponse();
            $result->send();
            $this->console->LogDebugVar('$result',$result);
        } catch (Exception $e) {
            $this->console->LogDebug('Error');
            $this->console->LogDebugArray('$e',$e);
        }
        
    }
    public function getServerObject(string $host, string $dbname, string $username, string $password): Server {
        $this->console->LogDebugMethod(__METHOD__);
        // $dsn is the Data Source Name for your database, for exmaple "mysql:dbname=my_oauth2_db;host=localhost"
        $dsn = "mysql:dbname=".$dbname.";host=".$host;
        $storage = new Pdo(array('dsn' => $dsn, 'username' => $username, 'password' => $password));
        // Pass a storage object or array of storage objects to the OAuth2 server class
        $this->server = new Server($storage);
        // Add the "Client Credentials" grant type (it is the simplest of the grant types)
        $this->server->addGrantType(new ClientCredentials($storage));
        // Add the "Authorization Code" grant type (this is where the oauth magic happens)
        $this->server->addGrantType(new AuthorizationCode($storage));
        $this->server->addGrantType(new RefreshToken($storage,['always_issue_new_refresh_token' => true,'unset_refresh_token_after_use' => true ]));
        return $this->server;
    }
    
}
?>