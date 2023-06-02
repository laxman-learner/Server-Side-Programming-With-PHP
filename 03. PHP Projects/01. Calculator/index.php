<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP Calculator </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="inner">
           <div class="col1"> PHP <br> CALCULATOR </p></div>

             <div class="col2">
                <div>
                    <form method="POST">
                <div class="app-form-group">
                    <input type="text" class="one" name="num1" placeholder="Enter First Number">
                </div>

                <div class="app-form-group">
                    <input type="text" class="one" name="num2" placeholder="Enter Second Number">
                </div>

                <div class="select-style">
                    <select class="multiple" name="operation">
                        <option value="add"> Add </option>
                        <option value="sub"> Subtract </option>
                        <option value="mul"> Multiply </option>
                        <option value="div"> Divide </option>
                    </select>
                </div>

               <div> <input type="submit" name="submit" value="Submit" class="button"></div>
               </form>
                
                
             <div class="app-form-group showdata">
                <p> 
                    <?php if (isset($_POST['submit'])) {
                        $num1 = $_POST['num1'];
                        $num2 = $_POST['num2'];
                        $operation = $_POST['operation'];
                        switch ($operation) {
                            case 'add':
                                $sum = $num1 + $num2;
                                echo 'The sum of ' .
                                    $num1 .
                                    ' and ' .
                                    $num2 .
                                    ' is ' .
                                    $sum;
                                break;
                            case 'sub':
                                $diff = $num1 - $num2;
                                echo 'The difference of ' .
                                    $num1 .
                                    ' and ' .
                                    $num2 .
                                    ' is ' .
                                    $diff;
                                break;

                            case 'mul':
                                $pro = $num1 * $num2;
                                echo 'The product of ' .
                                    $num1 .
                                    ' and ' .
                                    $num2 .
                                    ' is ' .
                                    $pro;
                                break;
                            case 'div':
                                $divide = $num1 / $num2;
                                echo 'The quotient of ' .
                                    $num1 .
                                    ' and ' .
                                    $num2 .
                                    ' is ' .
                                    $divide;
                                break;

                            default:
                                echo 'Sorry its not exist';
                        }
                    } ?> 
                    </p>
             </div>
             </div>
             </div>
             
        </div>
    </div>
</body>
</html>