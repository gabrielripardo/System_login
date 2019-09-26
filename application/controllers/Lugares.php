<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Lugares extends CI_Controller {

    public function exibirCarros(){
        $this->verificarSessao();
        $data['page_title'] = "Carros";
        $this->load->view('_Layout/home/header.php', $data); // Header File
        $this->load->view('pages/carsPeace.php');
        $this->load->view('_Layout/home/footer.php'); // Footer File
    }

    public function exibirOuros() {    
        $this->verificarSessao();
        $data['page_title'] = "Ouros";
        $this->load->view('_Layout/home/header.php', $data); // Header File
        $this->load->view('pages/goldPeace.php');
        $this->load->view('_Layout/home/footer.php'); // Footer File
    }
    public function verificarSessao(){
        if (empty($this->session->userdata('USER_ID'))) { //Se não tiver sessão aberta redirecionar para tela de login
            redirect('User/fazerLogin');
        }        
    }
}