@php

//dump($event);
$MEC = MEC::instance();
$dateTime = new DateTime();
$dateTime->setTimeZone(new DateTimeZone('UTC'));
$single = new \MEC_skin_single();
$main = new \MEC_main();
$skins = new \MEC_skins();
$related = $single->display_related_posts_widget(get_the_ID(), 'thumblist', true);
$date_format = '';
$minify = false;
$allday = false;
$eventID = get_the_ID();
$format = 'M j, Y';
$separator = ' - ';
$start = [
  'date' => $event->mec->start
  ];
  $end = [
  'date' => $event->mec->end
  ];



  //$single->display_register_button_widget($event);
  //echo $single->display_category_widget($event);
  $more_info = isset($event->meta['mec_read_more']) ? $event->meta['mec_read_more'] : '';

if (!$more_info) {
  $more_info = isset($event->meta['mec_more_info']) ? $event->meta['mec_more_info'] : '';

}

   $more_info_button_text = $event->meta['mec_more_info_title'] ? $event->meta['mec_more_info_title'] : 'More Information';


   if ($event->meta['mec_more_info_target']) {
    $target = $event->meta['mec_more_info_target'];
   } else {
    $target = '_self';
   }

   $target = 'target="' . $target . '"';


   $event_button = '<a class="no-underline mt-6 button button-solid bg-action hover:bg-action-dark items-center gap-4" href="' . $more_info . '"' . $target . '><span class="text-white font-semibold">' . $more_info_button_text . '</span>
            <span><svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M10.6667 1.16675L16.5 7.00008M16.5 7.00008L10.6667 12.8334M16.5 7.00008L1.5 7.00008" stroke="#3B8BCA" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
            </span>
          </a>';

  if (!$more_info) {
    $event_button = '';
  }

  $location_thumbnail = '';
  $event_fallback_image = get_field('event_fallback_image', 'option');
  if ($event_fallback_image) {
    $event_fallback_image = $event_fallback_image['sizes']['large'];
  }

  if ($event->locations) {
    foreach ($event->locations as $location) {
      $location_thumbnail = $location['thumbnail'];
    }
  }
@endphp

<section class="component-section">
  <div class="component-inner-section">
    <div class="grid lg:grid-cols-2 gap-6 lg:gap-24">

    <div class="flex flex-col justify-center">
      @if ($event->featured_image['large'])
        <img class="rounded-lg shadow-lg" src="{{ $event->featured_image['large'] }}" />

      @elseif ($location_thumbnail)
        <img class="w-full rounded-lg shadow-lg bg-light" src="{{ $location_thumbnail }}" />
      @elseif ($event_fallback_image)
        <img class="w-full rounded-lg shadow-lg bg-light" src="{{ $event_fallback_image }}" />
      @else
        <div class="aspect-video bg-light rounded-lg shadow-lg w-full"></div>
      @endif
    </div>

  <div class="flex flex-col items-baseline justify-center">
  <h1 class="text-4xl font-extrabold mb-7">{!! $post->post_title !!}</h1>
<div class="flex flex-col xl:flex-row flex-wrap gap-7 my-7">
<span class="flex gap-4 items-center">
<span class="w-6 h-6 flex justify-center items-center">
  <svg class="w-full h-full" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M6.56153 0.5C5.7331 0.5 5.06153 1.17157 5.06153 2V3.5H3.56153C1.90467 3.5 0.561523 4.84315 0.561523 6.50001V21.5C0.561523 23.1569 1.90467 24.5 3.56153 24.5H21.5616C23.2184 24.5 24.5616 23.1569 24.5616 21.5V6.50001C24.5616 4.84315 23.2184 3.5 21.5616 3.5H20.0616V2C20.0616 1.17157 19.39 0.5 18.5616 0.5C17.7331 0.5 17.0616 1.17157 17.0616 2V3.5H8.06154V2C8.06154 1.17157 7.38996 0.5 6.56153 0.5ZM6.56153 8.00001C5.7331 8.00001 5.06153 8.67159 5.06153 9.50001C5.06153 10.3284 5.7331 11 6.56153 11H18.5616C19.39 11 20.0616 10.3284 20.0616 9.50001C20.0616 8.67159 19.39 8.00001 18.5616 8.00001H6.56153Z" fill="#2874AF"/>
</svg>
</span>
<span>
 {!! $main->date_label($start, $end, $format, $separator, $minify, $allday, $eventID) !!}</span></span>
 <span class="flex gap-4 items-center">
 <span class="w-7 h-7 flex justify-center items-center">
  <svg class="w-6 h-6" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12.5615 24.5C19.1889 24.5 24.5615 19.1274 24.5615 12.5C24.5615 5.87259 19.1889 0.5 12.5615 0.5C5.9341 0.5 0.561523 5.87259 0.561523 12.5C0.561523 19.1274 5.9341 24.5 12.5615 24.5ZM14.0615 6.50001C14.0615 5.67158 13.3899 5.00001 12.5615 5.00001C11.7331 5.00001 11.0615 5.67158 11.0615 6.50001V12.5C11.0615 12.8978 11.2196 13.2794 11.5009 13.5607L15.7435 17.8033C16.3293 18.3891 17.279 18.3891 17.8648 17.8033C18.4506 17.2175 18.4506 16.2678 17.8648 15.682L14.0615 11.8787V6.50001Z" fill="#2874AF"/>
</svg>
</span>
 {{ $event->time['start_raw'] }}</span>

@if ($event->locations)
  @foreach ($event->locations as $location)
    <span class="flex gap-4 items-center">
      <span class="w-7 h-7 flex items-center">
    <svg class="w-full h-full" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M22.9861 6.57538C27.0866 10.6759 27.0866 17.3241 22.9861 21.4246L15.5615 28.8493L8.1369 21.4246C4.0364 17.3241 4.0364 10.6759 8.1369 6.57538C12.2374 2.47487 18.8856 2.47487 22.9861 6.57538ZM15.5615 17C17.2184 17 18.5615 15.6569 18.5615 14C18.5615 12.3432 17.2184 11 15.5615 11C13.9047 11 12.5615 12.3432 12.5615 14C12.5615 15.6569 13.9047 17 15.5615 17Z" fill="#2874AF"/>
</svg>
</span>
 {{ $location['name'] }}</span>
  @endforeach
@endif
</div>

<div class="text-lg">{!! get_the_excerpt($post) !!}</div>
  {!! $event_button !!}
</div>
  </div>
</section>

@if ($event->post->post_content)
<div class="section-divider relative h-5 sm:h-10 md:h-14 xl:h-20 -mb-2 -sm:mb-3 md:-mb-7 xl:-mb-10 text-light-gradient">
<svg class="w-full h-full" width="1358" height="80" preserveAspectRatio="none" viewBox="0 0 1358 80" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M0 9.85705L56.625 15.7023C113.25 21.5475 226.5 33.238 339.75 27.3928C453 21.5475 566.25 -1.83344 679.5 0.114975C792.75 2.06339 906 29.3412 1019.25 35.1865C1132.5 41.0317 1245.75 25.4444 1302.37 17.6507L1359 9.85705V80H1302.37C1245.75 80 1132.5 80 1019.25 80C906 80 792.75 80 679.5 80C566.25 80 453 80 339.75 80C226.5 80 113.25 80 56.625 80H0V9.85705Z" fill="currentColor"></path>
  <defs>
  <linearGradient x1="679.5" y1="0" x2="679.5" y2="80" gradientUnits="userSpaceOnUse">
  <stop stop-color="#EEF5FC"></stop>
  <stop offset="1" stop-color="#EEF5FC"></stop>
  </linearGradient>
  </defs>
  </svg>
</div>
<section class="component-section bg-light-gradient">
  <div class="component-inner-section text-lg">
    <h2>About the Event</h2>
    {!! wpautop($event->post->post_content) !!}

    {!! $event_button !!}

  </div>
</section>
@endif

@isset ($related->posts)

<section class="component-section">
  <div class="component-inner-section">
    <div class="flex flex-wrap justify-between items-center gap-2 mb-6 md:mb-10">
      <h2 class="mb-0">Recommended Events</h2>
      <a href="/" class="text-action no-underline font-semibold flex gap-2 items-center justify-evenly">
      View All Events
      <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M8.43652 1.875L12.5615 6M12.5615 6L8.43652 10.125M12.5615 6L1.56152 6" stroke="#2874AF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

  </a>
    </div>
<div class="mec-skin-grid-events-container">
@foreach ($related->posts as $event)
  @php
    $info = $single->get_event_mec($event->ID)[0];
    $data = $info->data;

    $featured_image = $data->featured_image['large'];
    if (!$featured_image) {
      $featured_image = '/wp-content/uploads/2022/09/unite-us-preview-image.png';
    }
    $start_day = $main->date_i18n('d', $data->mec->start);
    $start_month = $main->date_i18n('M', $data->mec->start);
  @endphp
<div class="relative group bg-white border border-light shadoew-lg rounded-lg overflow-hidden">

<article class=" mec-event-article mec-clear  " itemscope="">                                   <div class="p-2"></div>
            <div class="absolute w-full top-0 p-2 bg-action rounded-t-lg z-20"></div>
                        <a class="no-underline relative z-20" data-event-id="{{ $event->ID }}" href="{{ $data->permalink }}" target="_self" rel="noopener">
                          <img width="300" height="200" src="{{ $featured_image }}" class="related-gradient attachment-medium size-medium aspect-video h-full w-full object-cover" alt="" data-mec-postid="{{ $event->ID }}"></a>
                          <div class="relative z-20 ml-8 -mt-8 w-16 h-16 mb-9 bg-white border border-pale-blue-light shadow-md rounded-md flex flex-col justify-center items-center">
<span class="text-action font-bold text-3xl">{{ $start_day }}</span>
<span class="text-brand uppercase">{{ $start_month }}</span></div>
            <div class="px-7 pb-10">
                <h3 class="mb-4 text-[28px] flex flex-wrap gap-2">
                  <a class="no-underline text-brand group-hover:text-action" data-event-id="{{ $event->ID }}" href="{{ $data->permalink }}" target="_self" rel="noopener">
                  {!! $event->post_title !!}
                </a>

                                </h3>

                   <div class="flex flex-wrap gap-2 relative z-20">
                <div class="inline-flex mt-4 gap-2 px-2 py-1 justify-center items-start no-underline text-brand hover:shadow-inner border-2 border-pale-blue-dark rounded-[16px]">
                    <span>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M10.0014 18C14.1987 18 17.6014 14.4183 17.6014 10C17.6014 5.58172 14.1987 2 10.0014 2C5.804 2 2.40137 5.58172 2.40137 10C2.40137 14.4183 5.804 18 10.0014 18ZM10.9514 6C10.9514 5.44772 10.526 5 10.0014 5C9.47669 5 9.05136 5.44772 9.05136 6V10C9.05136 10.2652 9.15145 10.5196 9.32961 10.7071L12.0166 13.5355C12.3876 13.9261 12.9891 13.9261 13.3601 13.5355C13.7311 13.145 13.7311 12.5118 13.3601 12.1213L10.9514 9.58579V6Z" fill="#2874AF"></path>
</svg>

        </span>
        <span class="text-brand text-sm">
        {!! str_replace('mec-time-details', '', MEC_kses::element($main->display_time($data->time['start'], $data->time['end']))) !!}

                      </span>
            </div>
            @isset ($data->labels)
            @foreach ($data->labels as $label)
<span class="mec-labels-normal relative z-20">
  <span data-style="Normal" class="tw-mec-label-normal" style="background-color:">
    <svg width="14" height="17" viewBox="0 0 14 17" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M11.7634 2.05025C14.3604 4.78392 14.3604 9.21608 11.7634 11.9497L7.06113 16.8995L2.35887 11.9497C-0.238114 9.21608 -0.238114 4.78392 2.35887 2.05025C4.95586 -0.683417 9.16641 -0.683418 11.7634 2.05025ZM7.06148 8.99996C8.11082 8.99996 8.96148 8.10453 8.96148 6.99996C8.96148 5.89539 8.11082 4.99996 7.06148 4.99996C6.01214 4.99996 5.16148 5.89539 5.16148 6.99996C5.16148 8.10453 6.01214 8.99996 7.06148 8.99996Z" fill="#2874AF"></path>
    </svg>
    {{ $label['name'] }}
  </span>
</span>
@endforeach
@endisset
</div>

            </div>

 </article>
 <a class="no-underline mec-color-hover absolute inset-0 z-40" data-event-id="{{ $event->ID }}" href="{{ $data->permalink }}" target="_self" rel="noopener">
                                              <span class="sr-only">{{ $event->post_title }}</span>
                                            </a>
 <div class="absolute inset-0 related-gradient opacity-0 group-hover:opacity-100"></div>

 </div>
  @endforeach
  </div>
  </div>
  </section>
  @endisset

