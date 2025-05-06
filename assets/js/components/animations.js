/**
 * Gestion des animations au défilement
 */
export const ScrollAnimations = {
  /**
   * Initialise les animations au défilement
   */
  init() {
    // Sélectionner tous les éléments qui doivent avoir l'animation au défilement
    const scrollElements = document.querySelectorAll(
      ".scroll-reveal, section, .card, .category, .advantages li, .testimonial-card, .stat-item, .footer-section, .service-card",
    )

    // Ajouter la classe scroll-reveal à tous les éléments
    scrollElements.forEach((el) => {
      if (!el.classList.contains("scroll-reveal")) {
        el.classList.add("scroll-reveal")
      }
    })

    // Utiliser l'Intersection Observer pour de meilleures performances
    if ("IntersectionObserver" in window) {
      const observer = new IntersectionObserver(
        (entries) => {
          entries.forEach((entry) => {
            // Si l'élément entre dans la vue, ajouter la classe visible
            // If the element enters the view, add the visible class
if (entry.isIntersecting) {
  entry.target.classList.add("visible")
  // Don't unobserve - let the element be tracked continuously
} else if (window.innerWidth >= 768) {
  // On desktop, we can reanimate elements when they leave the view
  entry.target.classList.remove("visible")
}
            
          })
        },
        {
          threshold: 0.1, // Déclencher quand 10% de l'élément est visible
          rootMargin: "0px 0px -50px 0px", // Déclencher un peu avant que l'élément soit complètement visible
        },
      )

      // Observer tous les éléments
      scrollElements.forEach((el) => {
        observer.observe(el)
      })
    } else {
      // Fallback pour les navigateurs qui ne supportent pas IntersectionObserver
      this.handleScrollAnimationLegacy(scrollElements)
    }
  },

  /**
   * Méthode de fallback pour les navigateurs plus anciens
   * @param {NodeList} elements - Éléments à animer
   */
  handleScrollAnimationLegacy(elements) {
    // Fonction pour vérifier si un élément est visible dans la fenêtre
    const elementInView = (el, dividend = 1) => {
      const elementTop = el.getBoundingClientRect().top
      const elementBottom = el.getBoundingClientRect().bottom
      return (
        elementTop <= (window.innerHeight || document.documentElement.clientHeight) / dividend && elementBottom >= 0
      )
    }

    // Fonction pour vérifier si un élément est complètement hors de la vue
    const elementOutOfView = (el) => {
      const elementTop = el.getBoundingClientRect().top
      const elementBottom = el.getBoundingClientRect().bottom
      return elementBottom < 0 || elementTop > (window.innerHeight || document.documentElement.clientHeight)
    }

    // Fonction pour afficher l'élément avec animation
    const displayScrollElement = (element) => {
      element.classList.add("visible")
    }

    // Fonction pour masquer l'élément (réinitialiser l'animation)
    const hideScrollElement = (element) => {
      // Toujours réinitialiser les animations pour qu'elles se déclenchent à chaque défilement
      element.classList.remove("visible")
    }

    // Fonction principale pour gérer les animations au défilement
    const handleScrollAnimation = () => {
      elements.forEach((el) => {
        if (elementInView(el, 1.25)) {
          displayScrollElement(el)
        } else if (elementOutOfView(el)) {
          hideScrollElement(el)
        }
      })
    }

    // Écouter l'événement de défilement avec throttling pour les performances
    let isScrolling = false
    window.addEventListener(
      "scroll",
      () => {
        if (!isScrolling) {
          window.requestAnimationFrame(() => {
            handleScrollAnimation()
            isScrolling = false
          })
          isScrolling = true
        }
      },
      { passive: true },
    ) // Utiliser un écouteur passif pour de meilleures performances

    // Initialiser les animations au chargement
    handleScrollAnimation()
  },
}
