<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category';
    public function getAllCategory()
    {
        $category =DB::table($this->table)
        ->orderBy('hang','asc')
        ->get();
        return $category;
    }
}
