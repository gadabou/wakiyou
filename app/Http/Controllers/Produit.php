<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Produit extends Controller
{
    public  function index(){
        return view("produit.list");
    }

    public  function wakiyoumrs(){
        return view("produit.wakiyoumrs.detail");
    }

    public  function wakiyoumrs_demo(){
        return view("produit.wakiyoumrs.demo");
    }
}
