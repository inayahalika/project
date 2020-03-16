<?php
include'../koneksi/koneksi.php';

        if(isset($_POST['pesan'])) {
            $id_order=uniqid();
            $nama=$_POST['nama'];
            $alamat=$_POST['alamat'];
            $no_hp=$_POST['no_hp'];
            $menu=$_POST['menu'];

            $pesan_input=mysqli_query($koneksi,"INSERT INTO pesan VALUES('$id_order','$nama','$alamat','$no_hp','$menu')")or die(mysqli_error($pesan_input));
        
            if($pesan_input){
                echo '<script> alert("Pesanan anda akan segera di proses")
                window.location.href="../index.php";
                </script>';
            }else{
                echo 'Data gagal di input';
            }



        }






?>