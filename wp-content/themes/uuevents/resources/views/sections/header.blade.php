<div class="relative shadow-sm top-nav bg-white z-40" x-data="Components.popover({ open: false, focus: true })" x-init="init()"
    @keydown.escape="onEscape" @close-popover-group.window="onClosePopoverGroup">
    <div class="mx-autao">
        <div class="flex justify-between items-center max-w-7xl mx-auto px-8 lg:justify-start md:space-x-10">
            <div class="flex justify-start py-4 lg:w-0 lg:flex-1">
                <a href="/">
                    <span class="sr-only">Main menu</span>
                    <img src="https://uniteus.com/wp-content/themes/uniteus-sage/public/images/unite-us-logo.svg"
                        alt="Unite Us">
                </a>
            </div>
            <div class="-mr-2 -my-2 flex items-center gap-3 lg:hidden">
                <div x-data="{ 'showSearchModal': false }" @keydown.escape="showSearchModal = false">
                    <!-- Trigger for Modal -->
                    <button type="button" @click="showSearchModal = true"
                        class="rounded-lg flex items-center justify-center">
                        <span class="sr-only">Search site</span>
                        <svg aria-hidden="true" viewBox="0 0 20 20" fill="none" class="w-5 h-5 text-gray-900">
                            <circle cx="8.5" cy="8.5" r="5.75" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round"></circle>
                            <path d="M17.25 17.25L13 13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </svg>
                    </button>

                    <!-- Modal -->
                    <div class="fixed inset-0 z-30 hidden items-center justify-center overflow-auto bg-brand bg-opacity-80"
                        :class="{ 'hidden': !showSearchModal, 'flex': showSearchModal }" x-show="showSearchModal"
                        style="display: none;">
                        <!-- Modal inner -->
                        <div class="w-full max-w-4xl sm:p-10 mx-auto" @click.away="showSearchModal = false"
                            x-transition:enter="motion-safe:ease-out duration-300"
                            x-transition:enter-start="opacity-0 scale-90"
                            x-transition:enter-end="opacity-100 scale-100">
                            <!-- Title / Close-->
                            <div class="flex items-center justify-end mb-10">
                                <button type="button"
                                    class="z-10 rounded-full text-white p-1 border border-white cursor-pointer"
                                    @click="showSearchModal = false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </div>

                            <!-- content -->
                            <div id="ajax-filters" class="search-filters relative z-20 mb-10">
                                <form data-sf-form-id="2207" data-is-rtl="0" data-maintain-state=""
                                    data-results-url="https://uniteus.com/search-results/"
                                    data-ajax-url="https://uniteus.com/?sfid=2207&amp;sf_action=get_data&amp;sf_data=results"
                                    data-ajax-form-url="https://uniteus.com/?sfid=2207&amp;sf_action=get_data&amp;sf_data=form"
                                    data-display-result-method="shortcode" data-use-history-api="1"
                                    data-template-loaded="0" data-lang-code="en" data-ajax="1"
                                    data-ajax-data-type="json" data-ajax-links-selector=".pagination a"
                                    data-ajax-target="#search-filter-results-2207" data-ajax-pagination-type="normal"
                                    data-update-ajax-url="0" data-only-results-ajax="1" data-scroll-to-pos="window"
                                    data-scroll-on-action="pagination" data-init-paged="1" data-auto-update=""
                                    action="https://uniteus.com/search-results/" method="post" class="searchandfilter"
                                    id="search-filter-form-2207" autocomplete="off" data-instance-count="1">
                                    <ul>
                                        <li class="sf-field-post_type" data-sf-field-name="_sf_post_type"
                                            data-sf-field-type="post_type" data-sf-field-input-type="radio">
                                            <div class="relative w-full" x-data="Components.popover({ open: false, focus: false })" x-init="init()"
                                                @keydown.escape="onEscape"
                                                @close-popover-group.window="onClosePopoverGroup"><button type="button"
                                                    x-state:on="Item active" x-state:off="Item inactive"
                                                    class="group w-full top-10 justify-between inline-flex items-center rounded-md bg-white text-base font-medium focus:outline-none focus:ring-2 focus:ring-action focus:ring-offset-2 text-sm text-brand"
                                                    :class="{ 'text-brand': open, 'text-brand': !(open) }"
                                                    @click="toggle" @mousedown="if (open) $event.preventDefault()"
                                                    aria-expanded="false" :aria-expanded="open.toString()">
                                                    <span>Search criteria</span>
                                                    <svg width="9" height="14" viewBox="0 0 9 14"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M4.58496 0C4.85018 5.96046e-08 5.10453 0.105357 5.29207 0.292893L8.29207 3.29289C8.68259 3.68342 8.68259 4.31658 8.29207 4.70711C7.90154 5.09763 7.26838 5.09763 6.87785 4.70711L4.58496 2.41421L2.29207 4.70711C1.90154 5.09763 1.26838 5.09763 0.877854 4.70711C0.48733 4.31658 0.48733 3.68342 0.877854 3.29289L3.87785 0.292893C4.06539 0.105357 4.31975 0 4.58496 0ZM0.877854 9.29289C1.26838 8.90237 1.90154 8.90237 2.29207 9.29289L4.58496 11.5858L6.87785 9.29289C7.26838 8.90237 7.90154 8.90237 8.29207 9.29289C8.68259 9.68342 8.68259 10.3166 8.29207 10.7071L5.29207 13.7071C4.90154 14.0976 4.26838 14.0976 3.87785 13.7071L0.877854 10.7071C0.48733 10.3166 0.48733 9.68342 0.877854 9.29289Z"
                                                            fill="#216CFF"></path>
                                                    </svg>

                                                </button>
                                                <div x-show="open"
                                                    x-transition:enter="transition ease-out duration-200"
                                                    x-transition:enter-start="opacity-0 -translate-y-1"
                                                    x-transition:enter-end="opacity-100 translate-y-0"
                                                    x-transition:leave="transition ease-in duration-150"
                                                    x-transition:leave-start="opacity-100 translate-y-0"
                                                    x-transition:leave-end="opacity-0 -translate-y-1"
                                                    x-description="Flyout menu, show/hide based on flyout menu state."
                                                    class="absolute filter-drop-menu inset-x-0 z-10 transform bg-white ring-1 ring-black ring-opacity-5 shadow-lg rounded"
                                                    x-ref="panel" @click.away="open = false" style="display: none;">

                                                    <ul class="">
                                                        <li class="sf-level-0 sf-item-0 sf-option-active"
                                                            data-sf-depth="0"><input class="sf-input-radio"
                                                                type="radio" value="" name="_sf_post_type[]"
                                                                checked="checked"
                                                                id="sf-input-d8495250594012b8adfef135ef0da4c3"><label
                                                                class="sf-label-radio"
                                                                for="sf-input-d8495250594012b8adfef135ef0da4c3">Search
                                                                Entire Site</label></li>
                                                        <li class="sf-level-0 " data-sf-depth="0"><input
                                                                class="sf-input-radio" type="radio" value="post"
                                                                name="_sf_post_type[]"
                                                                id="sf-input-d4551dd3bdbe98b6cb649dbbe49d9e99"><label
                                                                class="sf-label-radio"
                                                                for="sf-input-d4551dd3bdbe98b6cb649dbbe49d9e99">Posts</label>
                                                        </li>
                                                        <li class="sf-level-0 " data-sf-depth="0"><input
                                                                class="sf-input-radio" type="radio" value="page"
                                                                name="_sf_post_type[]"
                                                                id="sf-input-ec42afd8536f2f8f5158d05f38ecb572"><label
                                                                class="sf-label-radio"
                                                                for="sf-input-ec42afd8536f2f8f5158d05f38ecb572">Pages</label>
                                                        </li>
                                                        <li class="sf-level-0 " data-sf-depth="0"><input
                                                                class="sf-input-radio" type="radio" value="team"
                                                                name="_sf_post_type[]"
                                                                id="sf-input-13a52a3c4283a3e7d22cbc4b72b1e4ac"><label
                                                                class="sf-label-radio"
                                                                for="sf-input-13a52a3c4283a3e7d22cbc4b72b1e4ac">Team</label>
                                                        </li>
                                                        <li class="sf-level-0 " data-sf-depth="0"><input
                                                                class="sf-input-radio" type="radio" value="press"
                                                                name="_sf_post_type[]"
                                                                id="sf-input-f8f92d25c89bdc3c62e61c32346f6afe"><label
                                                                class="sf-label-radio"
                                                                for="sf-input-f8f92d25c89bdc3c62e61c32346f6afe">Press</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="sf-field-search" data-sf-field-name="search"
                                            data-sf-field-type="search" data-sf-field-input-type=""> <label>
                                                <input placeholder="Search" name="_sf_search[]" class="sf-input-text"
                                                    type="text" value="" title=""></label> </li>
                                        <li class="sf-field-submit" data-sf-field-name="submit"
                                            data-sf-field-type="submit" data-sf-field-input-type=""><input
                                                type="submit" name="_sf_submit" value="Submit"></li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                    #ajax-filters.search-filters input[type="submit"] {
                        background: #216CFF;
                        color: white;
                        padding: 22px 48px;
                    }

                    @media only screen and (min-width: 940px) {
                        #ajax-filters.search-filters {
                            background: transparent;
                        }

                        #ajax-filters.search-filters .sf-field-post_type {
                            border-top-left-radius: 8px;
                            border-bottom-left-radius: 8px;
                        }

                        #ajax-filters.search-filters input[type="submit"] {
                            border-top-right-radius: 8px;
                            border-bottom-right-radius: 8px;
                            line-height: 1;
                        }

                        #ajax-filters.search-filters {
                            padding: 0;
                        }

                        #ajax-filters.search-filters .sf-field-search {
                            border: none;
                        }

                        #ajax-filters.search-filters ul li {
                            padding: 0px 1rem;
                            margin: 0;
                            display: flex;
                            flex-grow: 1;
                            align-items: center;
                            background: #fff;
                        }

                        #ajax-filters.search-filters ul li.sf-field-submit {
                            padding: 0;
                            flex-grow: 0;
                            background: transparent;
                        }

                        #ajax-filters.search-filters ul {
                            display: flex;
                            justify-content: center;
                            align-items: normal;
                        }
                    }
                </style>
                <button type="button"
                    class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-action"
                    @click="toggle" @mousedown="if (open) $event.preventDefault()" aria-expanded="false"
                    :aria-expanded="open.toString()">
                    <span class="sr-only">Open menu</span>
                    <svg class="h-6 w-6" x-description="Heroicon name: outline/menu"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
            <nav class="hidden lg:flex space-x-10">
                <div class="relative group">
                    <a href="https://uniteus.com/solutions/"
                        class="group bg-white rounded-md inline-flex items-center text-base font-medium py-4 hover:text-brand focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-action text-brand">
                        <span>Solutions</span>
                        <svg class="ml-2 h-5 w-5 group-hover:text-gray-500 text-gray-400"
                            x-description="Heroicon name: solid/chevron-down" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>


                    <div class="absolute hidden group-focus:block group-hover:block z-20 left-1/2 transform -translate-x-1/2 mt-0 px-2 w-screen max-w-xs sm:px-0"
                        x-ref="panel">
                        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                            <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">

                                <a href="https://uniteus.com/solutions/"
                                    class="-m-3 p-3 flex items-start rounded-lg hover:bg-light">
                                    <div>
                                        <p class="text-base font-medium text-brand">Overview</p>

                                    </div>
                                </a>
                                <a href="https://uniteus.com/solutions/government/"
                                    class="-m-3 p-3 flex items-start rounded-lg hover:bg-light">
                                    <div>
                                        <p class="text-base font-medium text-brand">For Government</p>

                                    </div>
                                </a>
                                <a href="https://uniteus.com/solutions/providers/"
                                    class="-m-3 p-3 flex items-start rounded-lg hover:bg-light">
                                    <div>
                                        <p class="text-base font-medium text-brand">For Providers</p>

                                    </div>
                                </a>
                                <a href="https://uniteus.com/solutions/health-plans/"
                                    class="-m-3 p-3 flex items-start rounded-lg hover:bg-light">
                                    <div>
                                        <p class="text-base font-medium text-brand">For Health Plans</p>

                                    </div>
                                </a>

                                <a href="https://uniteus.com/solutions/nonprofits/"
                                    class="-m-3 p-3 flex items-start rounded-lg hover:bg-light">
                                    <div>
                                        <p class="text-base font-medium text-brand">For Nonprofits</p>

                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="relative group">
                    <a href="https://uniteus.com/products/"
                        class="group bg-white rounded-md inline-flex items-center text-base font-medium py-4 hover:text-brand focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-action text-brand">
                        <span>Products</span>
                        <svg class="ml-2 h-5 w-5 group-hover:text-gray-500 text-gray-400"
                            x-description="Heroicon name: solid/chevron-down" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>


                    <div class="absolute hidden group-focus:block group-hover:block z-20 left-1/2 transform -translate-x-1/2 mt-0 px-2 w-screen max-w-xs sm:px-0"
                        x-ref="panel">
                        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                            <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                              <a href="https://uniteus.com/products/"
                              class="-m-3 p-3 flex items-start rounded-lg hover:bg-light">
                                  <div>
                                      <p class="text-base font-medium text-brand">Overview</p>

                                  </div>
                              </a>
                                <a href="https://uniteus.com/products/platform/"
                                    class="-m-3 p-3 flex items-start rounded-lg hover:bg-light">
                                    <div>
                                        <p class="text-base font-medium text-brand">Platform</p>

                                    </div>
                                </a>
                                <a href="https://uniteus.com/products/insights/"
                                    class="-m-3 p-3 flex items-start rounded-lg hover:bg-light">
                                    <div>
                                        <p class="text-base font-medium text-brand">Insights</p>

                                    </div>
                                </a>
                                <a href="https://uniteus.com/products/payments/"
                                    class="-m-3 p-3 flex items-start rounded-lg hover:bg-light">
                                    <div>
                                        <p class="text-base font-medium text-brand">Payments</p>

                                    </div>
                                </a>
                                <a href="https://uniteus.com/professional-services/"
                                    class="-m-3 p-3 flex items-start rounded-lg hover:bg-light">
                                    <div>
                                        <p class="text-base font-medium text-brand">Professional Services</p>

                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="relative group">
                    <a href="https://uniteus.com/networks/"
                        class="group bg-white rounded-md inline-flex items-center text-base font-medium py-4 hover:text-brand focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-action text-brand">
                        <span>Networks</span>
                        <svg class="ml-2 h-5 w-5 group-hover:text-gray-500 text-gray-400"
                            x-description="Heroicon name: solid/chevron-down" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>


                    <div class="absolute hidden group-focus:block group-hover:block z-20 left-1/2 transform -translate-x-1/2 mt-0 px-2 w-screen max-w-xs sm:px-0"
                        x-ref="panel">
                        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                            <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                              
                              <a href="https://uniteus.com/networks/"
                              class="-m-3 p-3 flex items-start rounded-lg hover:bg-light">
                                  <div>
                                      <p class="text-base font-medium text-brand">Overview</p>

                                  </div>
                              </a>
                                <a href="https://uniteus.com/how-it-works/"
                                    class="-m-3 p-3 flex items-start rounded-lg hover:bg-light">
                                    <div>
                                        <p class="text-base font-medium text-brand">How It Works</p>

                                    </div>
                                </a>
                                
                                <a href="https://uniteus.com/user-resources/"
                                    class="-m-3 p-3 flex items-start rounded-lg hover:bg-light">
                                    <div>
                                        <p class="text-base font-medium text-brand">User Resources</p>

                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative group">
                    <a href="#"
                        class="group bg-white rounded-md inline-flex items-center text-base font-medium py-4 hover:text-brand focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-action text-brand">
                        <span>Impact</span>
                        <svg class="ml-2 h-5 w-5 group-hover:text-gray-500 text-gray-400"
                            x-description="Heroicon name: solid/chevron-down" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>


                    <div class="absolute hidden group-focus:block group-hover:block z-20 left-1/2 transform -translate-x-1/2 mt-0 px-2 w-screen max-w-xs sm:px-0"
                        x-ref="panel">
                        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                            <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">

                                <a href="https://uniteus.com/press/"
                                    class="-m-3 p-3 flex items-start rounded-lg hover:bg-light">
                                    <div>
                                        <p class="text-base font-medium text-brand">Newsroom</p>

                                    </div>
                                </a>
                                <a href="https://events.uniteus.com/"
                                    class="-m-3 p-3 flex items-start rounded-lg hover:bg-light">
                                    <div>
                                        <p class="text-base font-medium text-brand">Events</p>

                                    </div>
                                </a>
                                <a href="https://uniteus.com/knowledge-hub/"
                                    class="-m-3 p-3 flex items-start rounded-lg hover:bg-light">
                                    <div>
                                        <p class="text-base font-medium text-brand">Knowledge Hub</p>

                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative group">
                    <a href="#"
                        class="group bg-white rounded-md inline-flex items-center text-base font-medium py-4 hover:text-brand focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-action text-brand">
                        <span>Company</span>
                        <svg class="ml-2 h-5 w-5 group-hover:text-gray-500 text-gray-400"
                            x-description="Heroicon name: solid/chevron-down" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>


                    <div class="absolute hidden group-focus:block group-hover:block z-20 left-1/2 transform -translate-x-1/2 mt-0 px-2 w-screen max-w-xs sm:px-0"
                        x-ref="panel">
                        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
                            <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">

                                <a href="https://uniteus.com/about-us/"
                                    class="-m-3 p-3 flex items-start rounded-lg hover:bg-light">
                                    <div>
                                        <p class="text-base font-medium text-brand">About</p>

                                    </div>
                                </a>
                                <a href="https://uniteus.com/team/"
                                    class="-m-3 p-3 flex items-start rounded-lg hover:bg-light">
                                    <div>
                                        <p class="text-base font-medium text-brand">Team</p>

                                    </div>
                                </a>
                                <a href="https://uniteus.com/privacy/"
                                    class="-m-3 p-3 flex items-start rounded-lg hover:bg-light">
                                    <div>
                                        <p class="text-base font-medium text-brand">Privacy &amp; Security</p>

                                    </div>
                                </a>
                                <a href="https://uniteus.com/our-careers/"
                                    class="-m-3 p-3 flex items-start rounded-lg hover:bg-light">
                                    <div>
                                        <p class="text-base font-medium text-brand">Careers</p>

                                    </div>
                                </a>
                                <a href="https://uniteus.com/contact/"
                                    class="-m-3 p-3 flex items-start rounded-lg hover:bg-light">
                                    <div>
                                        <p class="text-base font-medium text-brand">Contact</p>

                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


            </nav>
            <div class="hidden lg:flex items-center justify-end lg:flex-1 lg:w-0">
                <a href="https://app.uniteus.io/"
                    class="whitespace-nowrap text-base font-medium text-brand hover:text-brand"> Log In </a>
                <a href="https://uniteus.com/demo/" class="button button-purple mx-8">Demo</a>
                <div x-data="{ 'showSearchModal': false }" @keydown.escape="showSearchModal = false">
                    <!-- Trigger for Modal -->
                    <button type="button" @click="showSearchModal = true"
                        class="rounded-lg flex items-center justify-center">
                        <span class="sr-only">Search site</span>
                        <svg aria-hidden="true" viewBox="0 0 20 20" fill="none" class="w-5 h-5 text-gray-900">
                            <circle cx="8.5" cy="8.5" r="5.75" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round"></circle>
                            <path d="M17.25 17.25L13 13" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>

                    <!-- Modal -->
                    <div class="fixed inset-0 z-30 hidden items-center justify-center overflow-auto bg-brand bg-opacity-80"
                        :class="{ 'hidden': !showSearchModal, 'flex': showSearchModal }" x-show="showSearchModal"
                        style="display: none;">
                        <!-- Modal inner -->
                        <div class="w-full max-w-4xl sm:p-10 mx-auto" @click.away="showSearchModal = false"
                            x-transition:enter="motion-safe:ease-out duration-300"
                            x-transition:enter-start="opacity-0 scale-90"
                            x-transition:enter-end="opacity-100 scale-100">
                            <!-- Title / Close-->
                            <div class="flex items-center justify-end mb-10">
                                <button type="button"
                                    class="z-10 rounded-full text-white p-1 border border-white cursor-pointer"
                                    @click="showSearchModal = false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                            </div>

                            <!-- content -->
                            <div id="ajax-filters" class="search-filters relative z-20 mb-10">
                                <form data-sf-form-id="2207" data-is-rtl="0" data-maintain-state=""
                                    data-results-url="https://uniteus.com/search-results/"
                                    data-ajax-url="https://uniteus.com/?sfid=2207&amp;sf_action=get_data&amp;sf_data=results"
                                    data-ajax-form-url="https://uniteus.com/?sfid=2207&amp;sf_action=get_data&amp;sf_data=form"
                                    data-display-result-method="shortcode" data-use-history-api="1"
                                    data-template-loaded="0" data-lang-code="en" data-ajax="1"
                                    data-ajax-data-type="json" data-ajax-links-selector=".pagination a"
                                    data-ajax-target="#search-filter-results-2207" data-ajax-pagination-type="normal"
                                    data-update-ajax-url="0" data-only-results-ajax="1" data-scroll-to-pos="window"
                                    data-scroll-on-action="pagination" data-init-paged="1" data-auto-update=""
                                    action="https://uniteus.com/search-results/" method="post"
                                    class="searchandfilter" id="search-filter-form-2207" autocomplete="off"
                                    data-instance-count="2">
                                    <ul>
                                        <li class="sf-field-post_type" data-sf-field-name="_sf_post_type"
                                            data-sf-field-type="post_type" data-sf-field-input-type="radio">
                                            <div class="relative w-full" x-data="Components.popover({ open: false, focus: false })"
                                                x-init="init()" @keydown.escape="onEscape"
                                                @close-popover-group.window="onClosePopoverGroup"><button
                                                    type="button" x-state:on="Item active"
                                                    x-state:off="Item inactive"
                                                    class="group w-full top-10 justify-between inline-flex items-center rounded-md bg-white text-base font-medium focus:outline-none focus:ring-2 focus:ring-action focus:ring-offset-2 text-sm text-brand"
                                                    :class="{ 'text-brand': open, 'text-brand': !(open) }"
                                                    @click="toggle" @mousedown="if (open) $event.preventDefault()"
                                                    aria-expanded="false" :aria-expanded="open.toString()">
                                                    <span>Search criteria</span>
                                                    <svg width="9" height="14" viewBox="0 0 9 14"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M4.58496 0C4.85018 5.96046e-08 5.10453 0.105357 5.29207 0.292893L8.29207 3.29289C8.68259 3.68342 8.68259 4.31658 8.29207 4.70711C7.90154 5.09763 7.26838 5.09763 6.87785 4.70711L4.58496 2.41421L2.29207 4.70711C1.90154 5.09763 1.26838 5.09763 0.877854 4.70711C0.48733 4.31658 0.48733 3.68342 0.877854 3.29289L3.87785 0.292893C4.06539 0.105357 4.31975 0 4.58496 0ZM0.877854 9.29289C1.26838 8.90237 1.90154 8.90237 2.29207 9.29289L4.58496 11.5858L6.87785 9.29289C7.26838 8.90237 7.90154 8.90237 8.29207 9.29289C8.68259 9.68342 8.68259 10.3166 8.29207 10.7071L5.29207 13.7071C4.90154 14.0976 4.26838 14.0976 3.87785 13.7071L0.877854 10.7071C0.48733 10.3166 0.48733 9.68342 0.877854 9.29289Z"
                                                            fill="#216CFF"></path>
                                                    </svg>

                                                </button>
                                                <div x-show="open"
                                                    x-transition:enter="transition ease-out duration-200"
                                                    x-transition:enter-start="opacity-0 -translate-y-1"
                                                    x-transition:enter-end="opacity-100 translate-y-0"
                                                    x-transition:leave="transition ease-in duration-150"
                                                    x-transition:leave-start="opacity-100 translate-y-0"
                                                    x-transition:leave-end="opacity-0 -translate-y-1"
                                                    x-description="Flyout menu, show/hide based on flyout menu state."
                                                    class="absolute filter-drop-menu inset-x-0 z-10 transform bg-white ring-1 ring-black ring-opacity-5 shadow-lg rounded"
                                                    x-ref="panel" @click.away="open = false" style="display: none;">

                                                    <ul class="">
                                                        <li class="sf-level-0 sf-item-0 sf-option-active"
                                                            data-sf-depth="0"><input class="sf-input-radio"
                                                                type="radio" value="" name="_sf_post_type[]"
                                                                checked="checked"
                                                                id="sf-input-b394344e22417f134e7ad2f21b524b9a"><label
                                                                class="sf-label-radio"
                                                                for="sf-input-b394344e22417f134e7ad2f21b524b9a">Search
                                                                Entire Site</label></li>
                                                        <li class="sf-level-0 " data-sf-depth="0"><input
                                                                class="sf-input-radio" type="radio" value="post"
                                                                name="_sf_post_type[]"
                                                                id="sf-input-c142d268fa77141220a55ac058c1aef4"><label
                                                                class="sf-label-radio"
                                                                for="sf-input-c142d268fa77141220a55ac058c1aef4">Posts</label>
                                                        </li>
                                                        <li class="sf-level-0 " data-sf-depth="0"><input
                                                                class="sf-input-radio" type="radio" value="page"
                                                                name="_sf_post_type[]"
                                                                id="sf-input-8f93c0c2e3c14f62e6b2f55753f15b5f"><label
                                                                class="sf-label-radio"
                                                                for="sf-input-8f93c0c2e3c14f62e6b2f55753f15b5f">Pages</label>
                                                        </li>
                                                        <li class="sf-level-0 " data-sf-depth="0"><input
                                                                class="sf-input-radio" type="radio" value="team"
                                                                name="_sf_post_type[]"
                                                                id="sf-input-b2ff9490c9766c6fb24618e3bac455df"><label
                                                                class="sf-label-radio"
                                                                for="sf-input-b2ff9490c9766c6fb24618e3bac455df">Team</label>
                                                        </li>
                                                        <li class="sf-level-0 " data-sf-depth="0"><input
                                                                class="sf-input-radio" type="radio" value="press"
                                                                name="_sf_post_type[]"
                                                                id="sf-input-487097ba236c732004cf216f30cef70d"><label
                                                                class="sf-label-radio"
                                                                for="sf-input-487097ba236c732004cf216f30cef70d">Press</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="sf-field-search" data-sf-field-name="search"
                                            data-sf-field-type="search" data-sf-field-input-type=""> <label>
                                                <input placeholder="Search" name="_sf_search[]" class="sf-input-text"
                                                    type="text" value="" title=""></label> </li>
                                        <li class="sf-field-submit" data-sf-field-name="submit"
                                            data-sf-field-type="submit" data-sf-field-input-type=""><input
                                                type="submit" name="_sf_submit" value="Submit"></li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                    #ajax-filters.search-filters input[type="submit"] {
                        background: #216CFF;
                        color: white;
                        padding: 22px 48px;
                    }

                    @media only screen and (min-width: 940px) {
                        #ajax-filters.search-filters {
                            background: transparent;
                        }

                        #ajax-filters.search-filters .sf-field-post_type {
                            border-top-left-radius: 8px;
                            border-bottom-left-radius: 8px;
                        }

                        #ajax-filters.search-filters input[type="submit"] {
                            border-top-right-radius: 8px;
                            border-bottom-right-radius: 8px;
                            line-height: 1;
                        }

                        #ajax-filters.search-filters {
                            padding: 0;
                        }

                        #ajax-filters.search-filters .sf-field-search {
                            border: none;
                        }

                        #ajax-filters.search-filters ul li {
                            padding: 0px 1rem;
                            margin: 0;
                            display: flex;
                            flex-grow: 1;
                            align-items: center;
                            background: #fff;
                        }

                        #ajax-filters.search-filters ul li.sf-field-submit {
                            padding: 0;
                            flex-grow: 0;
                            background: transparent;
                        }

                        #ajax-filters.search-filters ul {
                            display: flex;
                            justify-content: center;
                            align-items: normal;
                        }
                    }
                </style>
            </div>
        </div>
    </div>

    <!--
    Mobile menu, show/hide based on mobile menu state.
  -->
    <div x-show="open" x-transition:enter="duration-200 ease-out" x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100" x-transition:leave="duration-100 ease-in"
        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
        x-description="Mobile menu, show/hide based on mobile menu state."
        class="absolute z-50 top-0 inset-x-0 p-2 transition transform origin-top-right lg:hidden" x-ref="panel"
        @click.away="open = false" style="display: none;">
        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
            <div class="pt-5 px-5">
                <div class="flex items-center justify-between">
                    <div>
                        <img src="https://uniteus.com/wp-content/themes/uniteus-sage/public/images/unite-us-logo.svg">
                    </div>
                    <div class="-mr-2">
                        <button type="button"
                            class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                            @click="toggle">
                            <span class="sr-only">Close menu</span>
                            <svg class="h-6 w-6" x-description="Heroicon name: outline/x"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="mt-6">



                    <div class="bg-white">
                        <ul class="list-none">




                            <li class="relative py-2" x-data="{ selected: null }">

                                <button type="button" class="text-left w-full"
                                    @click="selected !== 1 ? selected = 1 : selected = null">
                                    <div class="flex items-center justify-between">
                                        <span class="text-base font-medium text-brand">
                                            Solutions</span>
                                        <svg x-state:on="Item active" x-state:off="Item inactive"
                                            class="ml-2 h-5 w-5 group-hover:text-gray-500 text-gray-400"
                                            :class="{ 'text-gray-600': open, 'text-gray-400': !(open) }"
                                            x-description="Heroicon name: solid/chevron-down"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                </button>

                                <div class="relative overflow-hidden transition-all max-h-0 duration-700"
                                    style="" x-ref="container1"
                                    x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                                    <div class="overflow-hidden">
                                        <div
                                            class="relative grid gap-6 rounded-lg bg-light mb-2 mt-6 px-5 py-6 sm:gap-8 sm:p-8">


                                            <a href="https://uniteus.com/solutions/"
                                                class="-m-3 p-3 flex items-start rounded-lg hover:bg-light">
                                                <div>
                                                    <p class="text-base font-medium text-brand">Overview</p>
                                                </div>
                                            </a>
                                            <a href="https://uniteus.com/solutions/government/"
                                            class="-m-3 p-3 flex items-start rounded-lg hover:bg-light">
                                            <div>
                                                <p class="text-base font-medium text-brand">For Government</p>
                                            </div>
                                        </a>
                                            <a href="https://uniteus.com/solutions/providers/"
                                                class="-m-3 p-3 flex items-start rounded-lg hover:bg-light">
                                                <div>
                                                    <p class="text-base font-medium text-brand">For Providers</p>
                                                </div>
                                            </a>
                                            <a href="https://uniteus.com/solutions/health-plans/"
                                                class="-m-3 p-3 flex items-start rounded-lg hover:bg-light">
                                                <div>
                                                    <p class="text-base font-medium text-brand">For Health Plans</p>
                                                </div>
                                            </a>
                                          
                                            <a href="https://uniteus.com/solutions/nonprofits/"
                                                class="-m-3 p-3 flex items-start rounded-lg hover:bg-light">
                                                <div>
                                                    <p class="text-base font-medium text-brand">For Nonprofits</p>
                                                </div>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="relative py-2" x-data="{ selected: null }">

                                <button type="button" class="text-left w-full"
                                    @click="selected !== 1 ? selected = 1 : selected = null">
                                    <div class="flex items-center justify-between">
                                        <span class="text-base font-medium text-brand">
                                            Products</span>
                                        <svg x-state:on="Item active" x-state:off="Item inactive"
                                            class="ml-2 h-5 w-5 group-hover:text-gray-500 text-gray-400"
                                            :class="{ 'text-gray-600': open, 'text-gray-400': !(open) }"
                                            x-description="Heroicon name: solid/chevron-down"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                </button>

                                <div class="relative overflow-hidden transition-all max-h-0 duration-700"
                                    style="" x-ref="container1"
                                    x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                                    <div class="overflow-hidden">
                                        <div
                                            class="relative grid gap-6 rounded-lg bg-light mb-2 mt-6 px-5 py-6 sm:gap-8 sm:p-8">


                                            <a href="https://uniteus.com/products/"
                                                class="-m-3 p-3 flex items-start rounded-lg hover:bg-light">
                                                <div>
                                                    <p class="text-base font-medium text-brand">Overview</p>
                                                </div>
                                            </a>

                                            <a href="https://uniteus.com/products/platform/"
                                                class="-m-3 p-3 flex items-start rounded-lg hover:bg-light">
                                                <div>
                                                    <p class="text-base font-medium text-brand">Platform</p>
                                                </div>
                                            </a>
                                            <a href="https://uniteus.com/products/insights/"
                                                class="-m-3 p-3 flex items-start rounded-lg hover:bg-light">
                                                <div>
                                                    <p class="text-base font-medium text-brand">Insights</p>
                                                </div>
                                            </a>
                                            <a href="https://uniteus.com/products/payments/"
                                                class="-m-3 p-3 flex items-start rounded-lg hover:bg-light">
                                                <div>
                                                    <p class="text-base font-medium text-brand">Payments</p>
                                                </div>
                                            </a>
                                            <a href="https://uniteus.com/professional-services/"
                                                class="-m-3 p-3 flex items-start rounded-lg hover:bg-light">
                                                <div>
                                                    <p class="text-base font-medium text-brand">Professional Services</p>
                                                </div>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li class="relative py-2" x-data="{ selected: null }">

                                <button type="button" class="text-left w-full"
                                    @click="selected !== 1 ? selected = 1 : selected = null">
                                    <div class="flex items-center justify-between">
                                        <span class="text-base font-medium text-brand">
                                            Networks</span>
                                        <svg x-state:on="Item active" x-state:off="Item inactive"
                                            class="ml-2 h-5 w-5 group-hover:text-gray-500 text-gray-400"
                                            :class="{ 'text-gray-600': open, 'text-gray-400': !(open) }"
                                            x-description="Heroicon name: solid/chevron-down"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                </button>

                                <div class="relative overflow-hidden transition-all max-h-0 duration-700"
                                    style="" x-ref="container1"
                                    x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                                    <div class="overflow-hidden">
                                        <div
                                            class="relative grid gap-6 rounded-lg bg-light mb-2 mt-6 px-5 py-6 sm:gap-8 sm:p-8">


                                            <a href="https://uniteus.com/networks/"
                                                class="-m-3 p-3 flex items-start rounded-lg hover:bg-light">
                                                <div>
                                                    <p class="text-base font-medium text-brand">Overview</p>
                                                </div>
                                            </a>

                                            <a href="https://uniteus.com/how-it-works/"
                                                class="-m-3 p-3 flex items-start rounded-lg hover:bg-light">
                                                <div>
                                                    <p class="text-base font-medium text-brand">How It Works</p>
                                                </div>
                                            </a>
                                          
                                            <a href="https://uniteus.com/user-resources/"
                                                class="-m-3 p-3 flex items-start rounded-lg hover:bg-light">
                                                <div>
                                                    <p class="text-base font-medium text-brand">User Resources</p>
                                                </div>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li class="relative py-2" x-data="{ selected: null }">

                                <button type="button" class="text-left w-full"
                                    @click="selected !== 1 ? selected = 1 : selected = null">
                                    <div class="flex items-center justify-between">
                                        <span class="text-base font-medium text-brand">
                                            Impact</span>
                                        <svg x-state:on="Item active" x-state:off="Item inactive"
                                            class="ml-2 h-5 w-5 group-hover:text-gray-500 text-gray-400"
                                            :class="{ 'text-gray-600': open, 'text-gray-400': !(open) }"
                                            x-description="Heroicon name: solid/chevron-down"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                </button>

                                <div class="relative overflow-hidden transition-all max-h-0 duration-700"
                                    style="" x-ref="container1"
                                    x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                                    <div class="overflow-hidden">
                                        <div
                                            class="relative grid gap-6 rounded-lg bg-light mb-2 mt-6 px-5 py-6 sm:gap-8 sm:p-8">



                                            <a href="https://uniteus.com/press/"
                                                class="-m-3 p-3 flex items-start rounded-lg hover:bg-light">
                                                <div>
                                                    <p class="text-base font-medium text-brand">Newsroom</p>
                                                </div>
                                            </a>
                                            <a href="https://events.uniteus.com/"
                                                class="-m-3 p-3 flex items-start rounded-lg hover:bg-light">
                                                <div>
                                                    <p class="text-base font-medium text-brand">Events</p>
                                                </div>
                                            </a>
                                            <a href="https://uniteus.com/knowledge-hub/"
                                                class="-m-3 p-3 flex items-start rounded-lg hover:bg-light">
                                                <div>
                                                    <p class="text-base font-medium text-brand">Knowledge Hub</p>
                                                </div>
                                            </a>
                                           

                                        </div>
                                    </div>
                                </div>
                            </li>


                            <li class="relative py-2" x-data="{ selected: null }">

                                <button type="button" class="text-left w-full"
                                    @click="selected !== 1 ? selected = 1 : selected = null">
                                    <div class="flex items-center justify-between">
                                        <span class="text-base font-medium text-brand">
                                            Company</span>
                                        <svg x-state:on="Item active" x-state:off="Item inactive"
                                            class="ml-2 h-5 w-5 group-hover:text-gray-500 text-gray-400"
                                            :class="{ 'text-gray-600': open, 'text-gray-400': !(open) }"
                                            x-description="Heroicon name: solid/chevron-down"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                </button>

                                <div class="relative overflow-hidden transition-all max-h-0 duration-700"
                                    style="" x-ref="container1"
                                    x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                                    <div class="overflow-hidden">
                                        <div
                                            class="relative grid gap-6 rounded-lg bg-light mb-2 mt-6 px-5 py-6 sm:gap-8 sm:p-8">



                                            <a href="https://uniteus.com/about-us/"
                                                class="-m-3 p-3 flex items-start rounded-lg hover:bg-light">
                                                <div>
                                                    <p class="text-base font-medium text-brand">About</p>
                                                </div>
                                            </a>
                                            <a href="https://uniteus.com/team/"
                                                class="-m-3 p-3 flex items-start rounded-lg hover:bg-light">
                                                <div>
                                                    <p class="text-base font-medium text-brand">Team</p>
                                                </div>
                                            </a>
                                            <a href="https://uniteus.com/privacy/"
                                            class="-m-3 p-3 flex items-start rounded-lg hover:bg-light">
                                            <div>
                                                <p class="text-base font-medium text-brand">Privacy &amp; Security</p>
                                            </div>
                                        </a>
                                            <a href="https://uniteus.com/our-careers/"
                                                class="-m-3 p-3 flex items-start rounded-lg hover:bg-light">
                                                <div>
                                                    <p class="text-base font-medium text-brand">Careers</p>
                                                </div>
                                            </a>
                                            <a href="https://uniteus.com/contact/"
                                                class="-m-3 p-3 flex items-start rounded-lg hover:bg-light">
                                                <div>
                                                    <p class="text-base font-medium text-brand">Contact</p>
                                                </div>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>
            <div class="py-6 px-5 space-y-6">

                <div>
                    <a href="https://uniteus.com/demo/" class="w-full text-center block button button-solid"> Demo
                    </a>
                    <p class="mt-6 text-center text-base font-medium">
                        Have an account already?
                        <a href="https://app.uniteus.io/"> Log in </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
