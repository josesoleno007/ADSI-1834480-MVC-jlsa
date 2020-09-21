


          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
             
              <a href="index.php?c=<?=Database::encryptor('encrypt', 'user')?>&a=<?=Database::encryptor('encrypt', 'edit')?>" class="btn btn-primary btn-icon-split">
                 <span class="icon text-white-50">
                   <i class="fas fa-user-plus"></i>
                 </span> 
                 <span class="text">Crear Usuario</span>
              </a><br><br>
               <h6 class="m-0 font-weight-bold text-primary">Lista de Usuarios</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Numero de id</th>
                      <th>Nombre</th>
                      <th>Email</th>
                      <th>Rol</th>
                      <th>Activo</th>
                      <th>Ultima Sesion</th>
                      <th><i class="fa fa-cogs"></i></th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Numero de id</th>
                      <th>Nombre</th>
                      <th>Email</th>
                      <th>Rol</th>
                      <th>Activo</th>
                      <th>Ultima Sesion</th>
                      <th><i class="fa fa-cogs"></i></th>
                    </tr>
                  </tfoot>
                  <tbody>

                    <?php 

                    $num = 0;
                    foreach ($rows as $row): 
                      $num++; 

                    ?>

                    <tr>
                      <td><?=$row->id?></td>
                      <td><?=$row->name?></td>
                      <td><?=$row->email?></td>
                      <td><?=$row->level?></td>
                      <td><?=$row->active?></td>
                      <td><?=$row->lastAccess?></td>
                      <td><a href="index.php?c=<?=Database::encryptor('encrypt', 'user')?>&a=<?=Database::encryptor('encrypt', 'edit')?>&id=<?=$row->id?>" class="btn btn-success btn-circle">
                            <i class="fas fa-user-edit"></i>
                          </a>
                          <a href="index.php?c=<?=Database::encryptor('encrypt', 'user')?>&a=<?=Database::encryptor('encrypt', 'delete')?>&id=<?=$row->id?>" class="btn btn-danger btn-circle" data-toggle="modal" data-target="#logoutModal<?=$num?>">
                            <i class="fas fa-trash"></i>
                          </a> 
                          <!-- Delete Modal-->
                          <div class="modal fade" id="logoutModal<?=$num?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title text-danger" id="exampleModalLabel">
                                          <i class="fa fa-exclamation-triangle"></i>&nbsp;&nbsp;
                                          Eliminar Usuario</h5>
                                          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">×</span>
                                          </button>
                                      </div>
                                      <div class="modal-body">Esta seguro que desea eliminar a este usuario?<br>Si borra a este usuario se borrara permanentemente del sistema.</div>
                                      <div class="modal-footer">
                                          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                                            <a class="btn btn-danger" href="index.php?c=<?=Database::encryptor('encrypt', 'user')?>&a=<?=Database::encryptor('encrypt', 'delete')?>&id=<?=$row->id?>">
                                            <i class="fa fa-trash"></i>&nbsp;&nbsp;
                                            Eliminar
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </td>                     
                    </tr>
                  </tbody>

                <?php endforeach; ?>

                </table>
              </div>
            </div>
          </div>
