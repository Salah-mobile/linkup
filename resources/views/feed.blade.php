@extends('layouts.app')
@section("content")
        <aside class="space-y-4 md:col-span-1">
            <div class="bg-white rounded-lg border border-gray-200 overflow-hidden shadow-sm">
                <div class="h-14 bg-gradient-to-r line-gradient from-blue-400 to-indigo-500"></div>
                <div class="p-4 pt-0 text-center relative border-b border-gray-200">
                    <img src="https://via.placeholder.com/150" alt="Avatar" class="w-16 h-16 rounded-full border-2 border-white mx-auto -mt-8 mb-3 object-cover">
                    <h2 class="font-semibold text-base hover:underline cursor-pointer">salah eddine tabit</h2>
                    <p class="text-xs text-gray-500 mt-1">Développeur Full-Stack | React & Node.js</p>
                </div>
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

        <section class="space-y-4 md:col-span-2">

            <div class="bg-white rounded-xl border border-slate-200 p-4 shadow-sm">
                <form action="{{route("create.poste")}}" method="post" class="space-y-3">
                    @csrf
                    <div class="flex space-x-3 items-start">
                        <div class="flex-1">
                            <textarea name="poste" rows="3" required
                                class="w-full text-sm text-slate-700 placeholder-slate-400 border border-slate-100 focus:border-slate-200 focus:ring-0 resize-none rounded-lg p-2 bg-slate-50/50"
                                placeholder="Quoi de neuf, Partagez vos idées..."></textarea>
                        </div>
                    </div>
                    <div class="flex justify-end pt-2 border-t border-slate-100">
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium text-xs px-4 py-2 rounded-full transition duration-200 shadow-sm">
                            Publier
                        </button>
                    </div>
                </form>
            </div>
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

                    <div class="flex items-center space-x-2">
                        <span class="text-[10px] text-slate-400 font-normal mr-1">
                            {{ $post->created_at->diffForHumans(null, true) }}
                        </span>

                        @can('update', $post)
                        <div class="flex items-center space-x-1 border-l border-slate-100 pl-2">
                            <a href="{{route("update.page.poste",$post)}}"
                               class="p-1.5 text-slate-400 hover:text-blue-600 hover:bg-slate-50 rounded-lg transition duration-150"
                               title="Modifier">
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"></path>
                                </svg>
                            </a>

                            <form action="{{route("delete.poste",$post)}}" method="post" class="inline">
                                @csrf
                                @method("DELETE")
                                <button type="submit"
                                        class="p-1.5 text-slate-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition duration-150"
                                        title="Supprimer"
                                        >
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"></path>
                                    </svg>
                                </button>
                            </form>
                        </div>
                        @endcan
                    </div>
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
