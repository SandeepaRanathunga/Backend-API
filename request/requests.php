 <?php
    class Requests{
        private $connection;
        private $table='posts';

        public function __construct($connection ){
            $this->connection=$connection;
        }

        public class getAll(){
            $query='SELECT * FROM '.$table;
        }
    }
 ?>