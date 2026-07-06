// Pilih elemen tombol toggle dan tag body
const btnToggle = document.querySelector("#btnToggle");
const body = document.body;

// Variabel hitung klik untuk console log (Bonus Modul)
let hitungan = 0;

// Cek status penyimpanan localStorage saat halaman baru dimuat
if (localStorage.getItem("darkMode") === "true") {
    body.classList.add("dark");
    btnToggle.textContent = "☀️ Light Mode";
}

// Event handler saat tombol ditekan
btnToggle.addEventListener("click", () => {
    // Toggle class 'dark' pada <body>
    body.classList.toggle("dark");
    
    // Simpan keadaan terkini ke localStorage
    const isDark = body.classList.contains("dark");
    localStorage.setItem("darkMode", isDark);
    
    // Ubah text tombol berdasarkan status keaktifan kelas dark
    if (isDark) {
        btnToggle.textContent = "☀️ Light Mode";
    } else {
        btnToggle.textContent = "🌙 Dark Mode";
    }
    
    // Hitung penambahan klik untuk log debug konsol
    hitungan++;
    console.log(`Mode diganti ${hitungan} kali`);
});

// Fetch API = Fakta Kucing
const isiFakta = document.querySelector("#isi-fakta");
const btnRefresh = document.querySelector("#btnRefresh");

async function ambilFakta() {
    isiFakta.textContent = "⏳ Memuat fakta...";
    try {
        const response = await fetch("https://catfact.ninja/fact");
        
        if (!response.ok) {
            throw new Error("HTTP Error: " + response.status);
        }
        
        const data = await response.json();
        isiFakta.textContent = `"${data.fact}"`; 
        
    } catch (error) {
        isiFakta.textContent = "⚠️ Gagal memuat fakta. Cek koneksi internet Anda.";
        console.error("Error:", error.message);
    }
}

// Jalankan otomatis saat halaman dibuka pertama kali
ambilFakta();

// Jalankan ulang saat tombol diklik
btnRefresh.addEventListener("click", ambilFakta);