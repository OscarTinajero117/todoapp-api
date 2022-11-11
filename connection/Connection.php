<?php  
    
    require_once($_SERVER['DOCUMENT_ROOT'] ."/todoapp-api/vendor/autoload.php");

    class Connection {
        public function connect(){
            $DB = 'ToDoApp';
            try {
                $db_connection = 'mongodb://todoapp-database:98cGmjMQe8Ttqv6F4Svn9X0OwTD6Dj07rDc1fhD3AW2ZmWLyIms90nscsZoVNmHnZXnnIXnub08kACDbd1rwZw==@todoapp-database.mongo.cosmos.azure.com:10255/?ssl=true&replicaSet=globaldb&retrywrites=false&maxIdleTimeMS=120000&appName=@todoapp-database@';
                
                //code...
                $client = new MongoDB\Client($db_connection);
                return $client->selectDatabase($DB);

            } catch (\Throwable $th) {
                //throw $th;
                return $th->getMessage();
            }

        }
    }

    // $object = new Connection();
    // var_dump($object->connect());
?>