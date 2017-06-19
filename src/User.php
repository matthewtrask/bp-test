<?php

namespace Trask\BpTest;

use Trask\BpTest\Exceptions\InvalidArgumentException;

class User
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $email;

    public function __construct(string $name, string $email)
    {
        $this->isString($name);
        $this->isString($email);
        $this->setName($name);
        $this->setEmail($email);
    }

    private function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName() : string
    {
        return $this->name;
    }

    private function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail() : string
    {
        return $this->email;
    }

    private function isString($name)
    {
        if (! is_string($name)) {
            throw new InvalidArgumentException(sprintf('%s is not a string', $name));
        }
    }
}
