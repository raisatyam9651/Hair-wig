<?php
include 'custom-header-link.php';

// Set up head links containing page-specific schemas, styles, and tracking codes
$custom_head_links = '
<!-- FAQ Schema (JSON-LD) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "How do I submit my Google review?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "First, complete the 4-step questionnaire to generate your review. Click the \"Copy Review\" button to save the draft. Then click \"Submit Google Review\" to open our Google Business Profile page where you can paste the review and submit it."
      }
    },
    {
      "@type": "Question",
      "name": "Can I edit the generated review?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, you can edit the generated review directly in the text box on this page before copying, or make changes directly on the Google review form."
      }
    },
    {
      "@type": "Question",
      "name": "Is my review public?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Once submitted, your review will be publicly visible on Google Maps and Google Search under Growig Hair Solution."
      }
    },
    {
      "@type": "Question",
      "name": "How long does it take to appear on Google?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Usually, your review appears instantly on Google, though automated compliance checks may occasionally delay it for a few hours."
      }
    },
    {
      "@type": "Question",
      "name": "Why are reviews important?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Your honest reviews help other clients in Dwarka find reliable non-surgical hair replacement solutions and help us maintain premium service standards."
      }
    }
  ]
}
</script>

<!-- Google Analytics 4 (GA4) Global Site Tag (gtag.js) Placeholder -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-PLACEHOLDER"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag(\'js\', new Date());
  gtag(\'config\', \'G-PLACEHOLDER\');
</script>

<!-- Meta Pixel Code Placeholder -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version=\'2.0\';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,\'script\',
  \'https://connect.facebook.net/en_US/fbevents.js\');
  fbq(\'init\', \'PIXEL_PLACEHOLDER\');
  fbq(\'track\', \'PageView\');
</script>
<noscript>
  <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=PIXEL_PLACEHOLDER&ev=PageView&noscript=1"/>
</noscript>

<style>
  /* Custom Forest Green Colors for Wizard UI */
  :root {
    --primary-green: #15803d; /* Emerald 700 */
    --primary-green-dark: #166534; /* Emerald 800 */
    --primary-green-light: #f0fdf4; /* Emerald 50 */
    --primary-green-border: #bbf7d0; /* Emerald 200 */
  }

  .text-green-brand { color: var(--primary-green); }
  .bg-green-brand { background-color: var(--primary-green); }
  .bg-green-brand-dark { background-color: var(--primary-green-dark); }
  .bg-green-brand-light { background-color: var(--primary-green-light); }
  .border-green-brand { border-color: var(--primary-green); }
  .border-green-brand-light { border-color: var(--primary-green-border); }

  .bg-green-gradient {
    background: linear-gradient(135deg, #15803d 0%, #166534 100%);
  }
  
  .glass-card-green {
    background: rgba(255, 255, 255, 1);
    border: 1px solid rgba(21, 128, 61, 0.12);
    box-shadow: 0 15px 45px rgba(0, 0, 0, 0.04);
  }

  /* Option card style */
  .option-card {
    cursor: pointer;
    transition: all 0.2s ease-in-out;
  }
  .option-card:hover {
    border-color: var(--primary-green);
    background-color: var(--primary-green-light);
  }
  .option-card.selected {
    border-color: var(--primary-green);
    background-color: var(--primary-green-light);
    box-shadow: 0 0 0 2px rgba(21, 128, 61, 0.15);
  }

  /* Wizard Steps Slide Animations */
  .wizard-step {
    transition: opacity 0.3s ease-in-out, transform 0.3s ease-in-out;
  }
  .wizard-step.hidden-step {
    display: none;
    opacity: 0;
    transform: translateY(10px);
  }
  .wizard-step.active-step {
    display: block;
    opacity: 1;
    transform: translateY(0);
  }

  /* Success Check Animation */
  .success-checkmark {
    width: 60px;
    height: 60px;
    margin: 0 auto;
  }
  .success-checkmark .check-icon {
    width: 60px;
    height: 60px;
    position: relative;
    border-radius: 50%;
    box-sizing: content-box;
    border: 4px solid #4CAF50;
  }
  .success-checkmark .check-icon::before, .success-checkmark .check-icon::after {
    content: \'\';
    height: 80px;
    position: absolute;
    background: #ffffff;
    transform: rotate(-45deg);
  }
  .success-checkmark .check-icon::before {
    width: 30px;
    top: 26px;
    left: -9px;
    transform-origin: 100% 50%;
    border-radius: 100px 0 0 100px;
  }
  .success-checkmark .check-icon::after {
    width: 60px;
    top: 18px;
    left: 20px;
    transform-origin: 0 50%;
    border-radius: 0 100px 100px 0;
  }
  .success-checkmark .check-icon .icon-line {
    height: 5px;
    background-color: #4CAF50;
    display: block;
    position: absolute;
    z-index: 10;
    border-radius: 2px;
  }
  .success-checkmark .check-icon .icon-line.line-tip {
    width: 15px;
    left: 11px;
    top: 36px;
    transform: rotate(45deg);
    animation: icon-line-tip 0.75s;
  }
  .success-checkmark .check-icon .icon-line.line-long {
    width: 30px;
    right: 6px;
    top: 30px;
    transform: rotate(-45deg);
    animation: icon-line-long 0.75s;
  }
</style>
';
?>
<!DOCTYPE html>
<html class="light scroll-smooth" lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Google Review Assistant | Growig Hair Solution Dwarka</title>
    <meta content="Help others find the best hair wig and patch solutions in Dwarka. Generate, edit, and copy a genuine Google review draft in seconds." name="description" />
    <?php include 'header-code.php'; ?>
</head>
<body class="bg-[#fcf9f4] text-on-surface font-body-md antialiased selection:bg-green-brand/20 selection:text-green-brand">
    <?php include 'header.php'; ?>
    
    <main class="pt-32 pb-20 flex flex-col justify-center min-h-[90vh]">
        <!-- Review Generation Assistant Widget -->
        <section class="max-w-[700px] w-full mx-auto px-margin-mobile md:px-6 py-6" id="review-generator-section">
            <div class="glass-card-green p-6 md:p-10 rounded-3xl bg-white royal-shadow border border-gray-100">
                
                <!-- Main Header inside the wizard card -->
                <div class="text-center mb-8" id="wizard-header">
                    <span class="text-green-brand text-xs font-bold uppercase tracking-widest block mb-2">Google Review Assistant</span>
                    <h1 class="font-headline-md text-2xl md:text-3xl text-secondary leading-tight">Share Your Experience</h1>
                    <p class="text-on-surface-variant text-sm mt-2">Generate a genuine, personalized review draft for Growig Hair Solution in seconds.</p>
                </div>

                <!-- Progress Bar indicator -->
                <div class="mb-8" id="progress-container">
                    <div class="flex justify-between items-center text-xs font-semibold text-on-surface-variant mb-2">
                        <span id="progress-step-text">Question 1 of 5</span>
                        <span id="progress-percent">20% Completed</span>
                    </div>
                    <div class="w-full bg-gray-100 h-2 rounded-full overflow-hidden">
                        <div class="bg-green-brand h-full rounded-full transition-all duration-300" id="progress-bar-fill" style="width: 20%;"></div>
                    </div>
                </div>

                <!-- Form Questionnaire -->
                <form id="reviewAssistantForm" onsubmit="generateReview(event)" class="space-y-6">
                    
                    <!-- Question 1: Service -->
                    <div class="wizard-step active-step" id="step-1">
                        <div class="space-y-4">
                            <label class="block text-secondary font-bold text-lg md:text-xl text-center">Which service did you receive?</label>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-2">
                                <div class="option-card p-4 rounded-xl border border-gray-200 bg-white flex items-center gap-3" data-name="service" data-value="Hair Patch">
                                    <span class="material-symbols-outlined text-green-brand text-xl">style</span>
                                    <span class="text-sm font-semibold text-secondary">Hair Patch</span>
                                </div>
                                <div class="option-card p-4 rounded-xl border border-gray-200 bg-white flex items-center gap-3" data-name="service" data-value="Hair Wig">
                                    <span class="material-symbols-outlined text-green-brand text-xl">face</span>
                                    <span class="text-sm font-semibold text-secondary">Hair Wig</span>
                                </div>
                                <div class="option-card p-4 rounded-xl border border-gray-200 bg-white flex items-center gap-3" data-name="service" data-value="Non Surgical Hair Replacement">
                                    <span class="material-symbols-outlined text-green-brand text-xl">content_cut</span>
                                    <span class="text-sm font-semibold text-secondary">Non Surgical Hair Replacement</span>
                                </div>
                                <div class="option-card p-4 rounded-xl border border-gray-200 bg-white flex items-center gap-3" data-name="service" data-value="Hair Bonding">
                                    <span class="material-symbols-outlined text-green-brand text-xl">layers</span>
                                    <span class="text-sm font-semibold text-secondary">Hair Bonding</span>
                                </div>
                                <div class="option-card p-4 rounded-xl border border-gray-200 bg-white flex items-center gap-3" data-name="service" data-value="Hair Weaving">
                                    <span class="material-symbols-outlined text-green-brand text-xl">texture</span>
                                    <span class="text-sm font-semibold text-secondary">Hair Weaving</span>
                                </div>
                                <div class="option-card p-4 rounded-xl border border-gray-200 bg-white flex items-center gap-3" data-name="service" data-value="Hair Clipping">
                                    <span class="material-symbols-outlined text-green-brand text-xl">content_paste</span>
                                    <span class="text-sm font-semibold text-secondary">Hair Clipping</span>
                                </div>
                                <div class="option-card p-4 sm:col-span-2 rounded-xl border border-gray-200 bg-white flex items-center justify-center gap-3" data-name="service" data-value="Hair System Maintenance">
                                    <span class="material-symbols-outlined text-green-brand text-xl">build_circle</span>
                                    <span class="text-sm font-semibold text-secondary">Hair System Maintenance & Styling</span>
                                </div>
                            </div>
                            <input type="hidden" name="service" id="selected_service" required />
                        </div>
                    </div>

                    <!-- Question 2: Satisfaction -->
                    <div class="wizard-step hidden-step" id="step-2">
                        <div class="space-y-4">
                            <label class="block text-secondary font-bold text-lg md:text-xl text-center">How satisfied are you?</label>
                            <div class="grid grid-cols-1 gap-3 pt-2 max-w-sm mx-auto">
                                <div class="option-card p-5 rounded-xl border border-gray-200 bg-white flex items-center justify-between" data-name="satisfaction" data-value="Excellent">
                                    <span class="text-sm font-semibold text-secondary">Excellent</span>
                                    <span class="text-base">⭐⭐⭐⭐⭐</span>
                                </div>
                                <div class="option-card p-5 rounded-xl border border-gray-200 bg-white flex items-center justify-between" data-name="satisfaction" data-value="Very Good">
                                    <span class="text-sm font-semibold text-secondary">Very Good</span>
                                    <span class="text-base">⭐⭐⭐⭐</span>
                                </div>
                                <div class="option-card p-5 rounded-xl border border-gray-200 bg-white flex items-center justify-between" data-name="satisfaction" data-value="Good">
                                    <span class="text-sm font-semibold text-secondary">Good</span>
                                    <span class="text-base">⭐⭐⭐</span>
                                </div>
                            </div>
                            <input type="hidden" name="satisfaction" id="selected_satisfaction" required />
                        </div>
                    </div>

                    <!-- Question 3: Impressed -->
                    <div class="wizard-step hidden-step" id="step-3">
                        <div class="space-y-4">
                            <label class="block text-secondary font-bold text-lg md:text-xl text-center">What impressed you most?</label>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-2">
                                <div class="option-card p-4 rounded-xl border border-gray-200 bg-white flex items-center gap-3" data-name="impressed" data-value="Natural Look">
                                    <span class="material-symbols-outlined text-green-brand">remove_red_eye</span>
                                    <span class="text-sm font-semibold text-secondary">Natural Look</span>
                                </div>
                                <div class="option-card p-4 rounded-xl border border-gray-200 bg-white flex items-center gap-3" data-name="impressed" data-value="Hairline Design">
                                    <span class="material-symbols-outlined text-green-brand">architecture</span>
                                    <span class="text-sm font-semibold text-secondary">Hairline Design</span>
                                </div>
                                <div class="option-card p-4 rounded-xl border border-gray-200 bg-white flex items-center gap-3" data-name="impressed" data-value="Professional Staff">
                                    <span class="material-symbols-outlined text-green-brand">group</span>
                                    <span class="text-sm font-semibold text-secondary">Professional Staff</span>
                                </div>
                                <div class="option-card p-4 rounded-xl border border-gray-200 bg-white flex items-center gap-3" data-name="impressed" data-value="Affordable Pricing">
                                    <span class="material-symbols-outlined text-green-brand">sell</span>
                                    <span class="text-sm font-semibold text-secondary">Affordable Pricing</span>
                                </div>
                                <div class="option-card p-4 rounded-xl border border-gray-200 bg-white flex items-center gap-3" data-name="impressed" data-value="Comfort">
                                    <span class="material-symbols-outlined text-green-brand">airline_seat_recline_extra</span>
                                    <span class="text-sm font-semibold text-secondary">Comfort</span>
                                </div>
                                <div class="option-card p-4 rounded-xl border border-gray-200 bg-white flex items-center gap-3" data-name="impressed" data-value="Service Quality">
                                    <span class="material-symbols-outlined text-green-brand">task_alt</span>
                                    <span class="text-sm font-semibold text-secondary">Service Quality</span>
                                </div>
                                <div class="option-card p-4 sm:col-span-2 rounded-xl border border-gray-200 bg-white flex items-center justify-center gap-3" data-name="impressed" data-value="Maintenance Support">
                                    <span class="material-symbols-outlined text-green-brand">settings_accessibility</span>
                                    <span class="text-sm font-semibold text-secondary">Maintenance Support</span>
                                </div>
                            </div>
                            <input type="hidden" name="impressed" id="selected_impressed" required />
                        </div>
                    </div>

                    <!-- Question 4: Recommend -->
                    <div class="wizard-step hidden-step" id="step-4">
                        <div class="space-y-4">
                            <label class="block text-secondary font-bold text-lg md:text-xl text-center">Would you recommend us?</label>
                            <div class="grid grid-cols-1 gap-3 pt-2 max-w-sm mx-auto">
                                <div class="option-card p-5 rounded-xl border border-gray-200 bg-white flex items-center justify-between" data-name="recommend" data-value="Definitely">
                                    <span class="text-sm font-semibold text-secondary">Definitely</span>
                                    <span class="text-base">👍</span>
                                </div>
                                <div class="option-card p-5 rounded-xl border border-gray-200 bg-white flex items-center justify-between" data-name="recommend" data-value="Yes">
                                    <span class="text-sm font-semibold text-secondary">Yes</span>
                                    <span class="text-base">👌</span>
                                </div>
                                <div class="option-card p-5 rounded-xl border border-gray-200 bg-white flex items-center justify-between" data-name="recommend" data-value="Absolutely">
                                    <span class="text-sm font-semibold text-secondary">Absolutely</span>
                                    <span class="text-base">🙌</span>
                                </div>
                            </div>
                            <input type="hidden" name="recommend" id="selected_recommend" required />
                        </div>
                    </div>

                    <!-- Navigation Action Buttons -->
                    <div class="flex justify-between items-center gap-4 pt-6 border-t border-gray-100" id="navigation-bar">
                        <!-- Back Button -->
                        <button type="button" id="prev_btn" onclick="prevStep()" class="border border-green-brand text-green-brand hover:bg-green-brand-light font-label-md text-sm uppercase px-6 py-4 rounded-xl transition-all duration-200 flex items-center gap-2 cursor-pointer invisible">
                            <span class="material-symbols-outlined text-sm">arrow_back</span>
                            Back
                        </button>
                        <!-- Next Button -->
                        <button type="button" id="next_btn" onclick="nextStep()" class="bg-green-gradient text-white font-label-md text-sm uppercase px-8 py-4 rounded-xl hover:shadow-md transition-all duration-200 flex items-center gap-2 cursor-pointer opacity-40 pointer-events-none" disabled>
                            <span>Next</span>
                            <span class="material-symbols-outlined text-sm">arrow_forward</span>
                        </button>
 
                        <!-- Submit Review (Step 4) -->
                        <button type="submit" id="generate_btn" class="bg-green-gradient text-white font-label-md text-sm uppercase px-8 py-4 rounded-xl hover:shadow-md transition-all duration-200 flex items-center gap-2 cursor-pointer hidden">
                            <span>Generate Review</span>
                            <div class="w-4 h-4 border-2 border-white border-t-transparent rounded-full animate-spin hidden" id="btn-spinner"></div>
                        </button>
                    </div>
                </form>

                <!-- Loading Overlay Step -->
                <div id="loader_step" class="hidden flex-col items-center justify-center py-16 space-y-4">
                    <div class="w-12 h-12 border-4 border-green-brand border-t-transparent rounded-full animate-spin"></div>
                    <p class="text-sm font-semibold text-secondary">Crafting your custom review draft...</p>
                </div>

                <!-- Generated Review Card -->
                <div class="mt-4 hidden border border-green-brand/20 bg-green-brand-light/10 p-6 md:p-8 rounded-2xl space-y-6" id="generated_review_card">
                    <div class="flex justify-between items-center">
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-green-brand">auto_awesome</span>
                            <h3 class="font-headline-md text-lg text-secondary font-bold">Your Custom Google Review</h3>
                        </div>
                        <div class="text-xs text-on-surface-variant font-semibold" id="word_count_display">Words: 0</div>
                    </div>

                    <!-- Editable textarea -->
                    <div class="relative">
                        <textarea id="review_text_area" class="w-full min-h-[160px] bg-white border border-gray-200 rounded-xl p-5 text-on-surface text-base md:text-lg focus:outline-none focus:border-green-brand focus:ring-1 focus:ring-green-brand leading-relaxed" style="resize: vertical;"></textarea>
                    </div>

                    <!-- Review Actions -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-3 pt-2">
                        <!-- Regenerate Review -->
                        <button onclick="regenerateReview()" class="w-full border border-green-brand text-green-brand hover:bg-green-brand-light font-label-md text-sm uppercase py-4 rounded-xl transition-all duration-200 flex items-center justify-center gap-2 cursor-pointer order-3 md:order-1">
                            <span class="material-symbols-outlined text-[18px]">refresh</span>
                            Regenerate
                        </button>
                        
                        <!-- Copy Review -->
                        <button onclick="copyReview()" id="copy_review_btn" class="w-full bg-white border border-green-brand/30 text-secondary hover:border-green-brand hover:bg-green-brand-light font-label-md text-sm uppercase py-4 rounded-xl transition-all duration-200 flex items-center justify-center gap-2 cursor-pointer order-2">
                            <span class="material-symbols-outlined text-[18px]" id="copy_icon">content_copy</span>
                            <span id="copy_btn_text">Copy Review</span>
                        </button>

                        <!-- Submit Review -->
                        <button onclick="submitGoogleReview()" class="w-full bg-green-gradient text-white font-label-md text-sm uppercase py-4 rounded-xl hover:shadow-md transition-all duration-200 flex items-center justify-center gap-2 cursor-pointer order-1 md:order-3">
                            <span class="material-symbols-outlined text-[18px]">rate_review</span>
                            Submit Google Review
                        </button>
                    </div>

                    <!-- Restart Questionnaire Button -->
                    <div class="text-center pt-2">
                        <button onclick="resetWizard()" class="text-xs text-on-surface-variant hover:text-green-brand underline font-semibold transition-colors cursor-pointer">
                            Start Over / Take Form Again
                        </button>
                    </div>
                </div>

            </div>
        </section>

        <!-- FAQs Section -->
        <section class="max-w-3xl mx-auto px-margin-mobile md:px-margin-desktop py-12" id="review-faq">
            <div class="text-center mb-10">
                <span class="text-green-brand text-xs font-bold uppercase tracking-widest block mb-2">Helper Guide</span>
                <h2 class="font-headline-md text-2xl md:text-3xl text-secondary">Frequently Asked Questions</h2>
            </div>
            
            <div class="flex flex-col gap-4">
                <!-- FAQ Item 1 -->
                <details class="glass-card rounded-2xl group overflow-hidden border border-gray-100 bg-white" name="faq">
                    <summary class="flex justify-between items-center font-headline-md text-lg text-secondary p-6 cursor-pointer hover:text-green-brand transition-colors">
                        How do I submit my Google review?
                        <span class="material-symbols-outlined text-green-brand transition-transform duration-300 group-open:rotate-180">expand_more</span>
                    </summary>
                    <div class="px-6 pb-6 pt-0 font-body-md text-sm text-on-surface-variant leading-relaxed">
                        First, fill in the questionnaire step-by-step to generate your review. Click the <strong>"Copy Review"</strong> button to save the text to your clipboard. Then, click the <strong>"Submit Google Review"</strong> button, which will open our Google Business Profile page in a new window. Simply paste the review into the box, select your star rating, and click post!
                    </div>
                </details>

                <!-- FAQ Item 2 -->
                <details class="glass-card rounded-2xl group overflow-hidden border border-gray-100 bg-white" name="faq">
                    <summary class="flex justify-between items-center font-headline-md text-lg text-secondary p-6 cursor-pointer hover:text-green-brand transition-colors">
                        Can I edit the generated review?
                        <span class="material-symbols-outlined text-green-brand transition-transform duration-300 group-open:rotate-180">expand_more</span>
                    </summary>
                    <div class="px-6 pb-6 pt-0 font-body-md text-sm text-on-surface-variant leading-relaxed">
                        Yes, absolutely! The generated review is just a helpful starting point. Once the review is generated, you can edit it directly in the text area on this page before copying it, or make changes directly on Google before submitting.
                    </div>
                </details>

                <!-- FAQ Item 3 -->
                <details class="glass-card rounded-2xl group overflow-hidden border border-gray-100 bg-white" name="faq">
                    <summary class="flex justify-between items-center font-headline-md text-lg text-secondary p-6 cursor-pointer hover:text-green-brand transition-colors">
                        Is my review public?
                        <span class="material-symbols-outlined text-green-brand transition-transform duration-300 group-open:rotate-180">expand_more</span>
                    </summary>
                    <div class="px-6 pb-6 pt-0 font-body-md text-sm text-on-surface-variant leading-relaxed">
                        Yes. Once you post your review on Google, it will be visible publicly on Google Maps and Google Search alongside your name and profile photo under our Growig Hair Solution profile.
                    </div>
                </details>

                <!-- FAQ Item 4 -->
                <details class="glass-card rounded-2xl group overflow-hidden border border-gray-100 bg-white" name="faq">
                    <summary class="flex justify-between items-center font-headline-md text-lg text-secondary p-6 cursor-pointer hover:text-green-brand transition-colors">
                        Why are reviews important?
                        <span class="material-symbols-outlined text-green-brand transition-transform duration-300 group-open:rotate-180">expand_more</span>
                    </summary>
                    <div class="px-6 pb-6 pt-0 font-body-md text-sm text-on-surface-variant leading-relaxed">
                        Reviews help other people in Dwarka and across Delhi who are suffering from hair loss find a reliable, high-quality, and non-surgical hair replacement studio. Your honest feedback also helps our team continuously maintain and improve our high standards of service.
                    </div>
                </details>
            </div>
        </section>
    </main>

    <!-- Success Popup Modal Overlay (Submit Redirect) -->
    <div class="fixed inset-0 bg-black/60 z-[999999] flex items-center justify-center p-4 transition-all duration-300 opacity-0 pointer-events-none" id="redirect-modal">
        <div class="bg-white rounded-3xl p-6 md:p-8 max-w-md w-full text-center space-y-6 shadow-2xl border border-gray-100 transform scale-95 transition-all duration-300" id="redirect-modal-content">
            <!-- Green check animated icon -->
            <div class="success-checkmark">
              <div class="check-icon">
                <div class="icon-line line-tip"></div>
                <div class="icon-line line-long"></div>
                <div class="icon-circle"></div>
                <div class="icon-fix"></div>
              </div>
            </div>

            <div class="space-y-2">
                <h3 class="font-headline-md text-2xl text-secondary font-bold">Review Copied!</h3>
                <p class="text-on-surface-variant text-sm md:text-base leading-relaxed">
                    We have opened the Google Business Review page in a new tab.
                </p>
                <div class="bg-green-brand-light border border-green-brand-light p-4 rounded-xl text-green-brand font-bold text-sm leading-relaxed mt-4">
                    📢 Paste your copied review (Ctrl+V or long-tap and select Paste) and submit it on Google!
                </div>
            </div>

            <button onclick="closeRedirectModal()" class="w-full bg-green-gradient text-white font-label-md text-sm uppercase py-4 rounded-xl hover:scale-[1.01] transition-all cursor-pointer">
                Got it, Thank You!
            </button>
        </div>
    </div>

    <!-- Toast Notification (Copy success) -->
    <div class="fixed bottom-12 left-1/2 -translate-x-1/2 bg-gray-900 text-white font-label-md text-sm px-6 py-4 rounded-full shadow-2xl flex items-center gap-3 transition-all duration-300 opacity-0 translate-y-4 pointer-events-none z-[99999]" id="copy-toast">
        <span class="material-symbols-outlined text-green-400">check_circle</span>
        <span>Review copied successfully. You can now paste it on Google!</span>
    </div>

    <!-- Sticky Mobile CTA Footer Bar -->
    <div class="fixed bottom-0 left-0 w-full bg-white border-t border-gray-100 py-3 px-margin-mobile shadow-[0_-8px_30px_rgba(0,0,0,0.06)] flex items-center justify-between z-[999] md:hidden transition-transform duration-300 translate-y-full" id="sticky-mobile-cta">
        <div class="flex flex-col">
            <span class="text-xs text-on-surface-variant leading-tight">Growig Assistant</span>
            <span class="text-sm text-secondary font-bold" id="sticky-text">Draft in 1 Minute</span>
        </div>
        <button onclick="handleStickyCtaClick()" class="bg-green-gradient text-white font-label-md text-xs uppercase px-5 py-3 rounded-lg flex items-center gap-1.5 cursor-pointer">
            <span id="sticky-btn-label">Start Draft</span>
            <span class="material-symbols-outlined text-sm">arrow_forward</span>
        </button>
    </div>

    <?php include 'footer.php'; ?>

    <script>
        // Track current wizard step
        let currentStep = 1;
        const totalSteps = 4;

        // Setup options selections
        const optionCards = document.querySelectorAll('.option-card');
        optionCards.forEach(card => {
            card.addEventListener('click', () => {
                const name = card.getAttribute('data-name');
                const value = card.getAttribute('data-value');
                
                // Unselect others with same name
                document.querySelectorAll(`.option-card[data-name="${name}"]`).forEach(c => {
                    c.classList.remove('selected');
                });
                
                // Select clicked card
                card.classList.add('selected');
                
                // Update hidden input
                document.getElementById(`selected_${name}`).value = value;
                
                // Re-validate current step state (enables Next button)
                validateStepState();

                // Auto-advance step on click for questions 1 to 3 for lightning-fast UX
                if (currentStep < 4) {
                    setTimeout(() => {
                        nextStep();
                    }, 250);
                }

                // Track option selection event
                trackEvent('select_option', { question: name, option: value });
            });
        });

        // Navigation Steps Controller
        function showStep(stepNum) {
            // Hide all steps
            document.querySelectorAll('.wizard-step').forEach(step => {
                step.classList.add('hidden-step');
                step.classList.remove('active-step');
            });

            // Show active step
            const activeStepEl = document.getElementById(`step-${stepNum}`);
            activeStepEl.classList.remove('hidden-step');
            activeStepEl.classList.add('active-step');

            // Update navigation buttons
            const prevBtn = document.getElementById('prev_btn');
            const nextBtn = document.getElementById('next_btn');
            const generateBtn = document.getElementById('generate_btn');

            if (stepNum === 1) {
                prevBtn.classList.add('invisible');
            } else {
                prevBtn.classList.remove('invisible');
            }

            if (stepNum === totalSteps) {
                nextBtn.classList.add('hidden');
                generateBtn.classList.remove('hidden');
            } else {
                nextBtn.classList.remove('hidden');
                generateBtn.classList.add('hidden');
            }

            // Update Progress Bar
            const percentage = (stepNum / totalSteps) * 100;
            document.getElementById('progress-step-text').textContent = `Question ${stepNum} of ${totalSteps}`;
            document.getElementById('progress-percent').textContent = `${percentage}% Completed`;
            document.getElementById('progress-bar-fill').style.width = `${percentage}%`;

            currentStep = stepNum;

            // Recheck button disabled states
            validateStepState();
        }

        function validateStepState() {
            const nextBtn = document.getElementById('next_btn');
            const generateBtn = document.getElementById('generate_btn');
            let isAnswered = false;

            if (currentStep === 1) {
                isAnswered = !!document.getElementById('selected_service').value;
            } else if (currentStep === 2) {
                isAnswered = !!document.getElementById('selected_satisfaction').value;
            } else if (currentStep === 3) {
                isAnswered = !!document.getElementById('selected_impressed').value;
            } else if (currentStep === 4) {
                isAnswered = !!document.getElementById('selected_recommend').value;
            }

            if (isAnswered) {
                nextBtn.disabled = false;
                nextBtn.classList.remove('opacity-40', 'pointer-events-none');
                
                generateBtn.disabled = false;
                generateBtn.classList.remove('opacity-40', 'pointer-events-none');
            } else {
                nextBtn.disabled = true;
                nextBtn.classList.add('opacity-40', 'pointer-events-none');
                
                generateBtn.disabled = true;
                generateBtn.classList.add('opacity-40', 'pointer-events-none');
            }
        }

        function nextStep() {
            // Validation before going next
            let isAnswered = false;
            if (currentStep === 1) {
                isAnswered = !!document.getElementById('selected_service').value;
            } else if (currentStep === 2) {
                isAnswered = !!document.getElementById('selected_satisfaction').value;
            } else if (currentStep === 3) {
                isAnswered = !!document.getElementById('selected_impressed').value;
            } else if (currentStep === 4) {
                isAnswered = !!document.getElementById('selected_recommend').value;
            } else {
                isAnswered = true;
            }

            if (!isAnswered) {
                return; // Prevent slide if not selected
            }

            if (currentStep < totalSteps) {
                showStep(currentStep + 1);
            }
        }

        function prevStep() {
            if (currentStep > 1) {
                showStep(currentStep - 1);
            }
        }

        // Reset wizard back to Step 1
        function resetWizard() {
            // Unselect all option cards
            document.querySelectorAll('.option-card').forEach(c => c.classList.remove('selected'));
            
            // Clear inputs
            document.getElementById('selected_service').value = '';
            document.getElementById('selected_satisfaction').value = '';
            document.getElementById('selected_impressed').value = '';
            document.getElementById('selected_recommend').value = '';

            // Hide generated review card
            document.getElementById('generated_review_card').classList.add('hidden');
            
            // Show wizard controls & progress
            document.getElementById('reviewAssistantForm').classList.remove('hidden');
            document.getElementById('progress-container').classList.remove('hidden');
            document.getElementById('wizard-header').classList.remove('hidden');

            // Set state
            updateStickyCtaState(false);

            // Show step 1
            showStep(1);
        }

        // Track and count words in textarea
        const textArea = document.getElementById('review_text_area');
        const wordCountDisplay = document.getElementById('word_count_display');

        textArea.addEventListener('input', () => {
            const words = textArea.value.trim().split(/\s+/).filter(w => w.length > 0).length;
            wordCountDisplay.textContent = `Words: ${words}`;
        });

        // Submit form via AJAX to generate-review.php
        function generateReview(event) {
            if (event) event.preventDefault();

            const service = document.getElementById('selected_service').value;
            const satisfaction = document.getElementById('selected_satisfaction').value;
            const impressed = document.getElementById('selected_impressed').value;
            const recommend = document.getElementById('selected_recommend').value;

            if (!service || !satisfaction || !impressed || !recommend) {
                alert('Please select an option for questions 1, 2, 3, and 4 before generating.');
                return;
            }

            // Hide form and show loader
            const form = document.getElementById('reviewAssistantForm');
            const progress = document.getElementById('progress-container');
            const header = document.getElementById('wizard-header');
            const loader = document.getElementById('loader_step');

            form.classList.add('hidden');
            progress.classList.add('hidden');
            header.classList.add('hidden');
            loader.classList.remove('hidden');

            const formData = new FormData();
            formData.append('service', service);
            formData.append('satisfaction', satisfaction);
            formData.append('impressed', impressed);
            formData.append('recommend', recommend);

            fetch('generate-review.php', {
                method: 'POST',
                body: formData
            })
            .then(res => res.json())
            .then(data => {
                loader.classList.add('hidden');

                if (data.success && data.review) {
                    // Inject review and show card
                    textArea.value = data.review;
                    const card = document.getElementById('generated_review_card');
                    card.classList.remove('hidden');
                    
                    // Trigger input event to recount words
                    textArea.dispatchEvent(new Event('input'));
                    
                    // Scroll to review card
                    card.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    
                    // Update sticky CTA text on mobile
                    updateStickyCtaState(true);

                    // Track event
                    trackEvent('generate_review', { service: service, satisfaction: satisfaction, impressed: impressed });
                } else {
                    alert('Failed to generate review. Please try again.');
                    resetWizard();
                }
            })
            .catch(err => {
                console.error('Error generating review:', err);
                alert('An error occurred. Please try again.');
                loader.classList.add('hidden');
                resetWizard();
            });
        }

        // Regenerate review calls API again
        function regenerateReview() {
            trackEvent('regenerate_review', { service: document.getElementById('selected_service').value });
            generateReview();
        }

        // Copy review content to clipboard
        function copyReview() {
            const text = textArea.value;
            if (!text.trim()) return;

            navigator.clipboard.writeText(text).then(() => {
                // Show success states
                const copyBtnText = document.getElementById('copy_btn_text');
                const copyIcon = document.getElementById('copy_icon');
                const copyBtn = document.getElementById('copy_review_btn');

                copyBtnText.textContent = 'Copied!';
                copyIcon.textContent = 'done';
                copyBtn.classList.remove('bg-white');
                copyBtn.classList.add('bg-green-brand-light', 'border-green-brand', 'text-green-brand');

                // Trigger Toast
                const toast = document.getElementById('copy-toast');
                toast.classList.remove('opacity-0', 'translate-y-4', 'pointer-events-none');
                toast.classList.add('opacity-100', 'translate-y-0');

                // Clear states after 3.5 seconds
                setTimeout(() => {
                    copyBtnText.textContent = 'Copy Review';
                    copyIcon.textContent = 'content_copy';
                    copyBtn.classList.add('bg-white');
                    copyBtn.classList.remove('bg-green-brand-light', 'border-green-brand', 'text-green-brand');
                    
                    toast.classList.add('opacity-0', 'translate-y-4', 'pointer-events-none');
                    toast.classList.remove('opacity-100', 'translate-y-0');
                }, 3500);

                trackEvent('copy_review', { service: document.getElementById('selected_service').value });
            }).catch(err => {
                console.error('Clipboard copy failed:', err);
                alert('Could not copy review text. Please select it and copy manually.');
            });
        }

        // Redirect to Google Business Review URL
        function submitGoogleReview() {
            // First, copy review to ensure they have it
            copyReview();

            // Track submit event
            trackEvent('submit_google_review', { service: document.getElementById('selected_service').value });

            // Open review in new window after a tiny delay
            setTimeout(() => {
                window.open('https://search.google.com/local/writereview?placeid=ChIJD5KWjBUbDTkRmk8GYSBygoQ', '_blank');
                
                // Show modal overlay reminder to paste review
                openRedirectModal();
            }, 300);
        }

        // Redirect Modal controller
        function openRedirectModal() {
            const modal = document.getElementById('redirect-modal');
            const content = document.getElementById('redirect-modal-content');
            
            modal.classList.remove('opacity-0', 'pointer-events-none');
            modal.classList.add('opacity-100', 'pointer-events-auto');
            content.classList.remove('scale-95');
            content.classList.add('scale-100');
        }

        function closeRedirectModal() {
            const modal = document.getElementById('redirect-modal');
            const content = document.getElementById('redirect-modal-content');
            
            modal.classList.add('opacity-0', 'pointer-events-none');
            modal.classList.remove('opacity-100', 'pointer-events-auto');
            content.classList.add('scale-95');
            content.classList.remove('scale-100');
        }

        // Sticky Mobile CTA management
        const stickyCta = document.getElementById('sticky-mobile-cta');
        const generatorSec = document.getElementById('review-generator-section');
        let reviewHasBeenGenerated = false;

        function updateStickyCtaState(generated) {
            reviewHasBeenGenerated = generated;
            const text = document.getElementById('sticky-text');
            const btnLabel = document.getElementById('sticky-btn-label');

            if (generated) {
                text.textContent = 'Review Draft Ready!';
                btnLabel.textContent = 'Submit Review';
            } else {
                text.textContent = 'Draft in 1 Minute';
                btnLabel.textContent = 'Start Draft';
            }
        }

        function handleStickyCtaClick() {
            if (reviewHasBeenGenerated) {
                submitGoogleReview();
            } else {
                generatorSec.scrollIntoView({ behavior: 'smooth' });
            }
        }

        // Intersection Observer to show sticky bar on mobile when out of view of generator section
        if (stickyCta && generatorSec) {
            const ctaObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    // Show sticky CTA if the generator section is NOT intersecting (out of view)
                    if (!entry.isIntersecting && window.innerWidth < 768) {
                        stickyCta.classList.remove('translate-y-full');
                    } else {
                        stickyCta.classList.add('translate-y-full');
                    }
                });
            }, {
                root: null,
                threshold: 0.1
            });
            ctaObserver.observe(generatorSec);
        }

        // Unified GA4 and Meta Pixel tracking helper
        function trackEvent(eventName, params) {
            console.log(`Tracking Event: ${eventName}`, params);
            
            // 1. Google Analytics 4 (GA4) Tracking
            if (typeof gtag === 'function') {
                gtag('event', eventName, params);
            }
            
            // 2. Meta Pixel custom event tracking
            if (typeof fbq === 'function') {
                fbq('trackCustom', eventName, params);
            }
        }

        // Initialize first state checks on load
        window.addEventListener('DOMContentLoaded', () => {
            validateStepState();
        });
    </script>
</body>
</html>
