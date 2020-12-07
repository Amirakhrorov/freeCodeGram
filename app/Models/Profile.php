<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //use HasFactory;
    protected $guarded = [];

    public function profileImage()
    {
      $imagePath = ($this->image) ? $this->image : 'profile/wdR2IE9oaTZavGaBJyFoSaWRzIqp3nerPe9GaLCu.jpeg';
      return '/storage/' . $imagePath;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function followers()
    {
      return $this->BelongsToMany(User::class);
    }

}
