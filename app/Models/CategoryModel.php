<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Entities\Category;

class CategoryModel extends Model
{
    protected $table      = 'categories';
    protected $primaryKey = 'id';

    protected $returnType     = Category::class;
    protected $useSoftDeletes = false;

    protected $allowedFields = ['name', 'description'];

    protected $useTimestamps = false;
}
