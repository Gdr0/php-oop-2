<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title></title>

    <?php
 require_once(__DIR__ . "/db.php");

    ?>
</head>
<body>
    
<div class="row">
    <?php foreach ($products as $product){
        ?>
    
        <div class="card" style="width: 18rem; margin: 10px;">
            <img src="<?php echo $product->getImage(); ?>" class="card-img-top" alt="Product Image">
            <div class="card-body">
                <h5 class="card-title"><?php echo $product->getTitle(); ?></h5>
                <p class="card-text">Price: £<?php echo $product->getPrice(); ?></p>
              
            </div>
        </div>
        <?php
    } 
    ?>
  
</div>

  </div>
</div>

</body>
</html>
