<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;

class Usuario extends BaseController
{
    private $usuarioModel;

    public function __construct()
    {
        $this->usuarioModel = new UsuarioModel();
    }

    /**
     * Carrega a view principal
     *
     * @return void
     */
    public function index()
    {
        $dados = [
            'usuarios' => $this->usuarioModel->findAll()
        ];

        echo view('admin/usuarios/index', $dados);
    }
}