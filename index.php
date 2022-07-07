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
                        Please enter a number between <b>1 and 99</b> into the box above your chosen button, then click the button to reveal the output.</b>
                    </p>
                </div>
            </div>
        </section>


        <!-- Input Buttons -->

        <div class='format-buttons'>

            <form method='post' action='index.php'>

                <div class='textbox'>
                    <p>Input Number Here:</p>
                    <input type='text' name='textbox' id='textbox' value='' class='medium' style='color: #333333;'>
                </div>

                <input type='hidden' name='page' value='index.php'>
                <input type='hidden' name='ten' value='1'>
                <input type='hidden' name='pageaction' value='update'>

                <div class='base-ten'>
                    <input type='submit' value='Submit in Base 10' class='button'>
                </div>

            </form>
           
            <form method='post' action='index.php'>

                <div class='textbox'>
                    <p>Input Number Here:</p>
                    <input type='text' name='textbox' id='textbox' value='' class='medium' style='color: #333333;'>
                </div>

                <input type='hidden' name='page' value='index.php'>
                <input type='hidden' name='two' value='1'>
                <input type='hidden' name='pageaction' value='update'>

                <div class='base-two'>
                    <input type='submit' value='Submit in Base 2' class='button'>
                </div>
            </form>

        </div>


        <!-- Answer Space -->


        <div class='answer-textbox'>
            <p><b>ANSWER:</b></p>
        </div>


        <?php
        if ($_POST["ten"]) {
            if (($_POST["textbox"] > -1) and ($_POST["textbox"] < 100)) {
                    ?>
                <section class='output'>
                    
                    <div class='output-text'>
                        <?php
    
                                $input = $_POST['textbox'];
                                $answers = array();

                                for ($a=0;$a<=$input;$a++) {
                                    if ($a != 0) {
                                        if (($a % 15 == 0))  {
                                            $answers[$a] = "Fizz Buzz!";
                                        } elseif ($a % 5 == 0) {
                                            $answers[$a] = "Buzz!";
                                        } elseif ($a % 3 == 0) {
                                            $answers[$a] = "Fizz!";
                                        } elseif ($a == 0) {
                                            $answers[$a] = $a;
                                        } else {
                                            $answers[$a] = $a;
                                        }
                                    }
                                }

                                $length = 8;

                                for ($b=0;$b<=count($answers);$b++) {
                                    $binary_answers[$b] = base_convert($b, 10, 2);
                                    $binary_formatted[$b] = substr(str_repeat(0, $length).$binary_answers[$b], - $length);
                                    $binary_formatted[$b] = $binary_formatted[$b]."!";
                                    if ($answers[$b] == "Fizz!") {
                                        $binary_formatted[$b] = "Fizz!";
                                    } elseif ($answers[$b] == "Buzz!") {
                                        $binary_formatted[$b] = "Buzz!";
                                    } elseif ($answers[$b] == "Fizz Buzz!") {
                                        $binary_formatted[$b] = "Fizz Buzz!";
                                    }
                                }

                                $binary_string = implode(', ',$binary_formatted);
                                print_r($binary_string);

                                $string_answers = implode(', ',$answers);

                                //print $string_answers;
                        ?>
                    </div>

                </section>
            <?php
                
            } else {

                ?> 
                <div class='error-textbox'>
                    <p>Please enter a value between 0 and 99.</p>
                </div>
                <?php
            }
            
        }

        if ($_POST["two"]) {
            if (($_POST["textbox"] > -1) and ($_POST["textbox"] < 100)) {
            ?>
                <section class='output'>
                    
                    <div class='output-text'>
                        <?php
                    
                                $input = $_POST['textbox'];
                                $answers = array();

                                for ($a=0;$a<=$input;$a++) {
                                    if ($a != 0) {
                                        if (($a % 15 == 0))  {
                                            $answers[$a] = "Fizz Buzz!";
                                        } elseif ($a % 5 == 0) {
                                            $answers[$a] = "Buzz!";
                                        } elseif ($a % 3 == 0) {
                                            $answers[$a] = "Fizz!";
                                        } elseif ($a == 0) {
                                            $answers[$a] = $a;
                                        } else {
                                            $answers[$a] = $a;
                                        }
                                    } else {
                                        $answers[$a] = $a;
                                    }
                                }

                                $string_answers = implode(', ',$answers);
                                print $string_answers;
                        ?>
                    </div>

                </section>
            <?php
            } else {

                ?> 
                <div class='error-textbox'>
                    <p>Please enter a value between 0 and 99.</p>
                </div>
                <?php
            }
        }
        ?>

    </div>

   
   
</body>
</html>