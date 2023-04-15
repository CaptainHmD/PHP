<?php

if (isset($_POST['submit'])) {
    $img_ext= array('jpg','png','jpeg','gif');

    if (!empty($_FILES['img']['name'])) { // check if file is empty
        // print_r($_FILES);
        $file_name=$_FILES['img']['name'];
        $file_type=explode('/',$_FILES['img']['type'])[1];
        $file_size=$_FILES['img']['size'];
        $file_temp = $_FILES['img']["tmp_name"];
        echo "name= $file_name size= $file_size type= $file_type temp= $file_temp";

        
        $target_dir="uploads/$file_name";

        //!get file ext
        if(in_array($file_type,$img_ext)){
            echo ' <h1 style="color:green;">it is '.$file_type.'</h1>';
            move_uploaded_file($file_temp,$target_dir); // you will need the file_temp and target_dir to upload the file
        }else echo '<h1 style="color:red;">it`s not an img</h1>'.$file_type;


    } else echo ' <h1 style="color:red;">invalid message </h1>';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- //! if you want  to upload files you have to add in the form enctype="multipart/form-data"  -->
    <!-- //!or it will not work. -->
    <form action="<?php echo $_SERVER['PHP_SELF'] ?> " method="POST" enctype="multipart/form-data">

        <h1>Select img to upload</h1>
        <label for="img">Upload img</label>
        <input type="file" name="img">
        <input type="submit" value="submit" name="submit">
    </form>


</body>

</html>