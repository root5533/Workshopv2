<?php

    if(!defined('BASEPATH')){
        exit('No direct script access allowed');
    }

    class complains_controller extends Controller{
        public function index(){
            $this->view('Electrical/open_complains');
        }

        public function load_view($view) {
            if($view == 'open_complains') {
                $this->view('Electrical/open_complains');
            }
            elseif ($view == 'close_job_entry_eng') {
                $this->view('Electrical/close_job_entry_eng');
            }
            else {
                $data['message'] = "Page is not available!";
                $this->view('Electrical/open_complains', $data);
            }

        }

        public function complains_registration() {
            if(isset($_POST['submit'])) {
                $dbc = $this->db_connect();
                $street_lamp_number = trim($_POST['street_lamp_number']);
                $road = trim($_POST['road']);
                $complain_date_time = trim($_POST['complain_date_time']);
                $assigned_person = trim($_POST['assigned_person']);
                if(empty($street_lamp_number)) {
                    $error['street_lamp_number_error'] = "*Please provide a street lamp number";
                }
                if (empty($road)) {
                    $error['road_error'] = "*Please provide a road";
                }
                if (empty($complain_date_time)) {
                    $error['complain_date_time_error'] = "*Please provide the complain date & time";
                }
                if (empty($assigned_person)) {
                    $error['assigned_person_error'] = "*Please enter an assigned person";
                }
                if (isset($error) == FALSE) {
                    $model = $this->model('complains_model');
                    $data = array(
                        'street_lamp_number' => $street_lamp_number,
                        'road' => $road,
                        'complain_date_time' => $complain_date_time,
                        'assigned_person' =>  $assigned_person
                    );

                    $result = $model->insert($data);

                    if ($result == 1) {
                        $data = array('message' => 'Complain is Successfully added to the system');
                    }
                    elseif ($result == 0) {
                        $data = array('message' => 'This complain details are already registered');
                    }
                    elseif ($result == 2) {
                        $data = array('message' => 'Problem updating complains database');
                    }
                    $this->view('Electrical/open_complains',$data, []);
                }
                else {
                    $data = array(
                        'street_lamp_number' => $street_lamp_number,
                        'road' => $road,
                        'complain_date_time' => $complain_date_time,
                        'assigned_person' =>  $assigned_person
                    );
                    $this->view('Electrical/open_complains', $data, $error);
                }
                $this->db_close($dbc);
            }
            else {
                $this->view('Electrical/open_complains');
            }
        }

        public function close_job_entry() {
            if(isset($_POST['close_job'])) {
                $dbc = $this->db_connect();
                $job_number = trim($_POST['job_number']);
                $comment = trim($_POST['comment']);
                if(empty($job_number)) {
                    $error['job_number_error'] = "*Please provide a valid job number";
                }
                if (empty($comment)) {
                    $error['comment_error'] = "*Please provide a comment";
                }
                if (isset($error) == FALSE) {
                    $model = $this->model('complains_model');
                    $data = array(
                        'job_number' => $job_number,
                        'comment' => $comment
                    );

                    $result = $model->close_job($data);

                    if ($result == 1) {
                        $data = array('message' => 'job is Successfully completed');
                    }
                    elseif ($result == 0) {
                        $data = array('message' => 'This job is already closed');
                    }
                    elseif ($result == 2) {
                        $data = array('message' => 'Problem updating close_job database');
                    }
                    $this->view('Electrical/close_job_entry_eng',$data, []);
                }
                else {
                    $data = array(
                        'job_number' => $job_number,
                        'comment' => $comment
                    );
                    $this->view('Electrical/close_job_entry_eng', $data, $error);
                }
                $this->db_close($dbc);
            }
            else {
                $this->view('Electrical/close_job_entry_eng');
            }
        }

    }