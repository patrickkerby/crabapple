{{--
  Template Name: Crabapple Pre-order Form
--}}

@extends('layouts.app')

@section('content')
<div class="preorder">
  <div class="intro">
    <p>Pre-order for pickup at <a target="_blank" href="https://www.facebook.com/marketinthevillagestirling">Market in the Village</a> in Stirling, Ontario</p>
  </div>
  @while(have_posts()) @php the_post() @endphp
    @include('partials.content-page')
  @endwhile
</div>
@endsection
