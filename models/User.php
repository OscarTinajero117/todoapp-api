<?php 
    require_once '../connection/Connection.php';
    
    class User extends Connection{
        private $collection;

        public function __construct(){
            $connection = parent::connect();
            $this->collection = $connection->Users;
        }
        
        public  function getAll()
        {
            try {
                // $connection = parent::connect();
                // $collection = $connection->Users;
                $data = $this->collection->find();
                return $data;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }

        public  function getWhere($user, $pass)
        {
            try {
                // $connection = parent::connect();
                // $collection = $connection->Users;
                $data = $this->collection->findOne(
                    array(
                        'user' => $user,
                        'pass' => $pass,
                    )
                );
                return $data;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
    }

    $object = new User();
    //GETALL
    // $data = $object->getAll();
    // $json =[];
    // foreach ($data as $item) {
    //     # code...
    //     $json[] =[
    //         'user'=>$item['user'],
    //         'pass'=>$item['pass'],
    //     ];
    // }
    // echo json_encode($json, JSON_UNESCAPED_UNICODE);
    
    //GETWHERE
    $data = $object->getWhere('Admin', 'HolaMundo');
    $json =[
        'user'=>$data['user'],
        'pass'=>$data['pass'],
    ];
    echo json_encode($json, JSON_UNESCAPED_UNICODE);
    
?>