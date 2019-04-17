<?php 
namespace core;

class Session{


public function __construct()
{
        session_start();
}




public function isConnecte()
{
    return $this->get( 'utilisateur_actuel', false);
}

public function set($key, $value)
{
    $_SESSION[$key] = $value;
}


public function get( string $key, $default=null)
{
    return isset($_SESSION[$key]) ? $_SESSION[$key]:$default;
}


public function isExpired()
{
    if(!$this->isConnecte()) return false;
    $data =$this->get( 'utilisateur_actuel');
        if ($data['session_start'] + $data['session_limite'] < time() )
            return true;
        return false;
}


public function renew()
{
    $data =$this->get( 'utilisateur_actuel',[]);
    $data['session_start'] = Time();
    $this->set( 'utilisateur_actuel', $data);
}


public function close()
{
        session_destroy();
        // $_SESSION = array();
       
}

}

