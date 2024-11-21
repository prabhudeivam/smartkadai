
<section class="py-12 bg-center">
    
    <div class="w-full max-w-md mx-auto text-center">
      <a class="text-3xl font-bold items-center" href="#"> Best Sellers</a>
      
      <!-- Tabs Navigation -->
      <div class="flex border-b border-gray-200  space-x-2 p-4">
        <button class="tab-button py-2 px-4 rounded-full text-white bg-blue-500 font-medium focus:outline-none"
                data-tab="tab1">Moisturizers</button>
        <button class="tab-button py-2 px-4 rounded-full text-gray-500 font-medium focus:outline-none"
                data-tab="tab2">Sunscreens</button>
        <button class="tab-button py-2 px-4 rounded-full text-gray-500 font-medium focus:outline-none"
                data-tab="tab3">Serums</button>
      </div>
      
      <!-- Tabs Content -->
      <div class="p-4">
        <div id="tab1" class="tab-content"> Tab 1

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
        <?php 
           $variable = '<div class="w-full max-w-xs bg-white shadow-md rounded-lg overflow-hidden m-4 p-4 flex flex-col">
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
             <h3 class="mt-2 font-medium text-gray-800 text-sm text-center">Vitamin C + E Moisturizer for Glowing Skin</h3>
           </a>
         
           <!-- Weight Options -->
           <div class="flex mt-3 space-x-2 justify-center">
             <button class="bs-weight-option-button text-sm px-3 py-1 rounded border border-gray-300" data-weight="30g" data-price="₹200">30g</button>
             <button class="bs-weight-option-button text-sm px-3 py-1 rounded border border-gray-300" data-weight="60g" data-price="₹396">60g</button>
             <button class="bs-weight-option-button text-sm px-3 py-1 rounded border border-gray-300" data-weight="100g" data-price="₹650">100g</button>
           </div>
         
           <div class="flex items-center justify-center mt-2 gap-1">
             <span class="text-pink-500">
               <svg width="16" height="16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                 <path d="M8.33061 12.9142L11.9531..."></path>
               </svg>
             </span>
             <span class="text-gray-700 text-sm">4.8</span>
             <span class="text-blue-500 text-sm">(812)</span>
           </div>

           <!-- Pricing Section -->
           <div class="flex items-center mt-2 gap-2 justify-center">
             <span class="text-sm font-semibold text-gray-700" id="selected-price">₹396</span>
             <span class="text-xs text-gray-500 line-through">₹495</span>
             <span class="text-xs text-green-500">(20% OFF)</span>
           </div>
         
           <button class="w-full mt-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition-colors">
             Add to Cart
           </button>
         </div>';
             for ($x=0; $x<=5; $x++) {
               echo $variable;
             }
       
        ?>
          </div>
        </div>
        
        <div id="tab2" class="tab-content hidden">
          <h2 class="text-lg font-semibold mb-2">Tab 2 
             
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
      </div>
    </div>
 
    <div class="swiper swiper2 w-full h-full">
      <div class="swiper-wrapper">
        <div class="swiper-slide flex items-center justify-center text-xl bg-white py-10">Slide 1</div>
        <div class="swiper-slide flex items-center justify-center text-xl bg-white py-10">Slide 2</div>
        <div class="swiper-slide flex items-center justify-center text-xl bg-white py-10">Slide 3</div>
        <div class="swiper-slide flex items-center justify-center text-xl bg-white py-10">Slide 4</div>       
      </div>
      <div class="swiper-button-next swiper2-button-next"></div>
      <div class="swiper-button-prev swiper2-button-prev"></div>
      <div class="swiper-pagination swiper2-pagination"></div>
    </div>
  </section>