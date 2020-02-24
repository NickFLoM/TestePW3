<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/index.css">
    </head>
    <body>

<?php
    $json = file_get_contents('questoes.json');
    $quest = json_decode($json); //decodifica o json 
    $act = 1;
    echo "<center>";
    echo "Bem vindo, o teste começou";
    echo "<center>";

    //var_dump($quest);

    foreach ($quest as $q)
    {
        echo "<justify>";
        echo "<br>";
        echo "<img src='img/$act.jpg'>";
        echo "<br>";
        echo "<br>";
        echo ($act++)."-$q->enunciado";
        echo " (Correta: $q->correct)";
        echo "<br>";
        foreach ($q->alternativas as $alt){
            echo "<input type='radio' name='alternativas$act'>";
            echo "$alt";
            echo "<br>";
        }
        echo "<p></p>";
        echo "<br>";
        echo "</justifY>";
    }
    echo "<button type='button' onclick='validar'>Resultado</button>";
  ?>
  <?php
    class Validando{
    public function validar(){
       
        $json = file_get_contents('questoes.json');
        $valid = json_decode($json); //decodifica o json 
        $som = 1;

        foreach ($valid as $result)
        {
            echo "$som++.$result->correct";
            echo "";
        }
       
    }}
?>
    </body>
</html>