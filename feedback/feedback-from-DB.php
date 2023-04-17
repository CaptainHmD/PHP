<?php include './inc/header.php';
include "./config/database.php";
// $feedback 
$sql = 'select * from feedback';

// $result = mysqli_query($conn,$sql);
//! OR
$result = $conn->query($sql);

$feedback = mysqli_fetch_all($result,MYSQLI_ASSOC);
 ?>

<?php if (empty($feedback)) : ?>
  <h1>There is no feedback</h1>
<?php endif; ?>
<h2>Feedback</h2>

<?php foreach ($feedback as $item) : ?>

  <div class="card my-3 w-50">
    <div class="card-body text-center">
      <?php echo $item['body'] ?>
    </div>
    <div class="text-secondary my-3 text-center">
      <?php echo  "Written by".$item["name"]." ON ".date_format(date_create($item["date"]),"m/d/y H:i");?>
    </div>
  </div>
<?php endforeach; ?>

<?php include './inc/footer.php'; ?>