const audio = document.querySelector('.audio')

const playBtn = document.querySelector('.player__button')

const progres = document.querySelector('.progres')

const progresBar = document.querySelector('.prog')

const img = document.querySelector('.player__button_img')

const prog_all = document.querySelector('.prog_all')
const mini_btn = document.querySelector('.mini_btn')
const player__title = document.querySelector('.player__title')
const soundname = "✨ Genshin Impact Main Theme ✨";

//Plya
function Play(){
    mini_btn.innerHTML = '♫ Stop ♫';
    audio.volume = 0.1;
    playBtn.classList.add('playing')
    img.src = './img/pause.png';
    audio.play();
}
function Pause(){
    mini_btn.innerHTML = '♫ Play ♫';
    playBtn.classList.remove('playing')
    img.src = './img/play.png';
    audio.pause();
}

playBtn.addEventListener('click',()=>{
    const isPlaying =  playBtn.classList.contains('playing');
    if (isPlaying){
        Pause();
    }
    else{
        Play();
    }
})

function updateProgress(e){
    const {duration,currentTime} = e.srcElement;
    const progressPersent = (currentTime / duration) * 100;
    progresBar.style.width=  `${progressPersent}%`;
    a = String(Math.round(currentTime)%60);
    if(a.length<2)
        a = "0"+a;
    b = String(Math.round(duration)%60);
    if(b.length<2)
        b = "0"+b;
    player__title.innerHTML = soundname +'('+ Math.round(currentTime/60) + ':'+ a +'/'+ Math.round(duration/60) + ':'+ b +')';
}
audio.addEventListener('timeupdate',updateProgress)


function setProgress(e){
    const width = this.clientWidth;
    const clickX = e.offsetX;
    const duration = audio.duration;
    audio.currentTime = (clickX/width * duration);
}
prog_all.addEventListener('click',setProgress)

