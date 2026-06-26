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
    <main class="max-w-6xl mx-auto px-4 py-6 grid grid-cols-1 md:grid-cols-4 gap-5">
        @yield("content");

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
