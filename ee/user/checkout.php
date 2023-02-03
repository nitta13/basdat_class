<?php
session_start();
require '../koneksi.php';
require 'item.php';

// Simpan Pesanan Baru ke dalam table
$simpan = 'insert into orders (name, data_create, status, username) values ("New Orders","'.date('Y-m-d').'", 0, "acc 2")';

// konekkan
mysqli_query($koneksi,$simpan);

// orders id ( fungsi tak membuat masing masing id)
$id_orders = mysqli_insert_id($koneksi);

// Set keranjang sebagai array, serialize mengubah string menjadi arrai
$keranjang = unserialize(serialize($_SESSION['keranjang']));

for ($barang = 0; $barang<count($keranjang); $barang++){
    $detail = 'insert into orders_detail (id_product, id_order, price, qty) values ('.$keranjang[$barang]->id_buku.', '.$id_orders.', '.$keranjang[$barang]->harga.', '.$keranjang[$barang]->qty.' )';

    mysqli_query($koneksi, $detail);
}

// Menghapus semua produk yang ada di keranjang setelah di chechout
unset($_SESSION['keranjang']);
?>

<!-- Arahkan untuk ke index lagi -->
<html>
    <head>
        <title>Checkout Barang</title>
    </head>
    <body>
        <p>
            Thanks for buying products, Click
            <a href="index.php">here</a> to continue purchasing products
        </p>
    </body>
</html>
<!-- Arahkan untuk ke index lagi -->