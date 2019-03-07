<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>news</title>
</head>
<body>
    <?php require 'views/header.php'?>
    <div id="main">
        <h1 class="center">Seccion for newsssss</h1>
        <div class="center"><?php echo $this->message; ?></div>
        <!-- here at form tag always becarfully with URL Controller name their methods -->
        <form action="<?php echo constant('URL'); ?>newt/registerNewStudent" method="POST">
            <p>
                <label for="matricula"> Matricula</label>
                <input type="text" name="matricula" id="" required>

            </p>
            <p>
                <label for="name">Name</label>
                <input type="text" name="name" id="" required>
                
            </p>
            <p>
                <label for="lastname">Last Name</label>
                <input type="text" name="lastname" id="" required>
                
            </p>
            <p>
                <input type="submit" name="Register new student">
                
            </p>
        </form>
    </div>
    <?php require 'views/footer.php' ?>

</body>
</html>