<div class="header">
<div class="nav-container1">
    
    <div class="side-icon"></div>
    <div class = "flex">
    <img class="header-logo-img" src="/images/weblogo.png" alt="book" >
    <h1>Student Management</h1>
    <div class="space"></div>
    </div>
</div>
<div class=" nav-container">
        <ul class=" nav-top">
            <li ><a <?php if(isset($data['Title']) && $data['Title'] == 'home'){ echo 'class="nav-a-click"';}?> href="/home">Home</a></li>
            <li ><a <?php if(isset($data['Title']) && $data['Title'] == 'about'){ echo 'class="nav-a-click"';}?> href="/home/about" >About</a></li>
            <li ><a <?php if(isset($data['Title']) && $data['Title'] == 'contact'){ echo 'class="nav-a-click"';}?> href="/home/contact" >Contact</a></li>
            <li ><a <?php if(isset($data['Title']) && $data['Title'] == 'help'){ echo 'class="nav-a-click"';}?> href="/home/help" >Help</a></li>
        </ul>
    </div>
</div>  