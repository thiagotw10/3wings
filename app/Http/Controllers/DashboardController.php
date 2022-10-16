<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Contact;
use App\Models\Organization;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $contatos = Contact::all()->count();
        $organizacao = Organization::all()->count();
        $dados = [['valor' => $contatos, 'name' => 'Contatos'], ['valor' => $organizacao, 'name' => 'Organizações']];
        $contatosDash = Contact::all()->transform(fn($contato)=>[
            'nome' => $contato->first_name.' '.$contato->last_name,
            'foto' => URL::route('image', ['path' => $contato->photo_path, 'w' => 40, 'h' => 40, 'fit' => 'crop']),
            'quantidade' => $contatos
        ]);
        $organizacoesDash = Organization::all()->transform(fn($orga)=>[
            'nome' => $orga->name,
            // 'foto' => URL::route('image', ['path' => $orga->photo_path, 'w' => 40, 'h' => 40, 'fit' => 'crop'])
            'quantidade' => $organizacao
        ]);
        return Inertia::render('Dashboard/Index', [
            'dashboard' => $dados,
            'contatos' => $contatosDash,
            'organizacoes' => $organizacoesDash
        ]);
    }
}
