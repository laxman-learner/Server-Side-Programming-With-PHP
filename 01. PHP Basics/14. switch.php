<?php
$weekday = 2;
switch($weekday){
    /* We can give multiple instruction inside any case .. break statement is necessary
    in every case otherwise all the statements in every case get executed */
    case 1:
    echo "Today is Sunday";
    break;
    case 2:
    echo "Today is Monday";
    echo "<br> This is test case";
        break;
    case 3:
        echo "Today is Tuesday";
            break;
    case 4:
         echo "Today is Wednesday";
            break;
            case 5:
            echo "Today is Thursday";
             break;
             case 6:
                echo "Today is Friday";
                break;
                case 7:
                    echo "Today is Saturday";
                    break;
                default:
                echo "Enter the valid week day";
}
/*multiple cases can be combined if all of them has the same statement to be executed
 as: 
 case 1: case 2: case 3:
    //statment to be executed
    */
//another less popular way to use switch statements:
   /* switch($weekday):
    case 1:
        echo "Today is Sunday";
        break;
        case 2:
        echo "Today is Monday";
        echo "<br> This is test case";
            break;
        case 3:
            echo "Today is Tuesday";
                break;
        case 4:
             echo "Today is Wednesday";
                break;
                case 5:
                echo "Today is Thursday";
                 break;
                 case 6:
                    echo "Today is Friday";
                    break;
                    case 7:
                        echo "Today is Saturday";
                        break;
                    default:
                    echo "Enter the valid week day";
                    endswitch;
                    */
?>