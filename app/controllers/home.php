<?php
/**
 * Created by PhpStorm.
 * User: tuanamith
 * Date: 10/7/17
 * Time: 11:00 AM
 */

class home extends Controller
{

    public function index() {
        $this->view('home/index');
//        $model = $this->model('index');
    }

    public function load_view($view) {
        if($view == 'maintenance') {
            $this->view('maintenance/driver_reg');
        }
    }

}