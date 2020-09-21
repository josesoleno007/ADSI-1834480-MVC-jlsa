<?php
	
	
	if (isset($_REQUEST['m'])) {
		$msg = Database::encryptor('decrypt', $_REQUEST['m']);

		if ($_REQUEST['e'] == 0) {
			$alert = 'alert-success';
		}else{
			$alert = 'alert-danger';
		}


		?>

	<div class="alert <?=$alert?>" role="alert" >

		<i class="fa fa-exclamation"></i>&nbsp;&nbsp;
		<?=$msg?><button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    	</button>

	</div>

<?php
}