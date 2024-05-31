<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key={{ $googleApiKey }}&libraries=places"></script>

<script>
jQuery().ready(function($) {
    /*
    var searchButton = $('#mec_sf_address_s_63s');
    var location = '';
    var state = '';
    var county = '';

    // detect enter key
    $(searchButton).keypress(function (e) {

        if (e.which == 13) {

            var inputValue = $(this).val();

            location = getLocationCoordinate(inputValue);

            state = location.state.replace(/\s+/g, '-').toLowerCase();
            county = location.county.replace(/\s+/g, '-').toLowerCase();
            redirectStatePage(state, county);

        }
    });
    */

    function getLocationCoordinate(address) {

        var position = {};
        var location = {};
        $.ajax({
            url : 'https://maps.googleapis.com/maps/api/geocode/json',
            type : 'GET',
            data : {
                address : address,
                sensor : false,
                key : {{ $googleApiKey }}
            },
            async : false,
            success : function(result) {

                try {
                    console.log(result.results[0]);
                    const obj = result.results[0];
                    var map = {
                        street_number: ['street_number'],
                        street_name: ['street_address', 'route'],
                        city: ['locality', 'postal_town'],
                        state: ['administrative_area_level_1', 'administrative_area_level_2', 'administrative_area_level_3', 'administrative_area_level_4', 'administrative_area_level_5'],
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
                } catch(err) {
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

jQuery().ready(function($) {
    var selectFirstOnEnter = function(input) {  // store the original event binding function
        var _addEventListener = (input.addEventListener) ? input.addEventListener : input.attachEvent;
        function addEventListenerWrapper(type, listener) {  // Simulate a 'down arrow' keypress on hitting 'return' when no pac suggestion is selected, and then trigger the original listener.
            if (type == "keydown") {
                var orig_listener = listener;
                listener = function(event) {
                    var suggestion_selected = $(".pac-item-selected").length > 0;
                    if (event.which == 13 && !suggestion_selected) {
                        var simulated_downarrow = $.Event("keydown", {keyCode: 40, which: 40});
                        orig_listener.apply(input, [simulated_downarrow]);
                        if (jQuery('.mec-modal-result').length === 0) jQuery('.mec-wrap').append('<div class="mec-modal-result"></div>');
                        jQuery('.mec-modal-result').addClass('mec-month-navigator-loading');
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

    // detect enter key
    $(searchButton).keypress(function (e) {

        if (e.which == 13) {
            var inputValue = $(this).val();
            //selectFirstOnEnter(inputValue);
            /*
            var inputValue = $(this).val();

            location = getLocationCoordinate(inputValue);

            state = location.state.replace(/\s+/g, '-').toLowerCase();
            county = location.county.replace(/\s+/g, '-').toLowerCase();
            redirectStatePage(state, county);
            */
        }
    });


    if(typeof google !== 'undefined')
        var autocomplete = new google.maps.places.Autocomplete(document.getElementById('mec_sf_address_s_63'));
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
                //console.log(city+state+st+county);
                state = state.replace(/\s+/g, '-').toLowerCase();
                county = county.replace(/\s+/g, '-').toLowerCase();
                redirectStatePage(state, county);
            }
        });


});

function redirectStatePage(state, county) {
    if (jQuery('.mec-modal-result').length === 0) jQuery('.mec-wrap').append('<div class="mec-modal-result"></div>');
    jQuery('.mec-modal-result').addClass('mec-month-navigator-loading');
    console.log('redirecting...');
    window.location='/'+state+'-events?county='+county;
}
</script>
