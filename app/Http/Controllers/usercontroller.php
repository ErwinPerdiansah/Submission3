<?php 

namespace App\Http\Controllers;
class ProfilController extends Controller {
    public function index() {
        return view('profil');
    }
}
class userconroller extends controller 
{ 
    public function index()
    {
        // parsing data 
        $nama = "ahfi fauka"; 
        $usia = 20; 
        $data = [ 
            "myname" => $nama, 
            "usia" => $usia,
            "titles" => $titles
        ];
        return view('user.index', $data);
    }

publice function create()
{
    //127.0.0.1:8000/user/create
    return "ini adalah halaman create
    method create";
}
}