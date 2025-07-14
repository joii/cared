<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SeoMeta;

class SEOMetaController extends Controller
{
    public function Index()
    {
        $data_arr = SeoMeta::all();
        return view('backend.seo_meta.index', compact('data_arr'));
    }//End Method
}
