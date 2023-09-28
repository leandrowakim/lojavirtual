<?php

namespace App\Controllers;

use App\Models\BannerModel;
use App\Models\CategoriaModel;
use App\Models\ProdutoModel;

class Home extends BaseController
{
    public function index(): string
    {
        $dadosBanners = new BannerModel();
        $dadosCategorias = new CategoriaModel();
        $dadosProdutos = new ProdutoModel();

        $data = [
            'banners' => $dadosBanners->findAll(),
            'categorias' => $dadosCategorias->findAll(),
            'produtos_chunk' => array_chunk($dadosProdutos->get(),3)
        ];
        return view('home/index', $data);
    }
}