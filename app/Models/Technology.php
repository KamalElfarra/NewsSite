<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    use HasFactory;
    protected $table = "technologies";
    protected $fillable = ['title','content','photo','category_id'];

    public function category(){

        return $this->belongsTo("App\Models\Category","category_id");

    }

}
