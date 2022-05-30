<?php

require_once 'BaseController.php';

class ProdutoController extends BaseController{
    
    public function index()
    {
        $produtos = Produto::all();

        //mostrar a vista index passando os dados por parâmetro
        $this->renderView('produto','index', ['produtos' => $produtos]);
    }

    public function show($id)
    {
        $produto = Produto::find([$id]);
        if (is_null($produto)) {
            //TODO redirect to standard error page
        } else {
            $this->renderView('produto','show', ['produto' => $produto]);
        }
    }

    public function create()
    {        
        //mostrar a vista create
        //TODO iva
        $ivas = Iva::all();

        $this->renderView('produto','create', ['ivas' => $ivas]);
    }

    public function store()
    {
        $produto = new Produto($_POST);
        if($produto->is_valid()){
            $produto->save();
            $this->redirectToRoute('produto','index');
        } else {
            //mostrar vista create passando o modelo como parâmetro
            $this->renderView('produto','create', ['produto' => $produto]);
        }
    }

    public function edit($id)
    {
        $produto = Produto::find([$id]);
        $ivas = Iva::all();
        if (is_null($produto)) {
            //TODO redirect to standard error page
        } else {
            $this->renderView('produto','edit', ['produto' => $produto, 'ivas' => $ivas]);
        }
    }

    public function update($id)
    {
        //find resource (activerecord/model) instance where PK = $id
        //your form name fields must match the ones of the table fields
        $produto = Produto::find([$id]);
        $produto->update_attributes($_POST);
        if($produto->is_valid()){
            $produto->save();
            $this->redirectToRoute('produto','index');
            //redirecionar para o index
        } else {
            //mostrar vista edit passando o modelo como parâmetro
            $this->renderView('produto', 'edit', ['produto' => $produto]);
        }
    }

    public function delete($id)
    {
        $produto = Produto::find([$id]);
        $produto->delete();
        //redirecionar para o index
        $this->redirectToRoute('produto','index');
    }

}
