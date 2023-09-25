<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = "categories";
    protected $fillable = ['name'];

    public function politic(){

        return $this->hasMany("App\Models\Politic","category_id");

    }

    public function economy(){

        return $this->hasMany("App\Models\Economy","category_id");

    }

    public function sport(){

        return $this->hasMany("App\Models\Sport","category_id");

    }

    public function technology(){

        return $this->hasMany("App\Models\Technology","category_id");

    }

    public function popular(){

        return $this->hasMany("App\Models\Popular","category_id");

    }

    public function more(){

        return $this->hasMany("App\Models\More","category_id");

    }

}
