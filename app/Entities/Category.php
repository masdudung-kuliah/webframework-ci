<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Category extends Entity
{
    protected $attributes = [
        'id' => null,
        'name' => null,
        'description' => null,
    ];
}
