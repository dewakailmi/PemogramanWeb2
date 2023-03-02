<?php 
$mahasiswa1 = [
    'id'=>'1',
    'NIM'=>01121201,
    'UTS'=>98,
    'UAS'=>90,
    'TUGAS'=>85
];
$mahasiswa2 = [
    'id'=>'2',
    'NIM'=>01141232,
    'UTS'=>80,
    'UAS'=>83,
    'TUGAS'=>85
];
$mahasiswa3 = [
    'id'=>'3',
    'NIM'=>01151236,
    'UTS'=>83,
    'UAS'=>70,
    'TUGAS'=>70
];

$ar_nilai = [$mahasiswa1, $mahasiswa2, $mahasiswa3]
?>

<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css
    ">
    <title>Tugas 1</title>
</head>
<body>
    <div class="container">
        <h2>Data Mahasiswa</h2>
        <table class="table table-hover">
            <tr>
                <th>NO</th>
                <th>NIM</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>TUGAS</th>
            </tr>
            <?php foreach($ar_nilai as $nilai){ ?>
            <tr>
                <td><?= $nilai['id'];?></td>
                <td><?= $nilai['NIM'];?></td>
                <td><?= $nilai['UTS'];?></td>
                <td><?= $nilai['UAS'];?></td>
                <td><?= $nilai['TUGAS'];?></td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>