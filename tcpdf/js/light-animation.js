/**
 * Scrolling Light Animation
 *
 * Crée un effet de lumière élégant qui suit le défilement de la page
 * Version simplifiée et optimisée pour garantir le fonctionnement
 */

// Fonction auto-exécutante pour éviter les conflits de portée
;(() => {
  // Attendre que le DOM soit complètement chargé
  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", initLightAnimation)
  } else {
    // Si le DOM est déjà chargé, initialiser immédiatement
    initLightAnimation()
  }

  function initLightAnimation() {
    console.log("Initialisation de l'animation de lumière...")

    // Vérifier si l'animation est déjà initialisée
    if (document.querySelector(".scrolling-light")) {
      console.log("Animation déjà initialisée, suppression de l'instance précédente")
      document.querySelector(".scrolling-light").remove()
    }

    // Créer l'élément de lumière
    const light = document.createElement("div")
    light.className = "scrolling-light"

    // Appliquer les styles de base - Utilisation de position fixe avec des valeurs absolues
    Object.assign(light.style, {
      position: "fixed",
      pointerEvents: "none",
      width: "40px",
      height: "40px",
      borderRadius: "50%",
      background: "rgba(255, 0, 0, 0.9)", // Rouge vif
      boxShadow: "0 0 60px rgba(255, 0, 0, 0.9)",
      opacity: "0.9",
      zIndex: "9999", // Valeur très élevée
      filter: "blur(2px)",
      mixBlendMode: "screen",

      // Position fixe dans le coin supérieur droit
      top: "50px",
      right: "50px",
      bottom: "auto",
      left: "auto",

      // Forcer l'affichage
      display: "block",
      visibility: "visible",
    })

    // Ajouter au body
    document.body.appendChild(light)
    console.log("Élément de lumière créé et ajouté au DOM")

    // Variables d'animation
    let scrollY = window.scrollY || window.pageYOffset
    let lastScrollY = scrollY
    let scrollDirection = 0
    let scrollSpeed = 0
    let scrollTimeout = null
    let windowHeight = window.innerHeight
    let windowWidth = window.innerWidth
    let documentHeight = getDocumentHeight()
    let isMobile = window.innerWidth < 768
    let isVisible = true
    let animationFrameId = null

    // Position fixe dans la fenêtre (pourcentage)
    const fixedPositionX = 0.85 // 85% de la largeur (coin droit)
    const fixedPositionY = 0.15 // 15% de la hauteur (coin supérieur)

    // Fonction pour obtenir la hauteur du document de manière fiable
    function getDocumentHeight() {
      return Math.max(
        document.body.scrollHeight,
        document.body.offsetHeight,
        document.documentElement.clientHeight,
        document.documentElement.scrollHeight,
        document.documentElement.offsetHeight,
      )
    }

    // Gérer les événements de défilement
    window.addEventListener("scroll", handleScroll, { passive: true })

    // Gérer les événements de redimensionnement
    window.addEventListener("resize", handleResize, { passive: true })

    // Gérer les changements de visibilité
    document.addEventListener("visibilitychange", handleVisibilityChange)

    // Fonction de gestion du défilement
    function handleScroll() {
      lastScrollY = scrollY
      scrollY = window.scrollY || window.pageYOffset
      scrollDirection = scrollY > lastScrollY ? 1 : -1
      scrollSpeed = Math.min(Math.abs(scrollY - lastScrollY) / 10, 5)

      clearTimeout(scrollTimeout)
      scrollTimeout = setTimeout(() => {
        scrollSpeed = 0
      }, 100)

      // S'assurer que l'animation est en cours
      if (!animationFrameId) {
        animationFrameId = requestAnimationFrame(animate)
      }
    }

    // Fonction de gestion du redimensionnement
    function handleResize() {
      windowHeight = window.innerHeight
      windowWidth = window.innerWidth
      documentHeight = getDocumentHeight()
      isMobile = window.innerWidth < 768

      // Mettre à jour immédiatement la position
      updatePosition()
    }

    // Fonction de gestion de la visibilité
    function handleVisibilityChange() {
      isVisible = !document.hidden

      if (isVisible) {
        if (!animationFrameId) {
          animationFrameId = requestAnimationFrame(animate)
        }
      } else {
        if (animationFrameId) {
          cancelAnimationFrame(animationFrameId)
          animationFrameId = null
        }
      }
    }

    // Fonction pour mettre à jour la position - Version simplifiée avec position fixe
    function updatePosition() {
      try {
        // Taille de base plus grande pour garantir la visibilité
        const baseSize = isMobile ? 35 : 45
        const size = baseSize + scrollSpeed * 5

        // Effet de pulsation simple
        const pulseEffect = Math.sin(Date.now() / 1000) * 5

        // Appliquer les styles - Utiliser des valeurs fixes pour la position
        Object.assign(light.style, {
          width: `${size + pulseEffect}px`,
          height: `${size + pulseEffect}px`,
          opacity: "0.9",
          boxShadow: `0 0 ${60 + pulseEffect}px rgba(255, 0, 0, 0.9)`,

          // Position fixe - ne pas utiliser transform
          top: "50px",
          right: "50px",

          // Forcer l'affichage
          display: "block",
          visibility: "visible",
          zIndex: "9999",
        })

        // Log de débogage pour vérifier la position
        if (Math.random() < 0.01) {
          // Log occasionnel pour ne pas surcharger la console
          const rect = light.getBoundingClientRect()
          console.log(`Position de la lumière: X=${rect.left}, Y=${rect.top}`)
        }
      } catch (error) {
        console.error("Erreur lors de la mise à jour de la position:", error)
        resetToSafePosition()
      }
    }

    // Fonction pour réinitialiser à une position sûre en cas d'erreur
    function resetToSafePosition() {
      Object.assign(light.style, {
        position: "fixed",
        top: "50px",
        right: "50px",
        left: "auto",
        bottom: "auto",
        transform: "none",
        width: "40px",
        height: "40px",
        opacity: "1",
        display: "block",
        visibility: "visible",
        zIndex: "9999",
      })

      console.log("Position réinitialisée à une valeur sûre")

      // Vérifier que la réinitialisation a fonctionné
      setTimeout(() => {
        const rect = light.getBoundingClientRect()
        console.log(`Position après réinitialisation: X=${rect.left}, Y=${rect.top}`)
      }, 100)
    }

    // Fonction d'animation
    function animate() {
      updatePosition()
      animationFrameId = requestAnimationFrame(animate)
    }

    // Démarrer l'animation
    animationFrameId = requestAnimationFrame(animate)

    // Vérification périodique pour s'assurer que la lumière est toujours présente
    setInterval(() => {
      if (!document.querySelector(".scrolling-light")) {
        console.log("La lumière a disparu, réinitialisation...")
        initLightAnimation()
      }
    }, 5000)

    // Fonction de nettoyage
    function destroy() {
      if (animationFrameId) {
        cancelAnimationFrame(animationFrameId)
        animationFrameId = null
      }

      window.removeEventListener("scroll", handleScroll)
      window.removeEventListener("resize", handleResize)
      document.removeEventListener("visibilitychange", handleVisibilityChange)

      if (light && light.parentNode) {
        light.parentNode.removeChild(light)
      }
    }

    // Exposer la fonction de destruction pour un usage externe
    window.destroyLightAnimation = destroy

    // Ajouter un message de débogage dans la console
    console.log("Animation de lumière initialisée avec succès")

    // Retourner l'élément pour référence
    return light
  }
})()
