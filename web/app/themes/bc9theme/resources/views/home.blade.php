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
        <?= $fecha; ?>
      </div>
      <div class="place-gig">
        <?= $lugar; ?>
      </div>
      <div class="time-and-more-gig">
        <?= $hora; ?>{{'h.'}}
        <a href="<?= $mas_info; ?>">+info</a>
      </div>
  </div>
@endsection
