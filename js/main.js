// const audio = document.querySelector('.audio'),
//     playbtn = document.querySelector('.PlayBtn'),
//     pausebtn = document.querySelector('.PauseBtn'),
//       noize = document.querySelector('.noize');

// function Play(){
//         audio.play();
// }
// function Pause(){
//     audio.pause();
// }

// playbtn.addEventListener('click',() =>{Play()});

// pausebtn.addEventListener('click',() =>{Pause()});

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

