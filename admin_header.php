<?php
   //nhúng vào các trang quản trị
   if(isset($message)){
      foreach($message as $message){//in ra thông báo trên cùng khi biến message được gán giá trị từ các trang quản trị
         echo '
         <div class="message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>';
      }
   }
?>

<header class="header">

   <div class="flex">

      <a href="admin_page.php" class="logo">Quản lý</a>

      <nav class="navbar">
         <a href="admin_page.php">Trang chủ</a>
         <a href="admin_products.php">Bộ bài</a>
         <!-- <a href="admin_category.php">Thể loại</a> -->
         <a href="admin_orders.php">Đơn hàng</a>
         <a href="admin_users.php">Người dùng</a></a>
         <a href="admin_contacts.php">Tin nhắn</a>
         <a href="admin_statistical.php">Thống kê</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="account-box">
         <p>Tên người dùng : <span><?php echo $_SESSION['admin_name']; ?></span></p>
         <p>Email : <span><?php echo $_SESSION['admin_email']; ?></span></p>
         <a href="logout.php" class="delete-btn">Đăng xuất</a>
         <div><a href="login.php">Đăng nhập</a> | <a href="register.php">Đăng ký</a></div>
      </div>

   </div>

</header>