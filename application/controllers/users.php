<?php

class Users extends CI_Controller {

    public function show(){
//        $this->load->model('user_model');
        $data['results'] = $this->user_model->get_users();
//        foreach ($result as $object) {
//            echo $object->username . "<br>";
//        }
        $this->load->view('user_view', $data);
    }

}

?>