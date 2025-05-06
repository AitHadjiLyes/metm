/**
 * Point d'entrée JavaScript principal
 */
import { FormValidator } from "./components/form.js"
import { FaqAccordion } from "./components/faq.js"
import { ScrollAnimations } from "./components/animations.js"
import ImageHandler from "./image-handler.js"

// Initialiser les composants lorsque le DOM est chargé
document.addEventListener("DOMContentLoaded", () => {
  console.log("DOM chargé, initialisation des composants...")

  const menuButtons = document.querySelectorAll(".navbar-link + button");
  menuButtons.forEach((button) => {
      button.addEventListener("click", (e) => {
          e.preventDefault();
          const submenu = button.nextElementSibling;
          submenu.classList.toggle("hidden");
      });
  });
  console.log("Menu toggle script ajouté.");
  // Initialiser les animations au défilement
  ScrollAnimations.init()
  console.log("Animations initialisées")

  // Initialiser le gestionnaire d'images
  ImageHandler.init()
  console.log("Gestionnaire d'images initialisé")

  // Initialiser l'accordéon FAQ si présent
  if (document.querySelector(".faq-item")) {
    FaqAccordion.init()
    console.log("FAQ initialisée")
  }

  // Initialiser la validation du formulaire si présent
  if (document.getElementById("contactForm")) {
    FormValidator.init("contactForm")
    console.log("Formulaire initialisé")
  }

  // Initialiser le toggle du menu mobile
  const menuToggle = document.getElementById("menu-toggle")
  const menu = document.getElementById("menu")

  if (menuToggle && menu) {
    menuToggle.addEventListener("click", () => {
      // Remplacer le toggle de la classe 'hidden' par un toggle de style display
      if (menu.style.display === "none" || window.getComputedStyle(menu).display === "none") {
        menu.style.display = "flex"
      } else {
        menu.style.display = "none"
      }
    })
    console.log("Menu mobile initialisé")
  }

  // Initialize the light animation directly
  initLightAnimation()
  console.log("Animation de lumière initialisée")

  // Re-initialize animations when page is fully loaded (for images)
  window.addEventListener("load", () => {
    ScrollAnimations.init()
  })
})

// Fallback pour s'assurer que les animations sont initialisées même si l'événement DOMContentLoaded a déjà été déclenché
if (document.readyState === "complete" || document.readyState === "interactive") {
  setTimeout(() => {
    console.log("Initialisation différée des animations...")
    ScrollAnimations.init()
    ImageHandler.init()

    // Also initialize light animation in the fallback
    initLightAnimation()
  }, 1)
}

/**
 * Scrolling Light Animation
 * Creates an elegant ball of light that follows an irregular path as the user scrolls
 */
function initLightAnimation() {
  // Create the light element
  const light = document.createElement("div")
  light.className = "scrolling-light"

  // Apply initial styles
  Object.assign(light.style, {
    position: "fixed",
    pointerEvents: "none",
    width: "15px",
    height: "15px",
    borderRadius: "50%",
    background: "rgba(30, 64, 175, 0.8)", // Primary blue color
    boxShadow: "0 0 30px rgba(30, 64, 175, 0.8)",
    opacity: "0.7",
    zIndex: "5",
    transition: "opacity 0.3s ease",
    willChange: "transform, opacity, width, height",
    filter: "blur(2px)",
    mixBlendMode: "screen",
  })

  document.body.appendChild(light)

  // Animation variables
  let scrollY = window.scrollY
  let lastScrollY = scrollY
  let scrollDirection = 0
  let scrollSpeed = 0
  let scrollTimeout = null
  const pathSeed = Math.random() * 10000
  let windowHeight = window.innerHeight
  let windowWidth = window.innerWidth
  let documentHeight = Math.max(
    document.body.scrollHeight,
    document.body.offsetHeight,
    document.documentElement.clientHeight,
    document.documentElement.scrollHeight,
    document.documentElement.offsetHeight,
  )
  let isMobile = window.innerWidth < 768

  // Handle scroll events
  window.addEventListener(
    "scroll",
    () => {
      lastScrollY = scrollY
      scrollY = window.scrollY
      scrollDirection = scrollY > lastScrollY ? 1 : -1
      scrollSpeed = Math.min(Math.abs(scrollY - lastScrollY) / 10, 5)

      clearTimeout(scrollTimeout)
      scrollTimeout = setTimeout(() => {
        scrollSpeed = 0
      }, 100)

      updateLightPosition()
    },
    { passive: true },
  )

  // Handle window resize
  window.addEventListener(
    "resize",
    () => {
      windowHeight = window.innerHeight
      windowWidth = window.innerWidth
      documentHeight = Math.max(
        document.body.scrollHeight,
        document.body.offsetHeight,
        document.documentElement.clientHeight,
        document.documentElement.scrollHeight,
        document.documentElement.offsetHeight,
      )
      isMobile = window.innerWidth < 768

      updateLightPosition()
    },
    { passive: true },
  )

  // Update light position
  function updateLightPosition() {
    // Calculate scroll progress (0 to 1)
    const maxScroll = documentHeight - windowHeight
    const scrollProgress = Math.min(Math.max(scrollY / maxScroll, 0), 1)

    // Réduire l'amplitude pour garder la lumière plus visible
    const pathWidth = 0.25 // Réduit de 0.35 à 0.25 pour un chemin moins large
    const pathComplexity = 2 // Higher = more complex path

    // Définir des limites sûres pour garder la lumière visible
    const safeMargin = 50 // marge de sécurité en pixels
    const minX = safeMargin
    const maxX = windowWidth - safeMargin

    // Create irregular path using sine/cosine waves
    const x = Math.sin(scrollProgress * Math.PI * 2 * pathComplexity + pathSeed) * pathWidth * windowWidth
    const xNoise =
      Math.sin(scrollProgress * Math.PI * 5 * pathComplexity + pathSeed * 1.5) * pathWidth * 0.3 * windowWidth +
      Math.sin(scrollProgress * Math.PI * 13 * pathComplexity + pathSeed * 3.7) * pathWidth * 0.1 * windowWidth

    // Limiter la position horizontale pour rester visible
    let finalX = windowWidth / 2 + x + xNoise
    finalX = Math.max(minX, Math.min(maxX, finalX))

    // Calculate vertical position - garder dans les limites visibles
    const verticalOffset = windowHeight * 0.3 // Augmenté de 0.2 à 0.3
    // Garder la lumière visible dans la fenêtre
    let y = windowHeight / 2 + Math.sin(scrollProgress * Math.PI * 2 + pathSeed) * windowHeight * 0.2

    // Empêcher qu’elle dépasse les bords
    y = Math.max(safeMargin, Math.min(windowHeight - safeMargin, y))

    // Calculate size and opacity variations - augmenter la taille pour plus de visibilité
    const sizeVariation = Math.sin(scrollProgress * Math.PI * 4 + pathSeed) * 5
    const speedSizeBoost = scrollSpeed * 2
    const baseSize = isMobile ? 15 : 25 // Augmenté pour plus de visibilité
    const size = baseSize + sizeVariation + speedSizeBoost

    const opacityVariation = Math.sin(scrollProgress * Math.PI * 3 + pathSeed * 2) * 0.2
    const opacity = Math.min(Math.max(0.7 + opacityVariation, 0.3), 0.9) // Minimum opacity increased

    // Apply styles
    Object.assign(light.style, {
      transform: `translate(${finalX}px, ${y}px)`,
      width: `${size}px`,
      height: `${size}px`,
      opacity: scrollSpeed === 0 ? "0.6" : String(opacity),
      boxShadow: `0 0 ${40 + sizeVariation}px rgba(30, 64, 175, 0.8)`,
      zIndex: "9999", // S'assurer que la lumière est au-dessus de tous les éléments
    })
  }

  // Initial position update
  updateLightPosition()

  // Return the light element for potential future reference
  return light
}
