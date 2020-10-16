<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Landing Page Responsive with Dynamic contents";?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include "contents.php";?>

<!--header-->



<div class="container" style="background-color:#F4F6F9;">
    <div class="header">
        <h1 class="header-title"><?php echo $header[0] ; ?></br><?php echo $header[1];?></h1>
        <h3 class="header-subtext"><?php echo $header[2] ; ?></br><?php echo $header[3];?></h3>
    </div>
</div>
    
</body>
</html>