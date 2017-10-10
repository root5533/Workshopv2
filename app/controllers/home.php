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
            $this->view('maintenance/status');
        }
        elseif ($view == 'production') {
            $this->view('production/status');
        }
        elseif ($view == 'electrical') {
            $this->view('electrical/open_complains');
        }
        elseif ($view == 'equipment') {
            $this->view('equipment/status');
        }
        else {
            $this->view('home/index');
        }
    }

}