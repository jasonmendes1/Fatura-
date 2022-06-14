<?php

require_once 'BaseController.php';
use Carbon\Carbon;

class FaturaController extends BaseController{
    
    public function index()
    {
        $auth = new Auth();
        $user = $auth->getUser();
        
        if($user->role!='Administrador' && $user->role!='Funcionario'){
            echo('Não tem permissões!');
        } else {
            $faturas = Fatura::all();

            //mostrar a vista index passando os dados por parâmetro
            $this->renderView('fatura','index', ['faturas' => $faturas]);
        }
    }

    public function show($id)
    {
        $auth = new Auth();
        $user = $auth->getUser();
        
        if($user->role!='Administrador' && $user->role!='Funcionario'){
            echo('Não tem permissões!');
        } else {
            $fatura = Fatura::find([$id]);
            $faturalinhas = Faturalinha::find_all_by_fatura_id($id);
            if (is_null($fatura)) {
                echo('Erro!');
            } else {
                $this->renderView('fatura','show', ['fatura' => $fatura, 'faturalinhas' => $faturalinhas]);
            }
        }
    }

    public function create($idcliente)
    {        
        $auth = new Auth();
        $user = $auth->getUser();
        
        if($user->role!='Administrador' && $user->role!='Funcionario'){
            echo('Não tem permissões!');
        } else {
            if($idcliente==null){
                $this->renderView('fatura','create');
            }
            else{
                $fatura = new Fatura();
                
                $fatura->valortotal = 0;
                $fatura->ivatotal = 0;
                $fatura->estado = 'Em Lançamento';
                $fatura->cliente_id = $idcliente;
                $fatura->func_id = $user->id;

                $fatura->save();
                $this->redirectToRoute('faturalinha','create', ['idfatura' => $fatura->id]);
            }

            $this->renderView('fatura','create', ['user' => $idcliente]);
        }
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
        $auth = new Auth();
        $user = $auth->getUser();
        
        if($user->role!='Administrador' && $user->role!='Funcionario'){
            echo('Não tem permissões!');
        } else {
            $fatura = new Fatura($_POST);
            if($fatura->is_valid()){
                $fatura->save();
                $this->redirectToRoute('fatura','index');
            } else {
                //mostrar vista create passando o modelo como parâmetro
                $this->renderView('fatura','create', ['fatura' => $fatura]);
            }
        }
    }

    public function edit($id)
    {
        $auth = new Auth();
        $user = $auth->getUser();
        
        if($user->role!='Administrador' && $user->role!='Funcionario'){
            echo('Não tem permissões!');
        } else {
            $fatura = Fatura::find([$id]);
            if (is_null($fatura)) {
                //TODO redirect to standard error page
            } else {
                $this->renderView('fatura','edit', ['fatura' => $fatura]);
            }
        }
    }

    public function update($id)
    {
        $auth = new Auth();
        $user = $auth->getUser();
        
        if($user->role!='Administrador' && $user->role!='Funcionario'){
            echo('Não tem permissões!');
        } else {
            $fatura = Fatura::find([$id]);
            $fatura->update_attributes($_POST);
            if($fatura->is_valid()){
                $fatura->save();
                $this->redirectToRoute('fatura','index');
            } else {
                //mostrar vista edit passando o modelo como parâmetro
                $this->renderView('fatura', 'edit', ['fatura' => $fatura]);
            }
        }
    }

    public function delete($id)
    {
        $auth = new Auth();
        $user = $auth->getUser();
        
        if($user->role!='Administrador' && $user->role!='Funcionario'){
            echo('Não tem permissões!');
        } else {
            $fatura = Fatura::find([$id]);
            $fatura->delete();
            //redirecionar para o index
            $this->redirectToRoute('fatura','index');
        }
    }
}
