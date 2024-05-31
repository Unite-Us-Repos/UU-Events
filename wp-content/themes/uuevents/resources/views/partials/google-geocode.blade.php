<script>
jQuery().ready(function($) {
    $(".toggle-filter").on('click', function() {
        var filter = $(this).data('filterby');
        $(".mec-skin-masonry-container").data("filterby", filter);
    });

    function getLocationCoordinate(address) {

        var position = {};
        var location = {};
        $.ajax({
            url : 'https://maps.googleapis.com/maps/api/geocode/json',
            type : 'POST',
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

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key={{ $googleApiKey }}&libraries=places"></script>

<script>
jQuery().ready(function($) {
    if(typeof google !== 'undefined')
        var autocomplete = new google.maps.places.Autocomplete(document.getElementById('mec_event_fields_1'));
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
                        streenumber = longName
                    }
                    if (type == 'route') {
                        mainAddress = streenumber + " " + shortName;
                    }
                    if (type == 'sublocality_level_2') {
                        mainAddress = mainAddress + " " + shortName;
                    }
                    if (type == 'sublocality_level_1') {
                        mainAddress = mainAddress + " " + shortName;
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
                        setEventLocation(state);
                    }
                }
                setEventAdditionalLocation(county, state);
            }
        });

        function setEventLocation(state)
        {
            const stateStr = 'Unite ' + state;
            // Set the value, creating a new option if necessary
                //$('[name="mec[additional_location_ids][]"]').val(data.id).trigger('change');
            $('#mec_location_id option:contains(' + stateStr + ')').attr("selected", true).trigger('change'); // Works

        }

        function setEventAdditionalLocation(location, parent) {
            //nonce = jQuery(this).attr("data-nonce");
            jQuery.ajax({
                type : "post",
                dataType : "json",
                url : mecdata.ajax_url,
                data : {
                    action: "add_additional_location",
                    //primary_location_id : primary_location_id,
                    location : location,
                    parent : parent
                    //nonce: nonce
                },
                success: function(response) {
                    console.log(response);
                    if(response.type == "success") {
                        var location_id = response.location_id;
                        var location = response.location;
                        const data = {
                            "id": location_id,
                            "text": location
                        };
                        // Set the value, creating a new option if necessary
                        if ($('[name="mec[additional_location_ids][]"]').find("option[value='" + data.id + "']").length) {
                            $('[name="mec[additional_location_ids][]"]').val(data.id).trigger('change');
                        } else {
                            // Create a DOM Option and pre-select by default
                            var newOption = new Option(data.text, data.id, true, true);
                            // Append it to the select
                            $('[name="mec[additional_location_ids][]"]').append(newOption).trigger('change');
                        }
                    }
                    else {
                        alert("an error occurred");
                    }
                }
            });
        }
});
</script>
