
    

     <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic">Bienvenido al sistema <?=$_SESSION['nameUser']?></h1>
      <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
      <p class="lead mb-0"><a href="index.php?c=<?=Database::encryptor('encrypt', 'user')?>&a=<?=Database::encryptor('encrypt', 'index')?>" class="text-white font-weight-bold">Entrar...</a></p>
      </div>
    </div>









    
    
   