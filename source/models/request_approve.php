<?php
    include_once("DataProvider.php");
    class RequestApprove{
        private $da;
        public function __construct(){
            $this->da = new DataProvider();
        }
        
        function getRequestApprove()
        {
            $sql = "SELECT A.ID, L.Name, E.Reason, E.Reduction_time FROM `approved` A
            JOIN `lecturers` L ON A.LecturerID=L.ID
            JOIN `exemption` E ON L.ID=E.LectureID";
            return $this->da->FetchAll($sql);
        }

        function countAccount()
        {
            $sql = "SELECT ID FROM approved";
            return $this->da->NumRows($sql);
        }
}
?>