<?php
include "config.php";

if(isset($_POST['simpan']))
{
    $q = mysqli_query($con, "INSERT INTO data_s (nama_l,nama_p,jk,ttl,agama,cita,hoby,anake,skandung,stiri,sangkat,bb,tb,
    gd,alamat,kelurahan,kecamatan,koka,propinsi,notlp,email,tgl,ket,nama_a,ada_a,ttl_a,pekerjaan_a,warga_a,nohp_a,nama_i,ada_i,ttl_i,pekerjaan_i,warga_i,nohp_i) 
    VALUE 
    ('$_POST[nama_l]', '$_POST[nama_p]', '$_POST[jk]', 
    '$_POST[ttl]', '$_POST[agama]', '$_POST[cita]', 
    '$_POST[hoby]', '$_POST[anake]', '$_POST[skandung]', '$_POST[stiri]', '$_POST[sangkat]', '$_POST[bb]', '$_POST[tb]', '$_POST[gd]'
    , '($_POST[alamat])', '($_POST[kelurahan])', '($_POST[kecamatan])', '($_POST[koka])', '($_POST[propinsi])', '($_POST[notlp])', 
    '($_POST[email])', '($_POST[tgl])', '($_POST[ket])', '($_POST[nama_a])', '($_POST[ada_a])', '($_POST[ttl_a])', '($_POST[pekerjaan_a])', 
    '($_POST[warga_a])', '($_POST[nohp_a])', '($_POST[nama_i])', '($_POST[ada_i])', '($_POST[ttl_i])', '($_POST[pekerjaan_i])', '($_POST[warga_i])', 
    '($_POST[nohp_i])')");
    if($q)
    {
        echo "<script>alert('data berhasil disimpan, terima kasih. Data anda akan kami proses');
        document.location.href='akhir.php'</script>";
    }
    else
    {
        echo "<script>alert('data gagal disimpan');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "post" align = "center" class="container pt-5">
    <h3>Data Calon Murid</h3>
    <table align = "center">
        <tr>
            <th>Nama Lengkap :</th>
            <th><input type="text" name = "nama_l" class="form-control" required></th>
        </tr>
        <tr>
            <th>Nama Panggilan :</th>
            <th><input type="text" name = "nama_p" class="form-control" required></th>
        </tr>
        <tr>
            <th>Jenis Kelamin :</th>
            <th><select name="jk" required>
            <option value="L">Laki-Laki</option>
            <option value="P">Perempuan</option>
            </select></th>
        </tr>
        <tr>
            <th>Tempat, Tanggal lahir :</th>
            <th><input type="text" name="ttl" class="form-control" required></th>
        </tr>
        <tr>
            <th>Agama :</th>
            <th><input type="text" name="agama" class="form-control" required></th>
        </tr>
        <tr>
            <th>Cita-cita :</th>
            <th><input type="text" name = "cita" class="form-control" required></th>
        </tr>
        <tr>
            <th>Hoby :</th>
            <th><input type="text" name = "hoby" class="form-control" required></th>
        </tr>
        <tr>
            <th>Anak ke :</th>
            <th><input type="number" name = "anake" class="form-control" required></th>
        </tr>
        <tr>
            <th>Jumlah saudara :</th>
            <th>Kandung<input type="number" name="skandung"></th>
            <th>Tiri<input type="number" name="stiri"></th>
            <th>Angkat<input type="number" name="sangkat"></th>
        </tr>
        <tr>
            <th>Berat badan :</th>
            <th><input type="number" name="bb" class="form-control" required></th>
        </tr>
        <tr>
            <th>Tinggi badan :</th>
            <th><input type="number" name="tb" class="form-control" required></th>
        </tr>
        <tr>
            <th>Golongan darah :</th>
            <th><input type="text" name="gd" class="form-control" required></th>
        </tr>
        <tr>
                <th>Alamat rumah :</th>
                <th><input type="text" name="alamat" placeholder = "Alamat" class="form-control"></th>
            <tr><th></th><th><input type="number" name="rt" placeholder = "RT" class="form-control"></th></tr>
            <tr><th></th><th><input type="number" name="rw" placeholder = "RW" class="form-control"></tr></th>
            </tr>
            <tr>
                <th>Kelurahan :</th>
                <th><input type="text" name = "kelurahan" placeholder = "Kelurahan" class="form-control"></th>
            </tr>
            <tr>
                <th>Kecamatan :</th>
                <th><input type="text" name = "kecamatan" placeholder = "Kecamatan" class="form-control"></th>
            </tr>
            <tr>
                <th>Kota/Kabupaten :</th>
                <th><input type="text" name="koka" placeholder = "Kota/Kabupaten" class="form-control"></th>
            </tr>
            <tr>
                <th>Propinsi :</th>
                <th><input type="text" name="propinsi" placeholder = "Propinsi" class="form-control"></th>
                </tr>
            <tr>
                <th></th>
                <th><input type="text" name="kodepos" placeholder = "Kode Pos" class="form-control"></th>
            </tr>
            <tr>
                <th>No.Telpon Rumah :</th>
                <th><input type="text" name="notlp" class="form-control"></th>
            </tr>
            <tr>
                <th>Email :</th>
                <th><input type="text" name="email" class="form-control"></th>
            </tr>
            <tr>
                <th>Tinggal dengan :</th>
                <th><input type="radio" name="tgl" value = "orangtua">Orang Tua
                <input type="radio" name="tgl" value = "asrama">Asrama
                <input type="radio" name="tgl" value = "saudara">Saudara<input type="text" name="ket"></th>
            </tr>
            <tr>
                <th></th>
                <th><h3>Data Ayah</h3></th>
            </tr>
            <tr>
                <th>Nama Ayah :</th>
                <th><input type="text" name="nama_a" class="form-control"><input type="radio" name="ada_a" value = "ada">Masih ada <input type="radio" name="ada_a" value = "almarhum">Almarhum</th>
            </tr>
            <tr>
                <th>Tempat, tanggal lahir</th>
                <th><input type="text" name="ttl_a" placeholder = "Contoh: Bogor, 9 Januari 1976" class="form-control"></th>
            </tr>
            <tr>
                <th>Pekerjaan</th>
                <th><input type="text" name="pekerjaan_a" placeholder = "Contoh: Pegawai Negeri" class="form-control"></th>
            </tr>
            <tr>
                <th>Pendidikan Terakhir</th>
                <th><input type="text" name="pendidikan_a" placeholder = "Contoh: SMK" class="form-control"></th>
            </tr>
            <tr>
                <th>Kewarganegaraan/Agama</th>
                <th><input type="text" name="warga_a" placeholder = "Contoh: Indonesia/Islam" class="form-control"></th>
            </tr>
            <tr>
                <th>No.HP/WA</th>
                <th><input type="text" name="nohp_a" placeholder = "Contoh: 0812-/7989" class="form-control"></th>
            </tr>
            <tr>
                <th></th>
                <th><h3>Data Ibu</h3></th>
            </tr>
            <tr>
                <th>Nama Ibu :</th>
                <th><input type="text" name="nama_i" class="form-control"><input type="radio" name="ada_i" value = "ada">Masih ada <input type="radio" name="ada_i" value = "almarhumah">Almarhumah</th>
            </tr>
            <tr>
                <th>Tempat, tanggal lahir</th>
                <th><input type="text" name="ttl_i" placeholder = "Contoh: Bogor, 9 Januari 1976" class="form-control"></th>
            </tr>
            <tr>
                <th>Pekerjaan</th>
                <th><input type="text" name="pekerjaan_i" placeholder = "Contoh: Pegawai Negeri" class="form-control"></th>
            </tr>
            <tr>
                <th>Pendidikan Terakhir</th>
                <th><input type="text" name="pendidikan_i" placeholder = "Contoh: SMK" class="form-control"></th>
            </tr>
            <tr>
                <th>Kewarganegaraan/Agama</th>
                <th><input type="text" name="warga_i" placeholder = "Contoh: Indonesia/Islam" class="form-control"></th>
            </tr>
            <tr>
                <th>No.HP/WA</th>
                <th><input type="text" name="nohp_i" placeholder = "Contoh: 0812-3456-7890/0812-3456-7890" class="form-control"></th>
            </tr>
            <tr>
                <th></th>
                <th><input type="submit" name="simpan" value = "Selesai Pendaftaran" class="btn btn-success"></th>
            </tr>
    </table>  
</form>
</body>
</html>