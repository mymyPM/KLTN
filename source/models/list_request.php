<?php
    include_once("DataProvider.php");
    class ListRequest{
        private $da;
        public function __construct(){
            $this->da = new DataProvider();
        }
        
        function getList()
        {
            $sql = "SELECT A.ID, u.Name, E.Reason, E.Reduction_time FROM `approved` A
            JOIN `exemption` E ON A.ExemptionID=E.ID
            JOIN user u ON E.ID=u.ID ";
            return $this->da->FetchAll($sql);
        }

        function countAccount()
        {
            $sql = "SELECT ID FROM approved";
            return $this->da->NumRows($sql);
        }
}