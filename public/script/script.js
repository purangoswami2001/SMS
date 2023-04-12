function validateForm() {
    var username = document.forms["loginForm"]["username"].value;
    var password = document.forms["loginForm"]["password"].value;
    if (username == '' && password == '') {
        alert("Please enter username and password.");
        return false;
    }
    if (username == "") {
        alert("Please enter username.");
        return false;
    }
    if (password == "") {
        alert("Please enter password.");
        return false;
    }

}

function myFunction(Id) {
    document.getElementById(Id).classList.toggle("show");
}

function moreview(Id) {
    document.getElementById(Id).classList.toggle("active-svg");
}




function valid() {
    if (document.chngpwd.opwd.value == "") {
        alert("Old Password Filed is Empty !!");
        document.chngpwd.opwd.focus();
        return false;
    } else if (document.chngpwd.npwd.value == "") {
        alert("New Password Filed is Empty !!");
        document.chngpwd.npwd.focus();
        return false;
    } else if (document.chngpwd.cpwd.value == "") {
        alert("Confirm Password Filed is Empty !!");
        document.chngpwd.cpwd.focus();
        return false;
    } else if (document.chngpwd.npwd.value != document.chngpwd.cpwd.value) {
        alert("Password and Confirm Password Field do not match  !!");
        document.chngpwd.cpwd.focus();
        return false;
    }
    return true;
}

function sidebartoggel() {
    var sidebar = document.querySelector(".dash-main-sidebar");
    sidebar.classList.toggle("active");
    document.querySelector("body").classList.toggle("scrollOff");
}

