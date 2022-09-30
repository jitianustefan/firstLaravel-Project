<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];
    
    //use HasFactory;

    public function profileImage()
    {
        $imagePath=($this->image) ? $this->image : 'profile/DuRYLHKNwN6qcdQelOVvZb81tvahBxKbz2nLQAXe.png';

        return '/storage/' . $imagePath;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function user ()
    {
        return $this->belongsTo(User::class);
    }
}
