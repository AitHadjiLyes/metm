document.addEventListener("DOMContentLoaded", () => {
  // Mobile menu functionality
  const menuToggle = document.getElementById("menu-toggle")
  const mobileMenu = document.getElementById("mobile-menu")
  const body = document.body

  if (menuToggle && mobileMenu) {
    console.log("Menu mobile détecté")

    menuToggle.addEventListener("click", () => {
      console.log("Clic sur le menu hamburger")
      mobileMenu.classList.toggle("-translate-x-full")
      body.classList.toggle("menu-open")
    })

    // Handle submenu toggles
    const submenuToggles = mobileMenu.querySelectorAll('.mobile-submenu-toggle');
    submenuToggles.forEach(toggle => {
      toggle.addEventListener('click', (e) => {
        const submenu = toggle.nextElementSibling;
        const chevron = toggle.querySelector('i');
        submenu.classList.toggle('hidden');
        chevron.style.transform = submenu.classList.contains('hidden') ? 'rotate(0deg)' : 'rotate(180deg)';
      });
    });

    // Close menu when clicking a link
    mobileMenu.addEventListener("click", (e) => {
      if (e.target.tagName === 'A') {
        mobileMenu.classList.add("-translate-x-full")
        body.classList.remove("menu-open")
      }
    })
  } else {
    console.log("menu-toggle ou mobile-menu manquant")
  }

  // Services dropdown functionality - Desktop
  const servicesButton = document.getElementById("services-button")
  const servicesMenu = document.getElementById("services-menu")
  const chevron = document.getElementById("chevron")

  if (servicesButton && servicesMenu && chevron) {
    console.log("Services menu détecté")
    // Make sure the menu is clickable
    servicesMenu.classList.add("pointer-events-auto")

    // Improve click handling
    servicesButton.addEventListener("click", (e) => {
      e.preventDefault()
      e.stopPropagation()

      const isOpen = servicesMenu.classList.contains("opacity-100")

      if (isOpen) {
        servicesMenu.classList.remove("opacity-100", "visible")
        servicesMenu.classList.add("opacity-0", "invisible")
        if (chevron) chevron.style.transform = "rotate(0deg)"
      } else {
        servicesMenu.classList.remove("opacity-0", "invisible")
        servicesMenu.classList.add("opacity-100", "visible")
        if (chevron) chevron.style.transform = "rotate(180deg)"
      }
    })

    // Close menu when clicking outside
    document.addEventListener("click", (e) => {
      if (!servicesButton.contains(e.target) && !servicesMenu.contains(e.target)) {
        servicesMenu.classList.remove("opacity-100", "visible")
        servicesMenu.classList.add("opacity-0", "invisible")
        if (chevron) chevron.style.transform = "rotate(0deg)"
      }
    })
  } else {
    console.log("services-button, services-menu ou chevron manquant")
  }

  // Menu mobile - gestion du sous-menu services
  const servicesMobileButton = document.getElementById("services-mobile-button")
  const servicesMobileMenu = document.getElementById("services-mobile-menu")
  const chevronMobile = document.getElementById("chevron-mobile")

  if (servicesMobileButton && servicesMobileMenu && chevronMobile) {
    console.log("Services mobile menu détecté")
    servicesMobileButton.addEventListener("click", () => {
      const isShown = !servicesMobileMenu.classList.contains("hidden")
      if (isShown) {
        servicesMobileMenu.classList.add("hidden")
        chevronMobile.style.transform = "rotate(0deg)"
      } else {
        servicesMobileMenu.classList.remove("hidden")
        chevronMobile.style.transform = "rotate(180deg)"
      }
    })
  } else {
    console.log("services-mobile-button, services-mobile-menu ou chevron-mobile manquant")
  }

  // Fix FAQ functionality
  const initFaq = () => {
    const faqQuestions = document.querySelectorAll(".faq-question")
    if (faqQuestions.length > 0) {
      console.log("FAQ détecté, initialisation...")
      faqQuestions.forEach((question) => {
        question.addEventListener("click", () => {
          const faqItem = question.parentElement
          const answer = question.nextElementSibling

          // Toggle active class
          faqItem.classList.toggle("active")

          // Expand or collapse answer
          if (faqItem.classList.contains("active")) {
            answer.style.maxHeight = answer.scrollHeight + "px"
          } else {
            answer.style.maxHeight = null
          }
        })
      })
      console.log("FAQ initialisé avec succès")
    }
  }

  // Initialize FAQ
  initFaq()

  // Add active state for touch feedback
  const addTouchFeedback = () => {
    const touchElements = document.querySelectorAll(
      ".btn, .navbar-link, .service-card, .testimonial-card, .faq-question, .social-icon",
    )

    touchElements.forEach((element) => {
      element.addEventListener(
        "touchstart",
        function () {
          this.classList.add("touch-active")
        },
        { passive: true },
      )

      element.addEventListener(
        "touchend",
        function () {
          this.classList.remove("touch-active")
        },
        { passive: true },
      )

      element.addEventListener(
        "touchcancel",
        function () {
          this.classList.remove("touch-active")
        },
        { passive: true },
      )
    })
  }

  addTouchFeedback()

  // Improve scroll performance
  let isScrolling = false

  window.addEventListener(
    "scroll",
    () => {
      // Set isScrolling to true when scrolling starts
      isScrolling = true

      // If we're not already waiting for a frame, request one
      if (!window.scrollAnimationFrame) {
        window.scrollAnimationFrame = window.requestAnimationFrame(() => {
          if (isScrolling) {
            // Add a class to the body during scroll for potential optimizations
            document.body.classList.add("is-scrolling")

            // Reset the flag
            isScrolling = false

            // Clear the animation frame reference
            window.scrollAnimationFrame = null

            // Remove the class after scrolling stops
            setTimeout(() => {
              document.body.classList.remove("is-scrolling")
            }, 100)
          }
        })
      }
    },
    { passive: true },
  ) // Use passive listener for better performance

  // Fix for iOS 100vh issue
  const fixIOSHeight = () => {
    const vh = window.innerHeight * 0.01
    document.documentElement.style.setProperty("--vh", `${vh}px`)

    // Apply to hero section specifically
    const heroSection = document.querySelector(".hero-image")
    if (heroSection) {
      heroSection.style.height = `calc(100 * var(--vh))`
    }
  }

  fixIOSHeight()
  window.addEventListener("resize", fixIOSHeight)
  window.addEventListener("orientationchange", fixIOSHeight)

  // Optimize images by loading them only when needed
  if ("IntersectionObserver" in window) {
    const lazyImages = document.querySelectorAll('img[loading="lazy"]')

    const imageObserver = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const img = entry.target
          img.src = img.dataset.src || img.src
          imageObserver.unobserve(img)
        }
      })
    })

    lazyImages.forEach((img) => {
      imageObserver.observe(img)
    })
  }

  // Smooth scroll for anchor links
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      const href = this.getAttribute("href")
      if (href !== "#") {
        e.preventDefault()
        const target = document.querySelector(href)
        if (target) {
          window.scrollTo({
            top: target.offsetTop - 60, // Adjusted for smaller header
            behavior: "smooth",
          })
        }
      }
    })
  })

  // Initialize scroll animations
  const scrollElements = document.querySelectorAll(".scroll-reveal")

  if (scrollElements.length > 0 && "IntersectionObserver" in window) {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("visible")
          }
        })
      },
      {
        threshold: 0.1,
        rootMargin: "0px 0px -50px 0px",
      },
    )

    scrollElements.forEach((el) => {
      observer.observe(el)
    })
  }
})

document.addEventListener("DOMContentLoaded", () => {
  const menuButtons = document.querySelectorAll(".navbar-link + button");
  menuButtons.forEach((button) => {
      button.addEventListener("click", (e) => {
          e.preventDefault();
          const submenu = button.nextElementSibling;
          submenu.classList.toggle("hidden");
      });
  });
});