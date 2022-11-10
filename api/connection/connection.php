<?php  
    
    require_once("/vendor/autoload.php");
    require_once("constants_connection.php");

    class Connection{
        public function connect(){
            try {
                //code...
                $client = new MongoDB\Client(DB_CONNECT);
                return $client->selectDatabase(DB);
            } catch (\Throwable $th) {
                //throw $th;
                return $th->getMessage();
            }

        }
    }
?>