{{--
  Template Name: Featured Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp

    @include('partials.content-page-featured')
  @endwhile
@endsection
