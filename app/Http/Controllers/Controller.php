<?php

namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Admin;
use App\Models\Categorie;
use App\Models\Client;
use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
        public function save_article()
        {
//          $titre = $request->input('titre');
//           $resume = $request->input('resume');
//           $fileBase64 = $request->input('fileBase64');
//           $categorie = $request->input('categorie');
//           $contenue = $request->input('contenue');

                    $titre = $_POST['titre'];
                    $resume = $_POST['resume'];
                    $fileBase64 =  $_POST['fileBase64'];
                    //echo "kk".$fileBase64;
                    $categorie =  $_POST['categorie'];
                    $contenue =  $_POST['contenue'];
                 Article::insert($titre,$resume,$categorie,$contenue,$fileBase64);


            return view('Liste_article',['data'=> Article::all()]);
            //return 'zay ehh ' .$date. ' id_pro ='.$id_pro.' frais '.$frais;
        }
          public function getAll_admin()
          {
                    return view('Liste_article',['data'=> Article::all()]);
                    //return 'zay ehh ' .$date. ' id_pro ='.$id_pro.' frais '.$frais;
           }
              public function getAll_front()
                {
                               return view('Liste_article_front',['data'=> Article::all()]);
                               //return 'zay ehh ' .$date. ' id_pro ='.$id_pro.' frais '.$frais;
               }

        public function index(){
        $data=Categorie::all();
        return view('Insert_article',['data'=> $data]);
        }
       public function login_admin_page(){
                return view('Login_admin');
         }
        public function login_front_page(){
                         return view('Login_Client');
                  }
       public function details($slug){
                $id_article= explode("-",$slug)[count(explode("-",$slug))-1];
                $data=Article::get_by_id($id_article);

                return view('details',['data'=> $data]);
            }
                public function details_client($slug){
                            $id_article= explode("-",$slug)[count(explode("-",$slug))-1];
                            $data=Article::get_by_id($id_article);

                            return view('details_client',['data'=> $data]);
                        }

          public function login_admin(){
                  $email=$_POST['email'];
                  $pwd=$_POST['pwd'];
                  $test=Admin::login($email,$pwd);
                  if($test->isEmpty()){
                        return view('Login_admin');
                  }
                  else{
                            $data=Categorie::all();
                          return view('Insert_article',['data'=> $data]);
                  }
                 }

                           public function login_front(){
                                   $email=$_POST['email'];
                                   $pwd=$_POST['pwd'];
                                   $test=Client::login($email,$pwd);
                                   if($test->isEmpty()){
                                         return view('Login_Client');
                                   }
                                   else{

                                           return view('Liste_article_front',['data'=> Article::all()]);
                                   }
                                  }

             public function to_insert(){
                            $data=Categorie::all();
                          return view('Insert_article',['data'=> $data]);
                    }

             public function remove($slug){
                                     $id_article= explode("-",$slug)[count(explode("-",$slug))-1];
                                        Article::remove($id_article);

                                    return view('Liste_article',['data'=> Article::all()]);
                                 }
}
