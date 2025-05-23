<?php
if(isset($_POST['txtsubmit'])) // thực thi sau khi ấn nút submit
{
include_once '../Modal/modal.php'; // chèn file kết nối
$get_data = new data(); // gọi tới class data
$insert = $get_data->insert_contact($_POST['txtname'],
$_POST['txtemail'], 
$_POST['txtphone'],
 $_POST['txtmessage']); 
 if($insert) echo "<script>alert('Cảm ơn bạn đã liên hệ ');</script>";
 else echo "<script>alert('Có lỗi xảy ra');</script>"; 
}
?>
 


 <!-- hiển thị thông báo 
  header("location: ../View/index.php"); // chuyển hướng về trang  index.php luôn mà không có thông báo 
  window.location.href = "../View/index.php"; //  hiển thị thông báo rồi mớichuyển hướng về trang index.php 
  -->

  <!-- tạo trang hiển thị -->
    <?php
    include_once '../Modal/modal.php'; // chèn file kết nối
    $get_data = new data(); // gọi tới class data
    $select = select_all(); // gọi tới hàm select_all

    ?>


<!-- thiết lập trang delete -->
<?php
include_once '../Modal/modal.php'; // chèn file kết nối
$get_data = new data(); // gọi tới class data
$delete = delete_contact($_GET['del']);// gọi tới hàm delete_contact
if($delete) header("location: ../View/index.php"); // chuyển hướng về trang index.php
else echo "<script>alert('Có lỗi xảy ra');</script>"; // thông báo có lỗi xảy ra
?>


<!-- thiết lập trang update -->
<?php
include_once '../Modal/modal.php'; // chèn file kết nối
$get_data = new data(); // gọi tới class data
$select = select_contact_id($_GET['id']); // gọi tới hàm select_contact_id
foreach($select as $se_con)// lặp qua từng phần tử trong mảng
?>

<?php
if(isset($_POST['txtsub'])) // thực thi sau khi ấn nút submit
{
    move_uploaded_file($_FILES['txtfile']['tmp_name'], "../images/".$_FILES['txtfile']['name']); // di chuyển file ảnh
   $update = update_contact(
    $_GET['id'],
    $_POST['txtname'],
    $_POST['txtemail'],
    $_POST['txtphone'],
    $_POST['txtmessage']
); // gọi tới hàm update_contact
if($update) header("location:contact.php"); // chuyển hướng về trang index.php
else echo "<script>alert('Có lỗi xảy ra');</script>"; // thông báo có lỗi xảy ra
}
