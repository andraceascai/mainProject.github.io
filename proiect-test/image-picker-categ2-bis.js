function myFunction() {
    var x = document.getElementById("hidden");
    var y = document.getElementById("hidden1");
    if (y.style.display === "block") {
      y.style.display = "none";
    }
    if (x.style.display === "none") {
      x.style.display = "block";
  }
}

$(document).ready(function(){
    var pic="";
    var picNr=0;
    var id=0;
    var categNr=0;
    var categ="";
    $(".button2").click(function(){
        $("#main").empty();
        myFunction();
        id = $(this).attr('id');
        categNr = $(this).parent().parent().attr('id');
    });
    $(".buttonGender").click(function(){
        var id1 = $(this).attr('id');
        if(id1 == 1){
            picNr = Math.floor(Math.random() * 15) + 1;
        }else if(id1 == 2){
            picNr = Math.floor(Math.random() * 15) + 16;
        }
        pic  ="pic"+picNr;
        categ="game_pics_"+categNr;
        console.log(id, pic, categ);
        $("#main").load("load-images-categ2.php", {
            picF: pic,
            idF: id,
            categF: categ
      });
    });
})
