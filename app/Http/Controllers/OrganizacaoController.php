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
    
    public function nova()
    {                                                
        return view("organizacao/nova");
    }
    
    public function inserir(Request $request)
    {
        $org = new Organizacao;                
        $org->nome = $request->get("nomeOrg");
        $org->save();    
        
        return "true";
    }
    
    public function deletar(Request $request)
    {
        $org = Organizacao::find($request->get("idOrg"));
        $org->delete();
        
        return "true";
    }
    
    public function editar(Request $request)
    {        
        $data['organizacao'] = Organizacao::find($request->get("idOrg"));        
        return view("organizacao/nova", $data);
    }
    
    public function atualizar(Request $request)
    {        
        $org = Organizacao::find($request->get("idOrg"));        
        $org->nome = $request->get("nomeOrg");
        $org->save();

        return "true";
    }
}