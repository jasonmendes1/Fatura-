<?php

require_once 'BaseController.php';

class TaskController extends BaseController{
    
    public function index()
    {
        $auth = new Auth();
        $user = $auth->getUser();
        $funcionarios = User::find_all_by_role('Funcionario');
        
        if($user->role == 'Funcionario'){
            $tasks_func = Task::find_all_by_func_id($user->id);
            $this->renderView('task','index', ['tasks' => $tasks_func, 'funcionarios' => $funcionarios]);
        } 

        $tasks = Task::all();

        //mostrar a vista index passando os dados por parâmetro
        $this->renderView('task','index', ['tasks' => $tasks, 'funcionarios' => $funcionarios]);
    }

    public function show($id)
    {
        $task = Task::find([$id]);
        if (is_null($task)) {
            //TODO redirect to standard error page
        } else {
            $this->renderView('task','show', ['task' => $task]);
        }
    }

    public function create()
    {        
        $funcionarios = User::find_all_by_role('Funcionario');
        $this->renderView('task','create', ['funcionarios' => $funcionarios]);
    }

    public function store()
    {
        $task = new Task($_POST);
        $task->done = 'No';

        if($task->is_valid()){
            $task->save();
            $this->redirectToRoute('task','index');
        } else {
            //mostrar vista create passando o modelo como parâmetro
            $this->renderView('task','create', ['task' => $task]);
        }
    }

    public function edit($id)
    {
        $funcionarios = User::find_all_by_role('Funcionario');
        $task = Task::find([$id]);
        if (is_null($task)) {
            //TODO redirect to standard error page
        } else {
            $this->renderView('task','edit', ['task' => $task, 'funcionarios' => $funcionarios]);
        }
    }

    public function update($id)
    {
        //find resource (activerecord/model) instance where PK = $id
        //your form name fields must match the ones of the table fields
        $task = Task::find([$id]);
        $task->update_attributes($_POST);
        if($task->is_valid()){
            $task->save();
            $this->redirectToRoute('task','index');
            //redirecionar para o index
        } else {
            //mostrar vista edit passando o modelo como parâmetro
            $this->renderView('task', 'edit', ['task' => $task]);
        }
    }

    public function task_done($id)
    {
        $task = Task::find([$id]);
        $task->done = 'Yes';
        $task->save();
        $this->redirectToRoute('task','index');
    }

    public function task_undone($id)
    {
        $task = Task::find([$id]);
        $task->done = 'No';
        $task->save();
        $this->redirectToRoute('task','index');
    }
}
