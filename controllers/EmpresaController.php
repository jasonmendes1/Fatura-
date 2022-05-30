<?php

require_once 'BaseController.php';

class EmpresaController extends BaseController{
    
    public function index()
    {
        $empresas = Empresa::all();

        //mostrar a vista index passando os dados por parâmetro
        $this->renderView('empresa','index', ['empresas' => $empresas]);
    }

    public function show($id)
    {
        $empresa = Empresa::find([$id]);
        if (is_null($empresa)) {
            //TODO redirect to standard error page
        } else {
            $this->renderView('empresa','show', ['empresa' => $empresa]);
        }
    }

    public function create()
    {        
        //mostrar a vista create

        $this->renderView('empresa','create');
    }

    public function store()
    {
        $empresa = new Empresa($_POST);
        if($empresa->is_valid()){
            $empresa->save();
            $this->redirectToRoute('empresa','index');
        } else {
            //mostrar vista create passando o modelo como parâmetro
            $this->renderView('empresa','create', ['empresa' => $empresa]);
        }
    }

    public function edit($id)
    {
        $empresa = Empresa::find([$id]);
        if (is_null($empresa)) {
            //TODO redirect to standard error page
        } else {
            $this->renderView('empresa','edit', ['empresa' => $empresa]);
        }
    }

    public function update($id)
    {
        //find resource (activerecord/model) instance where PK = $id
        //your form name fields must match the ones of the table fields
        $empresa = Empresa::find([$id]);
        $empresa->update_attributes($_POST);
        if($empresa->is_valid()){
            $empresa->save();
            $this->redirectToRoute('empresa','index');
            //redirecionar para o index
        } else {
            //mostrar vista edit passando o modelo como parâmetro
            $this->renderView('empresa', 'edit', ['empresa' => $empresa]);
        }
    }

    public function delete($id)
    {
        $empresa = Empresa::find([$id]);
        $empresa->delete();
        //redirecionar para o index
        $this->redirectToRoute('empresa','index');
    }

}
