<?php
namespace App\Repositories;
use Illuminate\Http\Request;
use App\Model\Produto;
use App\Repositorio\RepositoryInterface;
use Illuminate\Support\Collection;

class ProdutosRepositoryEloquent implements ProdutosRepositoryInterface{
    
    public function listProdutos($ids){
        $complete = Produto::whereIn('id', $ids->data)->get();
        $compact = [];
        foreach ($complete as $v) {
            $compact[] = [
                "name" => $v->name, 
                "price" => $v->price, 
                "status" => $v->status
            ];
        }
       
        return [
            'complete' =>  $complete,
            'compact' => $compact
        ];
    }
}
    

