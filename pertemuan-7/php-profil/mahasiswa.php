<?php
// Array asosiatif: pasangan kunci => nilai
$mahasiswa = [
    "nama"  => "Budi Santoso",
    "nim"   => "3411221001",
    "prodi" => "Informatika",
    "ipk"   => 3.85,
    "skill" => ["HTML", "CSS", "JavaScript", "PHP"],
];

// Akses nilai dengan key
echo "Nama: " . $mahasiswa["nama"] . "<br>";   // Budi Santoso
echo "IPK: " . $mahasiswa["ipk"] . "<br><br>";    // 3.85

// Array of arrays (daftar banyak mahasiswa)
$daftar = [
    ["nama" => "Budi",  "ipk" => 3.85],
    ["nama" => "Ani",   "ipk" => 3.72],
    ["nama" => "Citra", "ipk" => 3.91],
];

echo "<strong>Daftar Mahasiswa:</strong><br>";
foreach ($daftar as $mhs) {
    echo "{$mhs['nama']} — IPK: {$mhs['ipk']}<br>";
}
?>
