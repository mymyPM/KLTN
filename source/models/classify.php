<?php
    include_once("DataProvider.php");
    class Classify{
        private $da;
        public function __construct(){
            $this->da = new DataProvider();
        }
        function getClassById($id)
        {
            $sql = "SELECT * FROM classify WHERE ID=$id";
            return $this->da->Fetch($sql);
        }
        function addClass($name)
        {
            $sql = "INSERT INTO classify(ClassName) VALUES ('$name')";
            return $this->da->ExecuteQuery($sql);
        }
        function updateClass($id,$name)
        {
            $sql = "UPDATE classify SET ClassName='$name' WHERE ID=$id";
            return $this->da->ExecuteQuery($sql);
        }
        function deleteClass($id)
        {
            $sql = "DELETE FROM classify WHERE ID=$id";
            return $this->da->ExecuteQuery($sql);
        }
}