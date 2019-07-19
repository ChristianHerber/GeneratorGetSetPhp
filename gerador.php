<?php
    $pageTitle = "Gerador de Get e Set para PHP";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-12">

                <h2 class="title"><?php echo $pageTitle; ?></h2>
                
                <form action="gerador.php" method="post">
                    <div class="form-group">
                        <textarea class="form-control" name="gerador" placeholder="Digite aqui os atributos separados com , (virgula)" autofocus></textarea><br>
                    </div>
                    <input class="btn btn-lg btn-success col-12" type="submit" value="Gerar">
                </form>

                <?php

                    if(!empty($_POST['gerador'])){

                        echo "<code><div class='' 
                            style='
                                height:350px;
                                overflow:auto;
                                margin-top:30px;
                                border:1px solid #ccc;
                                padding:15px;
                                background:#111;'>";

                        $gerador = $_POST['gerador'];

                        $g = explode(',',$gerador);

                        foreach ($g as $gr) {
                            
                            echo "<p>public function get".ucfirst($gr)."(){ <br>
                                return \$this->$".strtolower($gr).";<br>
                                }</p>
                                <p>public function set".ucfirst($gr)."($".strtolower($gr)."){ <br>
                                \$this->gerador = $".strtolower($gr).";<br>
                                }</p>";

                        }

                        echo "</div></code>";

                    } else {
                        echo "<p class='alert alert-danger'>Digite os ATRIBUTOS no campo de texto acima.
                            Sepere cada um com , (virgula)</p>";
                    }

                    
                ?>

            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->

</body>
</html>