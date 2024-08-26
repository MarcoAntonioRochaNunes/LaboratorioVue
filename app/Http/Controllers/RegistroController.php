<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use Inertia\Inertia;

class RegistroController extends Controller
{
    public function index()
    {

        $produtos = Produto::all();

        return Inertia::render('Crud/HomeView', [
            'produtos' => $produtos
        ]);
    }

    public function create(Request $request)
    {

        $dados = [
            'nome' => $request->nome
        ];

        $item = Produto::create($dados);

        return response()->json([
            'item' => $item
        ]);
    }
}
