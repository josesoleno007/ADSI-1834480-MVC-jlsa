<?php
	require_once 'model/user.php';

	class UserController
	{
		private $model;

		public function __CONSTRUCT()
		{
			$this->model = new User();
		}

		public function dashboard()
		{
			require_once 'view/header.php';
			require_once 'view/message.php';
			require_once 'view/welcome.php';
			require_once 'view/footer.php';
		}

		public function index()
		{
			$rows = $this->model->index();
			require_once 'view/header.php';
			require_once 'view/message.php';
			require_once 'view/user/index.php';
			require_once 'view/footer.php';
		}

		public function delete()
		{
			$this->model->delete($_REQUEST['id']);
			$msg = 'Usuario eliminado satisfactoriamente';
			$del = 1;	
			header('location: index.php?c=user&a=index&m='.$msg.'&e='.$del);	
		}

		public function edit()
		{
			if (!isset($_REQUEST['id'])) {
				$id = null;
				$name = null;
				$email = null;
				$level = null;
				$select1 = null;
				$select2 = null;
				$button = 'Crear Usuario';
			}else{
				$id = $_REQUEST['id'];
				$row = $this->model->view($id);
				$name = $row->name;
				$email = $row->email;
				$level = $row->level;
				if ($level == 1) {
					$select1 = 'selected';
					$select2 = null;
				}else{
					$select2 = 'selected';
					$select1 = null;
				}
				$button = 'Actualizar Usuario';
			}

			require_once 'view/header.php';
			require_once 'view/user/edit.php';
			require_once 'view/footer.php';
		}

		public function crud()
		{  
			$id    = $_REQUEST['id'];
			$name  = $_REQUEST['name'];
			$email = $_REQUEST['email'];
			$level = $_REQUEST['level'];
			if ($id == null) {
				$this->model->create($name, $email, $level);
				$msg = 'Usuario creado satisfactoriamente';
				$err = 0;
			}else{
				$this->model->update($name, $email, $level, $id);
				$msg = 'Usuario actualizado satisfactoriamente';
				$err = 0;
			}
			
				header('location: index.php?c=user&a=index&m='.$msg.'&e='.$err);
		}

		public function login()
		{
			require_once 'view/message.php';
			require_once 'view/user/login.php'; 
		}

		public function validate($email, $password)
		{	
			$msg = 'Datos de ingreso herrados';
			$err = 1;

			$row = $this->model->validate($email, $password); 
			if ($row != false) {
				$this->model->lastAccess($row->id);
				$_SESSION['idUser'] = $row->id;
				$_SESSION['nameUser'] = $row->name;
				$msg = 'Bienvenido al Sistema';
				$err = 0;
				//$msg = Database::encryptor('encrypt', 'Bienvenido al Sistema');
				//$err = Database::encryptor('encrypt', 0);
			}
				
			header('location: index.php');
		}

		public function logout()
		{
			$_SESSION = array();
			if (ini_get("session.use_cookies")) {
			 	$params = session_get_cookie_params();
			 	setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
			} 
			session_destroy();
			header('location: index.php');
		}

	}
?>
