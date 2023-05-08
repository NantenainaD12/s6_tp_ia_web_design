<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Article extends Model
{
    protected $table="v_article";
    protected $primaryKey='id_article';
    use HasFactory;

      public static function remove($id)
        {
            try {

              $article = Article::where('id_article',$id)->get();

              if ($article) {
                    DB::delete(
                            " delete from  public.article
                             	where id_article = ?",
                            [
                                $id
                            ]
                            );
                  // record has been deleted
              } else {
                  // record not found
              }

            }catch (\Throwable $th) {
                //throw $th;
            }
        }

    public static function get_by_id($id_bc)
    {
        try {
            $val= Article::where('id_article',$id_bc)->get();
            return $val;
        }catch (\Throwable $th) {
            //throw $th;
        }
    }
 public static function insert($titre,$resume,$categorie,$contenue,$image)
    {
        try {
            DB::insert(
            "INSERT INTO public.article
             	( titre, resume, categorie, contenu,image) VALUES (?,?,?,?,?)",
            [
                $titre,$resume,$categorie,$contenue,$image
            ]
            );
        } catch (\Throwable $th) {
            throw $th;
        }
    }

}
