<?php

namespace App;

use Sober\Controller\Controller;

class Home extends Controller
{
    public function fecha()
    {
            return get_field('fecha');
    }
    public function lugar()
    {
            return  get_field('lugar');
    }
    public function hora()
    {
            return get_field('hora');
    }
    public function mas_info()
    {
            return  get_field('mas_info');
    }
}
