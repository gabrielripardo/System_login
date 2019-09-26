<div class="container">
    <!-- Include Flash Data File -->
    <?php $this->load->view('_FlashAlert\flash_alert.php') ?>
    
    <div class="jumbotron">
        <h1 class="display-4">Welcome to <?= $this->session->userdata('USER_NAME') ?></h1>
        <p>CodeIgnier 3 login and registration full application.</p>
        <hr class="my-4">
        <h1>A chave da SW4 está localizada na cidade de Sobral-CE</h1>
        <a class="btn btn-primary btn-lg" href="<?= base_url('lugares/exibirCarros') ?>" role="button">Carros</a>
        <a class="btn btn-danger btn-lg" href="<?= base_url('lugares/exibirOuros') ?>" role="button">Ouros</a>
    </div>
</div>