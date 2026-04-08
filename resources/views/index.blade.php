@extends('layouts.app')

@section('content')
@include('partials.blocks.block-post-listing')

<section class="py-[60px] pb-[50px] sm:py-[40px] hidden">
    <div class="wraper">
        <div class="mb-8 col:mb-6">
            <h2 class="text-3xl font-bold text-[#444444] relative capitalize pb-5 col:text-2xl
                             before:absolute before:left-0 before:bottom-0 before:w-[100px] before:h-[5px] before:rounded-[6px]
                             before:bg-[#3756f7]
                              after:absolute after:left-[110px] after:bottom-0 after:w-7 after:h-[5px] after:rounded-[6px]
                              after:bg-[#3756f7] ">explore by popular categories</h2>
        </div>

        <div class="relative">
            <div class="bkb-breacking-wrap">
                @include('partials.blocks.category-play')
            </div>
        </div>
    </div>
</section>
@endsection