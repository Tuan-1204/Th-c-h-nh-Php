<?php
include_once '../Modal/modal.php';
$data = new data_user(); // gọi đến lớp data_user trong trang modal.php
if(isset($_POST['txtsub_register']))     // kiểm tra xem có submit không
{
    // 1.Hàm thực hiện upload file
    move_uploaded_file($_FILES['txtfile']['tmp_name'], '../upload/'.$_FILES['txtfile']['name']);

    // 2.thực hiện lấy dữ liệu sở thích
    $check_sothich="";
    foreach($_POST['txtcheck'] as $i_check) // duyệt mảng bằng biến duyệt
    {
        $check_sothich .= $i_check . ","; // duyệt đến đâu nối vào chuỗi rỗng ban đầu
    }

    // 3. kiểm tra mật khẩu trùng nhau
    if($_POST['txtpass'] != $_POST['txtre_pass'])
    {
        echo "<script>alert('Mật khẩu không trùng nhau')
        window.location.='Register.php';
        </script>";
    }

    // 4.sử dụng hàm emty để kiểm tra xem có rỗng không
    else if(empty($_POST['txtuser']) || empty($_POST['txtpass'])){
        echo"<script>alert('Bạn chưa nhập đủ thông tin')
        window.location='Register.php';
        </script>";
    }
    else{
        // 5.kiểm tra xem tên đăng nhập đã tồn tại chưa bằng hàm select_user
        $select_user =$data->select_user($_POST['txtuser']);
        // nếu user chưa có thì thực hiện đăng ký
        if(mysqli_num_rows($select_user) == 0)
        {
            // 6. thực hiện gọi hàm register để thực hiện đăng ký
            $register = $data->register($_POST['txtuser'],
            $_POST['txtpass'],
            $_POST['txtaddress'],
            $_FILES['txtfile']['name'],
            $_POST['txtgen'],$check_sothich);
            if($insert)
            {
                echo"Thông tin của bạn: " ."<br>".
                "Tên đăng nhập: " .$_POST['txtuser'] ."<br>".
                "Mật khẩu: " .$_POST['txtpass'] ."<br>".
                "Địa chỉ: " .$_POST['txtaddress'] ."<br>".
                "Avatar: " .$_FILES['txtfile']['name'] ."<br>".
                "Giới tính: " .$_POST['txtgen'] ."<br>".
                "Sở thích: " . $check_sothich ."<br>";
                echo "<script>alert('Đăng ký thành công')
                window.location='login.php';
                </script>";
            }
            else{
                echo "<script>alert('Bạn không thể đăng ký')
                window.location='login.php';
                </script>";
            }
        }
        else{
            echo "<script>alert('Tên đăng nhập đã tồn tại')
            window.location='Register.php';
            </script>";
        }

    }

}

// lệnh chuyển trang 
// header("location:'Register.php'); chuyển trang
// window.location='Register.php';  thông báo rồi mới chuyển trang
?>