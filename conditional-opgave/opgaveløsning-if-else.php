<!DOCTYPE html>
 <html lang="en">

<head>
     <meta charset="UTF-8">
     <title>TITLE</title>
     <meta name="description" content="DESCRIPTION">
    <link rel="stylesheet" href="css/main.css">

     <!--[if lt IE 9]>
       <script src = "http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
     <![endif]-->
 </head>

 <body>
<h1>Form data in PHP</h1>
<h3>Please select your gender</h3>
<form action="#" method="post">
            <label>Male</label>
            <input id="male" name="ans1" type="radio" value="1">
            <label>Female</label>
            <input id="female" name="ans2" type="radio" value="2">
            <input type="submit" name="submit">
        </form>
  
  
   <?php
        $answer1 = $_POST["ans1"];            // Create a new variable that "posts" whatever value the input field "ans1" has
        $answer2 = $_POST["ans2"];            // Create a new variable that posts whatver value the input field "ans2" has

        if ($answer1 == "1") {                  // If value is equal to 1 then display the message "male selected" 
            echo 'You selected male';      
        }

        if ($answer2 == "2") {                  // If value is equal to 2 then display the message "female selected"
            echo 'You selected female';
        }

   ?>

 </body>

 </html>
