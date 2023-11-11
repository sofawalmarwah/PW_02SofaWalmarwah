<!DOCTYPE html>
<html lang="en">

<?php
  include 'proses.php';
?>


<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mahasiswa</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="header">
    <img src="Logo_UPG.png" alt="Logo" class="logo">
        Form Mahasiswa <font color="orange">UPG</font>
        <div class="copyright">
    <p>.</p>
</div>
</div>
    

    <div class="content">
        <form method="post" action="proses.php">
            <table  border="2" style="width: 400px;">
                <tr>
                    <td align="center" colspan="3" bgcolor="black">
                        <font color="#white" size="5px">
                            <b>Profil Anda</b>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#DEDEDE">nama_mahasiswa</td>
                    <td bgcolor="#DEDEDE">:</td>
                    <td bgcolor="#DEDEDE">
                        <input type="text" name="nama_mahasiswa">
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#DEDEDE">nim</td>
                    <td bgcolor="#DEDEDE">:</td>
                    <td bgcolor="#DEDEDE">
                        <input type="text" name="nim">
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#DEDEDE">jenis_kelamin</td>
                    <td bgcolor="#DEDEDE">:</td>
                    <td bgcolor="#DEDEDE">
                        <select radio="jenis_kelamin">
                        <input type='radio' name='jenis_kelamin' value='pria' />Pria
      <input type='radio' name='jenis_kelamin' value='perempuan' />Perempuan

                            
                        </select>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#DEDEDE">alamat</td>
                    <td bgcolor="#DEDEDE">:</td>
                    <td bgcolor="#DEDEDE">
                    <select name="alamat">
                            <option value="kota/kabupaten">kota/kabupaten</option>
                            <option value="Kabupaten Lebak">Kabupaten Lebak</option>
                            <option value="Kabupaten Pandeglang">Kabupaten Pandeglang</option>
                            <option value="Kabupaten Serang">Kabupaten Serang</option>
                            <option value="Kabupaten Tangerang">Kabupaten Tangerang</option>
                            <option value="Kota Cilegon">Kota Cilegon</option>
                            <option value="Kota Serang">Kota Serang</option>
                            <option value="Kota Tangerang">Kota Tangerang</option>
                            <option value="Kota Tangerang Selatan">Kota Tangerang Selatan</option>
                        </select>
                       
                    </td>

                </tr>
                <tr>
                    <td bgcolor="#DEDEDE">telpon</td>
                    <td bgcolor="#DEDEDE">:</td>
                    <td bgcolor="#DEDEDE">
                        <input type="text" name="telpon">
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#DEDEDE">agama</td>
                    <td bgcolor="#DEDEDE">:</td>
                    <td bgcolor="#DEDEDE">
                    <select name="agama">
                            <option value="islam">islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="konghucu">konghucu</option>
                            <option value="hindu">hindu</option>
                            <option value="budha">budha</option>
                            <option value="katholik">Katholik</option>
                        </select>
                        
                    </td>
                </tr>

                <tr>
                    <td bgcolor="aliceblue"> &nbsp </td>
                    <td bgcolor="aliceblue"> &nbsp </td>
                    <td bgcolor="aliceblue">
                        <input type="submit" name="submit" value="SIMPAN">
                        <input type="reset" value="RESET">
                    </td>
                </tr>
            </table>
        </form>

        <br>
        <table align="center" border="1" style="width: 1250px;">
            <tr>
                <th bgcolor="yellow">#</th>
                <th bgcolor="yellow"></nama mahasiswa>
                <th bgcolor="yellow">nama_mahasiswa</th>
                <th bgcolor="yellow">nim</th>
                <th bgcolor="yellow">jenis_Kelamin</th>
                <th bgcolor="yellow">alamat</th>
                <th bgcolor="yellow">telpon</th>
                <th bgcolor="yellow">agama</th>
            </tr>
            <?php
        $no = 1;
        $data = mysqli_query($penghubung, "SELECT * FROM mahasiswa");
        while($d = mysqli_fetch_array($data)){
        
        
        ?>
        <tr>
          <td bgcolor="white"><?php echo $no++ ?></td>
          <td bgcolor="white"><?php echo $d['nama_mahasiswa']?></td>
          <td bgcolor="white"><?php echo $d['nim']?></td>
          <td bgcolor="white"><?php echo $d['jenis_kelamin']?></td>
          <td bgcolor="white"><?php echo $d['alamat']?></td>
          <td bgcolor="white"><?php echo $d['telpon']?></td>
          <td bgcolor="white"><?php echo $d['agama']?></td>
          <td bgcolor="white"><a href="hapus.php?id=<?php echo $d['nama_mahasiswa']; ?>">Hapus</a> | <a href="edit.php?id=<?php echo $d['nama_mahasiswa']; ?>">Edit</a></td>
        </tr>

        <?php
        }
        ?>
        </table></br>
    </div>

   

    <script>feather.replace();</script>

</body>
</html>
