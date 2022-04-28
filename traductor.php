<?php
    // declaració de variables:
    // $diccionario = [''];
    // $diccionario[0] = ('es'=>'frase en español');
    // $diccionario[1] = ('en'=>'sentence in english');
    // $diccionario[2] = ('fr'=>'expression en français');
    // $diccionario[3] = ('ca'=>'frase en català');
    $diccionario = array('es'=>'frase en español','en'=>'sentence in english','fr'=>'expression en français','de'=>'Satz auf deutsch');
    // $mySentence = getElementById('mostrar').value;

    // function toSpanish() {
    //     return echo($diccionario['es']);
    // }
    // function toEnglish() {
    //     return echo($diccionario['en']);
    // }
    // function toFrançais() {
    //     return echo($diccionario['fr']);
    // }
    // function toCatalan() {
    //     return echo($diccionario['ca']);
    // }

    if(isset($_POST['TraductorES']))
    {
        echo($diccionario['es']);        
    }
    if(isset($_POST['TraductorEN']))
    {
        echo($diccionario['en']);        
    }
    if(isset($_POST['TraductorFR']))
    {
        echo($diccionario['fr']);        
    }
    if(isset($_POST['TraductorDE']))
    {
        echo($diccionario['de']);        
    }

    echo "<br><br><br>";
    echo "<a href='.\index.php'><button type='button'>Tornar...</button></a>";
?>
