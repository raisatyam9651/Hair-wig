<?php include 'custom-header-link.php'; ?>
<!DOCTYPE html>
<html class="scroll-smooth" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Thank You | Growig Hair Solution</title>
    <meta content="Thank you for contacting Growig Hair Solution. We have received your query and will get back to you shortly." name="description" />
    <?php include 'header-code.php'; ?>
</head>

<body class="bg-background text-on-background font-body-md antialiased selection:bg-primary-container selection:text-on-primary-container">
    <?php include 'header.php'; ?>

    <!-- ===== THANK YOU HERO ===== -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-surface-container-low pt-20">

        <!-- Ambient background blobs -->
        <div class="absolute inset-0 pointer-events-none overflow-hidden">
            <div class="absolute -top-32 -left-32 w-[600px] h-[600px] rounded-full bg-primary/5 blur-[120px]"></div>
            <div class="absolute -bottom-32 -right-32 w-[600px] h-[600px] rounded-full bg-primary/10 blur-[120px]"></div>
        </div>

        <!-- Card -->
        <div class="relative z-10 w-full max-w-2xl mx-auto px-4 py-24 text-center">

            <!-- Animated ring + checkmark -->
            <div class="flex items-center justify-center mb-10">
                <div class="relative">
                    <!-- Outer pulse rings -->
                    <div class="absolute inset-0 rounded-full border-2 border-primary/30 animate-ping" style="animation-duration:2s"></div>
                    <div class="absolute inset-0 m-[-12px] rounded-full border border-primary/20 animate-ping" style="animation-duration:2.8s"></div>

                    <!-- Circle -->
                    <div class="relative w-28 h-28 rounded-full bg-primary flex items-center justify-center shadow-[0_20px_60px_rgba(115,91,37,0.3)]">
                        <svg class="w-14 h-14" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle class="check-circle" cx="26" cy="26" r="25" fill="none" stroke="rgba(255,255,255,0.4)" stroke-width="1.5" stroke-dasharray="157" stroke-dashoffset="157" style="animation: drawCircle 0.6s ease forwards 0.2s;" />
                            <path class="check-path" d="M14 27l9 9 16-18" fill="none" stroke="#FFFFFF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" stroke-dasharray="40" stroke-dashoffset="40" style="animation: drawCheck 0.5s ease forwards 0.9s;" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Badge -->
            <div class="inline-flex items-center gap-2 bg-primary/10 border border-primary/20 rounded-full px-5 py-2 mb-8">
                <div class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"></div>
                <span class="text-primary text-xs font-bold uppercase tracking-[0.25em]">Consultation Request Received</span>
                <div class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"></div>
            </div>

            <!-- Headline -->
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-secondary mb-6 leading-tight font-display-lg">
                Thank <span class="text-primary">You!</span>
            </h1>

            <!-- Decorative line -->
            <div class="w-16 h-0.5 bg-gradient-to-r from-transparent via-primary to-transparent mx-auto mb-8"></div>

            <!-- Message card -->
            <div class="relative bg-[#fcf9f4] rounded-3xl shadow-sm p-8 md:p-12 mb-10 border border-outline-variant/30 glass-card">
                <div class="relative">
                    <p class="text-on-surface text-lg md:text-xl font-light leading-relaxed mb-4">
                        We have successfully received your inquiry and are <span class="text-primary font-semibold">ready to help you</span>.
                    </p>
                    <p class="text-on-surface-variant text-base md:text-lg font-light leading-relaxed mb-8">
                        Our hair experts in Dwarka will review your details and connect with you <span class="text-primary font-medium">within 24 hours</span> to schedule your private, complementary consultation.
                    </p>

                    <!-- Three promise icons -->
                    <div class="grid grid-cols-3 gap-4 pt-6 border-t border-outline-variant/30">
                        <div class="flex flex-col items-center gap-2">
                            <div class="w-11 h-11 rounded-2xl bg-primary/5 flex items-center justify-center">
                                <span class="material-symbols-outlined text-primary">schedule</span>
                            </div>
                            <span class="text-[10px] uppercase tracking-widest text-on-surface-variant font-semibold">Quick Reply</span>
                        </div>
                        <div class="flex flex-col items-center gap-2">
                            <div class="w-11 h-11 rounded-2xl bg-primary/5 flex items-center justify-center">
                                <span class="material-symbols-outlined text-primary">verified_user</span>
                            </div>
                            <span class="text-[10px] uppercase tracking-widest text-on-surface-variant font-semibold">Private &amp; Safe</span>
                        </div>
                        <div class="flex flex-col items-center gap-2">
                            <div class="w-11 h-11 rounded-2xl bg-primary/5 flex items-center justify-center">
                                <span class="material-symbols-outlined text-primary">support_agent</span>
                            </div>
                            <span class="text-[10px] uppercase tracking-widest text-on-surface-variant font-semibold">Expert Care</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="./" class="group inline-flex items-center gap-3 bg-primary text-white px-8 py-4 rounded-full font-semibold text-base hover:bg-primary-container transition-all duration-300 shadow-md">
                    <span class="material-symbols-outlined text-[18px]">arrow_back</span>
                    Back to Home
                </a>
                <a href="./#services" class="group inline-flex items-center gap-3 bg-white border border-outline/30 text-secondary px-8 py-4 rounded-full font-semibold text-base hover:border-primary transition-all duration-300 shadow-sm">
                    Explore Solutions
                    <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                </a>
            </div>

        </div>
    </section>

    <?php include 'footer.php'; ?>

    <style>
        @keyframes drawCircle {
            to {
                stroke-dashoffset: 0;
            }
        }

        @keyframes drawCheck {
            to {
                stroke-dashoffset: 0;
            }
        }
    </style>
</body>

</html>
