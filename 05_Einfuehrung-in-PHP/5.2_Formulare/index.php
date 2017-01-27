<?php

require_once "include/functions.php";
require_once "include/header.php";
require_once "include/navigation.php";

?>

<div class="container">
    <div class="jumbotron">
        <h1>Home</h1>
        <p class="lead">Das Form-Beispiel muss über einen Server aufgerufen werden.</p>
        <p>
            Verwenden Sie dazu den in PHP integrierten Server:
            <code>php -S localhost:8080</code><br />
            und öffnen Sie im Browser die Adresse <a href="http://localhost:8080/">http://localhost:8080/</a>.
        </p>
        <a class="btn btn-lg btn-primary" href="http://php.net/manual/de/features.commandline.webserver.php" role="button">PHP integrierter Webserver Dokumentation</a>
    </div>
</div>

<?php require_once "include/footer.php"; ?>