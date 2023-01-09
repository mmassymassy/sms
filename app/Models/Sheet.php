<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sheet extends Model
{
    use HasFactory;
    protected $fillable = ["title","description","sheet_link","deadline","level","spec","module","sheet_type","client_price"];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
