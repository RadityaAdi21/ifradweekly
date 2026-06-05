<?php

require "koneksi.php";
 $qmhs = "SELECT * FROM mahasiswa" ;
 $mhs = tampildata($qmhs);



?>










<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" >
        <title>
            INFORMATIKA 2026
        </title>
    </head>
    <body>
        <h1>INFORMATIKA 2026</h1>
        <hr/>
        <table>
            <tr>
                <td><a href="index.php">Home</a></td>
                <td><a href="profile.php">Profile</a></td>
                <td><a href="Contact.php">Contact</a></td>
                <td><a href="mahasiswa.php">Data Mahasiswa</a></td>
            </tr>
        </table>
        <br>
        <hr/>
        <h2>Data Mahasiswa</h2>
        <a href="tambahdata.php"
        button>Tambah Data</button>
        <a>
    
        <table border="1" cellspacing="0" cellpadding="10">
          <tr>
            <th >No</th>
            <th >Nama</th>
            <th >NIM</th>
            <th >Jurusan</th>
            <th >Email</th>
            <th >No Hp</th>
            <th >Foto</th>
          </tr>

           <?php
          foreach($mhs as $m) {
           ?>
    <tr>
        <td align="center">1</td>
        <td><?php echo $mhs["nama"]; ?></td>
        <td><?php echo $mhs["nim"]; ?></td>
        <td><?php echo $mhs["jurusan"]; ?></td>
        <td><?php echo $mhs["email"]; ?></td>
        <td><?php echo $mhs["no_hp"]; ?></td>
        <td><img src="Asets/Image/Anjay.jpg" alt="Foto Nafari" width="100px"></td>
        <td>
            <a href="editdata.php?id=2"><button>Edit</button></a>
            <a href="hapusdata.php?id=2"><button>Hapus</button></a>
        </td> </tr>
<?php
} // 
?>


        <!-- </tr>
        <tr>
            <th>UTS</th>
            <th>UAS</th>
            <th>Tugas</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Radit</td>
            <td><13182420084></td>
            <td>Informatika</td>
            <td>adit43318@gmail.com</td>
            <td>081252165563</td>
            <td><img src="Asets/Image/Anjay.jpg" alt = "Foto Nafari" width="100px"></td>
            <td>
                <a href="editdata.php?id=2"><button>Edit</button></a>
                <a href="hapusdata.php?id=2"><button>Hapus</button></a>
                <td>
        </tr>
        <tr>
            <td>2</td>
            <td>Lukman</td>
            <td>1318204814</td>
            <td>Informatika</td>
            <td>Lukman2123232@gmail.com</td>
            <td>081827232312</td>
            <td><img src="Asets/Image/Anjay.jpg" alt = "Foto Nafari" width="100px"></td>
            <a href="editdata.php?id=2"><button>Edit</button></a>
                <a href="hapusdata.php?id=2"><button>Hapus</button></a>
        </tr>
        <tr>
            <td>3</td>
            <td>Jambu</td>
            <td><13182402812></td>
            <td>Informatika</td>
            <td>Jambu023032@gmail.com</td>
            <td>082382322123</td>
            <td><img src="Asets/Image/Anjay.jpg" alt = "Foto Nafari" width="100px"></td>
            <a href="editdata.php?id=2"><button>Edit</button></a>
                <a href="hapusdata.php?id=2"><button>Hapus</button></a>
        </tr>
</table>
<br>
<hr> -->
<table border ="1" cellspacing="2" cellpadding="50">
        <tr>
            <th >1,1</th>
            <th >1,2</th>
            <th >1,3</th>
            <th >1,4</th>
        </tr>
        <tr>
            <th >2,1</th>
            <th rowspan="2" colspan="2"></th>
            <th >2,4</th>

        </tr>
        <tr>
            <th >3,1</th>
            <th >3,4</th>

        </tr>
        <tr>
            <th >4,1</th>
            <th >4,2</th>
            <th >4,3</th>
            <th >4,4</th>

        </tr>
</table>
<body>
    <html>
        