document.addEventListener("scroll", function () {
    var navbar = document.querySelector(".navbar");
    if (window.scrollY > 0) {
        navbar.style.background = "white";
        navbar.style.boxShadow = "0 4px 6px rgba(0, 0, 0, 0.1)";
    } else {
        navbar.style.background = "transparent";
        navbar.style.boxShadow = "none";
    }
});

var selectElement = document.getElementById("subject");

  // Menambahkan event listener untuk mengubah warna teks placeholder
  selectElement.addEventListener("focus", function () {
    this.style.color = "#000"; // Ganti warna teks saat select mendapat fokus
  });

  selectElement.addEventListener("blur", function () {
    if (this.value === "") {
      this.style.color = "#00000040"; // Kembali ke warna abu-abu jika tidak ada yang dipilih
    }
  });

  // Mengambil elemen input dan elemen untuk menampilkan pesan
  var fileInput = document.getElementById("file-upload");
  var selectedFile = document.getElementById("selected-file");

  // Menambahkan event listener untuk mengupdate pesan saat ada perubahan pada input file
  fileInput.addEventListener("change", function () {
    if (fileInput.files.length > 0) {
      selectedFile.textContent = fileInput.files[0].name;
      selectedFile.style.color = "#000"
    } else {
      selectedFile.textContent = "Maximum total file size: 10MB";
    }
  });