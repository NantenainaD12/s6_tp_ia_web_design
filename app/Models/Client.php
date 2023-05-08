<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Client extends Model
{
    protected $table="client";
    protected $primaryKey='id_client';
    use HasFactory;

    public static function login($email,$pwd)
    {
        try {
            $val = client::where('nom', $email)->where('mdp', $pwd)->get();
            return $val;
        }catch (\Throwable $th) {
            throw $th;
        }
    }


}
