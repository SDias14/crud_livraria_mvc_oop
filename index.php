<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Livraria</title>
</head>
<body>
    <?php
            /**
             * require './vendor/autoload.php';
             * esse comando vai chamar o autoload que está dentro da pasta vendor, e vai carregar as classes que estão dentro da pasta core
             */
             
            require './vendor/autoload.php'; 

            /**
             * @var object $url
             * essa variavel vai receber a classe Routes, que está dentro da pasta core
             * 
             *  // var_dump($url); //teste para ver se a classe foi instanciada
             */
             $url = new \Core\Routes();// instanciando a classe Routes

                /**
                * @method load()
                * @access public
                * @return void
                * instanciando o metodo load que vai carregar o controller
                */

             $url->load();// chamando o metodo load
           
          


     ?>
    

</body>
</html>