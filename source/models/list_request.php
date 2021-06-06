<?php
    include_once("DataProvider.php");
    class ListRequest{
        private $da;
        public function __construct(){
            $this->da = new DataProvider();
        }
        
        function getList()
        {
            $sql = "SELECT A.ID, u.Name, E.Reason, E.Reduction_time FROM `exemption` E
            JOIN `approved` A  ON A.ExemptionID=E.ID
            JOIN user u ON A.LecturerID=u.ID 
            WHERE Status=0 ";

            return $this->da->FetchAll($sql);
        }

        function countAccount()
        {
            $sql = "SELECT ID FROM approved";
            return $this->da->NumRows($sql);
        }
        function approveRequest($id,$admin)
        {
            $sql = "UPDATE approved SET Status=1,AdminID=$admin WHERE ID=$id";
            return $this->da->ExecuteQuery($sql);
        }
        function rejectRequest($id,$admin)
        {
            $sql = "UPDATE approved SET Status=2,AdminID=$admin WHERE ID=$id";
            return $this->da->ExecuteQuery($sql);
        }
        function addReport($id)
        {
            $sql = "INSERT INTO report (LecturerID,AdminID,Status)
                    SELECT LecturerID, AdminID,Status FROM approved
                    WHERE ID=$id";
            return $this->da->ExecuteQuery($sql);
        }
        function listApproved()
        {
            $sql = "SELECT A.ID, u.Name, E.Reason, E.Reduction_time,A.Status FROM `exemption` E
            JOIN `approved` A  ON A.ExemptionID=E.ID
            JOIN user u ON A.LecturerID=u.ID 
            WHERE Status!=0";
            return $this->da->FetchAll($sql);
        }
        function myReport($id)
        {
            $sql = "SELECT A.ID, u.Name, E.Reason, E.Reduction_time,A.Status FROM `exemption` E
            JOIN `approved` A  ON A.ExemptionID=E.ID
            JOIN user u ON A.LecturerID=u.ID 
            WHERE  A.LecturerID=$id";
            return $this->da->FetchAll($sql);
        }
}