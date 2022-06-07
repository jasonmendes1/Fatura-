<?php

require_once 'BaseController.php';
use Carbon\Carbon;

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
            $this->renderView('fatura','create');
        }
        else{
            $fatura = new Fatura();
            $fatura->valortotal = 0;
            $fatura->ivatotal = 0;
            $fatura->estado = 'Em Lançamento';
            $fatura->cliente_id = $idcliente;
            $fatura->func_id = 3;

            $fatura->save();
            $this->redirectToRoute('faturalinha','create', ['idfatura' => $fatura->id]);
        }

        $this->renderView('fatura','create', ['user' => $idcliente]);
    }

    public function selectcliente(){
        $clientes = User::find_all_by_role('Cliente');
        $this->renderView('fatura','selectcliente', ['clientes' => $clientes]);
    }
    
    public function selectproduto(){
        $produtos = Produto::all();
        $this->renderView('faturalinha','selectproduto', ['produtos' => $produtos]);
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
