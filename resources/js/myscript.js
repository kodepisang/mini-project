function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
}

function toggle(){
    let lebar = document.getElementById("mySidenav").style.width;
    // console.log(lebar);
    if(lebar ==='undefined' || lebar === '' || lebar ===null){
        openNav()
    }else{
        if (lebar ==="250px" ) {
            closeNav();
        }else{
            openNav()
        }
    }
}

document.getElementById ("toggleNav").addEventListener("click", toggle, false);

// document.getElementById ("openNav").addEventListener("click", openNav, false);
// document.getElementById ("closeNav").addEventListener("click", closeNav, false);

// console.log('scrip jalan 234');
