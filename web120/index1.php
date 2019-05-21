<!DOCTYPE html>
<html lang="en">
<head>
<title>WEB120 Portal</title>
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<script src="https://use.fontawesome.com/6a71565c22.js"></script>
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/portal.css" />
<link rel="stylesheet" href="css/form.css" />
</head>

<body>
<!-- START WRAPPER -->
<div class="wrapper">
<header>
  <h1><a href="index.php"><i class="logo fa fa-home"></i> Adam Nelson's SCC WEB120 Portal</a></h1>
  <nav>
    <ul class="topnav" id="myTopnav">
      <li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contact.php">Contact Adam</a></li>
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>
 
<? include 'includes.header.php';?>
<!-- START LEFT COL -->
<section>
 <h2 class="pageID">Welcome</h2>

<!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->
 <img src="images/Adam.png" class="desktop" alt="" />
 <img src="images/" class="phone" alt="" />
 <p>My name is Adam Nelson.  I am currently living in Tacoma. I learned early on that I loved to work with design and it seemed to come naturally to me. Designing logos is one of my favorite creative endeavors. I find it intriguing to find a way to  effectively communicate the brand or idea in one simple image. This is a very satisfying process for me. I previously attended <em>Bates Technical College</em>  where I obtained my <strong>Associates Degree in Digital Media</strong>. After graduation I began doing volunteer work at FabLab Tacoma. FabLab is a maker-space, where people can use 3D printers and other fabrication technologies without having to purchase any expensive machinery. I created a number of graphic design works for them, including flyers, posters, and brochures which advertised  events and classes. I have also edited photos and videos for FabLab’s website. Now I am attending Seattle Central, with the goal  of a future career in web design. Web design merges my love of design with my interest in technology.</p>
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>Hobbies and Interests</h3>
 <img src="images/" class="desktop" alt="" />
 <p>In my spare time, I enjoy playing video games. My favorite games include Doom, Doom 2, and Quake. Watching movies is also a favoite pastime of mine. Some of my hobbies are drawing, sculpting and working on my own graphic design projects. I am also energized by lively conversations about ideas, politics, and the world.</p>
</aside>
<!-- END RIGHT COL -->
 
<!-- START Footer -->
<? include 'includes.header.php';?>
<footer>
  <p><small>&copy; 2018 - <?=date('Y')?> by <a href="#" target="_blank">Adam Nelson</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
</footer>
<!-- END Footer --> 

    <!-- JavaScript associated with the W3Schools.com Top Navigation Response Exercise --> 
    <script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
     </script>
</div>
<!-- END WRAPPER -->

</body>
</html>