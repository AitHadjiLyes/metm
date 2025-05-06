# Réécriture du fichier `faq.js` avec des `console.log` détaillés à chaque étape pour diagnostiquer
verbose_faq_js = """
export const FaqAccordion = {
  /**
   * Initialise l'accordéon FAQ avec logs détaillés
   */
  init() {
    console.log("➡️ Initialisation de l'accordéon FAQ");
    const faqQuestions = document.querySelectorAll(".faq-question");

    if (faqQuestions.length === 0) {
      console.warn("⚠️ Aucune question FAQ trouvée dans le DOM.");
      return;
    }

    console.log(`✅ ${faqQuestions.length} questions FAQ détectées.`);

    faqQuestions.forEach((button, index) => {
      console.log(`🔧 Configuration de la question FAQ #${index + 1}`);

      const faqItem = button.closest(".faq-item");
      if (!faqItem) {
        console.error(`❌ Aucun parent .faq-item trouvé pour la question #${index + 1}`);
        return;
      }

      const answer = faqItem.querySelector(".faq-answer");
      if (!answer) {
        console.error(`❌ Aucune réponse .faq-answer trouvée pour la question #${index + 1}`);
        return;
      }

      console.log(`✅ FAQ #${index + 1} prête.`);

      // Initialisation accessibilité
      button.setAttribute("aria-expanded", "false");
      answer.setAttribute("aria-hidden", "true");
      answer.style.maxHeight = null;

      button.addEventListener("click", () => {
        console.log(`🟡 Clic détecté sur FAQ #${index + 1}`);

        const isCurrentlyActive = faqItem.classList.contains("active");
        console.log(`📌 État actuel : ${isCurrentlyActive ? "ouvert" : "fermé"}`);

        // Fermer tous les autres
        document.querySelectorAll(".faq-item.active").forEach((item, idx) => {
          if (item !== faqItem) {
            console.log(`🔒 Fermeture de la question FAQ #${idx + 1}`);
            item.classList.remove("active");
            const otherAnswer = item.querySelector(".faq-answer");
            const otherButton = item.querySelector(".faq-question");
            if (otherAnswer && otherButton) {
              otherAnswer.style.maxHeight = null;
              otherButton.setAttribute("aria-expanded", "false");
              otherAnswer.setAttribute("aria-hidden", "true");
            }
          }
        });

        // Toggle active
        faqItem.classList.toggle("active");
        const isNowActive = faqItem.classList.contains("active");
        console.log(`🔄 Nouveau statut après toggle : ${isNowActive ? "ouvert" : "fermé"}`);

        if (isNowActive) {
          const scrollHeight = answer.scrollHeight;
          console.log(`📏 scrollHeight mesuré : ${scrollHeight}px`);
          answer.style.maxHeight = scrollHeight + "px";
          button.setAttribute("aria-expanded", "true");
          answer.setAttribute("aria-hidden", "false");
          console.log("✅ Réponse affichée");
        } else {
          answer.style.maxHeight = null;
          button.setAttribute("aria-expanded", "false");
          answer.setAttribute("aria-hidden", "true");
          console.log("🔕 Réponse masquée");
        }
      });
    });

    console.log("✅ Initialisation de l'accordéon FAQ terminée");
  }
}
"""

# Écriture dans le fichier
faq_js_path.write_text(verbose_faq_js, encoding="utf-8")
