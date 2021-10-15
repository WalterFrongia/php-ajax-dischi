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
        include_once __DIR__ ."/db/database.php";
    ?>
    <?php
        include_once __DIR__ . "/partials/header.php";
        include_once __DIR__ . "/partials/main.php";
    ?>

    <?php
        //con questo si cicla dentro l'array
        foreach($vueDischi as $key => $disc){
            // var_dump($disc); //questo fa vedere gli array 
        ?>
        <!-- stampo php con chiave php in array  -->
        <li> <?php echo $disc['images'];?> </li>
        <li> <?php echo $disc['title'];?> </li>
        <li> <?php echo $disc['artist'];?> </li>
        <li> <?php echo $disc['year'];?> </li>
    <?php } ?>
    
</body>
</html>