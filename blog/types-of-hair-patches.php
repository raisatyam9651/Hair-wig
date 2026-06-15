<?php
require_once 'blog-data.php';
$slug = 'types-of-hair-patches';
$blog_post = null;
foreach ($blog_posts as $post) { if ($post['slug'] === $slug) { $blog_post = $post; break; } }
if (!$blog_post) { die("Article not found."); }
$current_index = -1;
foreach ($blog_posts as $idx => $post) { if ($post['slug'] === $slug) { $current_index = $idx; break; } }
$prev_post = ($current_index > 0) ? $blog_posts[$current_index - 1] : null;
$next_post = ($current_index < count($blog_posts) - 1) ? $blog_posts[$current_index + 1] : null;
$other_posts = [];
$available_posts = array_filter($blog_posts, function($p) use ($slug) { return $p['slug'] !== $slug; });
if (count($available_posts) > 3) { $random_keys = array_rand($available_posts, 3); foreach ($random_keys as $k) { $other_posts[] = $available_posts[$k]; } } else { $other_posts = array_values($available_posts); }
$custom_head_links = '<meta name="robots" content="index, follow" />';
?>
<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title><?php echo htmlspecialchars($blog_post['title']); ?> | Growig Hair Solution</title>
    <meta content="<?php echo htmlspecialchars($blog_post['description']); ?>" name="description"/>
    <meta name="keywords" content="types of hair patches, hair patch types, lace hair patch, poly skin patch, monofilament patch, hair system types" />
    <?php include __DIR__ . '/../header-code.php'; ?>
    <style>
        .blog-content h4 { font-family: 'Cormorant Garamond', serif; font-size: 1.5rem; color: var(--md-sys-color-primary, #4A3E3D); font-weight: 700; margin-top: 2rem; margin-bottom: 0.75rem; }
        .blog-content p { line-height: 1.8; margin-bottom: 1.5rem; color: var(--md-sys-color-on-surface-variant, #5c5555); }
        .blog-content a { color: #1a56db; text-decoration: underline; text-decoration-color: rgba(26, 86, 219, 0.3); text-underline-offset: 4px; font-weight: 600; transition: all 0.2s ease-in-out; }
        .blog-content a:hover { color: #1e40af; text-decoration-color: #1e40af; }
        .blog-content table { width: 100%; border-collapse: collapse; margin: 1.5rem 0; border-radius: 12px; overflow: hidden; }
        .blog-content th { background: #735b25; color: white; padding: 12px 16px; text-align: left; font-size: 0.875rem; }
        .blog-content td { padding: 12px 16px; border-bottom: 1px solid #e5e5e5; font-size: 0.875rem; }
        .blog-content tr:nth-child(even) { background: #faf8f5; }
        .answer-box { background: linear-gradient(135deg, #faf8f5 0%, #f5f0e8 100%); border-left: 4px solid #735b25; padding: 1.5rem; border-radius: 0 12px 12px 0; margin-bottom: 2rem; }
        .answer-box p { margin-bottom: 0; font-weight: 600; color: #4A3E3D; }
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
                <div class="flex items-center gap-2"><span class="material-symbols-outlined text-[16px] text-primary">calendar_month</span><span><?php echo htmlspecialchars($blog_post['date']); ?></span></div>
                <div class="flex items-center gap-2"><span class="material-symbols-outlined text-[16px] text-primary">schedule</span><span><?php echo htmlspecialchars($blog_post['read_time']); ?></span></div>
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

<div class="answer-box">
<p>Hair patches come in 6 main types based on base material: Swiss lace (ultra-thin, most natural), French lace (slightly thicker, more durable), polyurethane skin (skin-like, strongest adhesive bond), monofilament (mesh construction, most realistic scalp), poly-lace hybrid (combines lace and skin benefits), and full mesh systems (maximum breathability). Each type serves different lifestyles and priorities.</p>
</div>

<p>Understanding the different types of hair patches is essential before making a purchase. The base material determines how the patch looks, feels, how long it lasts, and how well it suits your lifestyle. Here is a complete guide to every hair patch type available today.</p>

<h4>1. Swiss Lace Hair Patch</h4>
<p>Swiss lace is the thinnest and most transparent base material available. The ultra-fine mesh is nearly invisible against the scalp, allowing your natural skin color to show through. Natural human hair is hand-tied to each hole in the mesh, creating the appearance of hair growing directly from your scalp.</p>

<p><strong>Best for:</strong> Men who prioritize the most natural-looking hairline. Ideal for combed-back, spiked, or exposed-forehead hairstyles.</p>
<p><strong>Lifespan:</strong> 4-6 months. The ultra-thin mesh is delicate and requires careful handling.</p>
<p><strong>Breathability:</strong> Excellent. The open mesh allows maximum airflow and sweat evaporation.</p>
<p><strong>Price range:</strong> INR 8,000-15,000</p>

<h4>2. French Lace Hair Patch</h4>
<p>French lace is slightly thicker than Swiss lace while still offering excellent transparency. The mesh is more durable and resistant to tearing, making it a practical choice for daily wear. It provides a very natural appearance with better longevity than Swiss lace.</p>

<p><strong>Best for:</strong> Men who want a natural look with better durability than Swiss lace.</p>
<p><strong>Lifespan:</strong> 5-7 months. The thicker mesh handles daily wear better.</p>
<p><strong>Breathability:</strong> Very good. Slightly less airflow than Swiss but still excellent.</p>
<p><strong>Price range:</strong> INR 7,000-12,000</p>

<h4>3. Polyurethane (Poly Skin) Hair Patch</h4>
<p>Poly skin patches use a thin, flexible silicone-like material that mimics the look and feel of real skin. The solid surface holds adhesives very securely, creating the strongest bond of any base type. The patch sits completely flush against your scalp.</p>

<p><strong>Best for:</strong> Active men who work out, swim, or sweat heavily. The strong bond handles intense physical activity.</p>
<p><strong>Lifespan:</strong> 6-9 months. The solid material is durable but can become brittle over time.</p>
<p><strong>Breathability:</strong> Moderate. The solid material does not allow airflow, which can feel warm.</p>
<p><strong>Price range:</strong> INR 7,000-12,000</p>

<h4>4. Monofilament Hair Patch</h4>
<p>Monofilament uses a fine polyester mesh where each hair strand is individually hand-tied. This creates the most realistic scalp appearance — each hair appears to grow from a natural pore on your scalp. The mesh is stronger than lace, providing excellent durability.</p>

<p><strong>Best for:</strong> Men who want the most realistic scalp look and longest lifespan.</p>
<p><strong>Lifespan:</strong> 9-12 months. The strongest base material with the longest durability.</p>
<p><strong>Breathability:</strong> Good. The mesh allows airflow while providing solid coverage.</p>
<p><strong>Price range:</strong> INR 12,000-20,000</p>

<h4>5. Poly-Lace Hybrid Hair Patch</h4>
<p>Hybrid patches combine two materials — typically Swiss lace at the front (for a natural hairline) and poly skin at the back (for strong adhesion). This gives you the best of both worlds: an undetectable front edge with durable bonding around the perimeter.</p>

<p><strong>Best for:</strong> Men who want both realism and durability without compromise.</p>
<p><strong>Lifespan:</strong> 6-10 months depending on the specific hybrid construction.</p>
<p><strong>Breathability:</strong> Good. The lace front provides airflow while the poly back provides coverage.</p>
<p><strong>Price range:</strong> INR 10,000-18,000</p>

<h4>6. Full Mesh Hair Patch</h4>
<p>Full mesh systems use an all-mesh construction that provides maximum breathability. The open weave allows heat and sweat to escape freely, keeping the scalp cool and comfortable. This is the best choice for hot and humid climates.</p>

<p><strong>Best for:</strong> Men in hot climates like Delhi who need maximum breathability and comfort.</p>
<p><strong>Lifespan:</strong> 5-8 months depending on mesh thickness.</p>
<p><strong>Breathability:</strong> Excellent. The most breathable option available.</p>
<p><strong>Price range:</strong> INR 8,000-15,000</p>

<h4>Comparison Summary</h4>
<table>
<tr><th>Type</th><th>Realism</th><th>Durability</th><th>Breathability</th><th>Best For</th></tr>
<tr><td>Swiss Lace</td><td>Excellent</td><td>Moderate</td><td>Excellent</td><td>Natural hairline</td></tr>
<tr><td>French Lace</td><td>Very Good</td><td>Good</td><td>Very Good</td><td>Balanced option</td></tr>
<tr><td>Poly Skin</td><td>Very Good</td><td>Excellent</td><td>Moderate</td><td>Active lifestyle</td></tr>
<tr><td>Monofilament</td><td>Excellent</td><td>Excellent</td><td>Good</td><td>Realistic scalp look</td></tr>
<tr><td>Hybrid</td><td>Very Good</td><td>Very Good</td><td>Good</td><td>Best of both worlds</td></tr>
<tr><td>Full Mesh</td><td>Good</td><td>Good</td><td>Excellent</td><td>Hot climates</td></tr>
</table>

<h4>Which Type Should You Choose?</h4>
<p>Visit our Dwarka studio for a free consultation. We will show you each base material, explain the differences, and help you choose the type that best matches your lifestyle, priorities, and budget. You can feel the materials and see how they look before making your decision.</p>

                    </article>

                    <?php if (isset($blog_post['faqs']) && !empty($blog_post['faqs'])): ?>
                        <div class="mt-16 pt-8 border-t border-outline-variant/30">
                            <h3 class="font-display-lg text-2xl md:text-3xl text-on-surface font-bold mb-8">Frequently Asked Questions</h3>
                            <div class="space-y-4">
                                <?php foreach ($blog_post['faqs'] as $idx => $faq): ?>
                                    <details class="group glass-card p-6 rounded-2xl border border-primary/10 royal-shadow bg-[#fcf9f4]" <?php echo ($idx === 0) ? 'open' : ''; ?>>
                                        <summary class="list-none flex justify-between items-center cursor-pointer font-display-md text-base md:text-lg text-on-surface font-bold"><?php echo htmlspecialchars($faq['question']); ?><span class="material-symbols-outlined group-open:rotate-180 transition-transform">expand_more</span></summary>
                                        <div class="mt-4 font-body-md text-on-surface-variant leading-relaxed text-sm"><?php echo $faq['answer']; ?></div>
                                    </details>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-16 pt-8 border-t border-outline-variant/30">
                        <div><?php if ($prev_post): ?><a href="./<?php echo htmlspecialchars($prev_post['slug']); ?>" class="group block p-6 rounded-2xl border border-outline-variant/30 hover:border-primary transition-all duration-300 bg-surface-container-low hover:bg-[#fcf9f4]"><span class="text-xs text-on-surface-variant font-label-md uppercase tracking-wider flex items-center gap-1 group-hover:text-primary transition-colors"><span class="material-symbols-outlined text-[14px]">arrow_back</span> Previous Article</span><span class="block mt-2 font-display-md text-base text-on-surface font-bold line-clamp-1 group-hover:text-primary transition-colors"><?php echo htmlspecialchars($prev_post['title']); ?></span></a><?php endif; ?></div>
                        <div class="sm:text-right"><?php if ($next_post): ?><a href="./<?php echo htmlspecialchars($next_post['slug']); ?>" class="group block p-6 rounded-2xl border border-outline-variant/30 hover:border-primary transition-all duration-300 bg-surface-container-low hover:bg-[#fcf9f4]"><span class="text-xs text-on-surface-variant font-label-md uppercase tracking-wider flex items-center gap-1 sm:justify-end group-hover:text-primary transition-colors">Next Article <span class="material-symbols-outlined text-[14px]">arrow_forward</span></span><span class="block mt-2 font-display-md text-base text-on-surface font-bold line-clamp-1 group-hover:text-primary transition-colors"><?php echo htmlspecialchars($next_post['title']); ?></span></a><?php endif; ?></div>
                    </div>
                    <div class="flex flex-col sm:flex-row justify-between items-center gap-6 mt-16 pt-8 border-t border-outline-variant/30">
                        <a href="./" class="inline-flex items-center gap-2 text-primary hover:text-primary-container font-label-md transition-colors"><span class="material-symbols-outlined text-[18px]">arrow_back</span>Back to all Blogs</a>
                        <div class="flex items-center gap-4">
                            <span class="text-sm font-label-md text-on-surface-variant">Share this article:</span>
                            <a href="https://wa.me/?text=<?php echo urlencode($blog_post['title'] . ' - https://growighairsolution.com/blog/' . $blog_post['slug']); ?>" target="_blank" class="w-10 h-10 rounded-full bg-primary/5 hover:bg-primary/10 text-primary flex items-center justify-center transition-colors"><svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M12.012 2c-5.506 0-9.989 4.478-9.99 9.984a9.96 9.96 0 001.335 4.975L2 22l5.233-1.371a9.92 9.92 0 004.773 1.226h.005c5.505 0 9.988-4.479 9.989-9.985a9.96 9.96 0 00-2.925-7.062 9.92 9.92 0 00-7.063-2.787zm5.42 14.186c-.296.83-1.75 1.624-2.42 1.706-.607.075-1.397.086-2.262-.19-.54-.173-1.226-.454-2.09-.83-3.69-1.597-6.082-5.328-6.267-5.574-.185-.246-1.428-1.89-1.428-3.61 0-1.719.897-2.565 1.218-2.915.322-.35.706-.438.94-.438.236 0 .473.003.678.013.214.01.503-.082.786.598.293.705.998 2.422 1.085 2.597.087.175.146.378.03.61-.117.234-.176.38-.352.585-.175.204-.368.455-.526.61-.176.176-.36.368-.156.719.205.35.912 1.498 1.956 2.422 1.343 1.19 2.472 1.558 2.822 1.734.35.175.555.146.76-.088.205-.234.877-1.022 1.112-1.373.234-.35.467-.292.787-.175.321.117 2.037.962 2.387 1.137.35.175.584.263.67.41.088.146.088.847-.208 1.677z"/></svg></a>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-4">
                    <div class="sticky top-28 space-y-6">
                        <div class="glass-card p-8 rounded-[32px] border border-primary/20 royal-shadow bg-[#fcf9f4] text-center space-y-6">
                            <span class="material-symbols-outlined text-primary text-5xl">support_agent</span>
                            <h3 class="font-headline-md text-on-surface font-bold text-xl">Free Consultation</h3>
                            <p class="text-sm text-on-surface-variant leading-relaxed">Feel each hair patch type and choose the best one for you.</p>
                            <a href="../contact" class="block w-full bg-primary text-white py-4 rounded-full font-label-md hover:bg-primary-container hover:scale-[1.02] active:scale-[0.98] transition-all royal-shadow uppercase tracking-wider text-sm font-bold text-center">Book Free Session</a>
                            <div class="pt-4 border-t border-outline-variant/30 flex items-center justify-center gap-3"><span class="material-symbols-outlined text-primary">call</span><a href="tel:+918766216564" class="font-bold text-on-surface hover:text-primary transition-colors text-sm">+91 87662 16564</a></div>
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
                        <div class="relative h-48 w-full overflow-hidden"><img src="../assets/hair-maintance.jpg" alt="<?php echo htmlspecialchars($post['title']); ?>" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105" /><span class="absolute top-4 left-4 bg-primary text-white text-[10px] font-label-md px-3 py-1 rounded-full uppercase tracking-wider"><?php echo htmlspecialchars($post['category']); ?></span></div>
                        <div class="p-6 flex flex-col justify-between flex-grow"><div><div class="text-xs text-on-surface-variant font-label-md mb-2"><?php echo htmlspecialchars($post['date']); ?></div><h4 class="font-display-md text-lg text-on-surface font-bold line-clamp-2 mb-3 leading-snug"><a href="./<?php echo htmlspecialchars($post['slug']); ?>" class="hover:text-primary transition-colors"><?php echo htmlspecialchars($post['title']); ?></a></h4><p class="text-xs text-on-surface-variant line-clamp-3 mb-4 leading-relaxed"><?php echo htmlspecialchars($post['excerpt']); ?></p></div><a href="./<?php echo htmlspecialchars($post['slug']); ?>" class="inline-flex items-center gap-1.5 text-xs text-primary hover:text-primary-container font-label-md transition-colors mt-auto font-bold uppercase tracking-wider">Read Article<span class="material-symbols-outlined text-[14px]">arrow_forward</span></a></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>
<?php include __DIR__ . '/../footer.php'; ?>
</body>
</html>