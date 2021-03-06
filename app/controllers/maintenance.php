<?php

/**
 * Class Maintenance
 *
 */
class Maintenance extends Controller {


    /**
     *
     */
    public function index() {
        $this->view('maintenance/status');
    }

    /**
     * @param $view
     */
    public function load_view($view) {
        if($view == 'driver') {
            $this->view('maintenance/driver');
        }
        elseif ($view == 'status') {
            $this->view('maintenance/status');
        }
        elseif ($view == 'vehicle') {
            $this->view('maintenance/vehicle');
        }
        elseif ($view == 'job') {
            $this->view('maintenance/job');
        }
        elseif ($view == 'stock') {
            $this->view('maintenance/stock');
        }
        elseif ($view == 'gate') {
            $this->view('maintenance/gate');
        }
        else {
            $data['message'] = "Page is not available!";
            $this->view('maintenance/status', $data);
        }

    }

    /**
     *
     */
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
                    'contact' => $contact
                );

                $result = $model->insert($data);
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
                $this->view('maintenance/driver',$data, []);
            }
            else {
                $data = array(
                    'name' => $name,
                    'nic' => $nic,
                    'license' => $license,
                    'address' => $address,
                    'contact' => $contact
                );
                $this->view('maintenance/driver', $data, $error);
            }
            $this->db_close($dbc);
        }
        else {
            $this->view('maintenance/driver');
        }
    }

    public function vehicle_registration($data) {
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
                    'contact' => $contact
                );

                $result = $model->insert($data);
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
                    'contact' => $contact
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