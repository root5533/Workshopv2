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

    public function driver_registration() {
        if(isset($_POST['submit'])) {
            $dbc = $this->db_connect();
            $name = trim($_POST['name']);
            $nic = trim($_POST['nic']);
            $license = trim($_POST['license']);
            $address = trim($_POST['address']);
            $contact = trim($_POST['contact']);
            if(empty($name)) {
                $error['name_error'] = "*Please provide a name";
            }
            if (empty($nic)) {
                $error['nic_error'] = "*Please provide a valid NIC number";
            }
            if (empty($license)) {
                $error['license_error'] = "*Please provide valid license";
            }
            if (empty($address)) {
                $error['address_error'] = "*Please provide valid address";
            }
            if (empty($contact)) {
                $error['contact_error'] = "*Please provide a valid contact number";
            }
            if (isset($error) == FALSE) {
                $model = $this->model('driver_model');
                $data = array(
                    'name' => $name,
                    'nic' => $nic,
                    'license' => $license,
                    'address' => $address,
                    '$contact' => $contact
                );

                $result = $model->insert($data);
                $data['message'] = $result;
//                $this->view("maintenance/test", $data , []);

                if ($result == 1) {
                    $data = array('message' => 'Driver Registration Successful');
                }
                elseif ($result == 0) {
                    $data = array('message' => 'Driver is already registered');
                }
                elseif ($result == 2) {
                    $data = array('message' => 'Problem updating driver database');
                }
                $this->view('maintenance/driver_reg',$data, []);
            }
            else {
                $data = array(
                    'name' => $name,
                    'nic' => $nic,
                    'license' => $license,
                    'address' => $address,
                    '$contact' => $contact
                );
                $this->view('maintenance/driver_reg', $data, $error);
            }
            $this->db_close($dbc);
        }
        else {
            $this->view('maintenance/driver_reg');
        }
    }

}