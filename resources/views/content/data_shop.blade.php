<x-guest-layout>
    <x-slot name="header">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Where to get Data') }}
            </h2>
    </x-slot>
    <div class="p-3">
        <p>Core data and non-core or worked-up data sets are available via the different routes as described below</p>
        <div class="grid grid-cols-3 gap-4 rounded-top ">
            <div>
                <h2 class="mt-4 h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">
                    <strong>1. NWFP data portal</strong>
                </h2>
                <p>TEST AGAIN Core data as yearly .csv files are available from the dedicated portal at the link below.
<br>
                   Please note you are required to register in order to use the portal.
<br>
<br>
                    <a href="https://nwfp.rothamsted.ac.uk/">https://nwfp.rothamsted.ac.uk/</a>
                    
                </p>
            </div>
            
            <div>
                <h2 class="mt-4 h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">
                    <strong>2. API</strong></h2>

                <p>Access to the core data via API </p>
                <p>Make a BUTTON link that goes to the API</p>

            </div>
            
            <div>
                <h2 class="mt-4 h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">
                    <strong>3. Other Datasets</strong></h2>
                <p> A collection of non-core and worked-up datasets are available in Rothamsted Data Repository powered by CKAN.
                    The site has a useful search feature to search for various topics.</p>
                <p>Make a BUTTON link that goes to https://data.rothamsted.ac.uk/group/north-wyke-farm-platform</p>
            </div>
            
            

        </div>
    </div>
</x-guest-layout>
