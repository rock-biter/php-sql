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
  if ($result && $result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
  ?>
      <div style="border: 1px solid black; border-radius: 10px; padding: 15px;">
        <h3>
          <?php echo $row['name'] ?>
        </h3>
        <p>
          <?php echo $row['email'] ?>
        </p>
        <p>
          <?php echo $row['address'] ?>
        </p>
        <p>
          <?php echo $row['phone'] ?>
        </p>
        <a href="<?php echo $row['website'] ?>">
          <?php echo $row['website'] ?>
        </a>
      </div>
  <?php
    }
  } else if ($result) {
    echo 'nessun risultato';
  } else {
    echo 'Query error';
  }
  ?>

</body>

</html>