
<div class="dash-main-s-c">
<div class="dash-main-sidebar">
  <?php include"../application/view/student/sidebar.php"?>
</div>
<div class="dash-main-content-std">
  <div class="center">
  <div class="main">
    <p class="sign" align="center">Upload Profile</p>
    <form name="loginForm" class="form1" action="/student/upload"enctype="multipart/form-data" method="post">
<h3 style="color: red;text-align: center;"><?php echo getMessage(); ?></h3>
</br>
      <input class="un" type="file" align="center" name="profile" placeholder="Upload profile" >
      <input class="submit" align="center" type="submit" value="Submit">
      <p class="forgot" align="center"><a href="#"></p>
       </form> 
    </div>
    </div>
  </div>
  </div>
