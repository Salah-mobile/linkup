@extends("layouts.app")
@section("content")
    <div class="bg-white rounded-xl border border-slate-200 p-5 shadow-sm max-w-2xl mx-auto my-4">
    <div class="flex items-center space-x-2 pb-3 mb-4 border-b border-slate-100">
        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"></path>
        </svg>
        <h2 class="font-semibold text-sm text-slate-800">Modifier votre post</h2>
    </div>
    <form action="{{ route('update.poste', $post) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')
        <div class="space-y-1">
            <label for="content" class="text-[11px] font-medium text-slate-400 uppercase tracking-wider">Contenu du post</label>
            <textarea
                name="content"
                id="content"
                rows="5"
                required
                class="w-full text-sm text-slate-700 placeholder-slate-400 border border-slate-200 focus:border-blue-500 focus:ring-1 focus:ring-blue-500/20 resize-none rounded-xl p-3 bg-slate-50/30 transition duration-150"
                placeholder="Modifier votre message...">{{ $post->content }}</textarea>
                 @error("content")
                    <p class="text-xs font-medium text-red-600 mt-1.5 flex items-center gap-1">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                        {{$message}}
                    </p>
                @enderror
        </div>

        <div class="flex justify-end space-x-2 pt-2 border-t border-slate-100">
            <a href="{{ url()->previous() }}" class="px-4 py-2 text-xs font-medium text-slate-500 hover:text-slate-700 hover:bg-slate-100 rounded-full transition duration-150">
                Annuler
            </a>
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium text-xs px-5 py-2 rounded-full transition duration-200 shadow-sm flex items-center space-x-1.5">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"></path>
                </svg>
                <span>Enregistrer les modifications</span>
            </button>
        </div>
    </form>
</div>
@endsection
