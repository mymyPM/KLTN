<?php
/* Cố gắng kết nối đến MySQL server. Giả sử bạn đang chạy MySQL server mặc đinh (user là 'root' và không có mật khẩu */
$mysqli = new mysqli("localhost", "root", "", "ql_nckh_v3");
 
// Kiểm tra kết nối
if($mysqli === false){
    die("ERROR: Không thể kết nối. " . $mysqli->connect_error);
}
 
if(isset($_REQUEST["term"])){
    // Chuẩn bị câu lệnh SQL SELECT
    $sql = "SELECT * FROM scientific_research WHERE Name_scien LIKE ?";
    
    if($stmt = $mysqli->prepare($sql)){
        // Liên kết biến đến câu lệnh đã chuẩn bị như là tham số
        $stmt->bind_param("s", $param_term);
        
        // Thiết lập các tham số
        $param_term = $_REQUEST["term"] . '%';
        
        // Cố gắng thực thi câu lệnh đã chuẩn bị
        if($stmt->execute()){
            $result = $stmt->get_result();
            
            // Kiểm tra số lượng row trong kết quả
            if($result->num_rows > 0){
                // Tìm nạp các hàng kết quả dưới dạng mảng kết hợp
                while($row = $result->fetch_array(MYSQLI_ASSOC)){
                    //echo "<p>" . $row["Reduction_time"] . "</p>";
                    
                    echo "<input type='text' class='form-control1' name='txtTime' readonly placeholder='Default Input' value=";
                    echo $row["Time"];
                    echo ">";
                    echo "<div>";
                    echo "<p class='help-block'>Thời gian nghiên cứu khoa học</p>";
                    echo "</div>";

                    
                }
            } else{
                echo "<p>Không tìm thấy kết quả nào</p>";
            }
        } else{
            echo "ERROR: Không thể thực thi câu lệnh $sql. " . mysqli_error($link);
        }
    }
     
    // Đóng câu lệnh
    $stmt->close();
}
 
// Đóng kết nối
$mysqli->close();
?>