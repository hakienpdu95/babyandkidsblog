@extends('layouts.app')

@section('content')
    <div class="wraper">
        @include('partials.entry-header')

        @if (has_post_thumbnail())
            <div class="overflow-hidden shadow-xl mb-8">
                {!! get_the_post_thumbnail(null, 'large', ['class' => 'w-full']) !!}
            </div>
        @endif

        @include('partials.content-single')
    </div>
@endsection

@section('sidebar')
    @include('sections.sidebar')
@endsection