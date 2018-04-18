<?php
$no = 1;
?>
{% for datas in data %}
{% if loop.first %}
<table border=1 align='center'>
	<thead>
		<tr>
			<td>Id</td>
			<td>Nama</td>
			<td>No Telp</td>
			<td>Email</td>
			<th colspan="2">Action</th>
		<tr>
	<thead>
{% endif %}
	<tbody>
		<tr>
			<td><?php echo $no;?></td>
			<td>{{ datas.nama}}</td>
			<td>{{ datas.telp}}</td>
			<td>{{ datas.email}}</td>
			<td> <a href="{{ url('crud/editData/' ~ datas.id) }}">Edit</a> </td>
			<td> <a href="{{ url('crud/deleteData/' ~ datas.id) }}">Hapus</a> </td>
		</tr>
	</tbody>
	<?php
	$no++;
	?>
{% if loop.last %}
</table>
{% endif %}
{% else %}
	No Data
{% endfor %}
