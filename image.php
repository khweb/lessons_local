<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Изображение</title>
</head>
<body>

<?php
$gallery = [1 => '1.jpg', 2 =>'2.jpg',3 =>'3.jpg',4 => '4.jpg'];
$image = $_GET[id];    
$num = $_GET[code];    
?>
    
    <div style="margin:auto;text-align: -webkit-center;padding-top: 15%;">

        <?php if ($num == true){?>
        <img src="image/<?php echo $gallery [$num];?>">
        <?php } else null; ?>

    
    </div>

</body>
</html>