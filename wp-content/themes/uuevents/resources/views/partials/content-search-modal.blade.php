<div x-data="{ 'showSearchModal': false }" @keydown.escape="showSearchModal = false">
  <!-- Trigger for Modal -->
  <button type="button" @click="showSearchModal = true" class="rounded-lg flex items-center justify-center">
    <span class="sr-only">Search site</span>
    <svg aria-hidden="true" viewbox="0 0 20 20" fill="none" class="w-5 h-5 text-gray-900">
      <circle cx="8.5" cy="8.5" r="5.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></circle>
      <path d="M17.25 17.25L13 13" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
    </svg>
  </button>

  <!-- Modal -->
  <div class="fixed inset-0 z-30 hidden items-center justify-center overflow-auto bg-brand bg-opacity-80" :class="{ 'hidden': ! showSearchModal, 'flex': showSearchModal }" x-show="showSearchModal">
    <!-- Modal inner -->
    <div class="w-full max-w-4xl sm:p-10 mx-auto" @click.away="showSearchModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
      <!-- Title / Close-->
      <div class="flex items-center justify-end mb-10">
        <button type="button" class="z-10 rounded-full text-white p-1 border border-white cursor-pointer" @click="showSearchModal = false">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
          </svg>
        </button>
      </div>

      <!-- content -->
      <div id="ajax-filters" class="search-filters relative z-20 mb-10">
        {!! do_shortcode('[searchandfilter slug="site-search"]') !!}
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
