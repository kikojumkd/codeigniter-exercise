<?php

class User_model extends CI_Model {

//    public function get_users($user_id, $username) {
//        $config['hostname'] = "127.0.0.1";
//        $config['username'] = "root";
//        $config['password'] = "root";
//        $config['database'] = "scotchbox";
//
//        $connection = $this->load->database($config);
//        $query = $this->db->get('users');
//        $query = $this->db->query("SELECT * FROM scotchbox.users");
//        return $query->num_rows(); //this will give me the number of rows in the table users
//        return $query->num_fields(); //this will give me the number of columns in the table users
//        return $query->result();
//        $this->db->where([
//            'idusers' => $user_id,
//            'username' => $username
//        ]);
//        $this->db->where('idusers', $user_id);
//        $query = $this->db->get('users');
//        return $query->result();
    public function create_user() {
        $options = ['cost' => 12];
        $encripted_pass = password_hash($this->input->post('password'), PASSWORD_BCRYPT, $options);
        $data = array(
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => $encripted_pass
        );
        $insert_data  = $this->db->insert('users', $data);
        return $insert_data;
    }
    public function login_user($username, $password) {
        $this->db->where('username', $username);
        $result = $this->db->get('users');

        $db_password = $result->row(2)->password;

        if(password_verify($password, $db_password)){
            return $result->row(0)->idusers;
        } else {
            return false;
        }

    }
}
//    public function create_users($data) {
//        $this->db->insert('users', $data);
//    }
//    public function update_users($data, $id) {
//        $this->db->where([
//            'idusers' => $id
//        ]);
//        $this->db->update('users', $data);
//    }
//    public function delete_users($id) {
//        $this->db->where([
//            'idusers' => $id
//        ]);
//        $this->db->delete('users');
//    }


?>