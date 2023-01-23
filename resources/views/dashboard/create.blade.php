@extends('layout')
@section('content')
<table>
    <tr>
       <td>Nama :</td>
       <td><input type="text" name="name" placeholder="masukan Nama"></td>
    </tr>
    <tr>
       <td>Jenis kelamin</td>
       <td>
          <input type="radio" name="jenis_kelamin" value="pria">Pria
          <input type="radio" name="jenis_kelamin" value="wanita">Wanita
       </td>
    </tr>
   <tr>
     <td>Tanggal lahir: </td>
     <td> <input type="date" name="lahir" placeholder="masukan tanggal lahir anda"> </td>
   </tr>
   <tr>
     <td>riwayat pendidikan</td>
     <td><textarea name="r_p"></textarea></td>
   </tr>
   <tr> 
     <td>Status</td>
     <td>
       <select name="status">
       <option value="udah bekerja">Suda Bekerja</option>
       <option value="belum bekerja">Belum Bekerja</option>
       <option value="kuliah">Kuliah</option>
       </select>
    </td>
   </tr>
   <tr>
     <td>Upload Photo anda</td>
     <td><input type="file" name="gambar"/></td>
   </tr>
   <tr>
     <td>Apa Hobi anda</td>
     <td><textarea name="hobi"></textarea></td>
   </tr>
   <tr>
     <td>Alamat anda</td>
     <td><textarea name="address"></textarea></td>
   </tr>
   <tr>
      <td></td><td><button type="submit">Masukan Biodata</button></td>
   </tr>
</table>
@endsection