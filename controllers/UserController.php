<?php

require_once 'BaseController.php';

class UserController extends BaseController{
    
    public function index()
    {
        $users = User::all();

        //mostrar a vista index passando os dados por parâmetro
        $this->renderView('user','index', ['users' => $users]);
    }

    public function indexfuncionarios()
    {
        $users = User::find_all_by_role('Funcionario');

        //mostrar a vista index passando os dados por parâmetro
        $this->renderView('user','index', ['users' => $users]);
    }

    public function indexclientes()
    {
        $users = User::find_all_by_role('Cliente');

        //mostrar a vista index passando os dados por parâmetro
        $this->renderView('user','index', ['users' => $users]);
    }

    public function show($id)
    {
        $user = User::find([$id]);
        if (is_null($user)) {
            //TODO redirect to standard error page
        } else {
            $this->renderView('user','show', ['user' => $user]);
        }
    }

    public function create()
    {        
        //mostrar a vista create
        $user = null;
        $this->renderView('user','create');
    }

    public function store()
    {
        $user = new User($_POST);
        if($user->is_valid()){
            $user->save();
            $this->redirectToRoute('user','index');
        } else {
            //mostrar vista create passando o modelo como parâmetro
            $this->renderView('user','create', ['user' => $user]);
        }
    }

    public function edit($id)
    {
        $user = User::find([$id]);
        if (is_null($user)) {
            //TODO redirect to standard error page
        } else {
            $this->renderView('user','edit', ['user' => $user]);
        }
    }

    public function update($id)
    {
        //find resource (activerecord/model) instance where PK = $id
        //your form name fields must match the ones of the table fields
        $user = User::find([$id]);
        $user->update_attributes($_POST);
        if($user->is_valid()){
            $user->save();
            $this->redirectToRoute('user','index');
            //redirecionar para o index
        } else {
            //mostrar vista edit passando o modelo como parâmetro
            $this->renderView('user', 'edit', ['user' => $user]);
        }
    }

    public function delete($id)
    {
        $user = User::find([$id]);
        $user->delete();
        //redirecionar para o index
        $this->redirectToRoute('user','index');
    }

}
