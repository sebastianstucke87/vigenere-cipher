<?php
declare(strict_types=1);

namespace VigenereCipherTest\VigenereCipher\Entity;

use PHPUnit\Framework\TestCase;
use VigenereCipher\Entity\VigenereCipher;
use VigenereCipher\ValueObject\Alphabet;
use VigenereCipher\ValueObject\Key;

class VigenereCipherTest extends TestCase
{
    /** @var VigenereCipher */
    protected $vigenereCipher;

    public function testEncode(): void
    {
        $vc = $this->vigenereCipher;
        $this->assertEquals('rovwsoiv', $vc->encode('codewars'));
    }

    public function testDecode(): void
    {
        $vc = $this->vigenereCipher;
        $this->assertEquals('waffles', $vc->decode('laxxhsj'));
    }

    protected function setUp(): void
    {
        $alphabet = Alphabet::create('abcdefghijklmnopqrstuvwxyz');
        $key = Key::create('password');

        $this->vigenereCipher = VigenereCipher::create($alphabet, $key);
    }
}
