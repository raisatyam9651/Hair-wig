<?php
require_once 'blog-data.php';

// Category Filtering
$categories = ['All', 'Maintenance', 'Buying Guide', 'Comparison', 'Cost Guide', 'Styling', 'Scalp Care', 'Adhesives', 'Lifestyle'];
$selected_category = isset($_GET['category']) && in_array($_GET['category'], $categories) ? $_GET['category'] : 'All';

$filtered_posts = $blog_posts;
if ($selected_category !== 'All') {
    $filtered_posts = array_filter($blog_posts, function($post) use ($selected_category) {
        return $post['category'] === $selected_category;
    });
}

// Pagination Setup
$posts_per_page = 9;
$total_posts = count($filtered_posts);
$total_pages = max(1, ceil($total_posts / $posts_per_page));

$blog_current_page = isset($_GET['page']) ? max(1, min($total_pages, intval($_GET['page']))) : 1;
$offset = ($blog_current_page - 1) * $posts_per_page;
$display_posts = array_slice($filtered_posts, $offset, $posts_per_page);

$custom_head_links = '<meta name="robots" content="index, follow" />';
?>
<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Expert Hair Patch & Wig Care Blogs | Growig Hair Solution</title>
    <meta content="Explore the latest blogs from Growig Hair Solution on hair patch maintenance, hair wig styling, cleaning, and non-surgical hair replacement in Dwarka." name="description"/>
    <?php include __DIR__ . '/../header-code.php'; ?>
</head>
<body class="bg-background text-on-background font-body-md selection:bg-primary-fixed-dim selection:text-on-primary-fixed">
<?php include __DIR__ . '/../header.php'; ?>
<main class="pt-20">
    <?php include __DIR__ . '/../breadcrumbs.php'; ?>

    <!-- Blog Header Section -->
    <section class="py-12 bg-surface-container-low text-center">
        <div class="max-w-[1280px] mx-auto px-margin-mobile md:px-margin-desktop">
            <span class="inline-block py-1 px-4 rounded-full bg-primary/10 text-primary font-label-md uppercase tracking-wider mb-4 text-xs">Knowledge Center</span>
            <h1 class="font-display-lg text-3xl md:text-[44px] text-on-surface leading-tight text-balance mb-4 font-bold">Latest Blogs &amp; Articles</h1>
            <p class="font-body-lg text-on-surface-variant max-w-2xl mx-auto leading-relaxed">
                Explore expert advice, care routines, styling tips, and the latest trends from Growig Hair Solution.
            </p>
        </div>
    </section>

    <!-- Category Pills Filter -->
    <section class="py-6 border-b border-surface-variant/30">
        <div class="max-w-[1280px] mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="flex flex-wrap items-center justify-center gap-3">
                <?php foreach ($categories as $cat): ?>
                    <?php 
                    $cat_url = '?category=' . urlencode($cat);
                    $is_active = ($selected_category === $cat);
                    ?>
                    <a href="<?php echo $cat_url; ?>" class="px-4 py-2 rounded-full text-xs font-label-md transition-all duration-300 border <?php echo $is_active ? 'bg-primary border-primary text-white shadow-sm' : 'border-outline hover:bg-surface-container hover:text-primary'; ?>">
                        <?php echo htmlspecialchars($cat); ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Blog Posts Grid (3x3 Layout) -->
    <section class="py-16">
        <div class="max-w-[1280px] mx-auto px-margin-mobile md:px-margin-desktop">
            <?php if (empty($display_posts)): ?>
                <div class="text-center py-12">
                    <span class="material-symbols-outlined text-primary text-5xl mb-4">search_off</span>
                    <h3 class="font-headline-md text-on-surface mb-2">No articles found</h3>
                    <p class="text-on-surface-variant">Try selecting a different category filter.</p>
                </div>
            <?php else: ?>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php foreach ($display_posts as $post): ?>
                        <div class="glass-card rounded-3xl overflow-hidden royal-shadow border border-primary/5 hover:-translate-y-2 transition-all duration-300 flex flex-col h-full bg-[#fcf9f4]">
                            <!-- Card Image -->
                            <div class="relative h-56 w-full overflow-hidden">
                                <img src="../assets/hair-maintance.jpg" alt="<?php echo htmlspecialchars($post['title']); ?>" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105" />
                                <span class="absolute top-4 left-4 bg-primary text-white text-[10px] font-label-md px-3 py-1 rounded-full uppercase tracking-wider"><?php echo htmlspecialchars($post['category']); ?></span>
                            </div>
                            <!-- Card Body -->
                            <div class="p-6 flex flex-col justify-between flex-grow">
                                <div>
                                     <div class="text-xs text-on-surface-variant font-label-md mb-2"><?php echo htmlspecialchars($post['date']); ?></div>
                                    <h3 class="font-display-md text-lg text-on-surface font-bold line-clamp-2 mb-3 leading-snug">
                                        <a href="./<?php echo htmlspecialchars($post['slug']); ?>" class="hover:text-primary transition-colors"><?php echo htmlspecialchars($post['title']); ?></a>
                                    </h3>
                                    <p class="text-sm text-on-surface-variant line-clamp-3 mb-4 leading-relaxed"><?php echo htmlspecialchars($post['excerpt']); ?></p>
                                </div>
                                <!-- Action Link -->
                                <a href="./<?php echo htmlspecialchars($post['slug']); ?>" class="inline-flex items-center gap-1.5 text-xs text-primary hover:text-primary-container font-label-md transition-colors mt-auto font-bold uppercase tracking-wider">
                                    Read Article
                                    <span class="material-symbols-outlined text-[14px]">arrow_forward</span>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Pagination Section -->
                <?php if ($total_pages >= 1): ?>
                    <div class="flex items-center justify-center gap-4 mt-16">
                        <!-- Prev Button -->
                        <?php if ($blog_current_page > 1): ?>
                            <a href="?category=<?php echo urlencode($selected_category); ?>&page=<?php echo $blog_current_page - 1; ?>" class="w-10 h-10 rounded-full border border-outline flex items-center justify-center text-secondary hover:text-primary hover:border-primary transition-colors">
                                <span class="material-symbols-outlined text-[18px]">chevron_left</span>
                            </a>
                        <?php else: ?>
                            <span class="w-10 h-10 rounded-full border border-outline-variant/30 flex items-center justify-center text-outline-variant cursor-not-allowed">
                                <span class="material-symbols-outlined text-[18px]">chevron_left</span>
                            </span>
                        <?php endif; ?>

                        <!-- Page Numbers -->
                        <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                            <a href="?category=<?php echo urlencode($selected_category); ?>&page=<?php echo $i; ?>" class="w-10 h-10 rounded-full flex items-center justify-center font-label-md text-sm transition-all <?php echo ($blog_current_page === $i) ? 'bg-primary text-white shadow-sm' : 'border border-outline text-secondary hover:text-primary hover:border-primary'; ?>">
                                <?php echo $i; ?>
                            </a>
                        <?php endfor; ?>

                        <!-- Next Button -->
                        <?php if ($blog_current_page < $total_pages): ?>
                            <a href="?category=<?php echo urlencode($selected_category); ?>&page=<?php echo $blog_current_page + 1; ?>" class="w-10 h-10 rounded-full border border-outline flex items-center justify-center text-secondary hover:text-primary hover:border-primary transition-colors">
                                <span class="material-symbols-outlined text-[18px]">chevron_right</span>
                            </a>
                        <?php else: ?>
                            <span class="w-10 h-10 rounded-full border border-outline-variant/30 flex items-center justify-center text-outline-variant cursor-not-allowed">
                                <span class="material-symbols-outlined text-[18px]">chevron_right</span>
                            </span>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </section>
</main>
<?php include __DIR__ . '/../footer.php'; ?>
</body>
</html>
