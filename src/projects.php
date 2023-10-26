<?php
ini_set('display_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);
session_start();
$title = "Elizabethtown College Project";

require_once "includes/header.php";
?>
<link
      href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Round|Material+Icons+Sharp|Material+Icons+Two+Tone"
      rel="stylesheet"
    />
<link rel="stylesheet" href="css/dropdown.css">
<div class="w3-padding-16" >
<div class="w3-row w3-center w3-dark-grey w3-padding-48 w3-section">
    <span class="w3-xlarge">Projects</span>
  </div>
</div>


<!--Dropdown menu with the project subjects-->
    <body>
    <div class ="project-specs">
        <div class = "dropdown">
            <div class = "title">Select a Project Subject</div>
            <div class="input-box"></div>
            <div class="list">
            <div class="search-box">   
            <input
              type="search"
              name=""
              id="search"
              placeholder="Search Options"
              onkeyup="search(this)"
            />
          </div>
            <input type = "radio" name = "drop1" id = "id1" class = "radio">
            <label for ="id1">
                <span class = "all-subjects"> All Subjects </span>
            </label>
            <input type = "radio" name = "drop2" id = "id2" class = "radio">
            <label for ="id2">
                <span class = "biomed-eng">Biomedical Engineering</span>
            </label>
            <input type = "radio" name = "drop3" id = "id3" class = "radio">
            <label for ="id3">
                <span class = "civil-eng">Civil Engineering</span>
            </label>
            <input type = "radio" name = "drop4" id = "id4" class = "radio">
            <label for ="id4">
                <span class = "comp-eng">Computer Engineering</span>
            </label>
            <input type = "radio" name = "drop5" id = "id5" class = "radio">
            <label for ="id5">
                <span class = "comp-sci">Computer Science</span>
            </label>
            <input type = "radio" name = "drop6" id = "id6" class = "radio">
            <label for ="id6">
                <span class = "data-science">Data Science</span>
            </label>
            <input type = "radio" name = "drop7" id = "id7" class = "radio">
            <label for ="id7">
                <span class = "elec-eng">Electrical Engineering</span>
            </label>
            <input type = "radio" name = "drop8" id = "id8" class = "radio">
            <label for ="id8">
                <span class = "env-eng">Environmental Engineering</span>
            </label>
            <input type = "radio" name = "drop9" id = "id9" class = "radio">
            <label for ="id9">
                <span class = "indus-eng">Industrial and Systems Engineering</span>
            </label>
            <input type = "radio" name = "drop10" id = "id10" class = "radio">
            <label for ="id10">
                <span class = "info-systems">Information Systems</span>
            </label>
            <input type = "radio" name = "drop11" id = "id11" class = "radio">
            <label for ="id11">
                <span class = "mech-eng">Mechanical Engineering</span>
            </label>   
</div>
</div>





<!--Dropdown menu with the project audience-->
    <div class ="project-specs">
        <div class = "dropdown">
            <div class = "title">Select a Project Audience</div>
            <div class="input-box"></div>
            <div class="list">
            <input type = "radio" name = "drop12" id = "id12" class = "radio">
            <label for ="id12">
                <span class = "all-audiences"> All Audiences</span>
            </label>
            <input type = "radio" name = "drop13" id = "id13" class = "radio">
            <label for ="id13">
                <span class = "student">Student</span>
            </label>
            <input type = "radio" name = "drop14" id = "id14" class = "radio">
            <label for ="id14">
                <span class = "student">Student</span>
            </label>
            <input type = "radio" name = "drop15" id = "id15" class = "radio">
            <label for ="id15">
                <span class = "faculty">Faculty</span>
            </label>
            <input type = "radio" name = "drop16" id = "id16" class = "radio">
            <label for ="id16">
                <span class = "community">Community</span>
            </label>
</div>
</div>
</div>




<!--Dropdown menu with the project progress-->

    <div class ="project-specs">
        <div class = "dropdown">
            <div class = "title">Select a Project Progress</div>
            <div class="input-box"></div>
            <div class="list">
            <input type = "radio" name = "drop17" id = "id17" class = "radio">
            <label for ="id17">
                <span class = "all-projects"> All Projects</span>
            </label>
            <input type = "radio" name = "drop18" id = "id18" class = "radio">
            <label for ="id18">
                <span class = "student">Available Projects</span>
            </label>
            <input type = "radio" name = "drop19" id = "id19" class = "radio">
            <label for ="id19">
                <span class = "inprog-projects">In Progress Projects</span>
            </label>
            <input type = "radio" name = "drop20" id = "id20" class = "radio">
            <label for ="id20">
                <span class = "completed-projects">Completed Projects</span>
            </label>
</div>





<!-- Working search bar to display inputted results-->

<form>    
<input type = "submit" value = "Search">
</form>
</div>
</div>
</div>

<!-- Allows to look at all the results through pagination-->
    <div class="w3-bar w3-center">
  <a href="#" class="w3-button">1</a>
  <a href="#" class="w3-button">2</a>
  <a href="#" class="w3-button">3</a>
  <a href="#" class="w3-button">4</a>
  <a href="#" class="w3-button">5</a>
</div>

<!-- JavaScript for dropdown menu animation -->
    <script>
    var dropdowns = document.querySelectorAll(".input-box");
    dropdowns.forEach(function (input) {
    input.addEventListener("click", function () {
        this.classList.toggle("open");
        let list = this.nextElementSibling;
        if (list.style.maxHeight) {
            list.style.maxHeight = null;
            list.style.boxShadow = null;
        } else {
            list.style.maxHeight = list.scrollHeight + "px";
            list.style.boxShadow =
                "0 1px 2px 0 rgba(0, 0, 0, 0.15),0 1px 3px 1px rgba(0, 0, 0, 0.1)";
        }
    });

    var rad = input.querySelectorAll(".radio");
    rad.forEach(function (item) {
        item.addEventListener("change", function () {
            input.innerHTML = item.nextElementSibling.innerHTML;
            input.click();
        });
    });

    var label = input.nextElementSibling.querySelectorAll("label");
});

    function search(searchin) {
        let searchVal = searchin.value;
        searchVal = searchVal.toUpperCase();
        label.forEach((item) => {
          let checkVal = item.querySelector(".name").innerHTML;
          checkVal = checkVal.toUpperCase();
          if (checkVal.indexOf(searchVal) == -1) {
            item.style.display = "none";
          } else {
            item.style.display = "flex";
          }
          let list = input.nextElementSibling;
          list.style.maxHeight = list.scrollHeight + "px";
        });
      }
    </script>
    </body>
<?php
require_once "includes/footer.php"
?>
