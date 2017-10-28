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
        //$this->view('home/index');
//        $model = $this->model('index');
        $this->view('template/form_template');
    }

    public function load_view($view) {
        if($view == 'maintenance') {
            $this->view('maintenance/status');
        }
        elseif ($view == 'production') {
            $this->view('production/index');
        }
        elseif ($view == 'electrical') {
            $this->view('electrical/index');
        }
        elseif ($view == 'equipment') {
            $this->view('equipment/index');
        }
        else {
            $this->view('home/index');
        }
    }

}