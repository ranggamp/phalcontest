<?= $this->tag->form(['Crud/insertData', 'role' => 'form']) ?>
	<h3>INSERT DATA</h3>
	<table>
		<tr>
			<td><label for='name'>Nama</label></td>
			<td><input type='text' name='txt_nama'></td>
		</tr>
		<tr>
			<td><label for='email'>Email</label></td>
			<td><input type='text' name='txt_email'></td>
		</tr>
		<tr>
			<td><label for='telp'>No Telp</label></td>
			<td><input type='text' name='txt_telp'></td>
		</tr>
		<tr>
			<td><button type='submit'>save</button></td>
		</tr>
	</table>
</form>
<?php
	echo Phalcon\Tag::linkTo('crud/viewData','View Data');
?>
