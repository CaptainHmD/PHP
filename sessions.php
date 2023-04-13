<?php
//! protect the inputs
// echo "<a href='get_post.php?name=hamad'>Next</a>";
if (isset($_POST['submit'])) {

    //! filter_input
    $username = filter_input(INPUT_POST, "username",FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST['password'];
    session_start();  
    if($username =='hamad'&& $password=='727'){
        $_SESSION['username']=$username;
        header('Location: /php-crash/docs/dashboard.php');
    }else echo "Incorrect Login";
} else echo "enter your name";

?>
<!-- get request will appear the variables in the URL, hide it with post request -->


<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
    <!-- <form action="/php-crash/get_post.php" method="get"> -->
    <div>
        <div>
            <label for="username">username: </label>
            <input type="text" name="username">
            <div>
                <label for="password">Password: </label>
                <input type="password" name="password">
            </div>
            <input type="submit" value="submit" name="submit">
        </div>
</form>