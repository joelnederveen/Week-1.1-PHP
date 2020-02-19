<?php

date_default_timezone_set('Europe/Amsterdam');

$tijd = date("H:i");




if (($tijd > "00:00" && $tijd < "06:00")) {
    $tekst = "Goedenacht";
    $background = "goedenacht";
}

if (($tijd > "06:00" && $tijd < "12:00")) {
    $tekst = "Goedemorgen";
    $background = "goedemorgen";
}

if (($tijd > "12:00" && $tijd < "18:00")) {
    $tekst = "Goedemiddag";
    $background = "goedemiddag";
}

if (($tijd > "18:00" && $tijd < "23:59")) {
    $tekst = "Goedenacht";
    $background = "goedeavond";
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>eindopdracht</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class = <?php echo $background?>>
        <h1> <br> <br><?php echo $tekst ?> <br> de tijd is <?php echo $tijd ?></h1>
    </div>



</body>
</html>