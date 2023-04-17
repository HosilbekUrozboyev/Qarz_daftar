<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function debts(){
        return $this->hasMany(Debt::class, 'customer_id');
    }

    public function payment(){
        return $this->hasMany(User::class,);
    }
}
