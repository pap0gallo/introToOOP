<?php

namespace App;

class User
{
    public $name;
    public $addresses;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function addAddress(object $address)
    {
        $this->addresses[] = $address;
        //чтобы была возможность добавлять несколько адресов.
    }
    public function getAddresses()
    {
        return $this->addresses;
    }
    public function getName()
    {
        return $this->name;
    }
}