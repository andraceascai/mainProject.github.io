<?php
    include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Play time</title>
    <link rel="stylesheet" href="stylle.css">
    <link rel="stylesheet" href="scrollbar.css">
    <script src="https://code.jquery.com/jquery-git.js"></script>
    <script src="image-picker-categ1.js" defer></script>
    <script src="image-picker-categ2-bis.js" defer></script>
    <script src="image-picker-categ-3.js" defer></script>
    <script src="image-picker-categ4.js" defer></script>
    <script src="count-up1.js" defer></script>
    <script src="freezeframe.min.js"></script>
</head>
<body>
    <div class="container">

        <div class="stanga">
            <div id="categ3" class="scrollbar" >
             <div class="pets"> 
                    <button id="1" class="button3">
                        <p>What pet should you get based on your zodiac sign?</p>
                        <img class="freezeframe" src="https://media0.giphy.com/media/KEZRMZ6NdioQvBbyRu/giphy.gif?cid=ecf05e47xftmoncfjwy63yihh881tl9o5p98bx6twy8m6baq&rid=giphy.gif" style="width: 100%;">
                    </button>
                </div>

                <div class="pokemon"> 
                    <button id="2" class="button3">
                        <p>What Pokemon are you based on your zodiac sign?</p>
                        <img class="freezeframe" src="https://media3.giphy.com/media/TsV9Sr9AG2Ne8/giphy.gif?cid=ecf05e47dnt8krksabgwx9o6vmugidt2uajn4z6t0sr7i8sy&rid=giphy.gif" style="width: 100%;">
                    </button>
                </div>

                <div class="zodiac-matches"> 
                    <button id="3" class="button3">
                        <p>12 Zodiac matches that make the best couples!</p>
                        <img class="freezeframe" src="https://media2.giphy.com/media/YUabFlkhxBQtKLa30N/giphy.gif?cid=ecf05e471c11ed9420b700b6403854e9e9bcd7504fd9a031&rid=giphy.gif" style="width: 100%;">
                    </button>
                </div>

                <div class="date-night"> 
                    <button id="4" class="button3">
                        <p>What date night idea you should try based on your zodiac sign!</p>
                        <img class="freezeframe" src="https://media0.giphy.com/media/XvZ8PJ4DSqzSM/giphy.gif?cid=ecf05e47469xvafgnps2l98ytd2d8xx7r9ijskd2mrxumz4u&rid=giphy.gif" style="width: 100%;">
                    </button>
                </div>

                <div class="virtual-game"> 
                    <button id="5" class="button3">
                        <p>What virtual game should you play based on your zodiac sign!</p>
                        <img class="freezeframe" src="https://media0.giphy.com/media/94DBMnpVEbJLy/giphy.gif?cid=ecf05e47f789e7e6aa1ebe3b7d4e7670806ade0aafb17bc2&rid=giphy.gif" style="width: 100%;">
                    </button>
                </div>

                <div class="super-heroes"> 
                    <button id="6" class="button3">
                        <p>What super hero are you based on your zodiac sign?</p>
                        <img class="freezeframe" src="https://media4.giphy.com/media/K6XVjfH1zp5yE/giphy.gif?cid=ecf05e47bb43654785910e0f19a93def237bb9308be2dcc1&rid=giphy.gif" style="width: 100%;">
                    </button>
                </div>

                <div class="animal"> 
                    <button id="7" class="button3">
                        <p>What animal are you based on your zodiac sign?</p>
                        <img class="freezeframe" src="https://media1.giphy.com/media/XjwTV48kZwk1y/giphy.gif?cid=ecf05e47460e9004e88229b64ba924593044f93903cbfd91&rid=giphy.gif" style="width: 100%;">
                    </button>
                </div>

                <div class="cities"> 
                    <button id="8" class="button3">
                        <p>What city you should visit based on your zodiac sign!!</p>
                        <img class="freezeframe" src="https://media1.giphy.com/media/fniVO5yA3ddAq6A19V/giphy.gif?cid=ecf05e471c4a34e48e48c03271e55300fb011ea59a108c5f&rid=giphy.gif" style="width: 100%;">
                    </button>
                </div>

                <div class="super-powers"> 
                    <button id="9" class="button3">
                        <p>What super power you are based on your zodiac sign!!</p>
                        <img class="freezeframe" src="https://i.pinimg.com/originals/a9/73/81/a973812d8aa84593342bd26a1f696ee6.gif" style="width: 100%;">
                    </button>
                </div>

                <div class="college-majors"> 
                    <button id="10" class="button3">
                        <p>The College Major your sign wants you to declare</p>
                        <img class="freezeframe" src="https://media3.giphy.com/media/fhAwk4DnqNgw8/giphy.gif?cid=ecf05e4745802d6b3e1fe1c338e1b5d0e5cc23b8e293e1ac&rid=giphy.gif" style="width: 100%;">
                    </button>
                </div>
             </div>

            <div id="categ4" class="scrollbar">
               <button id="1" class="button4">
                        <p>Signs as eye colors!</p>
                        <img class="freezeframe" src="https://media2.giphy.com/media/xUPGcspGQxhyreEX3q/giphy.gif?cid=ecf05e47e0154468dfa65983c59417ed5e9368ba08c35a87&rid=giphy.gif" style="width: 100%;">
               </button>
               <button id="2" class="button4">
                        <p>Signs as kittens!</p>
                        <img class="freezeframe" src="https://media0.giphy.com/media/9gISqB3tncMmY/giphy.gif?cid=ecf05e4792b0806db419d8e4105866a51d2448837378ba2f&rid=giphy.gif" style="width: 100%;">
               </button>
               <button id="3" class="button4">
                        <p>Signs as tattoos!</p>
                        <img class="freezeframe" src="https://media0.giphy.com/media/xUOwG5xjkc2lQp6TBe/giphy.gif?cid=ecf05e47afah9wy5a0iky76iwxike2lqxhm59we9tcfjqcuk&rid=giphy.gif" style="width: 100%;">
               </button>
               <button id="4" class="button4">
                        <p>Signs as soups!</p>
                        <img class="freezeframe" src="https://media0.giphy.com/media/3ohhwqJFVp5uhesBaw/giphy.gif?cid=ecf05e47e8a383789e6cff7694f3046a1ec8daa7bd22d04e&rid=giphy.gif" style="width: 100%;">
               </button>
               <button id="5" class="button4">
                        <p>Best pasta shape for your sign!</p>
                        <img class="freezeframe" src="https://media2.giphy.com/media/5J3l6o7fNj7LG/200w.webp?cid=ecf05e47gyevlolo12yqpfyqnng261z9dwwlfdt52704gu6f&rid=200w.webp" style="width: 100%;">
               </button>
               <button id="6" class="button4">
                        <p>Signs as french fries!</p>
                        <img class="freezeframe" src="https://media1.giphy.com/media/622RBpIlB0HxTiUD8u/giphy.gif?cid=ecf05e47jkdgdscw2rvm4po1cb6l710tax7j40ytk84zapoa&rid=giphy.gif" style="width: 100%;">
               </button>
               <button id="7" class="button4">
                        <p>Signs as cakes!</p>
                        <img class="freezeframe" src="https://media0.giphy.com/media/TgJ7RVHbCybpdNqp1t/giphy.gif?cid=ecf05e47zunav7m1bu4r7g710vuwycx64nuy8af0cfl1vs9j&rid=giphy.gif" style="width: 100%;">
               </button>
               <button id="8" class="button4">
                        <p>Signs as Starbucks drinks!</p>
                        <img class="freezeframe" src="https://media0.giphy.com/media/qk7PHVmHOAx7G/giphy.gif?cid=ecf05e47q2yse4vawfgqxxorswzv4naxe4ctd1kfyxp704ey&rid=giphy.gif" style="width: 100%;">
               </button>
               <button id="9" class="button4">
                        <p>Signs as Harry Potter characters!</p>
                        <img class="freezeframe" src="https://media1.giphy.com/media/NxLWZYEM4l5ug/giphy.gif?cid=ecf05e47f0f5f988581c387817d38f4a2d07797c626e0237&rid=giphy.gif" style="width: 100%;">
               </button>
               <button id="10" class="button4">
                        <p>Signs as Disney princesses!</p>
                        <img class="freezeframe" src="https://media3.giphy.com/media/42ZPYptEGgxaM/giphy.gif?cid=ecf05e47ztejaqjhhko87hia6blxyjkymmozg5mzg4wxzmbd&rid=giphy.gif" style="width: 100%;">
               </button>
            </div>
        </div>

        <div class="mijloc">
            <div id="sus">
                <p><span id="timer">00:00:00</span>  
                 <button id="time" onclick="start()">Start tracking time</button>
                 <button id="stop" onclick="stopGif()">Stop the gif animation</button>
                </p>
                
            </div>
            <div id="main">
              <h1 class="slide-in-elliptic-top-fwd" id="h1">Hello and welcome I hope you have a great time trying all these games!</h1>
            </div>
            <div class="magi">
             <div id="hidden" style="display:none;">
                      <span style="margin-top: 1em; font-weight:bold; color:bisque;">Choose one:</span>
                      <button class="buttonGender" id="1" style="background-image: url('https://media4.giphy.com/media/l4KhNBgG8RaItFkDS/200w.webp?cid=ecf05e478xbvg8gjpx7bf01t7woxrgmzvip8uamserirgimx&rid=200w.webp');">Female</button>
                      <button class="buttonGender" id="2" style="background-image: url('https://media2.giphy.com/media/5vidmSHUsyoybSYNN0/giphy.gif?cid=ecf05e476c086c4a12f38fb27f81583c425ef5534ecfca0d&rid=giphy.gif');">Male</button>
             </div>
             <div id="hidden1" style="display:none;">
                    <span style="margin-top: 1em; font-weight:bold; color:bisque;">Choose one:</span> 
                    <button class="btnZodiac" id="1">Aries</button>
                    <button class="btnZodiac" id="2">Taurus</button>
                    <button class="btnZodiac" id="3">Gemini</button>
                    <button class="btnZodiac" id="4">Cancer</button>
                    <button class="btnZodiac" id="5">Leo</button>
                    <button class="btnZodiac" id="6">Virgo</button>
                    <button class="btnZodiac" id="7">Libra </button>
                    <button class="btnZodiac" id="8">Scorpio </button>
                    <button class="btnZodiac" id="9">Sagittarius </button>
                    <button class="btnZodiac" id="10">Capricorn </button>
                    <button class="btnZodiac" id="11">Aquarius </button>
                    <button class="btnZodiac" id="12">Pisces </button>
            </div>
            </div>
            
        </div>
        
        <div class="dreapta">

            <div id="categ1" class="scrollbar">

                <div class="pickup-line"> 
                    <button id="1" class="button">
                        <p>What pick up line yo use to impress your crush</p>
                        <img class="freezeframe" src="https://media4.giphy.com/media/EU1obAC38GuWI/giphy.gif?cid=ecf05e47feyp4loh6quuryxlsg9m3mc55i86eq5krnmizdhf&rid=giphy.gif" style="width: 100%;">
                    </button>
                </div>

                <div class="babies"> 
                    <button id="2" class="button">
                        <p>How your future baby will look like</p>
                        <img class="freezeframe" src="https://media2.giphy.com/media/7iX79UnQJxAyI/giphy.gif?cid=ecf05e476f3cd31361b900fffc240599a67f7e03324039ba&rid=giphy.gif" style="width: 100%;">
                    </button>
                </div>

                <div class="houses"> 
                    <button id="3" class="button">
                        <p>How your future house will look like</p>
                        <img class="freezeframe" src="https://media3.giphy.com/media/l0IylQoMkcbZUbtKw/giphy.gif?cid=ecf05e47gnq15xxsyfvca633u7h0pt1rhap989ppeaatd2lj&rid=giphy.gif" style="width: 100%;">
                    </button>
                </div>

                <div class="me-also-me"> 
                    <button id="4" class="button">
                        <p>What "me, also me" meme are you?</p>
                        <img class="freezeframe" src="https://media3.giphy.com/media/3oriNSf2iLjMVO7dao/giphy.gif?cid=ecf05e47h5mfwkivng35ejlm3mdr75nai50vlvhxuyhfwh65&rid=giphy.gif" style="width: 100%;">
                    </button>
                </div>

                <div class="xmas-gifts"> 
                    <button id="5" class="button">
                        <p>What gift you will get for Christmas this year</p>
                        <img class="freezeframe" src="https://media2.giphy.com/media/UdoR9wXgekTWo/giphy.gif?cid=ecf05e479ac0ff7d9dec333e741bab27684ebcb6b7a629dc&rid=giphy.gif" style="width: 100%;">
                    </button>
                </div>

                <div class="birthday-cakes"> 
                    <button id="6" class="button">
                        <p>How your birthday cake will look like for your next anniversary</p>
                        <img class="freezeframe" src="https://media0.giphy.com/media/3oKIPidnxHJQ3SuwwM/giphy.gif?cid=ecf05e47by7ijaurdx9idfu0metwav6hgailylrnvas3db8h&rid=giphy.gif" style="width: 100%;">
                    </button>
                </div>

                <div class="dinner-lunch"> 
                    <button id="7" class="button">
                        <p>Dinner or lunch ideas for when you can't decide what to eat</p>
                        <img class="freezeframe" src="https://media0.giphy.com/media/puZXMUoVYlck/giphy.gif?cid=ecf05e475cu7t7dhjzoefhtf0mk76dd3ziy0bib9sz4i43yj&rid=giphy.gif" style="width: 100%;">
                    </button>
                </div>

                <div class="programmer-jokes"> 
                    <button id="8" class="button">
                        <p>Funny jokes and situations only a programmer will understand!</p>
                        <img class="freezeframe" src="https://media3.giphy.com/media/13HgwGsXF0aiGY/giphy.gif?cid=ecf05e47d3736d3710e295a0b9aea9dc1d559506969acebd&rid=giphy.gif" style="width: 100%;">
                    </button>
                </div>

                <div class="cereals"> 
                    <button id="9" class="button">
                        <p>What type of cereal are you based on your personality?</p>
                        <img class="freezeframe" src="https://media4.giphy.com/media/3o85xKRIokv92FRo52/giphy.gif?cid=ecf05e47n3oter3t2dfxzofnkcyst142stx6za4nd8ejez52&rid=giphy.gif" style="width: 100%;">
                    </button>
                </div>

                <div class="students"> 
                    <button id="10" class="button">
                        <p>What type of student are you?</p>
                        <img class="freezeframe" src="https://media1.giphy.com/media/LNVS7w1fxlCvu/giphy.gif?cid=ecf05e4754vr1dokyk7iag434jkgq1k70oceiu99sircov55&rid=giphy.gif" style="width: 100%;">
                    </button>
                </div>

            </div>
            <div id="categ2" class="scrollbar">
               <div class="old-ppl"> 
                    <button id="1" class="button2">
                        <p>How would you look like old</p>
                        <img class="freezeframe" src="https://media0.giphy.com/media/Xoyp2IEpUSp2CsQuY7/giphy.gif?cid=ecf05e47fdfu5mqxx9suwymm8bjas7p78veezovutgafl6l6&rid=giphy.gif" style="width: 100%;">
                    </button>
                </div>
                <div class="tattoos"> 
                    <button id="2" class="button2">
                        <p>What funny tattoo you should get</p>
                        <img class="freezeframe" src="https://media2.giphy.com/media/6vZX4CNWwlW36/giphy.gif?cid=ecf05e47120f8b559007886471576e9a00b6ef637e5dabce&rid=giphy.gif" style="width: 100%; height:40%;">
                    </button>
                </div>

                <div class="halloween"> 
                    <button id="3" class="button2">
                        <p>What Hallowenn costume you'll wear this year</p>
                        <img class="freezeframe" src="https://media0.giphy.com/media/3o6ZsZP7INxcZ4dyrS/giphy.gif?cid=ecf05e47637166ff1f09a6b27fc096cfabb02f1fdec38033&rid=giphy.gif" style="width: 100%; height:40%;">
                    </button>
                </div>

                <div class="boy-txting-girl-meme"> 
                    <button id="4" class="button2">
                        <p>How would your conversation with your ex look like</p>
                        <img class="freezeframe" src="https://media2.giphy.com/media/l0HlHlV6OXkzE1EQM/giphy.gif?cid=ecf05e47wsgoyn7j3qiwrowrjzanq18pwkmbf1icaw6hcrg4&rid=giphy.gif" style="width: 100%; height:40%;">
                    </button>
                </div>

                <div class="past-lives"> 
                    <button id="5" class="button2">
                        <p>Who you were in your past life and how you died!</p>
                        <img class="freezeframe" src="https://thumbs.gfycat.com/FirmSilverBlowfish-small.gif" style="width: 100%; height:40%;">
                    </button>
                </div>

                <div class="festival-costumes"> 
                    <button id="6" class="button2">
                        <p>What festivat outfit suits you the most?</p>
                        <img class="freezeframe" src="https://media2.giphy.com/media/cJfrR2xAXRgVNXhGKd/giphy.gif?cid=ecf05e47dv0k75rfhy10u7lrsw6t9bnlyppefkn5zodj261k&rid=giphy.gif" style="width: 100%; height:40%;">
                    </button>
                </div>

                <div class="what-meme-ru"> 
                    <button id="7" class="button2">
                        <p>What meme are you?</p>
                        <img class="freezeframe" src="https://media0.giphy.com/media/uHox9Jm5TyTPa/giphy.gif?cid=ecf05e479dhr5gp25meuqpy1sv986qlcdobopdw8qp84vtc4&rid=giphy.gif" style="width: 100%; height:40%;">
                    </button>
                </div>

                <div class="cartoon"> 
                    <button id="8" class="button2">
                        <p>What cartoon character you?</p>
                        <img class="freezeframe" src="https://media0.giphy.com/media/SKGo6OYe24EBG/giphy.gif?cid=ecf05e47yyrutz9lbhuama9aj3rkzrgs3p02kjqnzrkjzum0&rid=giphy.gif" style="width: 100%; height:40%;">
                    </button>
                </div>

                <div class="starterpack"> 
                    <button id="9" class="button2">
                        <p>What starterpack fits you the most?</p>
                        <img class="freezeframe" src="https://i.gifer.com/RRyt.gif" style="width: 100%; height:40%;">
                    </button>
                </div>

                <div class="perfect-job"> 
                    <button id="10" class="button2">
                        <p>What is, secretly, the perfect job for you?</p>
                        <img class="freezeframe" src="https://media4.giphy.com/media/RMGLLn6JiJELQh5M8i/giphy.gif?cid=ecf05e470225396abfb15e24d02d46fdfd066a48555d9888&rid=giphy.gif" style="width: 100%; height:40%;">
                    </button>
                </div>
            </div>
        </div>

    </div>
</body>
</html>