(function (){
    const buger = document.querySelector('.bugar');
    const menu = document.querySelector('.sidebar__bugar');
    buger.addEventListener('click',() =>{
        buger.classList.toggle('shy');
        if(menu.style.visibility == "visible"){
            menu.style.visibility = "hidden";
        }else{
            menu.style.visibility = "visible";
        }
    });
}());