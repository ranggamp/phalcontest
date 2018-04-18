{{ form('crud/updateData', 'role': 'form') }}
 <h4>EDIT DATA</h4>
  <table>
    <tr>
      <td><input type="hidden" name="id" value="<?php echo $id ?>"></td>
    </tr>
    <tr>
      <td><label for="nama">Nama</label></td>
      <td><input type="text" name="nama" value="<?php echo $nama ?>"></td>
    </tr>
    <tr>
      <td><label for="nama">Email</label></td>
      <td><input type="text" name="email" value="<?php echo $email ?>"></td>
    </tr>
    <tr>
      <td><label for="nama">Telp</label></td>
      <td><input type="text" name="telp" value="<?php echo $telp ?>"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><button type="submit">Save</button></td>
    </tr>
  </table>
