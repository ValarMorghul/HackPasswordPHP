<?php
echo "Insira uma senha: ";
$u_pwd = trim(fgets(STDIN));

$pwd = ['a','b','c','d','e','f','g','h','i','1','2','3','4','5'];

$pw = "";
while ($pw !== $u_pwd) {
    $pw = "";
    for ($letter = 0; $letter < strlen($u_pwd); $letter++) {
        $guess_pwd = $pwd[array_rand($pwd)];
        $pw = $guess_pwd . $pw;
        echo $pw . PHP_EOL;
        echo "Quebrando senha... Aguarde" . PHP_EOL;
        echo "Senha hackeada: " . $pw . PHP_EOL;
    }
}
?>
