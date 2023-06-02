<?php
$per = 79;
if($per >= 80 && $per <=100){
    echo "Distinction";
}
elseif($per >= 60 && $per <80){
    echo "Ist Division";
}
elseif($per >= 50 && $per <60){
    echo "IInd Division";
}
elseif($per >= 40 && $per <50){
    echo "IIIrd Division";
}
elseif($per < 40)
{
    echo "Fail !!! ";
}
else{
    echo "Please enter the valid percentage";
} 
//alternatively:
/*
if($per >= 80 && $per <=100):
    echo "Distinction";
elseif($per >= 60 && $per <80):
    echo "Ist Division";
elseif($per >= 50 && $per <60):
    echo "IInd Division";
elseif($per >= 40 && $per <50):
    echo "IIIrd Division";
elseif($per < 40):
    echo "Fail !!! ";
else:
    echo "Please enter the valid percentage";
endif;
*/
?>