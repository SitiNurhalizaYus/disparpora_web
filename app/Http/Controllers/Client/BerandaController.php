<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Helpers;

class BerandaController extends Controller
{

    public function __construct()
    {
    }

    public function index()
    {
        $data = [];
        $data['og'] = [];
        $data['og']['url'] = url('/').'/beranda';
        $data['og']['title'] = 'Beranda';
        $data['og']['description'] = 'beranda';
        $data['setting'] = \App\Helpers\AppHelper::instance()->requestApiSetting(); 
        $data['profils'] = \App\Helpers\AppHelper::instance()->requestApiGet('api/content?type=profil');
        $data['posters'] = \App\Helpers\AppHelper::instance()->requestApiGet('api/poster');
        return view('client.beranda.index', $data);
    }
}