<?php

class Users extends CI_Controller {

    public function show($user_id){
//        $this->load->model('user_model');
        $data['results'] = $this->user_model->get_users($user_id, 'rico');
//        foreach ($result as $object) {
//            echo $object->username . "<br>";
//        }
        $this->load->view('user_view', $data);
    }
    public function insert() {
        $username = 'peter';
        $password = 'secret';
        $this->user_model->create_users([
           'username' => $username,
            'password' => $password
        ]);
    }
    public function update() {
        $id = 4;
        $username = 'William';
        $password = 'notsosecret';
        $this->user_model->update_users([
            'username' => $username,
            'password' => $password
        ], $id);
    }
    public function delete() {
        $id = 4;
        $this->user_model->delete_users($id);
    }

}

?>