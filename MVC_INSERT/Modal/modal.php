<?php
include_once '../Modal/connect.php';
// tạo lớp chứa các lệnh liên quan đến database
class data_user{
    public function select_user($user){
    global $conn;
    $sql ="select * from user where username='$user'";
    //echo $sql ; kiểm tra câu lệnh sql
    $run = mysqli_query($conn,$sql);
    return $run;
    }

    public function register($user, $pass, $address, $avatar, $gender, $hobby){
        global $conn;
        $sql = "INSERT INTO user (username,password,address,avatar,gender,hobby) VALUES ('$user','$pass','$address','$avatar','$gender','$hobby')";
        $run = mysqli_query($conn,$sql);
        return $run;
    }

    // hiển thị tất cả dữ liệu trong bảng user
    public function select_all(){
        global $conn;
        $sql = "SELECT * FROM user";
        $run = mysqli_query($conn,$sql);
        return $run;
    }
}
