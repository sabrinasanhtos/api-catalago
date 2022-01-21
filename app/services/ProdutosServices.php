<?php
namespace App\Services;
use Illuminate\Http\Request;
use App\Repositories\ProdutosRepositoryInterface;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Validator;


class ProdutosServices{
    protected $ProdutosRepository;

    public function __construct(ProdutosRepositoryInterface $ProdutosRepository)
    {
        $this->ProdutosRepository = $ProdutosRepository;
    }

    public function listProdutos(Request $request)
    {   
        $json = $this->ProdutosRepository->listProdutos($request);
        return response()->json($json, Response::HTTP_OK);
    }
}
