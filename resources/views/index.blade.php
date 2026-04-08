@extends('layouts.app')

@section('content')
<section class="py-[60px] pb-[50px] sm:py-[40px]">
    <div class="wraper">
        <div class="relative">
            <div class="grid grid-cols-12 gap-x-4">
                <div class="col-span-3 xl:col-span-3 lg:col-span-6 md:col-span-6 col:col-span-12">
                    <article class="group story story--secondary ">
                        <figure class="story__thumb">
                            <a href="https://treemvietnam.net.vn/nu-cong-nhan-moi-truong-quen-minh-cuu-hai-hoc-sinh-giua-con-loc-du-d8171.html" class="img-fluid" title="Nữ công nhân môi trường quên mình cứu hai học sinh giữa cơn lốc dữ">
                                <img class="" src="https://t.cmx-cdn.com/treemvietnam.net.vn/files/kimlinh/2026/04/05/cuu-nguoi-2-162335.webp" width="300" height="169" alt="Nữ công nhân môi trường quên mình cứu hai học sinh giữa cơn lốc dữ">
                            </a>
                        </figure>
                        <div class="story__header">
                            <h3 class="story__title">
                                <a href="https://treemvietnam.net.vn/nu-cong-nhan-moi-truong-quen-minh-cuu-hai-hoc-sinh-giua-con-loc-du-d8171.html" class="" title="">Watercolor Tulips Flower Craft for Kids</a>
                            </h3>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>

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