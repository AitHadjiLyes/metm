<footer>
    <div class="container">
        <div class="footer-container">
            <div class="footer-section">
                <h3><?php echo SITE_NAME; ?></h3>
                <p>Spécialiste des PC portables et composants reconditionnés pour les pros. Qualité garantie, prix réduits, service réactif.</p>
                <div class="social-links">
                    <a href="<?php echo SOCIAL_LINKEDIN; ?>" aria-label="LinkedIn" class="social-icon">
                        <span class="sr-only">LinkedIn</span>
                        <i class="fab fa-linkedin-in" aria-hidden="true"></i>
                    </a>
                    <a href="<?php echo SOCIAL_TWITTER; ?>" aria-label="Twitter" class="social-icon">
                        <span class="sr-only">Twitter</span>
                        <i class="fab fa-twitter" aria-hidden="true"></i>
                    </a>
                    <a href="<?php echo SOCIAL_FACEBOOK; ?>" aria-label="Facebook" class="social-icon">
                        <span class="sr-only">Facebook</span>
                        <i class="fab fa-facebook-f" aria-hidden="true"></i>
                    </a>
                </div>
            </div>

            <div class="footer-section">
                <h4>Liens rapides</h4>
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="formulaire-pro.php">Demander un devis</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="telecharger-plaquette.php">Plaquette commerciale</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h4>Contact</h4>
                <ul>
                    <li><i class="far fa-envelope mr-2"></i> <?php echo CONTACT_EMAIL; ?></li>
                    <li><i class="fas fa-phone-alt mr-2"></i> <?php echo CONTACT_PHONE; ?></li>
                    <li><i class="fas fa-map-marker-alt mr-2"></i> <?php echo CONTACT_ADDRESS; ?></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            &copy; <?php echo COPYRIGHT_YEAR; ?> <?php echo SITE_NAME; ?>. Tous droits réservés. SIREN <?php echo COMPANY_SIREN; ?> - RCS <?php echo COMPANY_RCS; ?>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="js/main.js" type="module"></script>
</body>

</html>
