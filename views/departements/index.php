<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>I nostri dipartimenti</title>
  <style>
    .department {
      border: 1px solid black;
      padding: 20px;
      border-radius: 8px;
    }
  </style>
</head>

<body>

  <?php
  foreach ($result as $department) :
  ?>
    <div class="department">
      <h3>
        <?php echo $department->name ?>
      </h3>
      <p>
        <?php echo $department->email ?>
      </p>
    </div>
  <?php
  endforeach;
  ?>

</body>

</html>