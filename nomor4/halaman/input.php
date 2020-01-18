<div class="halaman">
 <form name="form1" method="post" action="halaman/aksi_input.php">
  <table width="400" border="0"  cellpadding="1" cellspacing="1" >
    <tr>
      <td height="50" colspan="2"><div align="center">Input data </div></td>
    </tr>
    <tr >
	<a href="index.php?page=element">tambah element</a> || <a href="index.php?page=pokemon">tambah pokemon</a>
      <td height="40">Nis </td>
      <td>:
      <input name="nis" type="text" id="nis"></td>
    </tr>
    </tr>
    <tr >
      <td height="40">Nama </td>
      <td>:
      <input name="nama" type="text" id="nama"></td>
    </tr>
  
    <tr >
      <td height="40">Jenis Kelamin </td>
      <td>:
          <select name="jk" id="jk">
            <option value="Laki-Laki" selected>Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select></td>
    </tr>
    
 
    <tr >
      <td height="40">Kelas </td>
      <td>:
      <input name="kelas" type="text" id="kelas"></td>
    </tr>
	
	   <tr >
      <td height="40">Umur </td>
      <td>:
      <input name="umur" type="text" id="umur"></td>
    </tr>
    
    <tr >
      <td>&nbsp;</td>
      <td height="50"><input type="submit" name="Simpan" value="Simpan"></td>
    </tr>
  </table>
</form>
</div>
