
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SmartKadai</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" type="text/css" href="css/custom.css">

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.tailwindcss.com"></script> 
  <!-- iconic icons -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
   <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <script> 
        tailwind.config = { 
            theme: { 
                extend: { 
                    colors: { 
                        primary: '#ff40b1', 
                        secondary: '#121212', 
                        yellow: '#ffe600',
                    },
                    backgroundColor: {
                        footer: '#f2f2f2'
                    },
                    fontFamily: {
                        'sans': ['Roboto', 'sans-serif'],
                        'body': ['Roboto', 'sans-serif'],
                     },
                } 
            } 
        } 
    </script> 
  <style>
    header {
        position: sticky;
        top: 0;
        z-index: 50;
        background-color: white;
        transition: background-color 0.3s ease;
        }

  </style>
</head>
<body class="bg-gray-50 font-sans">
  <header class="bg-white shadow-md">
    <div class="antialiased">
      <div class="bg-black text-white md:text-center py-2 px-4 text-[#379237]">
        Buy 2 @ 699: Early Access Now Live
      </div>
      <div class="bg-white shadow-sm sticky top-0">
     
        


        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-1 md:py-4">
          <div class="flex items-center justify-between">
            <!-- Menu Trigger -->
            <button type="button" class="md:hidden w-10 h-10 rounded-lg -ml-2 flex justify-center items-center">
              <svg class="text-gray-500 w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
            </button>
            <!-- ./ Menu Trigger -->
      
            <a href="index.php" class="font-bold text-primary text-2xl ">SmartKadai</a>

      
            <div class="flex items-center space-x-4">
              <div class="relative hidden md:block">
                <input type="search" class="pl-10 pr-2 h-10 py-1 rounded-lg border border-gray-200 focus:border-gray-300 focus:outline-none focus:shadow-inner leading-none" placeholder="Search">
                <svg class="h-6 w-6 text-gray-300 ml-2 mt-2 stroke-current absolute top-0 left-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
              </div>
      
              <a href="cart.php" class="flex h-10 items-center px-2 rounded-lg border border-gray-200 hover:border-gray-300 focus:outline-none hover:shadow-inner">
                <ion-icon name="cart-outline" size="small"></ion-icon>
                <span class="pl-1 text-gray-500 text-md">0</span>
              </a>
      
              <a href="login.php" class="flex h-10 items-center px-2 rounded-lg border border-gray-200 hover:border-gray-300 focus:outline-none hover:shadow-inner">
                <ion-icon name="person-outline" size="small"></ion-icon>
               </a>
            </div>
          </div>
      
          <!-- Search Mobile -->
          <div class="relative md:hidden">
            <input type="search" class="mt-1 w-full pl-10 pr-2 h-10 py-1 rounded-lg border border-gray-200 focus:border-gray-300 focus:outline-none focus:shadow-inner leading-none" placeholder="Search">
      
            <svg class="h-6 w-6 text-gray-300 ml-2 mt-3 stroke-current absolute top-0 left-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
          </div>
          <!-- ./ Search Mobile -->
      
        </div>
      </div>
    </div>
  </header>
  
  <!-- Menu Starts -->
    <div class="hidden md:flex space-x-3 flex-1 lg:ml-8 pt-2 pb-4">
      <div class="mt-5 flex justify-center mx-auto">
        <nav class="hidden items-end place-items-end md:flex space-x-10">
           
           <!-- Main Menu 1 -->
           <div class="relative dropdown-container">
              <button type="button" class="dropdown-toggle text-gray-500 group bg-white rounded-md inline-flex items-center text-lg font-medium hover:text-primary focus:outline-none uppercase" aria-expanded="false">
                 <span>Shop All</span>
                 <svg class="dropdown-icon text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                 </svg>
              </button>
              <div class="dropdown-menu hidden absolute z-10 left-0 transform mt-3 px-2 w-screen max-w-md sm:px-0">
                 <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                    <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                       <a href="shop-all.php" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                          <div>
                             <p class="text-base font-medium text-gray-900">All Products</p>
                          </div>
                       </a>
                    </div>
                 </div>
              </div>
           </div>
     
           <!-- Main Menu 2 -->
           <div class="relative dropdown-container">
              <button type="button" class="dropdown-toggle text-gray-500 group bg-white rounded-md inline-flex items-center font-medium hover:text-primary uppercase text-lg" aria-expanded="false">
                 <span>Skin Concern</span>
                 <svg class="dropdown-icon text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                 </svg>
              </button>
              <div class="dropdown-menu hidden absolute z-10 left-0 transform mt-3 px-2 w-screen max-w-md sm:px-0">
                 <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                    <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                       <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                          <div>
                             <p class="text-base font-medium text-gray-900">Submenu 2.1</p>
                             <p class="mt-1 text-sm text-gray-500">Description for submenu 2.1</p>
                          </div>
                       </a>
                    </div>
                 </div>
              </div>
           </div> 

           <!-- Main Menu 3 -->
           <div class="relative dropdown-container">
              <button type="button" class="dropdown-toggle text-gray-500 group bg-white rounded-md inline-flex items-center text-lg font-medium hover:text-primary uppercase" aria-expanded="false">
                 <span>Ingredients</span>
                 <svg class="dropdown-icon text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                 </svg>
              </button>
              <div class="dropdown-menu hidden absolute z-10 left-0 transform mt-3 px-2 w-screen max-w-md sm:px-0">
                 <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                    <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                       <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                          <div>
                             <p class="text-lg font-medium text-gray-900">Submenu 2.1</p>
                             <p class="mt-1 text-sm text-gray-500">Description for submenu 2.1</p>
                          </div>
                       </a>
                    </div>
                 </div>
              </div>
           </div>

           <!-- Main Menu 4 -->
           <div class="relative dropdown-container">
              <button type="button" class="dropdown-toggle text-gray-500 group bg-white rounded-md inline-flex items-center text-lg font-medium hover:text-primary uppercase" aria-expanded="false">
                 <span>Skin Type</span>
                 <svg class="dropdown-icon text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                 </svg>
              </button>
              <div class="dropdown-menu hidden absolute z-10 left-0 transform mt-3 px-2 w-screen max-w-md sm:px-0">
                 <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                    <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                       <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                          <div>
                             <p class="text-lg font-medium text-gray-900">Submenu 2.1</p>
                             <p class="mt-1 text-sm text-gray-500">Description for submenu 2.1</p>
                          </div>
                       </a>
                    </div>
                 </div>
              </div>
           </div>

          <!-- Main Menu 5 -->
           <div class="relative dropdown-container">
              <button type="button" class="dropdown-toggle text-gray-500 group bg-white rounded-md inline-flex items-center text-lg font-medium hover:text-primary uppercase" aria-expanded="false">
                 <span>Best Sellers</span>
                 <svg class="dropdown-icon text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                 </svg>
              </button>
              <div class="dropdown-menu hidden absolute z-10 left-0 transform mt-3 px-2 w-screen max-w-md sm:px-0">
                 <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                    <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                       <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                          <div>
                             <p class="text-base font-medium text-gray-900">Submenu 2.1</p>
                             <p class="mt-1 text-sm text-gray-500">Description for submenu 2.1</p>
                          </div>
                       </a>
                    </div>
                 </div>
              </div>
           </div>

          <!-- Main Menu 5 -->
           <div class="relative dropdown-container">
              <button type="button" class="dropdown-toggle text-gray-500 group bg-white rounded-md inline-flex items-center text-lg font-medium hover:text-primary uppercase" aria-expanded="false">
                 <span>New Arrivals</span>
                 <svg class="dropdown-icon text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                 </svg>
              </button>
              <div class="dropdown-menu hidden absolute z-10 left-0 transform mt-3 px-2 w-screen max-w-md sm:px-0">
                 <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                    <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                       <a href="#" class="-m-3 p-3 flex items-start rounded-lg hover:bg-gray-50">
                          <div>
                             <p class="text-base font-medium text-gray-900">Submenu 2.1</p>
                             <p class="mt-1 text-sm text-gray-500">Description for submenu 2.1</p>
                          </div>
                       </a>
                    </div>
                 </div>
              </div>
           </div>           
        </nav>
     </div>
    </div>
    <!-- Menu end -->
    <div class="bg-primary text-white text-5xl md:text-center p-4 font-bold">
      Buy 3 @ 999 | <span class="text-yellow">+ Free Full Size Cleanser Ends in</span>
    </div>
