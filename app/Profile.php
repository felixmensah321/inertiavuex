<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'user_id',
        'company',
        'cellnumber',
        'email',
        'role'
    ];
    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
