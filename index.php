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
                <label id="mostrar">Mostra una frase en aquests 4 idiomes, predefinida i emmagatzemada en un Array associatiu.</label>
            </section>
            <hr>
            <form method="post" action="traductor.php">
                <input type="submit" name="TraductorES" value="" style="background-image: url(./assets/es.png); width:65px; height:65px; border:none;">
                <input type="submit" name="TraductorEN" value="" style="background-image: url(./assets/en.png); width:65px; height:65px; border:none;">
                <input type="submit" name="TraductorFR" value="" style="background-image: url(./assets/fr.png); width:65px; height:65px; border:none;">
                <input type="submit" name="TraductorDE" value="" style="background-image: url(./assets/de.png); width:65px; height:65px; border:none;">
            </form>

            <!-- <section>
                <button id="es" onClick=<?php echo(toSpanish()) ?> >ESPAÑOL</button>
                <button id="en" onClick=<?php echo(toEnglish()) ?>>ENGLISH</button>
                <button id="fr" onClick=<?php echo(toFrançais()) ?>>FRANÇAIS</button>
                <button id="ca" onClick=<?php echo(toCatalan()) ?>>CATALÀ</button>
            </section> -->            

        </main>
    </body>
</html>
