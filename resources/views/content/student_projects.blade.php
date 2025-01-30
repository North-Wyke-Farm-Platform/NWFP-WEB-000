<x-guest-layout>
    <div>
        <x-slot name="header">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Postgraduate Student Projects') }}
            </h2>
        </x-slot>
        <div class="p-3">
            <div class="border-2 border-nw-blue-700 bg-nw-blue-50 p-5">
                <p>The North Wyke Farm Platform is an exceptional resource for research student projects.
                </p> 
                <p>Research projects can take place on the farm platform or our long term data sets 
                can be used as the basis for research projects.
                </p>
                <p>As well as being open to your own ideas we have a list of suggested projects that we'd 
                be happy to discuss with you whether you are a postgraduate student or a Director of Studies or Supervisor. 
                </p>
            </div>
            <br>
            <div style="text-align:justify;padding-right:0px" class="p-5">
            <b>We are excited to support projects from a wide range of disciplines. Recent collaborations at Masters and PhD level include:-</b>
            <div class="p-5">
                <ul class="space-y-1">
                    <x-li-arrow>
                        AI and Machine Learning
                    </x-li-arrow>
                    <x-li-arrow>
                        Data Visualisation and Data Journalism
                    </x-li-arrow>   
                    <x-li-arrow>
                        Computer Science
                    </x-li-arrow> 
                    <x-li-arrow>
                        Uncertainty
                    </x-li-arrow>  
                    <x-li-arrow>
                        Sensor Development and Sensor Technologies
                    </x-li-arrow>   
                    <x-li-arrow> 
                        Bio-Acoustics
                    </x-li-arrow>  
                    <x-li-arrow> 
                        Soil, Air, Water, Meteorology 
                    </x-li-arrow>
                    <x-li-arrow> 
                        Animal and Crop Production
                    </x-li-arrow>
                    <x-li-arrow> 
                        Farm Management Data
                    </x-li-arrow>  
                    <x-li-arrow>
                        Biodiversity
                    </x-li-arrow>
                    <x-li-arrow>
                        Data Wrangling
                    </x-li-arrow>   
                    <x-li-arrow>
                        Coding
                    </x-li-arrow>   
                </ul>
            </div>
        </div>

    <div class="items-top justify-beween flex border-y-4 border-nw-blue-700 p-1">
        <div class="md:grid-col-4 grid gap-4 sm:grid-cols-1 lg:grid-cols-2 p-5">
            <p><strong>For further information please click the relevant button below</strong></p>
            <br>
            <p class="px-0 pt-1"> 
            <x-button-link href="/content/student_resources" target="_blank" class="btn-primary">
            Information for Students
            </x-button-link>
            </p>

            <p class="px-0 pt-1">
            <x-button-link href="/content/supervisor_resources" target="_blank" class="btn-primary">
            Information for Supervisors
            </x-button-link></p>
        </div>
    </div>
    <br>
    <br>
</x-guest-layout>
