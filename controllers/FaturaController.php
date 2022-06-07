<?php

require_once 'BaseController.php';

class FaturaController extends BaseController{
    
    public function index()
    {
        $faturas = Fatura::all();

        //mostrar a vista index passando os dados por parâmetro
        $this->renderView('fatura','index', ['faturas' => $faturas]);
    }

    public function show($id)
    {
        $fatura = Fatura::find([$id]);
        if (is_null($fatura)) {
            //TODO redirect to standard error page
        } else {
            $this->renderView('fatura','show', ['fatura' => $fatura]);
        }
    }

    public function create($idcliente)
    {        
        if($idcliente==null){
            $this->renderView('user','create');
        }
        else{
            $fatura = new Fatura($_POST);
            $fatura->data = Carbon::now();
            $fatura->total = 0;
            $fatura->estado = 'Em Lançamento';
            $fatura->cliente_id = $idcliente;
        }

        $this->renderView('fatura','create');
    }

    public function store()
    {
        $fatura = new Fatura($_POST);
        if($fatura->is_valid()){
            $fatura->save();
            $this->redirectToRoute('fatura','index');
        } else {
            //mostrar vista create passando o modelo como parâmetro
            $this->renderView('fatura','create', ['fatura' => $fatura]);
        }
    }

    public function edit($id)
    {
        $fatura = Fatura::find([$id]);
        if (is_null($fatura)) {
            //TODO redirect to standard error page
        } else {
            $this->renderView('fatura','edit', ['fatura' => $fatura]);
        }
    }

    public function update($id)
    {
        //find resource (activerecord/model) instance where PK = $id
        //your form name fields must match the ones of the table fields
        $fatura = Fatura::find([$id]);
        $fatura->update_attributes($_POST);
        if($fatura->is_valid()){
            $fatura->save();
            $this->redirectToRoute('fatura','index');
            //redirecionar para o index
        } else {
            //mostrar vista edit passando o modelo como parâmetro
            $this->renderView('fatura', 'edit', ['fatura' => $fatura]);
        }
    }

    public function delete($id)
    {
        $fatura = Fatura::find([$id]);
        $fatura->delete();
        //redirecionar para o index
        $this->redirectToRoute('fatura','index');
    }

}
