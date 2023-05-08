<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Categorie extends Model
{
    protected $table="categorie";
    protected $primaryKey='id_categorie';
    use HasFactory;

}
?>
