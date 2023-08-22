<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded =[];

public function profileImage(){
    $imagePath= ($this->image) ?  $this->image : '/storage/profile/6HvMeWVhJ1HNzALteAWcMfrNbEcbl3nnaS3DtxtF.png';
    return '/storage/' . $imagePath;
    
}

    public function user(){
        return $this->belongsTo(User::class);
    }
}
