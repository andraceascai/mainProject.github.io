function myFunction1() {
    var x = document.getElementById("hidden");
    var y = document.getElementById("hidden1");
    if (x.style.display === "block") {
      x.style.display = "none";
    }
    if (y.style.display === "block") {
        y.style.display = "none";
    }
}
$(document).ready(function(){
    var picNr = 0;
    var pic = "";
    $(".button").click(function (){
        myFunction1();
        $("#main").empty();
        let id = $(this).attr('id');
        let categNr = $(this).parent().parent().attr('id');
        let categ="game_pics_"+categNr;
        picNr = Math.floor(Math.random() * 20) + 1;
        pic  ="pic"+picNr;
        $("#main").load("load-images.php", {
              picF: pic,
              idF: id,
              categF: categ
        });
    });
})