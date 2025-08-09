
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Haile's Mojito Bar | Crafted Cocktails & Relaxed Vibes</title>
  <meta name="description" content="Discover premium mojitos and tropical cocktails at Haile's Mojito Bar in Addis Ababa. Chill vibes, fresh ingredients, and great taste." />
  <meta name="author" content="Haile's Mojito Bar" />
  
  <!-- Open Graph (for Facebook, LinkedIn, etc.) -->
  <meta property="og:title" content="Haile's Mojito Bar | Crafted Cocktails & Relaxed Vibes" />
  <meta property="og:description" content="Discover premium mojitos and tropical cocktails at Haile's Mojito Bar in Addis Ababa. Chill vibes, fresh ingredients, and great taste." />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://hailesmojitobar.com/" />
  <meta property="og:image" content="https://hailesmojitobar.com/images/logo 2.jpg" />

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Haile's Mojito Bar | Crafted Cocktails & Relaxed Vibes" />
  <meta name="twitter:description" content="Discover premium mojitos and tropical cocktails at Haile's Mojito Bar in Addis Ababa." />
  <meta name="twitter:image" content="https://hailesmojitobar.com/images/logo 2.jpg" />

  <!-- Favicon -->
  <link rel="icon" href="/images/logo 2.jpg" type="image/x-icon" />
  <link rel="apple-touch-icon" href="/images/apple-touch-icon.png" />

  <!-- External Styles & Scripts -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>

  <!-- Tailwind Custom Config -->
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#0f172a',
            secondary: '#1e293b',
            accent: '#548FB2',
            'light-accent': '#A2D1E2',
          },
          container: {
            center: true,
            padding: '1rem',
            screens: {
              sm: '640px',
              md: '768px',
              lg: '1024px',
              xl: '1280px',
              '2xl': '1536px',
            },
          },
          animation: {
            'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
            float: 'float 6s ease-in-out infinite',
          },
          keyframes: {
            float: {
              '0%, 100%': { transform: 'translateY(0)' },
              '50%': { transform: 'translateY(-10px)' },
            },
          },
        },
      },
    };
  </script>

  <!-- Main CSS -->
  <link rel="stylesheet" href="styles.css" />
</head>

<body class="bg-primary text-white font-sans min-h-screen relative">

  <!--
  EMAIL Hailesmojitobar@gmail.com
  PASSWORD HMB1234# -->

<!-- Success Message Popup -->
<!-- <div id="successPopup" class="fixed inset-0 flex items-center justify-center bg-black/50 z-50 hidden">
  <div class="bg-white text-black p-6 rounded-lg shadow-lg text-center">
    <h2 class="text-xl font-semibold mb-2">Message Sent!</h2>
    <p class="mb-4">Your message has been successfully submitted.</p>
    <button onclick="closePopup()" class="px-4 py-2 bg-cyan-600 hover:bg-cyan-700 text-white rounded">Close</button>
  </div>
</div> -->


    <!-- Navigation -->
    <nav class="bg-secondary sticky top-0 z-50 shadow-lg">
        <div class=" px-4 flex justify-between items-center">
            <a href="#" class=""><img src="./images/Haile's Logo.png" alt="Haile's Mojito Bar Logo" class="h-14 inline-block" /></a>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex space-x-8">
                <a href="#home" class="hover:text-sky-400 transition">Home</a>
                <a href="#about" class="hover:text-sky-400 transition">About</a>
                <a href="#menu" class="hover:text-sky-400 transition">Menu</a>
                <a href="#gallery" class="hover:text-sky-400 transition">Gallery</a>
                <a href="#contact" class="hover:text-sky-400 transition">Contact</a>
            </div>
            
            <!-- Mobile Menu Button -->
            <button id="menu-btn" class="md:hidden focus:outline-none">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-secondary pb-4 px-4">
            <a href="#home" class="block py-2 hover:text-sky-400 transition">Home</a>
            <a href="#about" class="block py-2 hover:text-sky-400 transition">About</a>
            <a href="#menu" class="block py-2 hover:text-sky-400 transition">Menu</a>
            <a href="#gallery" class="block py-2 hover:text-sky-400 transition">Gallery</a>
            <a href="#contact" class="block py-2 hover:text-sky-400 transition">Contact</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="relative h-screen flex items-center justify-center bg-cover bg-center z-0" style="background-image: linear-gradient(rgba(15, 23, 42, 0.1), rgba(15, 23, 42, 0.7)), url('./images/hero.jpg');">
      <div class="text-center px-4" data-aos="fade-up">
        <h1 class="text-5xl md:text-7xl font-bold mb-6">CRAFTED <span class="text-sky-400">MOJITOS</span></h1>
        <p class="text-sm md:text-md lg:text-xl mb-8 max-w-2xl mx-auto italic">Experience the perfect blend of fresh ingredients, premium rum, and tropical vibes</p>
        <button id="menuButton" class="bg-sky-600 hover:bg-sky-700 font-bold py-3 px-8 rounded-full text-lg transition duration-300 inline-block">
    EXPLORE MENU
</button>  </div>
      <div class="absolute bottom-12 left-0 right-0 text-center" data-aos="fade-down">
        <a href="#about" class="text-accent hover:text-sky-400 transition">
          <i class="fas fa-chevron-down text-3xl animate-bounce"></i>
        </a>
      </div>
    </section>

     <!-- Explore Menu Button -->


<!-- Menu Popup -->
<div id="menuPopup" class="fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center p-4 z-50 backdrop-blur-sm hidden">
  <div class="bg-gradient-to-b from-slate-800 to-slate-900 rounded-xl shadow-2xl max-w-2xl w-full max-h-[90vh] overflow-hidden relative border border-sky-500/30 transition-all duration-300 transform hover:scale-[1.005]">
    
    <!-- Close Button -->
    <button id="closeButton" class="absolute top-4 right-4 text-white hover:text-sky-300 transition-colors duration-200 z-50">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>
    
    <!-- Header with Gradient -->
    <div class="bg-gradient-to-r from-sky-600 to-sky-800 p-5 sticky top-0 z-10 shadow-md">
      <h1 class="text-3xl md:text-4xl font-bold text-white text-center font-serif tracking-wide">HAILE'S MOJITO BAR</h1>
      <div class="flex justify-center space-x-3 mt-4">
        <button class="tab-btn active bg-white/20 backdrop-blur-sm text-white px-5 py-2 rounded-full font-medium hover:bg-white/30 transition-all duration-200 shadow-sm" data-tab="drinks">
          <span class="flex items-center gap-1">
            <i class="fa-solid fa-martini-glass"></i>
            Drinks
          </span>
        </button>
        <button class="tab-btn bg-white/10 backdrop-blur-sm text-white px-5 py-2 rounded-full font-medium hover:bg-white/20 transition-all duration-200 shadow-sm" data-tab="food">
          <span class="flex items-center gap-1">
           <i class="fa-solid fa-bowl-food"></i>
            Food
          </span>
        </button>
      </div>
    </div>

    <!-- Content with Scrollable Area -->
    <div class="p-5 overflow-y-auto h-[calc(90vh-130px)] scrollbar-thin scrollbar-thumb-sky-600 scrollbar-track-slate-700">
      <!-- Drinks Menu -->
      <div id="drinks-tab" class="tab-content space-y-6">
        <!-- Haile's Drink Section -->
        <div class="bg-slate-700/50 rounded-xl p-5 backdrop-blur-sm border border-slate-600/30">
          <div class="flex items-center justify-between mb-4">
            <h2 class="text-2xl font-bold text-sky-300 flex items-center">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
              </svg>
              Haile's Special Drinks
            </h2>
            <span class="px-3 py-1 bg-sky-900/50 text-sky-300 text-xs font-semibold rounded-full">
              Created in 2019
            </span>
          </div>
          
          <div class="space-y-5">
            <!-- Sweet -->
            <div>
              <h3 class="text-lg font-medium text-sky-200 mb-2 flex items-center">
                <span class="w-3 h-3 bg-pink-500 rounded-full mr-2"></span>
                Sweet
              </h3>
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <div class="bg-slate-800/70 hover:bg-slate-700/70 p-4 rounded-lg transition-all duration-200 border border-slate-700 hover:border-sky-500/30 cursor-pointer group">
                  <p class="text-white font-medium group-hover:text-sky-200 transition-colors">ለማጅ</p>
                </div>
              </div>
            </div>
            
            <!-- Medium Sweet -->
            <div>
              <h3 class="text-lg font-medium text-sky-200 mb-2 flex items-center">
                <span class="w-3 h-3 bg-amber-400 rounded-full mr-2"></span>
                Medium Sweet
              </h3>
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <div class="bg-slate-800/70 hover:bg-slate-700/70 p-4 rounded-lg transition-all duration-200 border border-slate-700 hover:border-sky-500/30 cursor-pointer group">
                  <p class="text-white font-medium group-hover:text-sky-200 transition-colors">ሳቅ በሳቅ</p>
                </div>
                <div class="bg-slate-800/70 hover:bg-slate-700/70 p-4 rounded-lg transition-all duration-200 border border-slate-700 hover:border-sky-500/30 cursor-pointer group">
                  <p class="text-white font-medium group-hover:text-sky-200 transition-colors">ብሩንጂ</p>
                </div>
                <div class="bg-slate-800/70 hover:bg-slate-700/70 p-4 rounded-lg transition-all duration-200 border border-slate-700 hover:border-sky-500/30 cursor-pointer group">
                  <p class="text-white font-medium group-hover:text-sky-200 transition-colors">አስቸኳይ</p>
                </div>
              </div>
            </div>
            
            <!-- Dry -->
            <div>
              <h3 class="text-lg font-medium text-sky-200 mb-2 flex items-center">
                <span class="w-3 h-3 bg-sky-500 rounded-full mr-2"></span>
                Dry
              </h3>
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <div class="bg-slate-800/70 hover:bg-slate-700/70 p-4 rounded-lg transition-all duration-200 border border-slate-700 hover:border-sky-500/30 cursor-pointer group">
                  <p class="text-white font-medium group-hover:text-sky-200 transition-colors">አዛሉ</p>
                </div>
                <div class="bg-slate-800/70 hover:bg-slate-700/70 p-4 rounded-lg transition-all duration-200 border border-slate-700 hover:border-sky-500/30 cursor-pointer group">
                  <p class="text-white font-medium group-hover:text-sky-200 transition-colors">ቢጎዲን</p>
                </div>
                <div class="bg-slate-800/70 hover:bg-slate-700/70 p-4 rounded-lg transition-all duration-200 border border-slate-700 hover:border-sky-500/30 cursor-pointer group">
                  <p class="text-white font-medium group-hover:text-sky-200 transition-colors">አልመጣም በሩን ዝጉት</p>
                </div>
                <div class="bg-slate-800/70 hover:bg-slate-700/70 p-4 rounded-lg transition-all duration-200 border border-slate-700 hover:border-sky-500/30 cursor-pointer group">
                  <p class="text-white font-medium group-hover:text-sky-200 transition-colors">ማጠናከሪያ</p>
                </div>
                <div class="bg-slate-800/70 hover:bg-slate-700/70 p-4 rounded-lg transition-all duration-200 border border-slate-700 hover:border-sky-500/30 cursor-pointer group">
                  <p class="text-white font-medium group-hover:text-sky-200 transition-colors">ሚኒስትሪ</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Shoes Section -->
        <div class="bg-slate-700/50 rounded-xl p-5 backdrop-blur-sm border border-slate-600/30">
          <h2 class="text-2xl font-bold text-sky-300 mb-4 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
            </svg>
            Shoes
          </h2>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div class="bg-slate-800/70 hover:bg-slate-700/70 p-4 rounded-lg transition-all duration-200 border border-slate-700 hover:border-amber-500/30">
              <h3 class="text-xl text-amber-300 mb-2">Tequila</h3>
              <ul class="space-y-1">
                <li class="text-white/90">Normal</li>
                <li class="text-white/90">Chocolate</li>
              </ul>
            </div>
            <div class="bg-slate-800/70 hover:bg-slate-700/70 p-4 rounded-lg transition-all duration-200 border border-slate-700 hover:border-amber-500/30">
              <h3 class="text-xl text-amber-300 mb-2">አረቄ</h3>
              <ul class="space-y-1">
                <li class="text-white/90">Normal</li>
                <li class="text-white/90">Coffee</li>
                <li class="text-white/90">Jagermeister</li>
                <li class="text-white/90">Sambuca</li>
                <li class="text-white/90">Abuwalad</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Mojitos/Cocktails Section -->
        <div class="bg-slate-700/50 rounded-xl p-5 backdrop-blur-sm border border-slate-600/30">
          <h2 class="text-2xl font-bold text-sky-300 mb-4 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
            </svg>
            Mojitos & Cocktails
          </h2>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div class="bg-slate-800/70 hover:bg-slate-700/70 p-4 rounded-lg transition-all duration-200 border border-slate-700 hover:border-sky-500/30">
              <ul class="space-y-2">
                <li class="text-white/90">Mint or classic</li>
                <li class="text-white/90">Vanilla pineapple</li>
                <li class="text-white/90">Campari mojito</li>
                <li class="text-white/90">Campari pineapple</li>
                <li class="text-white/90">Watermelon</li>
              </ul>
            </div>
            <div class="bg-slate-800/70 hover:bg-slate-700/70 p-4 rounded-lg transition-all duration-200 border border-slate-700 hover:border-sky-500/30">
              <ul class="space-y-2">
                <li class="text-white/90">Strawberry</li>
                <li class="text-white/90">Pineapple</li>
                <li class="text-white/90">Gingermint</li>
                <li class="text-white/90">Long Island</li>
                <li class="text-white/90">Pina colada</li>
                <li class="text-white/90">Gin tonic</li>
                <li class="text-white/90">Gin frizz</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Non-alcoholic Section -->
        <div class="bg-slate-700/50 rounded-xl p-5 backdrop-blur-sm border border-slate-600/30">
          <h2 class="text-2xl font-bold text-sky-300 mb-4 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
            </svg>
            Non-alcoholic Cocktails
          </h2>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div class="bg-slate-800/70 hover:bg-slate-700/70 p-4 rounded-lg transition-all duration-200 border border-slate-700 hover:border-emerald-500/30">
              <ul class="space-y-2">
                <li class="text-white/90">Mint</li>
                <li class="text-white/90">Watermelon</li>
              </ul>
            </div>
            <div class="bg-slate-800/70 hover:bg-slate-700/70 p-4 rounded-lg transition-all duration-200 border border-slate-700 hover:border-emerald-500/30">
              <ul class="space-y-2">
                <li class="text-white/90">Pineapple</li>
                <li class="text-white/90">Strawberry</li>
                <li class="text-white/90">Virgin Mojito</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Wine -->
        <div class="bg-gradient-to-r from-sky-800/50 to-sky-900/50 p-4 rounded-lg text-center border border-sky-700/50 hover:border-sky-500 transition-all duration-300 cursor-pointer group">
          <p class="text-sky-300 text-xl font-medium group-hover:text-white transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            Glass of wine
          </p>
        </div>
      </div>

      <!-- Food Menu -->
      <div id="food-tab" class="tab-content hidden space-y-6">
        <div class="bg-slate-700/50 rounded-xl p-5 backdrop-blur-sm border border-slate-600/30">
          <h2 class="text-2xl font-bold text-sky-300 mb-6 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
            Food Menu
          </h2>
          
          <div class="space-y-6">
            <!-- Traditional Foods -->
            <div>
              <h3 class="text-xl font-medium text-amber-300 mb-3 border-b border-amber-500/30 pb-2">ባህላዊ ምግቦች</h3>
              <div class="grid grid-cols-1 gap-3">
                <div class="bg-slate-800/70 hover:bg-slate-700/70 p-4 rounded-lg transition-all duration-200 border border-slate-700 hover:border-amber-500/30 cursor-pointer group">
                  <p class="text-white font-medium group-hover:text-amber-200">የበግ ጥብስ</p>
                </div>
                <div class="bg-slate-800/70 hover:bg-slate-700/70 p-4 rounded-lg transition-all duration-200 border border-slate-700 hover:border-amber-500/30 cursor-pointer group">
                  <p class="text-white font-medium group-hover:text-amber-200">የበግ ፍትፍት</p>
                </div>
                <div class="bg-slate-800/70 hover:bg-slate-700/70 p-4 rounded-lg transition-all duration-200 border border-slate-700 hover:border-amber-500/30 cursor-pointer group">
                  <p class="text-white font-medium group-hover:text-amber-200">የበግ ዱለት</p>
                </div>
              </div>
            </div>
            
            <!-- Western Foods -->
            <div>
              <h3 class="text-xl font-medium text-amber-300 mb-3 border-b border-amber-500/30 pb-2">Western foods</h3>
              <div class="grid grid-cols-1 gap-3">
                <div class="bg-slate-800/70 hover:bg-slate-700/70 p-4 rounded-lg transition-all duration-200 border border-slate-700 hover:border-amber-500/30 cursor-pointer group">
                  <p class="text-white font-medium group-hover:text-amber-200">Roasted lamb</p>
                </div>
                <div class="bg-slate-800/70 hover:bg-slate-700/70 p-4 rounded-lg transition-all duration-200 border border-slate-700 hover:border-amber-500/30 cursor-pointer group">
                  <p class="text-white font-medium group-hover:text-amber-200">Roasted chicken</p>
                </div>
                <div class="bg-slate-800/70 hover:bg-slate-700/70 p-4 rounded-lg transition-all duration-200 border border-slate-700 hover:border-amber-500/30 cursor-pointer group">
                  <p class="text-white font-medium group-hover:text-amber-200">Steak sandwich with cheese</p>
                </div>
                <div class="bg-slate-800/70 hover:bg-slate-700/70 p-4 rounded-lg transition-all duration-200 border border-slate-700 hover:border-amber-500/30 cursor-pointer group">
                  <p class="text-white font-medium group-hover:text-amber-200">Chicken sandwich with cheese</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




    <!-- About Section -->
    <section id="about" class="py-20 relative overflow-hidden">
      <!-- Decorative elements -->
      <div class="absolute -right-20 -top-20 w-64 h-64 rounded-full bg-accent/10 blur-3xl hidden"></div>
      <div class="absolute -left-20 bottom-0 w-64 h-64 rounded-full bg-accent/10 blur-3xl hidden"></div>
      
      <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Heading -->
        <div class="text-center mb-16 max-w-4xl mx-auto" data-aos="fade-up">
          <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold font-playfair mb-6">
            <span class="relative inline-block">
              <span class="relative z-10">Our </span>
              <span class="text-sky-400 relative z-10">Story</span>
              <span class="absolute -bottom-1 left-0 w-full h-1.5 bg-gradient-to-r from-sky-500 to-light-accent rounded-full animate-pulse-slow"></span>
            </span>
          </h2>
          <p class="text-lg text-gray-400">
            Ethiopia's first mojito bar - pioneering unique cocktails since 2013
          </p>
        </div>

        <!-- Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
          <!-- Image Column -->
          <div class="relative group" data-aos="zoom-in-right">
            <div class="relative overflow-hidden rounded-2xl shadow-2xl border border-gray-700/50">
              <img src="./images/about.webp" 
                 alt="Haile's Mojito Bar interior"
                 class="w-full h-auto transition-transform duration-700 group-hover:scale-105">
              <div class="absolute inset-0 bg-gradient-to-br from-primary/20 via-primary/40 to-accent/20"></div>
            </div>
            <div class="absolute -bottom-4 -right-4 bg-gradient-to-br from-sky-500 to-light-accent px-6 py-2 rounded-full shadow-lg font-medium">
              Since 2013
            </div>
          </div>

          <!-- Text Column -->
          <div class="space-y-8" data-aos="fade-left">
            <div>
              <h3 class="text-3xl md:text-4xl font-bold font-playfair mb-4 relative pb-2">
                <span class="relative z-10">Crafting Cocktail </span>
                <span class="text-sky-400">Legends</span>
                <span class="absolute bottom-0 left-0 w-24 h-1 bg-gradient-to-r from-accent to-light-accent rounded-full"></span>
              </h3>
              <p class="text-gray-300 leading-relaxed">
                <!-- Founded by visionary mixologist Haile Martinez in 2013, --> We introduced Ethiopia to its first authentic mojito bar. Our passion for innovation led us to create fruit-flavored mojitos and signature cocktails you won't find anywhere else.
              </p>
            </div>

            <!-- Features Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <!-- Feature 1 -->
              <div class="bg-secondary/80 backdrop-blur-sm p-5 rounded-xl border border-gray-700/50 hover:border-accent/50 transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:shadow-accent/10" data-aos="flip-left">
                <div class="text-sky-500 text-3xl mb-3 animate-float">
                  <i class="fas fa-cocktail"></i>
                </div>
                <h4 class="text-xl font-semibold mb-2">Unique Creations</h4>
                <p class="text-gray-400 text-sm">
                  Our exclusive menu features cocktails with distinctive names and ingredients crafted by Haile himself.
                </p>
              </div>

              <!-- Feature 2 -->
              <div class="bg-secondary/80 backdrop-blur-sm p-5 rounded-xl border border-gray-700/50 hover:border-accent/50 transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:shadow-accent/10" data-aos="flip-right">
                <div class="text-sky-500 text-3xl mb-3">
                  <i class="fas fa-gift"></i>
                </div>
                <h4 class="text-xl font-semibold mb-2">Lucky Friday</h4>
                <p class="text-gray-400 text-sm">
                   Every Friday one lucky table drinks for free. Come and enjoy your night with amazing drinks and delicious food.</p>
              </div>

              <!-- Feature 3 -->
              <div class="bg-secondary/80 backdrop-blur-sm p-5 rounded-xl border border-gray-700/50 hover:border-accent/50 transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:shadow-accent/10" data-aos="flip-up">
                <div class="text-sky-500 text-3xl mb-3">
                  <i class="fas fa-expand"></i>
                </div>
                <h4 class="text-xl font-semibold mb-2">New Branch Coming</h4>
                <p class="text-gray-400 text-sm">
                  Currently our only location in Atlas Bole, but we're excited to announce a new branch soon!
                </p>
              </div>

              <!-- Feature 4 -->
              <div class="bg-secondary/80 backdrop-blur-sm p-5 rounded-xl border border-gray-700/50 hover:border-accent/50 transition-all duration-300 hover:-translate-y-1 hover:shadow-lg hover:shadow-accent/10" data-aos="flip-down">
    <div class="text-sky-500 text-3xl mb-3">
      <i class="fas fa-landmark"></i>
    </div>
    <h4 class="text-xl font-semibold mb-2">Vintage Vibes</h4>
    <p class="text-gray-400 text-sm">
      The decor may feel a bit quirky, but it embraces a vintage style with old-school props like classic radios, TVs, and telephones, creating a nostalgic atmosphere.
    </p>
    </div>

            </div>

            <!-- Highlights -->
            <div class="flex flex-wrap gap-3" data-aos="fade-up" data-aos-delay="200">
              <span class="inline-flex items-center gap-2 bg-accent/10 text-accent px-4 py-2 rounded-full text-sm">
                <i class="fas fa-award"></i> First in Ethiopia
              </span>
              <span class="inline-flex items-center gap-2 bg-accent/10 text-accent px-4 py-2 rounded-full text-sm">
                <i class="fas fa-gift"></i> Friday Free Table
              </span>
              <span class="inline-flex items-center gap-2 bg-accent/10 text-accent px-4 py-2 rounded-full text-sm">
                <i class="fas fa-glass-whiskey"></i> Non-Alcoholic Options
              </span>
              <span class="inline-flex items-center gap-2 bg-accent/10 text-accent px-4 py-2 rounded-full text-sm">
                <i class="fas fa-utensils"></i> Ethiopian Cuisine
              </span>
              <span class="inline-flex items-center gap-2 bg-accent/10 text-accent px-4 py-2 rounded-full text-sm">
                <i class="fas fa-car"></i> Outdoor Seating
              </span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Menu Section -->
    <section id="menu" class="py-20 bg-gray-800 relative overflow-hidden">
      <div class="container mx-auto px-4">
      <!-- Section Heading -->
         <div class="text-center mb-16 max-w-4xl mx-auto" data-aos="fade-up">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold font-playfair mb-6">
              <span class="relative inline-block">
                <span class="relative z-10">Our Special </span>
                <span class="text-sky-400 relative z-10">Drinks</span>
                <span class="absolute -bottom-1 left-0 w-full h-1.5 bg-gradient-to-r from-sky-500 to-light-accent rounded-full animate-pulse-slow"></span>
              </span>
            </h2>
            <p class="text-lg text-gray-400">
              Experience handcrafted flavors in every sip
            </p>
          </div>

<!-- Menu Items Grid -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 p-4">
  <!-- Drink 1 - Ministry -->
  <div class="group relative bg-gradient-to-br from-slate-900 to-slate-800 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 overflow-hidden transform hover:-translate-y-2" 
       data-aos="zoom-in">
    <div class="relative h-64 overflow-hidden">
      <img src="./images/Ministry.png" alt="Ministry Mojito" 
           class="w-full h-full object-cover opacity-90 group-hover:opacity-100 transition-all duration-500 group-hover:scale-110">
      <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent"></div>
      <div class="absolute bottom-0 left-0 p-5 w-full">
        <h3 class="text-2xl font-bold text-white tracking-wide">Ministry</h3>
        <!-- <p class="text-sky-200 mt-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300">Our boldest creation - packs a punch with premium spirits</p>
    -->   </div>
      <div class="absolute top-4 right-4">
        <span class="bg-sky-600/90 text-white text-xs font-semibold px-3 py-1 rounded-full backdrop-blur-sm">
          Strong
        </span>
      </div>
    </div>
  </div>

  <!-- Drink 2 - Pina Colada -->
  <div class="group relative bg-gradient-to-br from-amber-900 to-amber-800 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 overflow-hidden transform hover:-translate-y-2" 
       data-aos="zoom-in" data-aos-delay="100">
    <div class="relative h-64 overflow-hidden">
      <img src="./images/Pina Colada.png" alt="Pina Colada" 
           class="w-full h-full object-cover opacity-90 group-hover:opacity-100 transition-all duration-500 group-hover:scale-110">
      <div class="absolute inset-0 bg-gradient-to-t from-amber-900/80 via-transparent to-transparent"></div>
      <div class="absolute bottom-0 left-0 p-5 w-full">
        <h3 class="text-2xl font-bold text-white tracking-wide">Pina Colada</h3>
        <!-- <p class="text-amber-200 mt-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300">Creamy coconut meets sweet pineapple - our tropical bestseller</p>
      --> </div>
      <div class="absolute top-4 right-4">
        <span class="bg-amber-600/90 text-white text-xs font-semibold px-3 py-1 rounded-full backdrop-blur-sm">
          Customer Favorite
        </span>
      </div>
    </div>
  </div>

  <!-- Drink 3 - Strawberry Saqbesaq -->
  <div class="group relative bg-gradient-to-br from-rose-900 to-rose-800 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 overflow-hidden transform hover:-translate-y-2" 
       data-aos="zoom-in" data-aos-delay="200">
    <div class="relative h-64 overflow-hidden">
      <img src="./images/Strawberry Saqbesaq.png" alt="Strawberry Saqbesaq" 
           class="w-full h-full object-cover opacity-90 group-hover:opacity-100 transition-all duration-500 group-hover:scale-110">
      <div class="absolute inset-0 bg-gradient-to-t from-rose-900/80 via-transparent to-transparent"></div>
      <div class="absolute bottom-0 left-0 p-5 w-full">
        <h3 class="text-2xl font-bold text-white tracking-wide">Strawberry Saqbesaq</h3>
        <!-- <p class="text-rose-200 mt-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300">Try all three: Classic • Strawberry • Tropical Twist</p>
    -->   </div>
      <div class="absolute top-4 right-4">
        <span class="bg-rose-600/90 text-white text-xs font-semibold px-3 py-1 rounded-full backdrop-blur-sm">
          Triple Flavor
        </span>
      </div>
    </div>
  </div>
</div>
      </div>
    </section>

    <!-- Gallery Section -->
    <section class="py-16" id="gallery">
      <div class="sm:text-center mb-16 max-w-4xl mx-auto px-6" data-aos="fade-up">
      <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold font-playfair mb-6">
        <span class="relative inline-block">
        <span class="relative z-10">Experience Our </span>
        <span class="text-sky-400 relative z-10 sm:inline block">Vibes</span>
        <span class="absolute -bottom-1 left-0 sm:w-full w-2/5 h-1.5 bg-gradient-to-r from-sky-500 to-light-accent rounded-full animate-pulse-slow"></span>
        </span>
      </h2>
      <p class="text-lg text-gray-400">
        A visual journey through Haile's Mojito Bar - where every corner tells a story
      </p>
      </div>
      <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
      <!-- Card 1 -->
      <div class="bg-white shadow-md rounded overflow-hidden" data-aos="fade-up">
        <a href="images/logo 2.jpg" data-fancybox="gallery" class="block relative w-full pt-[70%]">
        <img src="images/logo 2.jpg" alt="Image Gallery" class="absolute inset-0 w-full h-full object-cover">
        </a>
      </div>
      <!-- Card 2 -->
      <div class="bg-white shadow-md rounded overflow-hidden" data-aos="fade-up" data-aos-delay="100">
        <a href="images/2.jpg" data-fancybox="gallery" class="block relative w-full pt-[70%]">
        <img src="images/2.jpg" alt="Image Gallery" class="absolute inset-0 w-full h-full object-cover">
        </a>
      </div>
      <!-- Card 3 -->
      <div class="bg-white shadow-md rounded overflow-hidden" data-aos="fade-up" data-aos-delay="200">
        <a href="images/3.jpeg" data-fancybox="gallery" class="block relative w-full pt-[70%]">
        <img src="images/3.jpeg" alt="Image Gallery" class="absolute inset-0 w-full h-full object-cover">
        </a>
      </div>
      <!-- Card 4 -->
      <div class="bg-white shadow-md rounded overflow-hidden" data-aos="fade-up" data-aos-delay="300">
        <a href="images/4.jpeg" data-fancybox="gallery" class="block relative w-full pt-[70%]">
        <img src="images/4.jpeg" alt="Image Gallery" class="absolute inset-0 w-full h-full object-cover">
        </a>
      </div>
      <!-- Card 5 -->
      <div class="bg-white shadow-md rounded overflow-hidden hidden md:block" data-aos="fade-up" data-aos-delay="400">
        <a href="images/5.jpeg" data-fancybox="gallery" class="block relative w-full pt-[70%]">
        <img src="images/5.jpeg" alt="Image Gallery" class="absolute inset-0 w-full h-full object-cover">
        </a>
      </div>
      <!-- Card 6 -->
      <div class="bg-white shadow-md rounded overflow-hidden hidden md:block" data-aos="fade-up" data-aos-delay="500">
        <a href="images/6.jpeg" data-fancybox="gallery" class="block relative w-full pt-[70%]">
        <img src="images/6.jpeg" alt="Image Gallery" class="absolute inset-0 w-full h-full object-cover">
        </a>
      </div>
      <!-- Repeat for other images -->
      </div>
    </section>

     <!-- Contact Section -->
<section id="contact" class="py-16 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 overflow-hidden">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <!-- Animated Heading -->
    <div class="text-center mb-16" data-aos="fade-up">
      <h2 class="text-4xl md:text-5xl font-bold mb-4 relative inline-block">
        <span class="relative z-10">Connect With</span>
        <span class="text-transparent bg-clip-text bg-sky-400 relative z-10 ml-2">Us</span>
         <span class="absolute -bottom-1 left-0 w-full h-1.5 bg-gradient-to-r from-sky-500 to-light-accent rounded-full animate-pulse-slow"></span>
                     </h2>
      <p class="text-gray-300 text-lg max-w-2xl mx-auto">
        Reach out for reservations, inquiries, or just to say hello. We're here to make your experience special.
      </p>
    </div>

    <!-- Contact Content Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-16">
      <!-- Contact Info Card -->
      <div class="bg-gray-800/50 backdrop-blur-sm p-8 rounded-xl shadow-2xl border border-gray-700 hover:border-sky-400 transition-all duration-300 hover:shadow-sky-500/10 hover:-translate-y-1" data-aos="fade-up" data-aos-delay="0">
        <div class="flex flex-col items-center text-center">
          <div class="w-16 h-16 bg-sky-500/10 rounded-full flex items-center justify-center mb-4 border border-sky-400/30">
            <i class="fas fa-map-marker-alt text-2xl text-sky-400"></i>
          </div>
          <h3 class="text-xl font-bold mb-2">Our Location</h3>
          <p class="text-gray-300 mb-4">Atlas Bole, Addis Ababa 1165</p>
          <a href="#map" class="text-sky-400 hover:text-sky-300 font-medium flex items-center group">
            View on map
            <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
          </a>
        </div>
      </div>

      <!-- Contact Hours Card -->
      <div class="bg-gray-800/50 backdrop-blur-sm p-8 rounded-xl shadow-2xl border border-gray-700 hover:border-blue-400 transition-all duration-300 hover:shadow-blue-500/10 hover:-translate-y-1" data-aos="fade-up" data-aos-delay="100">
        <div class="flex flex-col items-center text-center">
          <div class="w-16 h-16 bg-blue-500/10 rounded-full flex items-center justify-center mb-4 border border-blue-400/30">
            <i class="fas fa-clock text-2xl text-blue-400"></i>
          </div>
          <h3 class="text-xl font-bold mb-2">Opening Hours</h3>
          <p class="text-gray-300 mb-1">Monday - Sunday</p>
          <p class="text-gray-300 font-medium">3 PM – 1 AM</p>
          <div class="mt-4 px-4 py-2 bg-gray-700/50 rounded-full text-sm text-blue-300">
            <i class="fas fa-moon mr-2"></i>Nightlife specialists
          </div>
        </div>
      </div>

      <!-- Contact Methods Card -->
      <div class="bg-gray-800/50 backdrop-blur-sm p-8 rounded-xl shadow-2xl border border-gray-700 hover:border-purple-400 transition-all duration-300 hover:shadow-purple-500/10 hover:-translate-y-1" data-aos="fade-up" data-aos-delay="200">
        <div class="flex flex-col items-center text-center">
          <div class="w-16 h-16 bg-purple-500/10 rounded-full flex items-center justify-center mb-4 border border-purple-400/30">
            <i class="fas fa-phone-alt text-2xl text-purple-400"></i>
          </div>
          <h3 class="text-xl font-bold mb-2">Contact Us</h3>
          <div class="space-y-2 mb-4">
            <p class="text-gray-300"><a href="tel:+251977130587" class="hover:text-purple-300 transition">+251 977 130 587</a></p>
            <p class="text-gray-300"><a href="mailto:Hailesmojitobar@gmail.com" class="hover:text-purple-300 transition">Hailesmojitobar@gmail.com</a></p>
          </div>
          <div class="flex space-x-4 mt-2">
            <a href="https://instagram.com/hailesmojitobar" target="_blank" class="w-10 h-10 rounded-full bg-gradient-to-br from-pink-500 to-purple-600 flex items-center justify-center hover:scale-110 transition-transform">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="https://wa.me/251913229566" target="_blank" class="w-10 h-10 rounded-full bg-gradient-to-br from-green-500 to-green-600 flex items-center justify-center hover:scale-110 transition-transform">
              <i class="fab fa-whatsapp"></i>
            </a>
            <a href="https://www.tiktok.com/@hailes.mojito.bar" target="_blank" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:scale-110 transition-transform">
              <i class="fab fa-tiktok"></i>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Contact Form and Map -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
      <!-- Interactive Form -->
      <div class="bg-gray-800/50 backdrop-blur-sm p-8 rounded-xl shadow-2xl border border-gray-700">
        <h3 class="text-2xl font-bold mb-6 pb-3 border-b border-gray-700 relative" data-aos="fade-left">
          Send a Message
          <span class="absolute bottom-0 left-0 w-20 h-0.5 bg-gradient-to-r from-sky-500 to-light-accent"></span>
        </h3>

      <form id="contact-form" class="space-y-5" data-aos="fade-right" action="/contact-form.php" method="POST">
  <div class="relative">
    <input type="text" id="name" name="name" required 
           class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-400 peer placeholder-transparent"
           placeholder="Enter Your Name">
    <label for="name" class="absolute left-4 -top-3 bg-gray-800/50 px-1 text-sm text-gray-300 transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-3 peer-focus:-top-3 peer-focus:text-sm peer-focus:text-sky-300">
      Your Name
    </label>
  </div>
  
  <div class="relative">
    <input type="email" id="email" name="email" required 
           class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-400 peer placeholder-transparent"
           placeholder="Enter Your Email">
    <label for="email" class="absolute left-4 -top-3 bg-gray-800/50 px-1 text-sm text-gray-300 transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-3 peer-focus:-top-3 peer-focus:text-sm peer-focus:text-sky-300">
      Email Address
    </label>
  </div>
  
  <div class="relative">
    <input type="text" id="subject" name="subject" required 
           class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-400 peer placeholder-transparent"
           placeholder="Enter Subject">
    <label for="subject" class="absolute left-4 -top-3 bg-gray-800/50 px-1 text-sm text-gray-300 transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-3 peer-focus:-top-3 peer-focus:text-sm peer-focus:text-sky-300">
      Subject
    </label>
  </div>
  
  <div class="relative">
    <textarea id="message" name="message" rows="5" required 
              class="w-full px-4 py-3 bg-gray-700/50 border border-gray-600 rounded-lg focus:outline-none focus:ring-2 focus:ring-sky-400 peer placeholder-transparent"
              placeholder="Enter Your Message"></textarea>
    <label for="message" class="absolute left-4 -top-3 bg-gray-800/50 px-1 text-sm text-gray-300 transition-all peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-3 peer-focus:-top-3 peer-focus:text-sm peer-focus:text-sky-300">
      Your Message
    </label>
  </div>
  
  <button type="submit"
          class="w-full bg-sky-600 hover:bg-sky-700 font-bold py-3 px-6 rounded-lg text-lg transition-all duration-300 transform hover:scale-[1.02] shadow-lg hover:shadow-sky-500/20 flex items-center justify-center">
    <span>Send Message</span>
    <i class="fas fa-paper-plane ml-2"></i>
  </button>
</form>
<!-- Success Popup -->
<div id="success-popup" class="fixed inset-0 bg-black/50 flex items-center justify-center z-50 hidden">
  <div class="bg-white text-gray-800 rounded-lg p-6 shadow-lg max-w-sm w-full text-center space-y-4">
    <h2 class="text-xl font-semibold text-green-600">✅ Message Sent!</h2>
    <p>Thank you for reaching out. We'll get back to you soon.</p>
    <button onclick="closePopup()" class="bg-sky-600 hover:bg-sky-700 text-white font-semibold py-2 px-4 rounded transition-all">
      Close
    </button>
  </div>
</div>
      </div>
      <!-- <a href="https://maps.google.com?q=Haile's+Mojito+Bar" target="_blank" class="text-sky-400 hover:text-sky-300 flex items-center md:hidden">
            <i class="fas fa-external-link-alt mr-2"></i> Open in Maps
          </a> -->

      <!-- Interactive Map -->
      <div id="map" class="bg-gray-800/50 backdrop-blur-sm rounded-xl shadow-2xl border border-gray-700 ov</div>erflow-hidden hover:border-sky-400 transition-all duration-300 h-full min-h-[400px]">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.6914314044307!2d38.78180227352807!3d9.000514489437233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b8508bc3e9f97%3A0x2863955dd322e064!2sHaile&#39;s%20Mojito%20Bar!5e0!3m2!1sen!2set!4v1753870709374!5m2!1sen!2set" 
                width="100%" 
                height="100%" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                class="hover:scale-[1.01] transition-transform duration-300"></iframe>
        <div class="absolute bottom-4 right-4 bg-gray-900/80 backdrop-blur-sm px-3 py-2 rounded-lg text-sm">
          <a href="https://maps.google.com?q=Haile's+Mojito+Bar" target="_blank" class="text-sky-400 hover:text-sky-300 flex items-center">
            <i class="fas fa-external-link-alt mr-2"></i> Open in Maps
          </a>
        </div>
      </div>
    </div>
  </div>
</section>


    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
      AOS.init({
      once: true,
      duration: 900,
      offset: 80,
      easing: 'ease-in-out'
      });
    </script>
<footer class="bg-gray-900 text-gray-400 py-10">
  <div class="container mx-auto px-6">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 items-center">
      
      <!-- Logo & Description -->
      <div class="flex flex-col items-center lg:items-start text-center md:text-left md:col-span-2 lg:col-span-1" data-aos="fade-up">
        
        <a href="#" class="text-3xl font-extrabold flex gap-2 items-center">
          <img src="./images/logo 2.jpg" alt="Haile's Mojito Bar Logo" class="h-24 rounded-full shadow-lg">
          HAILE'S <span class="text-sky-400">MOJITO</span>
        </a>
        <p class="mt-3 text-gray-400">
          Crafted cocktails & relaxed vibes since 2013.
        </p>
      </div>
      
      <!-- Navigation Links -->
      <div class="flex flex-col space-y-2 text-center">
        <h4 class= font-semibold mb-2">Quick Links</h4>
        <a href="#home" class="hover:text-sky-400 transition">Home</a>
        <a href="#about" class="hover:text-sky-400 transition">About</a>
        <a href="#menu" class="hover:text-sky-400 transition">Menu</a>
        <a href="#contact" class="hover:text-sky-400 transition">Contact</a>
      </div>
      
      <!-- Social & Credits -->
      <div class="flex flex-col items-center md:items-end">
        <div class="flex space-x-5 mb-4">
   <a href="https://instagram.com/hailesmojitobar" target="_blank" class="text-gray-400 hover:text-sky-400 text-2xl"><i class="fab fa-instagram"></i></a>
        <a href="https://wa.me/251913229566" target="_blank" class="text-gray-400 hover:text-sky-400 text-2xl" aria-label="WhatsApp">
            <i class="fab fa-whatsapp"></i>
        </a>
          <a href="https://www.tiktok.com/@hailes.mojito.bar" target="_blank" class="text-gray-400 hover:text-sky-400 text-2xl"><i class="fab fa-tiktok"></i></a>
        
        </div>
        <p class="text-sm">&copy; 2025 Haile's Mojito Bar. All rights reserved.</p>
        <p class="text-sm mt-2">
          Developed by 
          <a href="https://www.minatechnologies.com/" target="_blank" rel="noopener" class="text-sky-400 hover:underline">
            Mina Technologies
          </a>
        </p>
      </div>
      
    </div>
  </div>
</footer>


    
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.0/dist/fancybox/fancybox.umd.js"></script>
    <script src="script.js"></script>
   



</body>
</html>