<?php include_once __DIR__ . "/includes/header.php";
include_once __DIR__ . "/home/slider.php";

?>
  

  <section class="py-12 bg-center">
    <div class="container mx-auto text-center">
      <!-- <a class="text-5xl font-bold items-center" href="#"> Best Sellers</a> -->
      <h3 class="text-4xl font-bold items-center mb-10">Best Sellers</h3>
      
      <!-- Tabs Navigation -->
      <div class="flex bestseller tab justify-content-center">
        <button class="tab-button"
                data-tab="tab1">Moisturizers</button>
        <button class="tab-button"
                data-tab="tab2">Sunscreens</button>
        <button class="tab-button"
                data-tab="tab3">Serums</button>
        <button class="tab-button"
                data-tab="tab4">Facewash</button>
      </div>
      
      <!-- Tabs Content -->
      <div class="p-4">
        <div id="tab1" class="tab-content">
          <div class="w-full max-w-xs bg-white shadow-md rounded-2xl overflow-hidden m-4 flex flex-col">
            <a href="/products/vitamin-c-e-super-bright-moisturizer" class="flex flex-col">
              <div class="relative">
                <img
                  src="//www.dotandkey.com/cdn/shop/files/1c-Vit-C-Moisturizer.jpg"
                  alt="Vitamin C + E Moisturizer for Glowing Skin"
                  class="w-full h-48 object-cover"
                />
                <div class="absolute top-2 left-2 px-2 py-1 text-orange-500 border border-orange-500 rounded-sm bg-white text-xs">
                  BESTSELLER
                </div>
              </div>
              <h3 class="mt-2 py-3 text-xl font-bold text-gray-800 px-5 text-left">Vitamin C + E Moisturizer for Glowing Skin</h3>
            </a>

            <div class="flex items-center mt-2 gap-1 px-4 py-3">
              <span class="text-white rounded-lg text-sm px-3 py-1 bg-green"><ion-icon name="star"></ion-icon> 4.8</span>
              <span class="text-gray-500 text-sm font-semibold">(812)</span>
            </div>
          
            <!-- Weight Options -->
            <div class="flex mt-3 space-x-2 px-5">
              <button class="weight-option-button text-sm px-3 py-1 rounded border border-primary bg-primary text-white rounded-lg" data-weight="30g" data-price="₹200">30g</button>
              <button class="weight-option-button text-sm px-3 py-1 rounded border border-primary bg-primary text-white rounded-lg" data-weight="60g" data-price="₹396">60g</button>
              <button class="weight-option-button text-sm px-3 py-1 rounded border border-primary bg-primary text-white rounded-lg" data-weight="100g" data-price="₹650">100g</button>
            </div>
          
            <!-- Pricing Section -->
            <div class="flex items-center mt-2 gap-2 px-5">
              <span class="text-2xl font-semibold text-gray-700" id="selected-price">₹396</span>
              <span class="text-md font-semibold text-gray-500 line-through">₹495</span>
              <span class="text-md text-primary">(20% OFF)</span>
            </div>
          
            <button class="flex gap-x-2 items-center justify-center w-full mt-4 py-4 bg-secondary text-white rounded hover:bg-primary transition-colors uppercase">
              <ion-icon name="cart-outline" size="large"></ion-icon> Add to Cart
            </button>
          </div>
        </div>
        <div id="tab2" class="tab-content hidden">
          <h2 class="text-lg font-semibold mb-2">
             
            <div class="relative">
              <div id="carrusel" class="flex flex-row overflow-x-auto mx-6">
                <!-- Add your carousel items here -->
              </div>

              <!-- Left arrow (draggable) -->
              <div id="carrousel-left" class="arrow bg-blue-700 text-white p-3 shadow cursor-pointer hover:bg-blue-600">
                <span class="lnr lnr-chevron-left"></span>
              </div>

              <!-- Right arrow (draggable) -->
              <div id="carrousel-right" class="arrow right-0 bg-blue-700 text-white p-3 shadow cursor-pointer hover:bg-blue-600">
                <span class="lnr lnr-chevron-right"></span>
              </div>
            </div>

        </div>
        <div id="tab3" class="tab-content hidden">
          <h2 class="text-lg font-semibold mb-2">Tab 3 Content</h2>
          <p class="text-gray-600">This is the content for Tab 3.</p>
        </div>
        <div id="tab4" class="tab-content hidden">
          <h2 class="text-lg font-semibold mb-2">Tab 4 Content</h2>
          <p class="text-gray-600">This is the content for Tab 4.</p>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="swiper swiper2 w-full h-full">
      <div class="swiper-wrapper">
        <div class="swiper-slide flex items-center justify-center text-xl bg-white py-10"><img src="images/offers.jpg" alt="offers1"></div>
        <div class="swiper-slide flex items-center justify-center text-xl bg-white py-10"><img src="images/offers.jpg" alt="offers2"></div>
      </div>
      <div class="swiper-button-next swiper2-button-next"></div>
      <div class="swiper-button-prev swiper2-button-prev"></div>
      <div class="swiper-pagination swiper2-pagination"></div>
    </div>
  </section>

   <section class="py-12 bg-white">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-3xl font-bold mb-8 text-gray-700">New Arrivals</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
          <!-- Arrivals1 starts -->
          <div class="w-full max-w-xs bg-white shadow-md rounded-2xl overflow-hidden m-4 flex flex-col">
            <a href="/products/vitamin-c-e-super-bright-moisturizer" class="flex flex-col">
              <div class="relative">
                <img
                  src="images/arraivals1.jpg" 
                  alt="Strobe Creams - Highlighter + Moisturizer"
                  class="w-full h-48 object-cover"
                />
              </div>
              <h3 class="mt-2 py-3 text-xl font-bold text-gray-800 px-5 text-left">Strobe Creams - Highlighter + Moisturizer</h3>
            </a>

            <div class="flex items-center mt-2 gap-1 px-4 py-3">
              <span class="text-white rounded-lg text-sm px-3 py-1 bg-green"><ion-icon name="star"></ion-icon> 4.8</span>
              <span class="text-gray-500 text-sm font-semibold">(812)</span>
            </div>
          
            <!-- Weight Options -->
            <div class="flex mt-3 space-x-2 px-5">
              <button class="weight-option-button text-sm px-3 py-1 rounded border border-primary bg-primary text-white rounded-lg" data-weight="30g" data-price="₹200">30g</button>
              <button class="weight-option-button text-sm px-3 py-1 rounded border border-primary bg-primary text-white rounded-lg" data-weight="60g" data-price="₹396">60g</button>
              <button class="weight-option-button text-sm px-3 py-1 rounded border border-primary bg-primary text-white rounded-lg" data-weight="100g" data-price="₹650">100g</button>
            </div>
          
            <!-- Pricing Section -->
            <div class="flex items-center mt-2 gap-2 px-5">
              <span class="text-2xl font-semibold text-gray-700" id="selected-price">₹396</span>
              <span class="text-md font-semibold text-gray-500 line-through">₹495</span>
              <span class="text-md text-primary">(20% OFF)</span>
            </div>
          
            <button class="flex gap-x-2 items-center justify-center w-full mt-4 py-4 bg-secondary text-white rounded hover:bg-primary transition-colors uppercase">
              <ion-icon name="cart-outline" size="large"></ion-icon> Add to Cart
            </button>
          </div>
          <!-- Arrivals1 ends -->

          <!-- Arrivals2 starts -->
          <div class="w-full max-w-xs bg-white shadow-md rounded-2xl overflow-hidden m-4 flex flex-col">
            <a href="/products/vitamin-c-e-super-bright-moisturizer" class="flex flex-col">
              <div class="relative">
                <img
                  src="images/arraivals2.jpg" 
                  alt="Strawberry Dew Tinted Sunscreen SPF 50+ PA++++"
                  class="w-full h-48 object-cover"
                />
              </div>
              <h3 class="mt-2 py-3 text-xl font-bold text-gray-800 px-5 text-left">Strawberry Dew Tinted Sunscreen SPF 50+ PA++++</h3>
            </a>

            <div class="flex items-center mt-2 gap-1 px-4 py-3">
              <span class="text-white rounded-lg text-sm px-3 py-1 bg-green"><ion-icon name="star"></ion-icon> 4.8</span>
              <span class="text-gray-500 text-sm font-semibold">(812)</span>
            </div>
          
            <!-- Weight Options -->
            <div class="flex mt-3 space-x-2 px-5">
              <button class="weight-option-button text-sm px-3 py-1 rounded border border-primary bg-primary text-white rounded-lg" data-weight="30g" data-price="₹200">30g</button>
              <button class="weight-option-button text-sm px-3 py-1 rounded border border-primary bg-primary text-white rounded-lg" data-weight="60g" data-price="₹396">60g</button>
              <button class="weight-option-button text-sm px-3 py-1 rounded border border-primary bg-primary text-white rounded-lg" data-weight="100g" data-price="₹650">100g</button>
            </div>
          
            <!-- Pricing Section -->
            <div class="flex items-center mt-2 gap-2 px-5">
              <span class="text-2xl font-semibold text-gray-700" id="selected-price">₹396</span>
              <span class="text-md font-semibold text-gray-500 line-through">₹495</span>
              <span class="text-md text-primary">(20% OFF)</span>
            </div>
          
            <button class="flex gap-x-2 items-center justify-center w-full mt-4 py-4 bg-secondary text-white rounded hover:bg-primary transition-colors uppercase">
              <ion-icon name="cart-outline" size="large"></ion-icon> Add to Cart
            </button>
          </div>
          <!-- Arrivals2 ends -->

          <!-- Arrivals3 starts -->
          <div class="w-full max-w-xs bg-white shadow-md rounded-2xl overflow-hidden m-4 flex flex-col">
            <a href="/products/vitamin-c-e-super-bright-moisturizer" class="flex flex-col">
              <div class="relative">
                <img
                  src="images/arraivals3.jpg" 
                  alt="Glow Boosters Gift Box"
                  class="w-full h-48 object-cover"
                />
              </div>
              <h3 class="mt-2 py-3 text-xl font-bold text-gray-800 px-5 text-left">Glow Boosters Gift Box</h3>
            </a>

            <div class="flex items-center mt-2 gap-1 px-4 py-3">
              <span class="text-white rounded-lg text-sm px-3 py-1 bg-green"><ion-icon name="star"></ion-icon> 4.8</span>
              <span class="text-gray-500 text-sm font-semibold">(812)</span>
            </div>
          
            <!-- Weight Options -->
            <div class="flex mt-3 space-x-2 px-5">
              <button class="weight-option-button text-sm px-3 py-1 rounded border border-primary bg-primary text-white rounded-lg" data-weight="30g" data-price="₹200">30g</button>
              <button class="weight-option-button text-sm px-3 py-1 rounded border border-primary bg-primary text-white rounded-lg" data-weight="60g" data-price="₹396">60g</button>
              <button class="weight-option-button text-sm px-3 py-1 rounded border border-primary bg-primary text-white rounded-lg" data-weight="100g" data-price="₹650">100g</button>
            </div>
          
            <!-- Pricing Section -->
            <div class="flex items-center mt-2 gap-2 px-5">
              <span class="text-2xl font-semibold text-gray-700" id="selected-price">₹396</span>
              <span class="text-md font-semibold text-gray-500 line-through">₹495</span>
              <span class="text-md text-primary">(20% OFF)</span>
            </div>
          
            <button class="flex gap-x-2 items-center justify-center w-full mt-4 py-4 bg-secondary text-white rounded hover:bg-primary transition-colors uppercase">
              <ion-icon name="cart-outline" size="large"></ion-icon> Add to Cart
            </button>
          </div>
          <!-- Arrivals3 ends -->

          <!-- Arrivals4 starts -->
          <div class="w-full max-w-xs bg-white shadow-md rounded-2xl overflow-hidden m-4 flex flex-col">
            <a href="/products/vitamin-c-e-super-bright-moisturizer" class="flex flex-col">
              <div class="relative">
                <img
                  src="images/arraivals4.jpg" 
                  alt="Happy Hydration Gift Box"
                  class="w-full h-48 object-cover"
                />
              </div>
              <h3 class="mt-2 py-3 text-xl font-bold text-gray-800 px-5 text-left">Happy Hydration Gift Box</h3>
            </a>

            <div class="flex items-center mt-2 gap-1 px-4 py-3">
              <span class="text-white rounded-lg text-sm px-3 py-1 bg-green"><ion-icon name="star"></ion-icon> 4.8</span>
              <span class="text-gray-500 text-sm font-semibold">(812)</span>
            </div>
          
            <!-- Weight Options -->
            <div class="flex mt-3 space-x-2 px-5">
              <button class="weight-option-button text-sm px-3 py-1 rounded border border-primary bg-primary text-white rounded-lg" data-weight="30g" data-price="₹200">30g</button>
              <button class="weight-option-button text-sm px-3 py-1 rounded border border-primary bg-primary text-white rounded-lg" data-weight="60g" data-price="₹396">60g</button>
              <button class="weight-option-button text-sm px-3 py-1 rounded border border-primary bg-primary text-white rounded-lg" data-weight="100g" data-price="₹650">100g</button>
            </div>
          
            <!-- Pricing Section -->
            <div class="flex items-center mt-2 gap-2 px-5">
              <span class="text-2xl font-semibold text-gray-700" id="selected-price">₹396</span>
              <span class="text-md font-semibold text-gray-500 line-through">₹495</span>
              <span class="text-md text-primary">(20% OFF)</span>
            </div>
          
            <button class="flex gap-x-2 items-center justify-center w-full mt-4 py-4 bg-secondary text-white rounded hover:bg-primary transition-colors uppercase">
              <ion-icon name="cart-outline" size="large"></ion-icon> Add to Cart
            </button>
          </div>
          <!-- Arrivals4 ends -->

      </div>

        
      </div>
    </div>
  </section>

  <section class="py-5">
    <div class="max-w-md mx-auto px-4 text-center">
      <h2 class="text-3xl font-bold mb-1 text-gray-700">Clean Beauty</h2>
      <p class="text-sm text-center mb-8 text-gray-700" >with uncompromised efficacy</p>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white p-6">
          <img src="images/cruelty.jpg" alt="" class="mx-auto">
        </div>
        <div class="bg-white p-6">
          <img src="images/plant.jpg" alt="" class="mx-auto">
        </div>
        <div class="bg-white p-6">
          <img src="images/clinically.jpg"  alt="" class="mx-auto">
        </div>        
        
      </div>
    </div>
  </section>

 
  <!-- <section class="py-12 bg-pink-100">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-3xl font-bold mb-8 text-gray-700">Why Choose Us?</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        
    
        <div class="bg-white p-6 rounded-lg shadow-md">
          <img src="https://via.placeholder.com/64" alt="Benefit Icon" class="mx-auto mb-4">
          <h3 class="text-lg font-semibold text-gray-800">Natural Ingredients</h3>
          <p class="text-gray-600 mt-2">Our products are made with all-natural, organic ingredients to nourish your skin.</p>
        </div>

        
      </div>
    </div>
  </section> -->

  <section class="py-12 bg-pink-100">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-3xl font-bold mb-8 text-gray-700">Featured In</h2>
      <div class="grid grid-cols-1 md:grid-cols-4 gap-8 items-center" style="justify-items:center">
        
        <div><img src="images/featured1.jpg" alt="featured1" width="150"></div>
        <div><img src="images/featured2.jpg" alt="featured2" width="150" ></div>
        <div><img src="images/featured3.jpg" alt="featured3" width="150" ></div>
        <div><img src="images/featured4.jpg" alt="featured4" width="150"></div>
        
      </div>
    </div>
  </section>

 
  <section class="py-12 bg-white">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-3xl font-bold mb-8 text-gray-700">Customer Love</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        
       
        <div class="bg-gray-50 p-6 rounded-lg shadow-md text-left">
          <div class="review-card">
            <div class="review-header flex items-center justify-between">
              <img src="images/customer1.jpg" alt="" width="100px">
              <div class="review-person-name flex align-center relative">
                  <strong class="flex column">
                    <p>Megha</p> 
                    <p>Parashar</p>
                  </strong>
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17" fill="none">
                    <path d="M6.50511 16.6685L5.0139 14.204L2.17794 13.6052L2.45564 10.7362L0.542969 8.58774L2.45564 6.43929L2.17794 3.57031L5.01479 2.97148L6.506 0.506104L9.16338 1.60747L11.8216 0.506104L13.3129 2.97148L16.1488 3.57031L15.8711 6.43929L17.7838 8.58774L15.8711 10.7362L16.1488 13.6052L13.312 14.204L11.8208 16.6694L9.16338 15.568L6.50511 16.6685ZM8.22579 11.0899L12.653 6.74921L12.0208 6.11886L8.22579 9.83968L6.30598 7.96789L5.67378 8.58774L8.22579 11.0899Z" fill="#3898EF"></path>
                  </svg>
              </div>
            </div>
              <div class="review-rating flex py-2">
               <svg xmlns="http://www.w3.org/2000/svg" width="26" height="25" viewBox="0 0 26 25" fill="none">
                 <path d="M12.9413 20.5838L19.0116 24.2552C20.1233 24.9281 21.4836 23.9334 21.1911 22.6755L19.5821 15.7714L24.9503 11.1199C25.9303 10.2715 25.4037 8.66252 24.1165 8.56013L17.0516 7.96041L14.287 1.43664C13.7897 0.251832 12.0929 0.251832 11.5956 1.43664L8.83104 7.94578L1.76606 8.5455C0.478863 8.64789 -0.0477189 10.2569 0.932309 11.1053L6.30052 15.7568L4.69152 22.6608C4.39897 23.9188 5.75931 24.9134 6.87098 24.2406L12.9413 20.5838Z" fill="#82B51B"></path>
               </svg>

               <svg xmlns="http://www.w3.org/2000/svg" width="26" height="25" viewBox="0 0 26 25" fill="none">
                 <path d="M12.9413 20.5838L19.0116 24.2552C20.1233 24.9281 21.4836 23.9334 21.1911 22.6755L19.5821 15.7714L24.9503 11.1199C25.9303 10.2715 25.4037 8.66252 24.1165 8.56013L17.0516 7.96041L14.287 1.43664C13.7897 0.251832 12.0929 0.251832 11.5956 1.43664L8.83104 7.94578L1.76606 8.5455C0.478863 8.64789 -0.0477189 10.2569 0.932309 11.1053L6.30052 15.7568L4.69152 22.6608C4.39897 23.9188 5.75931 24.9134 6.87098 24.2406L12.9413 20.5838Z" fill="#82B51B"></path>
               </svg>

               <svg xmlns="http://www.w3.org/2000/svg" width="26" height="25" viewBox="0 0 26 25" fill="none">
                 <path d="M12.9413 20.5838L19.0116 24.2552C20.1233 24.9281 21.4836 23.9334 21.1911 22.6755L19.5821 15.7714L24.9503 11.1199C25.9303 10.2715 25.4037 8.66252 24.1165 8.56013L17.0516 7.96041L14.287 1.43664C13.7897 0.251832 12.0929 0.251832 11.5956 1.43664L8.83104 7.94578L1.76606 8.5455C0.478863 8.64789 -0.0477189 10.2569 0.932309 11.1053L6.30052 15.7568L4.69152 22.6608C4.39897 23.9188 5.75931 24.9134 6.87098 24.2406L12.9413 20.5838Z" fill="#82B51B"></path>
               </svg>

               <svg xmlns="http://www.w3.org/2000/svg" width="26" height="25" viewBox="0 0 26 25" fill="none">
                 <path d="M12.9413 20.5838L19.0116 24.2552C20.1233 24.9281 21.4836 23.9334 21.1911 22.6755L19.5821 15.7714L24.9503 11.1199C25.9303 10.2715 25.4037 8.66252 24.1165 8.56013L17.0516 7.96041L14.287 1.43664C13.7897 0.251832 12.0929 0.251832 11.5956 1.43664L8.83104 7.94578L1.76606 8.5455C0.478863 8.64789 -0.0477189 10.2569 0.932309 11.1053L6.30052 15.7568L4.69152 22.6608C4.39897 23.9188 5.75931 24.9134 6.87098 24.2406L12.9413 20.5838Z" fill="#82B51B"></path>
               </svg>

               <svg xmlns="http://www.w3.org/2000/svg" width="26" height="25" viewBox="0 0 26 25" fill="none">
                 <path d="M12.9413 20.5838L19.0116 24.2552C20.1233 24.9281 21.4836 23.9334 21.1911 22.6755L19.5821 15.7714L24.9503 11.1199C25.9303 10.2715 25.4037 8.66252 24.1165 8.56013L17.0516 7.96041L14.287 1.43664C13.7897 0.251832 12.0929 0.251832 11.5956 1.43664L8.83104 7.94578L1.76606 8.5455C0.478863 8.64789 -0.0477189 10.2569 0.932309 11.1053L6.30052 15.7568L4.69152 22.6608C4.39897 23.9188 5.75931 24.9134 6.87098 24.2406L12.9413 20.5838Z" fill="#82B51B"></path>
               </svg>

              </div>
              <div class="review-text">
              <b>Just Love It!</b> <br>
              I've been using Dot &amp; Key Vitamin C Sunscreen for a year now. It's lightweight &amp; quick-absorbing. Reduces dullness too with a dewy finish. A must-buy!
              </div>
              <div class="product-image flex items-center py-3 gap-2">
              <img src="images/customer-product1.jpg" width="80px" alt="" >
              <div class="">
                  <p class="text-sm font-semibold">Megha Recommends This Product</p>
                  <a href="#" class="shop-now text-sm text-primary">SHOP NOW &gt;&gt;</a>
              </div>
              </div>
              </div>
        </div>

        <div class="bg-gray-50 p-6 rounded-lg shadow-md text-left">
          <div class="review-card">
            <div class="review-header flex items-center justify-between">
              <img src="images/customer2.jpg" alt="" width="100px">
              <div class="review-person-name flex align-center relative">
                  <strong class="flex column">
                    <p>Sonal</p> 
                    <p>Sareen</p>
                  </strong>
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17" fill="none">
                    <path d="M6.50511 16.6685L5.0139 14.204L2.17794 13.6052L2.45564 10.7362L0.542969 8.58774L2.45564 6.43929L2.17794 3.57031L5.01479 2.97148L6.506 0.506104L9.16338 1.60747L11.8216 0.506104L13.3129 2.97148L16.1488 3.57031L15.8711 6.43929L17.7838 8.58774L15.8711 10.7362L16.1488 13.6052L13.312 14.204L11.8208 16.6694L9.16338 15.568L6.50511 16.6685ZM8.22579 11.0899L12.653 6.74921L12.0208 6.11886L8.22579 9.83968L6.30598 7.96789L5.67378 8.58774L8.22579 11.0899Z" fill="#3898EF"></path>
                  </svg>
              </div>
            </div>
              <div class="review-rating flex py-2">
               <svg xmlns="http://www.w3.org/2000/svg" width="26" height="25" viewBox="0 0 26 25" fill="none">
                 <path d="M12.9413 20.5838L19.0116 24.2552C20.1233 24.9281 21.4836 23.9334 21.1911 22.6755L19.5821 15.7714L24.9503 11.1199C25.9303 10.2715 25.4037 8.66252 24.1165 8.56013L17.0516 7.96041L14.287 1.43664C13.7897 0.251832 12.0929 0.251832 11.5956 1.43664L8.83104 7.94578L1.76606 8.5455C0.478863 8.64789 -0.0477189 10.2569 0.932309 11.1053L6.30052 15.7568L4.69152 22.6608C4.39897 23.9188 5.75931 24.9134 6.87098 24.2406L12.9413 20.5838Z" fill="#82B51B"></path>
               </svg>

               <svg xmlns="http://www.w3.org/2000/svg" width="26" height="25" viewBox="0 0 26 25" fill="none">
                 <path d="M12.9413 20.5838L19.0116 24.2552C20.1233 24.9281 21.4836 23.9334 21.1911 22.6755L19.5821 15.7714L24.9503 11.1199C25.9303 10.2715 25.4037 8.66252 24.1165 8.56013L17.0516 7.96041L14.287 1.43664C13.7897 0.251832 12.0929 0.251832 11.5956 1.43664L8.83104 7.94578L1.76606 8.5455C0.478863 8.64789 -0.0477189 10.2569 0.932309 11.1053L6.30052 15.7568L4.69152 22.6608C4.39897 23.9188 5.75931 24.9134 6.87098 24.2406L12.9413 20.5838Z" fill="#82B51B"></path>
               </svg>

               <svg xmlns="http://www.w3.org/2000/svg" width="26" height="25" viewBox="0 0 26 25" fill="none">
                 <path d="M12.9413 20.5838L19.0116 24.2552C20.1233 24.9281 21.4836 23.9334 21.1911 22.6755L19.5821 15.7714L24.9503 11.1199C25.9303 10.2715 25.4037 8.66252 24.1165 8.56013L17.0516 7.96041L14.287 1.43664C13.7897 0.251832 12.0929 0.251832 11.5956 1.43664L8.83104 7.94578L1.76606 8.5455C0.478863 8.64789 -0.0477189 10.2569 0.932309 11.1053L6.30052 15.7568L4.69152 22.6608C4.39897 23.9188 5.75931 24.9134 6.87098 24.2406L12.9413 20.5838Z" fill="#82B51B"></path>
               </svg>

               <svg xmlns="http://www.w3.org/2000/svg" width="26" height="25" viewBox="0 0 26 25" fill="none">
                 <path d="M12.9413 20.5838L19.0116 24.2552C20.1233 24.9281 21.4836 23.9334 21.1911 22.6755L19.5821 15.7714L24.9503 11.1199C25.9303 10.2715 25.4037 8.66252 24.1165 8.56013L17.0516 7.96041L14.287 1.43664C13.7897 0.251832 12.0929 0.251832 11.5956 1.43664L8.83104 7.94578L1.76606 8.5455C0.478863 8.64789 -0.0477189 10.2569 0.932309 11.1053L6.30052 15.7568L4.69152 22.6608C4.39897 23.9188 5.75931 24.9134 6.87098 24.2406L12.9413 20.5838Z" fill="#82B51B"></path>
               </svg>

               <svg xmlns="http://www.w3.org/2000/svg" width="26" height="25" viewBox="0 0 26 25" fill="none">
                 <path d="M12.9413 20.5838L19.0116 24.2552C20.1233 24.9281 21.4836 23.9334 21.1911 22.6755L19.5821 15.7714L24.9503 11.1199C25.9303 10.2715 25.4037 8.66252 24.1165 8.56013L17.0516 7.96041L14.287 1.43664C13.7897 0.251832 12.0929 0.251832 11.5956 1.43664L8.83104 7.94578L1.76606 8.5455C0.478863 8.64789 -0.0477189 10.2569 0.932309 11.1053L6.30052 15.7568L4.69152 22.6608C4.39897 23.9188 5.75931 24.9134 6.87098 24.2406L12.9413 20.5838Z" fill="#82B51B"></path>
               </svg>

              </div>
              <div class="review-text">
              <b>It Works!</b> <br>
              I have been using this moisturiser for almost 3 months now. It is non-sticky & quick absorbing. My looks visibly brightened & even-toned now.
              </div>
              <div class="product-image flex items-center py-3 gap-2">
              <img src="images/customer-product2.jpg" width="80px" alt="" >
              <div class="">
                  <p class="text-sm font-semibold">Sonal Recommends</p>
                  <a href="#" class="shop-now text-sm text-primary">SHOP NOW &gt;&gt;</a>
              </div>
              </div>
              </div>
        </div>

        <div class="bg-gray-50 p-6 rounded-lg shadow-md text-left">
          <div class="review-card">
            <div class="review-header flex items-center justify-between">
              <img src="images/customer3.jpg" alt="" width="100px">
              <div class="review-person-name flex align-center relative">
                  <strong class="flex column">
                    <p>Muskan</p> 
                    <p>Chowdhury</p>
                  </strong>
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17" fill="none">
                    <path d="M6.50511 16.6685L5.0139 14.204L2.17794 13.6052L2.45564 10.7362L0.542969 8.58774L2.45564 6.43929L2.17794 3.57031L5.01479 2.97148L6.506 0.506104L9.16338 1.60747L11.8216 0.506104L13.3129 2.97148L16.1488 3.57031L15.8711 6.43929L17.7838 8.58774L15.8711 10.7362L16.1488 13.6052L13.312 14.204L11.8208 16.6694L9.16338 15.568L6.50511 16.6685ZM8.22579 11.0899L12.653 6.74921L12.0208 6.11886L8.22579 9.83968L6.30598 7.96789L5.67378 8.58774L8.22579 11.0899Z" fill="#3898EF"></path>
                  </svg>
              </div>
            </div>
              <div class="review-rating flex py-2">
               <svg xmlns="http://www.w3.org/2000/svg" width="26" height="25" viewBox="0 0 26 25" fill="none">
                 <path d="M12.9413 20.5838L19.0116 24.2552C20.1233 24.9281 21.4836 23.9334 21.1911 22.6755L19.5821 15.7714L24.9503 11.1199C25.9303 10.2715 25.4037 8.66252 24.1165 8.56013L17.0516 7.96041L14.287 1.43664C13.7897 0.251832 12.0929 0.251832 11.5956 1.43664L8.83104 7.94578L1.76606 8.5455C0.478863 8.64789 -0.0477189 10.2569 0.932309 11.1053L6.30052 15.7568L4.69152 22.6608C4.39897 23.9188 5.75931 24.9134 6.87098 24.2406L12.9413 20.5838Z" fill="#82B51B"></path>
               </svg>

               <svg xmlns="http://www.w3.org/2000/svg" width="26" height="25" viewBox="0 0 26 25" fill="none">
                 <path d="M12.9413 20.5838L19.0116 24.2552C20.1233 24.9281 21.4836 23.9334 21.1911 22.6755L19.5821 15.7714L24.9503 11.1199C25.9303 10.2715 25.4037 8.66252 24.1165 8.56013L17.0516 7.96041L14.287 1.43664C13.7897 0.251832 12.0929 0.251832 11.5956 1.43664L8.83104 7.94578L1.76606 8.5455C0.478863 8.64789 -0.0477189 10.2569 0.932309 11.1053L6.30052 15.7568L4.69152 22.6608C4.39897 23.9188 5.75931 24.9134 6.87098 24.2406L12.9413 20.5838Z" fill="#82B51B"></path>
               </svg>

               <svg xmlns="http://www.w3.org/2000/svg" width="26" height="25" viewBox="0 0 26 25" fill="none">
                 <path d="M12.9413 20.5838L19.0116 24.2552C20.1233 24.9281 21.4836 23.9334 21.1911 22.6755L19.5821 15.7714L24.9503 11.1199C25.9303 10.2715 25.4037 8.66252 24.1165 8.56013L17.0516 7.96041L14.287 1.43664C13.7897 0.251832 12.0929 0.251832 11.5956 1.43664L8.83104 7.94578L1.76606 8.5455C0.478863 8.64789 -0.0477189 10.2569 0.932309 11.1053L6.30052 15.7568L4.69152 22.6608C4.39897 23.9188 5.75931 24.9134 6.87098 24.2406L12.9413 20.5838Z" fill="#82B51B"></path>
               </svg>

               <svg xmlns="http://www.w3.org/2000/svg" width="26" height="25" viewBox="0 0 26 25" fill="none">
                 <path d="M12.9413 20.5838L19.0116 24.2552C20.1233 24.9281 21.4836 23.9334 21.1911 22.6755L19.5821 15.7714L24.9503 11.1199C25.9303 10.2715 25.4037 8.66252 24.1165 8.56013L17.0516 7.96041L14.287 1.43664C13.7897 0.251832 12.0929 0.251832 11.5956 1.43664L8.83104 7.94578L1.76606 8.5455C0.478863 8.64789 -0.0477189 10.2569 0.932309 11.1053L6.30052 15.7568L4.69152 22.6608C4.39897 23.9188 5.75931 24.9134 6.87098 24.2406L12.9413 20.5838Z" fill="#82B51B"></path>
               </svg>

               <svg xmlns="http://www.w3.org/2000/svg" width="26" height="25" viewBox="0 0 26 25" fill="none">
                 <path d="M12.9413 20.5838L19.0116 24.2552C20.1233 24.9281 21.4836 23.9334 21.1911 22.6755L19.5821 15.7714L24.9503 11.1199C25.9303 10.2715 25.4037 8.66252 24.1165 8.56013L17.0516 7.96041L14.287 1.43664C13.7897 0.251832 12.0929 0.251832 11.5956 1.43664L8.83104 7.94578L1.76606 8.5455C0.478863 8.64789 -0.0477189 10.2569 0.932309 11.1053L6.30052 15.7568L4.69152 22.6608C4.39897 23.9188 5.75931 24.9134 6.87098 24.2406L12.9413 20.5838Z" fill="#82B51B"></path>
               </svg>

              </div>
              <div class="review-text">
              <b>No More Dry Skin</b> <br>
              Ceramide in this moisturizer protects the natural barrier of my skin while deeply moisturizing. It also soothes redness & dry skin.
              </div>
              <div class="product-image flex items-center py-3 gap-2">
              <img src="images/customer-product3.jpg" width="80px" alt="" >
              <div class="">
                  <p class="text-sm font-semibold">Muskan Recommends This Product</p>
                  <a href="#" class="shop-now text-sm text-primary">SHOP NOW &gt;&gt;</a>
              </div>
              </div>
              </div>
        </div>

        <div class="bg-gray-50 p-6 rounded-lg shadow-md text-left">
          <div class="review-card">
            <div class="review-header flex items-center justify-between">
              <img src="images/customer4.jpg" alt="" width="100px">
              <div class="review-person-name flex align-center relative">
                  <strong class="flex column">
                    <p>Reshma</p> 
                    <p>Satheesh</p>
                  </strong>
                  <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17" fill="none">
                    <path d="M6.50511 16.6685L5.0139 14.204L2.17794 13.6052L2.45564 10.7362L0.542969 8.58774L2.45564 6.43929L2.17794 3.57031L5.01479 2.97148L6.506 0.506104L9.16338 1.60747L11.8216 0.506104L13.3129 2.97148L16.1488 3.57031L15.8711 6.43929L17.7838 8.58774L15.8711 10.7362L16.1488 13.6052L13.312 14.204L11.8208 16.6694L9.16338 15.568L6.50511 16.6685ZM8.22579 11.0899L12.653 6.74921L12.0208 6.11886L8.22579 9.83968L6.30598 7.96789L5.67378 8.58774L8.22579 11.0899Z" fill="#3898EF"></path>
                  </svg>
              </div>
            </div>
              <div class="review-rating flex py-2">
               <svg xmlns="http://www.w3.org/2000/svg" width="26" height="25" viewBox="0 0 26 25" fill="none">
                 <path d="M12.9413 20.5838L19.0116 24.2552C20.1233 24.9281 21.4836 23.9334 21.1911 22.6755L19.5821 15.7714L24.9503 11.1199C25.9303 10.2715 25.4037 8.66252 24.1165 8.56013L17.0516 7.96041L14.287 1.43664C13.7897 0.251832 12.0929 0.251832 11.5956 1.43664L8.83104 7.94578L1.76606 8.5455C0.478863 8.64789 -0.0477189 10.2569 0.932309 11.1053L6.30052 15.7568L4.69152 22.6608C4.39897 23.9188 5.75931 24.9134 6.87098 24.2406L12.9413 20.5838Z" fill="#82B51B"></path>
               </svg>

               <svg xmlns="http://www.w3.org/2000/svg" width="26" height="25" viewBox="0 0 26 25" fill="none">
                 <path d="M12.9413 20.5838L19.0116 24.2552C20.1233 24.9281 21.4836 23.9334 21.1911 22.6755L19.5821 15.7714L24.9503 11.1199C25.9303 10.2715 25.4037 8.66252 24.1165 8.56013L17.0516 7.96041L14.287 1.43664C13.7897 0.251832 12.0929 0.251832 11.5956 1.43664L8.83104 7.94578L1.76606 8.5455C0.478863 8.64789 -0.0477189 10.2569 0.932309 11.1053L6.30052 15.7568L4.69152 22.6608C4.39897 23.9188 5.75931 24.9134 6.87098 24.2406L12.9413 20.5838Z" fill="#82B51B"></path>
               </svg>

               <svg xmlns="http://www.w3.org/2000/svg" width="26" height="25" viewBox="0 0 26 25" fill="none">
                 <path d="M12.9413 20.5838L19.0116 24.2552C20.1233 24.9281 21.4836 23.9334 21.1911 22.6755L19.5821 15.7714L24.9503 11.1199C25.9303 10.2715 25.4037 8.66252 24.1165 8.56013L17.0516 7.96041L14.287 1.43664C13.7897 0.251832 12.0929 0.251832 11.5956 1.43664L8.83104 7.94578L1.76606 8.5455C0.478863 8.64789 -0.0477189 10.2569 0.932309 11.1053L6.30052 15.7568L4.69152 22.6608C4.39897 23.9188 5.75931 24.9134 6.87098 24.2406L12.9413 20.5838Z" fill="#82B51B"></path>
               </svg>

               <svg xmlns="http://www.w3.org/2000/svg" width="26" height="25" viewBox="0 0 26 25" fill="none">
                 <path d="M12.9413 20.5838L19.0116 24.2552C20.1233 24.9281 21.4836 23.9334 21.1911 22.6755L19.5821 15.7714L24.9503 11.1199C25.9303 10.2715 25.4037 8.66252 24.1165 8.56013L17.0516 7.96041L14.287 1.43664C13.7897 0.251832 12.0929 0.251832 11.5956 1.43664L8.83104 7.94578L1.76606 8.5455C0.478863 8.64789 -0.0477189 10.2569 0.932309 11.1053L6.30052 15.7568L4.69152 22.6608C4.39897 23.9188 5.75931 24.9134 6.87098 24.2406L12.9413 20.5838Z" fill="#82B51B"></path>
               </svg>

               <svg xmlns="http://www.w3.org/2000/svg" width="26" height="25" viewBox="0 0 26 25" fill="none">
                 <path d="M12.9413 20.5838L19.0116 24.2552C20.1233 24.9281 21.4836 23.9334 21.1911 22.6755L19.5821 15.7714L24.9503 11.1199C25.9303 10.2715 25.4037 8.66252 24.1165 8.56013L17.0516 7.96041L14.287 1.43664C13.7897 0.251832 12.0929 0.251832 11.5956 1.43664L8.83104 7.94578L1.76606 8.5455C0.478863 8.64789 -0.0477189 10.2569 0.932309 11.1053L6.30052 15.7568L4.69152 22.6608C4.39897 23.9188 5.75931 24.9134 6.87098 24.2406L12.9413 20.5838Z" fill="#82B51B"></path>
               </svg>

              </div>
              <div class="review-text">
              <b>Blends In No Time</b> <br>
             This is my third bottle of using this sunscreen. Zero white cast & non-pilling formula...just love it!
              </div>
              <div class="product-image flex items-center py-3 gap-2">
              <img src="images/customer-product4.jpg" width="80px" alt="" >
              <div class="">
                  <p class="text-sm font-semibold">Reshma Recommends This Product</p>
                  <a href="#" class="shop-now text-sm text-primary">SHOP NOW &gt;&gt;</a>
              </div>
              </div>
              </div>
        </div>
        
      </div>
    </div>
  </section>


  <section class="py-12 bg-gray-50">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-3xl font-bold mb-8 text-gray-700">Follow Us on Instagram</h2>
      <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
        <div class="relative overflow-hidden rounded-lg">
          <img src="https://via.placeholder.com/300" alt="Instagram Post" class="w-full h-40 object-cover">
        </div>
        
      </div>
    </div>
  </section>

  
  <section class="bg-pink-100 py-12">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-3xl font-bold text-gray-700 mb-4">Subscribe to Our Newsletter</h2>
      <p class="text-gray-600 mb-6">Get the latest updates on new products and upcoming sales</p>
      <form class="flex justify-center">
        <input type="email" placeholder="Enter your email" class="px-4 py-2 border rounded-l-lg focus:outline-none">
        <button type="submit" class="bg-pink-500 text-white px-4 py-2 rounded-r-lg hover:bg-pink-600">Subscribe</button>
      </form>
    </div>
  </section>

  
   <section class="py-12 bg-white">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold mb-8 text-gray-700 text-center">Frequently Asked Questions</h2>
      
     
      <div class="bg-gray-100 p-4 rounded-lg mb-4">
        <button class="faq-toggle w-full text-left text-gray-800 font-semibold">What is the return policy?</button>
        <div class="faq-content mt-2 text-gray-600 hidden">
          <p>You can return any product within 30 days of purchase if it is unused and in its original packaging.</p>
        </div>
      </div>

      
    </div>
  </section>

  <?php include_once __DIR__ . '/includes/footer.php'; ?>


  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <script>
     
    $(document).ready(function() {
      
      // best seller tabs - start
      // Set the first tab as active by default
      $(".tab-button").first().addClass("tab-active");
      $(".tab-content").first().removeClass("hidden");

      $(".tab-button").click(function () {
        var tabId = $(this).data("tab");

        // Toggle active state for tabs
        $(".tab-button").removeClass("tab-active");
        $(this).addClass("tab-active");

        // Show the corresponding content and hide others
        $(".tab-content").addClass("hidden");
        $("#" + tabId).removeClass("hidden");
      });
      // best seller tabs - end

      //  Slider start
  var swiper1 = new Swiper(".swiper1", {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper1-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper1-button-next",
        prevEl: ".swiper1-button-prev",
      },
    });
  // Slider end

  var swiper2 = new Swiper(".swiper2", {
      cssMode: true,
      navigation: {
        nextEl: ".swiper2-button-next",
        prevEl: ".swiper2-button-prev",
      },
      pagination: {
        el: ".swiper2-pagination",
      },
      mousewheel: true,
      keyboard: true,
    });

    // bestseller products- start
    $(document).on('click', '.variant-button', function () {
    const productId = $(this).data('product-id');
    const variantId = $(this).data('id');
    const variantPrice = $(this).data('price');

    // Remove 'v_active' from all buttons and add to clicked button
    $(`.variant-button-${productId}`).removeClass('v_active');
    $(this).addClass('v_active');

    // Update variant details
    $(`#product-${productId} .money-print`).html(`₹${variantPrice}`);
    $(`#product-${productId} .product-variant-id`).val(variantId);
  });
  $('.weight-option-button').on('click', function () {
    // Remove active state from other buttons and add to clicked button
    $('.weight-option-button').removeClass('bg-blue-500 text-white').addClass('border-gray-300 text-gray-700');
    $(this).addClass('bg-blue-500 text-white').removeClass('border-gray-300 text-gray-700');

    // Update price
    const selectedPrice = $(this).data('price');
    $('#selected-price').text(selectedPrice);
  });
    // bestseller products end

      $('.add-to-cart').on('click', function() {
        alert('Product added to cart!');
      });
        
        $('.faq-toggle').on('click', function() {
            $(this).next('.faq-content').slideToggle();
            $(this).toggleClass('text-pink-500'); // Change text color when opened
        });

        // Handle form submission
        $('#subscribeForm').on('submit', function(e) {
          e.preventDefault();
          alert('Thank you for subscribing!');
        });
        
    });
  </script>

</body>
</html>
