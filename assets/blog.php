<?php
/**
 * Page de blog
 */
require_once 'config.php';
require_once 'includes/components.php';
require_once 'data/blog.php';

$pageTitle = 'Blog';
include 'includes/header.php';

// Récupérer tous les articles
$articles = getAllArticles();

// Récupérer les catégories pour le filtre
$categories = getCategories();

// Filtrer par catégorie si demandé
$categoryFilter = isset($_GET['category']) ? $_GET['category'] : null;
if ($categoryFilter) {
    $articles = getArticlesByCategory($categoryFilter);
}
?>

<main>
    <section class="blog-header">
        <div class="container">
            <h1 class="section-title">Notre Blog</h1>
            <p class="blog-description">Découvrez nos derniers articles, conseils et actualités sur le reconditionnement informatique et les solutions durables pour les professionnels.</p>
            
            <!-- Filtres de catégories -->
            <div class="category-filters">
                <a href="blog.php" class="category-filter <?php echo !$categoryFilter ? 'active' : ''; ?>">Tous</a>
                <?php foreach ($categories as $category): ?>
                    <a href="blog.php?category=<?php echo urlencode($category); ?>" class="category-filter <?php echo $categoryFilter === $category ? 'active' : ''; ?>">
                        <?php echo $category; ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="blog-grid">
        <div class="container">
            <div class="articles-grid">
                <?php foreach ($articles as $article): ?>
                    <article class="blog-card">
                        <div class="blog-image">
                            <a href="article.php?slug=<?php echo $article['slug']; ?>">
                                <img src="<?php echo $article['image']; ?>" alt="<?php echo $article['title']; ?>" loading="lazy">
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
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Section CTA -->
    <section class="cta-section">
        <div class="container">
            <h2>Vous avez des questions sur nos services ?</h2>
            <p>Notre équipe est à votre disposition pour répondre à toutes vos questions sur nos solutions informatiques reconditionnées.</p>
            <div class="cta-buttons">
                <a href="contact.php" class="btn btn-primary">Nous contacter</a>
            </div>
        </div>
    </section>
</main>

<!-- Ajout de styles spécifiques pour le blog -->
<style>
    .blog-header {
        background-color: var(--color-bg-light);
        padding: 60px 0 40px;
        text-align: center;
    }
    
    .blog-description {
        max-width: 800px;
        margin: 0 auto 30px;
        color: var(--color-text-muted);
    }
    
    .category-filters {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 10px;
        margin-top: 30px;
    }
    
    .category-filter {
        padding: 8px 16px;
        border-radius: 30px;
        background-color: white;
        color: var(--color-text-muted);
        font-size: 14px;
        transition: all var(--transition-normal);
        box-shadow: 0 2px 5px var(--color-shadow-light);
    }
    
    .category-filter:hover, .category-filter.active {
        background-color: var(--color-primary);
        color: white;
    }
    
    .blog-grid {
        padding: 60px 0;
    }
    
    .articles-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
        gap: 30px;
    }
    
    .blog-card {
        background-color: white;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 3px 10px var(--color-shadow-light);
        transition: transform var(--transition-normal), box-shadow var(--transition-normal);
    }
    
    .blog-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px var(--color-shadow);
    }
    
    .blog-image {
        position: relative;
        height: 200px;
        overflow: hidden;
    }
    
    .blog-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform var(--transition-normal);
    }
    
    .blog-card:hover .blog-image img {
        transform: scale(1.05);
    }
    
    .blog-category {
        position: absolute;
        top: 15px;
        right: 15px;
        background-color: var(--color-primary);
        color: white;
        padding: 5px 10px;
        border-radius: 4px;
        font-size: 12px;
        font-weight: 500;
    }
    
    .blog-content {
        padding: 25px;
    }
    
    .blog-title {
        font-size: 18px;
        font-weight: 700;
        margin-bottom: 15px;
        line-height: 1.4;
    }
    
    .blog-title a {
        color: var(--color-bg-dark);
        text-decoration: none;
        transition: color var(--transition-normal);
    }
    
    .blog-title a:hover {
        color: var(--color-primary);
    }
    
    .blog-meta {
        display: flex;
        gap: 15px;
        font-size: 13px;
        color: var(--color-text-muted);
        margin-bottom: 15px;
    }
    
    .blog-meta i {
        margin-right: 5px;
    }
    
    .blog-excerpt {
        color: var(--color-text-muted);
        font-size: 14px;
        line-height: 1.6;
        margin-bottom: 20px;
    }
    
    .read-more {
        display: inline-flex;
        align-items: center;
        color: var(--color-primary);
        font-weight: 500;
        font-size: 14px;
        text-decoration: none;
        transition: color var(--transition-normal);
    }
    
    .read-more i {
        margin-left: 5px;
        transition: transform var(--transition-normal);
    }
    
    .read-more:hover {
        color: var(--color-primary-dark);
    }
    
    .read-more:hover i {
        transform: translateX(3px);
    }
    
    @media (max-width: 768px) {
        .articles-grid {
            grid-template-columns: 1fr;
        }
        
        .blog-header {
            padding: 40px 0 30px;
        }
    }
</style>

<?php include 'includes/footer.php'; ?>
