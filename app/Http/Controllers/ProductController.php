<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; 

class ProductController extends Controller
{
    public function index(){
        // Busca todos os produtos do banco de dados 
        $products = Product::all();

        // Retorna a view 'products.index' e passa a variavel $products para ela
        return view('products.index', compact('products'));
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        // Valida os dados 
        $request->validate([
            'name'=> 'required|string|max:250',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
        ]);

        // Cria uma novo produto com os dados validos
        product::create($request->all());

        // Redireciona o usuario para alguma pagina após salvar
        return redirect()->route('products.index')->with('sucess', 'produto criado com sucesso!');
    }

    public function edit(Product $product){
        // o laravel automaticamente busca o produto pelo ID
        // e o passa para a variavel $product
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product){
        // Valida os dados igual ao metodo store
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' =>  'required|numeric|min:0',
        ]);

        // Atualiza o produto com os dados validados
        $product->update($request->all());

        // Redireciona de volta para a lista de prudutos com uma mensagem 
        return redirect()->route('products.index')->with('success','Produto atualizado com sucesso!');
    }
}
