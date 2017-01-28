<?php
$email = "firstname.lastname@provider.com";
$username = substr($email, 0, strpos($email, "@"));
echo $username; // firstname.lastname

// shortcut, der Vollständigkeit halber
$username = strstr($email, "@", true);
echo $username; // firstname.lastname


$str = "Das Auto hatte eine rote Farbe.";
$pos = strpos($str, "rot");

if ($pos !== false) {
    echo "Das Auto war rot";
} else {
    echo "Das Auto war nicht rot";
}