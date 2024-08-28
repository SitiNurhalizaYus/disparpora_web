<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function __construct()
    {
    }

    public function detail($id_content)
    {
        $data = [];
        $data['profil'] = \App\Helpers\AppHelper::instance()->requestApiGet('api/profil/'.$id_content);
        $data['og'] = [];
        $data['og']['url'] = url('/').'/profil/'.$data['profil']['slug'];
        $data['og']['title'] = $data['profil']['title'];
        $data['og']['description'] = $data['profil']['description_short'];
        $data['og']['image'] = $data['profil']['image'];
        $data['setting'] = \App\Helpers\AppHelper::instance()->requestApiSetting();
        $data['profils'] = \App\Helpers\AppHelper::instance()->requestApiGet('api/content?type=profil');
        return view('client.page.detail', $data);
    }
}
