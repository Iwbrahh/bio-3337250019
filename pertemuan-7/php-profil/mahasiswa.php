<?php
// Array asosiatif: pasangan kunci => nilai
$mahasiswa = [
    "nama"  => "Budi Santoso",
    "nim"   => "3411221001",
    "prodi" => "Informatika",
    "ipk"   => 3.85,
    "skill" => ["HTML", "CSS", "JavaScript", "PHP"],
];

// Array of arrays (daftar banyak mahasiswa)
$daftar = [
    ["nama" => "Budi",  "ipk" => 3.85],
    ["nama" => "Ani",   "ipk" => 3.72],
    ["nama" => "Citra", "ipk" => 3.91],
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa - <?= $mahasiswa['nama'] ?></title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 700px;
               margin: 0 auto; padding: 20px; }
        header { background: #065A82; color: white; padding: 30px;
                 border-radius: 8px; text-align: center; }
        .badge { background: #21B0A7; color: white; padding: 4px 12px;
                 border-radius: 15px; font-size: 14px; display: inline-block; }
        section { background: #f4f8fa; padding: 20px; margin: 16px 0;
                  border-radius: 8px; }
        .skill-tag { background: #065A82; color: white; padding: 4px 10px;
                     border-radius: 12px; margin: 3px; display: inline-block; }
        ul { padding-left: 20px; margin-top: 10px; }
        li { margin-bottom: 8px; }
    </style>
</head>
<body>

<header>
    <h1><?= $mahasiswa['nama'] ?></h1>
    <p><?= $mahasiswa['prodi'] ?> • NIM: <?= $mahasiswa['nim'] ?></p>
</header>

<section>
    <h2>Detail Mahasiswa</h2>
    <p><strong>Nama:</strong> <?= $mahasiswa['nama'] ?></p>
    <p><strong>IPK:</strong> <?= $mahasiswa['ipk'] ?></p>
</section>

<section>
    <h2>Skill</h2>
    <?php foreach ($mahasiswa['skill'] as $skill): ?>
        <span class="skill-tag"><?= $skill ?></span>
    <?php endforeach; ?>
</section>

<section>
    <h2>Daftar Mahasiswa</h2>
    <ul>
        <?php foreach ($daftar as $mhs): ?>
            <li><strong><?= $mhs['nama'] ?></strong> — IPK: <?= number_format($mhs['ipk'], 2) ?></li>
        <?php endforeach; ?>
    </ul>
</section>

</body>
</html>
