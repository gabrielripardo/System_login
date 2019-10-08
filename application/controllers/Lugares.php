<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Lugares extends CI_Controller {
    public function index(){    
        $this->verificarSessao();
        $data['page_title'] = "Welcome to User Panel";
        $this->load->view('_Layout/home/header.php', $data); // Header File
        $this->load->view('pages/panel.php');
        $this->load->view('_Layout/home/footer.php'); // Footer File
    }

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
    public function exibirWebcam(){
        $this->verificarSessao();
        $this->load->view("pages/webcam");
    }
    public function capturarFoto(){
        $img = $_POST['image'];
        $folderPath = "fotos/";
        
        $id = 5; //Simula o id do visitante
        
        $image_parts = explode(";base64,", $img);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
    
        $image_base64 = base64_decode($image_parts[1]);
        $fileName =  'visitante_'.$id.'.png';
    
        $file = $folderPath . $fileName;
        file_put_contents($file, $image_base64);
    
        print_r($fileName);
    }
}

/*
Ao abrir a view verifica se existe sessão aberta.
Todas as view é executada o método de verificar sessão.
*/