<?php 
    $nama_customer = $_POST['customer'];
    $produk_pilihan = $_POST['produk'];
    $jumlah_beli = $_POST['jumlah'];
    
     
    switch ($produk_pilihan)
    {
      case 'tv':
        $total_belanja = $jumlah_beli * 4200000;
        break;

      case 'kulkas':
        $total_belanja = $jumlah_beli * 3100000;
        break;

      case 'mesin cuci':
        $total_belanja = $jumlah_beli * 3800000;
        break;
    }
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <table class="table table-bordered text-uppercase">
            <tr class="table-primary">
                <th>Nama Customer</th>
                <th>Produk</th>
                <th>Jumlah Barang</th>
                <th>Total Harga</th>
                <th>Total Belanja</th>
            
            </tr>
            
            <tr>
                <td><?= $nama_customer; ?></td>
                <td><?= $produk_pilihan; ?></td>
                <td><?= $jumlah_beli; ?></td>
                <td><?=$total_belanja; ?></td>
            
            </tr>
        </table>
    </div>
</body>
</html>