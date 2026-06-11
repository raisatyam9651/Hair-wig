<?php
require_once 'blog-data.php';

$slug = 'how-long-does-hair-patch-last';

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
<p>If you are planning to get a hair patch, you naturally want to know: <strong>how long does a hair patch last?</strong> The simple answer is that a high-quality human hair patch typically lasts between 6 to 10 months. Some thicker systems can last up to a year, while very delicate, ultra-thin lace systems may need replacement after 4 to 6 months. The exact lifespan depends on the base material, the quality of the hair, your skin type, and how well you care for it daily.</p>

<p>A hair patch is a non-surgical solution, meaning the hair is not growing and does not receive natural oils from your scalp. Over time, the hair strands will dry out, thin, and shed. However, with the right maintenance routine, you can maximize the durability of your system. In this guide, we will explain the factors that affect a hair patch's lifespan and share expert care tips to keep your system looking fresh for months.</p>

<h4>Key Factors That Affect Hair Patch Durability</h4>
<p>Not all hair patches are created equal. Several variables determine how quickly a system wears out:</p>

<h5>1. The Base Material</h5>
<p>The base is the mesh or membrane that holds the hair. There is a direct trade-off between natural appearance and durability:</p>
<ul>
    <li><strong>Lace Bases:</strong> Swiss and French lace are breathable and look completely natural because they disappear on the scalp. However, because lace is a delicate thread mesh, it can tear or stretch over time. Lace systems typically last 4 to 6 months.</li>
    <li><strong>Polyurethane (Skin) Bases:</strong> These are thin silicone membranes. They are durable, easy to clean, and grip adhesives very well. Thinner skin bases last 4 to 6 months, while thicker skin systems can last 6 to 9 months.</li>
    <li><strong>Monofilament Bases:</strong> This is a thicker, stronger polyester mesh. It is highly durable and can hold more hair density. Monofilament systems are the longest-lasting, often remaining usable for 9 to 12 months, though they are less breathable and less invisible at the hairline.</li>
</ul>

<h5>2. Hair Quality</h5>
<p>Wigs and patches made from cheap synthetic hair or heavily processed human hair degrade quickly, becoming frizzy and tangled after a few washes. Premium systems made from 100% Remy human hair last much longer because the hair cuticles are intact and aligned in the same direction, reducing tangling and shedding.</p>

<h5>3. Scalp Skin Type and Climate</h5>
<p>Your body chemistry plays a role. If you have very oily skin or sweat heavily, the natural oils and perspiration will break down the adhesives faster. This requires more frequent removals and cleanings, which puts wear and tear on the base. Similarly, living in a hot, humid environment like Dwarka means you must take extra steps to manage sweat and heat.</p>

<h4>Daily Care Routines to Extend System Lifespan</h4>
<p>Daily habits make a massive difference in preventing hair shedding and base damage. Follow these simple daily rules:</p>

<h5>1. Detangle with the Right Brush</h5>
<p>Never use a standard comb with fine teeth, which can catch on the base knots and pull the hair out. Use a wide-toothed comb or a specialized loop brush. Loop brushes have looped nylon bristles that slide over the base without catching the knots. Always brush gently, starting from the tips and working up to the roots.</p>

<h5>2. Use Leave-In Conditioner</h5>
<p>Because the system hair does not receive sebum from your scalp, it becomes dry. Spray a light, silicone-free leave-in conditioner every morning to lock in moisture and keep the hair soft. This prevents friction tangles that lead to shedding.</p>

<h5>3. Sleep on Silk or Satin</h5>
<p>Standard cotton pillowcases create friction as you move your head at night, drying out the hair and causing tangles. Switch to a silk or satin pillowcase. Silk allows the hair to glide smoothly, preventing tangles and preserving the hair texture.</p>

<h4>Weekly Washing Rules for Hair Systems</h4>
<p>Washing your hair patch correctly prevents product build-up and keeps the hair looking vibrant. Follow these washing instructions:</p>

<ul>
    <li><strong>Use Sulfate-Free Products:</strong> Sulfates are harsh detergents that strip moisture. Always choose sulfate-free shampoos and deep conditioners designed for hair systems.</li>
    <li><strong>Use Cool Water:</strong> Hot water opens the hair cuticles, leading to dryness, and weakens the adhesive bonds on the base. Always wash with cool or lukewarm water.</li>
    <li><strong>Wash Gently:</strong> Never scrub or rub the hair. Smooth the shampoo lather through the hair in a downward direction, following the flow of the hair.</li>
    <li><strong>Pat Dry:</strong> After rinsing, wrap your head in a soft microfiber towel and pat dry. Avoid rubbing the hair with the towel, which causes tangles and shedding.</li>
    <li><strong>Cool Blow-Drying:</strong> If you use a hair dryer, set it to the cool air mode. Excess heat dries out the hair and can damage the delicate base membrane.</li>
</ul>

<h4>The Importance of Professional Maintenance</h4>
<p>While daily home care is vital, you cannot perform deep base cleaning and secure re-bonding by yourself. You must schedule professional <a href="../maintenance-and-styling">hair patch maintenance in Dwarka</a> every 3 to 4 weeks. During these visits, a senior stylist will:</p>
<ol>
    <li>Gently dissolve the old adhesive using skin-safe organic solvents to remove the system without damaging the base.</li>
    <li>Perform a thorough, deep-cleansing <a href="../maintenance-and-styling">hair patch cleaning in Dwarka</a> to wash away sweat, oil, and glue residue from both your scalp and the system base.</li>
    <li>Exfoliate and treat your scalp to maintain skin health.</li>
    <li>Re-apply fresh, medical-grade adhesives for a secure <a href="../hair-bonding">hair bonding in Dwarka</a>.</li>
    <li>Trim and blend your natural side hair with the patch to keep your look seamless and fresh.</li>
</ol>
<p>Skipping these sessions can cause sweat build-up, scalp odor, skin irritation, and permanent damage to the base material, shortening the system's lifespan significantly.</p>

<h4>Signs Your Hair Patch Needs Replacement</h4>
<p>Even with perfect care, a hair patch will eventually reach the end of its useful life. It is important to know the signs so you can order a replacement before the system looks obvious or worn out. Look for these key indicators:</p>
<ul>
    <li><strong>Shedding and Bald Spots:</strong> Hair patches do not grow new hair. Every strand that falls out leaves a permanent thin spot. If you start seeing the base mesh through the hair, or notice localized bald spots, the patch needs replacement.</li>
    <li><strong>Irreparable Base Damage:</strong> If the lace base has frayed, stretched, or torn, or if the polyurethane skin has cracked, the system will not sit flat against your scalp. This can cause the edges to lift and look unnatural.</li>
    <li><strong>Texture Degradation:</strong> If the hair feels dry, rough, and tangles constantly despite deep conditioning, the hair cuticles have worn away. The hair will look frizzy and behave unnaturally.</li>
</ul>

<h4>Seasonal Care: Summer vs. Winter</h4>
<p>Different seasons present unique challenges for hair system longevity. In the hot summers of Dwarka, high temperatures and direct sunlight can cause sweat build-up and fade the hair color. UV rays oxidize the hair pigments, turning black or brown hair reddish-orange. To prevent this, wear a hat when outdoors for long periods or apply a hair serum with UV protection. You may also need to increase the frequency of your maintenance visits to clean sweat and prevent adhesive breakdown.</p>
<p>In winter, dry air can rob the hair of moisture, making it static and brittle. Increase the use of leave-in conditioners and apply a deep moisturizing mask once a week. Keep the system hydrated to prevent hair breakage and maintain a soft, silky feel.</p>

<p>To learn more about how to live normally with a hair system, read our guide: <a href="sleep-swim-exercise-with-hair-patch">Can You Sleep, Swim & Exercise with a Hair Patch?</a>.</p>

<p>For more detailed maintenance instructions, check out: <a href="hair-patch-maintenance-tips">Hair Patch Maintenance: 15 Expert Tips to Increase Lifespan</a>.</p>

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
