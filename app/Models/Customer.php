<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at', 'deleted_at'];

    public function getPhoto1(){
        if(!$this->photo1){
            return asset('assets/images/imageblank.jpg');
        }

        return asset('assets/images/'.$this->photo1);
    }

    public function getPhoto2(){
        if(!$this->photo2){
            return asset('assets/images/imageblank.jpg');
        }

        return asset('assets/images/'.$this->photo2);
    }

    public function getPhoto3(){
        if(!$this->photo3){
            return asset('assets/images/imageblank.jpg');
        }

        return asset('assets/images/'.$this->photo3);
    }

    public function getPhoto4(){
        if(!$this->photo4){
            return asset('assets/images/imageblank.jpg');
        }

        return asset('assets/images/'.$this->photo4);
    }

    public function getPhoto5(){
        if(!$this->photo5){
            return asset('assets/images/imageblank.jpg');
        }

        return asset('assets/images/'.$this->photo5);
    }

    
}