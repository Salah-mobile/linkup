@extends("layouts.app")
@section("content")
<div class="max-w-2xl mx-auto my-8 px-4 space-y-6">
    <div class="bg-white border border-slate-200 rounded-2xl p-6 shadow-sm flex flex-col sm:flex-row items-center sm:items-start space-y-4 sm:space-y-0 sm:space-x-6">
        <div class="w-20 h-20 bg-gradient-to-tr from-blue-500 to-indigo-600 rounded-2xl flex items-center justify-center text-white text-2xl font-bold shadow-md uppercase">
            {{ substr($user->name, 0, 2) }}
        </div>
        <div class="flex-1 text-center sm:text-left space-y-1">
            <h1 class="text-xl font-bold text-slate-900">{{ $user->name }}</h1>
            <p class="text-sm text-slate-500 flex items-center justify-center sm:justify-start space-x-1.5">
                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path></svg>
                <span>{{ $user->email }}</span>
            </p>
            <p class="text-xs text-slate-400 pt-1">
                Membre depuis {{ $user->created_at->diffForHumans(null, true) }}
            </p>
        </div>
    </div>
    <div class="flex items-center justify-between border-b border-slate-200 pb-3">
        <h2 class="text-base font-bold text-slate-800">Publications</h2>
        <span class="bg-slate-100 text-slate-600 text-xs font-semibold px-2.5 py-1 rounded-full">{{ count($posts) }}</span>
    </div>
    <div class="space-y-4">
        @forelse ($posts as $post)
        <article class="bg-white border border-slate-200/70 rounded-xl shadow-[0_1px_2px_rgba(0,0,0,0.02)] hover:border-slate-300 transition duration-200 group">
            <div class="p-4 flex items-start justify-between">
                <div class="flex items-center space-x-3">
                    <a href="{{route("profil",$post->user)}}">
                        <img src="{{ $post->user->image_url ?? 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=200&auto=format&fit=crop' }}"
                             alt="{{ $post->user->name }}"
                             class="w-9 h-9 rounded-xl object-cover ring-2 ring-slate-50">
                    </a>
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

                    @can('update',$post)
                    <div class="flex items-center space-x-1 border-l border-slate-100 pl-2 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                        <a href="{{route("update.page.poste",$post)}}"
                        class="p-1.5 text-slate-400 hover:text-blue-600 hover:bg-blue-50/80 rounded-lg transition-all duration-150 relative group/tooltip"
                        title="Modifier">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"></path>
                            </svg>
                        </a>
                        <form action="{{route("delete.poste",$post)}}" method="post" class="inline">
                            @csrf
                            @method("DELETE")
                            <button type="submit"
                                    class="p-1.5 text-slate-400 hover:text-red-600 hover:bg-red-50/80 rounded-lg transition-all duration-150"
                                    title="Supprimer">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
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
            <div class="px-4 py-2 bg-slate-50/50 border-t border-slate-100 flex items-center space-x-4 text-slate-400 text-[11px] font-medium">
                <form action="{{route('like.toggle',$post)}}" method="post">
                    @csrf
                    <button class="flex items-center space-x-1.5 transition cursor-pointer
                        {{ $likes->where('post_id', $post->id)->where('user_id', auth()->id())->isNotEmpty()
                            ? 'text-blue-600'
                            : 'text-gray-500 hover:text-blue-600' }}">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M14 10h4.757c.746 0 1.436.318 1.908.878l.4.472c.446.527.62 1.233.474 1.91l-1.242 5.8a3 3 0 01-2.93 2.37H7a1 1 0 01-1-1v-8a1 1 0 01.3-.7l5.4-5.4a1 1 0 011.414 0l1.242 1.242c.325.325.508.766.508 1.226V10zM6 21H4a1 1 0 01-1-1v-8a1 1 0 011-1h2v10z"></path></svg>
                        <span>
                           {{$likes->where('post_id',$post->id)->count()}}
                        </span>
                    </button>
                </form>
                <button class="flex items-center space-x-1.5 hover:text-slate-700 transition cursor-pointer commente">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                    <span>Commenter</span>
                </button>
            </div>
            <div class="place-commante hidden border-t border-slate-100 bg-slate-50/30 p-4 rounded-b-xl space-y-4">
                <form action="{{ route('com.create') }}" method="POST" class="flex items-start space-x-2">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                    <input type="hidden" name="post_id" value="{{ $post->id }}">

                    <div class="flex-1 relative">
                        <input
                            type="text"
                            name="com"
                            required
                            placeholder="Laissez un commentaire..."
                            class="w-full bg-white border border-slate-200 text-xs text-slate-700 placeholder-slate-400 rounded-full px-4 py-2 pr-16 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition shadow-sm"
                        >
                        <button
                            type="submit"
                            class="absolute right-1.5 top-1/2 -translate-y-1/2 bg-blue-600 hover:bg-blue-700 text-white text-[10px] font-semibold px-3 py-1 rounded-full transition shadow-sm"
                        >
                            Publier
                        </button>
                    </div>
                </form>

                <div class="space-y-3 max-h-60 overflow-y-auto pr-1">
                   @foreach ($commentaire as $com)
                      @if ($com->post_id == $post->id)
                        <div class="flex items-start space-x-2 group/comment">
                            <div class="flex-1 bg-slate-100/80 p-2.5 rounded-2xl relative pr-8">
                                <div class="flex items-center justify-between">
                                    <h4 class="font-semibold text-slate-800 text-[11px] hover:underline cursor-pointer">
                                        {{ $com->user->name }}
                                    </h4>
                                </div>
                                <p class="text-slate-600 text-xs mt-0.5 whitespace-pre-line leading-normal">
                                    {{ $com->content }}
                                </p>
                                @can("delete", $com)
                                    <div class="absolute top-2.5 right-2.5 opacity-0 group-hover/comment:opacity-100 transition-opacity duration-150">
                                        <form action="{{ route("com.delete", $com) }}" method="POST" class="inline">
                                            @csrf
                                            @method("DELETE")
                                            <button type="submit" class="p-1 text-slate-400 hover:text-red-500 hover:bg-red-50 rounded-md transition" title="Supprimer le commentaire">
                                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                @endcan
                            </div>
                        </div>
                    @endif
                @endforeach
                </div>
            </div>
        </article>
        @empty
        <div class="bg-white border border-dashed border-slate-300 rounded-xl p-8 text-center">
            <svg class="w-8 h-8 text-slate-400 mx-auto mb-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10l4 4v10a2 2 0 01-2 2z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M14 2v6h6"></path></svg>
            <p class="text-sm text-slate-500">Aucune publication créée par {{ $user->name }} pour le moment.</p>
        </div>
        @endforelse
    </div>
</div>
 <script>
            let btns = document.querySelectorAll(".commente");
            let placeCommante = document.querySelectorAll(".place-commante");

            for (let i = 0; i < btns.length; i++) {
                btns[i].addEventListener("click", () => {
                    placeCommante[i].classList.toggle("hidden");
                });
            }
        </script>
@endsection
