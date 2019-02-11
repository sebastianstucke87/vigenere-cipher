<?php
declare(strict_types=1);

namespace VigenereCipher\Entity;

use VigenereCipher\ValueObject\Alphabet;
use VigenereCipher\ValueObject\Key;

final class VigenereCipher
{
    /** @var Alphabet */
    private $alphabet;
    /** @var Key */
    private $key;

    public static function create(Alphabet $alphabet, Key $key): self
    {
        $vigenereCipher = new self();
        $vigenereCipher->alphabet = $alphabet;
        $vigenereCipher->key = $key;

        return $vigenereCipher;
    }

    public function encode(string $text): string
    {
        $cipher = '';

        for ($i = 0; $i < strlen($text); $i++) {
            $cipher .= $this->encodeLetter($text[$i], $i);
        }

        return $cipher;
    }

    public function decode(string $cipher): string
    {
        $text = '';

        for ($i = 0; $i < strlen($cipher); $i++) {
            $text .= $this->decodeLetter($cipher[$i], $i);
        }

        return $text;
    }

    private function encodeLetter(string $letter, int $position): string
    {
        return $this->shiftLetter($letter, $this->getKeyShiftAtPosition($position));
    }

    private function shiftLetter(string $letter, int $shiftSize): string
    {
        $pos = strpos($this->alphabet->getString(), $letter);

        if ($pos === false) {
            return $letter;
        }

        $length = strlen($this->alphabet->getString());
        $cipherLetterPos = ($pos + $shiftSize + $length) % $length;

        return $this->alphabet->getString()[$cipherLetterPos];
    }

    private function getKeyShiftAtPosition(int $position): int
    {
        return strpos(
            $this->alphabet->getString(),
            $this->key->getString()[$position % strlen($this->key->getString())]
        );
    }

    private function decodeLetter($letter, $position): string
    {
        return $this->shiftLetter($letter, -$this->getKeyShiftAtPosition($position));
    }
}
