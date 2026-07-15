<?php
// Variabel
$nama   = "Budi Santoso";
$nim    = "3411221001";
$ipk    = 3.85;
$aktif  = true;
$skill  = ["HTML", "CSS", "JavaScript", "PHP"];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan - <?= $nama ?></title>
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
    </style>
</head>
<body>

<header>
    <h1>Halo, <?= $nama ?>!</h1>
    <p>NIM: <?= $nim ?></p>
</header>

<section>
    <h2>Informasi Akademik</h2>
    <p><strong>IPK:</strong> <?= $ipk ?></p>
    <p>
        <strong>Status: </strong>
        <?php if ($ipk >= 3.75): ?>
            <span class="badge">Cumlaude 🌟</span>
        <?php elseif ($ipk >= 3.0): ?>
            <span class="badge" style="background: #065A82;">Sangat Memuaskan</span>
        <?php else: ?>
            <span class="badge" style="background: #64748b;">Memuaskan</span>
        <?php endif; ?>
    </p>
</section>

<section>
    <h2>Daftar Keahlian</h2>
    <?php foreach ($skill as $item): ?>
        <span class="skill-tag"><?= $item ?></span>
    <?php endforeach; ?>
</section>

</body>
</html>
