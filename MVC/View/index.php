<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <link rel="stylesheet" href="../bootstrap-5.3.6-dist/bootstrap-5.3.6-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Assets/Css/style.css">
</head>
<body>


<div class="container ">
    <div class="row mt-5">
        <div class="col-md-6 mx-auto  ">
            <form action="" method="post" class="d-flex flex-column align-content-between">
                <input type="text" name="txtname" class="form-control" placeholder="Full name" required value="<?php echo $se_con['Name']?>"/>
                <br>
                <input type="email" name="txtemail" class="form-control" placeholder="Email" required value="<?php echo $se_con['Email']?>"/>
                <br>
                <input type="text" name="txtphone" class="form-control" placeholder="Phone" required value="<?php echo $se_con['Phone']?>"/>
                <br>
                <textarea name="txtmessage" id="" class="form-control" placeholder="Message" required><?php echo $se_con['Mess']?></textarea>
                <br>
                <button type="submit"  name="txtsub" class="btn btn-primary">Send</button>
            </form>
        </div>
    </div>
</div>


<!-- hiển thị dữ liệu -->

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
  foreach($select as $se_pro)
  {
      ?>
      <tr>
          <td><?php echo $se_pro['ID']; ?></td>
          <td><?php echo $se_pro['Name']; ?></td>
          <td><?php echo $se_pro['Email']; ?></td>
          <td><?php echo $se_pro['Phone']; ?></td>
          <td><?php echo $se_pro['Mess']; ?></td>
          <td><img src="images/<?php echo $se_pro['Picture']; ?>" alt="" width="50%" height="50%"></td>
            <td>
                <a href="delete.php?id=<?php echo $se_pro['ID_Contact']; ?>" class="btn btn-danger">Delete</a>
                <a href="update.php?id=<?php echo $se_pro['ID_Contact']; ?>" class="btn btn-warning">Update</a>
            </td>
            <td><?php echo $se_pro['Category']; ?></td>
      </tr>
      <?php
  }
    ?>
</tbody>
</table>
<script src="../bootstrap-5.3.6-dist/bootstrap-5.3.6-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>