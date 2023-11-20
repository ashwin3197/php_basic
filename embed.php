<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // data type
    $str ="hello & welcome to php";
    $num =5;
    $float =7.6;
    echo "<h1>" .$str ."<h1>";
    echo "<h1>" .$num ."<h1>";
    echo "<h1>" .$float ."<h1>";
    echo "hello world";

    // array
    $laptop_brands =array("HP","DELL" ,"LENOVO");
    echo var_dump($laptop_brands);

    // Define 
    define("laptop","Hp","Dell and Lenonvo");
    echo laptop;
    ?>
    
</body>
</html>