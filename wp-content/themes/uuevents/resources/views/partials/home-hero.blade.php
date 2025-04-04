
@php
$MEC = MEC::instance();

$event_settings = get_field('featured_event', 'option');
$event_id = $event_settings['event'];
$single = new \MEC_skin_single();
$main = new \MEC_main();
$info = $single->get_event_mec($event_id)[0];
$event = $info->data;

$featured_image = $event->featured_image['large'];
if (!$featured_image) {
  $featured_image = '/wp-content/uploads/2022/09/unite-us-preview-image.png';
}
$start_day = $main->date_i18n('d', $event->mec->start);
$start_month = $main->date_i18n('F', $event->mec->start);

$time_start = date('g:i a', $event->mec->time_start);

$featured_post = [
  'post_title' => $event->title,
  'excerpt' => get_the_excerpt($event_id),
  'permalink' => '#',
  'dateline' => $start_month . ' ' . $start_day . ' at ' . $time_start,
  'thumbnail_url' => $featured_image,
  'thumbnail_alt' => '',
  ];

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


   if (!$event_id) {
    $featured_image = '/wp-content/uploads/2021/11/Events-page-header-graphic-1.png';
    $more_info_button_text = 'Subscribe';
    $more_info = 'https://uniteus.com/email-list';
    $tarbet = '_blank';
    $target = 'target="' . $target . '"';

    $featured_post = [
      'post_title' => 'Join the List',
      'excerpt' => 'Sign up to be the first to know when we\'re hosting our next big event.',
      'permalink' => '#',
      'dateline' => false,
      'thumbnail_url' => $featured_image,
      'thumbnail_alt' => '',
    ];
   }


   $event_button = '<a class="no-underline mt-6 button button-solid bg-action hover:bg-action-dark items-center gap-4" href="' . $more_info . '"' . $target . '><span class="text-white font-semibold">' . $more_info_button_text . '</span>
            <span><svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M10.6667 1.16675L16.5 7.00008M16.5 7.00008L10.6667 12.8334M16.5 7.00008L1.5 7.00008" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
            </span>
          </a>';

  if (!$more_info) {
    $event_button = '';
  }


$linkable_pill = false;


$tag_name = '';
if ($event->tags) {
  foreach ($event->tags as $tag) {
    $tag_name = $tag['name'];
  }
}
@endphp
<section class="header-hero relative component-section">
  <!-- Overlay -->

  <div class="relative w-full">

    <div class="component-inner-section">
      <div class="flex flex-col items-center gap-10 lg:grid lg:grid-cols-2 lg:gap-28">
        <div class="order-1 lg:order-none">

          @if ($event_id)
          <div class="bg-light leading-normal mb-5 inline-flex items-center gap-4 text-sm rounded-2xl p-1 @if ($tag_name) @else px-3 @endif">
            @if ($linkable_pill)
            <a class="no-underline" href="{{ $more_info }}">
              @endif @if ($tag_name)
              <span style="line-height:19px" class="text-white inline-block uppercase bg-action font-normal text-xs rounded-full px-[15px] py-1 pill-span">
                {{ $tag_name }}
              </span>
              @endif @if ($linkable_pill)
            </a>
            @endif
            <span class="flex flex-row">
              @if ($linkable_pill)
              <a class="inline-flex no-underline" href="{{ $featured_post['permalink'] }}">
                @endif
                <span>Featured Event</span>
                <svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M7.29289 14.7071C6.90237 14.3166 6.90237 13.6834 7.29289 13.2929L10.5858 10L7.29289 6.70711C6.90237 6.31658 6.90237 5.68342 7.29289 5.29289C7.68342 4.90237 8.31658 4.90237 8.70711 5.29289L12.7071 9.29289C13.0976 9.68342 13.0976 10.3166 12.7071 10.7071L8.70711 14.7071C8.31658 15.0976 7.68342 15.0976 7.29289 14.7071Z" fill="#6B7280"/>
                </svg>
                @if ($linkable_pill)
              </a>
              @endif
            </span>
          </div>
          @endif

          <h1 class="text-brand mb-5 text-4xl font-extrabold tracking-tight md:text-5xl">
            {!! $featured_post['post_title'] !!}
          </h1>

          @if ($featured_post['dateline'])
          <div class="text-2xl font-bold text-action my-5">
            {!! $featured_post['dateline'] !!}
          </div>
          @endif @if ($featured_post['post_title'])
          <div class="text-xl">
            {!! $featured_post['excerpt'] !!}
          </div>
          @endif {!! $event_button !!}
        </div>
        <div>
          @if($featured_post['thumbnail_url'])
          <div class="relative h-full w-full podcast-featured-image shadow-lg rounded-xl overflow-hidden">
            <img class="lazy w-full h-72 lg:h-full object-cover" src="{{ $featured_post['thumbnail_url'] }}" alt="{{ $featured_post['thumbnail_alt'] }}">
          </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</section>

<div class="section-divider relative h-5 sm:h-10 md:h-14 xl:h-20 -mb-2 -sm:mb-3 md:-mb-7 xl:-mb-10 text-light-gradient">
  <svg class="w-full h-full" width="1358" height="80" preserveaspectratio="none" viewbox="0 0 1358 80" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 9.85705L56.625 15.7023C113.25 21.5475 226.5 33.238 339.75 27.3928C453 21.5475 566.25 -1.83344 679.5 0.114975C792.75 2.06339 906 29.3412 1019.25 35.1865C1132.5 41.0317 1245.75 25.4444 1302.37 17.6507L1359 9.85705V80H1302.37C1245.75 80 1132.5 80 1019.25 80C906 80 792.75 80 679.5 80C566.25 80 453 80 339.75 80C226.5 80 113.25 80 56.625 80H0V9.85705Z" fill="currentColor"></path>
    <defs>
      <lineargradient x1="679.5" y1="0" x2="679.5" y2="80" gradientunits="userSpaceOnUse">
        <stop stop-color="#EEF5FC"></stop>
        <stop offset="1" stop-color="#EEF5FC"></stop>
      </lineargradient>
    </defs>
  </svg>
</div>
<section class="component-section bg-light-gradient">
  <div class="component-inner-section">
    <h2>Upcoming Events</h2>
    {!! do_shortcode('[MEC id="63"]') !!}
  </div>
</section>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key={{ $googleApiKey }}&libraries=places"></script>
<!--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDEWD8w_E1YlZLNJaVND481xGsLWCTdQZ4&libraries=places"></script> -->
<script>
  jQuery().ready(function ($) {
    // refresh on clear address filter
    $('#mec_sf_address_s_63').on("input", function () {
      var inputValue = $(this).val();
      if (!inputValue) {
        jQuery('#mec_sf_location_63 option')
          .eq(0)
          .prop('selected', true)
          .trigger('change');
      }
    });

    function getLocationCoordinate(address) {

      var position = {};
      var location = {};
      $.ajax({
        url: 'https://maps.googleapis.com/maps/api/geocode/json',
        type: 'GET',
        data: {
          address: address,
          sensor: false,
          key: '{{ $googleApiKey }}'
        },
        async: false,
        success: function (result) {

          try {
            console.log(result.results[0]);
            const obj = result.results[0];
            var map = {
              street_number: ['street_number'],
              street_name: [
                'street_address', 'route'
              ],
              city: [
                'locality', 'postal_town'
              ],
              state: [
                'administrative_area_level_1', 'administrative_area_level_2', 'administrative_area_level_3', 'administrative_area_level_4', 'administrative_area_level_5'
              ],
              county: ['administrative_area_level_2'],
              post_code: ['postal_code'],
              country: ['country']
            }; // Loop over map.

            for (var k in map) {
              var keywords = map[k]; // Loop over address components.

              for (var i = 0; i < obj.address_components.length; i++) {
                var component = obj.address_components[i];
                var component_type = component.types[0]; // Look for matching component type.

                if (keywords.indexOf(component_type) !== -1) {
                  // Append to result.
                  location[k] = component.long_name; // Append short version.

                  if (component.long_name !== component.short_name) {
                    location[k + '_short'] = component.short_name;
                  }
                }
              }
            }

            //position.lat = result.results[0].geometry.location.lat;
            //position.lng = result.results[0].geometry.location.lng;
          } catch (err) {
            position = null;
            location = null;
          }

        }
      });
      return location;
    }
  });
</script>
<script>
  jQuery().ready(function ($) {
    var selectFirstOnEnter = function (input) { // store the original event binding function
      var _addEventListener = (input.addEventListener)
        ? input.addEventListener
        : input.attachEvent;

      function addEventListenerWrapper(type, listener) { // Simulate a 'down arrow' keypress on hitting 'return' when no pac suggestion is selected, and then trigger the original listener.
        if (type == "keydown") {
          var orig_listener = listener;
          listener = function (event) {
            var suggestion_selected = $(".pac-item-selected").length > 0;
            if (event.key === 'Enter' && !suggestion_selected) {
              event.preventDefault();
              var simulated_downarrow = $.Event("keydown", {
                keyCode: 40,
                which: 40
              });
              orig_listener.apply(input, [simulated_downarrow]);
              if (jQuery('.mec-modal-result').length === 0) {
                jQuery('.mec-wrap').append('<div class="mec-modal-result"></div>');
              jQuery('.mec-modal-result').addClass('mec-month-navigator-loading');
              }
            }
            orig_listener.apply(input, [event]);
          };
        }
        _addEventListener.apply(input, [type, listener]); // add the modified listener
      }
      if (input.addEventListener) {
        input.addEventListener = addEventListenerWrapper;
      } else if (input.attachEvent) {
        input.attachEvent = addEventListenerWrapper;
      }
    }

    var searchButton = $('#mec_sf_address_s_63');
    var location = '';
    var state = '';
    var county = '';
    var setKeyDownListener = selectFirstOnEnter(searchButton[0]);

    if (typeof google !== 'undefined')
      var autocomplete = new google
        .maps
        .places
        .Autocomplete(document.getElementById('mec_sf_address_s_63'));
    autocomplete.setFields(['place_id', 'name', 'address_components', 'geometry']);
    autocomplete.addListener('place_changed', function () {
      const place = autocomplete.getPlace();
      const components = place.address_components;
      let county = '';

      if (typeof components !== 'undefined') {
        for (component of components) {

          const type = component.types[0];
          const longName = component.long_name;
          const shortName = component.short_name;

          if (type == 'street_number') {
            //streenumber = longName
          }
          if (type == 'route') {
            //mainAddress = streenumber + " " + shortName;
          }
          if (type == 'sublocality_level_2') {
            // mainAddress = mainAddress + " " + shortName;
          }
          if (type == 'sublocality_level_1') {
            // mainAddress = mainAddress + " " + shortName;
          }
          if (type == 'locality') { // city
            city = shortName;
          }
          if (type == 'postal_code') {
            //setEventAdditionalLocation(shortName);
          }
          if (type == 'administrative_area_level_2') { // county
            county = longName;
            //setEventAdditionalLocation(county);
          }
          if (type == 'administrative_area_level_1') { // state
            state = longName;
            st = shortName;
            //setEventLocation(state);
          }
        }
        console.log(state);

        const stateOptionIndex = findStateOptionIndex(state);
        console.log(`Option containing ${state} found at index: ${stateOptionIndex}`);

        if (stateOptionIndex >= 0) {
          state = state
          .replace(/\s+/g, '-')
          .toLowerCase();

          stateFound(state, stateOptionIndex);
        } else {
          setTimeout(function () {
            jQuery("#mec_skin_events_63").html('No events found!');
          }, 1200);
        }
      }
    });

  });

  function stateFound(state, index) {
    let stateFound = false;

    const nextURL = '/?state=' + state;
    const nextTitle = '';
    const nextState = {
      additionalInformation: 'Updated the URL with JS'
    };
    window
      .history
      .replaceState(nextState, nextTitle, nextURL);

    setTimeout(function () {
      jQuery('#mec_sf_location_63 option')
        .eq(index)
        .prop('selected', true)
        .trigger('change');
    }, 1000);

    if (index < 0) {
    setTimeout(function () {
        jQuery("#mec_skin_events_63").html('No events found!');
      }, 1200);
    }
  }

  const urlString = window.location.href; // Get the full URL
  const url = new URL(urlString);
  const params = new URLSearchParams(url.search);

  // Check if state param exists
  const hasState = params.has('state');

  if (hasState) {
    const stateValue = params.get('state');

    const stateOptionIndex = findStateOptionIndex(stateValue);
    console.log(`Option containing ${stateValue} found at index: ${stateOptionIndex}`);

    if (stateOptionIndex >= 0) {
      setTimeout(function () {
        console.log(`selecting ${stateValue}`);
        stateFound(stateValue, stateOptionIndex);
      }, 1200);
    } else {
      setTimeout(function () {
        jQuery("#mec_skin_events_63").html('No events found!');
      }, 1200);
    }

    // Get the value of the found option
    if (stateOptionIndex !== -1) {
      const selectElement = document.getElementById('mec_sf_location_63');
      console.log(`Value of the state option: ${selectElement.options[stateOptionIndex].value}`);
    }
  }

  // Function to find the option containing a specific state in the select element
  function findStateOptionIndex(state) {
    // Target the specific select element by its ID
    const selectElement = document.getElementById('mec_sf_location_63');

    // Check if the select element exists
    if (!selectElement) {
      console.error("Select element with ID 'mec_sf_location_63' not found");
      return -1;
    }

    // Get all options from the select element
    const options = selectElement.options;

    // Loop through each option
    for (let i = 0; i < options.length; i++) {
      // Convert text to lowercase and check if it contains the state name
      if (options[i].textContent.toLowerCase().includes(state.toLowerCase())) {
        return i; // Return the index if found
      }
    }

    // Return -1 if not found
    return -1;
  }
</script>
