<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Stepping Stones: Contact Form</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="finalPortal.css" />
  <link rel="stylesheet" href="finalNav.css" />
  <link rel="stylesheet" href="finalForms.css" />
 </head>
 <body>
 <header>
     <h1><a href="index.html">Stepping Stones LC & Preschool</a></h1>
    </div>
     <nav class="topnav" id="myTopnav">
       <a href="index.html" class="active">Contact Form</a>
       <a href="classrooms.html">classrooms</a>
       <a href="summercamps.html">Summer Camps</a>
       <a href="tuition.html">Tuition/Pricing Info</a>
       <a href="about.html">About Us</a>
       <a href="finalContact.php">Contact</a>
       <a href="#" class="icon" onclick="myFunction()">&#9776;</a>
     </nav>
     </header>
     
   <div class="wrapper">
       <h3>Contact Stepping Stones</h3>
       <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'contact_includefp.php'; #site keys & code here
    
        $toAddress = "rldettloff@gmail.com";  //place your/your client's email address here
        $toName = "Terri N"; //place your client's name here
        $website = "Stepping Stones LC & Preschool";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        loadContact('multiplefp.php');#demonstrates multiple form elements

	?>
     <footer>
      <p><small>&copy; 2022 by 
          <a href="templateContact.php">Ryder Dettloff</a>, All Rights Reserved ~ 
          <a id="html-checker" href="#">Check HTML</a> ~ 
          <a id="css-checker" href="#">Check CSS</a></small>
     </p>
    </footer>
  </div>
     
  <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
     
  <script>
    //https://tinyurl.com/dynamic-html-checker
    document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
      
    document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);  
    
    //manages mobile nav 
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }   
 </script>
     
 </body>
</html>