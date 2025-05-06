<?php
include 'includes/header.php';
$pageTitle = "Blanchiment de Données - " . SITE_NAME;
?>
<main class="how-to-order page-content">
  <section class="process-hero">
    <div class="container">
      <h1 class="hero-title">Comment commander</h1>
      <p class="hero-subtitle">Un processus d'achat simple, transparent et professionnel pour vos besoins en équipements informatiques</p>
      <div class="hero-cta">
        <a href="/contact.php" class="btn-accent">Demander un devis</a>
        <a href="/telecharger-plaquette.php" class="btn-secondary">Télécharger notre catalogue</a>
      </div>
    </div>
  </section>

  <section class="ordering-process">
    <div class="container">
      <h2 class="section-title">Notre processus de commande</h2>
      <div class="process-steps">
        <div class="step-card">
          <div class="step-number">1</div>
          <h3 class="step-title">Consultation initiale</h3>
          <p class="step-desc">Planifiez un rendez-vous avec nos experts pour discuter de vos besoins, de votre budget et de vos délais.</p>
          <ul class="step-list">
            <li><i class="fas fa-check"></i> Analyse des besoins</li>
            <li><i class="fas fa-check"></i> Planification budgétaire</li>
            <li><i class="fas fa-check"></i> Spécifications techniques</li>
          </ul>
        </div>
        <div class="step-card">
          <div class="step-number">2</div>
          <h3 class="step-title">Proposition personnalisée</h3>
          <p class="step-desc">Recevez une proposition détaillée incluant les spécifications du matériel, les tarifs et les délais de livraison.</p>
          <ul class="step-list">
            <li><i class="fas fa-check"></i> Devis complet</li>
            <li><i class="fas fa-check"></i> Options d'équipement</li>
            <li><i class="fas fa-check"></i> Formules de services</li>
          </ul>
        </div>
        <div class="step-card">
          <div class="step-number">3</div>
          <h3 class="step-title">Confirmation de commande</h3>
          <p class="step-desc">Validez la proposition, procédez au paiement et organisez la livraison avec notre équipe.</p>
          <ul class="step-list">
            <li><i class="fas fa-check"></i> Validation de la commande</li>
            <li><i class="fas fa-check"></i> Traitement du paiement</li>
            <li><i class="fas fa-check"></i> Planification de la livraison</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="mid-cta">
    <div class="container">
      <h2>Prêt à démarrer ?</h2>
      <p>Notre équipe vous accompagne à chaque étape du processus.</p>
      <a href="/contact.php" class="btn-accent">Parler à un expert</a>
    </div>
  </section>

  <section class="ordering-info">
    <div class="container">
      <div class="info-cards">
        <div class="info-card">
          <div class="info-icon"><i class="fas fa-file-contract"></i></div>
          <h3>Conditions contractuelles flexibles</h3>
          <p>Choisissez parmi plusieurs options de contrat adaptées aux besoins de votre organisation.</p>
        </div>
        <div class="info-card">
          <div class="info-icon"><i class="fas fa-hand-holding-usd"></i></div>
          <h3>Tarification transparente</h3>
          <p>Des tarifs clairs, sans frais cachés ni mauvaises surprises.</p>
        </div>
        <div class="info-card">
          <div class="info-icon"><i class="fas fa-shield-alt"></i></div>
          <h3>Garantie qualité</h3>
          <p>Tous nos équipements sont rigoureusement testés et certifiés avant expédition.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="testimonials">
    <div class="container">
      <h2 class="section-title">Ce que disent nos clients</h2>
      <div class="testimonial-grid">
        <div class="testimonial">
          <p class="testimonial-text">« Le processus de commande a été fluide et professionnel. Leur équipe nous a parfaitement conseillé pour trouver les bonnes solutions. »</p>
          <div class="testimonial-author">Marie Laurent, Directrice Informatique</div>
        </div>
        <div class="testimonial">
          <p class="testimonial-text">« Une excellente communication tout au long du projet. Le matériel est arrivé dans les temps et a dépassé nos attentes. »</p>
          <div class="testimonial-author">Pierre Dubois, Responsable des Opérations</div>
        </div>
      </div>
    </div>
  </section>

  <section class="solutions-cta">
        <div class="container">
            <div class="cta-content">
                <h2>Équipez votre établissement</h2>
                <p>Découvrez nos solutions sur mesure pour l'éducation</p>
                <div class="cta-buttons">
                    <a href="/contact.php" class="btn btn-primary">Demander un devis</a>
                    <a href="/telecharger-plaquette.php" class="btn btn-secondary">Documentation détaillée</a>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include 'includes/footer.php'; ?>
</body>
<style>
/* Styles spécifiques à la page Comment Commander */
.process-hero {
  background: linear-gradient(135deg, var(--color-primary-dark), var(--color-primary));
  color: white;
  padding: 140px 20px 100px;
  text-align: center;
  clip-path: polygon(0 0, 100% 0, 100% 95%, 0 100%);
  padding-top: 100px;
  padding-bottom: 80px;
}

.hero-title {
  font-size: 3.2rem;
  font-weight: 800;
  margin-bottom: 1rem;
}

.hero-subtitle {
  font-size: 1.2rem;
  opacity: 0.9;
  margin-bottom: 2rem;
}

.hero-cta a {
  display: inline-block;
  margin: 0 10px;
  padding: 14px 28px;
  border-radius: 9999px;
  font-weight: 600;
  text-decoration: none;
  transition: all 0.3s ease;
}

.btn-accent {
  background-color: var(--color-accent);
  color: white;
  box-shadow: 0 4px 12px var(--color-shadow);
}

.btn-accent:hover {
  background-color: var(--color-primary-dark);
  box-shadow: 0 6px 18px var(--color-shadow-strong);
  transform: translateY(-2px);
}

.btn-secondary {
  border: 2px solid white;
  color: white;
  background: transparent;
}

.btn-secondary:hover {
  background-color: white;
  color: var(--color-primary);
  transform: translateY(-2px);
}

.mid-cta, .final-cta {
  background: linear-gradient(to right, var(--color-primary-dark), var(--color-primary));
  color: white;
  text-align: center;
  padding: 80px 20px;
}

.info-icon {
  font-size: 2rem;
  color: var(--color-primary);
  margin-bottom: 15px;
}

.step-number {
  background-color: var(--color-primary);
}

.step-list i {
  color: var(--color-primary);
}
</style>
</html>
