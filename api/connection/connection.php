<?php  
    
    require_once("/vendor/autoload.php");
    require_once("constants_connection.php");

    class Connection{
        public function connect(){
            try {
                //code...
                $client = new MongoDB\Client(db_connection);
                return $client->selectDatabase(DB);
            } catch (\Throwable $th) {
                //throw $th;
                return $th->getMessage();
            }

        }
    }
?>