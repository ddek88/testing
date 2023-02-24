
 var judul = "{{$posts->judul}}"; // Ambil judul dari variabel PHP $posts->judul
var kata = judul.split(' '); // Pisahkan judul menjadi array kata-kata
var judulBaru = ''; // Inisialisasi judul baru

// Loop melalui setiap kata dan tambahkan tag "br" setiap 3 kata
for (var i = 0; i < kata.length; i++) {
  if ((i+1) % 3 === 0) {
    judulBaru += kata[i] + '<br>';
  } else {
    judulBaru += kata[i] + ' ';
  }
}

// Masukkan judul baru ke dalam elemen dengan ID "judul"
document.getElementById("judul").innerHTML = judulBaru;
