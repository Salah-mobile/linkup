@extends('layouts.app')
@section("content")
        <!-- COLONNE GAUCHE: Profile card (1/4) -->
        <aside class="space-y-4 md:col-span-1">
            <div class="bg-white rounded-lg border border-gray-200 overflow-hidden shadow-sm">
                <!-- Banner -->
                <div class="h-14 bg-gradient-to-r line-gradient from-blue-400 to-indigo-500"></div>
                <!-- Profile details -->
                <div class="p-4 pt-0 text-center relative border-b border-gray-200">
                    <img src="https://via.placeholder.com/150" alt="Avatar" class="w-16 h-16 rounded-full border-2 border-white mx-auto -mt-8 mb-3 object-cover">
                    <h2 class="font-semibold text-base hover:underline cursor-pointer">salah eddine tabit</h2>
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
                    <img src=
                    "https://images.unsplash.com/photo-1531403009284-440f080d1e12?w=800" alt="Post Image" class="w-full max-h-96 object-cover">
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

           @forelse($posts as $post)
            <article class="bg-white border border-slate-200/70 rounded-xl shadow-[0_1px_2px_rgba(0,0,0,0.02)] hover:border-slate-300 transition duration-200 group">

                <div class="p-4 flex items-start justify-between">
                    <div class="flex items-center space-x-3">
                        <img src="{{ $post->user->image_url ?? 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=200&auto=format&fit=crop' }}"
                             alt="{{ $post->user->name }}"
                             class="w-9 h-9 rounded-xl object-cover ring-2 ring-slate-50">
                        <div>
                            <h3 class="font-semibold text-slate-900 text-xs hover:text-blue-600 cursor-pointer transition">
                                {{ $post->user->name }}
                            </h3>
                            <p class="text-[10px] text-slate-400 font-medium line-clamp-1">
                                {{ $post->user->headline }}
                                @if($post->user->company)
                                    <span class="text-slate-300">|</span> <span class="text-slate-500">{{ $post->user->company }}</span>
                                @endif
                            </p>
                        </div>
                    </div>

                    <span class="text-[10px] text-slate-400 font-normal">
                        {{ $post->created_at->diffForHumans(null, true) }} </span>
                </div>

                <div class="px-4 pb-3">
                    <p class="text-slate-700 text-xs leading-relaxed select-text line-clamp-3 group-hover:line-clamp-none transition-all duration-300">
                        {{ $post->content }}
                    </p>
                </div>

                <div class="px-4 py-2 bg-slate-50/50 border-t border-slate-100 rounded-b-xl flex items-center space-x-4 text-slate-400 text-[11px] font-medium">
                    <button class="flex items-center space-x-1.5 hover:text-blue-600 transition cursor-pointer">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M14 10h4.757c.746 0 1.436.318 1.908.878l.4.472c.446.527.62 1.233.474 1.91l-1.242 5.8a3 3 0 01-2.93 2.37H7a1 1 0 01-1-1v-8a1 1 0 01.3-.7l5.4-5.4a1 1 0 011.414 0l1.242 1.242c.325.325.508.766.508 1.226V10zM6 21H4a1 1 0 01-1-1v-8a1 1 0 011-1h2v10z"></path></svg>
                        <span>J'aime</span>
                    </button>

                    <button class="flex items-center space-x-1.5 hover:text-slate-700 transition cursor-pointer">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                        <span>Commenter</span>
                    </button>
                </div>

            </article>
        @empty
            <div class="bg-white border border-dashed border-slate-200 p-8 rounded-xl text-center text-slate-400 text-xs">
                Aucun post disponible.
            </div>
        @endforelse
        </section>
@endsection('content')
