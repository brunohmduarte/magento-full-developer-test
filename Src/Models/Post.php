<?php

namespace Src\Models;

use BD\Database\Data;

class Post extends Data
{
    public function __construct()
    {
        parent::__construct('posts', ['author_id', 'title', 'text'], 'post_id');
    }
}