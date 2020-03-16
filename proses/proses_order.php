<?php
include'../koneksi/koneksi.php';

        if(isset($_POST['order'])) {
            $id_order=uniqid();
            $nama=$_POST['nama'];
            $alamat=$_POST['alamat'];
            $no_hp=$_POST['no_hp'];
            $menu=$_POST['menu'];

            $order_input=mysqli_query($koneksi,"INSERT INTO order VALUES('$id_order','$nama','$alamat','$no_hp','$menu')")or die(mysqli_error($order_input));
        
            if($order_input){
                echo '<script> alert("Pesanan anda akan segera di proses")
                window.location.href="../order.php";
                </script>';
            }else{
                echo 'Data gagal di input';
            }



        }






?>