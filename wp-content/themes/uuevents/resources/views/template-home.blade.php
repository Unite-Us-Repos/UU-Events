{{--
  Template Name: Home
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.home-hero')
    @include('partials.content-page')
    <!--@include('partials.event-search')-->
  @endwhile
@endsection

<!--
<script type="text/javascript">
    jQuery().ready(function($) {
    $('.selectit input').on('change', function() {
        $('.selectit input').not(this).prop('checked', false);
    });
  });
</script>
-->
