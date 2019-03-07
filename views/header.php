<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/default.css">
</head>
<body>
    <div id="header">
        <ul>
            <!-- this line php on href is to show always page main url that was at config.php -->
            <li><a href="<?php echo constant('URL'); ?>main">Inicio</a></li>
            <li><a href="<?php echo constant('URL'); ?>newt">New</a></li>
            <li><a href="<?php echo constant('URL'); ?>consult">Consult</a></li>
            <li><a href="<?php echo constant('URL'); ?>help">Help</a></li>
        </ul>
    </div>
</body>
</html>