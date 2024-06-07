<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'profiles';
    protected $fillable = [
        'firstName',
        'lastName',
        'contactNo',
        'address',
        'profilePicturePath',
        'birthday'
    ];

    protected $hidden = [
        'contactNo',
        'address'
    ];

    public function users() {
        return $this->belongsTo(User::class);
    }
}
