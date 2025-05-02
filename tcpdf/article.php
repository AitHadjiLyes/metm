<?php
/**
 * Page d'article individuel
 */
require_once 'config.php';
require_once 'includes/components.php';
require_once 'data/blog.php';

// Récupérer le slug de l'article depuis l'URL
$slug = isset($_GET['slug']) ? $_GET['slug'] : null;

// Si aucun slug n'est fourni, rediriger vers la page blog
if (!$slug) {
    header('Location: blog.php');
    exit;
}

// Récupérer l'article correspondant au slug
$article = getArticleBySlug($slug);

// Si aucun article n'est trouvé, rediriger vers la page blog
if (!$article) {
    header('Location: blog.php');
    exit;
}

// Récupérer tous les articles pour les suggestions
$allArticles = getAllArticles();
$suggestedArticles = [];

// Trouver des articles de la même catégorie (maximum 3)
foreach ($allArticles as $a) {
    if ($a['id'] !== $article['id'] && $a['category'] === $article['category']) {
        $suggestedArticles[] = $a;
        if (count($suggestedArticles) >= 3) {
            break;
        }
    }
}

$pageTitle = $article['title'];
include 'includes/header.php';
?>

<main>
    <article class="article-container">
        <div class="container">
            <!-- En-tête de l'article -->
            <div class="article-header">
                <div class="article-meta">
                    <span class="article-category"><?php echo $article['category']; ?></span>
                    <span class="article-date"><i class="far fa-calendar-alt"></i> <?php echo $article['date']; ?></span>
                    <span class="article-author"><i class="far fa-user"></i> <?php echo $article['author']; ?></span>
                </div>
                <h1 class="article-title"><?php echo $article['title']; ?></h1>
                <p class="article-excerpt"><?php echo $article['excerpt']; ?></p>
</div>
            
            <!-- Image principale -->
            <div class="article-featured-image">
                <img src="<?php echo $article['image']; ?>" alt="<?php echo $article['title']; ?>">
            </div>
            
            <!-- Contenu de l'article -->
            <div class="article-content">
                <?php echo $article['content']; ?>
            </div>
            
            <!-- Tags -->
            <?php if (!empty($article['tags'])): ?>
            <div class="article-tags">
                <?php foreach ($article['tags'] as $tag): ?>
                    <span class="article-tag"><?php echo $tag; ?></span>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
            
            <!-- Partage -->
            <div class="article-share">
                <p>Partager cet article :</p>
                <div class="share-buttons">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>" target="_blank" rel="noopener noreferrer" class="share-button facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>&text=<?php echo urlencode($article['title']); ?>" target="_blank" rel="noopener noreferrer" class="share-button twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>&title=<?php echo urlencode($article['title']); ?>" target="_blank" rel="noopener noreferrer" class="share-button linkedin">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
        </div>
    </article>
    
    <!-- Articles suggérés -->
    <?php if (!empty($suggestedArticles)): ?>
    <section class="suggested-articles">
        <div class="container">
            <h2 class="section-title">Articles similaires</h2>
            <div class="articles-grid">
                <?php foreach ($suggestedArticles as $suggestedArticle): ?>
                    <article class="blog-card">
                        <div class="blog-image">
                            <a href="article.php?slug=<?php echo $suggestedArticle['slug']; ?>">
                                <img src="<?php echo $suggestedArticle['image']; ?>" alt="<?php echo $suggestedArticle['title']; ?>" loading="lazy">
                            </a>
                            <span class="blog-category"><?php echo $suggestedArticle['category']; ?></span>
                        </div>
                        <div class="blog-content">
                            <h3 class="blog-title">
                                <a href="article.php?slug=<?php echo $suggestedArticle['slug']; ?>"><?php echo $suggestedArticle['title']; ?></a>
                            </h3>
                            <div class="blog-meta">
                                <span class="blog-date"><i class="far fa-calendar-alt"></i> <?php echo $suggestedArticle['date']; ?></span>
                                <span class="blog-author"><i class="far fa-user"></i> <?php echo $suggestedArticle['author']; ?></span>
                            </div>
                            <p class="blog-excerpt"><?php echo $suggestedArticle['excerpt']; ?></p>
                            <a href="article.php?slug=<?php echo $suggestedArticle['slug']; ?>" class="read-more">Lire la suite <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
    
    <!-- CTA -->
    <section class="cta-section">
        <div class="container">
            <h2>Vous avez des questions sur nos services ?</h2>
            <p>Notre équipe est à votre disposition pour répondre à toutes vos questions sur nos solutions informatiques reconditionnées.</p>
            <div class="cta-buttons">
                <a href="contact.php" class="btn btn-primary">Nous contacter</a>
                <a href="blog.php" class="btn btn-secondary">Retour au blog</a>
            </div>
        </div>
    </section>

    <script>
        // Aucun script nécessaire car l'en-tête reste fixe sans animation
    </script>
</main>

<!-- Ajout de styles spécifiques pour l'article -->
<style>
    .article-container {
        padding: 60px 0;
    }
    
    .article-header {
        text-align: center;
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: white;
        position: relative;
        top: 100px; /* Ajusté pour tenir compte de la hauteur du header principal */
        left: 0;
        right: 0;
        z-index: 10;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        border-radius: 8px;
    }
    
    .article-meta {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        margin-bottom: 20px;
        color: var(--color-text-muted);
        font-size: 14px;
    }
    
    .article-category {
        background-color: var(--color-primary);
        color: white;
        padding: 5px 12px;
        border-radius: 4px;
        font-weight: 500;
    }
    
    .article-meta i {
        margin-right: 5px;
    }
    
    .article-title {
        font-size: 2.5rem;
        font-weight: 800;
        line-height: 1.2;
        margin-bottom: 20px;
        color: var(--color-bg-dark);
    }
    
    .article-excerpt {
        font-size: 1.2rem;
        color: var(--color-text-muted);
        line-height: 1.6;
    }
    
    .article-featured-image {
        margin-top: 300px; /* Espace suffisant pour l'en-tête fixe */
        margin-bottom: 40px;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 5px 15px var(--color-shadow);
        max-width: 1000px;
        margin-left: auto;
        margin-right: auto;
    }
    
    .article-featured-image img {
        width: 100%;
        height: auto;
        display: block;
    }
    
    .article-content {
        max-width: 800px;
        margin: 0 auto 40px;
        line-height: 1.8;
        color: var(--color-text);
    }
    
    .article-content h2 {
        font-size: 1.8rem;
        font-weight: 700;
        margin: 40px 0 20px;
        color: var(--color-bg-dark);
    }
    
    .article-content p {
        margin-bottom: 20px;
    }
    
    .article-content ul, .article-content ol {
        margin-bottom: 20px;
        padding-left: 20px;
    }
    
    .article-content li {
        margin-bottom: 10px;
    }
    
    .article-content strong {
        font-weight: 600;
        color: var(--color-bg-dark);
    }
    
    .article-tags {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin-bottom: 30px;
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
    }
    
    .article-tag {
        background-color: var(--color-bg-light);
        color: var(--color-text-muted);
        padding: 5px 12px;
        border-radius: 30px;
        font-size: 13px;
        transition: all var(--transition-normal);
    }
    
    .article-tag:hover {
        background-color: var(--color-bg-hover);
        color: var(--color-bg-dark);
    }
    
    .article-share {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 15px;
        margin-top: 40px;
        padding-top: 30px;
        border-top: 1px solid var(--color-bg-hover);
    }
    
    .article-share p {
        font-weight: 500;
        color: var(--color-bg-dark);
    }
    
    .share-buttons {
        display: flex;
        gap: 10px;
    }
    
    .share-button {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        color: white;
        transition: all var(--transition-normal);
    }
    
    .share-button.facebook {
        background-color: #3b5998;
    }
    
    .share-button.twitter {
        background-color: #1da1f2;
    }
    
    .share-button.linkedin {
        background-color: #0077b5;
    }
    
    .share-button:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 10px var(--color-shadow);
    }
    
    .suggested-articles {
        background-color: var(--color-bg-light);
        padding: 60px 0;
    }
    
    .suggested-articles .section-title {
        margin-bottom: 40px;
    }
    
    .suggested-articles .articles-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 30px;
    }
    
    @media (max-width: 768px) {
        .article-title {
            font-size: 1.8rem;
        }
        
        .article-excerpt {
            font-size: 1rem;
        }
        
        .article-content h2 {
            font-size: 1.5rem;
        }
        
        .article-container {
            padding: 30px 0;
        }
        
        .article-header {
            top: 60px; /* Ajusté pour les mobiles */
        }
        
        .article-featured-image {
            margin-top: 250px; /* Ajusté pour les mobiles */
        }
        
        .suggested-articles .articles-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<?php include 'includes/footer.php'; ?>
