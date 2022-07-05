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


    <!-- Main Inner -->
    <div class='main-inner'>



        <!-- Title -->
        <section class="title">
            <div class="container">
                <div>
                    <h1 class="title-main">FIZZ BUZZ!</h1>
                    <p>
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

            <div>
                <input type='submit' value='Submit' class='button'>
            </div>

        </form>



        <?php
        if ($_POST['dosubmit']) {
        ?>

            <section class='output'>

                <!--<div>
                    <h1 class="main">FIZZ BUZZ!</h1>
                    <p class="sub">
                        Please enter a number between 1 and 99 in the box below, then press <b>"Submit".</b>
                    </p>
                </div>-->
                
                <div class='output-text'>
                    <?php
                
                            $input = $_POST['textbox'];
                            $answers = array();

                            for ($a=1;$a<=$input;$a++) {
                                if ($a % 15 == 0)  {
                                    $answers[] = "Fizz Buzz!";
                                } elseif ($a % 5 == 0) {
                                    $answers[] = "Buzz!";
                                } elseif ($a % 3 == 0) {
                                    $answers[] = "Fizz!";
                                } else {
                                    $answers[] = $a;
                                }
                            }

                            $string_answers = implode(', ',$answers);
                            print $string_answers;
                    ?>
                </div>

            </section>

        <?php
        }
        ?>

    </div>

   
   
</body>
</html>