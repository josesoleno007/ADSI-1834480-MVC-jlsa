<div class="container">
  <div class="row">
    <div class="col-sm">
      
      <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <img style="width: 300px; height: 300px;" src="assets/img/logoAdsi.jpg" alt=""><br><br>
                <h1 class="h4 text-gray-900 mb-4"><?=$button?></h1>
              </div>
              <form class="user" method="post" action="index.php?c=user&a=crud">
                <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="name" value="<?=$name?>" name="name" placeholder="Nombre del Usuario">
                  </div>  
                </div>                
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="email" value="<?=$email?>" name="email" placeholder="Email del Usuario">
                </div>
                <div class="form-group row">
                  <div class="col-sm-12 mb-3 mb-sm-0">
                    <select class="form-control" name="level" id="level">
                      <option <?=$select1?> value="1">Super Usuario</option>
                      <option <?=$select2?> value="2">Administrador</option>
                    </select>
                  </div>
                </div>
                <input type="hidden" name="id" value="<?=$id?>" >
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  <?=$button?>
                </button>
              </form>  
                <hr>
            </div>
          </div>

    </div>
  </div>
</div>



