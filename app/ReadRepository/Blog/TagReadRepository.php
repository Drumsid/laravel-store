<?php

namespace App\ReadRepository\Blog;

use App\Entity\Blog\Tag;

class TagReadRepository
{
    public function findAll()
    {
        $tags = Tag::orderByDesc('id');
        return $tags;
    }
}