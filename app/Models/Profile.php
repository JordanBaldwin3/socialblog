<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'bio',
    ];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function image() {
        return $this->morphOne('App\Models\Image', 'imageable');
    }
}
