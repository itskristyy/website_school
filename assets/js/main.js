document.addEventListener("DOMContentLoaded", function () {
  // ---------------------------------------------------------
  // 1. Navbar dikasih bayangan pas halaman di-scroll ke bawah
  //    (biar keliatan "ngambang" di atas konten)
  // ---------------------------------------------------------
  const navbar = document.querySelector(".navbar");

  window.addEventListener("scroll", function () {
    if (window.scrollY > 10) {
      navbar.classList.add("shadow-sm");
    } else {
      navbar.classList.remove("shadow-sm");
    }
  });

  // ---------------------------------------------------------
  // 2. Tutup menu mobile (hamburger) otomatis begitu salah
  //    satu link menu diklik. Tanpa ini, menu tetap kebuka
  //    walau usernya udah pindah section.
  // ---------------------------------------------------------
  const navLinks = document.querySelectorAll(".navbar-nav .nav-link");
  const navbarCollapseEl = document.getElementById("navbarMain");
  const navbarCollapse = bootstrap.Collapse.getOrCreateInstance(
    navbarCollapseEl,
    { toggle: false },
  );

  navLinks.forEach(function (link) {
    link.addEventListener("click", function () {
      if (navbarCollapseEl.classList.contains("show")) {
        navbarCollapse.hide();
      }
    });
  });

  // ---------------------------------------------------------
  // 3. Validasi form Buku Tamu pakai gaya bawaan Bootstrap
  //    (class "needs-validation" + "was-validated").
  //    Ini pola standar Bootstrap, sering dites di ujian.
  // ---------------------------------------------------------
  const guestbookForm = document.getElementById("guestbookForm");

  if (guestbookForm) {
    guestbookForm.addEventListener("submit", function (event) {
      if (!guestbookForm.checkValidity()) {
        event.preventDefault(); // jangan submit dulu kalau ada yang belum valid
        event.stopPropagation();
      }
      guestbookForm.classList.add("was-validated");
    });
  }

  // ---------------------------------------------------------
  // 4. Tahun di footer otomatis ikut tahun sekarang,
  //    jadi gak perlu diubah manual tiap tahun baru.
  // ---------------------------------------------------------
  const yearEl = document.getElementById("currentYear");
  if (yearEl) {
    yearEl.textContent = new Date().getFullYear();
  }
});
