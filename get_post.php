<?php

// echo "<a href='get_post.php?name=hamad'>Next</a>";
if (isset($_POST['submit'])) {
    echo  "Name: " . $_POST['name'] . '<br>';
    echo  "Age: " . $_POST['age'];
} else echo "enter your name"

?>
<!-- get request will appear the variables in the URL, hide it with post request -->


<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <!-- <form action="/php-crash/get_post.php" method="get"> -->
    <div>
        <div>
            <label for="name">Name: </label>
            <input type="text" name="name">
            <div>
                <label for="age">Age: </label>
                <input type="number" name="age">
            </div>
            <input type="submit" value="submit" name="submit">
        </div>
</form>