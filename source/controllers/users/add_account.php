<?php
include_once("source/views/users/add_account.php");
if(isset($_POST["btnRegister"]))
{
    $name1 = $_POST["txtName"];
    $email = $_POST["txtEmail"];
    $group = $_POST["Group"];
    echo var_dump($group);
    $pass = $_POST["txtPassword"];
    $img = $_POST["txtImg"];
    if($group==="Admin")
    {
        $g=1;
    }
    else
    {
        $g=2;
    }
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
    $result = $user->createUser($name1,$email,$g,$pass,$image_url);
    if($result)
    echo"<script>alert('Thêm account thành công')</script>";

    else
    echo"<script>alert('Thêm account không thành công')</script>";
}

?>