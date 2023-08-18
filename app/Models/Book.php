<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable=['book_name','author_name','decription','posted_by'];
    public function admin(){
        return $this->belongsTo(Admin::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
