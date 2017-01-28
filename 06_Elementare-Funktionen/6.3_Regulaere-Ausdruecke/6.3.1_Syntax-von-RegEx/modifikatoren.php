<?php

// ohne Modifikator
$regex = "/^[a-z ]+$/";
var_dump(preg_match($regex, "Hallo Welt"));
// int(0)



// caseless Modifikator
$regex = "/^[a-z ]+$/i";
var_dump(preg_match($regex, "Hallo Welt"));
// int(1)



// dotall Modifikator
$str = "Hallo\nWelt";

// RegEx auf ein beliebiges Zeichen
$regex = "/./";
preg_match_all($regex, $str, $results);
echo count($results[0]), "\n"; // 9 Zeichen sind (Hallo + Welt), ohne das Newline, das nicht matcht
// 9

// RegEx auf ein beliebiges Zeichen inkl. Newline
$regex = "/./s";
preg_match_all($regex, $str, $results);
echo count($results[0]), "\n"; // 10 Treffer, da nun 10 Zeichen matchen
// 10



// multiline Modifikator
$str = "hallo\nhallo";
$regex = "/^hallo$/";
var_dump(preg_match($regex, $str));
// int(0)

$regex = "/^hallo$/m";
var_dump(preg_match($regex, $str));
// int(1)



// extra Modifikator
$str = "Ich habe 122,50 € ausgegeben.";

// komplexer regex
$regex = '/^.*?(\d{1,6},?(\d{1,2})?\s?€).*$/';

// alternative schreibweise:
$regex = '/
           ^.*?          # Am Textanfang beginnen
           (             # Klammer für $1
           \d{1,6}       # 1-6 Zahlen für Eurobetrag
           ,?            # Komma für Cent-Beträge (optional)
           (\d{1,2})?    # Zwei Nachkommastellen (optional)
           \s?€          # Leerzeichen (optional) und €-Zeichen
           )             # Klammer für $1 schließen
          . *$           # bis zum Ende
          /x ';

var_dump(preg_match($regex, $str));
// int(1)


// UTF-8 Modifikator
// der Violinenschlüssel, ein 4-byte Zeichen in UTF-8
$utf8Sequence = "\xf0\x9d\x84\x9e";
echo "Das UTF-8 Zeichen: ", $utf8Sequence, "\n";
// Das UTF-8 Zeichen: 𝄞

// RegEx auf ein beliebiges Zeichen
$regex = "/./";
preg_match_all($regex, $utf8Sequence, $results);
echo count($results[0]), "\n"; // 4 Treffer, da es 4 Zeichen (Byte) sind
// 4

// RegEx auf ein beliebiges Zeichen inkl. UTF-8 Support
$regex = "/./u";
preg_match_all($regex, $utf8Sequence, $results);
echo count($results[0]), "\n"; // 1 Treffer, da es ein UTF-8 Zeichen ist
// 1