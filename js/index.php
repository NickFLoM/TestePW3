<?php
    $json = file_get_contents('questoes.json');
    $quest = json_decode($json); //decodifica o json 
    $act = 0;

    //var_dump($quest);

    foreach ($quest as $q)
    {
        echo "<body>";
        echo "<br>";
        echo "<img src='img/$act.jpg'>";
        echo " $q->enunciado ";
        echo "<br>";
        echo  $act++.")q->enuciados";
        echo "(Correta: $q->correct)";
        echo "<br>";
        foreach ($q->alternativas as $alt){
            echo "<input type='radio' name='alternativas$act'>";
            echo "$alt";
            echo "<br>";
        }
        echo "<p></p>";
        echo "<br>";
        echo "<body>";
    }
?>