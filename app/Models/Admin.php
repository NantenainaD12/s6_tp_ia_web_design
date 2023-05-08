<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Admin extends Model
{
    protected $table="admin";
    protected $primaryKey='id_admin';
    use HasFactory;

    public static function login($email,$pwd)
    {
        try {
            $val = Admin::where('nom', $email)->where('mdp', $pwd)->get();
            return $val;
        }catch (\Throwable $th) {
            throw $th;
        }
    }


}
