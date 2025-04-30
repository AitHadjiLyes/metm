document.addEventListener("DOMContentLoaded", () => {
  // Mobile menu functionality
  const menuToggle = document.getElementById("menu-toggle");
  const mobileMenu = document.getElementById("mobile-menu");
  const menuOverlay = document.getElementById("menu-overlay");
  const menuClose = document.getElementById("menu-close");
  const body = document.body;

  if (menuToggle && mobileMenu && menuOverlay && menuClose) {
    console.log("Menu mobile détecté");

    // Create spans for hamburger icon if they don't exist
    if (menuToggle.children.length === 0) {
      for (let i = 0; i < 3; i++) {
        const span = document.createElement("span");
        menuToggle.appendChild(span);
      }
    }

    menuToggle.addEventListener("click", () => {
      console.log("Clic sur le menu hamburger");
      mobileMenu.classList.toggle("-translate-x-full");
      menuOverlay.classList.toggle("hidden");
      body.classList.toggle("menu-open"); // Prevent scrolling when menu is open
    });

    // Close menu when clicking the close button
    menuClose.addEventListener("click", () => {
      mobileMenu.classList.add("-translate-x-full");
      menuOverlay.classList.add("hidden");
      body.classList.remove("menu-open");
    });

    // Close menu when clicking outside
    menuOverlay.addEventListener("click", () => {
      mobileMenu.classList.add("-translate-x-full");
      menuOverlay.classList.add("hidden");
      body.classList.remove("menu-open");
    });
  } else {
    console.log("menu-toggle, mobile-menu, menu-overlay ou menu-close manquant");
  }

  // Services dropdown functionality - Desktop
  const servicesButton = document.getElementById("services-button");
  const servicesMenu = document.getElementById("services-menu");
  const chevron = document.getElementById("chevron");

  if (servicesButton && servicesMenu && chevron) {
    console.log("Services menu détecté");
    servicesButton.addEventListener("click", (e) => {
      e.preventDefault();
      const isOpen = servicesMenu.classList.contains("opacity-100");

      // Fermer si ouvert
      if (isOpen) {
        servicesMenu.classList.remove("opacity-100", "visible");
        servicesMenu.classList.add("opacity-0", "invisible");
        chevron.style.transform = "rotate(0deg)";
      } else {
        servicesMenu.classList.remove("opacity-0", "invisible");
        servicesMenu.classList.add("opacity-100", "visible");
        chevron.style.transform = "rotate(180deg)";
      }
    });
  } else {
    console.log("services-button, services-menu ou chevron manquant");
  }

  // Menu mobile - gestion du sous-menu services
  const servicesMobileButton = document.getElementById("services-mobile-button");
  const servicesMobileMenu = document.getElementById("services-mobile-menu");
  const chevronMobile = document.getElementById("chevron-mobile");

  if (servicesMobileButton && servicesMobileMenu && chevronMobile) {
    console.log("Services mobile menu détecté");
    servicesMobileButton.addEventListener("click", () => {
      const isShown = !servicesMobileMenu.classList.contains("hidden");
      if (isShown) {
        servicesMobileMenu.classList.add("hidden");
        chevronMobile.style.transform = "rotate(0deg)";
      } else {
        servicesMobileMenu.classList.remove("hidden");
        chevronMobile.style.transform = "rotate(180deg)";
      }
    });
  } else {
    console.log("services-mobile-button, services-mobile-menu ou chevron-mobile manquant");
  }

  // Fix FAQ functionality
  const initFaq = () => {
    const faqQuestions = document.querySelectorAll(".faq-question");
    if (faqQuestions.length > 0) {
      console.log("FAQ détecté, initialisation...");
      faqQuestions.forEach((question) => {
        question.addEventListener("click", () => {
          const faqItem = question.parentElement;
          const answer = question.nextElementSibling;

          // Toggle active class
          faqItem.classList.toggle("active");

          // Expand or collapse answer
          if (faqItem.classList.contains("active")) {
            answer.style.maxHeight = answer.scrollHeight + "px";
            question.setAttribute("aria-expanded", "true");
            answer.setAttribute("aria-hidden", "false");
          } else {
            answer.style.maxHeight = null;
            question.setAttribute("aria-expanded", "false");
            answer.setAttribute("aria-hidden", "true");
          }
        });
      });
      console.log("FAQ initialisé avec succès");
    }
  };

  // Initialize FAQ
  initFaq();

  // Add active state for touch feedback
  const addTouchFeedback = () => {
    const touchElements = document.querySelectorAll(
      ".btn, .navbar-link, .service-card, .testimonial-card, .faq-question, .social-icon"
    );

    touchElements.forEach((element) => {
      element.addEventListener(
        "touchstart",
        function () {
          this.classList.add("touch-active");
        },
        { passive: true }
      );

      element.addEventListener(
        "touchend",
        function () {
          this.classList.remove("touch-active");
        },
        { passive: true }
      );

      element.addEventListener(
        "touchcancel",
        function () {
          this.classList.remove("touch-active");
        },
        { passive: true }
      );
    });
  };

  addTouchFeedback();

  // Improve scroll performance
  let isScrolling = false;

  window.addEventListener(
    "scroll",
    () => {
      // Set isScrolling to true when scrolling starts
      isScrolling = true;

      // If we're not already waiting for a frame, request one
      if (!window.scrollAnimationFrame) {
        window.scrollAnimationFrame = window.requestAnimationFrame(() => {
          if (isScrolling) {
            // Add a class to the body during scroll for potential optimizations
            document.body.classList.add("is-scrolling");

            // Reset the flag
            isScrolling = false;

            // Clear the animation frame reference
            window.scrollAnimationFrame = null;

            // Remove the class after scrolling stops
            setTimeout(() => {
              document.body.classList.remove("is-scrolling");
            }, 100);
          }
        });
      }
    },
    { passive: true }
  ); // Use passive listener for better performance

  // Fix for iOS 100vh issue
  const fixIOSHeight = () => {
    const vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty("--vh", `${vh}px`);
  };

  fixIOSHeight();
  window.addEventListener("resize", fixIOSHeight);

  // Optimize images by loading them only when needed
  if ("IntersectionObserver" in window) {
    const lazyImages = document.querySelectorAll('img[loading="lazy"]');

    const imageObserver = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const img = entry.target;
          img.src = img.dataset.src || img.src;
          imageObserver.unobserve(img);
        }
      });
    });

    lazyImages.forEach((img) => {
      imageObserver.observe(img);
    });
  }

  // Smooth scroll for anchor links
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      const href = this.getAttribute("href");
      if (href !== "#") {
        e.preventDefault();
        const target = document.querySelector(href);
        if (target) {
          window.scrollTo({
            top: target.offsetTop - 60, // Adjusted for smaller header
            behavior: "smooth",
          });
        }
      }
    });
  });

  // Initialize scroll animations
  const scrollElements = document.querySelectorAll(".scroll-reveal");

  if (scrollElements.length > 0 && "IntersectionObserver" in window) {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("visible");
          }
        });
      },
      {
        threshold: 0.1,
        rootMargin: "0px 0px -50px 0px",
      }
    );

    scrollElements.forEach((el) => {
      observer.observe(el);
    });
  }
});