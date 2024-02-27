<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Operator Dashboard
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-lg font-semibold mb-4">Welcome, {{ $user->name }}!</h3>    
                        <p class="text-gray-600">You are authenticated as {{ $user->getRoleNames()->implode(', ') }}.</p>
                        <div class="mt-4">
                            @foreach ($user->restaurants as $restaurant)
                                <a href="{{ route('menu', $restaurant->slug) }}"
                                    class="text-blue-400 hover:underline">View {{ $restaurant->name }}</a>
                            @endforeach
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
