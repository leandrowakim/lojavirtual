<?php echo $this->extend('admin/layout') ?>
<?php echo $this->section('conteudo') ?>

<table class="table table-stripped">
    <caption>Usuários Cadastrados</caption>
    <tr class="dark">
        <th>Código</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Endereço</th>
    </tr>
    <?php foreach ($usuarios as $usuario) : ?>
        <tr>
            <td class="text-center"><?php echo strtoupper($usuario['id']) ?></td>
            <td><?php echo strtoupper($usuario['nome']) ?></td>
            <td><?php echo strtoupper($usuario['email']) ?></td>
            <td><?php echo strtoupper($usuario['endereco']) ?></td>            
        </tr>
    <?php endforeach; ?>
</table>

<?php echo $this->endSection('conteudo');