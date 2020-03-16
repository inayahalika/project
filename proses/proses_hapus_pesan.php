<?php

include'../koneksi/koneksi.php';

            if(isset($_GET['id_order'])){
                $id=$_GET['id_order'];

                $hapus=mysqli_query($koneksi,"DELETE FROM pesan WHERE id_order='$id'")or die(mysqli_error($hapus));

                if($hapus){
                    echo "<script> 
                    alert('Data berhasil dihapus')
                    window.location.href='../admin/tabel_pesanan.php';
                    </script>";
                }else{
                    echo "<script> 
                    alert('Data gagal dihapus')
                    window.location.href='../admin/tabel_pesanan.php';
                    </script>";
                }
            
            }
?>