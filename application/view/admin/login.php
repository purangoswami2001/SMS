
<div class="dash-main-content-std-home">
  </br></br></br>
  <div class="main">
    <p class="sign" align="center">Admin Login</p>
    <form name="loginForm" class="form1" action="/admin/validate" onsubmit="return validateForm()" method="post">
         <h5 style="color: red;text-align: center;"><?php echo getMessage();?></h5></br>
      <input class="un " type="text" align="center" name="username" placeholder="Username" >
      <input class="pass" type="password" align="center" name="password" placeholder="Password" >
      <button class="submit" type="submit">Login</button>
       </form> 
       </div>
       </div>

