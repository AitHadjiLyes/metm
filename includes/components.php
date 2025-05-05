<?php
/**
 * Composants réutilisables pour l'interface
 */

/**
 * Affiche une carte de service
 * 
 * @param string $iconPath Chemin vers l'icône
 * @param string $title Titre du service
 * @param string $description Description du service
 * @param string $link Lien optionnel
 * @param string $linkText Texte du lien optionnel
 */
function renderServiceCard($iconPath, $title, $description, $link = '', $linkText = 'En savoir plus') {
    // Générer des versions mobile et tablette des chemins d'image si nécessaire
    $iconPathMobile = str_replace('.png', '-mobile.png', $iconPath);
    $iconPathTablet = str_replace('.png', '-tablet.png', $iconPath);
    
    // Vérifier si les fichiers existent
    $mobileExists = file_exists($_SERVER['DOCUMENT_ROOT'] . $iconPathMobile);
    $tabletExists = file_exists($_SERVER['DOCUMENT_ROOT'] . $iconPathTablet);
    
    // Préparer le srcset si les versions alternatives existent
    $srcset = '';
    if ($mobileExists) {
        $srcset .= $iconPathMobile . ' 480w, ';
    }
    if ($tabletExists) {
        $srcset .= $iconPathTablet . ' 768w, ';
    }
    $srcset .= $iconPath . ' 1200w';
    
    ?>
    <div class="service-card">
        <div class="icon-circle">
            <img 
                src="<?php echo $iconPath; ?>" 
                <?php if ($mobileExists || $tabletExists): ?>
                srcset="<?php echo $srcset; ?>"
                sizes="(max-width: 480px) 60px, (max-width: 768px) 70px, 80px"
                <?php endif; ?>
                alt="<?php echo $title; ?>" 
                loading="lazy"
                class="img-contain"
            >
        </div>
        <h3><?php echo $title; ?></h3>
        <p><?php echo $description; ?></p>
        <?php if ($link): ?>
        <a href="<?php echo $link; ?>"><?php echo $linkText; ?> <i class="fas fa-arrow-right"></i></a>
        <?php endif; ?>
    </div>
    <?php
}

/**
 * Affiche un témoignage
 * 
 * @param string $content Contenu du témoignage
 * @param string $author Nom de l'auteur
 * @param string $avatarUrl URL de l'avatar
 * @param string $position Position/entreprise de l'auteur (optionnel)
 */
function renderTestimonial($content, $author, $avatarUrl = '', $position = '') {
    ?>
    <div class="testimonial-card">
        <div class="testimonial-content">
            <p>"<?php echo $content; ?>"</p>
        </div>
        <div class="testimonial-author">
            <?php if ($avatarUrl): ?>
            <img 
                src="<?php echo $avatarUrl; ?>" 
                alt="<?php echo $author; ?>" 
                loading="lazy"
                class="img-cover"
                onerror="this.src='/assets/images/default-avatar.png'; this.onerror=null;"
            >
            <?php endif; ?>
            <div class="author-info">
                <h4><?php echo $author; ?></h4>
                <?php if ($position): ?>
                <p><?php echo $position; ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php
}


/**
 * Affiche un élément de FAQ
 * 
 * @param string $question Question
 * @param string $answer Réponse
 */
function renderFaqItem($question, $answer) {
    static $faqCounter = 0;
    $faqCounter++;
    $id = 'faq-' . $faqCounter;
    ?>
    <div class="faq-item">
        <button class="faq-question" aria-expanded="false" aria-controls="<?php echo $id; ?>">
            <?php echo $question; ?>
            <i class="fas fa-chevron-down"></i>
        </button>
        <div id="<?php echo $id; ?>" class="faq-answer">
            <p><?php echo $answer; ?></p>
        </div>
    </div>
    <?php
}

/**
 * Affiche une carte d'article de blog (aperçu)
 * 
 * @param array $article Données de l'article
 */
function renderBlogCard($article) {
    // Générer des versions mobile et tablette des chemins d'image
    $imagePath = $article['image'];
    $imagePathMobile = str_replace('.jpg', '-mobile.jpg', $imagePath);
    $imagePathMobile = str_replace('.png', '-mobile.png', $imagePathMobile);
    $imagePathTablet = str_replace('.jpg', '-tablet.jpg', $imagePath);
    $imagePathTablet = str_replace('.png', '-tablet.png', $imagePathTablet);
    
    // Vérifier si les fichiers existent
    $mobileExists = file_exists($_SERVER['DOCUMENT_ROOT'] . $imagePathMobile);
    $tabletExists = file_exists($_SERVER['DOCUMENT_ROOT'] . $imagePathTablet);
    
    // Préparer le srcset si les versions alternatives existent
    $srcset = '';
    if ($mobileExists) {
        $srcset .= $imagePathMobile . ' 480w, ';
    }
    if ($tabletExists) {
        $srcset .= $imagePathTablet . ' 768w, ';
    }
    $srcset .= $imagePath . ' 1200w';
    ?>
    <article class="blog-card">
        <div class="blog-image aspect-ratio-container aspect-ratio-16-9">
            <a href="article.php?slug=<?php echo $article['slug']; ?>">
                <img 
                    src="<?php echo $imagePath; ?>" 
                    <?php if ($mobileExists || $tabletExists): ?>
                    srcset="<?php echo $srcset; ?>"
                    sizes="(max-width: 480px) 100vw, (max-width: 768px) 100vw, 33vw"
                    <?php endif; ?>
                    alt="<?php echo $article['title']; ?>" 
                    loading="lazy"
                    class="img-cover"
                >
            </a>
            <span class="blog-category"><?php echo $article['category']; ?></span>
        </div>
        <div class="blog-content">
            <h2 class="blog-title">
                <a href="article.php?slug=<?php echo $article['slug']; ?>"><?php echo $article['title']; ?></a>
            </h2>
            <div class="blog-meta">
                <span class="blog-date"><i class="far fa-calendar-alt"></i> <?php echo $article['date']; ?></span>
                <span class="blog-author"><i class="far fa-user"></i> <?php echo $article['author']; ?></span>
            </div>
            <p class="blog-excerpt"><?php echo $article['excerpt']; ?></p>
            <a href="article.php?slug=<?php echo $article['slug']; ?>" class="read-more">Lire la suite <i class="fas fa-arrow-right"></i></a>
        </div>
    </article>
    <?php
}

/**
 * Affiche une image responsive avec différentes tailles
 * 
 * @param string $src Chemin de l'image
 * @param string $alt Texte alternatif
 * @param string $class Classes CSS additionnelles
 * @param bool $lazy Activer le chargement paresseux
 */
function renderResponsiveImage($src, $alt = '', $class = '', $lazy = true) {
    // Générer des versions mobile et tablette des chemins d'image
    $srcMobile = preg_replace('/\.(jpg|jpeg|png|webp)$/i', '-mobile.$1', $src);
    $srcTablet = preg_replace('/\.(jpg|jpeg|png|webp)$/i', '-tablet.$1', $src);
    
    // Vérifier si les fichiers existent
    $mobileExists = file_exists($_SERVER['DOCUMENT_ROOT'] . $srcMobile);
    $tabletExists = file_exists($_SERVER['DOCUMENT_ROOT'] . $srcTablet);
    
    // Préparer le srcset si les versions alternatives existent
    $srcset = '';
    if ($mobileExists) {
        $srcset .= $srcMobile . ' 480w, ';
    }
    if ($tabletExists) {
        $srcset .= $srcTablet . ' 768w, ';
    }
    $srcset .= $src . ' 1200w';
    
    // Attributs pour le chargement paresseux
    $lazyAttributes = $lazy ? 'loading="lazy" class="lazy-image ' . $class . '"' : 'class="' . $class . '"';
    
    // Générer la balise img
    echo '<img 
        src="' . $src . '" 
        ' . ($srcset ? 'srcset="' . $srcset . '"' : '') . '
        ' . ($srcset ? 'sizes="(max-width: 480px) 100vw, (max-width: 768px) 100vw, 1200px"' : '') . '
        alt="' . $alt . '" 
        ' . $lazyAttributes . '
    >';
}

/**
 * Affiche une image d'arrière-plan responsive
 * 
 * @param string $selector Sélecteur CSS de l'élément
 * @param string $src Chemin de l'image par défaut
 * @param string $srcMobile Chemin de l'image mobile (optionnel)
 * @param string $srcTablet Chemin de l'image tablette (optionnel)
 */
function renderResponsiveBackgroundImage($selector, $src, $srcMobile = '', $srcTablet = '') {
    // Si les chemins mobile et tablette ne sont pas fournis, générer des noms par défaut
    if (empty($srcMobile)) {
        $srcMobile = preg_replace('/\.(jpg|jpeg|png|webp)$/i', '-mobile.$1', $src);
    }
    if (empty($srcTablet)) {
        $srcTablet = preg_replace('/\.(jpg|jpeg|png|webp)$/i', '-tablet.$1', $src);
    }
    
    // Vérifier si les fichiers existent
    $mobileExists = file_exists($_SERVER['DOCUMENT_ROOT'] . $srcMobile);
    $tabletExists = file_exists($_SERVER['DOCUMENT_ROOT'] . $srcTablet);
    
    // Générer le CSS
    echo '<style>';
    echo $selector . ' { background-image: url("' . $src . '"); }';
    
    if ($tabletExists) {
        echo '@media (max-width: 1024px) { ' . $selector . ' { background-image: url("' . $srcTablet . '"); } }';
    }
    
    if ($mobileExists) {
        echo '@media (max-width: 768px) { ' . $selector . ' { background-image: url("' . $srcMobile . '"); } }';
    }
    
    echo '</style>';
    
    // Ajouter des attributs data pour le JavaScript
    echo '<script>';
    echo 'document.addEventListener("DOMContentLoaded", function() {';
    echo '  var el = document.querySelector("' . $selector . '");';
    echo '  if (el) {';
    echo '    el.setAttribute("data-background", "' . $src . '");';
    if ($mobileExists) {
        echo '    el.setAttribute("data-background-mobile", "' . $srcMobile . '");';
    }
    if ($tabletExists) {
        echo '    el.setAttribute("data-background-tablet", "' . $srcTablet . '");';
    }
    echo '  }';
    echo '});';
    echo '</script>';
}

/**
 * Renders a timeline
 * @param array $items Array of timeline items, each with 'date', 'title', and 'text' keys.
 */
function renderTimelineStart() {
    echo '<div class="timeline-container relative">';
}

function renderTimelineItem($etape, $titre, $description, $icon = 'fa-circle', $color = 'bg-blue-500') {
    static $index = 0;
    $side = $index % 2 === 0 ? 'left' : 'right';
    echo '
    <div class="timeline-step ' . $side . '">
        <div class="step-content bg-white shadow-md rounded-md p-6">
            <div class="flex items-center mb-3">
                <div class="w-12 h-12 rounded-full ' . $color . ' flex items-center justify-center text-white text-xl mr-4">
                    <i class="fas ' . $icon . '"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-800">' . htmlspecialchars($etape) . ' – ' . htmlspecialchars($titre) . '</h3>
            </div>
            <p class="text-gray-600">' . htmlspecialchars($description) . '</p>
        </div>
    </div>';
    $index++;
}

function renderTimelineEnd() {
    echo '</div>';
}


function renderHorizontalTimeline($steps) {
    echo '<div class="relative max-w-7xl mx-auto px-4 py-10">';
    echo '<div class="absolute top-12 left-16 right-16 h-1 bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 rounded-full z-0"></div>';
    echo '<div class="flex justify-between relative z-10">';

    foreach ($steps as $index => $step) {
        $status = $step['status'] ?? '';
        $icon = $step['icon'] ?? 'fa-circle';
        $title = htmlspecialchars($step['title']);
        $text = htmlspecialchars($step['text']);
        $color = $step['color'] ?? 'bg-blue-500';

        $circleStyle = match ($status) {
            'completed' => 'bg-green-500 border-green-500',
            'active' => $color . ' border-white',
            default => 'bg-white border-gray-300',
        };

        echo '<div class="w-1/5 text-center relative px-2 box-border">';
        echo '<div class="mx-auto w-6 h-6 rounded-full border-4 ' . $circleStyle . '"></div>';
        echo '<div class="mt-8 bg-white rounded-md shadow-md p-4 text-sm">';
        echo '<div class="flex flex-col items-center mb-2">
                <div class="w-10 h-10 rounded-full ' . $color . ' flex items-center justify-center text-white text-lg mb-2">
                    <i class="fas ' . $icon . '"></i>
                </div>
                <h3 class="font-semibold text-gray-800">' . $title . '</h3>
              </div>';
        echo '<p class="text-gray-500">' . $text . '</p>';
        echo '</div></div>';
    }

    echo '</div></div>';
}


 

// Ajoutez le JavaScript d'animation
echo '<script>
document.addEventListener("DOMContentLoaded", function() {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("active");
            }
        });
    }, { threshold: 0.5 });

    document.querySelectorAll(".timeline-item").forEach(item => {
        observer.observe(item);
    });
});
</script>';
?>