<?php

if(isset($_FILES['image'])){
    echo "<pre>";
    print_r($_FILES);  // return the details of files such as name,size,type and tmp_name
    echo "</pre>";
}

// to upload this file in server

echo "<br>".$file_name = $_FILES['image']['name'];
echo "<br>".$file_type = $_FILES['image']['type'];
echo "<br>".$file_size = $_FILES['image']['size']; // returns size in KB
echo "<br>".$file_tmp = $_FILES['image']['tmp_name'];

move_uploaded_file($file_tmp,"uploaded-images/".$file_name); // create folder named "uploaded-images" inside 'php class'

// to show the message when file is uploaded 


if(move_uploaded_file($file_tmp,"uploaded-images/".$file_name)){
 echo "Uploaded Successfully";
} else {
    echo "could not uploaded the file";
}

?>
<html>
    <body>
        <form method = "post" enctype = "multipart/form-data">
            <input type = "file" name = "image" /> <br><br>
            <input type = "submit"/>
</form>
</body>
</html>










