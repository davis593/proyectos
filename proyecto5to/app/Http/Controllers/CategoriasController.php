<?php


namespace App\Http\Controllers;
use App\Http\Requests\CategoriaStoreRequest;
use App\Categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{

        public function index(){
            $categorias=Categoria::get();
            return view('sistema.categorias', compact('categorias'));

    }

    public function index2(){
        $categorias=Categoria::get();
        return view('sistema.formulariocategorias', compact('categorias'));


    }

    public function create(){
        return view('sistema.categorias.create');


    }

    public function store(Reques $request){
        $categoria= Categoria::create ($request->all());
        return redirect()->route('categorias.index');


    }

    public function edit($id){
        $categoria=Categoria::findOrFail($id);
        return view('sistema.categorias.edit')->with(compact('categoria'));

    }

    public function  update(Request $request, $id){
            $categoria=categoria::find($id);
            $categoria->update($request->all());
            return redirect()->route('categorias.index');
    }


    public function delete($id){
        $categoria=Categoria::destroy($id);
        return redirect('categorias');
    }
    }



