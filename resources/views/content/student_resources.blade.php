<x-guest-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Information for Students') }}
        </h2>
    </x-slot>
<div>
    <div style="color:red;" class="p-3"><b>NEED TO ADD CONTENT HERE e.g.</></div>

    <ul class="space-y-3 p-3">
        <x-li-dot class="bg-nw-blue-500">Link student video testimonies (Imperial) and Photographs</x-li-dot>
        <x-li-dot class="bg-nw-blue-600">Link data animation</x-li-dot>
        <x-li-dot class="bg-nw-blue-700">Link to project ideas</x-li-dot>
    </ul>
</div>
<div class="p-1">
    <div class="border-2 border-nw-blue-700 bg-nw-blue-50 p-3">
        <b>Please contact</b>
            <a onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;"href="mailto:nw.farmplatform@rothamsted.ac.uk">
                <u>nw.farmplatform@rothamsted.ac.uk</u>
            </a>for enquiries.
        </p>
    </div>
</div>
</x-guest-layout>  