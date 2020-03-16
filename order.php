<?php
    include 'header.php';
?>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <form action="proses/proses_order.php"  method="post" >
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control col-sm-6" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="harga">Alamat</label>
                        <input type="text-box" class="form-control col-sm-6" name="alamat">
                    </div>
                    <div class="form-group">
                        <label for="stok">No.HP</label>
                        <input type="number" class="form-control col-sm-6" name="no_hp">
                    </div> 
                    <div class="form-group">
                        <label for="kategori">Menu</label>
                        <input type="text" class="form-control col-sm-6" name="menu">
                    </div>
                        <input type="submit" class="btn btn-primary" name="order" value="order">
                </form>
            </div>
        </div>
    </div>