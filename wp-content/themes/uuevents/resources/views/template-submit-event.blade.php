{{--
  Template Name: Submit Event
--}}

@extends('layouts.app')

@section('content')
<section class="component-section">
  <div class="component-inner-section">
    @while(have_posts()) @php(the_post())
      @include('partials.content-page')
      <!--@include('partials.event-search')-->
    @endwhile
  </div>
</section>
@endsection

@include('partials.google-geocode')
@include('partials.google-address-search')
<script type="text/javascript">
  jQuery(document).ready(function($){

    $('#mec-categories input').click(function() {
        $('#mec-categories input').not(this).prop('checked', false);
    });

    $('#mec-labels input').click(function() {
        $('#mec-labels input').not(this).prop('checked', false);
    });

  });
</script>
