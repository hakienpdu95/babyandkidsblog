@props([
    'posts'     => [],
    'perPage'   => 6,
    'autoplay'  => false,
    'interval'  => 4000,
])


<div class="splide article-content mb-6" data-splide-config='{ "type": "loop", "perPage": {{ $perPage }}, "autoplay": {{ $autoplay ? 'true' : 'false' }}, "interval": {{ $interval }}, "arrows": true, "pagination": true, "gap": "1.5rem", "lazyLoad": "nearby" }'>
    <div class="splide__track">
        <ul class="splide__list">
            <li class="splide__slide">
                <div class="flex flex-col items-center text-center p-2 border-x-[#e9edff] m-[-1px]">
                    <div class="">
                        <img src="{{ Vite::asset('resources/images/art-class-activities.png') }}" alt="" class="w-[140px]">
                    </div>
                    <div class="">
                        <h3 class="text-[18px] font-semibold mt-[5px] ">
                            <a href="blog-single.html" class="text-[#444444] transition-all hover:text-[#3756f7]">Healthy rutine for your healthy lifestyle.</a>
                        </h3>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>

@php wp_reset_postdata(); @endphp