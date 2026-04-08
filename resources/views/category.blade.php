@extends('layouts.app')

@section('content')
    <div class="wraper mt-5">
        {{ sage_prefetch_link_posts($wp_query->posts ?? []) }}

        @php
            global $wp_query;
            $query = $wp_query;
            \App\Database\CustomTableManager::preloadThePostsMeta($query->posts, $query);
        @endphp

        @include('partials.content-listing', ['query' => $query])
        {!! \App\Helpers\PaginationHelper::numberPagination($query) !!}
    </div>
@endsection

@section('sidebar')
    @include('sections.sidebar')
@endsection