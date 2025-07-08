<div>
    <div class="row w-100 border border-b-8 border-nw-blue-700">
        <h2 class="h-12 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">Latest news</h2>
    @foreach ($news as $item)
        <div class="container m-3">
            <div class="flex overflow-hidden  dark:bg-gray-800">

                <!-- media -->
                <div class="w-32 flex-none">
                    <img src="{{ $item->image }}" />
                </div>
                <!-- content -->
                <div class="w-78 flex-1">
                    <div class="flex flex-col p-6">
                        <h3 class="text-lg font-semibold leading-tight"><a
                                class="text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                                href="{{ $item->url }}">{{ $item->title }}</a>
                        </h3>
                        <h4> {{ $item->authors }} ({{ $item->issue_date }})
                        </h4>
                        <p class="mt-2 text-sm tracking-wide text-gray-700"> <span
                                class="italic">{{ $item->journal }}</span>

                        </p>


                        @if ($item->doi)
                            <p class="mt-2 text-sm tracking-wide text-gray-700"><span class="font-semibold">Paper Cited:
                                </span><a
                                    class="text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                                    href="https://doi.org/{{ $item->doi }}">{{ $item->doi }}

                                </a>
                            </p>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
</div>
