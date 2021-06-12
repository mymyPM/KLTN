<?php
include_once("source/models/users.php");
$user = new Users();
$id = $_SESSION["userID"];
$result = $user->getUserById($id);
include_once("source/views/users/profile.php");
if(isset($_POST["btnEdit1"]))
{
    if ($_FILES['uploadFile']['name'] != NULL) {
        // Kiểm tra file up lên có phải là ảnh không
        if ($_FILES['uploadFile']['type'] == "image/jpeg" || $_FILES['uploadFile']['type'] == "image/png" || $_FILES['uploadFile']['type'] == "image/gif") {
            
            // Nếu là ảnh tiến hành code upload
            $path = "upload/"; // Ảnh sẽ lưu vào thư mục images
            $tmp_name = $_FILES['uploadFile']['tmp_name'];
            $name = $_FILES['uploadFile']['name'];
            // Upload ảnh vào thư mục images
            move_uploaded_file($tmp_name, $path . $name);
            $image_url = $path . $name; // Đường dẫn ảnh lưu vào cơ sở dữ liệu
                                      // Insert ảnh vào cơ sở dữ liệu
}
    }
    include_once("source/models/users.php");
    $user = new Users;
    $result=$user->updateImg($id,$image_url);

    if($result)
    {
        echo"<script>alert('Đổi ảnh đại diện thành công')</script>";
        //header("Refresh:0");
        header("location:pesonal.php?mod=users&act=profile");
    }
    else
    echo"<script>alert('Đổi ảnh đại diện không thành công')</script>";
}


?>