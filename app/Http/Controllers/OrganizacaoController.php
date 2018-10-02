<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Organizacao;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OrganizacaoController extends Controller
{    
    public function listar()
    {                                        
        $data['orgs'] = Organizacao::all();                            
        return view("organizacao/inicial", $data);
    }
}