<?php
$daftar = [
    ["nama" => "Budi Santoso",  "nim" => "001", "ipk" => 3.85],
    ["nama" => "Ani Rahayu",    "nim" => "002", "ipk" => 3.72],
    ["nama" => "Citra Dewi",    "nim" => "003", "ipk" => 3.91],
    ["nama" => "Dodi Pratama",  "nim" => "004", "ipk" => 2.95],
    ["nama" => "Eka Wulandari", "nim" => "005", "ipk" => 3.55],
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 700px;
               margin: 0 auto; padding: 20px; }
        header { background: #065A82; color: white; padding: 30px;
                 border-radius: 8px; text-align: center; }
        .badge { background: #21B0A7; color: white; padding: 4px 12px;
                 border-radius: 15px; font-size: 14px; display: inline-block; }
        .badge-reguler { background: #64748b; color: white; padding: 4px 12px;
                         border-radius: 15px; font-size: 14px; display: inline-block; }
        section { background: #f4f8fa; padding: 20px; margin: 16px 0;
                  border-radius: 8px; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; background: white; border-radius: 4px; overflow: hidden; }
        th, td { padding: 12px; text-align: left; border-bottom: 1px solid #e2e8f0; }
        th { background-color: #065A82; color: white; }
        tr:hover { background-color: #edf5f8; }
    </style>
</head>
<body>

<header>
    <h1>Daftar Mahasiswa</h1>
    <p>Sistem Informasi Akademik • Universitas Untirta</p>
</header>

<section>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>IPK</th>
            <th>Status</th>
        </tr>
        <?php foreach ($daftar as $i => $mhs): ?>
        <tr>
            <td><?= $i + 1 ?></td>
            <td><strong><?= $mhs['nama'] ?></strong></td>
            <td><?= $mhs['nim'] ?></td>
            <td><?= number_format($mhs['ipk'], 2) ?></td>
            <td>
                <?php if ($mhs['ipk'] >= 3.75): ?>
                    <span class="badge">Cumlaude 🌟</span>
                <?php else: ?>
                    <span class="badge-reguler">Reguler</span>
                <?php endif; ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</section>

</body>
</html>
