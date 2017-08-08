<?php
class USingleton
{
   /*questa classe si occupa di restituire un istanza di un altra classe ;
    *  nel caso in cui  esista già una istanza della classe desiderata verrà restituita quella
altrimenti verra istanziata per la prima volta una classe */
   private static $instances = array();

  
   private function __construct()
   {
      // vuoto
   }

  
   public static function getInstance($c)
   {
        if( ! isset( self::$instances[$c] ) )
        {
            self::$instances[$c] = new $c;
        }
        return self::$instances[$c];
   }
}
?>

