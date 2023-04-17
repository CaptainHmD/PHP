<?php include './inc/header.php';
$feedback = [
  [
    "feedback" => "feedback1 owiDHjwADH",
    "name" => "hamad"
  ],  [
    "feedback" => "feedback2 dOAIWHDH(OAWdh",
    "name" => "ibrahim"
  ],  [
    "feedback" => "feedback3 fddawd",
    "name" => "saleh"
  ]
]; ?>

<?php if (empty($feedback)) : ?>
  <h1>There is no feedback</h1>
<?php endif; ?>
<h2>Feedback</h2>

<?php foreach ($feedback as $item) : ?>

  <div class="card my-3 w-50">
    <div class="card-body text-center">
      <?php echo $item['feedback'] ?>
    </div>
    <div class="text-secondary my-3 text-center">
      <?php echo  "Written by".$item["name"]?>
    </div>
  </div>
<?php endforeach; ?>

<?php include './inc/footer.php'; ?>