@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif
  <div class="content-shape">
    <div class="forma-gig"></div>
      <div class="date-gig">
        {{ __('12.3.18', 'sage') }}
      </div>
      <div class="place-gig">
        {{ __('Sala Becket', 'sage') }}
      </div>
      <div class="time-and-more-gig">
        {{ __('21h +info', 'sage') }}
      </div>
  </div>
  @while (have_posts()) @php(the_post())
    @include('partials.content-'.get_post_type())
  @endwhile

  {!! get_the_posts_navigation() !!}
@endsection
