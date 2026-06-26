<!DOCTYPE html>
<html lang="co">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LinkedIn Clone Template</title>
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-[#f3f2ef] font-sans text-gray-900 antialiased">

    <!-- ========================================== -->
    <!-- 1. HEADER (Barre de navigation)           -->
    <!-- ========================================== -->
    <header class="sticky top-0 z-50 bg-white border-b border-gray-200 px-4 py-2">
        <div class="max-w-6xl mx-auto flex items-center justify-between">

            <!-- Left: Logo & Search -->
            <div class="flex items-center space-x-2 flex-1 max-w-xs">
                <i class="fab fa-linkedin text-[#0a66c2] text-4xl"></i>
                <div class="relative w-full hidden md:block">
                    <i class="fas fa-search absolute left-3 top-3 text-gray-500 text-sm"></i>
                    <input type="text" placeholder="Recherche" class="w-full bg-[#edf3f8] pl-9 pr-3 py-2 rounded text-sm focus:outline-none focus:ring-1 focus:ring-gray-400">
                </div>
            </div>

            <!-- Right: Navigation Links -->
            <nav class="flex items-center space-x-6 text-gray-500 text-xs font-normal">
                <a href="#" class="flex flex-col items-center text-black border-b-2 border-black pb-1">
                    <i class="fas fa-home text-lg mb-1"></i>
                    <span class="hidden sm:inline">Accueil</span>
                </a>
                <a href="#" class="flex flex-col items-center hover:text-black">
                    <i class="fas fa-users text-lg mb-1"></i>
                    <span class="hidden sm:inline">Réseau</span>
                </a>
                <a href="#" class="flex flex-col items-center hover:text-black">
                    <i class="fas fa-briefcase text-lg mb-1"></i>
                    <span class="hidden sm:inline">Emplois</span>
                </a>
                <a href="#" class="flex flex-col items-center hover:text-black">
                    <i class="fas fa-comment-dots text-lg mb-1"></i>
                    <span class="hidden sm:inline">Messagerie</span>
                </a>
                <a href="#" class="flex flex-col items-center hover:text-black">
                    <i class="fas fa-bell text-lg mb-1"></i>
                    <span class="hidden sm:inline">Notifications</span>
                </a>
                <div class="border-l border-gray-200 h-8 h-full hidden sm:block"></div>
                <a href="#" class="flex flex-col items-center hover:text-black">
                    <img src="https://via.placeholder.com/150" alt="Profile" class="w-6 h-6 rounded-full mb-1">
                    <span class="hidden sm:inline">Vous <i class="fas fa-caret-down"></i></span>
                </a>
            </nav>
        </div>
    </header>

    <!-- ========================================== -->
    <!-- 2. BODY (3 Colonnes principal)            -->
    <!-- ========================================== -->
    <main class="max-w-6xl mx-auto px-4 py-6 grid grid-cols-1 md:grid-cols-4 gap-5">

        <!-- COLONNE GAUCHE: Profile card (1/4) -->
        <aside class="space-y-4 md:col-span-1">
            <div class="bg-white rounded-lg border border-gray-200 overflow-hidden shadow-sm">
                <!-- Banner -->
                <div class="h-14 bg-gradient-to-r line-gradient from-blue-400 to-indigo-500"></div>
                <!-- Profile details -->
                <div class="p-4 pt-0 text-center relative border-b border-gray-200">
                    <img src="https://via.placeholder.com/150" alt="Avatar" class="w-16 h-16 rounded-full border-2 border-white mx-auto -mt-8 mb-3 object-cover">
                    <h2 class="font-semibold text-base hover:underline cursor-pointer">Sami El Amrani</h2>
                    <p class="text-xs text-gray-500 mt-1">Développeur Full-Stack | React & Node.js</p>
                </div>
                <!-- Stats -->
                <div class="p-3 text-xs text-gray-500 space-y-2">
                    <div class="flex justify-between hover:bg-gray-100 p-1 rounded cursor-pointer">
                        <span>Vues du profil</span>
                        <span class="text-blue-600 font-semibold">142</span>
                    </div>
                    <div class="flex justify-between hover:bg-gray-100 p-1 rounded cursor-pointer">
                        <span>Impressions du post</span>
                        <span class="text-blue-600 font-semibold">1,024</span>
                    </div>
                </div>
            </div>
        </aside>

        <!-- COLONNE CENTRALE: Les Posts (2/4) -->
        <section class="space-y-4 md:col-span-2">

            <!-- Create Post Box -->
            <div class="bg-white rounded-lg border border-gray-200 p-4 shadow-sm">
                <div class="flex items-center space-x-2 mb-3">
                    <img src="https://via.placeholder.com/150" alt="Avatar" class="w-12 h-12 rounded-full">
                    <button class="flex-1 text-left bg-gray-50 hover:bg-gray-100 border border-gray-300 rounded-full py-3 px-4 text-sm font-medium text-gray-500 transition">
                        Commencer un post
                    </button>
                </div>
                <div class="flex justify-between text-gray-500 text-sm font-medium pt-1 px-2">
                    <button class="hover:bg-gray-100 p-2 rounded flex items-center space-x-2"><i class="fas fa-image text-blue-400"></i> <span>Photo</span></button>
                    <button class="hover:bg-gray-100 p-2 rounded flex items-center space-x-2"><i class="fab fa-youtube text-green-400"></i> <span>Vidéo</span></button>
                    <button class="hover:bg-gray-100 p-2 rounded flex items-center space-x-2"><i class="fas fa-calendar-alt text-orange-400"></i> <span>Événement</span></button>
                    <button class="hover:bg-gray-100 p-2 rounded flex items-center space-x-2"><i class="fas fa-newspaper text-red-400"></i> <span>Rédiger</span></button>
                </div>
            </div>

            <!-- POST 1 (With Image) -->
            <article class="bg-white rounded-lg border border-gray-200 shadow-sm">
                <!-- Post Header -->
                <div class="flex items-center justify-between p-4 pb-2">
                    <div class="flex items-center space-x-3">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=150" alt="Author" class="w-12 h-12 rounded-full object-cover">
                        <div>
                            <h3 class="font-semibold text-sm hover:text-blue-600 hover:underline cursor-pointer">Anas Mansouri</h3>
                            <p class="text-xs text-gray-500">UI/UX Designer chez TechSolutions</p>
                            <p class="text-xs text-gray-400 flex items-center mt-0.5">2 h • <i class="fas fa-globe-americas ml-1"></i></p>
                        </div>
                    </div>
                    <button class="text-gray-500 hover:bg-gray-100 w-8 h-8 rounded-full"><i class="fas fa-ellipsis-h"></i></button>
                </div>
                <!-- Post Content -->
                <div class="px-4 pb-3 text-sm text-gray-800 leading-relaxed">
                    Had l-interface dyal LinkedIn tqaddat ghir b HTML u Tailwind CSS! Chnu ban likom f had l-design l-hmer? 🚀 #webdevelopment #uxui #coding
                </div>
                <!-- Post Media -->
                <div class="bg-gray-100">
                    <img src="https://images.unsplash.com/photo-1531403009284-440f080d1e12?w=800" alt="Post Image" class="w-full max-h-96 object-cover">
                </div>
                <!-- Post Stats -->
                <div class="flex justify-between items-center px-4 py-2 text-xs text-gray-500 border-b border-gray-100">
                    <div class="flex items-center space-x-1">
                        <span class="bg-blue-500 text-white p-0.5 rounded-full text-[10px]"><i class="fas fa-thumbs-up"></i></span>
                        <span class="bg-red-500 text-white p-0.5 rounded-full text-[10px]"><i class="fas fa-heart"></i></span>
                        <span>Yassine u 42 akharin</span>
                    </div>
                    <div>
                        <span class="hover:underline cursor-pointer">12 commentaires</span>
                    </div>
                </div>
                <!-- Post Actions -->
                <div class="flex justify-between px-2 py-1 text-gray-500 text-sm font-semibold">
                    <button class="flex-1 hover:bg-gray-100 py-2.5 rounded flex items-center justify-center space-x-2"><i class="far fa-thumbs-up"></i> <span>J'aime</span></button>
                    <button class="flex-1 hover:bg-gray-100 py-2.5 rounded flex items-center justify-center space-x-2"><i class="far fa-comment-alt"></i> <span>Commenter</span></button>
                    <button class="flex-1 hover:bg-gray-100 py-2.5 rounded flex items-center justify-center space-x-2"><i class="fas fa-retweet"></i> <span>Partager</span></button>
                    <button class="flex-1 hover:bg-gray-100 py-2.5 rounded flex items-center justify-center space-x-2"><i class="far fa-paper-plane"></i> <span>Envoyer</span></button>
                </div>
            </article>

            <!-- POST 2 (Text Only) -->
            <article class="bg-white rounded-lg border border-gray-200 shadow-sm">
                <div class="flex items-center justify-between p-4 pb-2">
                    <div class="flex items-center space-x-3">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=150" alt="Author" class="w-12 h-12 rounded-full object-cover">
                        <div>
                            <h3 class="font-semibold text-sm hover:text-blue-600 hover:underline cursor-pointer">Karim Bennani</h3>
                            <p class="text-xs text-gray-500">Engineering Manager</p>
                            <p class="text-xs text-gray-400 flex items-center mt-0.5">5 h • <i class="fas fa-globe-americas ml-1"></i></p>
                        </div>
                    </div>
                    <button class="text-gray-500 hover:bg-gray-100 w-8 h-8 rounded-full"><i class="fas fa-ellipsis-h"></i></button>
                </div>
                <div class="px-4 pb-4 text-sm text-gray-800 leading-relaxed">
                    Wahed l-conseil l-ga3 n-nas li baghin ybdaur l-freelance: Matbdaoch b tqleb 3la l-flous, bdaou b tqleb 3la t-triba u t-triba tجib l-m3rifa u l-m3rifa tجib l-flous. Bon courage l-jami3! ✨
                </div>
                <div class="flex justify-between items-center px-4 py-2 text-xs text-gray-500 border-b border-gray-100">
                    <div class="flex items-center space-x-1">
                        <span class="bg-blue-500 text-white p-0.5 rounded-full text-[10px]"><i class="fas fa-thumbs-up"></i></span>
                        <span>88 likes</span>
                    </div>
                    <div><span class="hover:underline cursor-pointer">3 commentaires</span></div>
                </div>
                <div class="flex justify-between px-2 py-1 text-gray-500 text-sm font-semibold">
                    <button class="flex-1 hover:bg-gray-100 py-2.5 rounded flex items-center justify-center space-x-2"><i class="far fa-thumbs-up"></i> <span>J'aime</span></button>
                    <button class="flex-1 hover:bg-gray-100 py-2.5 rounded flex items-center justify-center space-x-2"><i class="far fa-comment-alt"></i> <span>Commenter</span></button>
                    <button class="flex-1 hover:bg-gray-100 py-2.5 rounded flex items-center justify-center space-x-2"><i class="fas fa-retweet"></i> <span>Partager</span></button>
                </div>
            </article>

        </section>

        <!-- COLONNE DROITE & FOOTER: News u Footer (1/4) -->
        <div class="space-y-4 md:col-span-1">
            <!-- News Card -->
            <div class="bg-white rounded-lg border border-gray-200 p-4 shadow-sm">
                <h3 class="font-semibold text-sm mb-3 text-gray-900 flex justify-between items-center">
                    LinkedIn Actualités <i class="fas fa-info-circle text-gray-500 text-xs"></i>
                </h3>
                <ul class="space-y-3 text-xs">
                    <li class="cursor-pointer group">
                        <h4 class="font-semibold text-gray-800 group-hover:text-blue-600 group-hover:underline">• Marché de l'emploi en 2026</h4>
                        <p class="text-gray-500 pl-2">Top tendances - 3,420 lecteurs</p>
                    </li>
                    <li class="cursor-pointer group">
                        <h4 class="font-semibold text-gray-800 group-hover:text-blue-600 group-hover:underline">• L'essor de l'IA au Maroc</h4>
                        <p class="text-gray-500 pl-2">Il y a 1 jour - 1,250 lecteurs</p>
                    </li>
                </ul>
            </div>

            <!-- ========================================== -->
            <!-- 3. FOOTER (f l-ymn kima LinkedIn d l-PC)   -->
            <!-- ========================================== -->
            <footer class="text-center md:text-left px-2 text-[11px] text-gray-500 space-y-2 sticky top-20">
                <div class="flex flex-wrap justify-center md:justify-start gap-x-3 gap-y-1">
                    <a href="#" class="hover:underline hover:text-blue-600">À propos</a>
                    <a href="#" class="hover:underline hover:text-blue-600">Accessibilité</a>
                    <a href="#" class="hover:underline hover:text-blue-600">Conditions</a>
                    <a href="#" class="hover:underline hover:text-blue-600">Politique de confidentialité</a>
                    <a href="#" class="hover:underline hover:text-blue-600">Cookies</a>
                </div>
                <div class="flex items-center justify-center md:justify-start space-x-1 mt-2">
                    <span class="font-bold text-[#0a66c2]">Linked<i class="fab fa-linkedin"></i></span>
                    <span>LinkedIn Corporation © 2026</span>
                </div>
            </footer>
        </div>

    </main>

</body>
</html>
