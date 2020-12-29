<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('歡迎光臨') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
    <br>
        <a class="ml-4 text-sm:items-center text-gray-700 underline" href="/">首頁 <span class="sr-only"></span></a>
        <a class="ml-4 text-sm:items-center text-gray-700 underline" href="/playlist/">播放清單</a>
        <a class="ml-4 text-sm:items-center text-gray-700 underline" href="/lucky/">樂透明牌</a>
        <a href="https://laravel.bigcartel.com" class="ml-4 underline">Shop  </a>
    </br>
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
