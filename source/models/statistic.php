<?php
include_once("DataProvider.php");
class Exemp{
    private $da;
    public function __construct(){
        $this->da = new DataProvider();
    }
    
    function getStatistic()
    {
        $sql = "SELECT ID, Name, Description, Ratio, reduce_type, time_application
                FROM exemption_type";
        return $this->da->FetchAll($sql);
    }

    function countAccount()
    {
        $sql = "SELECT ID FROM exemption_type";
        return $this->da->NumRows($sql);
    }
    function createExemptionType($name,$desc,$ratio,$reduce,$time)
    {
        $sql = "INSERT INTO exemption_type(Name,Description,Ratio,reduce_type,time_application) 
                VALUES ('$name','$desc',$ratio,'$reduce','$time')";
        return $this->da->ExecuteQuery($sql);
    }
    function getListStatistic()
    {
        $sql = "INSERT INTO statistic(Lecturer_id,Department_id,Time,Rating)
                SELECT DISTINCT u.ID,d.ID,SUM(r.Time_reseach),
        (CASE
        WHEN SUM(r.Time_reseach) >=Time THEN 'Đạt'
        WHEN SUM(r.Time_reseach) <Time THEN 'Không đạt'
        ELSE 'Không có tham gia NCKH'
        END)
        FROM scientific_research sr JOIN reseach r ON sr.ID=r.Topic_classic 
    JOIN user u ON r.LecturerID=u.ID JOIN department d ON u.Department_id=d.ID 
WHERE EXISTS(SELECT * FROM reseach WHERE reseach.LecturerID=u.ID)
GROUP BY u.Name ";
        return $this->da->FetchAll($sql);
    }
    function deleteDuplicate()
    {
        $sql = "DELETE FROM statistic WHERE Lecturer_id IN (SELECT Lecturer_id FROM statistic)";
        return $this->da->ExecuteQuery($sql);
    }
    function getTime()
    {
        $sql = "SELECT u.Name,(CASE SUM(r.Tyle*sr.Time) as result
        WHEN result>=Time THEN 'Đạt'
        WHEN result<Time THEN 'Không đạt'
        ELSE 'Không có tham gia NCKH'
        END) AS Kết quả
        FROM user u JOIN reseach r ON u.ID=r.LecturerID JOIN scientific_research sr ON sr.ID=r.Topic_classic
        GROUP BY u.Name";
    }
    function getResult()
    {
        $sql = "SELECT u.Name,d.DepartName,SUM(r.Time_reseach) as Time1,
        (CASE
        WHEN SUM(r.Time_reseach) >Time THEN 'Đạt'
        WHEN SUM(r.Time_reseach) <Time THEN 'Không đạt'
        ELSE 'Không có tham gia NCKH'
        END) AS ketqua
        FROM scientific_research sr JOIN reseach r ON sr.ID=r.Topic_classic 
    JOIN user u ON r.LecturerID=u.ID JOIN department d ON u.Department_id=d.ID 
WHERE EXISTS(SELECT * FROM reseach WHERE reseach.LecturerID=u.ID)
GROUP BY u.Name";
        return $this->da->FetchAll($sql);
    }
    function export()
    {
        $sql = "SELECT u.Name,DepartName,Time,Rating FROM statistic s JOIN user u ON s.Lecturer_id=u.ID 
        JOIN department d ON u.Department_id=d.ID";
        return $this->da->FetchAll($sql);
    }
}