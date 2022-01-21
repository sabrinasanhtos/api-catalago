<?php
namespace App\Repositories;
use Illuminate\Http\Request;


    interface ProdutosRepositoryInterface
    {
        public function listProdutos($ids);
    }

