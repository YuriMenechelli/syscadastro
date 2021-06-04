<?php
include_once '../public/dependencias.php';

include_once '../model/Conexao.php';
include_once '../model/Manager.php';

$m = new Manager();

$id = $_POST['id'];
?>

<h2 class="text-center">
    Alterar Cliente <i class="fa fa-List"></i>
</h2>

<form method="post" action="../controller/update_costumer.php">
    <div class="container">
        <div class="form-row">

            <?php foreach ($m->getInfo('clientes', $id) as $c):?>
            <div class="col-md-6">
                Nome: <i class="fa fa-user"></i>
                <input class="form-control" type="text" name="nome" required autofocus value="<?= $c['nome']?>">
            </div>
            <div class="col-md-6">
                E-Mail: <i class="fa fa-envelope"></i>
                <input class="form-control" type="email" name="email" required value="<?= $c['email']?>">
            </div>
            <div class="col-md-4">
                CPF: <i class="fa fa-address-card"></i>
                <input class="form-control" type="text" name="cpf" required id="cpf" value="<?= $c['cpf']?>">
            </div>
            <div class="col-md-4">
                Dt. de Nascimento: <i class="fa fa-calendar"></i>
                <input class="form-control" type="date" name="dtnascimento" required value="<?= $c['dtnascimento']?>">
            </div>
            <div class="col-md-4">
                Telefone: <i class="fab fa-whatsapp"></i>
                <input class="form-control" type="text" name="Telefone" required id="phone" value="<?= $c['Telefone']?>">
            </div>
            <div class="col-md-12">
                Endereço: <i class="fa fa-map"></i>
                <input class="form-control" type="text" name="Endereco" required value="<?= $c['Endereco']?>"><br>
            </div>
            <input type="hidden" name="id" value="<?= $c['id']?>">
            <?php endforeach;?>
            <div class="col-md-4">
                <a class="btn btn-primary btn-lg" href="../index.php">
                    Voltar <i class="fa fa-arrow-circle-left"></i>
                </a>
            </div>
            <div class="col-md-8 text-right">
                <button class="btn btn-warning btn-lg">
                    Alterar Cliente <i class="fa fa-user-edit"></i>
                </button>
            </div>
        </div>
    </div>
</form>

