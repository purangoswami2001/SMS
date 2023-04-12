            <div class="sidebar">
              <div class="popup-m">
                <p class="title">Sidebar</p>
                <svg onclick="sidebartoggel()" xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="512" height="512"><path d="M13.93,12L21.666,2.443c.521-.644,.422-1.588-.223-2.109-.645-.522-1.588-.421-2.109,.223l-7.334,9.06L4.666,.557c-1.241-1.519-3.56,.357-2.332,1.887l7.736,9.557L2.334,21.557c-.521,.644-.422,1.588,.223,2.109,.64,.519,1.586,.424,2.109-.223l7.334-9.06,7.334,9.06c.524,.647,1.47,.742,2.109,.223,.645-.521,.744-1.466,.223-2.109l-7.736-9.557Z"/></svg>
              </div>
           <ul class="sidebar-ul">
            <li class="sidebar-ul-li" ><a  <?php if($data['Title'] == 'profile'){ echo 'class="sidebar-a-click"';}?> href="/student/index ">Profile</a></li>
            <li class="sidebar-ul-li" ><a <?php if($data['Title'] == 'result'){ echo 'class="sidebar-a-click"';}?>  href="/student/result"> Result</a></li>
            <li class="sidebar-ul-li" ><a <?php if($data['Title'] == 'acadmiccalender'){ echo 'class="sidebar-a-click"';}?>  href="#" >Acadmic Calender</a></li>
            <li class="sidebar-ul-li" > <a  <?php if($data['Title'] == 'circular'){ echo 'class="sidebar-a-click"';}?> href="#" >Circular</a></li>
            <li class="dropdown-sidebar-ul-li" >
              <div class="side-menu-dropdown">
                <button onclick="myFunction('myDropdown-sp');" class="dropbtn">Setting <svg class="" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M24 24H0V0h24v24z" fill="none" opacity=".87"/><path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z"/></svg></button>
               <div id="myDropdown-sp" class="side-menu-dropdown-content">
               <a <?php if($data['Title'] =='profileupdate'){ echo 'class="sidebar-a-click"';}?> href="/student/profileupdate" >Update Profile </a>
               <a <?php if($data['Title'] == 'pswupdate'){ echo 'class="sidebar-a-click"';}?> href="/student/password">Change Password</a>
                </div>
               </div>
             </li>
              <li  class="sidebar-ul-li" ><a   style="color:red;" <?php if($data['Title'] == 'logout'){ echo 'class="sidebar-a-click"';}?> href="/student/logout ">Logout</a></li>
                </ul>
               </div>