<?php

namespace Src\Models;

use BD\Database\Data;

class User extends Data
{
    public function __construct()
    {
        parent::__construct('users', ['name', 'email'], 'user_id');
    }

    public function save() : bool
    {
        /** @todo Cryptografar a senha antes de salvar. */
        return parent::save();
    }
}