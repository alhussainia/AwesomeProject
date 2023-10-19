<?php
ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);
session_start();
$title = "Elizabethtown College Project";

require_once "includes/header.php";
?>
<style>
    .menu {
  display: none;
}
</style>
<!--Logo with background picture-->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
        <img src="https://www.etown.edu/depts/computer-science/images/hero-CS-masters-1100x450.jpg"
            alt="Elizabethtown College" width="1500" height="800">
        <div class="w3-display-middle w3-margin-top w3-center">
            <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>ECS</b></span>
                <span class="w3-hide-small w3-text-light-grey">Projects</span>
            </h1>
        </div>
    </header>

    <!--Infographic bar-->
    <div class="w3-row w3-center w3-dark-grey w3-padding-16">
    <div class="w3-quarter w3-section">
    <span class="w3-xlarge">100+</span><br>Available Projects
  </div>
    <div class="w3-quarter w3-section">
    <span class="w3-xlarge">75+</span><br>Completed Projects
  </div>
    <div class="w3-quarter w3-section">
    <span class="w3-xlarge">30+</span><br>Faculty
  </div>
    <div class="w3-quarter w3-section">
    <span class="w3-xlarge">250+</span><br>ECS Students
        </div>
    </div>


    <div class="w3-container" id="menu">
  <div class="w3-content" style="max-width:700px">
 
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">ELIZABETHTOWN COLLEGE ECS DEPARTMENT</span></h5>
  
    <div class="w3-row w3-center w3-card w3-padding">
      <a href="javascript:void(0)" onclick="openMenu(event, 'Eng');" id="myLink">
        <div class="w3-col s6 tablink">Engineering</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'CS');">
        <div class="w3-col s6 tablink">Computer Science</div>
      </a>
    </div>

    <div id="Eng" class="w3-container menu w3-padding-48 w3-card">
      <h5>Engineering</h5>
      <p class="w3-text-grey">Elizabethtown College’s Engineering program is designed to prepare students for a technical career in the workforce or for graduate school. We strongly believe in producing well-rounded generalist engineers who understand the mechanical and electrical systems of a design and how those systems interact with the environment and with industry. We challenge our students, pushing them to become innovators of the future. They receive personal attention from our faculty and gain hands-on experience in design and fabrication laboratories.</p><br>
</div>
      <div id="CS" class="w3-container menu w3-padding-48 w3-card">
      <h5>Computer Science</h5>
      <p class="w3-text-grey">The Department of Computer Science at Elizabethtown College is all about hands-on experiences. We don’t believe that students should sit in a room and hear lectures. We believe that students should be able to get involved with hands-on projects early on.</p><br>
</div>
      



<?php
require_once "includes/footer.php"
?>
<script>
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-dark-grey";
}
document.getElementById("myLink").click();
</script>


