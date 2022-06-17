<?php

require_once 'BaseController.php';

class IvaController extends BaseController{
    
    public function index()
    {
        $ivas = Iva::all();

        //mostrar a vista index passando os dados por parâmetro
        $this->renderView('iva','index', ['ivas' => $ivas]);
    }

    public function show($id)
    {
        $iva = Iva::find([$id]);
        if (is_null($iva)) {
            //TODO redirect to standard error page
        } else {
            $this->renderView('iva','show', ['iva' => $iva]);
        }
    }

    public function create()
    {        
        $this->renderView('iva','create');
    }

    public function store()
    {
        $iva = new Iva($_POST);
        if($iva->is_valid()){
            $iva->save();
            $this->redirectToRoute('iva','index');
        } else {
            //mostrar vista create passando o modelo como parâmetro
            $this->renderView('iva','create', ['iva' => $iva]);
        }
    }

    public function edit($id)
    {
        $iva = Iva::find([$id]);
        if (is_null($iva)) {
            //TODO redirect to standard error page
        } else {
            $this->renderView('iva','edit', ['iva' => $iva]);
        }
    }

    public function update($id)
    {
        //find resource (activerecord/model) instance where PK = $id
        //your form name fields must match the ones of the table fields
        $iva = Iva::find([$id]);
        $iva->update_attributes($_POST);
        if($iva->is_valid()){
            $iva->save();
            $this->redirectToRoute('iva','index');
            //redirecionar para o index
        } else {
            //mostrar vista edit passando o modelo como parâmetro
            $this->renderView('iva', 'edit', ['iva' => $iva]);
        }
    }

    public function delete($id)
    {
        $iva = Iva::find([$id]);
        $iva->delete();
        //redirecionar para o index
        $this->redirectToRoute('iva','index');
    }

}
