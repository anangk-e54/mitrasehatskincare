<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at', 'deleted_at'];

    public function getImage1(){
        if(!$this->image1){
            return asset('assets/images/imageblank.jpg');
        }

        return asset('assets/images/'.$this->image1);
    }

    
}