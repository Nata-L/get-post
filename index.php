<?php 

    /*echo '<pre>';
    print_r($_GET);
    echo '</pre>';*/

    // if(!isset($_GET['id'])) {
    //     exit('нет id');
    // }
    $id = $_GET['id'];

    $text = file_get_contents("data/data-$id.txt");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Some Document</title>
</head>
<body>
    <hr><header> Header of site</header><hr>

    <?php
       for($i = 1; $i < 4; $i++) {
           echo "<a href=\"index.php?id=$i\">data-$i</a><br>";
       }
    ?>

<?php 
    echo nl2br($text);
?>

</body>
<hr>
<footer>Footer of site</footer><hr>
</html>