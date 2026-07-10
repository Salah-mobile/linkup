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
    </div>
    @include("layouts.commante")
</div>
@endsection
