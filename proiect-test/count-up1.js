function start(){
    var time = document.getElementById("timer").innerHTML;
    var vect = time.split(":");
    var h = vect[0];
    var m = vect[1];
    var s = vect[2];
  
    if(s == 59){
      if(m == 59){
        h++;
        m=0;
        if(h < 10) h = "0" + h;
      }else{
        m++;
      }
      if(m < 10) m = "0" + m;
      s = 0;
    }else{
      s++;
      if(s < 10) s = "0" + s;
    }
    if( (m == 30 && s == 0)|| (m == 0 && h > 0 && s == 0)){
        alert("30 minutes have passed!!");
    }
    document.getElementById("timer").innerHTML = h + ":" + m + ":" + s;
    setTimeout(start, 1000);    
}
function stopGif(){
  new Freezeframe();
}
function zoomIn() {
  document.querySelector("#zoom").classList.toggle('zoom-large');
}