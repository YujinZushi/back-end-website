//Hamburger menu
var x = document.getElementById("hamburger");
x.addEventListener("click", myFunction);
function myFunction() {
  var element = document.getElementById("nav");
  element.classList.toggle("open");
  x.classList.toggle("change");
}

//Audio
function SetVolume() {
    var elems = document.getElementsByTagName('audio');
    for (var i = 0; i<elems.length; i++) {
      elems[i].volume = 0.4;
    }
}
SetVolume();

document.addEventListener('play', function(e){
  var audios = document.getElementsByTagName('audio');
  for(var i = 0, len = audios.length; i < len;i++){
      if(audios[i] != e.target){
          audios[i].pause();
      }
  }
}, true);
