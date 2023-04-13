<?php
//! protect the inputs
// echo "<a href='get_post.php?name=hamad'>Next</a>";
if (isset($_POST['submit'])) {
    //There is multiple  ways to protect out inputs
    //! 1 htmlspecialchars()
    // $name = htmlspecialchars($_POST['name']);
    // $age = htmlspecialchars($_POST['age']);
    //! filter_input
    $name = filter_input(INPUT_POST, "name",FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST,"age",FILTER_SANITIZE_SPECIAL_CHARS);
    echo  "Name: " . $name . '<br>';
    echo  "Age: " . $age;
} else echo "enter your name"

?>
<!-- get request will appear the variables in the URL, hide it with post request -->


<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
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