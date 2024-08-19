<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RGB Slider</title>
    <link rel="stylesheet" href="style.css">
    <?php
	include_once("../icon.php");
	?>
</head>
<body>
    <div id="color">
        <div id="rgb">rgb slider</div>
    </div>

    <div class="picker">
        Red <input type="range" min="0" max="255" step="1" id="red">
        Green <input type="range" min="0" max="255" step="1" id="green">
        Blue <input type="range" min="0" max="255" step="1" id="blue">
    </div>

    <script src="script.js"></script>
</body>
</html>