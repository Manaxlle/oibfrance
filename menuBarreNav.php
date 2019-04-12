<?php
session_start();
?>
<header>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
 <link rel="stylesheet" href="style.css" />
  <a href="/">
    	<nav>
          <div class="logo">
            <h4>OIBfrance</h4>
          </div>
           <ul class="nav-links">
                    <li><a href="accueiltemp">Accueil</a></li>
                    <li><a href="#">Carte Interactive</a></li>
                    <li><a href="<#">Forum</a></li>  
                    <li><a href="#">Temoignage</a> </li>
                    <li><a href="#">FAQ </a> </li>
                  <?php
             		if(isset($_SESSION['userID'])){
             		echo'<li class="amir"><a href="logout.hidden">Log out</a></li>';
             		}else{
               
               		echo'<li class="amir"><a href="Login">Log in</a></li>'; 
             		}
             		?>
          </ul>
          <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
         </div>
        </nav>  
    
    <script src="app.js"></script>
</header>


  
  
  

  <script>
  // When the user scrolls down 20px from the top of the document, slide down the navbar
// When the user scrolls to the top of the page, slide up the navbar (50px out of the top view)
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("nav").style.top = "0";
  } else {
    document.getElementById("nav").style.top = "-50px";
  }
}</script>

  <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
  
  <script>window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}</script>



















