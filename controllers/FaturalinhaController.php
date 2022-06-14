<?php

require_once 'BaseController.php';

class FaturalinhaController extends BaseController{
    
    public function index()
    {
        $faturalinhas = FaturaLinha::all();

        //mostrar a vista index passando os dados por parâmetro
        $this->renderView('faturalinhas','index', ['faturalinhas' => $faturalinhas]);
    }

    public function show($id)
    {
        $faturalinha = FaturaLinha::find([$id]);
        if (is_null($faturalinha)) {
            //TODO redirect to standard error page
        } else {
            $this->renderView('faturalinha','show', ['faturalinha' => $faturalinha]);
        }
    }

    public function create($idfatura, $idproduto)
    { 
        if ($idproduto==null){
            $this->renderView('faturalinha', 'create');
        } else {
            $faturalinha = new FaturaLinha();
            # $faturalinha->quantidade = 0;
            # $faturalinha->valor = 0;
            $faturalinha->fatura_id = $idfatura;
            $faturalinha->produto_id = $idproduto;

            $produtolinhaid = $idproduto;
            $faturalinhaid = $idfatura;


            $faturalinha->save();
            $this->redirectToRoute('faturalinha','create', ['idfaturalinha' => $faturalinha->id, 'produto' => $produtolinhaid]);
        }

        $this->renderView('faturalinha','create', ['fatura' => $idfatura, 'produto' => $idproduto]);
    }

    public function store()
    {
        $faturalinha = new FaturaLinha($_POST);
        if($faturalinha->is_valid()){
            $faturalinha->save();
            $this->redirectToRoute('fatura','index');
        } else {
            //mostrar vista create passando o modelo como parâmetro
            $this->renderView('faturalinha','create', ['faturalinha' => $faturalinha]);
        }
    }

    public function edit($id)
    {
        $faturalinha = FaturaLinha::find([$id]);
        if (is_null($faturalinha)) {
            //TODO redirect to standard error page
        } else {
            $this->renderView('faturalinha','edit', ['faturalinha' => $faturalinha]);
        }
    }

    public function update($id)
    {
        //find resource (activerecord/model) instance where PK = $id
        //your form name fields must match the ones of the table fields
        $faturalinha = FaturaLinha::find([$id]);
        $faturalinha->update_attributes($_POST);
        if($faturalinha->is_valid()){
            $faturalinha->save();
            $this->redirectToRoute('faturalinha','index');
            //redirecionar para o index
        } else {
            //mostrar vista edit passando o modelo como parâmetro
            $this->renderView('faturalinha', 'edit', ['faturalinha' => $faturalinha]);
        }
    }

    public function delete($id)
    {
        $faturalinha = FaturaLinha::find([$id]);
        $faturalinha->delete();
        //redirecionar para o index
        $this->redirectToRoute('faturalinha','index');
    }

}
