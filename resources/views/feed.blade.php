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
                    <a href="{{route("save.page")}}">
                        <div class="flex justify-between hover:bg-gray-100 p-1 rounded cursor-pointer">
                            <span>saves</span>
                            <span class="text-blue-600 font-semibold">{{count($saves->where("user_id",Auth::id()))}}</span>
                        </div>
                    </a>
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
                    @error("poste")
                       <p class="text-xs font-medium text-red-600 mt-1.5 flex items-center gap-1">
                           <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                           {{$message}}
                       </p>
                    @enderror
                    <div class="flex justify-end pt-2 border-t border-slate-100">
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-medium text-xs px-4 py-2 rounded-full transition duration-200 shadow-sm">
                            Publier
                        </button>
                    </div>
                </form>
            </div>
            @include("layouts.commante")
        </section>

@endsection
