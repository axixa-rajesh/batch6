<?php 
class Session{
    public static function init()
    {
        @session_start();
    }
    public static function set($property,$value)
    {
        $_SESSION[$property]=$value;
     }
    public static function get($property)
    {
        if(isset($_SESSION[$property])){
            return $_SESSION[$property];
        }
        return null;
    }
    public static function delete($property)
    {

        if (isset($_SESSION[$property])) {
            unset($_SESSION[$property]);
            return true;
        }
        return false;
    }
    public static function destroy()
    {
        session_destroy();
    }
}

?>