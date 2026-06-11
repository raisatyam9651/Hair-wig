<?php
require_once 'blog-data.php';

$slug = 'hair-patch-maintenance-tips';

// Find current blog post based on slug
$blog_post = null;
foreach ($blog_posts as $post) {
    if ($post['slug'] === $slug) {
        $blog_post = $post;
        break;
    }
}

if (!$blog_post) {
    die("Article not found.");
}

// Find current post index to resolve next/prev posts
$current_index = -1;
foreach ($blog_posts as $idx => $post) {
    if ($post['slug'] === $slug) {
        $current_index = $idx;
        break;
    }
}
$prev_post = ($current_index > 0) ? $blog_posts[$current_index - 1] : null;
$next_post = ($current_index < count($blog_posts) - 1) ? $blog_posts[$current_index + 1] : null;

// Find 3 other random posts for "Recent Articles" section
$other_posts = [];
$available_posts = array_filter($blog_posts, function($p) use ($slug) {
    return $p['slug'] !== $slug;
});
if (count($available_posts) > 3) {
    $random_keys = array_rand($available_posts, 3);
    foreach ($random_keys as $k) {
        $other_posts[] = $available_posts[$k];
    }
} else {
    $other_posts = array_values($available_posts);
}

$custom_head_links = '<meta name="robots" content="index, follow" />';
?>
<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title><?php echo htmlspecialchars($blog_post['title']); ?> | Growig Hair Solution</title>
    <meta content="<?php echo htmlspecialchars($blog_post['description']); ?>" name="description"/>
    <?php include __DIR__ . '/../header-code.php'; ?>
    <style>
        .blog-content h4 {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.5rem;
            color: var(--md-sys-color-primary, #4A3E3D);
            font-weight: 700;
            margin-top: 2rem;
            margin-bottom: 0.75rem;
        }
        .blog-content p {
            line-height: 1.8;
            margin-bottom: 1.5rem;
            color: var(--md-sys-color-on-surface-variant, #5c5555);
        }
        .blog-content a {
            color: #1a56db;
            text-decoration: underline;
            text-decoration-color: rgba(26, 86, 219, 0.3);
            text-underline-offset: 4px;
            font-weight: 600;
            transition: all 0.2s ease-in-out;
        }
        .blog-content a:hover {
            color: #1e40af;
            text-decoration-color: #1e40af;
            background-color: rgba(26, 86, 219, 0.05);
            border-radius: 4px;
            padding: 2px 4px;
            margin: -2px -4px;
        }
    </style>
</head>
<body class="bg-background text-on-background font-body-md selection:bg-primary-fixed-dim selection:text-on-primary-fixed">
<?php include __DIR__ . '/../header.php'; ?>
<main class="pt-20">
    <?php include __DIR__ . '/../breadcrumbs.php'; ?>
    
    <!-- Blog Hero -->
    <section class="py-12 bg-surface-container-low">
        <div class="max-w-[800px] mx-auto px-margin-mobile md:px-0 text-center">
            <span class="inline-block py-1 px-4 rounded-full bg-primary/10 text-primary font-label-md uppercase tracking-wider mb-6 text-xs"><?php echo htmlspecialchars($blog_post['category']); ?></span>
            <h1 class="font-display-lg text-3xl md:text-[40px] text-on-surface leading-tight text-balance mb-6 font-bold"><?php echo htmlspecialchars($blog_post['title']); ?></h1>
            <div class="flex items-center justify-center gap-6 text-sm text-on-surface-variant font-label-md">
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-[16px] text-primary">calendar_month</span>
                    <span><?php echo htmlspecialchars($blog_post['date']); ?></span>
                </div>
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-[16px] text-primary">schedule</span>
                    <span><?php echo htmlspecialchars($blog_post['read_time']); ?></span>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-16">
        <div class="max-w-[1280px] mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                <!-- Left: Article Content Column -->
                <div class="lg:col-span-8">
                    <!-- Featured Image -->
                    <div class="rounded-3xl overflow-hidden royal-shadow mb-12 border border-surface-variant/30">
                        <img src="../assets/hair-maintance.jpg" alt="<?php echo htmlspecialchars($blog_post['title']); ?>" class="w-full h-auto object-cover max-h-[450px]" />
                    </div>

                    <!-- Content Area -->
                    <article class="blog-content font-body-lg text-body-lg text-on-surface-variant leading-relaxed">
<p>A high-quality hair patch is an excellent investment in your confidence and style. However, because the hair in the system is not living and cannot absorb natural scalp oils, it requires careful care. The simple answer to increasing the lifespan of your hair patch is to establish a systematic daily and weekly maintenance routine, combined with a regular professional servicing schedule. This includes using specialized loop brushes, daily leave-in hydration, cool water washes, and strict 3-4 week re-bonding cycles.</p>

<p>By following a set of expert care tips, you can prevent hair dry-out, tangle mats, base tears, and premature shedding. This keeps your system soft, shiny, and natural-looking for months. In this article, our senior hair specialists share 15 expert maintenance tips to significantly increase the lifespan of your hair patch.</p>

<h4>1. Use a Loop Brush or Wide-Tooth Comb</h4>
<p>Standard fine-tooth combs are the main cause of hair shedding. The teeth catch on the base knots and pull the strands out. Always detangle your hair system using a loop brush or a wide-tooth comb. Loop brushes have nylon bristles looped in a circle, allowing them to glide smoothly over the base without catching the hand-tied knots. Always brush gently, starting from the tips and moving toward the roots.</p>

<h4>2. Sleep on a Silk or Satin Pillowcase</h4>
<p>Standard cotton pillowcases absorb moisture from the hair and create friction as you move your head. This friction causes tangling and weakens the hair knots. Switch to a silk or satin pillowcase. The smooth surface allows the hair to glide easily, preventing tangles and preserving the hair texture.</p>

<h4>3. Apply Leave-In Conditioner Daily</h4>
<p>Because your system hair cannot absorb natural oils, it becomes dry over time. Spray a light, water-soluble leave-in conditioner every morning. This hydrates the hair, prevents static flyaways, and shields the hair from daily environmental damage.</p>

<h4>4. Choose Sulfate-Free Shampoos</h4>
<p>Standard store-bought shampoos contain sulfates (sodium lauryl sulfate), which are harsh detergents that strip moisture from non-living hair strands, leaving them brittle and frizzy. Always choose gentle, sulfate-free shampoos designed specifically for hair systems. It is also important to visit a professional center for a deep <a href="../maintenance-and-styling">hair patch cleaning in Dwarka</a> to wash away styling residues safely.</p>

<h4>5. Never Scrub the Base</h4>
<p>When washing your hair patch, do not pile the hair on your head or rub it in circular motions. Scrubbing can tear the delicate lace or polyurethane base. Instead, apply lather to your palms and smooth it gently through the hair from the base to the tips in a downward direction.</p>

<h4>6. Wash with Cool or Lukewarm Water</h4>
<p>Hot water opens the hair cuticles, causing moisture to escape and making the hair dry. It also softens the bonding adhesive, causing the edges of your patch to lift. Always rinse and wash your system using cool or lukewarm water.</p>

<h4>7. Pat Dry, Don\'t Rub with a Towel</h4>
<p>After showering, wrap your head in a soft microfiber towel and pat gently to absorb excess water. Never rub or twist the hair with a towel. Friction from rubbing creates massive tangles and pulls strands out of the base.</p>

<h4>8. Blow-Dry on a Cool Setting</h4>
<p>Excessive heat from blow-dryers damages hair fibers and weakens base materials. If you use a hair dryer, always set it to the cool air mode. Keep the dryer a few inches away from your head, guiding the hair into shape gently.</p>

<h4>9. Limit Styling Heat Tools</h4>
<p>Limit the use of hot curlers, straighteners, and styling irons on your hair patch. The extreme heat can burn the cuticles, leading to permanent dryness and breakage. If you must use a heat tool, apply a heat-protective spray first and set the tool to its lowest temperature.</p>

<h4>10. Protect the Hair from UV Sun Rays</h4>
<p>Direct sunlight causes the hair color to oxidize, turning black or dark brown hair reddish-orange (called brassiness). Wear a hat when outdoors for long periods, or apply a hair serum with UV filters to block sun damage.</p>

<h4>11. Avoid Alcohol-Based Styling Products</h4>
<p>Standard hair gels and hairsprays often contain alcohol, which dries out the hair fibers. Choose water-soluble pomades, styling creams, and alcohol-free sprays. These products are easy to rinse out and do not leave heavy residues on the base.</p>

<h4>Handling Styling Products and Build-Up</h4>
<p>If you use styling products daily, they will build up on the hair fibers and base mesh. This build-up makes the hair look dull, dry, and heavy. It can also seep under the edges, weakening the adhesive bond. To prevent this, always select light, water-soluble products that wash away easily with water. Avoid heavy waxes, clays, and oily serums. When washing your system, ensure you rinse the perimeter carefully. If you notice a stubborn white residue along the edges, do not scrub it. This is styling build-up mixed with adhesive. A professional <a href="../maintenance-and-styling">hair patch cleaning in Dwarka</a> will dissolve it safely using specialized removers without stressing the hair knots.</p>

<h4>Scalp Health and Itch Management</h4>
<p>Occasionally, system wearers experience minor itchiness, especially during hot, humid weather. This is usually caused by sweat trapped under the base or minor irritation from adhesive contact. Never use sharp combs, keys, or fingers to scratch through the patch. This can tear the base and pull the hair out. Instead, gently press your hand against the itchy spot to soothe it. To prevent itchiness, ensure your scalp is prepped with an anti-bacterial skin barrier during fitting. If the itch persists, it is a sign that sweat has built up under the base. Schedule an early maintenance appointment to clean your scalp and refresh the system, ensuring healthy skin.</p>

<h4>12. Maintain a Strict 3-4 Week Servicing Cycle</h4>
<p>Do not leave your hair patch bonded for more than 4 weeks. Over time, sweat, oil, and dead skin accumulate under the base. This traps bacteria, creates odors, and breaks down the adhesive, causing lifting. Schedule a professional <a href="../maintenance-and-styling">hair patch maintenance in Dwarka</a> every 3 to 4 weeks. A senior stylist will remove the system safely, treat your scalp, and perform a secure <a href="../hair-bonding">hair bonding in Dwarka</a>.</p>

<h4>13. Wear a Silk Cap Under Helmets</h4>
<p>If you ride a motorcycle, the constant movement of your helmet can pull the hair fibers and scratch the polyurethane base. Wear a silk skullcap under your helmet. The cap allows the helmet to slide on and off smoothly, protecting the hair system from friction.</p>

<h4>14. Shield the Hair Before Swimming</h4>
<p>Before swimming in a pool or the ocean, wet your system with fresh tap water and apply a light conditioner. This stops the hair from absorbing chlorine or salt water. Wear a swimming cap if possible, and rinse the hair with fresh water immediately after swimming.</p>

<h4>15. Do Not Pull at Wet or Sweaty Hair</h4>
<p>When the hair is wet or when you are sweating heavily, the adhesive bonds soften slightly. Do not check or pull at the edges of the patch during these times. Let the system cool down and dry naturally; the adhesive will cure again and restore its firm grip.</p>

<h4>Conclusion: Keep Your System Undetectable</h4>
<p>A well-maintained hair system is completely invisible and lasts for months. If you are exploring non-surgical systems, visiting our studio for a custom <a href="../non-surgical-replacement">non-surgical hair replacement in Dwarka</a> ensures you get a premium piece and detailed aftercare guides. Our stylists are always available to help you keep your patch in top condition.</p>

<p>To understand the lifespan of different system bases, read: <a href="how-long-does-hair-patch-last">How Long Does a Hair Patch Last? Maintenance & Care Guide</a>.</p>

<p>For answers to whether a hair patch can slide or fall off, check out: <a href="can-hair-patch-fall-off">Can a Hair Patch Fall Off? Everything You Need to Know</a>.</p>

                    </article>

                    <!-- Visual FAQ Accordion -->
                    <?php if (isset($blog_post['faqs']) && !empty($blog_post['faqs'])): ?>
                        <div class="mt-16 pt-8 border-t border-outline-variant/30">
                            <h3 class="font-display-lg text-2xl md:text-3xl text-on-surface font-bold mb-8">Frequently Asked Questions</h3>
                            <div class="space-y-4">
                                <?php foreach ($blog_post['faqs'] as $idx => $faq): ?>
                                    <details class="group glass-card p-6 rounded-2xl border border-primary/10 royal-shadow bg-[#fcf9f4]" <?php echo ($idx === 0) ? 'open' : ''; ?>>
                                        <summary class="list-none flex justify-between items-center cursor-pointer font-display-md text-base md:text-lg text-on-surface font-bold">
                                            <?php echo htmlspecialchars($faq['question']); ?>
                                            <span class="material-symbols-outlined group-open:rotate-180 transition-transform">expand_more</span>
                                        </summary>
                                        <div class="mt-4 font-body-md text-on-surface-variant leading-relaxed text-sm">
                                            <?php echo $faq['answer']; ?>
                                        </div>
                                    </details>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Next / Prev Article Pagination -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-16 pt-8 border-t border-outline-variant/30">
                        <div>
                            <?php if ($prev_post): ?>
                                <a href="./<?php echo htmlspecialchars($prev_post['slug']); ?>" class="group block p-6 rounded-2xl border border-outline-variant/30 hover:border-primary transition-all duration-300 bg-surface-container-low hover:bg-[#fcf9f4]">
                                    <span class="text-xs text-on-surface-variant font-label-md uppercase tracking-wider flex items-center gap-1 group-hover:text-primary transition-colors">
                                        <span class="material-symbols-outlined text-[14px]">arrow_back</span> Previous Article
                                    </span>
                                    <span class="block mt-2 font-display-md text-base text-on-surface font-bold line-clamp-1 group-hover:text-primary transition-colors"><?php echo htmlspecialchars($prev_post['title']); ?></span>
                                </a>
                            <?php endif; ?>
                        </div>
                        <div class="sm:text-right">
                            <?php if ($next_post): ?>
                                <a href="./<?php echo htmlspecialchars($next_post['slug']); ?>" class="group block p-6 rounded-2xl border border-outline-variant/30 hover:border-primary transition-all duration-300 bg-surface-container-low hover:bg-[#fcf9f4]">
                                    <span class="text-xs text-on-surface-variant font-label-md uppercase tracking-wider flex items-center gap-1 sm:justify-end group-hover:text-primary transition-colors">
                                        Next Article <span class="material-symbols-outlined text-[14px]">arrow_forward</span>
                                    </span>
                                    <span class="block mt-2 font-display-md text-base text-on-surface font-bold line-clamp-1 group-hover:text-primary transition-colors"><?php echo htmlspecialchars($next_post['title']); ?></span>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Bottom Share / Back -->
                    <div class="flex flex-col sm:flex-row justify-between items-center gap-6 mt-16 pt-8 border-t border-outline-variant/30">
                        <a href="./" class="inline-flex items-center gap-2 text-primary hover:text-primary-container font-label-md transition-colors">
                            <span class="material-symbols-outlined text-[18px]">arrow_back</span>
                            Back to all Blogs
                        </a>
                        <div class="flex items-center gap-4">
                            <span class="text-sm font-label-md text-on-surface-variant">Share this article:</span>
                            <a href="https://wa.me/?text=<?php echo urlencode($blog_post['title'] . ' - https://growighairsolution.com/blog/' . $blog_post['slug']); ?>" target="_blank" class="w-10 h-10 rounded-full bg-primary/5 hover:bg-primary/10 text-primary flex items-center justify-center transition-colors">
                                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12.012 2c-5.506 0-9.989 4.478-9.99 9.984a9.96 9.96 0 001.335 4.975L2 22l5.233-1.371a9.92 9.92 0 004.773 1.226h.005c5.505 0 9.988-4.479 9.989-9.985a9.96 9.96 0 00-2.925-7.062 9.92 9.92 0 00-7.063-2.787zm5.42 14.186c-.296.83-1.75 1.624-2.42 1.706-.607.075-1.397.086-2.262-.19-.54-.173-1.226-.454-2.09-.83-3.69-1.597-6.082-5.328-6.267-5.574-.185-.246-1.428-1.89-1.428-3.61 0-1.719.897-2.565 1.218-2.915.322-.35.706-.438.94-.438.236 0 .473.003.678.013.214.01.503-.082.786.598.293.705.998 2.422 1.085 2.597.087.175.146.378.03.61-.117.234-.176.38-.352.585-.175.204-.368.455-.526.61-.176.176-.36.368-.156.719.205.35.912 1.498 1.956 2.422 1.343 1.19 2.472 1.558 2.822 1.734.35.175.555.146.76-.088.205-.234.877-1.022 1.112-1.373.234-.35.467-.292.787-.175.321.117 2.037.962 2.387 1.137.35.175.584.263.67.41.088.146.088.847-.208 1.677z"/></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Right: Sticky CTA Sidebar Column -->
                <div class="lg:col-span-4">
                    <div class="sticky top-28 space-y-6">
                        <!-- Booking CTA Card -->
                        <div class="glass-card p-8 rounded-[32px] border border-primary/20 royal-shadow bg-[#fcf9f4] text-center space-y-6">
                            <span class="material-symbols-outlined text-primary text-5xl" data-icon="support_agent">support_agent</span>
                            <h3 class="font-headline-md text-on-surface font-bold text-xl">Free Scalp Consultation</h3>
                            <p class="text-sm text-on-surface-variant leading-relaxed">
                                Speak with our Dwarka hair experts. Get a personalized analysis and quote for your customized hair patch or wig system.
                            </p>
                            <a href="../contact" class="block w-full bg-primary text-white py-4 rounded-full font-label-md hover:bg-primary-container hover:scale-[1.02] active:scale-[0.98] transition-all royal-shadow uppercase tracking-wider text-sm font-bold text-center">Book Free Session</a>
                            <div class="pt-4 border-t border-outline-variant/30 flex items-center justify-center gap-3">
                                <span class="material-symbols-outlined text-primary" data-icon="call">call</span>
                                <a href="tel:+918766216564" class="font-bold text-on-surface hover:text-primary transition-colors text-sm">+91 87662 16564</a>
                            </div>
                        </div>

                        <!-- Sidebar Quick Links -->
                        <div class="glass-card p-8 rounded-[32px] border border-outline-variant/30 bg-[#fcf9f4] space-y-4">
                            <h4 class="font-headline-md text-on-surface font-bold text-base uppercase tracking-wider border-b border-outline-variant/30 pb-2">Our Services</h4>
                            <ul class="space-y-3">
                                <li><a href="../premium-hair-patch" class="text-sm text-on-surface-variant hover:text-primary transition-colors flex items-center gap-2 font-medium">✨ Premium Hair Patch</a></li>
                                <li><a href="../full-hair-wig" class="text-sm text-on-surface-variant hover:text-primary transition-colors flex items-center gap-2 font-medium">👑 Full Hair Wigs</a></li>
                                <li><a href="../non-surgical-replacement" class="text-sm text-on-surface-variant hover:text-primary transition-colors flex items-center gap-2 font-medium">🔬 Non-Surgical Replacement</a></li>
                                <li><a href="../hair-bonding" class="text-sm text-on-surface-variant hover:text-primary transition-colors flex items-center gap-2 font-medium">🔒 Hair Bonding</a></li>
                                <li><a href="../maintenance-and-styling" class="text-sm text-on-surface-variant hover:text-primary transition-colors flex items-center gap-2 font-medium">✂️ Maintenance & Styling</a></li>
                                <li><a href="../custom-hairline-design" class="text-sm text-on-surface-variant hover:text-primary transition-colors flex items-center gap-2 font-medium">📐 Custom Hairline Design</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Recent Articles -->
    <section class="py-16 bg-surface-container-low">
        <div class="max-w-[1280px] mx-auto px-margin-mobile md:px-margin-desktop">
            <h3 class="font-display-lg text-2xl md:text-[32px] text-on-surface text-center mb-12 font-bold">Recent Articles</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php foreach ($other_posts as $post): ?>
                    <div class="glass-card rounded-3xl overflow-hidden royal-shadow border border-primary/5 hover:-translate-y-2 transition-all duration-300 flex flex-col h-full bg-[#fcf9f4]">
                        <div class="relative h-48 w-full overflow-hidden">
                            <img src="../assets/hair-maintance.jpg" alt="<?php echo htmlspecialchars($post['title']); ?>" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105" />
                            <span class="absolute top-4 left-4 bg-primary text-white text-[10px] font-label-md px-3 py-1 rounded-full uppercase tracking-wider"><?php echo htmlspecialchars($post['category']); ?></span>
                        </div>
                        <div class="p-6 flex flex-col justify-between flex-grow">
                            <div>
                                <div class="text-xs text-on-surface-variant font-label-md mb-2"><?php echo htmlspecialchars($post['date']); ?></div>
                                <h4 class="font-display-md text-lg text-on-surface font-bold line-clamp-2 mb-3 leading-snug"><a href="./<?php echo htmlspecialchars($post['slug']); ?>" class="hover:text-primary transition-colors"><?php echo htmlspecialchars($post['title']); ?></a></h4>
                                <p class="text-xs text-on-surface-variant line-clamp-3 mb-4 leading-relaxed"><?php echo htmlspecialchars($post['excerpt']); ?></p>
                            </div>
                            <a href="./<?php echo htmlspecialchars($post['slug']); ?>" class="inline-flex items-center gap-1.5 text-xs text-primary hover:text-primary-container font-label-md transition-colors mt-auto font-bold uppercase tracking-wider">
                                Read Article
                                <span class="material-symbols-outlined text-[14px]">arrow_forward</span>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>
<?php include __DIR__ . '/../footer.php'; ?>
</body>
</html>
