<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable=['customer_id','user_id','quantity'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function customer(){
        return $this->belongsTo(Customer::class, 'customer_id');
    }

}
