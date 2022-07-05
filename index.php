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


    <!-- Input Form -->

    <form method='post' action='index.php'>
        <input type='hidden' name='page' value='index.php'>
        <input type='hidden' name='dosubmit' value='1'>
        <input type='hidden' name='pageaction' value='update'>

        <div class='textbox'>
            <p>Input Number Here:</p>
            <input type='text' name='textbox' id='textbox' value='' class='medium' style='color: #333333;'>
        </div>

        <div class='sub'>
            <input type='submit' value='Submit' class='button'>
        </div>

    </form>


     <!-- Main Inner -->
    
     <?php

        if ($_POST['dosubmit']) {

            print "TEST";
            print $form_input;
            print $form_textbox;
            $input = $_POST['textbox'];
            print $input;

        }

    ?>


   
   
</body>
</html>