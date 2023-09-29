<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <base href="<?php echo base_url('assets/imagens/') ?>">
   <title>Loja Virtual</title>
   <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/estilos.css') ?>">
</head>

<body>
   <?php $uri = service('uri'); ?>
   <?php $pagina = $uri->getSegment(1); ?>
   <?php $id_categoria = count($uri->getSegments()) === 3 ? $uri->getSegments()[2] : null; ?>
   <div class="container">
      <div class="header">
         <div class="container-header">
            <div class="logotipo">
               <a href="<?php echo base_url(); ?>"><?php echo img('assets/imagens/logo.png'); ?></a>
            </div>
            <div class="banner">
               <a href="<?php echo $banners[0]['link'] ?>"><img src="<?php echo base_url('banner/getFoto/topo') ?>"></a>
            </div>
         </div>
         <div class="menu">
            <div class="menu-esquerdo">
               <nav>
                  <ul>
                     <li>
                        <li><?php echo anchor(base_url(), 'Home', $pagina == '' ? ['class' => 'active'] : '') ?></li>
                        <li><?php echo anchor('promocao', 'Promoções', $pagina == 'promocao' ? ['class' => 'active'] : '') ?></li>
                        <li><?php echo anchor('produto', 'Produtos', $pagina == 'produtos' ? ['class' => 'active'] : '') ?></li>
                        <?php if (!isset(session()->isLoggedIn)) : ?>
                           <li><?php echo anchor('cadastro', 'Cadastre-se', $pagina == 'cadastro' ? ['class' => 'active'] : '') ?></li>
                        <?php endif; ?>
                        <li><?php echo anchor('contato', 'Contato', $pagina == 'contato' ? ['class' => 'active'] : '') ?></li>
                     </li>
                  </ul>
               </nav>
            </div>
            <div class="menu-direito">
               <nav>
                  <ul>
                     <?php if (!isset(session()->isLoggedIn)) : ?>
                           <li><?php echo anchor('login','Logar') ?></li>
                        <?php else : ?>
                           <li class="boas-vindas">Bem-Vindo <?php echo session()->nome ?></li>
                           <li><?php echo anchor('login/signout','Sair') ?></li>
                     <?php endif; ?>
                  </ul>
               </nav>
            </div>
            <div class="clear"></div>
         </div>
      </div>

      <div class="coluna_esquerda">
         <div class="categorias">
               <h2>:: Categorias</h2>
               <ul>
                  <?php foreach ($categorias as $categoria) : ?>
                     <li><?php echo anchor("produto/porCategoria/{$categoria['id']}", ':: ' . $categoria['descricao'], $id_categoria == $categoria['id'] ? ['class' => 'active_categorias'] : '') ?></li>
                  <?php endforeach; ?>
               </ul>
         </div>
         <div class="social">
            <h2>:: Social</h2>
            <div class="icones_linha1">
               <div class="facebook">
                  <a href="https://www.facebook.com" target="_blank"><?php echo img('assets/imagens/facebook.png'); ?></a>

               </div>
               <div class="yt">
                  <a href="http://www.youtube.com" target="_blank"><?php echo img('assets/imagens/youtube.png'); ?></a>
               </div>
            </div>
            <div class="icones_linha2">
               <div class="twitter">
                  <a href="http://www.twitter.com" target="_blank"><?php echo img('assets/imagens/twitter.png'); ?></a>
               </div>
               <div class="instagram">
                  <a href="http://www.instagram.com" target="_blank"><?php echo img('assets/imagens/instagram.jpg'); ?></a>
               </div>
            </div>
         </div>
      </div>

      <div class="conteudo">
         <?php echo $this->renderSection('conteudo') ?>
      </div>

      <div class="clear"></div>

      <div class="footer">
         <div class="logotipo_footer">
            <?php echo img('assets/imagens/logo.png'); ?>
         </div>
         <div class="texto_footer">
            <nav>
               <ul class="menu-footer">
                  <li><?php echo anchor(base_url(), 'Home') ?></li>
                  <li><?php echo anchor('promocao', 'Promoções') ?></li>
                  <li><?php echo anchor('produto', 'Produtos') ?></li>
                  <?php if (!isset(session()->isLoggedIn)) : ?>
                        <li><?php echo anchor('cadastro', 'Cadastre-se') ?></li>
                  <?php endif; ?>
                  <li><?php echo anchor('contato', 'Contato') ?></li>
                  <?php if ((bool)session()->admin === true) : ?>
                        <li><?php echo anchor('admin', 'Administração') ?></li>
                  <?php endif; ?>
               </ul>
            </nav>
         </div>
         <div class="clear"></div>
      </div>          
   </div>
</body>

</html>