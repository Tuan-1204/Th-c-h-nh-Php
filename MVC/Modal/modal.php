<!-- thêm dữ liệu -->
 <?php
include_once '../Modal/connect.php'; // chèn file kết nối
class data{
    public function insert_contact($name, $email, $phone, $mess){
        global $conn;
      $sql ="insert into contact(Name, Email, Phone , Mess) 
      values ('$name', '$email', '$phone', '$mess')";
       $run = mysqli_query($conn, $sql);
       return $run;
    }
}

function select_all(){
    global $conn;
    $sql = "select * from contact"; // laay tất cả dữ liệu trong bảng contact
    $run = mysqli_query($conn, $sql);
    return $run;
}

// hàm xóa dữ liệu
function delete_contact($id){
    global $conn;
    $sql = "delete from contact where ID_Contact = '$id'"; // xóa dữ liệu trong bảng contact
    $run = mysqli_query($conn, $sql);
    return $run;
}

// cập nhật dữ liệu
function select_contact_id($id){
    global $conn;
    $sql = "select * from contact where ID_Contact = '$id'"; // lấy dữ liệu theo id
    $run = mysqli_query($conn, $sql);
    return $run;
}

function update_contact($id, $name, $email, $phone, $mess){
    global $conn;
    $sql = "update contact set Name = '$name',
     Email = '$email',
      Phone = '$phone',
       Mess = '$mess' where ID_Contact = '$id'"; // cập nhật dữ liệu trong bảng contact
    $run = mysqli_query($conn, $sql);
    return $run;
}
?>