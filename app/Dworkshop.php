<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Dworkshop extends Model
{
    protected $table = 'dworkshops';
    protected $primaryKey = 'id';
    protected $fillable = ['bukti', 'kurir', 'layanan', 'status', 'hasil', 'user_id'];

    public function getUser()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
