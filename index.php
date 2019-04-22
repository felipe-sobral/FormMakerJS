<!doctype html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>FormMakerPHP Example</title>
    </head>
    <body>

        <?php
            ini_set('display_errors',1);
            ini_set('display_startup_erros',1);
            error_reporting(E_ALL);

            require "lib/FormMaker.php";

            function generator($qnt){
                $comp ="";
                for($i = 0; $i < $qnt; $i++){
                    $comp .= '"c'.$i.'": {
                                "shape": "input",
                                "id": "teste", 
                                "type": "text", 
                                "label": "Teste ['.$i.']",
                                "placeholder": "'.$i.'",
                                "help": "Campo ajuda"
                            },';
                }

                return $comp;
            }

            /*$json = '{ 
                "id": "formulario",
                "framework": "bootstrap",                    
                "components": {
                                "comeco": {
                                        "shape": "input",
                                        "id": "teste", 
                                        "type": "text", 
                                        "label": "Inicio",
                                        "placeholder": "Teste [inicio]",
                                        "help": "Campo ajuda"
                                      },

                                '.generator(1000).'
                                
                                "fim": {
                                    "shape": "input",
                                    "id": "teste", 
                                    "type": "text", 
                                    "label": "Fim",
                                    "placeholder": "Teste [fim]",
                                    "help": "Campo ajuda"
                                  }
                              }
            }';*/

            $json = '{
                
                "id": "formulario",
                "components": {
                                "input": {
                                        "id": "teste", 
                                        "type": "text", 
                                        "label": "Inicio",
                                        "placeholder": "Teste [inicio]",
                                        "help": "Campo ajuda"
                                }
                              }

            }';

            $formulario = new FormMaker($json);
            $formulario->make();
            $formulario->print();
        ?>


        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        

        <!-- sudo browser-sync start -f . -s -->
    </body>
</html>