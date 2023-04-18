<?php include './config/database.php' ?>
<?php  include './inc/header.php';?> <!-- //! include other php pages like react component -->


<?php

$name = $email=$body ='';

//Form submit
  if(isset($_POST['submit'])){

    //name validation
    if(empty($_POST['name'])){
      $nameErr = 'name is required';
    }else{
      $name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    //email validation
    if(empty($_POST['email'])){
      $emailErr = 'email is required';
    }else{
      $email = filter_input(INPUT_POST,'name',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    //body validation
    if(empty($_POST['body'])){
      $bodyErr = 'body is required';
    }else{
      $body = filter_input(INPUT_POST,'body',FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }
    if(empty($nameErr)&&empty($emailErr)&&empty($bodyErr)){
      $sql ="INSERT INTO feedback (name,email,body) VALUES ('$name','$email','$body')";
      if($conn->query($sql)){
        echo '<h1 class="text-success">Success</h1>';
        header('Location: feedback-from-DB.php');
      }
      else echo"error";
    }
  }
?>
    <img src="./img/logo.png" class="w-25 mb-3" alt="">
    <h2>Feedback</h2>
    <p class="lead text-center">Leave feedback for Traverse Media</p>
    <form action="<?php echo  htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" class="mt-4 w-75">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control <?php echo $nameErr ?"is-invalid":null?>" id="name" name="name" placeholder="Enter your name">
        <div class="<?php echo $nameErr?"invalid-feedback":"valid-feedback"?>">name required</div>

      </div> 
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control <?php echo $emailErr ?"is-invalid":null?>" id="email" name="email" placeholder="Enter your email">
        <div class="<?php echo $emailErr?"invalid-feedback":"valid-feedback"?>">Email required</div>
      </div>
      <div class="mb-3">
        <label for="body" class="form-label">Feedback</label>
        <textarea class="form-control <?php echo $bodyErr ?"is-invalid":null?>" id="body" name="body" placeholder="Enter your feedback"></textarea>
        <div class="<?php echo $bodyErr?"invalid-feedback":"valid-feedback"?>">Feedback required</div>

      </div>
      <div class="mb-3">
        <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
      </div>
    </form>

    <?php include './inc/footer.php'; ?><!-- //! include other php pages like react component -->
    