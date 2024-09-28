<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 flex flex-wrap gap-y-4 gap-x-2 text-gray-900 dark:text-gray-100">
                    @foreach ($regionales as $regional)
                        <div class="p-4 flex flex-col w-full bg-gray-100 rounded-xl items-center gap-2 max-w-96">
                            <p class="font-bold">
                                Regional {{ $regional->nombre_regional }} <i class="fa-solid fa-mountain-city text-xl p-2 rounded-xl bg-green-300"></i>
                            </p>
                            <p>
                                Cantidad de bicicletas {{ $regional->cantidad_bicicletas }}
                            </p>
                            <a href="{{ route('regionales.getCentrosMaps', $regional->id) }}" class="btn btn-outline btn-sm border-none">
                                Ver ubicaciones
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>