function myFunction3() {
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
    $(".button4").click(function (){
        $("#main").empty();
        myFunction3();
        $("#main").empty();
        var id = $(this).attr('id');
        console.log(id);
        var categNr = $(this).parent().attr('id');
        var categ="game_pics_"+categNr;
        console.log(categ);
        var pic = "pic";
        $("#main").load("load-images-categ4.php", {
            picF: pic,
            idF: id,
            categF: categ
      });
    });
})