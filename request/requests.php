 <?php
    class Request{
        private $connection;
        private $table='posts';

        public function __construct($connection ){
            $this->connection=$connection;
        }

        public function getAll(){
            $query='SELECT * FROM '.$this->table;
            $result=mysqli_query($this->connection,$query);
            return $result;
        }
    }
 ?>