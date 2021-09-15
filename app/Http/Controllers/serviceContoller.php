<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class serviceContoller extends Controller
{
    public function service(){
        $data = array(
            'tittle'=>'service page',
            'services'=> ['mchongo','mishemishe','job','town',]
        );

        return view('pages.service')->with($data);
    }
}
