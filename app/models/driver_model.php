<?php

class Driver_Model extends Controller {

    public function insert($data) {
        $dbc = $this->db_connect();
        $name = $data['name'];
        $nic = $data['nic'];
        $license = $data['license'];
        $address = $data['license'];
        $contact = $data['contact'];

        echo "<h1>$name</h1>";
        echo "<h1>$nic</h1>";
        echo "<h1>$license</h1>";
        echo "<h1>$address</h1>";
        echo "<h1>$contact</h1>";
        //check for existing driver
        $query = "select * from driver where nic='" . $data['nic'] . "' limit 1";
        $result = mysqli_query($dbc, $query);
        echo $result;
        if (mysqli_num_rows($result) > 0) {
            echo "<h1>2</h1>";
            $result = 0; //existing driver -> 0
            return $result;
        }
        else {
            echo "<h1>3</h1>";
            $query = "insert into driver(name,nic,license,address,contact)" .
                "values('" . $data['name'] . "', '" . $data['nic'] . "', '" . $data['license'] . "', '" . $data['address'] . "', '" . $data['contact'] . "')";
            $result = mysqli_query($dbc, $query);
            if ($result) {
                $state = 1; //successful insert -> 1
            }
            else {
                $state = 2; // unsuccessful result -> 2
            }
            return $state;
            $this->db_close($dbc);
        }
    }




}