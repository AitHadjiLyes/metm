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
        "section, .card, .category, .advantages li, .testimonial-card, .stat-item, .footer-section, .service-card",
      )
  
      // Ajouter la classe scroll-reveal à tous les éléments
      scrollElements.forEach((el) => {
        el.classList.add("scroll-reveal")
      })
  
      // Utiliser l'Intersection Observer pour de meilleures performances
      if ("IntersectionObserver" in window) {
        const observer = new IntersectionObserver(
          (entries) => {
            entries.forEach((entry) => {
              // Si l'élément entre dans la vue, ajouter la classe visible
              if (entry.isIntersecting) {
                entry.target.classList.add("visible")
  
                // Optimisation mobile: une fois visible, arrêter d'observer pour économiser les ressources
                if (window.innerWidth < 768) {
                  observer.unobserve(entry.target)
                }
              } else if (window.innerWidth >= 768) {
                // Sur desktop, on peut réanimer les éléments quand ils sortent de la vue
                entry.target.classList.remove("visible")
              }
            })
          },
          {
            threshold: 0.1, // Déclencher quand 10% de l'élément est visible
            rootMargin: "0px 0px -50px 0px", // Déclencher un peu avant que l'élément soit complètement visible
          },
        )
  
        scrollElements.forEach((el) => {
          observer.observe(el)
        })
  
        // Optimisation: limiter le nombre d'éléments observés sur mobile
        if (window.innerWidth < 768) {
          const visibleElements = Array.from(scrollElements).slice(0, 15) // Limiter aux 15 premiers éléments
          visibleElements.forEach((el) => {
            observer.observe(el)
          })
        } else {
          scrollElements.forEach((el) => {
            observer.observe(el)
          })
        }
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
        // Sur mobile, on ne réinitialise pas les animations pour économiser les ressources
        if (window.innerWidth >= 768) {
          element.classList.remove("visible")
        }
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
  