<?php

namespace App\Controllers;
use App\Models\MyModel;

class Portfolio extends BaseController
{
    protected $Biodata;

    public function __construct(){
        $this->Biodata = new MyModel;
    }
    public function myporto(){
        $data = [
            'title' => 'My Portfolio',
            //variabel tampungan => pemanggilan function dari modelnya
            'biodata' => $this->Biodata->biodata()
        ];

        return view('layout', $data);
    }

    public function brazilian(){
        return view('brazilian-ecommerce');
    }

    public function inflation(){
        return view('global-inflation');
    }

    public function spotify(){
        return view('spotify-analysis');
    }

    public function death(){
        return view('cause-death');
    }

    public function marketing(){
        return view('marketing-analysis');
    }

    public function explore(){
        return view('explore-sukabumi');
    }

    public function hicolleagues(){
        return view('hicolleagues');
    }

    public function apemrasasutra(){
        return view('apemrasasutra');
    }

    public function campus(){
        return view('visit-campus');
    }
}