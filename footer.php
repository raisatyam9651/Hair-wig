<?php
$path_prefix = isset($path_prefix) ? $path_prefix : ((strpos($_SERVER['PHP_SELF'], '/blog/') !== false) ? '../' : '');
?>
<!-- Footer -->
    <footer class="bg-primary text-white w-full border-t border-white/10 pt-20 pb-10">
        <div class="max-w-[1280px] mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
                <!-- Brand & About -->
                <div class="flex flex-col gap-6">
                    <a class="flex items-center gap-2 group" href="<?php echo $path_prefix; ?>./">
                        <img alt="Growig Logo" class="h-10 w-auto object-contain brightness-0 invert opacity-90"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuB_Fvti5zj5yA0e3mx5gnZWkmjw05AByrcoLzIdiVdh1ROEx263HQYnxKhkuIFQpQeEK5r6MWx6ztYxygylaLwM1vObXU4_y14AoejXVBNy9ei7Vc6yQ8U4_LQbDbVk_cM24aYXAPFHcsqHU0LF7G7A1XoDEAE-8aMgkOvHqcjuCWArzAZMAExVP7lQyH9uHDU0Nr4I0rJGTiTp7LRyQwWfxG7nKdaDV9y-v1vyEGwFKeV0_RwaHSm5H32bgi9ZFh-CWUvvmz5-kRs" />
                    </a>
                    <div class="space-y-4">
                        <p class="font-body-md text-white/80 text-sm leading-relaxed pr-4">
                            Premium non-surgical hair replacement studio in Dwarka. Dedicated to restoring confidence with
                            undetectable, bespoke solutions.
                        </p>
                        <div class="flex flex-col gap-3 text-white/80 text-sm pt-2">
                            <div class="flex items-start gap-3">
                                <span class="material-symbols-outlined text-white text-[20px] mt-0.5">phone</span>
                                <div class="flex flex-col gap-1">
                                    <a class="hover:text-primary-fixed transition-colors font-body-md" href="tel:+918766216564">+91 87662 16564</a>
                                    <a class="hover:text-primary-fixed transition-colors font-body-md" href="tel:+917678472972">+91 76784 72972</a>
                                </div>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="material-symbols-outlined text-white text-[20px]">mail</span>
                                <a class="hover:text-primary-fixed transition-colors font-body-md" href="mailto:info@growighairsolution.com">info@growighairsolution.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Navigation -->
                <div class="flex flex-col gap-4">
                    <h4 class="font-label-md text-white uppercase tracking-widest mb-2 text-sm font-bold">Explore</h4>
                    <a class="text-white/80 hover:text-primary-fixed transition-colors font-body-md text-sm"
                        href="<?php echo $path_prefix; ?>./">Home</a>
                    <a class="text-white/80 hover:text-primary-fixed transition-colors font-body-md text-sm"
                        href="<?php echo $path_prefix; ?>about">About Us</a>
                    <a class="text-white/80 hover:text-primary-fixed transition-colors font-body-md text-sm"
                        href="<?php echo $path_prefix; ?>gallery">Gallery</a>
                    <a class="text-white/80 hover:text-primary-fixed transition-colors font-body-md text-sm"
                        href="<?php echo $path_prefix; ?>blog">Blog</a>
                    <a class="text-white/80 hover:text-primary-fixed transition-colors font-body-md text-sm"
                        href="<?php echo $path_prefix; ?>contact">Contact</a>
                    <a class="text-white/80 hover:text-primary-fixed transition-colors font-body-md text-sm"
                        href="<?php echo $path_prefix; ?>review-assistant">Review Us</a>
                    <a class="text-white/80 hover:text-primary-fixed transition-colors font-body-md text-sm"
                        href="<?php echo $path_prefix; ?>sitemap.php">Sitemap</a>
                    <a class="text-white/80 hover:text-primary-fixed transition-colors font-body-md text-sm"
                        href="<?php echo $path_prefix; ?>sitemap.xml" target="_blank">XML Sitemap</a>
                </div>
                <!-- Services -->
                <div class="flex flex-col gap-4">
                    <h4 class="font-label-md text-white uppercase tracking-widest mb-2 text-sm font-bold">Services</h4>
                    <a class="text-white/80 hover:text-primary-fixed transition-colors font-body-md text-sm"
                        href="<?php echo $path_prefix; ?>premium-hair-patch">Premium Hair Patch</a>
                    <a class="text-white/80 hover:text-primary-fixed transition-colors font-body-md text-sm"
                        href="<?php echo $path_prefix; ?>full-hair-wig">Full Hair Wigs</a>
                    <a class="text-white/80 hover:text-primary-fixed transition-colors font-body-md text-sm"
                        href="<?php echo $path_prefix; ?>non-surgical-replacement">Non-Surgical Replacement</a>
                    <a class="text-white/80 hover:text-primary-fixed transition-colors font-body-md text-sm"
                        href="<?php echo $path_prefix; ?>hair-bonding">Hair Bonding</a>
                    <a class="text-white/80 hover:text-primary-fixed transition-colors font-body-md text-sm"
                        href="<?php echo $path_prefix; ?>maintenance-and-styling">Maintenance & Styling</a>
                    <a class="text-white/80 hover:text-primary-fixed transition-colors font-body-md text-sm"
                        href="<?php echo $path_prefix; ?>custom-hairline-design">Customize Your Patch</a>
                </div>
                <!-- Location -->
                <div class="flex flex-col gap-4">
                    <h4 class="font-label-md text-white uppercase tracking-widest mb-2 text-sm font-bold">Location</h4>
                    <div class="flex items-start gap-3 text-white/80 text-sm">
                        <span class="material-symbols-outlined text-white text-[20px]">location_on</span>
                        <span>Ramphal Chowk Rd, Block- E-1085, Palam, Ramphal Chowk, Dwarka Sec-7, New Delhi-110077</span>
                    </div>
                    <div class="w-full h-[150px] rounded-xl overflow-hidden shadow-sm border border-white/10 mt-2">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3704.2060479792467!2d77.06936177571829!3d28.58520787569065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1b158c96920f%3A0x8482722061064f9a!2sGrowig%20hair%20solution!5e1!3m2!1sen!2sin!4v1780336153874!5m2!1sen!2sin" class="w-full h-full" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <!-- Bottom Footer -->
            <div class="flex flex-col md:flex-row justify-between items-center gap-6 pt-12 border-t border-white/10">
                <div class="text-white/60 text-xs">
                    © 2026 GROWIG HAIR SOLUTIONS. ALL RIGHTS RESERVED.
                </div>
            </div>
        </div>
    </footer>
    <?php if (basename($_SERVER['PHP_SELF']) !== 'review-assistant.php' && strpos($_SERVER['PHP_SELF'], 'review-assistant') === false): ?>
    <!-- ===== WHATSAPP WIDGET ===== -->
    <div id="whatsapp-widget-container">
      <!-- Floating Button -->
      <div class="whatsapp-chat-button fixed bottom-6 right-6 z-50 w-14 h-14 bg-[#25D366] text-white rounded-full flex items-center justify-center shadow-lg hover:scale-110 transition-transform duration-300 cursor-pointer" id="whatsappButton" onclick="openWhatsAppPopup()">
        <svg fill="currentColor" height="28" viewbox="0 0 16 16" width="28" xmlns="http://www.w3.org/2000/svg">
            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"></path>
        </svg>
      </div>

      <!-- Popup Overlay -->
      <div class="whatsapp-popup-overlay" id="whatsappOverlay" onclick="closeWhatsAppPopup()"></div>

      <!-- Popup Modal -->
      <div class="whatsapp-popup-modal" id="whatsappModal">
        <div class="popup-header" style="background: linear-gradient(135deg, #735b25 0%, #5a430f 100%); color: white; padding: 20px; position: relative; display: flex; align-items: center; gap: 16px;">
          <div class="header-icon" style="flex-shrink: 0; width: 44px; height: 44px; background: rgba(255, 255, 255, 0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; backdrop-filter: blur(10px);">
            <svg fill="white" height="24" viewbox="0 0 16 16" width="24" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"></path>
            </svg>
          </div>
          <div class="header-text" style="font-family: inherit;">
            <h2 style="margin: 0 0 4px 0; font-size: 18px; font-weight: 700; color: white;">Start a Conversation</h2>
            <p style="margin: 0; font-size: 13px; opacity: 0.9; color: white;">Hi! Fill the form below to chat with us on WhatsApp</p>
          </div>
          <button class="close-btn" onclick="closeWhatsAppPopup()" style="position: absolute; top: 16px; right: 20px; background: rgba(255,255,255,0.2); border: none; color: white; font-size: 20px; cursor: pointer; padding: 8px; line-height: 1; border-radius: 50%; width: 36px; height: 36px; display: flex; align-items: center; justify-content: center; transition: background-color 0.3s ease;">&times;</button>
        </div>

        <div class="popup-content" style="padding: 24px;">
          <form id="whatsappLeadForm" onsubmit="submitWhatsAppLead(event)">
            <div class="form-group" style="margin-bottom: 20px;">
              <label for="userName" style="display: block; margin-bottom: 8px; font-weight: 600; color: #333; font-size: 14px;">Your Name *</label>
              <input type="text" id="userName" name="name" required placeholder="Enter your full name" style="width: 100%; padding: 12px 16px; border: 2px solid #e0e0e0; border-radius: 10px; font-size: 16px; box-sizing: border-box; transition: all 0.3s ease; background: #fff;">
            </div>

            <div class="form-group" style="margin-bottom: 24px;">
              <label for="userPhone" style="display: block; margin-bottom: 8px; font-weight: 600; color: #333; font-size: 14px;">Phone Number *</label>
              <input type="tel" id="userPhone" name="phone" required placeholder="Enter your phone number" maxlength="10" style="width: 100%; padding: 12px 16px; border: 2px solid #e0e0e0; border-radius: 10px; font-size: 16px; box-sizing: border-box; transition: all 0.3s ease; background: #fff;">
            </div>

            <button type="submit" class="submit-btn" id="whatsappSubmitButton" style="width: 100%; background: linear-gradient(135deg, #25d366 0%, #20ba5a 100%); color: white; padding: 16px; border: none; border-radius: 10px; font-size: 16px; font-weight: 600; cursor: pointer; transition: all 0.3s ease; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 15px rgba(37, 211, 102, 0.3);">
              Start WhatsApp Chat
            </button>
          </form>
        </div>
      </div>
    </div>

    <style>
      /* Popup Overlay */
      .whatsapp-popup-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        z-index: 999998;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
      }
      .whatsapp-popup-overlay.show {
        opacity: 1;
        visibility: visible;
      }

      /* Popup Modal */
      .whatsapp-popup-modal {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) scale(0.8);
        width: 420px;
        max-width: 90vw;
        max-height: 90vh;
        background: white;
        border-radius: 16px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        z-index: 999999;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        overflow: hidden;
      }
      .whatsapp-popup-modal.show {
        opacity: 1;
        visibility: visible;
        transform: translate(-50%, -50%) scale(1);
      }

      .form-group input:focus {
        outline: none;
        border-color: #735b25 !important;
        box-shadow: 0 0 0 3px rgba(115, 91, 37, 0.1) !important;
      }

      /* Loading spinner */
      .whatsapp-spinner {
        border: 2px solid #f3f3f3;
        border-top: 2px solid #ffffff;
        border-radius: 50%;
        width: 16px;
        height: 16px;
        animation: whatsapp-spin 1s linear infinite;
        display: inline-block;
        margin-right: 8px;
      }
      @keyframes whatsapp-spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
      }
    </style>

    <script>
      // Auto open popup after 40 seconds
      setTimeout(function () {
        openWhatsAppPopup();
      }, 40000);

      // Open popup function
      function openWhatsAppPopup() {
        document.getElementById('whatsappModal').classList.add('show');
        document.getElementById('whatsappOverlay').classList.add('show');
      }

      // Close popup function
      function closeWhatsAppPopup() {
        document.getElementById('whatsappModal').classList.remove('show');
        document.getElementById('whatsappOverlay').classList.remove('show');
      }

      // Handle form submission
      function submitWhatsAppLead(event) {
        event.preventDefault();

        const name = document.getElementById('userName').value.trim();
        const phone = document.getElementById('userPhone').value.trim();
        const submitBtn = document.getElementById('whatsappSubmitButton');

        if (!name || !phone) {
          alert('Please fill in all required fields');
          return;
        }

        if (!/^[0-9]{10}$/.test(phone)) {
          alert('Please enter a valid 10-digit phone number');
          return;
        }

        // Show loading state
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<div class="whatsapp-spinner"></div>Connecting...';

        // Create form data
        const formData = new FormData();
        formData.append('name', name);
        formData.append('phone', phone);
        formData.append('action', 'whatsapp_lead');

        // Send data to PHP handler in background
        fetch('<?php echo $path_prefix; ?>whatsapp_handler.php', {
          method: 'POST',
          body: formData
        })
        .then(response => response.json())
        .catch(error => console.error('Error logging lead:', error))
        .finally(() => {
          submitBtn.disabled = false;
          submitBtn.innerHTML = 'Start WhatsApp Chat';
        });

        // Redirect to WhatsApp immediately
        const message = `Hi, I'm ${name}. My phone number is ${phone}. I'm interested in your services.`;
        const whatsappUrl = `https://api.whatsapp.com/send/?phone=918766216564&text=${encodeURIComponent(message)}&type=phone_number&app_absent=0`;
        window.open(whatsappUrl, '_blank');

        // Immediate UI Cleanup
        closeWhatsAppPopup();
        document.getElementById('whatsappLeadForm').reset();
      }

      // Phone number validation
      document.getElementById('userPhone').addEventListener('input', function (e) {
        let value = e.target.value.replace(/\D/g, '');
        if (value.length > 10) {
          value = value.substring(0, 10);
        }
        e.target.value = value;
      });
    </script>
    <?php endif; ?>
    <script src="<?php echo $path_prefix; ?>script.js?v=3" defer></script>