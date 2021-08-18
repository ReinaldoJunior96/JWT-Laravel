<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): \Illuminate\Http\JsonResponse
    {
        return response()->json(Produto::all(),200);
    }


    public function store(Request $request)
    {

        $newProduct = new Produto([
            'prod_name' => $request->prod_name,
            'description' => $request->description,
        ]);

        $newProduct->save();


        if($newProduct->save()){
            return response()->json(['status' => 'Sucesso!!'], 200);
        }else{
            return response()->json(['status' => 'fail!!'], 400);
        }

    }

    public function show($id)
    {
        return response()->json(Produto::find($id));
    }



    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $editProduto = Produto::find($id);
        $editProduto->prod_name = $request->prod_name;
        $editProduto->description = $request->description;
        $editProduto->save();

        return response()->json(['mensagem' => 'Sucesso!!'], 200);
    }

    public function destroy($id)
    {
        $destroyProduct = Produto::find($id);
        $destroyProduct->destroy($destroyProduct);
        #return response()->json(['mensagem' => 'Sucesso!!'], 200);
    }
}
