<?php

require("includes/library.php");


if ($form_dosubmit) {


}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>FizzBuss | Max Behrens</title>
</head>


<body>

    <!-- Navbar -->
    <div class="header">
        <div class="container">
        </div>
    </div>



    <!-- Title -->
    <section class="title">
        <div class="container">
            <div>
                <h1 class="title-main">FIZZ BUZZ!</h1>
                <p class="title-sub">
                    Please enter a number between 1 and 99 in the box below, then press <b>"Submit".</b>
                </p>
            </div>
        </div>
    </section>



    <!-- Main Inner -->
    


    <!-- Input Form -->
    <form method='post' action='/index.php'>
        <input type="hidden" name="dosubmit" value="1">

        <li class='textbox'>
            <p>Input Number Here:</p>
            <div class='container'>
                <input type='text' name='textbox' id='input' value='' class='medium' style='color: #333333;'>
            </div>
        </li>

        <div>
            <input type='submit' id='gform_submit_button_5' class='button' style="color: #ffffff;" value='Submit'>
        </div>
    </form>

   
</body>
</html>