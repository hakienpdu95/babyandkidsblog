@php 
$query = \App\Queries\MergedPostsQuery::latest(); 
@endphp
<section class="py-[60px] pb-[50px] sm:py-[40px]">
    <div class="wraper">
        <div class="relative">
            <div class="grid grid-cols-12 gap-x-4 sm:gap-x-5">
                @while ($query->have_posts())
                    @php $query->the_post(); @endphp
                    <div class="col-span-6 sm:col-span-6 md:col-span-3">
                        <article class="group story story--secondary h-full">
                            <figure class="story__thumb">
                                {!! sage_post_link_open(get_post(), 'img-fluid', 'link-post-listing-home') !!}
                                    {!! sage_thumbnail('thumb-medium', [
                                        'class' => ''
                                    ], get_post()) !!}
                                {!! sage_post_link_close() !!}
                            </figure>
                            <div class="story__header">
                                <h3 class="story__title">
                                    {!! sage_post_link_open(get_post(), '', 'link-post-listing-home') !!}
                                        {!! get_the_title(get_post()) !!}
                                    {!! sage_post_link_close() !!}
                                </h3>
                            </div>
                        </article>
                    </div>
                @endwhile  
            </div>
        </div>
    </div>
</section>

@php wp_reset_postdata(); @endphp