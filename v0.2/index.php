<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<script src="https://use.fontawesome.com/0df17449bf.js"></script>

    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <script>  var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };   </script>
</head>
<body>
   
<header>
  <img id="V" src="image/V.png"  />


<h1>
  
  <a href="" class="typewrite" data-period="2000" data-type='[ "Hi, I am Virginie.", "I am Creative.", "I Love Design.", "I Love to Develop." ]'>
    <span class="wrap"></span>
  </a>
</h1>
<aside>
	<div id="LateralOculto">
		<a href="#articleun">Skills</a>
    	<a href="#articledeux">Projects</a>
      	<a href="#articletrois">Contact</a>
	</div>
</aside>
</header>

  <article id="articleun">
   <h2> MY </h2> <h2 style="color: #FFEB4F;">SKILLS   </h2>
        <div class="skills">
       

<section class="model-1">
  <div class="graph">HTML5</div>
</section>
<section class="model-2">
  <div class="graph">CSS3</div>
</section>
  
<section class="model-3">
  <div class="multi-graph">javaScript
    <div data-name="jQuery" class="graph jQuery"> </div>
    <div data-name="javaScript" class="graph javaScript"></div>
    
  </div>
</section>
  <section class="model-4">
  <div class="graph">Php</div>
</section>
</div>
        
     
        <h4>to create what you need. </h4>
      </div>

    </section>

</article>
<article id="articledeux">
<h2> MY   </h2>  <h2 style="color:black;"> PROJECTS:</h2> 
      <div id="gallery">
        
        <div class="imgBox">
          <a href="http://simplonlyon.fr/promo/virginie/projet-1-Repro-paravelelinc.com/" target="_blank"><img src="image/projet1.png" class="pic" id="one" />
          <div class="info">
            <p>The classic game Simon.<br /> SVG, Javascript/jQuery and<br /> Greensock Animation.<br />
                Part of the Free Code Camp curriculum</p>
          </div></a>
        </div>

        <div class="imgBox">
          <a href="http://simplonlyon.fr/promo/virginie/thesubways/" target="_blank"><img src="image/projet2b.png" class="pic" id="two" />
          <div class="info">
            <p>Search Wikipedia using their API.<br /> Javascript/jQuery, Bootstrap.<br />
                Part of the Free Code Camp curriculum</p>
          </div></a>
        </div>

        <div class="imgBox">
          <a href="http://simplonlyon.fr/promo/virginie/todolist-" target="_blank"><img src="image/todo.png" class="pic" id="three" />
          <div class="info">
            <p>Timer built with SVG, Javascript/jQuery and Greensock Animation.<br />
                Part of the Free Code Camp curriculum</p>
          </div></a>
        </div>

        <div class="imgBox">
          <a href="http://simplonlyon.fr/promo/virginie/Projet3-jeu.js" target="_blank"><img src="image/jeux.png" class="pic" id="four" />
          <div class="info">
            <p>Twitch.tv app using the Bootstrap framework.<br />
               Part of the Free Code Camp curriculum</p>
          </div></a>
        </div>

        <div class="imgBox">
          <a href="http://simplonlyon.fr/promo/virginie/Projet3-jeu.js" target="_blank"><img src="image/jeu2.png" class="pic" id="five" />
          <div class="info">
            <p>Play Tic Tac Toe against AI.<br />
            SVG animation, minimax algorithm.<br />
            Part of the Free Code Camp curriculum</p>
          </div></a>
        </div>

        <div class="imgBox">
          <a href="http://simplonlyon.fr/promo/virginie/Projet3-jeu.js" target="_blank"><img src="image/jeu5.png" class="pic" id="six" />
          <div class="info">
            <p>Working transparent calculator.<br />
               Randomly generated background.<br />
               Part of the Free Code Camp curriculum</p>
          </div></a>
        </div>

        <div class="imgBox">
          <a href="https://codepen.io/mills3/pen/JXVWWj" target="_blank"><img src="" class="pic" id="seven" />
          <div class="info">
            <p>Random quote generator.<br />
               Tweet out your fav quote.<br />
               Part of the Free Code Camp curriculum</p>
          </div></a>
        </div>

        <div class="imgBox">
          <a href="https://codepen.io/mills3/pen/oxqZJW" target="_blank"><img src="" class="pic" id="eight" />
          <div class="info">
            <p>Tribute page to Bert Jansch.<br />
               Part of the Free Code Camp curriculum</p>
          </div></a>
        </div>

        <div class="imgBox">
          <a href="https://codepen.io/mills3/pen/XdvrKQ" target="_blank"><img src="" class="pic" id="nine" />
          <div class="info">
            <p>Display current weather for user IP address.<br />
               Part of the Free Code Camp curriculum</p>
          </div></a>
        </div>
      </div>
    </section>

</article>
   
     

     


  


    <article id="articletrois" class="sect">
      
        <h2> CONTACT   </h2>  <h2 style="color:#FFEB4F;"> ME:</h2> 
        <div id="contact">
       <div><i class="fa fa-github fa-5x" aria-hidden="true"></i></div>
       <div>
       <i class="fa fa-twitter-square fa-5x" aria-hidden="true"></i><br/><br/>
       <p>https://github.com/VachetVirginie</p>
 </div>
<div>
  <i class="fa fa-envelope fa-5x" aria-hidden="true"></i><br/><br/>
  <p> vachetvirginie@gmail.com</p>
  </div>
<div>
  <i class="fa fa-phone fa-5x" aria-hidden="true"></i><br/><br/>
  <p> 06.03.72.71.20 </p>
</div>
</div>
</article>
 <footer>
<p> Made with <i class="fa fa-heartbeat" aria-hidden="true"></i> by Virginie </p>

   </footer>

</body>
</html>