<?php include_once('includes/header.php') ?>

<div class="max-w-8xl mx-auto p-6">
        <!-- First Row: Category Buttons -->
        <div class="mb-6 flex flex-wrap gap-4">
            <button class="category-btn bg-blue-600 text-white px-4 py-2 rounded-md" data-category="all">All</button>
            <button class="category-btn bg-gray-200 px-4 py-2 rounded-md" data-category="Sunscreen">Sunscreen</button>
            <button class="category-btn bg-gray-200 px-4 py-2 rounded-md" data-category="Moisturizer">Moisturizer</button>
            <button class="category-btn bg-gray-200 px-4 py-2 rounded-md" data-category="Serum">Serum</button>
        </div>
    

    <!-- Second Row: Filters and Products -->
    <div class="grid grid-cols-3 gap-6  ">
    

      <!-- Left Column: Filters -->
      <div class="col-span-1 bg-white p-4 rounded-md shadow">

      <div>
        <label for="sort" class="mr-2 text-gray-600">Sort By:</label>
        <select id="sort" class="border border-gray-300 rounded-md p-2 focus:outline-none">
        <option value="best-selling">Best Selling</option>
        <option value="price-asc">Price: Low to High</option>
        <option value="price-desc">Price: High to Low</option>
        <option value="newest">Newest Arrivals</option>
        </select>
    </div>

        <h2 class="text-lg font-semibold mb-4">Filter By</h2>
        
        <!-- Main Type -->
        <div class="mb-4">
          <button class="toggle-btn w-full text-left text-gray-600 font-medium" data-toggle="#main-type-filters">
            Main Type <span class="float-right">+</span>
          </button>
          <div id="main-type-filters" class="hidden mt-2">
            <div class="flex items-center mb-2">
              <input type="checkbox" id="filter-sunscreen" class="filter-checkbox" data-type="Sunscreen">
              <label for="filter-sunscreen" class="ml-2 text-gray-700">Sunscreen</label>
            </div>
            <div class="flex items-center mb-2">
              <input type="checkbox" id="filter-moisturizer" class="filter-checkbox" data-type="Moisturizer">
              <label for="filter-moisturizer" class="ml-2 text-gray-700">Moisturizer</label>
            </div>
            <div class="flex items-center mb-2">
              <input type="checkbox" id="filter-serum" class="filter-checkbox" data-type="Serum">
              <label for="filter-serum" class="ml-2 text-gray-700">Serum</label>
            </div>
          </div>
        </div>
        
        <!-- Sub-Type -->
        <div>
          <button class="toggle-btn w-full text-left text-gray-600 font-medium" data-toggle="#sub-type-filters">
            Sub-Type <span class="float-right">+</span>
          </button>
          <div id="sub-type-filters" class="hidden mt-2">
            <div class="flex items-center mb-2">
              <input type="checkbox" id="filter-spf50" class="filter-checkbox" data-subtype="SPF 50">
              <label for="filter-spf50" class="ml-2 text-gray-700">SPF 50</label>
            </div>
            <div class="flex items-center mb-2">
              <input type="checkbox" id="filter-hydrating" class="filter-checkbox" data-subtype="Hydrating">
              <label for="filter-hydrating" class="ml-2 text-gray-700">Hydrating</label>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Column: Products -->
    <div class="overflow-y-auto">
        <!-- Breadcrumb Section -->
        <div id="breadcrumb" class="mb-4 flex flex-wrap items-center gap-2">
        <!-- Example Individual Filter -->
        <!-- Filters will be dynamically added here -->
        <div class="filter-badge bg-gray-200 text-gray-700 px-3 py-1 rounded-md flex items-center">
            <span>Sunscreen</span>
            <button class="ml-2 text-gray-500 hover:text-gray-800 focus:outline-none remove-filter" data-filter="Sunscreen">
            ✕
            </button>
        </div>
        <!-- Clear All Button -->
        <button id="clear-all" class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 focus:outline-none">
            Clear All
        </button>
        </div>
        <div class="col-span-2 grid grid-cols-2 gap-4" id="products">
        
        <div class="product-card border border-gray-300 p-4 rounded-md bg-white" data-type="Sunscreen" data-subtype="SPF 50">
          <h3 class="text-lg font-medium">Sunscreen A</h3>
        </div>
        <div class="product-card border border-gray-300 p-4 rounded-md bg-white" data-type="Moisturizer" data-subtype="Hydrating">
          <h3 class="text-lg font-medium">Moisturizer B</h3>
        </div>
        <div class="product-card border border-gray-300 p-4 rounded-md bg-white" data-type="Serum" data-subtype="Hydrating">
          <h3 class="text-lg font-medium">Serum C</h3>
        </div>
        <div class="product-card border border-gray-300 p-4 rounded-md bg-white" data-type="Sunscreen" data-subtype="SPF 50">
          <h3 class="text-lg font-medium">Sunscreen D</h3>
        </div>
      </div>
      </div>

    </div>

  </div>

    <script>
        $(document).ready(function() {
            // Toggle filter sections
      $('.toggle-btn').click(function () {
        const target = $(this).data('toggle');
        $(target).toggleClass('hidden');
      });

      // Category button click
      $('.category-btn').click(function () {
        $('.category-btn').removeClass('bg-blue-600 text-white').addClass('bg-gray-200');
        $(this).addClass('bg-blue-600 text-white');
        const category = $(this).data('category');

        $('.product-card').each(function () {
          const type = $(this).data('type');
          $(this).toggle(category === 'all' || category === type);
        });
      });

      // Filter products
      $('.filter-checkbox').change(function () {
        const selectedTypes = $('.filter-checkbox[data-type]:checked').map(function () {
          return $(this).data('type');
        }).get();
        const selectedSubTypes = $('.filter-checkbox[data-subtype]:checked').map(function () {
          return $(this).data('subtype');
        }).get();

        $('.product-card').each(function () {
          const productType = $(this).data('type');
          const productSubType = $(this).data('subtype');

          const matchesType = selectedTypes.length === 0 || selectedTypes.includes(productType);
          const matchesSubType = selectedSubTypes.length === 0 || selectedSubTypes.includes(productSubType);

          $(this).toggle(matchesType && matchesSubType);
        });
      });

       // Sort products based on selected criteria
        $('#sort').on('change', function () {
            const sortValue = $(this).val();
            const $products = $('#products .product-card');

            let sortedProducts;

            if (sortValue === 'price-asc') {
            // Sort by Price: Low to High
            sortedProducts = $products.sort((a, b) => {
                return parseFloat($(a).find('p').text().split('$')[1]) - parseFloat($(b).find('p').text().split('$')[1]);
            });
            } else if (sortValue === 'price-desc') {
            // Sort by Price: High to Low
            sortedProducts = $products.sort((a, b) => {
                return parseFloat($(b).find('p').text().split('$')[1]) - parseFloat($(a).find('p').text().split('$')[1]);
            });
            } else if (sortValue === 'newest') {
            // Sort by Newest (Assume newest items are added last in the DOM)
            sortedProducts = $products.sort((a, b) => $(b).index() - $(a).index());
            } else {
            // Default: Best Selling (no specific order here, fallback to original DOM order)
            sortedProducts = $products;
            }

            // Append sorted products back to the container
            $('#products').html(sortedProducts);
        });

         // Functionality: Remove individual filter
    $(document).on('click', '.remove-filter', function () {
      const filterValue = $(this).data('filter');
      
      // Uncheck corresponding filter
      $(`.filter-checkbox[data-type="${filterValue}"], .filter-checkbox[data-subtype="${filterValue}"]`).prop('checked', false);
      
      // Remove the filter badge
      $(this).closest('.filter-badge').remove();
      
      // Trigger filter change event to update products
      $('.filter-checkbox').trigger('change');
    });

    // Functionality: Clear all filters
    $('#clear-all').click(function () {
      // Uncheck all checkboxes
      $('.filter-checkbox').prop('checked', false);
      
      // Remove all filter badges
      $('#breadcrumb .filter-badge').remove();
      
      // Trigger filter change event to reset product display
      $('.filter-checkbox').trigger('change');
    });

    // Example: Dynamically adding a filter badge
    $('.filter-checkbox').change(function () {
      const filterValue = $(this).data('type') || $(this).data('subtype');
      const isChecked = $(this).is(':checked');
      
      // Add or remove filter badge
      if (isChecked) {
        if (!$(`#breadcrumb .filter-badge:contains(${filterValue})`).length) {
          $('#breadcrumb').prepend(`
            <div class="filter-badge bg-gray-200 text-gray-700 px-3 py-1 rounded-md flex items-center">
              <span>${filterValue}</span>
              <button class="ml-2 text-gray-500 hover:text-gray-800 focus:outline-none remove-filter" data-filter="${filterValue}">
                ✕
              </button>
            </div>
          `);
        }
      } else {
        $(`#breadcrumb .filter-badge:contains(${filterValue})`).remove();
      }
    });
        });
    </script>

<?php include_once('includes/footer.php') ?>
