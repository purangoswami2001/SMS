
<div class="dash-main-content-std-home">
  <div class="center">
  <div class="main">
    <p class="sign" align="center">Student Login</p>
    <form name="loginForm" class="form1" action="/student/validate" onsubmit="return validateForm()" method="post">
         <h5 style="color: red;text-align: center;"><?php echo getMessage(); ?> </h5></br>
      <input class="un " type="text" align="center" name="enroll_number" placeholder="Enrollment Number" >
      <input class="pass" type="password" align="center" name="password" placeholder="Password" >
      <button class="submit" type="submit">Login</button>
       </form> 
       </div>
     </div>
       </div>

