
      const profileToggle = document.getElementById("profileToggle");
      const profileDropdown = document.getElementById("profileDropdown");

      // Profil ikonuna tıklayınca aç/kapat
      profileToggle.addEventListener("click", (e) => {
        e.preventDefault();
        profileDropdown.classList.toggle("active");
      });

      // Dışarı tıklanınca kapat
      document.addEventListener("click", (e) => {
        if (
          !profileToggle.contains(e.target) &&
          !profileDropdown.contains(e.target)
        ) {
          profileDropdown.classList.remove("active");
        }
      });

      const cartToggle = document.getElementById("cartToggle");
      const cartSidebar = document.getElementById("cartSidebar");

      cartToggle.addEventListener("click", (e) => {
        e.preventDefault();
        cartSidebar.classList.toggle("active");
      });

      document.addEventListener("click", (e) => {
        if (!cartSidebar.contains(e.target) && !cartToggle.contains(e.target)) {
          cartSidebar.classList.remove("active");
        }
      });

      document.addEventListener("DOMContentLoaded", function () {
        const cartItems = document.querySelectorAll(".cart-item");

        cartItems.forEach((item) => {
          const minusBtn = item.querySelector(".btn-minus");
          const plusBtn = item.querySelector(".btn-plus");
          const numberEl = item.querySelector(".adet-sayi");

          let count = parseInt(numberEl.textContent);

          minusBtn.addEventListener("click", () => {
            if (count > 1) {
              count--;
              numberEl.textContent = count;
            }
          });

          plusBtn.addEventListener("click", () => {
            count++;
            numberEl.textContent = count;
          });
        });
      });

      const menuToggle = document.getElementById("menuToggle");
      const sideMenu = document.getElementById("sideMenu");
      const closeMenu = document.querySelector(".close-menu");

      menuToggle.addEventListener("click", (e) => {
        e.preventDefault();
        e.stopPropagation(); // dış tıklama olayını engelle
        sideMenu.classList.toggle("active"); // toggle = aç/kapat
      });

      closeMenu.addEventListener("click", (e) => {
        e.preventDefault();
        sideMenu.classList.remove("active");
      });

      document.addEventListener("click", (e) => {
        if (
          sideMenu.classList.contains("active") && // menü açık mı?
          !sideMenu.contains(e.target) && // menü içine tıklanmadı mı?
          e.target !== menuToggle // ikonun kendisine tıklanmadı mı?
        ) {
          sideMenu.classList.remove("active");
        }
      });