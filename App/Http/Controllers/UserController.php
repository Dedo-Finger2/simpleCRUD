<?php

include __DIR__ ."/../Utils/functions.php";
require_once __DIR__ ."/Controller.php";

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        $this->view("index", [
            "users"=> $users,
        ]);
    }

    public function create()
    {
        $this->view("create", []);
    }

    public function store()
    {
        if (User::create($_POST)) Redirect::redirect("/users")::with(["success" => "Usuário criado com sucesso!"])::run();
        else Redirect::redirect("/users")::with(["error"=> "Erro ao tentar criar usuário!"])::run();
    }

    public function edit(array $data)
    {
        $userFound = User::find($data[0]);

        $this->view("edit", [
            "user" => $userFound,
        ]);
    }

    public function update()
    {
        if (User::update($_POST)) Redirect::redirect("/users")::with(["success" => "Usuário editado com sucesso!"])::run();
        else Redirect::redirect("/users")::with(["error" => "Erro ao atualizar o usuário!"])::run();
    }

    public function show(array $data)
    {
        $userFound = User::find($data[0]);

        $this->view("show", [
            "user"=> $userFound,
        ]);
    }

    public function destroy(array $data)
    {
        if (User::delete($data)) Redirect::redirect("/users")::with(["success" => "Usuário deletado com sucesso!"])::run();
        else Redirect::redirect("/users")::with(["error" => "Erro ao deletar o usuário!"])::run();
    }
}
