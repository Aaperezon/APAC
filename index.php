<?php
include "./services/helper.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APAC</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/bootstrap.min.js"></script>
</head>
<body>
    <?php
    include './header.php';
    ?>
    <div class="container" >
        <div class="row">
                <div class="col">

                    <?php
                        $information = json_decode(Get("services/readregistro.php",[]), true);
                        // $information = array(1,1,1,1,1,1,1,1,1,1,1);
                        $index = 0;
                        $cards_per_row = 5;
                        foreach($information as $clave => $valor ){
                            if($index % $cards_per_row == 0){
                                echo('<div class="row">');
                            }
                            echo ($valor[14]!="1") ? "bg-danger" : "bg-success";
                            echo('
                            
                            <div class="card " style="width: 12rem; margin:2%;">
                                <img src="./src/img/ejemplo.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <input hidden type="text" name="id" value="'.$valor[0].'" >
                                    <h5 class="card-title">'.$valor[4].'</h5>
                                    <p class="card-text"> '.$valor[9].' </p>
                                    <center>
                                        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_editar" >Editar</a>
                                    </center>
                                </div>
                            </div>
                            
                            ');

                            $index+=1;
                            if($index % $cards_per_row == 0){
                                echo('</div>');
                            }
                        }
                        if($index % $cards_per_row != 0){
                            echo('</div>');
                        }
                    ?>

                </div>
        </div>
        <?php
            include './modal_editar.php';
            include './modal_agregar.php';
        ?>



    <!-- Example for clients in apaccuernavaca.com -->

    <!-- 
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
            <img src="..." class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            </div>
        </div>
    </div>
 -->


    
</body>
<footer>
<script src="./js/main.js"></script>
</footer>
</html>