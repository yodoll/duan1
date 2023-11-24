<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <link rel="stylesheet" href="../css/auth.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="username" placeholder="VD: Nguyễn Văn A" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="phone" placeholder="VD: 0123456789" required>
          </div>
          <div class="input-box">
            <span class="details">Home Town</span>
            <input type="text" name="address" placeholder="VD: Bắc Ninh" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email" placeholder="email@gmail.com" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" name="password" placeholder="Mật khẩu của bạn" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="password" name="cpassword" placeholder="Nhập lại mật khẩu của bạn" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Register">
          <div style="padding-top: 15px;">
            <span>Bạn đã có mật khẩu? <a style="text-decoration: none; font-weight: 500;" href="login.php">Đăng nhập</a></span>
          </div>
        </div>
      </form>
    </div>
  </div>

</body>
</html>