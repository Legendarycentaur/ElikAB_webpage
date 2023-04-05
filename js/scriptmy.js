function changeBG(){
    
    var scrollValue= window.scrollY;
    var navbar=document.getElementById('menydelen');
    console.log(scrollValue);
    if(scrollValue>150){
        navbar.classList.add('addcolor');
    }
    else{
        navbar.classList.remove('addcolor');

    }
}

window.addEventListener('scroll', changeBG);