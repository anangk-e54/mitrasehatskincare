<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function getImage1(){
        if(!$this->image1){
            return asset('assets/images/imageblank.jpg');
        }

        return asset('assets/images/'.$this->image1);
    }

    public function getImage2(){
        if(!$this->image2){
            return asset('assets/images/imageblank.jpg');
        }

        return asset('assets/images/'.$this->image2);
    }

    public function getImage3(){
        if(!$this->image3){
            return asset('assets/images/imageblank.jpg');
        }

        return asset('assets/images/'.$this->image3);
    }

    public function getImage4(){
        if(!$this->image4){
            return asset('assets/images/imageblank.jpg');
        }

        return asset('assets/images/'.$this->image4);
    }

    public function getImage5(){
        if(!$this->image5){
            return asset('assets/images/imageblank.jpg');
        }

        return asset('assets/images/'.$this->image5);
    }


}