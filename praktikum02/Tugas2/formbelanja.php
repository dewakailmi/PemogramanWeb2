<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja Online</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
<form action="formbelanja.php" method="POST">
  <h4>Sistem Penilaian<h4>
  <h2>Belanja Online</h2>
<aside style="float: left; width: 60%;">
  <form action="formbelanja.php" method="POST"> 
    <div class="form-group row">
      <label for="nama customer" class="col-4 col-form-label">Customer</label> 
      <div class="col-8">
        <input id="customer" name="customer" placeholder="Nama Customer" type="text" required="required" class="form-control">
      </div>
    </div>
   <div class="form-group row">
      <label class="col-4">Pilih Produk</label> 
      <div class="col-8">
        <div class="custom-control custom-radio custom-control-inline">
          <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv" required="required"> 
          <label for="produk_0" class="custom-control-label">TV</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas" required="required"> 
          <label for="produk_1" class="custom-control-label">Kulkas</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin cuci" required="required"> 
          <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
      <div class="col-8">
        <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" required="required" class="form-control">
      </div>
    </div> 
    <div class="form-group row">
      <div class="offset-4 col-8">
        <button name = "submit" type = "submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
</aside>
  <aside style="float: right;width: 30%;">
    <table class="table">
     <thead style="background-color: blue;color: #fff;padding-right: 25px;display: bold; ">
       <tr>
          <th>DAFTAR HARGA</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>TV : Rp. 4.200.000</td>
        </tr>
        <tr>
          <td>Kulkas : Rp. 3.100.000</td>
        </tr>
        <tr>
          <td>Mesin Cuci : Rp. 3.800.000</td>
        </tr>
      </tbody>
      <tfoot style="background-color: blue;color: #fff;font-weight: bold;">
        <tr>
          <td>HARGA DAPAT BERUBAH SETIAP SAAT</td>
        </tr>
      </tfoot>
    </table>
  </aside>
</div>
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
  <div class="container">
        <table class="table table-bordered text-uppercase">
            <tr class="table-primary">
                <th>Nama Customer</th>
                <th>Produk</th>
                <th>Jumlah Barang</th>
                <th>Total Harga</th>
            </tr>
            
            <tr>
                <td><?= $nama_customer; ?></td>
                <td><?= $produk_pilihan; ?></td>
                <td><?= $jumlah_beli; ?></td>
                <td><?= "Rp " . number_format($total_belanja, 2, ',','.');?></td>
              
            </tr>
        </table>
    </div>