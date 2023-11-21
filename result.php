<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Summary of the data submited</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
echo '<div class="image"><img src="anh.png" alt="ảnh"></div><br>';

if(isset($_POST['name'])){
    echo '<div class="thank">Thx you '.$_POST['name'].' !!</div> <br>';
}
if(isset($_POST['club'])){
    echo '<div class="club">We received your application for the '.$_POST['club'].'</div><br>';
}
$kt = false;

if (isset($_POST['skill'])) {
    
    echo '<div class="skills">You are ';
    foreach ($_POST['skill'] as $value) {
        if (!$kt) {
            echo $value;
            $kt = true;
        } else {
            echo ' and ' . $value;
        }
    }
    echo '</div>';
}
if(isset($_POST['time'])){
    echo '<div class="time">You wil be available on '.$_POST['time'].'</div>';
}

?>

</body>
</html>
