<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Posts extends Model
{
    use SoftDeletes;

    protected $table = 'posts';
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'body', 'user_id',
    ];

    public static $rules = array(
        'user_id' => 'integer',
        'body' => 'required|max:255',
    );

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
