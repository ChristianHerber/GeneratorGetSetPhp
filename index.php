<?php
    $pageTitle = "Gerador de Get e Set para PHP";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $pageTitle; ?></title>
    <meta name="description" content="Gerador Get e Set, métodos para a linguagem de progamação PHP.">
    <meta name="keywords" content="PHP,php,get,set,Get,Set,getset,getters,setters,metodos,poo,programação,orientado a objetos,gerador,gerador php,function">
    <meta name="author" content="Christian Herber dos Santos">
    <meta name="robots" content="index, follow">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script data-ad-client="ca-pub-8402884499631597" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>
<body>

    <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="http://php.net">
        <img src="new-php-logo.svg"  height="30" class="d-inline-block align-top" alt="PHP logo">
        Get e Set
    </a>
    </nav>

    <div class="container mt-4">
        
        <div class="row">

        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- phpgetset01 -->
        <ins class="adsbygoogle"
            style="display:block"
            data-ad-client="ca-pub-8402884499631597"
            data-ad-slot="8886320012"
            data-ad-format="auto"
            data-full-width-responsive="true"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>


            <div class="col-md-4 col-sm-12">
                
                <div class="alert alert-primary">
                    <p>Os métodos <strong>get</strong> e <strong>set</strong> são utilizados para acessar os atributos que estão dentro de uma classe.</p> <p>Por exemplo temos a Classe "Pessoa" com o atributo "nome", para que eu possa passar uma valor a este atributo e posteriormente pegar o valor dele, preciso utilizar os métodos get e set.</p>
                    
                    <code>
                        class Pessoa {<br><br>

                          //atributo nome<br>
                          private $nome;<br><br>
                          
                          //método que pega o valor do atributo<br>
                          public function getNome(){<br>
                            return this->nome;<br>
                          }<br><br>
                          
                          //método que insere um valor ao atributto<br>
                          public function setNome($nome){<br>
                           $this->nome = $nome;<br>
                          }<br><br>
                          
                        }//fim classe Pesoa<br>
                    </code>
                </div>
                
            </div>
        
        
            <div class="col-md-8 col-sm-12">

                <h2 class="title"><?php echo $pageTitle; ?></h2>
                
                <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" class="mt-4">
                    <div class="form-group">
                        <textarea class="form-control" name="gerador" placeholder="Digite aqui os atributos separados com , (virgula)" autofocus></textarea><br>
                    </div>
                    <input class="btn btn-lg btn-success col-12" type="submit" value="Gerar">
                </form>

                <?php

                    if(!empty($_POST['gerador'])){

                        echo "<code><div class='code'>";

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
                        echo "<p class='alert alert-danger mt-4'>Digite os ATRIBUTOS no campo de texto acima.
                            Sepere cada um com , (virgula)<br>
                            NÃO adicione espaços <br> Ex.: <code>nome,idade,nacionalidade</code></p>";
                    }

                    
                ?>

            </div><!-- /.col-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
    
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- phpgetset02 -->
    <ins class="adsbygoogle"
        style="display:block"
        data-ad-client="ca-pub-8402884499631597"
        data-ad-slot="9093654833"
        data-ad-format="auto"
        data-full-width-responsive="true"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    
    <footer class="container-fluid text-center pt-2">
        <p>Orgulhosamente feito com <strong class="text-primary">PHP</strong> 😉 </p>
    </footer>

</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>