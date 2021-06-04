<?php
include_once 'model/Conexao.php';
include_once 'model/Manager.php';
include_once 'public/helper.php';

$manager = new Manager();

?>


<!DOCTYPE html>
<html>
<head>
    <?php include_once 'public/dependencias.php' ?>
</head>
<body>
<div class="container">

    <h2 class="text-center">
        Lista de Clientes <i class="fa fa-users"></i>
    </h2>

    <h5 class="text-right">
        <a href="views/page_register.php" class="btn btn-primary btn-xs">
            <i class="fa fa-user-plus"></i>
        </a>
    </h5>

    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="thead">
                <tr>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Cpf</th>
                    <th>Dt Nasc</th>
                    <th>Endereço</th>
                    <th>Telefone</th>
                    <th colspan="3">Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php foreach ($manager->listCostumer('clientes') as $c):?>
                    <td><?= $c['nome']; ?></td>
                    <td><?= $c['email']; ?></td>
                    <td><?= $c['cpf']; ?></td>
                    <td><?= formatDate($c['dtnascimento']); ?></td>
                    <td><?= $c['Endereco']; ?></td>
                    <td><?= $c['Telefone']; ?></td>
                    <td>
                        <form method="POST" action="views/page_update.php">
                            <input type="hidden" name="id" value="<?= $c['id']?>">
                            <button class="btn btn-warning btn-xs">
                                <i class="fa fa-user-edit"></i>
                            </button>
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="controller/delete_costumer.php" onclick="return confirm('Você deseja excluir esta informação?')">
                            <input type="hidden" name="id" value="<?= $c['id']?>">
                            <button class="btn btn-danger btn-xs">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>