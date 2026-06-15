<?php
require_once 'blog-data.php';

$slug = 'hair-patch-price-in-dwarka';

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

$current_index = -1;
foreach ($blog_posts as $idx => $post) {
    if ($post['slug'] === $slug) {
        $current_index = $idx;
        break;
    }
}
$prev_post = ($current_index > 0) ? $blog_posts[$current_index - 1] : null;
$next_post = ($current_index < count($blog_posts) - 1) ? $blog_posts[$current_index + 1] : null;

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
    <meta name="keywords" content="hair patch price in dwarka, hair patch cost dwarka, hair patch price delhi, how much does hair patch cost" />
    <?php include __DIR__ . '/../header-code.php'; ?>
    <style>
        .blog-content h4 { font-family: 'Cormorant Garamond', serif; font-size: 1.5rem; color: var(--md-sys-color-primary, #4A3E3D); font-weight: 700; margin-top: 2rem; margin-bottom: 0.75rem; }
        .blog-content p { line-height: 1.8; margin-bottom: 1.5rem; color: var(--md-sys-color-on-surface-variant, #5c5555); }
        .blog-content a { color: #1a56db; text-decoration: underline; text-decoration-color: rgba(26, 86, 219, 0.3); text-underline-offset: 4px; font-weight: 600; transition: all 0.2s ease-in-out; }
        .blog-content a:hover { color: #1e40af; text-decoration-color: #1e40af; background-color: rgba(26, 86, 219, 0.05); border-radius: 4px; padding: 2px 4px; margin: -2px -4px; }
        .price-table { width: 100%; border-collapse: collapse; margin: 1.5rem 0; border-radius: 12px; overflow: hidden; }
        .price-table th { background: #735b25; color: white; padding: 12px 16px; text-align: left; font-size: 0.875rem; }
        .price-table td { padding: 12px 16px; border-bottom: 1px solid #e5e5e5; font-size: 0.875rem; }
        .price-table tr:nth-child(even) { background: #faf8f5; }
    </style>
</head>
<body class="bg-background text-on-background font-body-md selection:bg-primary-fixed-dim selection:text-on-primary-fixed">
<?php include __DIR__ . '/../header.php'; ?>
<main class="pt-20">
    <?php include __DIR__ . '/../breadcrumbs.php'; ?>
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
    <section class="py-16">
        <div class="max-w-[1280px] mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                <div class="lg:col-span-8">
                    <div class="rounded-3xl overflow-hidden royal-shadow mb-12 border border-surface-variant/30">
                        <img src="../assets/hair-maintance.jpg" alt="<?php echo htmlspecialchars($blog_post['title']); ?>" class="w-full h-auto object-cover max-h-[450px]" />
                    </div>
                    <article class="blog-content font-body-lg text-body-lg text-on-surface-variant leading-relaxed">
<p>One of the first questions people ask about hair patches is about cost. Understanding hair patch prices in Dwarka helps you budget wisely. The price depends on the base material, hair quality, and the brand you choose. This guide breaks down all costs so there are no surprises.</p>

<p>Non-surgical hair replacement is far more affordable than surgery. A FUE transplant can cost four to six times more than a premium hair patch. With regular maintenance, a patch provides excellent value over its lifespan. Here is a complete cost breakdown.</p>

<h4>What Determines the Price of a Hair Patch?</h4>
<p>Several factors influence the final cost of your hair patch system. The base material is the biggest factor. Lace bases are lighter and more natural but less durable. Polyurethane skin bases are stronger and hold adhesive better. Monofilament bases offer the most realistic scalp appearance.</p>

<p>Hair quality also matters significantly. Indian Remy human hair is the standard for most patches. European hair is finer and more expensive. The density you choose (light, medium, or heavy) affects the amount of hair used. Custom-made systems cost more than stock patches because they are built to your exact measurements.</p>

<h4>Price Ranges by Base Type</h4>
<table class="price-table">
<tr><th>Base Type</th><th>Price Range (INR)</th><th>Lifespan</th><th>Best For</th></tr>
<tr><td>Standard Lace</td><td>5,000 - 8,000</td><td>4-6 months</td><td>Budget-conscious users</td></tr>
<tr><td>Swiss Lace</td><td>8,000 - 15,000</td><td>4-6 months</td><td>Natural hairline appearance</td></tr>
<tr><td>Polyurethane (Skin)</td><td>7,000 - 12,000</td><td>6-9 months</td><td>Active lifestyles</td></tr>
<tr><td>Monofilament</td><td>12,000 - 20,000</td><td>9-12 months</td><td>Realistic scalp look</td></tr>
<tr><td>Hybrid (Lace + Skin)</td><td>15,000 - 25,000</td><td>6-10 months</td><td>Best of both worlds</td></tr>
<tr><td>Premium Custom (BMW/Mirage)</td><td>18,000 - 30,000</td><td>8-12 months</td><td>Premium daily wear</td></tr>
</table>

<h4>Monthly Maintenance Costs</h4>
<p>After the initial fitting, you need professional maintenance every 3 to 4 weeks. This is an important part of your budget. A typical maintenance visit includes base cleaning, adhesive removal, scalp exfoliation, re-bonding, and styling. The cost ranges from INR 1,000 to 2,500 per session.</p>

<p>Over a year, maintenance adds approximately INR 12,000 to 30,000 to your total cost. Some studios offer annual maintenance packages at a discounted rate. Ask your stylist about package deals during your consultation at our <a href="../premium-hair-patch">premium hair patch studio in Dwarka</a>.</p>

<h4>Total Annual Cost Comparison</h4>
<table class="price-table">
<tr><th>Cost Component</th><th>Budget Option</th><th>Premium Option</th></tr>
<tr><td>Initial System</td><td>INR 5,000 - 8,000</td><td>INR 15,000 - 25,000</td></tr>
<tr><td>Monthly Maintenance (12 months)</td><td>INR 12,000 - 18,000</td><td>INR 18,000 - 30,000</td></tr>
<tr><td>System Replacement (once/year)</td><td>INR 5,000 - 8,000</td><td>INR 15,000 - 25,000</td></tr>
<tr><td><strong>Total Year 1</strong></td><td><strong>INR 22,000 - 34,000</strong></td><td><strong>INR 48,000 - 80,000</strong></td></tr>
<tr><td><strong>Total Year 2+</strong></td><td><strong>INR 17,000 - 26,000</strong></td><td><strong>INR 33,000 - 55,000</strong></td></tr>
</table>

<h4>Hair Patch vs Hair Transplant: Cost Comparison</h4>
<p>A FUE hair transplant in Delhi costs INR 40,000 to 1,50,000 or more as a one-time surgical expense. Recovery takes 7 to 10 days. Results appear after 12 to 18 months. There is no guarantee of full density, and the procedure carries surgical risks.</p>

<p>A hair patch costs INR 22,000 to 55,000 per year. Results are instant (90 minutes). There is zero pain and zero surgical risk. You get guaranteed full density regardless of your baldness level. Over 5 years, a hair patch typically costs 40 to 60 percent less than a single transplant.</p>

<h4>How to Get the Best Value</h4>
<p>Book a free consultation at our Dwarka studio. We will assess your baldness pattern and recommend the most cost-effective system for your needs. We offer transparent pricing with no hidden charges. You get a complete cost breakdown before any commitment.</p>

<p>For active lifestyles, we recommend starting with a mid-range polyurethane system that balances cost and durability. For maximum naturalness, a Swiss lace or monofilament system provides the best appearance. Our experts will guide you to the right choice for your budget.</p>

<h4>Frequently Asked Questions About Hair Patch Cost</h4>
<p>Many people worry about hidden costs. Reputable studios provide a clear price list upfront. The main expenses are the system itself, monthly maintenance, and periodic replacement. There are no surprise charges if you choose a transparent provider.</p>

<p>If budget is a concern, start with a basic lace system. You can always upgrade to a premium system later. The important thing is to begin your hair restoration journey with a solution that fits your current budget.</p>
                    </article>

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

                <div class="lg:col-span-4">
                    <div class="sticky top-28 space-y-6">
                        <div class="glass-card p-8 rounded-[32px] border border-primary/20 royal-shadow bg-[#fcf9f4] text-center space-y-6">
                            <span class="material-symbols-outlined text-primary text-5xl" data-icon="support_agent">support_agent</span>
                            <h3 class="font-headline-md text-on-surface font-bold text-xl">Free Scalp Consultation</h3>
                            <p class="text-sm text-on-surface-variant leading-relaxed">
                                Speak with our Dwarka hair experts. Get a personalized analysis and quote for your customized hair patch system.
                            </p>
                            <a href="../contact" class="block w-full bg-primary text-white py-4 rounded-full font-label-md hover:bg-primary-container hover:scale-[1.02] active:scale-[0.98] transition-all royal-shadow uppercase tracking-wider text-sm font-bold text-center">Book Free Session</a>
                            <div class="pt-4 border-t border-outline-variant/30 flex items-center justify-center gap-3">
                                <span class="material-symbols-outlined text-primary" data-icon="call">call</span>
                                <a href="tel:+918766216564" class="font-bold text-on-surface hover:text-primary transition-colors text-sm">+91 87662 16564</a>
                            </div>
                        </div>
                        <div class="glass-card p-8 rounded-[32px] border border-outline-variant/30 bg-[#fcf9f4] space-y-4">
                            <h4 class="font-headline-md text-on-surface font-bold text-base uppercase tracking-wider border-b border-outline-variant/30 pb-2">Our Services</h4>
                            <ul class="space-y-3">
                                <li><a href="../premium-hair-patch" class="text-sm text-on-surface-variant hover:text-primary transition-colors flex items-center gap-2 font-medium">Premium Hair Patch</a></li>
                                <li><a href="../full-hair-wig" class="text-sm text-on-surface-variant hover:text-primary transition-colors flex items-center gap-2 font-medium">Full Hair Wigs</a></li>
                                <li><a href="../non-surgical-replacement" class="text-sm text-on-surface-variant hover:text-primary transition-colors flex items-center gap-2 font-medium">Non-Surgical Replacement</a></li>
                                <li><a href="../hair-bonding" class="text-sm text-on-surface-variant hover:text-primary transition-colors flex items-center gap-2 font-medium">Hair Bonding</a></li>
                                <li><a href="../maintenance-and-styling" class="text-sm text-on-surface-variant hover:text-primary transition-colors flex items-center gap-2 font-medium">Maintenance & Styling</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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