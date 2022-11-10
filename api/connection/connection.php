<?php  
    
    require_once($_SERVER['DOCUMENT_ROOT'] ."/todoapp-api/vendor/autoload.php");
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