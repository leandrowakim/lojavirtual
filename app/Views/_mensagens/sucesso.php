<?php echo $this->extend('_common/layout') ?>
<?php echo $this->section('conteudo') ?>

<div class="sucesso">
    <p><?php echo $mensagem ?></p>
    <hr>
    <p><?php echo anchor(base_url(), 'Home') ?></p>
</div>

<?php echo $this->endSection('conteudo') ?>