// Wrap everything in a single DOMContentLoaded listener for reliability
document.addEventListener("DOMContentLoaded", () => {
  // Navbar Scroll Effect
  const handleNavbarScroll = () => {
    const navbar = document.querySelector(".navbar");
    if (navbar) {
      if (window.scrollY > 50) {
        navbar.classList.add("scrolled");
      } else {
        navbar.classList.remove("scrolled");
      }
    }
  };
  window.addEventListener("scroll", handleNavbarScroll);
  handleNavbarScroll();

  // Active Link Highlighting (Static Version)
  const currentPath = window.location.pathname.split("/").pop() || "index.html";
  const allNavLinks = document.querySelectorAll(".nav-links a");
  allNavLinks.forEach(link => {
    const linkPath = link.getAttribute("href");
    if (linkPath === currentPath) {
      link.classList.add("active");
    } else {
      link.classList.remove("active");
    }
  });

  // Scroll Reveal Animation
  const revealElements = document.querySelectorAll(
    ".reveal, .reveal-left, .reveal-right",
  );
  const revealOnScroll = () => {
    const triggerBottom = window.innerHeight * 0.85;
    revealElements.forEach((el) => {
      const elTop = el.getBoundingClientRect().top;
      if (elTop < triggerBottom) {
        el.classList.add("active");
      }
    });
  };
  window.addEventListener("scroll", revealOnScroll);
  revealOnScroll();

  // Stats Counter Animation
  const stats = document.querySelectorAll(".stat-number");
  let statsAnimated = false;
  const animateStats = () => {
    if (statsAnimated) return;
    const statsContainer = document.querySelector(".stats-container");
    if (!statsContainer) return;
    const triggerBottom = window.innerHeight * 0.9;
    const containerTop = statsContainer.getBoundingClientRect().top;
    if (containerTop < triggerBottom) {
      stats.forEach((stat) => {
        const target = +stat.getAttribute("data-target");
        const increment = target / 50;
        let current = 0;
        const updateCount = () => {
          if (current < target) {
            current += increment;
            stat.innerText = Math.ceil(current);
            setTimeout(updateCount, 20);
          } else {
            stat.innerText = target;
          }
        };
        updateCount();
      });
      statsAnimated = true;
    }
  };
  window.addEventListener("scroll", animateStats);
  animateStats();

  // Hero Slider Logic
  const slides = document.querySelectorAll(".slide");
  const dots = document.querySelectorAll(".dot");
  const prevBtn = document.querySelector(".prev-btn");
  const nextBtn = document.querySelector(".next-btn");

  if (slides.length > 0) {
    let currentSlide = 0;
    let sliderInterval;

    const showSlide = (index) => {
      slides.forEach((slide) => slide.classList.remove("active"));
      dots.forEach((dot) => dot.classList.remove("active"));

      currentSlide = (index + slides.length) % slides.length;

      slides[currentSlide].classList.add("active");
      dots[currentSlide].classList.add("active");
    };

    const nextSlide = () => {
      showSlide(currentSlide + 1);
    };

    const prevSlide = () => {
      showSlide(currentSlide - 1);
    };

    // Auto Play
    sliderInterval = setInterval(nextSlide, 5000);

    // Event Listeners with Null Checks
    if (nextBtn) {
      nextBtn.addEventListener("click", (e) => {
        e.preventDefault();
        nextSlide();
        clearInterval(sliderInterval);
        sliderInterval = setInterval(nextSlide, 5000);
      });
    }

    if (prevBtn) {
      prevBtn.addEventListener("click", (e) => {
        e.preventDefault();
        prevSlide();
        clearInterval(sliderInterval);
        sliderInterval = setInterval(nextSlide, 5000);
      });
    }

    dots.forEach((dot, index) => {
      dot.addEventListener("click", () => {
        showSlide(index);
        clearInterval(sliderInterval);
        sliderInterval = setInterval(nextSlide, 5000);
      });
    });
  }

  // Gallery Filtering Logic
  const filterBtns = document.querySelectorAll(".gallery-filter-btn");
  const galleryItems = document.querySelectorAll(".gallery-item");

  if (filterBtns.length > 0 && galleryItems.length > 0) {
    filterBtns.forEach((btn) => {
      btn.addEventListener("click", () => {
        // Remove active class from all buttons
        filterBtns.forEach((b) => {
          b.classList.remove("active");
          b.style.background = "transparent";
          b.style.color = "var(--primary-color)";
        });

        // Add active class to clicked button
        btn.classList.add("active");
        btn.style.background = "var(--primary-color)";
        btn.style.color = "#000";

        const filterValue = btn.getAttribute("data-filter");

        galleryItems.forEach((item) => {
          // Reset transitions to avoid conflicts
          item.style.transition = "all 0.5s ease-in-out";

          if (filterValue === "all" || item.classList.contains(filterValue)) {
            item.style.display = "block";
            // Force a reflow to ensure the transition works
            item.offsetHeight;
            item.style.opacity = "1";
            item.style.transform = "scale(1)";
          } else {
            item.style.opacity = "0";
            item.style.transform = "scale(0.8)";
            // Wait for transition before hiding
            setTimeout(() => {
              if (
                !item.classList.contains(filterValue) &&
                filterValue !== "all"
              ) {
                item.style.display = "none";
              }
            }, 500);
          }
        });
      });
    });
  }

  // Mobile Menu Toggle Logic
  const menuToggle = document.getElementById("mobile-menu");
  const navContainer = document.querySelector(".nav-container");
  const navLinks = document.querySelectorAll(".nav-links a");

  if (menuToggle && navContainer) {
    const toggleMenu = (show) => {
      menuToggle.classList.toggle("active", show);
      navContainer.classList.toggle("active", show);
      document.body.style.overflow = show ? "hidden" : "initial";
    };

    menuToggle.addEventListener("click", (e) => {
      e.stopPropagation();
      const isActive = navContainer.classList.contains("active");
      toggleMenu(!isActive);
    });

    // Close menu when a link is clicked
    navLinks.forEach((link) => {
      link.addEventListener("click", () => toggleMenu(false));
    });

    // Close when clicking outside
    document.addEventListener("click", (e) => {
      if (
        navContainer.classList.contains("active") &&
        !navContainer.contains(e.target) &&
        !menuToggle.contains(e.target)
      ) {
        toggleMenu(false);
      }
    });

    // Close on ESC key
    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape") toggleMenu(false);
    });
  }

  // Static Form Handlers
  const newsletterForms = document.querySelectorAll('.newsletter-form');
  newsletterForms.forEach(form => {
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      const container = form.parentElement;
      form.style.opacity = '0.5';
      form.style.pointerEvents = 'none';
      setTimeout(() => {
        container.innerHTML = `
          <h3 style="color: #fff; font-size: 18px; margin-top: 0; margin-bottom: 20px; text-transform: uppercase; letter-spacing: 1px;">Newsletter</h3>
          <p style="margin: 0 0 15px 0; font-size: 14px; line-height: 1.6; color: var(--primary-color); font-weight: bold;">
            <i class="fas fa-check-circle"></i> WELCOME TO THE ELITE LIST!
          </p>
          <p style="font-size: 13px; color: #b0b0b0;">Check your inbox for your exclusive welcome guide.</p>
        `;
      }, 800);
    });
  });

  const trialForm = document.querySelector('form[action="process-form.php"]');
  if (trialForm) {
    trialForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const container = trialForm.parentElement;
      trialForm.style.opacity = '0.5';
      trialForm.style.pointerEvents = 'none';
      setTimeout(() => {
        container.innerHTML = `
          <div class="card glass text-center" style="padding: 60px; border-radius: 40px; border-color: var(--primary-color);">
            <i class="fas fa-check-circle text-neon" style="font-size: 4rem; margin-bottom: 20px;"></i>
            <h2 class="text-neon" style="margin-bottom: 20px;">REQUEST RECEIVED!</h2>
            <p style="font-size: 1.2rem; color: white !important;">Thank you for reaching out. One of our master coaches will contact you within the next 24 hours to schedule your transformation session.</p>
            <a href="index.html" class="btn btn-outline" style="margin-top: 30px; border-radius: 50px;">Return Home</a>
          </div>
        `;
      }, 1000);
    });
  }
});
