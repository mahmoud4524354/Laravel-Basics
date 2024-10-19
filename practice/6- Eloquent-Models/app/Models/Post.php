<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

//    protected $table = "my_posts" ;
//    انا هنا بقلو مشهستخدم ال timestamps
//    public $timestamps = false;

//     protected $primaryKey = "post_id" ;

protected $fillable = ["title", "body"];

//    protected $guarded = [];
//    protected $guarded = ["body"];

public function scopeMEGO($query){
    return $query->where("body", "mego" );
}

}



