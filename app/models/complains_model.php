<?php

    class complains_model extends Controller{

        public function insert($data) {
            $dbc = $this->db_connect();
            $query = "select * from complains where street_lamp_number='" . $data['street_lamp_number'] . "' limit 1";
            $result = mysqli_query($dbc, $query) or die(mysqli_error($dbc));
            if (mysqli_num_rows($result) > 0) {
                $result = 0;
                return $result;
            }
            else {
                $query = "insert into complains(street_lamp_number,road,complain_date_time,assigned_person)" .
                    "values('" . $data['street_lamp_number'] . "', '" . $data['road'] . "', '" . $data['complain_date_time'] . "', '" . $data['assigned_person'] . "')";
                $result = mysqli_query($dbc, $query);
                if ($result) {
                    $state = 1;
                }
                else {
                    $state = 2;
                }
                return $state;
                $this->db_close($dbc);
            }
        }

        public function close_job($data) {
            $dbc = $this->db_connect();
            $query = "select * from close_job where job_number='" . $data['job_number'] . "' limit 1";
            $result = mysqli_query($dbc, $query) or die(mysqli_error($dbc));
            if (mysqli_num_rows($result) > 0) {
                $result = 0;
                return $result;
            }
            else {
                $query1 = "insert into close_job(job_number,comment)" .
                    "values('" . $data['job_number'] . "', '" . $data['comment'] . "',)";
                $result1 = mysqli_query($dbc, $query1);
                if ($result1) {
                    $state = 1;
                }
                else {
                    $state = 2;
                }
                return $state;
                $this->db_close($dbc);
            }
        }
    }