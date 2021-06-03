<?php

namespace App\Entities;

use CodeIgniter\Entity;

class penduduk extends Entity
{
    public function setPassword(String $password)
    {
        $salt = uniqid('', true);
        $this->attributes['salt'] = $salt;
        $this->attributes['password'] = md5($salt, $password);

        return $this;
    }
}
