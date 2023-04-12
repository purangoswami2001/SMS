
<div class="dash-main-s-c">
<div class="dash-main-sidebar">
  <?php include"../application/view/student/sidebar.php"?>
</div>
<div class="dash-main-content-std">
<div class="card">
   <h3 style="color:green;text-align: center;" ><?php echo getMessage(); ?></h3>
	<div class="profile_img"><img class="image" src="/images/uploads/<?=$data['Data']['profile']?>"></div>
   <div class="profile-list-item"> 
    <p class="profile-title">Student Eno. : </p>
    <span style="width: 5px;"></span>
    <p class="profile-data"><?=' '.$data['Data']['eno']?></p>
  </div>
  <div class="profile-list-item">
    <p class="profile-title">First Name : </p>
    <span style="width: 5px;"></span>
    <p class="profile-data"><?=' '.$data['Data']['first_name']?></p>
  </div>
    <div class="profile-list-item">
    <p class="profile-title">Last Name : </p>
    <span style="width: 5px;"></span>
    <p class="profile-data"><?=' '.$data['Data']['last_name']?></p>
  </div>
    <div class="profile-list-item">
    <p class="profile-title">Date Of Barth : </p>
    <span style="width: 5px;"></span>
    <p class="profile-data"><?=' '.$data['Data']['dob']?></p>
  </div>
    <div class="profile-list-item">
    <p class="profile-title">Gender : </p>
    <span style="width: 5px;"></span>
    <p class="profile-data"><?=' '.$data['Data']['gender']?></p>
  </div>
    <div class="profile-list-item">
    <p class="profile-title">Email Address : </p>
    <span style="width:10px;"></span>
    <p class="profile-data"><?=' '.$data['Data']['email']?></p>
  </div>
   <div class="profile-list-item">
    <p class="profile-title">Father Name : </p>
    <span style="width: 5px;"></span>
    <p class="profile-data"><?=' '.$data['Data']['father_name']?></p>
  </div>
   <div class="profile-list-item">
    <p class="profile-title">Mother Name : </p>
    <span style="width: 5px;"></span>
    <p class="profile-data"><?=' '.$data['Data']['mother_name']?></p>
  </div>
  <div class="profile-list-item">
    <p class="profile-title">Contact No.     </p>
    <span style="width: 5px;"></span>
    <p class="profile-data"><?=' '.$data['Data']['mobile']?></p>
  </div>
   <div class="profile-list-item">
    <p class="profile-title">Address : </p>
    <span style="width:10px;"></span>
    <p class="profile-data"><?=' '.$data['Data']['address']?></p>
  </div>
  <div class="profile-list-item">
    <p class="profile-title">course: </p>
    <span style="width:10px;"></span>
    <p class="profile-data"><?=' '.$data['Data']['course_name']?></p>
  </div>
</div>
</div>
</div>
