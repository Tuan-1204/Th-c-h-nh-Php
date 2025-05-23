<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng kí mới</title>
    <link rel="stylesheet" href="/WPHP/bootstrap-5.3.6-dist/bootstrap-5.3.6-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/WPHP/Assets/Css/style.css">
</head>
<body>
    <div class="container bg-info-subtle">
<div class="row"></div>
<a href="Register.php">Đăng ký Mới</a> 
<table class="table table-success table-striped">
    <tr>
        <th>STT</th>
        <th>Tên đăng nhập</th>
        <th>Mật khẩu</th>
        <th>Địa chỉ</th>
        <th>Avatar</th>
        <th>Giới tính</th>
        <th>Sở thích</th>
        <th>Thao tác</th>
    </tr>
   <?php
include_once '../Modal/modal.php';
$get_data = new data_user();
$select_user = $get_data->select_all(); // hoặc select_user_list() nếu bạn đã sửa tên hàm

while ($i_user = mysqli_fetch_assoc($select_user)) {
?>
    <tr>
        <td><?php echo $i_user['id_user']; ?></td>
        <td><?php echo $i_user['username']; ?></td>
        <td><?php echo $i_user['password']; ?></td>
        <td><?php echo $i_user['address']; ?></td>
        <td><img src="../Uploads/<?php echo $i_user['avatar']; ?>" alt="Avatar" width="50" height="50"></td>
        <td><?php echo $i_user['gender']; ?></td>
        <td><?php echo $i_user['hobby']; ?></td>
        <td>
            <a href="edit.php?id=<?php echo $i_user['id_user']; ?>">Sửa</a>
            <a href="delete.php?id=<?php echo $i_user['id_user']; ?>">Xóa</a>
        </td>
    </tr>
<?php
}
?>
</table>


</div>
</div>


<script src="/WPHP/bootstrap-5.3.6-dist/bootstrap-5.3.6-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



