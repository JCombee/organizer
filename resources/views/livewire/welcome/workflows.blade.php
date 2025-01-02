<?php

use App\Livewire\Actions\Logout;
use Illuminate\Support\Facades\Auth;

use function Livewire\Volt\rules;
use function Livewire\Volt\state;

state(['password' => '']);

rules(['password' => ['required', 'string', 'current_password']]);

$deleteUser = function (Logout $logout) {
    $this->validate();

    tap(Auth::user(), $logout(...))->delete();

    $this->redirect('/', navigate: true);
};

?>
<section>
    <div class="w-full p-2 border border-t-0 border-x-0 border-b-gray-700">
        <div class="px-4 py-1 grow text-2xl">{{ __('Workflows') }}</div>
    </div>
    @foreach(\App\Models\Workflow::all() as $workflow)
        <div class="w-full p-4 border border-t-0 border-x-0 border-b-gray-700 hover:bg-gray-600 cursor-pointer">
        <div class="flex w-full">
            <div class="px-4 py-1 grow text-xl">{{ $workflow->name }}</div>
            <div>
                <button type="button"
                        class="px-4 py-1 font-semibold border rounded border-gray-900 dark:border-gray-100 text-gray-900 dark:text-gray-100">
                    {{ __('Edit') }}
                </button>
            </div>
        </div>
        </div>
    @endforeach
    <div class="w-full p-2">
    </div>
</section>
