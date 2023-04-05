function changeBG(){
    
    var scrollValue= window.scrollY;
    var navbar=document.getElementById('navbar');
    console.log(scrollValue);
    if(scrollValue>20){
        navbar.classList.add('addcolor');
    }
    else{
        navbar.classList.remove('addcolor');

    }
}

window.addEventListener('scroll', changeBG);