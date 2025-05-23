<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ĐĂNG KÍ THÔNG TIN</title>
    <link rel="stylesheet" href="/wPHP/bootstrap-5.3.6-dist/bootstrap-5.3.6-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/wPHP/Assets/Css/style.css">
   
</head>
<body>
    <div class="container bg-success p-2" style="--bs-bg-opacity: .5;">
        <div class="row  mt-5">
            <table class="table table-success table-striped d-flex justify-content-lg-center " >
                <h2 class="text-center">ĐĂNG KÍ THÔNG TIN</h2>
                <form action="controller.php" method="Post" enctype="multipart/form-data" class="rounded-2">
                    <tr>
                        <td><label for="name">Họ và tên:</label></td>
                        <td><input type="text" name="txtuser" id="name" required>(*)</td>
                    </tr>
                    <tr>
                        <td><label>Password:</label></td>
                        <td><input type="password" name="txtpass" id="password" required>(*)</td>
                    </tr>
                    <tr>
                        <td><label>RE_password: </label></td>
                        <td><input type="password" name="txtre_pass" id="re_password" required>(*)</td>
                    </tr>
                    <tr>
                        <td><label >Địa chỉ:</label></td>
                        <td>
                            <select name="txtaddress" id="address">
                                <option value="Hà Nội">Hà Nội</option>
                                <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                                <option value="Đà Nẵng">Đà Nẵng</option>
                                <option value="Cần Thơ">Cần Thơ</option>
                                <option value="Nha Trang">Nha Trang</option>
                                <option value="Đà Lạt">Đà Lạt</option>
                                <option value="Hải Phòng">Hải Phòng</option>
                                <option value="Vũng Tàu">Vũng Tàu</option>
                                <option value="Quy Nhơn">Quy Nhơn</option>
                                <option value="Phan Thiết">Phan Thiết</option>
                                <option value="Hạ Long">Hạ Long</option>
                                <option value="Huế">Huế</option>
                                <option value="Nam Định">Nam Định</option>
                                <option value="Thái Nguyên">Thái Nguyên</option>
                                <option value="Bắc Ninh">Bắc Ninh</option>
                                <option value="Ninh Bình">Ninh Bình</option>    
                                <option value="Thái Bình">Thái Bình</option>
                                <option value="Hưng Yên">Hưng Yên</option>
                                <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td><label >Avatar:</label></td>
                        <td><input type="file" name="txtfile" id="avatar" required></td>
                    </tr>
                    <tr>
                        <td><label >Giới tính:</label></td>
                        <td>
                            <input type="radio" name="txtgen" id="male" value="male" required>
                            <label for="male">Nam</label>
                            <input type="radio" name="txtgen" id="female" value="female" required>
                            <label for="female">Nữ</label>
                        </td>
                    </tr>
                    <tr>
                        <td>Hobby:</td>
                        <td>
                            <input type="checkbox" name="txtcheck[]" id="reading" value="reading">
                            <label for="reading">Đọc sách</label>
                            <input type="checkbox" name="txtcheck[]" id="traveling" value="traveling">
                            <label for="traveling">Du lịch</label>
                            <input type="checkbox" name="txtcheck[]" id="gaming" value="gaming">
                            <label for="gaming">Chơi game</label>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Đăng ký" name="txtsub_register"></td>
                        <td><a href="user_select.php">Hiển thị</a></td>
                    </tr>
                </form>
            </table>
        </div>
    </div>
</body>
</html>