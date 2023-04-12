
<div class="dash-main-s-c">
<div class="dash-main-sidebar">
  <?php include"../application/view/student/sidebar.php"?>
</div>
<div class="dash-main-content-std">
</br>
  <div class="center">
  <div class="main">
    <p class="sign" align="center">Update Password</p>
  </br>
      <h3 style="color: red;text-align: center;"> <?php echo getMessage(); ?></h3>
    <form name="chngpwd" class="form1" action="/student/passwordupdate" method="post" onSubmit="return valid();">
      <input class="un" type="password" align="center" name="currentpass" id="opwd" placeholder="Password" >
      <input class="un" type="password" align="center" name="newpass" id="npwd"  placeholder="New Password" >
      <input class="un" type="password" align="center" name="confirmpass" id="cpwd" placeholder="Confirm Password" >
      <input class="submit" align="center" type="Submit" value="Submit">
       </form> 
    </div>
  </div>
  </div>
  </div>