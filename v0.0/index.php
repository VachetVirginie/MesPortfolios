<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://use.fontawesome.com/0df17449bf.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vachet Virginie
    </title>
    <style>
        a#cRetour {
            border-radius: 3px;
            padding: 10px;
            font-size: 15px;
            text-align: center;
            color: #fff;
            background: rgba(0, 0, 0, 0.25);
            position: fixed;
            right: 20px;
            opacity: 1;
            z-index: 99999;
            transition: all ease-in 0.2s;
            backface-visibility: hidden;
            -webkit-backface-visibility: hidden;
            text-decoration: none;
        }
        
        a#cRetour:before {
            content: "\25b2";
        }
        
        a#cRetour:hover {
            background: rgba(0, 0, 0, 1);
            transition: all ease-in 0.2s;
        }
        
        a#cRetour.cInvisible {
            bottom: -35px;
            opacity: 0;
            transition: all ease-in 0.5s;
        }
        
        a#cRetour.cVisible {
            bottom: 20px;
            opacity: 1;
        }
    </style>
</head>

<body>
    <a name="haut" id="haut"></a>

    <div>
        <a id="cRetour" class="cInvisible" href="#haut"></a>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            window.onscroll = function(ev) {
                document.getElementById("cRetour").className = (window.pageYOffset > 100) ? "cVisible" : "cInvisible";
            };
        });
    </script>
    <header>

    </header>
    <main>
        <div id="port">
            <article id="articleun">
                <div class="workguide"></div>
                <img class="titnum" src="http://www.fransolo.com/imgs/01.svg">
                <h2 style="color:black;"> Mes projets: </h2>




                <figcaption style="color:black;">
                    <p>Projet 1:</p>
                    <p>Refaire le site "http://paravelinc.com"</p>
                    <a style="color:black" href="http://simplonlyon.fr/promo/virginie/projet-1-Repro-paravelelinc.com/"><input class="btn-grad" id="bu-bu" type="button" value="Voir le projet"> </a>
                </figcaption>





                <figcaption style="color:black;">
                    <p>Projet 1 bis</p>
                    <p>Refaire le site "www.thesubways.net"</p>
                    <a style="color:black" href="http://simplonlyon.fr/promo/virginie/thesubways/"><input class="btn-grad" id="bu-bu" type="button" value="Voir le projet"> </a>
                </figcaption>





                <figcaption style="color:black;">
                    <p>Projet To Do List</p>
                    <p>Creer une To Do List</p>
                    <a style="color:black" href="http://simplonlyon.fr/promo/virginie/todolist-"><input class="btn-grad" id="bu-bu" type="button" value="Voir le projet"> </a>
                </figcaption>



                <figcaption style="color:black;">
                    <p>Projet jeu </p>
                    <p>Creer un jeu en javascriptt</p>
                    <a href="http://simplonlyon.fr/promo/virginie/Projet3-jeu.js" target="_blank"> <input class="btn-grad" id="bu-bu" type="button" value="Voir le projet"> </a>

                </figcaption>


                <div>
                    <img class="img" src="image/projet.png" />
                    <img src="image/projet2.png" />
                    <img src="image/todo.png" />
                    <img src="image/jeux.png" />



                    <img src="image/jeu2.png" />


                    <img src="image/jeu3.png" />


                    <img src="image/jeu4.png" />


                    <img src="image/jeu5.png" />


                </div>
            </article>



            <article id="articledeux">
                <div id="skills_ap" class="full showed">
                    <div class="centrado">

                        <img class="titnum" src="http://www.fransolo.com/imgs/02.svg">


                        <br>
                        <h4>Front-end<br></h4>

                        <br>
                        <img id="aa" src="image/html.png" />HTML<br>
                        <img id="aa" src="image/css.png" />CSS<br>
                        <img id="aa" src="image/js.png" />Javascript<br>
                        <br>
                        <h4>Back-end<br></h4>

                        <br>
                        <img id="aa" src="image/php.png" />Php<br>
                        <br>
                        <h4>Version Control<br></h4>

                        <br>
                        <img id="aa" src="image/git.png" />Git
                        <br>
            </article>
            </div>
            </div>
            <article id="articletrois">
                <div>
                    <div class="workguide"></div>
                    <img class="titnum" src="http://www.fransolo.com/imgs/03.svg">

                    <br>
                    <i class="fa fa-github" aria-hidden="true"></i> github
                    <br>
                    <i class="fa fa-envelope" aria-hidden="true"></i> email
                    <br>
                    <i class="fa fa-twitter" aria-hidden="true"></i> twitter
                    <br>
                </div>
                <div>
                    <br/>
                    <br/>
                    <a class="twitter-timeline" data-lang="fr" data-width="240" data-height="220" data-link-color="#2B7BB9" href="https://twitter.com/GirlyDev">Tweets by GirlyDev</a>
                    <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
            </article>
    </main>
</body>

</html>