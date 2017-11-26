<?php

namespace App;
use App\Post;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected$fillable=[
        'id',
        'content',
        'is_feature'
    ];


public function post()
{
return $this->belongsTo(Post::class);
}

}
