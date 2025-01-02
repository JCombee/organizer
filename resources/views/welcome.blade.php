<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Welcome') }}
        </h2>
    </x-slot>

    <div class="mx-auto py-12 w-96">
        <div class="max-w-7xl">
            <div class="bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="w-full">
                    <livewire:welcome.workflows />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
