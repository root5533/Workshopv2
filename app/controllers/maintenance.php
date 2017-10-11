<?php

class Maintenance extends Controller {

    public function index() {
        $this->view('maintenance/status');
    }

    public function load_view($view) {
        if($view == 'driver_reg') {
            $this->view('maintenance/driver_reg');
        }
        elseif ($view == 'status') {
            $this->view('maintenance/status');
        }
        elseif ($view == 'vehicle_reg') {
            $this->view('maintenance/vehicle_reg');
        }
        elseif ($view == 'vehicle_entry') {
            $this->view('maintenance/vehicle_entry_record');
        }
        elseif ($view == 'open_job') {
            $this->view('maintenance/open_job_entry');
        }
        elseif ($view == 'assign_sup') {
            $this->view('maintenance/assign_supervisor');
        }
        elseif ($view == 'stock_req') {
            $this->view('maintenance/stock_request');
        }
        elseif ($view == 'close_job') {
            $this->view('maintenance/close_job_entry');
        }
        elseif ($view == 'issue_gate') {
            $this->view('maintenance/issue_gate_pass');
        }
        else {
            $data['message'] = "Page is not available!";
            $this->view('maintenance/status', $data);
        }

    }

}