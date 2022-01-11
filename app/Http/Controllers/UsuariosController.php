<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Usuarios;
use App\Util\MensagemPadrao;


class UsuariosController extends Controller
{
    public $usuarios;
    public $mensagem;
    public function __construct()
    {
        $this->usuarios = Usuarios::orderBy('name')->get();
        $this->mensagem = MensagemPadrao::retornaMensagens();
    }

    public function index()
    {

        return view('usuarios.lista', ['usuarios' => $this->usuarios]);
    }
    public function cadastrar()
    {
        return view('usuarios.form');
    }
    public function adicionar(Request $request)
    {
        $usuario = new Usuarios();
        $usuario = $usuario->create($request->all());
        return redirect('/usuarios')->with('status', $this->mensagem['cadastro']);
        //return view('usuarios.lista', ['mensagem' => $this->mensagem['cadastro'], 'usuarios' => $this->usuarios]);
    }
    public function visualizar($id)
    {
        $usuario = Usuarios::findOrFail($id);
        return view('usuarios.form', ['usuario' => $usuario]);
    }
    public function atualizar($id, Request $request)
    {
        $usuario = Usuarios::findOrFail($id);
        $usuario = $usuario->update($request->all());

        return redirect('/usuarios')->with('status', $this->mensagem['edicao']);
    }
    public function excluir($id)
    {
        $usuario = Usuarios::findOrFail($id);
        $usuario = $usuario->delete();

        return redirect('/usuarios')->with('status', $this->mensagem['exclusao']);
    }
    //
}
