<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function packet(){
        return $this->belongsTo(Packet::class);
    }

    public function transactions(){
        return $this->hasMany(Transaction::class);
    }
}
