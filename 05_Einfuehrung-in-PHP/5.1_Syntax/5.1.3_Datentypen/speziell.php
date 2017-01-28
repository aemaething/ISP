<?php

// null
$a = null;
if ($a == null) {
    echo "a ist unbestimmt\n";
}


// resource
$dh = opendir(sys_get_temp_dir());  // öffnet das TMP Dir des OS
if (is_resource($dh)) {
    echo "dh ist ein Directory-Handle\n";
}


// diese funktion gibt nichts zurück
function justATest(string $value) : void
{
    // do something
}

// dies geht damit eben nicht mehr.
// $c = justATest("hallo");

// dies geht
justATest("hallo");