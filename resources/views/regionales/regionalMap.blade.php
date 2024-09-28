<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<x-app-layout>
    <x-slot name="header">
        <div class="w-full flex items-center gap-6">
            <a href="{{ route('dashboard') }}" class="btn btn-sm">
                <i class="fa-solid fa-chevron-left text-bold"></i>             
            </a>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Ubicaciones de centros') }}
            </h2>
        </div>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="w-full text-center p-4">
                <h2 class="font-bold text-2xl">
                    Puntos de bicicletas de la regional {{$name}}
                </h2>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 flex flex-wrap gap-y-4 gap-x-2 text-gray-900 dark:text-gray-100">
                    <div class="w-full max-h-96 p-8">
                        <x-maps-leaflet 
                        :centerPoint="$region   "
                        :markers="$puntos"
                        :zoomLevel="10"
                        >

                        </x-maps-leaflet>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>