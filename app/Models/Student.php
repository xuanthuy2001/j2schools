<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    // tự động kết nối tới bảng student (==S==)
    use HasFactory;
    public $timestamps = false;

    protected function fullName(): Attribute
    {
        return Attribute::make(
            get: fn ($value, $attributes) =>    $attributes['first_name'] . '' . $attributes['last_name'],
        );
    }

    protected function age(): Attribute

    {
        return Attribute::make(
            get: function ($value, $attribute) {
                $date = new DateTime($attribute['birthdate']);
                $now = new DateTime();
                return  $now->diff($date)->y;
            },
        );
    }
    protected function genderName(): Attribute

    {
        return Attribute::make(
            get: function ($value, $attribute) {

                return ($attribute['gender'] === 1) ? "Male" : "Female";
            }
        );
    }
}