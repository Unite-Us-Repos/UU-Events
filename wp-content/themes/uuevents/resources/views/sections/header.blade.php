<div class="z-50" x-data="{ showSearchModal: false, showMobileMenu: false, isSticky: false, alertHeight: 0 }" 
x-init="alertHeight = $refs.alert ? $refs.alert.offsetHeight : 0;
window.addEventListener('scroll', () => {
    isSticky = window.scrollY > alertHeight;
});
$watch('isSticky', value => {
    if (value) {
        $refs.nav.classList.add('fixed', 'top-0', 'left-0', 'w-full', 'z-50', 'shadow-md');
        $refs.placeholder.style.height = $refs.nav.offsetHeight + 'px';
    } else {
        $refs.nav.classList.remove('fixed', 'top-0', 'left-0', 'w-full', 'z-50', 'shadow-md');
        $refs.placeholder.style.height = '0px';
    }
});">
  <!-- Placeholder to prevent content shift -->
  <div x-ref="placeholder" style="height: 0;"></div>

<div id="nav" x-ref="nav" class="top-nav bg-white lg:bg-white">
  <div class="relative">
    <div class="flex justify-between items-center max-w-7xl mx-auto px-8 lg:justify-start">
      <!-- LOGO -->
      <div class="flex justify-start py-4 lg:py-0 lg:w-0 lg:flex-1">
        <a href="/">
          <span class="sr-only">Main menu</span>
          <img fetchpriority="high"
            src="https://uniteus.com/wp-content/themes/uniteus-sage/public/images/unite-us-logo.svg"
            alt="Unite Us" width="192" height="48" />
        </a>
      </div>

      <!-- MOBILE BUTTONS -->
      <div class="lg:hidden -mr-2 -my-2 flex items-center gap-3">
        <button type="button" @click="showSearchModal = true" class="rounded-lg flex items-center justify-center">
          <span class="sr-only">Search site</span>
          <img src="https://uniteus.com/wp-content/themes/uniteus-sage/public/images/nav-search.svg"
            alt="" width="20" height="20" />
        </button>

        <button type="button"
          class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-action"
          @click="
  showMobileMenu = !showMobileMenu;
  document.documentElement.classList.toggle('overflow-hidden', showMobileMenu);
  document.body.classList.toggle('overflow-hidden', showMobileMenu);">
          <span class="sr-only">Open menu</span>
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
            stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>

      <!-- ✅ DESKTOP NAV GOES HERE -->
      <!-- Desktop Menu -->
<nav class="hidden lg:flex items-center space-x-5 xl:space-x-10 desktop-nav">

  <!-- SOLUTIONS (desktop mega menu) -->
  <div class="group flex desktop-only solutions"
    x-data="{ hi: false, enter() { this.hi = true }, leave() { this.hi = false } }"
    @mouseenter="enter" @mouseleave="leave"
    :class="{ 'hover-intent': hi }">

    <a href="#"
      class="group bg-white rounded-md inline-flex items-center text-base font-medium hover:text-brand focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-action text-brand menu_click">
      <span>Solutions</span>
      <svg width="21" height="20" viewBox="0 0 21 20"
        xmlns="http://www.w3.org/2000/svg"
        class="transition-colors duration-300 fill-gray-500 group-hover:fill-action">
        <path fill-rule="evenodd" clip-rule="evenodd"
          d="M6.2177 7.29289C6.60822 6.90237 7.24139 6.90237 7.63191 7.29289L10.9248 10.5858L14.2177 7.29289C14.6082 6.90237 15.2414 6.90237 15.6319 7.29289C16.0224 7.68342 16.0224 8.31658 15.6319 8.70711L11.6319 12.7071C11.2414 13.0976 10.6082 13.0976 10.2177 12.7071L6.2177 8.70711C5.82717 8.31658 5.82717 7.68342 6.2177 7.29289Z" />
      </svg>
    </a>

    <div class="menu-wrapper nav-panel absolute z-50 inset-x-0 top-full mt-0 w-full px-0 bg-white"
      @mouseenter="enter" @mouseleave="leave">
      <div class="menu-wrapper-inner overflow-hidden">

        <div class="solutions-menu max-w-7xl mx-auto">

          <section class="solutions-col solutions-industry">
            <div class="solutions-section-heading-link">
              <span class="solutions-title pl-4">INDUSTRY</span>
            </div>

            <div class="solutions-industry-list">
              <a href="https://uniteus.com/industries/government/" class="solutions-industry-link menu_click">
                <span class="solutions-industry-icon" aria-hidden="true">
                  <img src="https://uniteus.com/wp-content/uploads/2025/12/building-2.svg" alt="" class="menu-icon-img">
                </span>
                <span class="solutions-industry-label">Government</span>
              </a>

              <a href="https://uniteus.com/industries/providers/" class="solutions-industry-link menu_click">
                <span class="solutions-industry-icon" aria-hidden="true">
                  <img src="https://uniteus.com/wp-content/uploads/2025/12/stethoscope.svg" alt="" class="menu-icon-img">
                </span>
                <span class="solutions-industry-label">Providers</span>
              </a>

              <a href="https://uniteus.com/industries/payers/" class="solutions-industry-link menu_click">
                <span class="solutions-industry-icon" aria-hidden="true">
                  <img src="https://uniteus.com/wp-content/uploads/2025/12/wallet.svg" alt="" class="menu-icon-img">
                </span>
                <span class="solutions-industry-label">Payers</span>
              </a>

              <a href="https://uniteus.com/industries/community/" class="solutions-industry-link menu_click">
                <span class="solutions-industry-icon" aria-hidden="true">
                  <img src="https://uniteus.com/wp-content/uploads/2025/12/users-1.svg" alt="" class="menu-icon-img">
                </span>
                <span class="solutions-industry-label">Community</span>
              </a>
            </div>
          </section>

          <section class="solutions-col solutions-product">
            <div class="solutions-heading-link">
              <span class="solutions-title">PRODUCT</span>
            </div>

            <div class="solutions-product-groups">

              <div class="solutions-product-group">
                <div class="solutions-product-heading-row">
                  <span class="solutions-product-icon" aria-hidden="true">
                    <img src="https://uniteus.com/wp-content/uploads/2025/12/search.svg" alt="" class="menu-icon-img">
                  </span>
                  <span class="solutions-product-heading">Insights</span>
                </div>
                <div class="solutions-product-list">
                  <a href="https://uniteus.com/products/social-care-data/" class="solutions-product-link menu_click">Predictive Analytics</a>
                  <a href="https://uniteus.com/solutions/self-sufficiency-score/" class="solutions-product-link menu_click">Self Sufficiency Score</a>
                </div>
              </div>

              <div class="solutions-product-group">
                <div class="solutions-product-heading-row">
                  <span class="solutions-product-icon" aria-hidden="true">
                    <img src="https://uniteus.com/wp-content/uploads/2025/12/database.svg" alt="" class="menu-icon-img">
                  </span>
                  <span class="solutions-product-heading">Platform</span>
                </div>
                <div class="solutions-product-list">
                  <a href="https://uniteus.com/products/closed-loop-referral-system/" class="solutions-product-link menu_click">Closed-Loop Referral System</a>
                  <a href="https://uniteus.com/solutions/integrations/" class="solutions-product-link menu_click">Integrations</a>
                  <a href="https://uniteus.com/products/resource-directory/" class="solutions-product-link menu_click">Resource Directory</a>
                </div>
              </div>

              <div class="solutions-product-group">
                <div class="solutions-product-heading-row">
                  <span class="solutions-product-icon" aria-hidden="true">
                    <img src="https://uniteus.com/wp-content/uploads/2025/12/credit-card.svg" alt="" class="menu-icon-img">
                  </span>
                  <span class="solutions-product-heading">Payments</span>
                </div>
                <div class="solutions-product-list">
                  <a href="https://uniteus.com/solutions/grant-tracking-billing/" class="solutions-product-link menu_click">Grant Tracking &amp; Billing</a>
                  <a href="https://uniteus.com/products/social-care-revenue-cycle-management/" class="solutions-product-link menu_click">Revenue Cycle Management</a>
                </div>
              </div>

              <div class="solutions-product-group">
                <div class="solutions-product-heading-row">
                  <span class="solutions-product-icon" aria-hidden="true">
                    <img src="https://uniteus.com/wp-content/uploads/2025/12/briefcase-1.svg" alt="" class="menu-icon-img">
                  </span>
                  <span class="solutions-product-heading">Professional Services</span>
                </div>
                <div class="solutions-product-list">
                  <a href="https://uniteus.com/products/professional-services/" class="solutions-product-link menu_click">Managed Services</a>
                  <a href="https://uniteus.com/products/care-coordination-services/" class="solutions-product-link menu_click">Care Coordination</a>
                </div>
              </div>

            </div>
          </section>

          <aside class="solutions-col solutions-usecases">
            <div class="solutions-usecases-card">
              <div class="solutions-usecases-title">USE CASE</div>

              <div class="solutions-usecases-list">
                <a href="https://uniteus.com/solutions/rural-health/" class="solutions-usecase-item is-featured menu_click">
                  <span class="solutions-usecase-icon" aria-hidden="true">
                    <img src="https://uniteus.com/wp-content/uploads/2025/12/wheat.svg" alt="" class="menu-icon-img">
                  </span>
                  <div class="solutions-usecase-text">
                    <span class="solutions-usecase-label">Rural Health</span>
                    <span class="solutions-usecase-pill">FEATURED</span>
                  </div>
                </a>

                <a href="https://uniteus.com/medicaid-community-engagement/" class="solutions-usecase-item menu_click">
                  <span class="solutions-usecase-icon" aria-hidden="true">
                    <img src="https://uniteus.com/wp-content/uploads/2025/12/file-check.svg" alt="" class="menu-icon-img">
                  </span>
                  <span class="solutions-usecase-label">Medicaid Community Engagement Requirements</span>
                </a>

                <a href="https://uniteus.com/solutions/medicaid-transformation/" class="solutions-usecase-item menu_click">
                  <span class="solutions-usecase-icon" aria-hidden="true">
                    <img src="https://uniteus.com/wp-content/uploads/2025/12/shield-check.svg" alt="" class="menu-icon-img">
                  </span>
                  <span class="solutions-usecase-label">Medicaid Transformation</span>
                </a>

                <a href="https://uniteus.com/solutions/ed-utilization/" class="solutions-usecase-item menu_click">
                  <span class="solutions-usecase-icon" aria-hidden="true">
                    <img src="https://uniteus.com/wp-content/uploads/2025/12/hospital.svg" alt="" class="menu-icon-img">
                  </span>
                  <span class="solutions-usecase-label">Emergency Department Utilization</span>
                </a>
              </div>
            </div>
          </aside>

        </div>
      </div>
    </div>
  </div>

  <!-- Resources -->
  <div class="group flex resources"
    x-data="{ hi: false, enter() { this.hi = true }, leave() { this.hi = false } }"
    @mouseenter="enter" @mouseleave="leave"
    :class="{ 'hover-intent': hi }">

    <a href="#"
      class="group bg-white rounded-md inline-flex items-center text-base font-medium hover:text-brand focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-action text-brand menu_click">
      <span>Resources</span>
      <svg width="21" height="20" viewBox="0 0 21 20" xmlns="http://www.w3.org/2000/svg"
        class="transition-colors duration-300 fill-gray-500 group-hover:fill-action">
        <path fill-rule="evenodd" clip-rule="evenodd"
          d="M6.2177 7.29289C6.60822 6.90237 7.24139 6.90237 7.63191 7.29289L10.9248 10.5858L14.2177 7.29289C14.6082 6.90237 15.2414 6.90237 15.6319 7.29289C16.0224 7.68342 16.0224 8.31658 15.6319 8.70711L11.6319 12.7071C11.2414 13.0976 10.6082 13.0976 10.2177 12.7071L6.2177 8.70711C5.82717 8.31658 5.82717 7.68342 6.2177 7.29289Z" />
      </svg>
    </a>

    <div class="menu-wrapper nav-panel absolute z-50 inset-x-0 top-full mt-0 w-full px-0 bg-white"
      @mouseenter="enter" @mouseleave="leave">
      <div class="menu-wrapper-inner overflow-hidden">
        <div class="resources-menu max-w-7xl mx-auto">

          <section class="resources-links">
            <div class="resources-title">LIBRARY</div>

            <div class="resources-links-column flex flex-col">
              <a href="https://uniteus.com/blog" class="resources-link menu_click">
                <span class="resources-icon" aria-hidden="true">
                  <img src="https://uniteus.com/wp-content/uploads/2025/12/file-text.svg" alt="" class="menu-icon-img">
                </span>
                <span class="resources-label">Blogs</span>
              </a>

              <a href="https://uniteus.com/webinar" class="resources-link menu_click">
                <span class="resources-icon" aria-hidden="true">
                  <img src="https://uniteus.com/wp-content/uploads/2025/12/video.svg" alt="" class="menu-icon-img">
                </span>
                <span class="resources-label">Webinars &amp; Videos</span>
              </a>

              <a href="https://events.uniteus.com" class="resources-link menu_click">
                <span class="resources-icon" aria-hidden="true">
                  <img src="https://uniteus.com/wp-content/uploads/2025/12/calendar.svg" alt="" class="menu-icon-img">
                </span>
                <span class="resources-label">Events</span>
              </a>

              <a href="https://uniteus.com/press" class="resources-link menu_click">
                <span class="resources-icon" aria-hidden="true">
                  <img src="https://uniteus.com/wp-content/uploads/2025/12/newspaper.svg" alt="" class="menu-icon-img">
                </span>
                <span class="resources-label">Newsroom</span>
              </a>

              <a href="https://uniteus.com/studies-and-data" class="resources-link menu_click">
                <span class="resources-icon" aria-hidden="true">
                  <img src="https://uniteus.com/wp-content/uploads/2025/12/search.svg" alt="" class="menu-icon-img">
                </span>
                <span class="resources-label">Studies &amp; Data</span>
              </a>
            </div>

            <a href="https://uniteus.com/knowledge-hub/" class="resources-view-all">
              View all resources <span class="resources-view-all-arrow" aria-hidden="true">→</span>
            </a>
          </section>

          <section class="resources-feature">
            <article class="resources-feature-card" aria-label="Featured Resource">
              <div class="resources-feature-content">
                <div class="resources-feature-eyebrow">
                  <span class="resources-feature-eyebrow-icon" aria-hidden="true">
                    <img src="https://uniteus.com/wp-content/themes/uniteus-sage/public/images/video.svg" alt="" />
                  </span>
                  <span class="resources-feature-eyebrow-label">Featured Webinar</span>
                </div>

                <h3 class="resources-feature-heading">
                  <b>Rural Health Transformation in Action:</b> Preparing for What’s Next
                </h3>

                <p class="resources-feature-text">
                   As Rural Health Transformation Program initiatives take shape nationwide, 
                   organizations across sectors are preparing to scale what’s already working...
                </p>

                <a href="https://uniteus.registration.goldcast.io/webinar/52b84335-806d-46dd-b33d-c98315bdec02" target="_blank" 
                  class="resources-feature-cta">
                  Register <span class="resources-feature-cta-arrow" aria-hidden="true">→</span>
                </a>
              </div>

              <div class="resources-feature-image">
                <img src="https://events.uniteus.com/wp-content/uploads/2026/03/Featured-Image.png"
                  alt="Rural Health: A Guide for Digital Health Transformation"
                  class="resources-feature-image-img">
              </div>
            </article>
          </section>

        </div>
      </div>
    </div>
  </div>

  <!-- Company -->
  <div class="group flex company"
    x-data="{ hi: false, enter() { this.hi = true }, leave() { this.hi = false } }"
    @mouseenter="enter" @mouseleave="leave"
    :class="{ 'hover-intent': hi }">

    <a href="#"
      class="group bg-white rounded-md inline-flex items-center text-base font-medium hover:text-brand focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-action text-brand menu_click">
      <span>Company</span>
      <svg width="21" height="20" viewBox="0 0 21 20" xmlns="http://www.w3.org/2000/svg"
        class="transition-colors duration-300 fill-gray-500 group-hover:fill-action">
        <path fill-rule="evenodd" clip-rule="evenodd"
          d="M6.2177 7.29289C6.60822 6.90237 7.24139 6.90237 7.63191 7.29289L10.9248 10.5858L14.2177 7.29289C14.6082 6.90237 15.2414 6.90237 15.6319 7.29289C16.0224 7.68342 16.0224 8.31658 15.6319 8.70711L11.6319 12.7071C11.2414 13.0976 10.6082 13.0976 10.2177 12.7071L6.2177 8.70711C5.82717 8.31658 5.82717 7.68342 6.2177 7.29289Z" />
      </svg>
    </a>

    <div class="menu-wrapper nav-panel absolute z-50 inset-x-0 top-full mt-0 w-full px-0 bg-white"
      @mouseenter="enter" @mouseleave="leave">
      <div class="menu-wrapper-inner overflow-hidden">

        <div class="company-menu max-w-7xl mx-auto">
          <section class="company-links">
            <div class="company-title">WHO WE ARE</div>

            <div class="company-links-grid">
              <a href="https://uniteus.com/about-unite-us/" class="company-link menu_click">
                <span class="company-link-icon" aria-hidden="true">
                  <img src="https://uniteus.com/wp-content/uploads/2025/12/Group-37403.svg" alt="" class="menu-icon-img">
                </span>
                <span class="company-link-label">About</span>
              </a>

              <a href="https://uniteus.com/team/" class="company-link menu_click">
                <span class="company-link-icon" aria-hidden="true">
                  <img src="https://uniteus.com/wp-content/uploads/2025/12/users.svg" alt="" class="menu-icon-img">
                </span>
                <span class="company-link-label">Team</span>
              </a>

              <a href="https://uniteus.com/our-careers/" class="company-link menu_click">
                <span class="company-link-icon" aria-hidden="true">
                  <img src="https://uniteus.com/wp-content/uploads/2025/12/briefcase.svg" alt="" class="menu-icon-img">
                </span>
                <span class="company-link-label">Careers</span>
              </a>

              <a href="https://uniteus.com/loyalty-referral/" class="company-link menu_click">
                <span class="company-link-icon" aria-hidden="true">
                  <img src="https://uniteus.com/wp-content/uploads/2025/12/Icon-1.svg" alt="" class="menu-icon-img">
                </span>
                <span class="company-link-label">Referral</span>
              </a>

              <a href="https://uniteus.com/channel-partner/" class="company-link menu_click">
                <span class="company-link-icon" aria-hidden="true">
                  <img src="https://uniteus.com/wp-content/uploads/2025/12/Group.svg" alt="" class="menu-icon-img">
                </span>
                <span class="company-link-label">Channel Partners</span>
              </a>

              <a href="https://uniteus.com/networks/" class="company-link menu_click">
                <span class="company-link-icon" aria-hidden="true">
                  <img src="https://uniteus.com/wp-content/uploads/2025/12/Group-372.svg" alt="" class="menu-icon-img">
                </span>
                <span class="company-link-label">Networks</span>
              </a>
            </div>
          </section>

          <section class="company-award">
            <article class="company-award-card" aria-label="Company Award Highlight">
              <div class="company-award-badge">
                <span class="company-award-badge-icon" aria-hidden="true">
                  <img src="https://uniteus.com/wp-content/themes/uniteus-sage/public/images/award.svg" alt="" />
                </span>
                <span class="company-award-badge-text">Company Awards</span>
              </div>

              <h3 class="company-award-heading mb-2">
                Unite Us Awarded on TIME’s List of the World’s Top HealthTech Companies 2025
              </h3>

              <p class="company-award-text max-w-md">
                Honored for advancing healthcare through technology, measurable outcomes, and impact.
              </p>

              <a href="https://uniteus.com/press/unite-us-awarded-on-times-list-of-the-worlds-top-healthtech-companies-2025/"
                class="company-award-cta" target="_self">
                Read the Announcement
              </a>

              <div class="company-award-mark" aria-hidden="true"
                style="background-image:url('https://uniteus.com/wp-content/themes/uniteus-sage/public/images/award.svg');"></div>
            </article>
          </section>

        </div>
      </div>
    </div>
  </div>
</nav>


      <!-- DESKTOP RIGHT SIDE (Log in / Get Started / Search) -->
      <div class="hidden lg:flex items-center justify-end lg:flex-1 lg:w-0">
        <a href="https://app.uniteus.io/" class="whitespace-nowrap text-base font-medium text-brand hover:text-brand">
          Log In
        </a>
        <a href="https://uniteus.com/demo/" class="button button-solid !rounded-full mx-6">Get Started</a>
        <button type="button" @click="showSearchModal = true" class="rounded-lg flex items-center justify-center">
          <span class="sr-only">Search site</span>
          <img src="https://uniteus.com/wp-content/themes/uniteus-sage/public/images/nav-search.svg"
            alt="" width="20" height="20" />
        </button>
      </div>

      <!-- ✅ MOBILE MENU GOES HERE (updated below) -->
      <!-- Mobile Menu -->
<div x-show="showMobileMenu"
  class="lg:hidden fixed inset-0 z-50 p-2"
  style="display: none;"
  @keydown.escape.window="
    showMobileMenu = false;
    document.documentElement.classList.remove('overflow-hidden');
    document.body.classList.remove('overflow-hidden');
  ">
<div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50
            max-h-[calc(100dvh-16px)] overflow-y-auto overscroll-contain"
     style="-webkit-overflow-scrolling: touch;">

    <div class="pt-5 pb-6 px-5">
      <div class="flex items-center justify-between">
        <img fetchpriority="high"
          src="https://uniteus.com/wp-content/themes/uniteus-sage/public/images/unite-us-logo.svg"
          alt="Unite Us" width="192" height="48" />

        <button type="button"
          class="bg-white rounded-md inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
          @click="
  showMobileMenu = false;
  document.documentElement.classList.remove('overflow-hidden');
  document.body.classList.remove('overflow-hidden');
"
>
          <span class="sr-only">Close menu</span>
          <img
            src="https://uniteus.com/wp-content/themes/uniteus-sage/public/images/nav-close.svg"
            alt="" width="24" height="24" />
        </button>
      </div>

      <div class="mt-6">
        <ul class="list-none">

<!-- INDUSTRIES -->
<li class="relative py-2" x-data="{ isOpen: false }">
  <button type="button" class="text-left w-full" @click="isOpen = !isOpen">
    <div class="flex items-center justify-between">
      <span class="text-base font-medium text-brand">Industries</span>
      <svg width="21" height="20" viewBox="0 0 21 20" xmlns="http://www.w3.org/2000/svg"
        class="transition-transform duration-300"
        :class="isOpen ? 'rotate-180 text-blue-500' : 'rotate-0 text-gray-500'">
        <path fill-rule="evenodd" clip-rule="evenodd"
          d="M6.2177 7.29289C6.60822 6.90237 7.24139 6.90237 7.63191 7.29289L10.9248 10.5858L14.2177 7.29289C14.6082 6.90237 15.2414 6.90237 15.6319 7.29289C16.0224 7.68342 16.0224 8.31658 15.6319 8.70711L11.6319 12.7071C11.2414 13.0976 10.6082 13.0976 10.2177 12.7071L6.2177 8.70711C5.82717 8.31658 5.82717 7.68342 6.2177 7.29289Z"
          :fill="isOpen ? '#2563EB' : '#9CA3AF'" />
      </svg>
    </div>
  </button>

  <div class="relative overflow-hidden transition-all max-h-0 duration-700"
    x-ref="container"
    x-bind:style="isOpen ? 'max-height: ' + $refs.container.scrollHeight + 'px' : ''">
    <div class="overflow-hidden">
      <div class="relative grid gap-6 rounded-lg bg-light mb-2 mt-6 px-5 py-6 sm:p-8">
        <a href="https://uniteus.com/industries/government/"
          class="-m-3 p-3 flex items-start rounded-lg hover:bg-white menu_click">
          <span class="text-base font-medium text-brand">Government</span>
        </a>
        <a href="https://uniteus.com/industries/providers/"
          class="-m-3 p-3 flex items-start rounded-lg hover:bg-white menu_click">
          <span class="text-base font-medium text-brand">Providers</span>
        </a>
        <a href="https://uniteus.com/industries/payers/"
          class="-m-3 p-3 flex items-start rounded-lg hover:bg-white menu_click">
          <span class="text-base font-medium text-brand">Payers</span>
        </a>
        <a href="https://uniteus.com/industries/community/"
          class="-m-3 p-3 flex items-start rounded-lg hover:bg-white menu_click">
          <span class="text-base font-medium text-brand">Community</span>
        </a>
      </div>
    </div>
  </div>
</li>

<!-- PRODUCTS -->
<li class="relative py-2" x-data="{ isOpen: false }">
  <button type="button" class="text-left w-full" @click="isOpen = !isOpen">
    <div class="flex items-center justify-between">
      <span class="text-base font-medium text-brand">Products</span>
      <svg width="21" height="20" viewBox="0 0 21 20" xmlns="http://www.w3.org/2000/svg"
        class="transition-transform duration-300"
        :class="isOpen ? 'rotate-180 text-blue-500' : 'rotate-0 text-gray-500'">
        <path fill-rule="evenodd" clip-rule="evenodd"
          d="M6.2177 7.29289C6.60822 6.90237 7.24139 6.90237 7.63191 7.29289L10.9248 10.5858L14.2177 7.29289C14.6082 6.90237 15.2414 6.90237 15.6319 7.29289C16.0224 7.68342 16.0224 8.31658 15.6319 8.70711L11.6319 12.7071C11.2414 13.0976 10.6082 13.0976 10.2177 12.7071L6.2177 8.70711C5.82717 8.31658 5.82717 7.68342 6.2177 7.29289Z"
          :fill="isOpen ? '#2563EB' : '#9CA3AF'" />
      </svg>
    </div>
  </button>

  <div class="relative overflow-hidden transition-all max-h-0 duration-700"
    x-ref="container"
    x-bind:style="isOpen ? 'max-height: ' + $refs.container.scrollHeight + 'px' : ''">
    <div class="overflow-hidden">
      <div class="relative grid rounded-lg bg-light mb-2 mt-6 px-5 py-6 sm:p-8">

        <!-- helper: the little right-arrow used on links -->
        <template x-if="true">
          <span class="sr-only"></span>
        </template>

        <!-- INSIGHTS -->
        <div class="text-base  text-brand">Insights</div>
        <div class="mt-2 pl-5 space-y-2">
          <a href="https://uniteus.com/products/social-care-data/"
            class="flex items-center gap-3 text-base font-medium text-brand hover:text-action menu_click pb-2">
            <svg width="18" height="18" viewBox="0 0 20 20" aria-hidden="true">
              <path d="M7.5 4.5L13 10l-5.5 5.5" fill="none" stroke="#2563EB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Predictive Analytics
          </a>
          <a href="https://uniteus.com/solutions/self-sufficiency-score/"
            class="flex items-center gap-3 text-base font-medium text-brand hover:text-action menu_click pb-2 !mt-0">
            <svg width="18" height="18" viewBox="0 0 20 20" aria-hidden="true">
              <path d="M7.5 4.5L13 10l-5.5 5.5" fill="none" stroke="#2563EB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Self Sufficiency Score
          </a>
        </div>

        <!-- PLATFORM -->
        <div class="text-base text-brand pt-2 pb-2">Platform</div>
        <div class="mt-2 pl-5 space-y-2 gap-4">
          <a href="https://uniteus.com/products/closed-loop-referral-system/"
            class="flex items-center gap-3 text-base font-medium text-brand hover:text-action menu_click pb-2 !mt-0">
            <svg width="18" height="18" viewBox="0 0 20 20" aria-hidden="true">
              <path d="M7.5 4.5L13 10l-5.5 5.5" fill="none" stroke="#2563EB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Closed-Loop Referral System
          </a>
          <a href="https://uniteus.com/solutions/integrations/"
            class="flex items-center gap-3 text-base font-medium text-brand hover:text-action menu_click pb-2 !mt-0">
            <svg width="18" height="18" viewBox="0 0 20 20" aria-hidden="true">
              <path d="M7.5 4.5L13 10l-5.5 5.5" fill="none" stroke="#2563EB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Integrations
          </a>
          <a href="https://uniteus.com/products/resource-directory/"
            class="flex items-center gap-3 text-base font-medium text-brand hover:text-action menu_click pb-2 !mt-0">
            <svg width="18" height="18" viewBox="0 0 20 20" aria-hidden="true">
              <path d="M7.5 4.5L13 10l-5.5 5.5" fill="none" stroke="#2563EB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Resource Directory
          </a>
        </div>

        <!-- PAYMENTS -->
        <div class="text-base text-brand pt-2 pb-2">Payments</div>
        <div class="mt-2 pl-5 space-y-2 gap-4">
          <a href="https://uniteus.com/solutions/grant-tracking-billing/"
            class="flex items-center gap-3 text-base font-medium text-brand hover:text-action menu_click pb-2 !mt-0">
            <svg width="18" height="18" viewBox="0 0 20 20" aria-hidden="true">
              <path d="M7.5 4.5L13 10l-5.5 5.5" fill="none" stroke="#2563EB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Grant Tracking &amp; Billing
          </a>
          <a href="https://uniteus.com/products/social-care-revenue-cycle-management/"
            class="flex items-center gap-3 text-base font-medium text-brand hover:text-action menu_click pb-2 !mt-0">
            <svg width="18" height="18" viewBox="0 0 20 20" aria-hidden="true">
              <path d="M7.5 4.5L13 10l-5.5 5.5" fill="none" stroke="#2563EB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Revenue Cycle Management
          </a>
        </div>

        <!-- PROFESSIONAL SERVICES -->
        <div class="text-base text-brand pt-2 pb-2">Professional Services</div>
        <div class="mt-2 pl-5 space-y-2">
          <a href="https://uniteus.com/products/professional-services/"
            class="flex items-center gap-3 text-base font-medium text-brand hover:text-action menu_click pb-2 !mt-0">
            <svg width="18" height="18" viewBox="0 0 20 20" aria-hidden="true">
              <path d="M7.5 4.5L13 10l-5.5 5.5" fill="none" stroke="#2563EB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Managed Services
          </a>
          <a href="https://uniteus.com/products/care-coordination-services/"
            class="flex items-center gap-3 text-base font-medium text-brand hover:text-action menu_click pb-2 !mt-0">
            <svg width="18" height="18" viewBox="0 0 20 20" aria-hidden="true">
              <path d="M7.5 4.5L13 10l-5.5 5.5" fill="none" stroke="#2563EB" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Care Coordination
          </a>
        </div>

      </div>
    </div>
  </div>
</li>

<!-- USE CASE -->
<li class="relative py-2" x-data="{ isOpen: false }">
  <button type="button" class="text-left w-full" @click="isOpen = !isOpen">
    <div class="flex items-center justify-between">
      <span class="text-base font-medium text-brand">Use Case</span>
      <svg width="21" height="20" viewBox="0 0 21 20" xmlns="http://www.w3.org/2000/svg"
        class="transition-transform duration-300"
        :class="isOpen ? 'rotate-180 text-blue-500' : 'rotate-0 text-gray-500'">
        <path fill-rule="evenodd" clip-rule="evenodd"
          d="M6.2177 7.29289C6.60822 6.90237 7.24139 6.90237 7.63191 7.29289L10.9248 10.5858L14.2177 7.29289C14.6082 6.90237 15.2414 6.90237 15.6319 7.29289C16.0224 7.68342 16.0224 8.31658 15.6319 8.70711L11.6319 12.7071C11.2414 13.0976 10.6082 13.0976 10.2177 12.7071L6.2177 8.70711C5.82717 8.31658 5.82717 7.68342 6.2177 7.29289Z"
          :fill="isOpen ? '#2563EB' : '#9CA3AF'" />
      </svg>
    </div>
  </button>

  <div class="relative overflow-hidden transition-all max-h-0 duration-700"
    x-ref="container"
    x-bind:style="isOpen ? 'max-height: ' + $refs.container.scrollHeight + 'px' : ''">
    <div class="overflow-hidden">
      <div class="relative grid gap-6 rounded-lg bg-light mb-2 mt-6 px-5 py-6 sm:p-8">
        <a href="https://uniteus.com/solutions/rural-health/"
          class="-m-3 p-3 flex items-start rounded-lg hover:bg-white menu_click">
          <span class="text-base font-medium text-brand">Rural Health</span>
        </a>
        <a href="https://uniteus.com/medicaid-community-engagement/"
          class="-m-3 p-3 flex items-start rounded-lg hover:bg-white menu_click">
          <span class="text-base font-medium text-brand">Medicaid Community Engagement Requirements</span>
        </a>
        <a href="https://uniteus.com/solutions/medicaid-transformation/"
          class="-m-3 p-3 flex items-start rounded-lg hover:bg-white menu_click">
          <span class="text-base font-medium text-brand">Medicaid Transformation</span>
        </a>
        <a href="https://uniteus.com/solutions/ed-utilization/"
          class="-m-3 p-3 flex items-start rounded-lg hover:bg-white menu_click">
          <span class="text-base font-medium text-brand">Emergency Department Utilization</span>
        </a>
      </div>
    </div>
  </div>
</li>


          <!-- RESOURCES -->
          <li class="relative py-2" x-data="{ isOpen: false }">
            <button type="button" class="text-left w-full" @click="isOpen = !isOpen">
              <div class="flex items-center justify-between">
                <span class="text-base font-medium text-brand">Resources</span>
                <svg width="21" height="20" viewBox="0 0 21 20" xmlns="http://www.w3.org/2000/svg"
                  class="transition-transform duration-300"
                  :class="isOpen ? 'rotate-180 text-blue-500' : 'rotate-0 text-gray-500'">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M6.2177 7.29289C6.60822 6.90237 7.24139 6.90237 7.63191 7.29289L10.9248 10.5858L14.2177 7.29289C14.6082 6.90237 15.2414 6.90237 15.6319 7.29289C16.0224 7.68342 16.0224 8.31658 15.6319 8.70711L11.6319 12.7071C11.2414 13.0976 10.6082 13.0976 10.2177 12.7071L6.2177 8.70711C5.82717 8.31658 5.82717 7.68342 6.2177 7.29289Z"
                    :fill="isOpen ? '#2563EB' : '#9CA3AF'" />
                </svg>
              </div>
            </button>

            <div class="relative overflow-hidden transition-all max-h-0 duration-700"
              x-ref="container"
              x-bind:style="isOpen ? 'max-height: ' + $refs.container.scrollHeight + 'px' : ''">
              <div class="overflow-hidden">
                <div class="relative grid gap-6 rounded-lg bg-light mb-2 mt-6 px-5 py-6 sm:gap-8 sm:p-8">
                  <a https="//uniteus.com/blog" class="-m-3 p-3 flex items-start rounded-lg hover:bg-light menu_click">
                    <span class="text-base font-medium text-brand">Blogs</span>
                  </a>
                  <a href="https://uniteus.com/webinar" class="-m-3 p-3 flex items-start rounded-lg hover:bg-light menu_click">
                    <span class="text-base font-medium text-brand">Webinars &amp; Videos</span>
                  </a>
                  <a href="https://events.uniteus.com" class="-m-3 p-3 flex items-start rounded-lg hover:bg-light menu_click">
                    <span class="text-base font-medium text-brand">Events</span>
                  </a>
                  <a href="https://uniteus.com/press" class="-m-3 p-3 flex items-start rounded-lg hover:bg-light menu_click">
                    <span class="text-base font-medium text-brand">Newsroom</span>
                  </a>
                  <a href="https://uniteus.com/studies-and-data" class="-m-3 p-3 flex items-start rounded-lg hover:bg-light menu_click">
                    <span class="text-base font-medium text-brand">Studies &amp; Data</span>
                  </a>
                  <a href="https://uniteus.com/knowledge-hub/" class="-m-3 p-3 flex items-start rounded-lg hover:bg-light menu_click">
                    <span class="text-base font-medium text-brand">View all resources</span>
                  </a>
                </div>
              </div>
            </div>
          </li>

          <!-- COMPANY -->
          <li class="relative py-2" x-data="{ isOpen: false }">
            <button type="button" class="text-left w-full" @click="isOpen = !isOpen">
              <div class="flex items-center justify-between">
                <span class="text-base font-medium text-brand">Company</span>
                <svg width="21" height="20" viewBox="0 0 21 20" xmlns="http://www.w3.org/2000/svg"
                  class="transition-transform duration-300"
                  :class="isOpen ? 'rotate-180 text-blue-500' : 'rotate-0 text-gray-500'">
                  <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M6.2177 7.29289C6.60822 6.90237 7.24139 6.90237 7.63191 7.29289L10.9248 10.5858L14.2177 7.29289C14.6082 6.90237 15.2414 6.90237 15.6319 7.29289C16.0224 7.68342 16.0224 8.31658 15.6319 8.70711L11.6319 12.7071C11.2414 13.0976 10.6082 13.0976 10.2177 12.7071L6.2177 8.70711C5.82717 8.31658 5.82717 7.68342 6.2177 7.29289Z"
                    :fill="isOpen ? '#2563EB' : '#9CA3AF'" />
                </svg>
              </div>
            </button>

            <div class="relative overflow-hidden transition-all max-h-0 duration-700"
              x-ref="container"
              x-bind:style="isOpen ? 'max-height: ' + $refs.container.scrollHeight + 'px' : ''">
              <div class="overflow-hidden">
                <div class="relative grid gap-6 rounded-lg bg-light mb-2 mt-6 px-5 py-6 sm:gap-8 sm:p-8">
                  <a href="https://uniteus.com/about-unite-us/" class="-m-3 p-3 flex items-start rounded-lg hover:bg-light menu_click">
                    <span class="text-base font-medium text-brand">About</span>
                  </a>
                  <a href="https://uniteus.com/team/" class="-m-3 p-3 flex items-start rounded-lg hover:bg-light menu_click">
                    <span class="text-base font-medium text-brand">Team</span>
                  </a>
                  <a href="https://uniteus.com/our-careers/" class="-m-3 p-3 flex items-start rounded-lg hover:bg-light menu_click">
                    <span class="text-base font-medium text-brand">Careers</span>
                  </a>
                  <a href="https://uniteus.com/loyalty-referral/" class="-m-3 p-3 flex items-start rounded-lg hover:bg-light menu_click">
                    <span class="text-base font-medium text-brand">Referral</span>
                  </a>
                  <a href="https://uniteus.com/channel-partner/" class="-m-3 p-3 flex items-start rounded-lg hover:bg-light menu_click">
                    <span class="text-base font-medium text-brand">Channel Partners</span>
                  </a>
                  <a href="https://uniteus.com/networks/" class="-m-3 p-3 flex items-start rounded-lg hover:bg-light menu_click">
                    <span class="text-base font-medium text-brand">Networks</span>
                  </a>
                </div>
              </div>
            </div>
          </li>

        </ul>
      </div>
    </div>

    <!-- Bottom CTAs -->
    <div class="py-6 px-5 space-y-6">
      <a href="https://uniteus.com/demo/" class="button button-solid !rounded-full">Get Started
      </a>
      <p class="mt-6 text-center text-base font-medium">
        Have an account already?
        <a href="https://app.uniteus.io/">Log in</a>
      </p>
    </div>

  </div>
</div>

    </div>
  </div>
</div>

  </div>
<style>
  /* ========================
     GLOBAL TWEAKS
     ======================== */
  .menu-wrapper .solutions-menu-item:first-child .sub-sub-sub-menu { padding-left: 2.25rem; }
  .menu-wrapper .solutions-menu-item:first-child .sub-sub-sub-menu .caret { filter: brightness(0) invert(1); }
  .menu-wrapper .solutions-menu-item:nth-child(2) .sub-sub-sub-menu { padding-left: 4rem; }

  /* hover-intent: when parent has this class, keep panel open (overrides .hidden) */
  .hover-intent .menu-wrapper { display: block; }

  /* ========================
     DESKTOP MEGA MENUS
     ======================== */
  @media (min-width: 1024px) {

    /* TOP-LEVEL TABS */
    .solutions, .resources, .company {
      height: 80px;
      width: 170px;
      display: flex;
      justify-content: center;
      margin-left: 0 !important;
    }

    .solutions > a, .resources > a, .company > a {
      border-bottom: 5px solid #ffffff;
      border-radius: 0;
      font-weight: 600;
    }

    .solutions:hover > a, .resources:hover > a, .company:hover > a {
      color: #226cff;
      border-bottom: 5px solid #226cff;
      border-radius: 0;
    }

    .solutions > a svg, .resources > a svg, .company > a svg { transition: 0.3s ease-in-out; }
    .solutions:hover > a svg, .resources:hover > a svg, .company:hover > a svg { transform: rotate(180deg); }

    .solutions .menu-wrapper-inner,
    .resources .menu-wrapper-inner,
    .company .menu-wrapper-inner {
      border-bottom-left-radius: 1rem;
      border-bottom-right-radius: 1rem;
      box-shadow: 0 0px 5px -1px #c9c9c9;
    }

    /* Fade panel in/out */
    .desktop-nav .nav-panel {
      display: block;
      opacity: 0;
      pointer-events: none;
      transform: translateY(0);
      transition: opacity 140ms ease-out, transform 140ms ease-out;
    }

    .desktop-nav .hover-intent .nav-panel {
      opacity: 1;
      pointer-events: auto;
      transform: translateY(0);
    }

    /* ===== COMPANY ===== */
    .company-menu {
      max-width: 80rem;
      margin: 0 auto;
      display: grid;
      grid-template-columns: minmax(400px, 500px) minmax(0, 1fr);
      gap: 3rem;
      padding: 2.5rem 2.5rem 3rem;
      align-items: stretch;
    }
    .company-links { display: flex; flex-direction: column; }
    .company-title {
      letter-spacing: 0.08em; font-weight: 700; text-transform: uppercase;
      color: #b9c2d2; margin-bottom: 1.75rem; font-size: 0.85rem;
    }
    .company-links-grid {
      display: grid;
      grid-template-columns: repeat(2, minmax(0, 1fr));
      column-gap: 3rem;
      row-gap: 1.5rem;
    }
    .company-link { display: inline-flex; align-items: center; gap: 0.75rem; text-decoration: none; }
    .company-link-icon { border-radius: 999px; display:flex; justify-content:center; align-items:center; flex-shrink:0; }
    .company-link-label { font-weight: 600; color: #2C405A; }
    .company-link:hover .company-link-label { color: #226cff; }

    .company-award { display:flex; align-items: stretch; }
    .company-award-card {
      position: relative;
      border-radius: 1rem;
      padding: 2.5rem 3.25rem 2.5rem 3rem;
      background: radial-gradient(circle at 0% 0%, #312e81 0%, #4c1d95 45%, #6721a6 100%);
      color: #fff;
      display:flex;
      flex-direction:column;
      justify-content:center;
      overflow:hidden;
      min-height:240px;
    }
    .company-award-badge {
      display:inline-flex; align-items:center; justify-content:center;
      padding: 0.25rem 1rem; border-radius:999px;
      background-color: rgb(255 255 255 / 15%);
      font-size: 0.8rem; font-weight:600;
      letter-spacing: 0.03em;
      margin-bottom: 1.25rem;
      align-self:flex-start;
      max-width:max-content;
      gap:0.4rem;
    }
    .company-award-badge-icon { display:inline-flex; align-items:center; justify-content:center; width:18px; height:18px; }
    .company-award-badge-icon img { display:block; width:100%; height:100%; filter: invert(1); }
    .company-award-heading { font-size: 1.5rem; }
    .company-award-cta {
      display:inline-flex; align-items:center; justify-content:center;
      font-size:0.95rem; font-weight:600;
      padding:0.75rem 1.75rem;
      border-radius:0.75rem;
      background:#fff; color:#4c1d95;
      text-decoration:none;
      box-shadow: 0 8px 18px rgba(15,23,42,0.25);
      width: 15rem;
    }
    .company-award-cta:hover { background:#f3f4f6; }
    .company-award-mark {
      position:absolute;
      right:-0.5rem; bottom:-1.2rem;
      width:12rem; height:12rem;
      filter: invert(1);
      background-repeat:no-repeat;
      background-size:contain;
      background-position:center;
      opacity:0.25;
      pointer-events:none;
    }

    /* ===== RESOURCES ===== */
    .resources-menu {
      max-width: 80rem;
      margin: 0 auto;
      display: grid;
      grid-template-columns: 400px minmax(0, 1fr);
      gap: 3rem;
      padding: 2.5rem 2.5rem 3rem;
      background-color: #fff;
    }
    .resources-links { display:flex; flex-direction:column; }
    .resources-title {
      letter-spacing: 0.08em; font-weight:700; text-transform:uppercase;
      color:#b9c2d2; margin-bottom:1.75rem; font-size:0.85rem;
    }
    .resources-links-column { display:flex; flex-direction:column; gap:1.5rem; margin-bottom:1.75rem; }
    .resources-link { display:inline-flex; align-items:center; gap:0.75rem; text-decoration:none; }
    .resources-icon { border-radius:999px; display:flex; justify-content:center; align-items:center; flex-shrink:0; }
    .resources-label { font-weight:600; color:#2C405A; }
    .resources-link:hover .resources-label { color:#226cff; }
    .resources-view-all {
      display:inline-flex; align-items:center; gap:0.35rem;
      margin-top:1.5rem;
      font-size:0.95rem; font-weight:600;
      color:#2563eb; text-decoration:none;
    }
    .resources-view-all-arrow { display:inline-block; font-size:1rem; transform: translateX(0); transition: transform 160ms ease-out; }
    .resources-view-all:hover .resources-view-all-arrow { transform: translateX(4px); }

    .resources-feature { display:flex; align-items:stretch; }
    .resources-feature-card {
      width:100%;
      border-radius:1rem;
      background:#f1f5f9;
      display:grid;
      grid-template-columns: minmax(0, 1.3fr) minmax(0, 1fr);
      overflow:hidden;
      min-height:260px;
      border:1px solid #d1ddec;
    }
    .resources-feature-content {
      padding: 2.25rem 2.5rem;
      display:flex;
      flex-direction:column;
      justify-content:center;
    }
    .resources-feature-eyebrow {
      display:inline-flex; align-items:center; gap:0.4rem;
      letter-spacing:0.08em; font-weight:700; text-transform:uppercase;
      color:#2563eb; margin-bottom:1rem; font-size:0.85rem;
    }
    .resources-feature-eyebrow-icon img {
      width:18px; height:18px; display:block;
      filter: brightness(0) saturate(100%) invert(39%) sepia(97%) saturate(2500%) hue-rotate(217deg) brightness(99%) contrast(102%);
    }
    .resources-feature-heading { font-size:1.4rem; line-height:1.35; font-weight:700; color:#111827; margin-bottom:0.9rem; max-width:26rem; }
    .resources-feature-text { font-size:0.95rem; line-height:1.6; color:#4b5563; max-width:25rem; margin-bottom:1.4rem; }
    .resources-feature-cta { display:inline-flex; align-items:center; gap:0.35rem; font-size:0.95rem; font-weight:600; color:#2563eb; text-decoration:none; }
    .resources-feature-cta-arrow { display:inline-block; font-size:1.05rem; transform: translateX(0); transition: transform 160ms ease-out; }
    .resources-feature-cta:hover .resources-feature-cta-arrow { transform: translateX(4px); }
    .resources-feature-image { position:relative; overflow:hidden; }
    .resources-feature-image-img { width:100%; height:100%; object-fit:cover; display:block; transition: transform 220ms ease-out; transform-origin:center; }
    .resources-feature-card:hover .resources-feature-image-img { transform: scale(1.06); }

    /* ===== SOLUTIONS ===== */
    .solutions-menu {
      max-width: 80rem;
      margin: 0 auto;
      display: grid;
      grid-template-columns: minmax(250px, 350px) minmax(420px, 600px) minmax(250px, 300px);
      column-gap: 3rem;
      padding: 0;
    }
    .solutions-col { align-self: stretch; }
    .solutions-title {
      letter-spacing: 0.08em; font-weight:700; text-transform:uppercase;
      color:#b9c2d2; margin-bottom:1.75rem; display:block; font-size:0.85rem;
    }

    .solutions-industry {
      padding: 2rem 1rem;
      background:#f8fafc;
      display:flex; flex-direction:column;
    }
    .solutions-industry-list { display:flex; flex-direction:column; gap:0.5rem; }
    .solutions-industry-link {
      display:inline-flex; align-items:center; gap:0.75rem;
      text-decoration:none;
      border-radius:0.75rem;
      transition: background-color 160ms ease-out, color 160ms ease-out;
      padding: 0.5rem 1rem;
    }
    .solutions-industry-label { font-size:0.95rem; font-weight:600; color:#2C405A; }
    .solutions-industry-link:hover { background:#fff; }
    .solutions-industry-link:hover .solutions-industry-label { color:#226cff; }

    .solutions-product { padding:2rem; display:flex; flex-direction:column; }
    .solutions-product-groups {
      display:grid;
      grid-template-columns: repeat(2, minmax(0, 1fr));
      column-gap: 3rem;
      row-gap: 1.75rem;
    }
    .solutions-product-heading-row { display:flex; align-items:center; gap:0.75rem; margin-bottom:0.75rem; padding-top:0.5rem; }
    .solutions-product-heading { font-size:0.95rem; font-weight:700; color:#2C405A; }
    .solutions-product-list { display:flex; flex-direction:column; gap:1rem; padding-left:2.75rem; }
    .solutions-product-link { font-size:0.9rem; color:#4b5563; text-decoration:none; line-height:1.25; transition: color 160ms ease-out; }
    .solutions-product-link:hover { color:#2563eb; }

    .solutions-usecases { display:flex; justify-content:flex-end; }
    .solutions-usecases-card {
      background:#f1f5f9;
      border-radius:0;
      padding:2rem 1rem;
      display:flex; flex-direction:column;
      width:100%;
    }
    .solutions-usecases-title {
      letter-spacing:0.08em; font-weight:700; text-transform:uppercase;
      color:#2663eb;
      margin-bottom:1.75rem;
      font-size:0.85rem;
      padding-left:1rem;
    }
    .solutions-usecases-list { display:flex; flex-direction:column; gap:0.5rem; }
    .solutions-usecase-item {
      display:flex; align-items:flex-start; gap:0.75rem;
      text-decoration:none; color:#111827;
      border-radius:0.75rem;
      transition: background-color 160ms ease-out, color 160ms ease-out;
      padding: 0.5rem 1rem;
    }
    .solutions-usecase-label { font-size:0.95rem; font-weight:500; }
    .solutions-usecase-item:hover { background:#fff; }
    .solutions-usecase-item:hover .solutions-usecase-label { color:#226cff; }

    .solutions-usecase-text { display:flex; gap:0.5rem; flex-wrap:wrap; align-items:center; }
    .solutions-usecase-pill {
      display:inline-flex; align-items:center;
      padding:0rem 0.5rem; border-radius:0.25rem;
      background:#dfccfd;
      font-size:0.7rem; font-weight:700;
      letter-spacing:0.06em; text-transform:uppercase;
      color:#2b405a;
    }

    .menu-icon-img {
      width: 1.5rem; height: 1.5rem;
      object-fit: contain; display:block;
      filter: brightness(0) saturate(0) invert(80%);
    }
    .menu_click:hover .menu-icon-img {
      filter: brightness(0) saturate(100%) invert(39%) sepia(97%) saturate(2500%) hue-rotate(217deg) brightness(99%) contrast(102%);
    }
    .solutions .menu-icon-img {
      filter: brightness(0) saturate(100%) invert(39%) sepia(97%) saturate(2500%) hue-rotate(217deg) brightness(99%) contrast(102%);
    }
  }
</style>
