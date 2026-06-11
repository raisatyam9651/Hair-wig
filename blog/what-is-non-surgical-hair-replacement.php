<?php
require_once 'blog-data.php';

$slug = 'what-is-non-surgical-hair-replacement';

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
<p>If you are experiencing hair loss, you might be looking for ways to get your hair back. You may have heard about <strong>non-surgical hair replacement</strong>. The simple answer is that it is a safe, painless process where a customized hair system made of 100% real human hair is secured to your scalp. It covers bald areas completely and blends with your remaining hair, giving you a full head of natural-looking hair without any surgical cuts or needles.</p>

<p>For beginners, the world of hair systems can seem confusing. You might wonder how it stays on, how long it lasts, or if it looks fake. In this complete guide, we will answer all these questions in easy words. You will learn how modern technology has made these systems virtually invisible, allowing you to live a normal, active life with full confidence.</p>

<h4>How Does Non-Surgical Hair Replacement Work?</h4>
<p>Unlike a surgery that attempts to regrow hair from your follicles, non-surgical hair replacement uses a high-quality hair system. The process is custom-tailored for every individual and follows five simple steps:</p>

<h5>1. Scalp Mapping and Analysis</h5>
<p>First, a senior stylist examines your scalp. They measure the exact area of hair loss and create a template of your head. They also analyze your natural hair, noting the color, texture, thickness, and how it flows. This ensures the new hair matches yours perfectly.</p>

<h5>2. Custom System Selection</h5>
<p>Next, you choose the base material and hair type. Modern bases are made of micro-mesh lace or thin polyurethane membranes that look like real skin. Real human hair is hand-tied to this base, replicating natural hair growth patterns. If you need complete coverage, you can choose a premium <a href="../full-hair-wig">hair wig in Dwarka</a> tailored to your scalp size.</p>

<h5>3. Scalp Preparation</h5>
<p>Before fitting the system, the stylist prepares your scalp. They wash it, shave any thinning hair in the attachment area, and clean the skin. They then apply a skin barrier to protect your scalp and block sweat, ensuring the adhesive holds securely.</p>

<h5>4. Secure Attachment</h5>
<p>The stylist attaches the system to your scalp. Depending on your needs, they will use medical-grade liquid adhesives, double-sided tapes, or specialized clips. If you choose bonding, experts perform a secure <a href="../hair-bonding">hair bonding in Dwarka</a> to give you a long-lasting hold.</p>

<h5>5. Cutting and Styling</h5>
<p>The final step is the most important. The stylist cuts the system's hair and blends it with your own natural hair on the sides and back. They style it according to your preferences, making the transition completely invisible.</p>

<h4>Custom vs. Stock Hair Systems</h4>
<p>When you start your hair replacement journey, you will find two categories: stock systems and custom systems. Stock systems are pre-made in standard sizes, colors, and densities. They are cheaper and available immediately. However, because they are not made for your head, they may not fit perfectly and might require extensive trimming, which can weaken the edges of the base.</p>
<p>Custom hair systems are designed specifically for you. The studio creates a mold of your scalp, matching its contours, curves, and dips. They match the hair color to your natural shade, including any percentage of gray hair. They also customize the density, ensuring the hair is thinner at the temples and thicker at the crown, just like natural hair. While custom systems cost more and take a few weeks to prepare, they look incredibly realistic and last much longer because the base is not stressed by bad fits.</p>

<h4>Choosing the Right Hair Quality: Remy Human Hair</h4>
<p>The quality of the hair used in your system determines how it moves and feels. Cheap systems use synthetic fibers or acid-treated animal hair, which feel coarse and tangle easily. Mid-grade systems use processed human hair that has had its cuticle layer stripped. This hair looks shiny initially but becomes dry and frizzy after a few washes.</p>
<p>Premium hair systems use 100% Remy human hair. In Remy hair, all the hair cuticles run in the same direction, from root to tip. This prevents tangling, keeps the hair soft and smooth, and allows it to flow naturally in the wind. You can wash, condition, style, blow-dry, and even dye Remy hair systems just like your natural growing hair. When you visit a professional <a href="../premium-hair-patch">hair patch studio in Dwarka</a>, ensure they use Remy hair systems for the best results.</p>

<h4>Types of Hair System Bases</h4>
<p>The base is the foundation of your hair system. Different bases suit different lifestyles and comfort levels. Here are the three main types:</p>

<h5>1. Lace Bases (Swiss and French Lace)</h5>
<p>Lace bases are made of a very fine, breathable mesh. They are extremely lightweight and allow heat and sweat to escape easily. When placed on the scalp, the lace becomes completely transparent. This base is ideal for active people, hot climates, and exposed hairlines.</p>

<h5>2. Polyurethane (Skin) Bases</h5>
<p>Poly bases look and feel like a second skin. They are made of a thin silicone-like membrane. Tapes and glues stick very well to poly bases, making them easy to clean and re-bond. They are durable but less breathable than lace systems.</p>

<h5>3. Monofilament Bases</h5>
<p>Monofilament uses a stronger, slightly thicker mesh material. It is highly durable and can hold more hair density. It is excellent for people who want a thick, long-lasting hair system, though it is less invisible at the hairline than lace.</p>

<h4>Why Choose Non-Surgical Hair Replacement?</h4>
<p>There are many reasons why millions of people choose non-surgical systems over surgical hair transplants. Let us look at the top benefits:</p>

<ul>
    <li><strong>Immediate Results:</strong> You get a full head of hair in a single 90-minute appointment. There is no waiting for months to see growth.</li>
    <li><strong>Zero Pain or Risks:</strong> Since there is no surgery, you do not have to worry about needles, cuts, scars, infections, or side effects from hair loss pills.</li>
    <li><strong>100% Reversible:</strong> If you decide you do not want it anymore, the system can be removed easily without any permanent changes to your head.</li>
    <li><strong>Completely Customizable:</strong> You can choose your hair length, style, density, and color. You can get the exact look you want, regardless of how advanced your hair loss is.</li>
</ul>

<h4>Managing Your Active Daily Life</h4>
<p>A common concern for beginners is whether a hair system will restrict their lifestyle. Thanks to modern waterproof adhesives, you can lead a completely active life. You can run, lift weights, shower, and swim in pools. The system is bonded securely and will not slide off. You can style the hair using normal water-soluble styling creams and comb it just like natural hair.</p>

<p>However, to keep the system looking fresh, you must follow a routine. This includes gentle daily brushing, weekly washing with sulfate-free shampoos, and scheduling regular <a href="../maintenance-and-styling">hair patch maintenance in Dwarka</a> every 3 to 4 weeks to clean your scalp and refresh the adhesive.</p>

<h4>Understanding the Investment</h4>
<p>While the initial cost of a non-surgical hair system is highly affordable, it is not a permanent, zero-maintenance solution. Hair systems wear out over time because the hair does not grow or receive natural scalp oils. A high-quality human hair patch typically lasts between 6 to 10 months. You will need to replace the system periodically and budget for monthly maintenance services. This is still a fraction of the cost of multiple hair transplant surgeries.</p>

<p>To understand the differences in procedures and long-term costs, you can read our comparison: <a href="hair-patch-vs-transplant">Hair Patch vs Hair Transplant: Which Is Better for Hair Loss?</a>.</p>

<p>If you are ready to learn about how long these systems last and how to maximize their lifespan, check out our guide: <a href="how-long-does-hair-patch-last">How Long Does a Hair Patch Last? Maintenance & Care Guide</a>.</p>

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
