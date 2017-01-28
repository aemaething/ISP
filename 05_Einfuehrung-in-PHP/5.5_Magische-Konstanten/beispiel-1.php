<?php

function displayError(
    string $dir, string $file,
    string $function, int $line
) : void
{
    printf(
        "Es ist ein Fehler aufgetreten:\n".
        "Verzeichnis: %s\n".
        "Datei: %s\n".
        "Funktion: %s\n".
        "Zeile: %d\n\n",
        $dir, basename($file), $function, $line
    );
}


function foo() : void
{
    // some 'foo' magic
    $error = true;
    if ($error) {
        displayError(__DIR__, __FILE__, __FUNCTION__, __LINE__ - 3);
    }
}


function bar() : void
{
    // some 'bar' magic
    $error = true;
    if ($error) {
        displayError(__DIR__, __FILE__, __FUNCTION__, __LINE__ - 3);
    }
}


foo();
bar();