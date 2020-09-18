<?php
	
	$msg = null;
	if (isset($_REQUEST['m'])) {
		$msg = $_REQUEST['m'];
		if ($_REQUEST['e'] == 0) {
			$alert = 'alert-success';
		}else{
			$alert = 'alert-warning';
		}


		?>

	<div class="alert <?=$alert?>" role="alert" >

	<?php	if ($_REQUEST['e'] == 1) {?>
			<i class="fa fa-exclamation"></i>&nbsp;&nbsp;
		<?php
		}
		?>

		<?=$msg?><button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    	</button>
	</div>

<?php
}