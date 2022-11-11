<?php 
    require_once '../connection/Connection.php';
    
    class Task extends Connection{
        
        public  function getAll($user)
        {
            try {
                $connection = parent::connect();
                $collection = $connection->Tasks;
                $data = $collection->find(
                    array(
                        'user' => $user
                    )
                );
                return $data;
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }

        public function insert($arrData){
            try {
                $connection = parent::connect();
                $collection = $connection->Tasks;
                $result = $collection->insertOne($arrData);
                return $result;

            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }

    }

    $object = new Task();
    /// INSERT
    // $arr = array(
    //     'user' => 'Admin',
    //     'title' => 'Personal',
    //     'icon' => '0xe491',
    //     'color' => '0xFF756BFC',
    //     'todos' => []
    // );
    // $data = $object->insert($arr);
    // echo json_encode($data, JSON_UNESCAPED_UNICODE);
    
    ///GET ALL
    $data = $object->getAll('Admin');
    $json =[];
    foreach ($data as $item) {
        # code...
        $json[] =[
            'title'=>$item['title'],
            'icon'=>$item['icon'],
            'color'=>$item['color'],
            'todos'=>$item['todos']
        ];
    }
    echo json_encode($json, JSON_UNESCAPED_UNICODE);
    
    ///GET WHERE
    
    ///DELETE
?>