<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller
{
    function index()
    {

        if (isset($_POST['submit'])) {
            $recaptcha = $this->input->post('g-recaptcha-response');
            if (!empty($recaptcha)) {

                $username = $this->input->post('a', TRUE);
                $password = hash("sha512", md5($this->input->post('b', TRUE)));
                $cek = $this->model_app->cek_login($username, $password, 'users');
                $row = $cek->row_array();
                $total = $cek->num_rows();
                if ($total > 0) {
                    $this->session->set_userdata('upload_image_file_manager', true);
                    $this->session->set_userdata(array(
                        'username' => $row['username'],
                        'level' => $row['level'],
                        'id_session' => $row['id_session']
                    ));
                    redirect('administrator/home');
                } else {
                    echo $this->session->set_flashdata('message', '<div class="alert alert-danger"><center>Username atau Password Salah!!</center></div>');
                    redirect('login');
                }
            } else {
                echo $this->session->set_flashdata('message', '<div class="alert alert-danger"><center>captcha harus diisi!</center></div>');
                redirect('login');
            }
        } else {
            if ($this->session->level != '') {
                redirect('administrator/home');
            } else {
                $data = array(
                    'title'          => 'Users &rsaquo; Log In',
                    'captcha'        => $this->recaptcha->getWidget(),
                    'script_captcha' => $this->recaptcha->getScriptTag(),
                );

                $this->load->view('administrator/view_login', $data);
            }
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect('main');
    }
}
