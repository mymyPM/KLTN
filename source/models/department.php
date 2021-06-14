<?php
    include_once("DataProvider.php");
    class Department{
        private $da;
        public function __construct(){
            $this->da = new DataProvider();
        }
        function getDepartById($id)
        {
            $sql = "SELECT * FROM department WHERE ID=$id";
            return $this->da->Fetch($sql);
        }
        function addDepart($name)
        {
            $sql = "INSERT INTO department(DepartName) VALUES ('$name')";
            return $this->da->ExecuteQuery($sql);
        }
        function updateDepart($id,$name)
        {
            $sql = "UPDATE department SET DepartName='$name' WHERE ID=$id";
            return $this->da->ExecuteQuery($sql);
        }
        function deleteDepart($id)
        {
            $sql = "DELETE FROM department WHERE ID=$id";
            return $this->da->ExecuteQuery($sql);
        }
}