<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class More extends Model
{
    use HasFactory;

    protected $table = "mores";
    protected $fillable = ["title","content","photo","category_id","type_id"];


    public function type(){
        return $this->belongsTo("App\Models\Type","type_id");
    }

    public function category(){
        return $this->belongsTo("App\Models\Category","category_id");
    }


}
