<?php
declare(strict_types=1);

use VigenereCipher\Entity\VigenereCipher;
use VigenereCipher\ValueObject\Alphabet;
use VigenereCipher\ValueObject\Key;

require __DIR__.'/vendor/autoload.php';

$alphabet = ' !"#$%&\'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~';
$password = 'this is my password';

$cipher = VigenereCipher::create(
    Alphabet::create($alphabet),
    Key::create($password)
);

echo $cipher->encode('Hello World!'); // prints "=NV`oiKo`fdq"
echo "\n";
echo $cipher->decode('=NV`oiKo`fdq'); // prints "Hello World!"
