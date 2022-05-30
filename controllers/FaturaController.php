<?php

require_once 'BaseController.php';

class FaturaController extends BaseController{
    
    public function index()
    {
        $faturas = Fatura::all();

        //mostrar a vista index passando os dados por parâmetro
        $this->renderView('fatura','index', ['faturas' => $faturas]);
    }
}
