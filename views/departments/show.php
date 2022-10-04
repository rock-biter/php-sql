<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php
  foreach ($result as $department) :
  ?>
    <div style="border: 1px solid black; border-radius: 10px; padding: 15px;">
      <h3>
        <?php echo $department->name ?>
      </h3>
      <p>
        <?php echo $department->email ?>
      </p>
      <p>
        <?php echo $department->address ?>
      </p>
      <p>
        <?php echo $department->phone ?>
      </p>
      <a href="<?php echo $department->website ?>">
        <?php echo $department->website ?>
      </a>
    </div>
  <?php
  endforeach;
  ?>

</body>

</html>