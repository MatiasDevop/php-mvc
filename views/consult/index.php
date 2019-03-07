<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php require 'views/header.php'?>
    <div id="main">
        <h1 class="center"> this view is for consults...</h1>
        <div id="res" class="center"></div>  

        <table width="100%">
            <thead>
                <tr>
                    <th>Matricula</th>
                    <th>name</th>
                    <th>apellido</th>
                </tr>
            </thead>
            <!-- tbody is the father in this case -->
            <tbody id="tbody-students"> 
                <?php
                    include_once('models/student.php');
                    foreach($this->students as $row){
                        $student=new Student();
                        $student= $row;
                      
                    ?>
                    <!-- in javascript you need know to parent is id=  -->
                <tr id="fila-<?php echo $student->matricula; ?>">
                    <td><?php echo $student->matricula; ?></td>
                    <td><?php echo $student->name; ?></td>
                    <td><?php echo $student->lastname; ?></td>
                    
                    <td><a href="<?php echo constant('URL') . 'consult/lookAtStudent/' . $student->matricula; ?>">edit</a></td>
                    <td><button class="bdelete" data-matricula="<?php echo $student->matricula; ?>">delete</button></td>
                    <!-- <td><a href="<?php echo constant('URL') . 'consult/deleteStudent/' . $student->matricula; ?>">delete</a></td> -->
                </tr>
                <?php }  ?>
            </tbody>
        </table>
        <!-- <?php var_dump($this->students); ?> -->
    
    </div>
    <?php require 'views/footer.php' ?>

    <script src="<?php echo constant('URL'); ?>public/js/main.js"></script>
</body>
</html>