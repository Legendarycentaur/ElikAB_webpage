function switchnavbarcolor(){
var menybutton = document.getElementById("menu-toggle");
var navbar=document.getElementById('navbar');
var navbarmenulist = document.getElementById('övrenavmobil');

if (menybutton.checked==true){
    navbar.classList.add('addcolor');
    
}
else if (menybutton.checked==false){
    navbar.classList.remove('addcolor');
    
}
}

