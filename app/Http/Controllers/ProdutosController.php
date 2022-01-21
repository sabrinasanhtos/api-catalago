<?php
namespace App\Http\Controllers;
use App\Services\ProdutosServices;
use Illuminate\Http\Request;

class ProdutosController extends Controller{
    private $Produtoservice;

    public function __construct(ProdutosServices $Produtoservice)
    {
        $this->Produtoservice = $Produtoservice;
    }

    public function listProdutos(Request $request)
    {
       return $this->Produtoservice->listProdutos($request);
    }
    
}