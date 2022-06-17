<?php

class SiteController extends BaseController{
    
    public function index()
    {
        //mostrar a vista index passando os dados por parâmetro
        $this->renderView('site','index');
    }
}