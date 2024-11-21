
<footer class="bg-footer text-black py-12 pb-0">
    <div class="container mx-auto px-6">
      <!-- Upper Section: Footer Links and Subscription Form -->
      <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
        <!-- Footer Links -->

        <div>
          <h3 class="text-2xl mb-4">Know Us Better</h3>
          <ul>
            <li><a href="#" class="text-black hover:text-gray-400 transition">Affiliate Program</a></li>
            <li><a href="#" class="text-black hover:text-gray-400 transition">FAQ</a></li>
            <li><a href="#" class="text-black hover:text-gray-400 transition">Blogs</a></li>
          </ul>
        </div>

        <div>
          <h3 class="text-2xl mb-4">Company</h3>
          <ul>
            <li><a href="#" class="text-black hover:text-gray-400 transition">About Us</a></li>
            <li><a href="#" class="text-black hover:text-gray-400 transition">Careers</a></li>
            <li><a href="#" class="text-black hover:text-gray-400 transition">Press</a></li>
            <li><a href="#" class="text-black hover:text-gray-400 transition">Contact Us</a></li>
          </ul>
        </div>
  
        <div>
          <h3 class="text-2xl mb-4">Help</h3>
          <ul>
            <li><a href="#" class="text-black hover:text-gray-400 transition">FAQs</a></li>
            <li><a href="#" class="text-black hover:text-gray-400 transition">Shipping Policy</a></li>
            <li><a href="#" class="text-black hover:text-gray-400 transition">Returns & Refunds</a></li>
            <li><a href="#" class="text-black hover:text-gray-400 transition">Privacy Policy</a></li>
          </ul>
        </div>
  
        <!-- Subscription Form -->
        <div>
          <h3 class="text-2xl mb-4">Stay Connected</h3>
          <p class="text-gray-400 mb-4">Subscribe to get the latest updates and offers.</p>
          <form id="subscribeForm" class="flex">
            <input type="email" class="w-full border-2 border-primary px-4 py-2 rounded-l text-gray-900" placeholder="Enter your email" required>
            <button type="submit" class="bg-primary text-white px-4 py-2 rounded-r hover:bg-secondary">Subscribe</button>
          </form>
          <div class="mt-5">
              <h3 class="text-2xl mb-4">Follow Us</h3>
              <!-- Lower Section: Social Icons and Legal Info -->
              <div class="flex flex-col md:flex-row md:justify-between items-center text-center text-gray-400 mt-8">
                <!-- Social Media Icons -->
                <div class="flex space-x-4 mb-4 md:mb-0">
                  <a href="#" class="text-primary hover:text-secondary transition">
                    <ion-icon name="logo-facebook" size="large"></ion-icon>
                  </a>
                  <a href="#" class="text-primary hover:text-secondary transition">
                    <ion-icon name="logo-linkedin" size="large"></ion-icon>
                  </a>
                  <a href="#" class="text-primary hover:text-secondary transition">
                    <ion-icon name="logo-google" size="large"></ion-icon>
                  </a>
                  <a href="#" class="text-primary hover:text-secondary transition">
                    <ion-icon name="logo-twitter" size="large"></ion-icon>
                  </a>
                  <!-- Add other social icons as needed -->
                </div>
          
                <!-- Legal Info -->
                <div>
                  <p class="text-sm">&copy; 2024 Dot & Key. All rights reserved.</p>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
    <div class="container bg-secondary py-3 text-white">
      <div class="grid grid-cols-1 md:grid-cols-1">
        <p class="text-center">All Rights Reserved. Copyright @ 2024</p>
      </div>
    </div>
  </footer>

  <script>
     $(document).ready(function() {
      // Menu start
      $('.dropdown-toggle').on('click', function(e) {
         e.stopPropagation();

         // Close all other dropdown menus
         $('.dropdown-menu').not($(this).next('.dropdown-menu')).addClass('hidden');
         $('.dropdown-icon').not($(this).find('.dropdown-icon')).removeClass('text-gray-600').addClass('text-gray-400');

         // Toggle the clicked dropdown menu
         $(this).next('.dropdown-menu').toggleClass('hidden');
         $(this).find('.dropdown-icon').toggleClass('text-gray-600 text-gray-400');
      });

      // Close dropdown when clicking outside
      $(document).on('click', function() {
         $('.dropdown-menu').addClass('hidden');
         $('.dropdown-icon').removeClass('text-gray-600').addClass('text-gray-400');
      });
      // Menu End
   });

   $(window).on('scroll', function() {
        if ($(window).scrollTop() > 50) {
        $('header').addClass('bg-gray-100 shadow-lg');
        } else {
        $('header').removeClass('bg-gray-100 shadow-lg');
        }
    });


   </script>

   </body>

</html>

<!-- https://codepen.io/cleibert/pen/WNbppqX -->