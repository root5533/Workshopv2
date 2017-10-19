<?php


class Controller
{


    public function view($view, $data = [], $error = []) {
        require_once '../app/views/' . $view . '.php';
    }

    public function model($model) {
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }

    public function db_connect() {
        $domain = 'localhost';
        $db_username = 'root';
        $db_password = '123';
        $db = 'cmc';

        $dbc = mysqli_connect($domain,$db_username,$db_password,$db)
        or die(mysqli_connect_error());
    }

    public function db_close($dbc) {
        mysqli_close($dbc);
    }

}