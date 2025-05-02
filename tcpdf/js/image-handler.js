/**
 * Gestion optimisée des images pour mobile
 */

const ImageHandler = {
    /**
     * Initialise la gestion des images
     */
    init() {
      this.setupLazyLoading()
      this.setupResponsiveImages()
      this.setupImageErrorHandling()
      this.optimizeBackgroundImages()
    },
  
    /**
     * Configure le chargement paresseux des images
     */
    setupLazyLoading() {
      if ("IntersectionObserver" in window) {
        const lazyImages = document.querySelectorAll('img[loading="lazy"], img.lazy-image')
  
        const imageObserver = new IntersectionObserver(
          (entries) => {
            entries.forEach((entry) => {
              if (entry.isIntersecting) {
                const img = entry.target
  
                // Si l'image a un attribut data-src, l'utiliser comme source
                if (img.dataset.src) {
                  img.src = img.dataset.src
                  img.removeAttribute("data-src")
                }
  
                // Si l'image a un attribut data-srcset, l'utiliser comme srcset
                if (img.dataset.srcset) {
                  img.srcset = img.dataset.srcset
                  img.removeAttribute("data-srcset")
                }
  
                img.classList.add("loaded")
                imageObserver.unobserve(img)
              }
            })
          },
          {
            rootMargin: "200px 0px", // Préchargement avant que l'image soit visible
            threshold: 0.01,
          },
        )
  
        lazyImages.forEach((img) => {
          imageObserver.observe(img)
        })
      } else {
        // Fallback pour les navigateurs qui ne supportent pas IntersectionObserver
        document.querySelectorAll('img[loading="lazy"], img.lazy-image').forEach((img) => {
          if (img.dataset.src) {
            img.src = img.dataset.src
          }
          if (img.dataset.srcset) {
            img.srcset = img.dataset.srcset
          }
          img.classList.add("loaded")
        })
      }
    },
  
    /**
     * Configure les images responsives
     */
    setupResponsiveImages() {
      // Ajouter des attributs srcset pour les images qui n'en ont pas
      document.querySelectorAll('img:not([srcset]):not(.lazy-image):not([loading="lazy"])').forEach((img) => {
        // Ne pas traiter les images SVG ou les images déjà optimisées
        if (img.src && !img.src.endsWith(".svg") && !img.classList.contains("no-responsive")) {
          const src = img.src
          const extension = src.split(".").pop()
  
          // Créer des versions de différentes tailles si elles existent
          if (["jpg", "jpeg", "png", "webp"].includes(extension.toLowerCase())) {
            // On suppose que les versions mobiles existent avec le suffixe -mobile, -tablet
            const baseSrc = src.replace(`.${extension}`, "")
  
            // Vérifier si les images existent avant de les ajouter au srcset
            this.imageExists(`${baseSrc}-mobile.${extension}`, (exists) => {
              if (exists) {
                if (!img.srcset) {
                  img.srcset = `${baseSrc}-mobile.${extension} 480w, ${baseSrc}-tablet.${extension} 768w, ${src} 1200w`
                  img.sizes = "(max-width: 480px) 480px, (max-width: 768px) 768px, 1200px"
                }
              }
            })
          }
        }
      })
    },
  
    /**
     * Vérifie si une image existe
     * @param {string} url - URL de l'image à vérifier
     * @param {function} callback - Fonction de rappel avec le résultat
     */
    imageExists(url, callback) {
      const img = new Image()
      img.onload = () => {
        callback(true)
      }
      img.onerror = () => {
        callback(false)
      }
      img.src = url
    },
  
    /**
     * Gestion des erreurs de chargement d'images
     */
    setupImageErrorHandling() {
      document.querySelectorAll("img").forEach((img) => {
        img.addEventListener("error", function () {
          // Remplacer par une image par défaut ou ajouter une classe
          this.classList.add("image-error")
  
          // Si c'est une image de profil, utiliser une image par défaut
          if (this.classList.contains("profile-image") || this.parentElement.classList.contains("testimonial-author")) {
            this.src = "/assets/images/default-avatar.png"
          } else {
            // Pour les autres images, utiliser une image générique
            this.src = "/assets/images/placeholder.png"
          }
        })
      })
    },
  
    /**
     * Optimise les images d'arrière-plan pour mobile
     */
    optimizeBackgroundImages() {
      // Détecter si nous sommes sur mobile
      const isMobile = window.innerWidth <= 768
  
      // Sélectionner tous les éléments avec des images d'arrière-plan
      document.querySelectorAll(".hero-image, [data-background]").forEach((el) => {
        // Récupérer l'URL de l'image d'arrière-plan actuelle
        const computedStyle = window.getComputedStyle(el)
        const bgImage = computedStyle.backgroundImage
  
        // Si nous sommes sur mobile et qu'une version mobile existe
        if (isMobile && el.dataset.backgroundMobile) {
          el.style.backgroundImage = `url('${el.dataset.backgroundMobile}')`
        }
        // Si nous sommes sur tablette et qu'une version tablette existe
        else if (window.innerWidth <= 1024 && el.dataset.backgroundTablet) {
          el.style.backgroundImage = `url('${el.dataset.backgroundTablet}')`
        }
        // Sinon, utiliser l'image par défaut si spécifiée
        else if (el.dataset.background) {
          el.style.backgroundImage = `url('${el.dataset.background}')`
        }
      })
    },
  }
  
  // Initialiser le gestionnaire d'images au chargement du DOM
  document.addEventListener("DOMContentLoaded", () => {
    ImageHandler.init()
  
    // Réinitialiser lors du redimensionnement de la fenêtre
    window.addEventListener("resize", () => {
      ImageHandler.optimizeBackgroundImages()
    })
  })
  
  // Exporter le module pour une utilisation dans d'autres fichiers
  export default ImageHandler
  