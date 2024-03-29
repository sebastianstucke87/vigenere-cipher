<?php
declare(strict_types=1);

namespace VigenereCipher\ScalarValue;

class StringValue
{
    /** @var string */
    private $string;

    public function __construct(string $string)
    {
        $this->string = $string;
    }

    public function getString(): string
    {
        return $this->string;
    }
}
