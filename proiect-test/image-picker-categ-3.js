function myFunction2() {
    var x = document.getElementById("hidden1");
    var y = document.getElementById("hidden");
    if(y.style.display === "block"){
        y.style.display = "none";
    }
    if (x.style.display === "none") {
      x.style.display = "block";
    }
}
$(document).ready(function(){
    var pic="";
    var id=0;
    var categNr=0;
    var categ="";
    var text=""
    $(".button3").click(function(){
        $("#main").empty();
        myFunction2();
        id = $(this).attr('id');
        categNr = $(this).parent().parent().attr('id');
    });
    $(".btnZodiac").click(function(){
        var idZ = $(this).attr('id');
        pic = "pic"+idZ;
        text = "text"+idZ;
        categ="game_pics_"+categNr;
        var title = $(this).html();
        console.log(title);
        $("#main").load("load-images-categ3.php", {
            picF: pic,
            textF: text,
            idF: id,
            categF: categ,
            titleF: title
      });
    })
})