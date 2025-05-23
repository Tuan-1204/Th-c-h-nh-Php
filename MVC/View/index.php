<?php
include_once '../Modal/modal.php';
$select = select_all();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
<link rel="stylesheet" href="/bootstrap-5.3.6-dist/bootstrap-5.3.6-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Assets/Css/style.css">
</head>
<body>


<div class="container ">
    <div class="row mt-5">
        <div class="col-md-6 mx-auto  ">
            <form  method="POST" class="d-flex flex-column align-content-between">
                <input type="text" name="txtname" class="form-control" placeholder="Full name" required  >
                <br>
                <input type="email" name="txtemail" class="form-control" placeholder="Email" required  >
                <br>
                <input type="text" name="txtphone" class="form-control" placeholder="Phone" required  >
                <br>
                <textarea name="txtmessage" id="" class="form-control" placeholder="Message" required  ></textarea>
                <br>
                <button type="submit"  name="txtsub" class="btn btn-primary">Send</button>
            </form>
        </div>
    </div>
</div>


<!-- hiển thị dữ liệu -->
 <?php
include_once '../Modal/modal.php';

if (isset($_POST['txtsub'])) {
    $name = $_POST['txtname'];
    $email = $_POST['txtemail'];
    $phone = $_POST['txtphone'];
    $mess = $_POST['txtmessage'];
   $get_data = new data();
    $insert = $get_data->insert_contact($name, $email, $phone, $mess); // gọi tới hàm insert_contact
    // Reload lại trang để tránh gửi lại form khi refresh
    if ($insert) {
        header("Location: index.php");
        exit();
    } else {
        echo "<script>alert('Có lỗi xảy ra khi thêm dữ liệu');</script>";
    }
}

$select = select_all();
?>
<div class="container">
<div class="row mt-5">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Message</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
  while ($se_pro = mysqli_fetch_assoc($select))
  {
      ?>
     <tr>
        <td><?php echo $se_pro['ID_Contact']; ?></td>
        <td><?php echo $se_pro['Name']; ?></td>
        <td><?php echo $se_pro['Email']; ?></td>
        <td><?php echo $se_pro['Phone']; ?></td>
        <td><?php echo $se_pro['Mess']; ?></td>
        <!-- Xóa dòng dưới nếu không có cột Picture -->
        <!-- <td><img src="images/<?php echo $se_pro['Picture']; ?>" alt="" width="50%" height="50%"></td> -->
        <td>
            <a href="delete.php?id=<?php echo $se_pro['ID_Contact']; ?>" class="btn btn-danger">Delete</a>
            <a href="update.php?id=<?php echo $se_pro['ID_Contact']; ?>" class="btn btn-warning">Update</a>
        </td>
        <!-- Xóa dòng dưới nếu không có cột Category -->
        <!-- <td><?php echo $se_pro['Category']; ?> </td> -->
    </tr>
      <?php
  }
    ?>
</tbody>
</table>
</div>
</div>
>
<script src="/bootstrap-5.3.6-dist/bootstrap-5.3.6-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>