<?php

declare(strict_types=1);

namespace App\Domain\ValueObject;

class PhoneNumber implements \JsonSerializable
{
    private string $phoneNumber;

    public function __construct(string $phoneNumber)
    {
        $validLength = strlen($phoneNumber) === 20;
        if (!$validLength) {
            throw new \Exception('Phone numbers must have a maximum of 20 numbers.');
        }

        $expectedFormat = "/\+\d\d?\d?-\d\d\d?-\d\d\d\d?\d?-\d\d\d\d/";
        if (!preg_match($expectedFormat, $phoneNumber)) {
            throw new \Exception('Nickname provided is not valid.');
        }

        $this->phoneNumber = $phoneNumber;
    }

    public function __toString()
    {
        return $this->phoneNumber;
    }

    public function jsonSerialize(): string
    {
        return $this->phoneNumber;
    }
}
