<x-guest-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Data Guides') }}
        </h2>
    </x-slot>


    @livewire('publications', ['keyref' => "KeyRefUserGuide"])


</x-guest-layout>
