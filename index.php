<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" >
        <meta name="keywords" content="IFCD0210, web development, Cet, php" />
        <meta name="author" content="Ignasi Ortiz" />
        <meta name="description" content="test arrays php" />
        <title>Exercici PhP Arrays</title>
    </head>
    <body>
        <header>
            <H1> Exercici en PHP - practicar arrays </H1>              
        </header>
        <main>
            <section>
                <label id="mostrar">text de prova</label>
            </section>
            <hr>
            <section>
                <button id="es" onClick=toSpanish()>ESPAÑOL</button>
                <button id="en" onClick=toEnglish()>ENGLISH</button>
                <button id="fr" onClick=toFrançais()>FRANÇAIS</button>
                <button id="ca" onClick=toCatalan()>CATALÀ</button>
            </section>
    
            <?php

                // declaració de variables:
                // $diccionario = [''];
                // $diccionario[0] = ('es'=>'frase en español');
                // $diccionario[1] = ('en'=>'sentence in english');
                // $diccionario[2] = ('fr'=>'expression en français');
                // $diccionario[3] = ('ca'=>'frase en català');
                $diccionario = array('es'=>'frase en español','en'=>'sentence in english','fr'=>'expression en français','ca'=>'frase en català');
                // $mySentence = getElementById('mostrar').value;

                function toSpanish () {
                    return echo($diccionario['es']);
                }
                function toEnglish () {
                    return alert($diccionario['en']);
                }
                function toFrançais () {
                    return alert($diccionario['fr']);
                }
                function toCatalan () {
                    return alert($diccionario['ca']);
                }
            ?>

        </main>
    </body>
</html>
