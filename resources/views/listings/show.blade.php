<x-app-layout>
<x-job-schema :listing="$listing" />
    <section class="text-gray-600 body-font overflow-hidden">
        <div class="container px-5 py-24 mx-auto">
        
            <div class="mb-12">
                <div class="flex items-center">
                <img src="https://www.getautismactive.com/wp-content/uploads/2021/01/Test-Logo-Circle-black-transparent.png" alt="Logo" class="w-16 h-16 rounded-full object-cover">
                <h1 class="text-3xl font-medium text-gray-900 title-font ml-2"> {{ $listing->company }}</h1>
                </div>
                <h3>
                    {{ $listing->company }} &mdash; <span class="text-gray-600">{{ $listing->location }}</span>
                </h3>
                <div class="md:flex-grow mr-8 mt-2 flex items-center justify-start">
                    @foreach($listing->tags as $tag)
                        <span class="inline-block mr-2 tracking-wide text-indigo-500 text-xs font-medium title-font py-0.5 px-1.5 border border-indigo-500 uppercase">{{ $tag->name }}</span>
                    @endforeach
                </div>
                
            </div>
            <div class="-my-6">
                <div class="flex flex-wrap md:flex-nowrap">
                    <div class="content w-full md:w-4/6 pr-4 leading-relaxed text-base">
                        {!! $listing->content !!}
                    </div>
                    <div class="w-full md:w-2/6 pl-4 justify-between h-full">
                    <a href="{{ route('listings.apply', $listing->slug) }}" class="block text-center tracking-wide bg-white text-indigo-500 text-sm font-medium title-font py-2 border border-indigo-500 hover:bg-indigo-500 hover:text-white uppercase">{{$listing->apply_link}}</a>
                    <a class="block text-center my-4 tracking-wide bg-white text-indigo-500 text-sm font-medium title-font py-2 border border-indigo-500 hover:bg-indigo-500 hover:text-white uppercase" href="tel:+491234567890"> +49 (0)123 456 789</a>
                    <iframe width="480" height="300" style="border:0" loading="lazy" allowfullscreen src="https://www.google.com/maps/embed/v1/place?q=place_id:{{ $placeId }}&key={{$apiKey}}"></iframe>
                    <div>
                        <h2 class="text-lg font-medium text-black title-font">Öffnungszeiten:</h2>
                        @if($openingHours)
                            <ul>
                                @foreach($openingHours as $day)
                                    <li>{{ $day }}</li>
                                @endforeach
                            </ul>
                        @else
                            <p>Keine Öffnungszeiten verfügbar</p>
                        @endif
                        </p>
                    </div>
                </div>
        
                    
                
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
