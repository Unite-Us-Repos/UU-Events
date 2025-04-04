<link rel='stylesheet' id='app/0-css' href='https://uniteustaildev.wpengine.com/wp-content/themes/uniteus-sage/public/app.35e859.css' media='all' />

<div class="z-50" x-data="{ showSearchModal: false, showMobileMenu: false, isSticky: false, alertHeight: 0 }" x-init="alertHeight = $refs.alert ? $refs.alert.offsetHeight : 0;
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

  <div id="nav" x-ref="nav" class="top-nav bg-white">
    <div class="mx-auto">
      <div class="flex relative justify-between items-center max-w-7xl mx-auto px-8 lg:justify-start">
        <div class="flex justify-start py-4 lg:py-0 lg:w-0 lg:flex-1">
          <a href="/">
            <span class="sr-only">Main menu</span>
            <img fetchpriority="high" src="https://uniteus.com/wp-content/themes/uniteus-sage/public/images/unite-us-logo.svg" alt="Unite Us" width="192" height="48"/>
          </a>
        </div>
        <div class="lg:hidden -mr-2 -my-2 flex items-center gap-3">
          <!-- Trigger for Search Modal -->
          <button type="button" @click="showSearchModal = true" class="rounded-lg flex items-center justify-center">
            <span class="sr-only">Search site</span>
            <img src="https://uniteus.com/wp-content/themes/uniteus-sage/public/images/nav-search.svg" alt="" width="20" height="20"/>
          </button>

          <!-- Trigger for Mobile Menu -->
          <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-action" @click="showMobileMenu = !showMobileMenu" aria-expanded="false" :aria-expanded="showMobileMenu.toString()">
            <span class="sr-only">Open menu</span>
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
          </button>
        </div>
        <!-- Desktop Menu -->
        <nav class="hidden lg:flex items-center space-x-5 xl:space-x-10 desktop-nav">
          <div class="relative group flex desktop-only solutions ">
            <a href="#" class="group bg-white rounded-md inline-flex items-center text-base font-medium hover:text-brand focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-action text-brand menu_click">
              <span>Solutions</span>
              <svg width="21" height="20" viewbox="0 0 21 20" xmlns="http://www.w3.org/2000/svg" class="transition-colors duration-300 fill-gray-500 group-hover:fill-action">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.2177 7.29289C6.60822 6.90237 7.24139 6.90237 7.63191 7.29289L10.9248 10.5858L14.2177 7.29289C14.6082 6.90237 15.2414 6.90237 15.6319 7.29289C16.0224 7.68342 16.0224 8.31658 15.6319 8.70711L11.6319 12.7071C11.2414 13.0976 10.6082 13.0976 10.2177 12.7071L6.2177 8.70711C5.82717 8.31658 5.82717 7.68342 6.2177 7.29289Z"/>
              </svg>
            </a>
            <div class="menu-wrapper absolute hidden group-focus:block group-hover:block z-50 left-1/2 transform -translate-x-1/2 mt-0 w-screen px-0 bg-white">
              <div class="menu-wrapper-inner overflow-hidden">
                <div class="menu-item-wrapper relative grid gap-8 p-12  solutions-menu-item-wrapper ">
                  <div class="menu-item relative group  solutions-menu-item ">
                    <a href="https://uniteus.com/industries/" class="flex -m-3 p-3 menu_click industries">
                      <span class="text-base font-semibold text-brand hover:text-action">Industries</span>
                    </a>
                    <div class="sub-sub-menu-wrapper absolute hidden group-focus:block group-hover:block z-50 left-0 top-8 mt-0 sm:px-0">
                      <div class="overflow-hidden">
                        <div class="sub-sub-menu relative flex flex-col gap-6 pr-8 pb-8 pt-4">
                          <a href="https://uniteus.com/industries/government/" class="-m-3 p-3 flex items-start menu_click ">

                            <div class="sub-sub-icon mr-2">
                              <img src="https://uniteus.com/wp-content/uploads/2025/01/Vector.svg" alt="Government icon" class="w-5 h-5 mr-2"/>
                            </div>
                            <div class="sub-sub-item">
                              <span class="text-base font-bold text-brand hover:text-action">Government</span>
                            </div>
                          </a>

                          <a href="https://uniteus.com/industries/providers/" class="-m-3 p-3 flex items-start menu_click ">

                            <div class="sub-sub-icon mr-2">
                              <img src="https://uniteus.com/wp-content/uploads/2025/01/Group.svg" alt="Providers icon" class="w-5 h-5 mr-2"/>
                            </div>
                            <div class="sub-sub-item">
                              <span class="text-base font-bold text-brand hover:text-action">Providers</span>
                            </div>
                          </a>

                          <a href="https://uniteus.com/industries/payers/" class="-m-3 p-3 flex items-start menu_click ">

                            <div class="sub-sub-icon mr-2">
                              <img src="https://uniteus.com/wp-content/uploads/2025/01/Group-28-1.svg" alt="Payers icon" class="w-5 h-5 mr-2"/>
                            </div>
                            <div class="sub-sub-item">
                              <span class="text-base font-bold text-brand hover:text-action">Payers</span>
                            </div>
                          </a>

                          <a href="https://uniteus.com/industries/community/" class="-m-3 p-3 flex items-start menu_click ">

                            <div class="sub-sub-icon mr-2">
                              <img src="https://uniteus.com/wp-content/uploads/2025/01/NP-icon.svg" alt="Community-Based Organizations icon" class="w-5 h-5 mr-2"/>
                            </div>
                            <div class="sub-sub-item">
                              <span class="text-base font-bold text-brand hover:text-action">Community-Based Organizations</span>
                            </div>
                          </a>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="menu-item relative group  solutions-menu-item ">
                    <a href="https://uniteus.com/products/" class="flex -m-3 p-3 menu_click products">
                      <span class="text-base font-semibold text-brand hover:text-action">Products</span>
                    </a>
                    <div class="sub-sub-menu-wrapper absolute hidden group-focus:block group-hover:block z-50 left-0 top-8 mt-0 sm:px-0">
                      <div class="overflow-hidden">
                        <div class="sub-sub-menu relative flex flex-col gap-6 pr-8 pb-8 pt-4">
                          <a href="https://uniteus.com/products/closed-loop-referral-system/" class="-m-3 p-3 flex items-start menu_click ">

                            <div class="sub-sub-icon mr-2">
                              <img src="https://uniteus.com/wp-content/uploads/2025/01/Background.svg" alt="Closed-Loop Referral System icon" class="w-5 h-5 mr-2"/>
                            </div>
                            <div class="sub-sub-item">
                              <span class="text-base font-bold text-brand hover:text-action">Closed-Loop Referral System</span>
                              <div class="description text-xs text-gray-500 mt-2">
                                Send and receive secure closed-loop referrals.
                              </div>
                            </div>
                          </a>

                          <a href="https://uniteus.com/products/social-care-data/" class="-m-3 p-3 flex items-start menu_click ">

                            <div class="sub-sub-icon mr-2">
                              <img src="https://uniteus.com/wp-content/uploads/2025/01/Background-1.svg" alt="Predictive Analytics icon" class="w-5 h-5 mr-2"/>
                            </div>
                            <div class="sub-sub-item">
                              <span class="text-base font-bold text-brand hover:text-action">Predictive Analytics</span>
                              <div class="description text-xs text-gray-500 mt-2">
                                Unlock social care data for better decision-making
                              </div>
                            </div>
                          </a>

                          <a href="https://uniteus.com/products/social-care-revenue-cycle-management/" class="-m-3 p-3 flex items-start menu_click ">

                            <div class="sub-sub-icon mr-2">
                              <img src="https://uniteus.com/wp-content/uploads/2025/01/Background-2.svg" alt="Social Care Revenue Cycle Management icon" class="w-5 h-5 mr-2"/>
                            </div>
                            <div class="sub-sub-item">
                              <span class="text-base font-bold text-brand hover:text-action">Social Care Revenue Cycle Management</span>
                              <div class="description text-xs text-gray-500 mt-2">
                                Simplify social care reimbursement at scale
                              </div>
                            </div>
                          </a>

                          <a href="https://uniteus.com/products/resource-directory/" class="-m-3 p-3 flex items-start menu_click ">

                            <div class="sub-sub-icon mr-2">
                              <img src="https://uniteus.com/wp-content/uploads/2025/01/Background-3.svg" alt="Resource Directory icon" class="w-5 h-5 mr-2"/>
                            </div>
                            <div class="sub-sub-item">
                              <span class="text-base font-bold text-brand hover:text-action">Resource Directory</span>
                              <div class="description text-xs text-gray-500 mt-2">
                                Find and share trusted social care resources
                              </div>
                            </div>
                          </a>

                          <a href="https://uniteus.com/products/care-coordination-services/" class="-m-3 p-3 flex items-start menu_click ">

                            <div class="sub-sub-icon mr-2">
                              <img src="https://uniteus.com/wp-content/uploads/2025/01/Background-4.svg" alt="Care Coordination icon" class="w-5 h-5 mr-2"/>
                            </div>
                            <div class="sub-sub-item">
                              <span class="text-base font-bold text-brand hover:text-action">Care Coordination</span>
                              <div class="description text-xs text-gray-500 mt-2">
                                Increase your capacity to coordinate social care
                              </div>
                            </div>
                          </a>

                          <a href="https://uniteus.com/products/professional-services/" class="-m-3 p-3 flex items-start menu_click ">

                            <div class="sub-sub-icon mr-2">
                              <img src="https://uniteus.com/wp-content/uploads/2025/01/Background-5.svg" alt="Managed Services icon" class="w-5 h-5 mr-2"/>
                            </div>
                            <div class="sub-sub-item">
                              <span class="text-base font-bold text-brand hover:text-action">Managed Services</span>
                              <div class="description text-xs text-gray-500 mt-2">
                                Tap into comprehensive services for better outcomes
                              </div>
                            </div>
                          </a>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div>
          <div class="relative group flex mobile-only ">
            <a href="https://uniteus.com/industries/" class="group bg-white rounded-md inline-flex items-center text-base font-medium hover:text-brand focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-action text-brand menu_click">
              <span>Industries</span>
              <svg width="21" height="20" viewbox="0 0 21 20" xmlns="http://www.w3.org/2000/svg" class="transition-colors duration-300 fill-gray-500 group-hover:fill-action">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.2177 7.29289C6.60822 6.90237 7.24139 6.90237 7.63191 7.29289L10.9248 10.5858L14.2177 7.29289C14.6082 6.90237 15.2414 6.90237 15.6319 7.29289C16.0224 7.68342 16.0224 8.31658 15.6319 8.70711L11.6319 12.7071C11.2414 13.0976 10.6082 13.0976 10.2177 12.7071L6.2177 8.70711C5.82717 8.31658 5.82717 7.68342 6.2177 7.29289Z"/>
              </svg>
            </a>
            <div class="menu-wrapper absolute hidden group-focus:block group-hover:block z-50 left-1/2 transform -translate-x-1/2 mt-0 w-screen px-0 bg-white">
              <div class="menu-wrapper-inner overflow-hidden">
                <div class="menu-item-wrapper relative grid gap-8 p-12 ">
                  <div class="menu-item relative group ">
                    <a href="https://uniteus.com/industries/government/" class="flex -m-3 p-3 menu_click ">
                      <span class="text-base font-semibold text-brand hover:text-action">Government</span>
                    </a>
                  </div>
                  <div class="menu-item relative group ">
                    <a href="https://uniteus.com/industries/providers/" class="flex -m-3 p-3 menu_click ">
                      <span class="text-base font-semibold text-brand hover:text-action">Providers</span>
                    </a>
                  </div>
                  <div class="menu-item relative group ">
                    <a href="https://uniteus.com/industries/payers/" class="flex -m-3 p-3 menu_click ">
                      <span class="text-base font-semibold text-brand hover:text-action">Payers</span>
                    </a>
                  </div>
                  <div class="menu-item relative group ">
                    <a href="https://uniteus.com/industries/community/" class="flex -m-3 p-3 menu_click ">
                      <span class="text-base font-semibold text-brand hover:text-action">Community-Based Organizations</span>
                    </a>
                  </div>
                </div>

              </div>

            </div>
          </div>
          <div class="relative group flex mobile-only ">
            <a href="https://uniteus.com/products/" class="group bg-white rounded-md inline-flex items-center text-base font-medium hover:text-brand focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-action text-brand menu_click">
              <span>Products</span>
              <svg width="21" height="20" viewbox="0 0 21 20" xmlns="http://www.w3.org/2000/svg" class="transition-colors duration-300 fill-gray-500 group-hover:fill-action">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.2177 7.29289C6.60822 6.90237 7.24139 6.90237 7.63191 7.29289L10.9248 10.5858L14.2177 7.29289C14.6082 6.90237 15.2414 6.90237 15.6319 7.29289C16.0224 7.68342 16.0224 8.31658 15.6319 8.70711L11.6319 12.7071C11.2414 13.0976 10.6082 13.0976 10.2177 12.7071L6.2177 8.70711C5.82717 8.31658 5.82717 7.68342 6.2177 7.29289Z"/>
              </svg>
            </a>
            <div class="menu-wrapper absolute hidden group-focus:block group-hover:block z-50 left-1/2 transform -translate-x-1/2 mt-0 w-screen px-0 bg-white">
              <div class="menu-wrapper-inner overflow-hidden">
                <div class="menu-item-wrapper relative grid gap-8 p-12 ">
                  <div class="menu-item relative group ">
                    <a href="https://uniteus.com/products/closed-loop-referral-system/" class="flex -m-3 p-3 menu_click ">
                      <span class="text-base font-semibold text-brand hover:text-action">Closed-Loop Referral System</span>
                    </a>
                  </div>
                  <div class="menu-item relative group ">
                    <a href="https://uniteus.com/products/social-care-data/" class="flex -m-3 p-3 menu_click ">
                      <span class="text-base font-semibold text-brand hover:text-action">Predictive Analytics</span>
                    </a>
                  </div>
                  <div class="menu-item relative group ">
                    <a href="https://uniteus.com/products/social-care-revenue-cycle-management/" class="flex -m-3 p-3 menu_click ">
                      <span class="text-base font-semibold text-brand hover:text-action">Social Care Revenue Cycle Management</span>
                    </a>
                  </div>
                  <div class="menu-item relative group ">
                    <a href="https://uniteus.com/products/resource-directory/" class="flex -m-3 p-3 menu_click ">
                      <span class="text-base font-semibold text-brand hover:text-action">Resource Directory</span>
                    </a>
                  </div>
                  <div class="menu-item relative group ">
                    <a href="https://uniteus.com/products/care-coordination-services/" class="flex -m-3 p-3 menu_click ">
                      <span class="text-base font-semibold text-brand hover:text-action">Care Coordination</span>
                    </a>
                  </div>
                  <div class="menu-item relative group ">
                    <a href="https://uniteus.com/products/professional-services/" class="flex -m-3 p-3 menu_click ">
                      <span class="text-base font-semibold text-brand hover:text-action">Managed Services</span>
                    </a>
                  </div>
                </div>

              </div>

            </div>
          </div>
          <div class="relative group flex resources ">
            <a href="#" class="group bg-white rounded-md inline-flex items-center text-base font-medium hover:text-brand focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-action text-brand menu_click">
              <span>Resources</span>
              <svg width="21" height="20" viewbox="0 0 21 20" xmlns="http://www.w3.org/2000/svg" class="transition-colors duration-300 fill-gray-500 group-hover:fill-action">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.2177 7.29289C6.60822 6.90237 7.24139 6.90237 7.63191 7.29289L10.9248 10.5858L14.2177 7.29289C14.6082 6.90237 15.2414 6.90237 15.6319 7.29289C16.0224 7.68342 16.0224 8.31658 15.6319 8.70711L11.6319 12.7071C11.2414 13.0976 10.6082 13.0976 10.2177 12.7071L6.2177 8.70711C5.82717 8.31658 5.82717 7.68342 6.2177 7.29289Z"/>
              </svg>
            </a>
            <div class="menu-wrapper absolute hidden group-focus:block group-hover:block z-50 left-1/2 transform -translate-x-1/2 mt-0 w-screen px-0 bg-white">
              <div class="menu-wrapper-inner overflow-hidden">
                <div class="menu-item-wrapper relative grid gap-8 p-12 ">
                  <div class="menu-item relative group ">
                    <a href="https://uniteus.com/blog" class="flex -m-3 p-3 menu_click ">
                      <img src="https://uniteus.com/wp-content/uploads/2025/01/Background-6.svg" alt="Blogs icon" class="w-8 h-8 mr-2"/>
                      <span class="text-base font-semibold text-brand hover:text-action">Blogs</span>
                      <div class="description text-sm text-gray-500 mt-2">
                        Read insights and stories across our community
                      </div>
                    </a>
                  </div>
                  <div class="menu-item relative group ">
                    <a href="https://events.uniteus.com" class="flex -m-3 p-3 menu_click ">
                      <img src="https://uniteus.com/wp-content/uploads/2025/01/Background-7.svg" alt="Events icon" class="w-8 h-8 mr-2"/>
                      <span class="text-base font-semibold text-brand hover:text-action">Events</span>
                      <div class="description text-sm text-gray-500 mt-2">
                        Join us at webinars, workshops, and more
                      </div>
                    </a>
                  </div>
                  <div class="menu-item relative group ">
                    <a href="https://uniteus.com/report" class="flex -m-3 p-3 menu_click ">
                      <img src="https://uniteus.com/wp-content/uploads/2025/01/Background-8.svg" alt="Reports icon" class="w-8 h-8 mr-2"/>
                      <span class="text-base font-semibold text-brand hover:text-action">Reports</span>
                      <div class="description text-sm text-gray-500 mt-2">
                        Access in-depth studies and data
                      </div>
                    </a>
                  </div>
                  <div class="menu-item relative group ">
                    <a href="https://uniteus.com/webinar" class="flex -m-3 p-3 menu_click ">
                      <img src="https://uniteus.com/wp-content/uploads/2025/01/Background-9.svg" alt="Videos icon" class="w-8 h-8 mr-2"/>
                      <span class="text-base font-semibold text-brand hover:text-action">Videos</span>
                      <div class="description text-sm text-gray-500 mt-2">
                        Watch webinars, testimonials, and success stories
                      </div>
                    </a>
                  </div>
                  <div class="menu-item relative group ">
                    <a href="https://uniteus.com/press" class="flex -m-3 p-3 menu_click ">
                      <img src="https://uniteus.com/wp-content/uploads/2025/01/Background-10.svg" alt="Newsroom icon" class="w-8 h-8 mr-2"/>
                      <span class="text-base font-semibold text-brand hover:text-action">Newsroom</span>
                      <div class="description text-sm text-gray-500 mt-2">
                        Stay updated with our latest news
                      </div>
                    </a>
                  </div>
                </div>

                <div class="bg-gray-200 px-5 pt-4 pb-4 pl-12 view-all">
                  <p class="text-base flex">
                    <a href="https://uniteus.com/knowledge-hub/" class="menu-arrow text-gray-700 flex items-center gap-4 font-semibold ">View All Resources
                      <svg width="16" height="14" viewbox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.26562 1.19189L14.0739 7.00013L8.26562 12.8084" stroke="#216CFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M14.0744 6.99951L1.71777 6.99951" stroke="#216CFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                    </a>
                  </p>
                </div>
              </div>

              <div class="featured-block relative bg-cover bg-center p-4 px-8" style="background-image: url('https://uniteus.com/wp-content/uploads/2025/01/medicaid-advantage-menu-4.png');">
                <div class="wrapper relative z-10 flex flex-col items-start">
                  <div class="pill p-1 rounded-full flex items-center gap-2">
                    <span class="tracking-2px bg-dark text-white px-2 py-1 rounded-full uppercase font-semibold">Webinar</span>
                    <span class="text-white flex items-center pr-4 gap-2">Featured Event
                      <svg width="15" height="12" viewbox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.8331 1.04004L13.6695 5.87642M13.6695 5.87642L8.8331 10.7128M13.6695 5.87642L0.772461 5.87642" stroke="white" stroke-width="0.905178" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                    </span>
                  </div>
                  <a href="https://uniteus.com/webinar/medicare-advantage-uncovered/" class=" menu-arrow btn bg-white text-dark font-semibold rounded-md">
                    Watch Now
                    <svg width="12" height="9" viewbox="0 0 12 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M7.43219 0.887695L11.0747 4.53021M11.0747 4.53021L7.43219 8.17273M11.0747 4.53021L1.36133 4.53021" stroke="#2C405A" stroke-opacity="0.5" stroke-width="1.25793" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                  </a>
                </div>
              </div>

            </div>
          </div>
          <div class="relative group flex company ">
            <a href="#" class="group bg-white rounded-md inline-flex items-center text-base font-medium hover:text-brand focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-action text-brand menu_click">
              <span>Company</span>
              <svg width="21" height="20" viewbox="0 0 21 20" xmlns="http://www.w3.org/2000/svg" class="transition-colors duration-300 fill-gray-500 group-hover:fill-action">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.2177 7.29289C6.60822 6.90237 7.24139 6.90237 7.63191 7.29289L10.9248 10.5858L14.2177 7.29289C14.6082 6.90237 15.2414 6.90237 15.6319 7.29289C16.0224 7.68342 16.0224 8.31658 15.6319 8.70711L11.6319 12.7071C11.2414 13.0976 10.6082 13.0976 10.2177 12.7071L6.2177 8.70711C5.82717 8.31658 5.82717 7.68342 6.2177 7.29289Z"/>
              </svg>
            </a>
            <div class="menu-wrapper absolute hidden group-focus:block group-hover:block z-50 left-1/2 transform -translate-x-1/2 mt-0 w-screen px-0 bg-white">
              <div class="menu-wrapper-inner overflow-hidden">
                <div class="menu-item-wrapper relative grid gap-8 p-12 ">
                  <div class="menu-item relative group ">
                    <a href="https://uniteus.com/about-us/" class="flex -m-3 p-3 menu_click ">
                      <img src="https://uniteus.com/wp-content/uploads/2025/01/Background-11.svg" alt="About Us icon" class="w-8 h-8 mr-2"/>
                      <span class="text-base font-semibold text-brand hover:text-action">About Us</span>
                    </a>
                  </div>
                  <div class="menu-item relative group ">
                    <a href="https://uniteus.com/networks/" class="flex -m-3 p-3 menu_click ">
                      <img src="https://uniteus.com/wp-content/uploads/2025/01/Background-12.svg" alt="Networks icon" class="w-8 h-8 mr-2"/>
                      <span class="text-base font-semibold text-brand hover:text-action">Networks</span>
                    </a>
                  </div>
                  <div class="menu-item relative group ">
                    <a href="https://uniteus.com/team/" class="flex -m-3 p-3 menu_click ">
                      <img src="https://uniteus.com/wp-content/uploads/2025/01/Background-13.svg" alt="Team icon" class="w-8 h-8 mr-2"/>
                      <span class="text-base font-semibold text-brand hover:text-action">Team</span>
                    </a>
                  </div>

                  <div class="menu-item relative group ">
                    <a href="https://uniteus.com.com/channel-partner/" class="flex -m-3 p-3 menu_click ">
                      <img src="https://uniteustailstg.wpengine.com/wp-content/uploads/2025/01/Background-5.svg" alt="Channel Parnter icon" class="w-8 h-8 mr-2">
                      <span class="text-base font-semibold text-brand hover:text-action">Channel Parnter</span>
                    </a>
                  </div>

                  <div class="menu-item relative group ">
                    <a href="https://uniteus.com/our-careers/" class="flex -m-3 p-3 menu_click ">
                      <img src="https://uniteus.com/wp-content/uploads/2025/01/Background-14.svg" alt="Careers icon" class="w-8 h-8 mr-2"/>
                      <span class="text-base font-semibold text-brand hover:text-action">Careers</span>
                    </a>
                  </div>
                </div>

                <div class="bg-gray-200 px-5 pt-4 pb-4 pl-12">
                  <p class="text-base font-semibold text-gray-700 flex">
                    Have questions?&nbsp;
                    <a href="https://uniteus.com/contact" class="menu-arrow text-action flex items-center !underline gap-1">Let's talk.
                      <svg width="16" height="14" viewbox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.26562 1.19189L14.0739 7.00013L8.26562 12.8084" stroke="#216CFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M14.0744 6.99951L1.71777 6.99951" stroke="#216CFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                    </a>
                  </p>
                </div>

              </div>

            </div>
          </div>
        </nav>
        <div class="hidden lg:flex items-center justify-end lg:flex-1 lg:w-0">
          <a href="https://app.uniteus.io/" class="whitespace-nowrap text-base font-medium text-brand hover:text-brand">
            Log In
          </a>
          <a href="https://uniteus.com/demo/" class="button button-solid-purple mx-6">Demo</a>
          <!-- Trigger for Search Modal -->
          <button type="button" @click="showSearchModal = true" class="rounded-lg flex items-center justify-center">
            <span class="sr-only">Search site</span>
            <img src="https://uniteus.com/wp-content/themes/uniteus-sage/public/images/nav-search.svg" alt="" width="20" height="20"/>
          </button>
        </div>

        <!-- Mobile Menu -->
        <div x-show="showMobileMenu" class="lg:hidden absolute z-50 inset-x-0 p-2 transition transform origin-top-right" style="top:0; display: none;">
          <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
            <div class="pt-5 pb-16 px-5">
              <div class="flex items-center justify-between">
                <img fetchpriority="high" src="https://uniteus.com/wp-content/themes/uniteus-sage/public/images/unite-us-logo.svg" alt="Unite Us" width="192" height="48"/>
                <button type="button" class="bg-white rounded-md inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" @click="showMobileMenu = false">
                  <span class="sr-only">Close menu</span>
                  <img src="https://uniteus.com/wp-content/themes/uniteus-sage/public/images/nav-close.svg" alt="" width="24" height="24"/>
                </button>
              </div>
              <div class="mt-6">
                <ul class="list-none">
                  <li class="relative py-2 desktop-only solutions" x-data="{ isOpen: false }">
                    <button type="button" class="text-left w-full" @click="isOpen = !isOpen">
                      <div class="flex items-center justify-between">
                        <span class="text-base font-medium text-brand">Solutions</span>
                        <svg width="21" height="20" viewbox="0 0 21 20" xmlns="http://www.w3.org/2000/svg" class="transition-transform duration-300" :class="isOpen ? 'rotate-180 text-blue-500' :
                                                    'rotate-0 text-gray-500'">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M6.2177 7.29289C6.60822 6.90237 7.24139 6.90237 7.63191 7.29289L10.9248 10.5858L14.2177 7.29289C14.6082 6.90237 15.2414 6.90237 15.6319 7.29289C16.0224 7.68342 16.0224 8.31658 15.6319 8.70711L11.6319 12.7071C11.2414 13.0976 10.6082 13.0976 10.2177 12.7071L6.2177 8.70711C5.82717 8.31658 5.82717 7.68342 6.2177 7.29289Z" :fill="isOpen ? '#2563EB' : '#9CA3AF'"/>
                        </svg>
                      </div>
                    </button>
                    <div class="relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container" x-bind:style="isOpen ? 'max-height: ' + $refs.container.scrollHeight + 'px' : ''">
                      <div class="overflow-hidden">
                        <div class="relative grid gap-6 rounded-lg bg-light mb-2 mt-6 px-5 py-6 sm:gap-8 sm:p-8">
                          <a href="https://uniteus.com/industries/" class="-m-3 p-3 flex items-start rounded-lg hover:bg-light menu_click ">
                            <span class="text-base font-medium text-brand">Industries</span>
                          </a>
                          <a href="https://uniteus.com/products/" class="-m-3 p-3 flex items-start rounded-lg hover:bg-light menu_click ">
                            <span class="text-base font-medium text-brand">Products</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="relative py-2 mobile-only" x-data="{ isOpen: false }">
                    <button type="button" class="text-left w-full" @click="isOpen = !isOpen">
                      <div class="flex items-center justify-between">
                        <span class="text-base font-medium text-brand">Industries</span>
                        <svg width="21" height="20" viewbox="0 0 21 20" xmlns="http://www.w3.org/2000/svg" class="transition-transform duration-300" :class="isOpen ? 'rotate-180 text-blue-500' :
                                                    'rotate-0 text-gray-500'">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M6.2177 7.29289C6.60822 6.90237 7.24139 6.90237 7.63191 7.29289L10.9248 10.5858L14.2177 7.29289C14.6082 6.90237 15.2414 6.90237 15.6319 7.29289C16.0224 7.68342 16.0224 8.31658 15.6319 8.70711L11.6319 12.7071C11.2414 13.0976 10.6082 13.0976 10.2177 12.7071L6.2177 8.70711C5.82717 8.31658 5.82717 7.68342 6.2177 7.29289Z" :fill="isOpen ? '#2563EB' : '#9CA3AF'"/>
                        </svg>
                      </div>
                    </button>
                    <div class="relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container" x-bind:style="isOpen ? 'max-height: ' + $refs.container.scrollHeight + 'px' : ''">
                      <div class="overflow-hidden">
                        <div class="relative grid gap-6 rounded-lg bg-light mb-2 mt-6 px-5 py-6 sm:gap-8 sm:p-8">
                          <a href="https://uniteus.com/industries/government/" class="-m-3 p-3 flex items-start rounded-lg hover:bg-light menu_click ">
                            <span class="text-base font-medium text-brand">Government</span>
                          </a>
                          <a href="https://uniteus.com/industries/providers/" class="-m-3 p-3 flex items-start rounded-lg hover:bg-light menu_click ">
                            <span class="text-base font-medium text-brand">Providers</span>
                          </a>
                          <a href="https://uniteus.com/industries/payers/" class="-m-3 p-3 flex items-start rounded-lg hover:bg-light menu_click ">
                            <span class="text-base font-medium text-brand">Payers</span>
                          </a>
                          <a href="https://uniteus.com/industries/community/" class="-m-3 p-3 flex items-start rounded-lg hover:bg-light menu_click ">
                            <span class="text-base font-medium text-brand">Community-Based Organizations</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="relative py-2 mobile-only" x-data="{ isOpen: false }">
                    <button type="button" class="text-left w-full" @click="isOpen = !isOpen">
                      <div class="flex items-center justify-between">
                        <span class="text-base font-medium text-brand">Products</span>
                        <svg width="21" height="20" viewbox="0 0 21 20" xmlns="http://www.w3.org/2000/svg" class="transition-transform duration-300" :class="isOpen ? 'rotate-180 text-blue-500' :
                                                    'rotate-0 text-gray-500'">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M6.2177 7.29289C6.60822 6.90237 7.24139 6.90237 7.63191 7.29289L10.9248 10.5858L14.2177 7.29289C14.6082 6.90237 15.2414 6.90237 15.6319 7.29289C16.0224 7.68342 16.0224 8.31658 15.6319 8.70711L11.6319 12.7071C11.2414 13.0976 10.6082 13.0976 10.2177 12.7071L6.2177 8.70711C5.82717 8.31658 5.82717 7.68342 6.2177 7.29289Z" :fill="isOpen ? '#2563EB' : '#9CA3AF'"/>
                        </svg>
                      </div>
                    </button>
                    <div class="relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container" x-bind:style="isOpen ? 'max-height: ' + $refs.container.scrollHeight + 'px' : ''">
                      <div class="overflow-hidden">
                        <div class="relative grid gap-6 rounded-lg bg-light mb-2 mt-6 px-5 py-6 sm:gap-8 sm:p-8">
                          <a href="https://uniteus.com/products/closed-loop-referral-system/" class="-m-3 p-3 flex items-start rounded-lg hover:bg-light menu_click ">
                            <span class="text-base font-medium text-brand">Closed-Loop Referral System</span>
                          </a>
                          <a href="https://uniteus.com/products/social-care-data/" class="-m-3 p-3 flex items-start rounded-lg hover:bg-light menu_click ">
                            <span class="text-base font-medium text-brand">Predictive Analytics</span>
                          </a>
                          <a href="https://uniteus.com/products/social-care-revenue-cycle-management/" class="-m-3 p-3 flex items-start rounded-lg hover:bg-light menu_click ">
                            <span class="text-base font-medium text-brand">Social Care Revenue Cycle Management</span>
                          </a>
                          <a href="https://uniteus.com/products/resource-directory/" class="-m-3 p-3 flex items-start rounded-lg hover:bg-light menu_click ">
                            <span class="text-base font-medium text-brand">Resource Directory</span>
                          </a>
                          <a href="https://uniteus.com/products/care-coordination-services/" class="-m-3 p-3 flex items-start rounded-lg hover:bg-light menu_click ">
                            <span class="text-base font-medium text-brand">Care Coordination</span>
                          </a>
                          <a href="https://uniteus.com/products/professional-services/" class="-m-3 p-3 flex items-start rounded-lg hover:bg-light menu_click ">
                            <span class="text-base font-medium text-brand">Managed Services</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="relative py-2 resources" x-data="{ isOpen: false }">
                    <button type="button" class="text-left w-full" @click="isOpen = !isOpen">
                      <div class="flex items-center justify-between">
                        <span class="text-base font-medium text-brand">Resources</span>
                        <svg width="21" height="20" viewbox="0 0 21 20" xmlns="http://www.w3.org/2000/svg" class="transition-transform duration-300" :class="isOpen ? 'rotate-180 text-blue-500' :
                                                    'rotate-0 text-gray-500'">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M6.2177 7.29289C6.60822 6.90237 7.24139 6.90237 7.63191 7.29289L10.9248 10.5858L14.2177 7.29289C14.6082 6.90237 15.2414 6.90237 15.6319 7.29289C16.0224 7.68342 16.0224 8.31658 15.6319 8.70711L11.6319 12.7071C11.2414 13.0976 10.6082 13.0976 10.2177 12.7071L6.2177 8.70711C5.82717 8.31658 5.82717 7.68342 6.2177 7.29289Z" :fill="isOpen ? '#2563EB' : '#9CA3AF'"/>
                        </svg>
                      </div>
                    </button>
                    <div class="relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container" x-bind:style="isOpen ? 'max-height: ' + $refs.container.scrollHeight + 'px' : ''">
                      <div class="overflow-hidden">
                        <div class="relative grid gap-6 rounded-lg bg-light mb-2 mt-6 px-5 py-6 sm:gap-8 sm:p-8">
                          <a href="/blog" class="-m-3 p-3 flex items-start rounded-lg hover:bg-light menu_click ">
                            <span class="text-base font-medium text-brand">Blogs</span>
                          </a>
                          <a href="https://events.uniteus.com" class="-m-3 p-3 flex items-start rounded-lg hover:bg-light menu_click ">
                            <span class="text-base font-medium text-brand">Events</span>
                          </a>
                          <a href="/report" class="-m-3 p-3 flex items-start rounded-lg hover:bg-light menu_click ">
                            <span class="text-base font-medium text-brand">Reports</span>
                          </a>
                          <a href="/webinar" class="-m-3 p-3 flex items-start rounded-lg hover:bg-light menu_click ">
                            <span class="text-base font-medium text-brand">Videos</span>
                          </a>
                          <a href="/press" class="-m-3 p-3 flex items-start rounded-lg hover:bg-light menu_click ">
                            <span class="text-base font-medium text-brand">Newsroom</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="relative py-2 company" x-data="{ isOpen: false }">
                    <button type="button" class="text-left w-full" @click="isOpen = !isOpen">
                      <div class="flex items-center justify-between">
                        <span class="text-base font-medium text-brand">Company</span>
                        <svg width="21" height="20" viewbox="0 0 21 20" xmlns="http://www.w3.org/2000/svg" class="transition-transform duration-300" :class="isOpen ? 'rotate-180 text-blue-500' :
                                                    'rotate-0 text-gray-500'">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M6.2177 7.29289C6.60822 6.90237 7.24139 6.90237 7.63191 7.29289L10.9248 10.5858L14.2177 7.29289C14.6082 6.90237 15.2414 6.90237 15.6319 7.29289C16.0224 7.68342 16.0224 8.31658 15.6319 8.70711L11.6319 12.7071C11.2414 13.0976 10.6082 13.0976 10.2177 12.7071L6.2177 8.70711C5.82717 8.31658 5.82717 7.68342 6.2177 7.29289Z" :fill="isOpen ? '#2563EB' : '#9CA3AF'"/>
                        </svg>
                      </div>
                    </button>
                    <div class="relative overflow-hidden transition-all max-h-0 duration-700" x-ref="container" x-bind:style="isOpen ? 'max-height: ' + $refs.container.scrollHeight + 'px' : ''">
                      <div class="overflow-hidden">
                        <div class="relative grid gap-6 rounded-lg bg-light mb-2 mt-6 px-5 py-6 sm:gap-8 sm:p-8">
                          <a href="https://uniteus.com/about-us/" class="-m-3 p-3 flex items-start rounded-lg hover:bg-light menu_click ">
                            <span class="text-base font-medium text-brand">About Us</span>
                          </a>
                          <a href="https://uniteus.com/networks/" class="-m-3 p-3 flex items-start rounded-lg hover:bg-light menu_click ">
                            <span class="text-base font-medium text-brand">Networks</span>
                          </a>
                          <a href="https://uniteus.com/team/" class="-m-3 p-3 flex items-start rounded-lg hover:bg-light menu_click ">
                            <span class="text-base font-medium text-brand">Team</span>
                          </a>

                          <a href="https://uniteus.com/channel-partner/" class="-m-3 p-3 flex items-start rounded-lg hover:bg-light menu_click ">
                            <span class="text-base font-medium text-brand">Channel Parnter</span>
                          </a>

                          <a href="https://uniteus.com/our-careers/" class="-m-3 p-3 flex items-start rounded-lg hover:bg-light menu_click ">
                            <span class="text-base font-medium text-brand">Careers</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="py-6 px-5 space-y-6">
              <a href="/demo/" class="text-center button button-solid-purple">
                Demo
              </a>
              <p class="mt-6 text-center text-base font-medium">
                Have an account already?
                <a href="https://app.uniteus.io/">
                  Log in
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="fixed inset-0 z-50 hidden items-center justify-center overflow-auto bg-brand bg-opacity-80" :class="{ 'hidden': !showSearchModal, 'flex': showSearchModal }" x-show="showSearchModal">
      <div class="w-full max-w-4xl sm:p-10 mx-auto" @click.away="showSearchModal = false" x-transition:enter="motion-safe:ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100">
        <div class="flex items-center justify-end mb-10">
          <button type="button" class="z-10 rounded-full text-white p-1 border border-white cursor-pointer" @click="showSearchModal = false">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
          </button>
        </div>
        <div id="site-filters" class="ajax-filters search-filters relative z-20 mb-10">
          <form data-sf-form-id='2207' data-is-rtl='0' data-maintain-state='' data-results-url='https://uniteus.com/search-results/' data-ajax-url='https://uniteus.com/?sfid=2207&amp;sf_action=get_data&amp;sf_data=results' data-ajax-form-url='https://uniteus.com/?sfid=2207&amp;sf_action=get_data&amp;sf_data=form' data-display-result-method='shortcode' data-use-history-api='1' data-template-loaded='0' data-lang-code='en' data-ajax='1' data-ajax-data-type='json' data-ajax-links-selector='.pagination a' data-ajax-target='#search-filter-results-2207' data-ajax-pagination-type='normal' data-update-ajax-url='0' data-only-results-ajax='1' data-scroll-to-pos='window' data-scroll-on-action='pagination' data-init-paged='1' data-auto-update='' action='https://uniteus.com/search-results/' method='post' class='searchandfilter' id='search-filter-form-2207' autocomplete='off' data-instance-count='1'>
            <ul>
              <li class="sf-field-post_type" data-sf-field-name="_sf_post_type" data-sf-field-type="post_type" data-sf-field-input-type="radio">
                <div class="relative w-full" x-data="Components.popover({ open: false, focus: false })" x-init="init()" @keydown.escape="onEscape" @close-popover-group.window="onClosePopoverGroup">
                  <button type="button" x-state:on="Item active" x-state:off="Item inactive" class="group w-full top-10 justify-between inline-flex items-center rounded-md bg-white text-base font-medium focus:outline-none focus:ring-2 focus:ring-action focus:ring-offset-2 text-sm" :class="{ 'text-brand': open, 'text-brand': !(open) }" @click="toggle" @mousedown="if (open) $event.preventDefault()" aria-expanded="true" :aria-expanded="open.toString()">
                    <span>Search criteria</span>
                    <svg width="9" height="14" viewbox="0 0 9 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M4.58496 0C4.85018 5.96046e-08 5.10453 0.105357 5.29207 0.292893L8.29207 3.29289C8.68259 3.68342 8.68259 4.31658 8.29207 4.70711C7.90154 5.09763 7.26838 5.09763 6.87785 4.70711L4.58496 2.41421L2.29207 4.70711C1.90154 5.09763 1.26838 5.09763 0.877854 4.70711C0.48733 4.31658 0.48733 3.68342 0.877854 3.29289L3.87785 0.292893C4.06539 0.105357 4.31975 0 4.58496 0ZM0.877854 9.29289C1.26838 8.90237 1.90154 8.90237 2.29207 9.29289L4.58496 11.5858L6.87785 9.29289C7.26838 8.90237 7.90154 8.90237 8.29207 9.29289C8.68259 9.68342 8.68259 10.3166 8.29207 10.7071L5.29207 13.7071C4.90154 14.0976 4.26838 14.0976 3.87785 13.7071L0.877854 10.7071C0.48733 10.3166 0.48733 9.68342 0.877854 9.29289Z" fill="#216cff"/>
                    </svg>
                  </button>
                  <!-- UU: AlpineJS drop menu div -->
                  <div x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-1" x-description="Flyout menu, show/hide based on flyout menu state." class="absolute filter-drop-menu py-4 inset-x-0 z-10 transform bg-white ring-1 ring-black ring-opacity-5 shadow-lg rounded" x-ref="panel" @click.away="open = false">
                    <!-- UU: End AlpineJS drop menu div -->

                    <ul class="">

                      <li class="sf-level-0 sf-item-0 sf-option-active" data-sf-depth="0"><input class="sf-input-radio" type="radio" value="" name="_sf_post_type[]" checked="checked" id="sf-input-406675da8e1d9f9ea35db84bb314517c">
                        <label class="sf-label-radio" for="sf-input-406675da8e1d9f9ea35db84bb314517c">Search Entire Site</label>
                      </li>
                      <li class="sf-level-0 " data-sf-depth="0"><input class="sf-input-radio" type="radio" value="post" name="_sf_post_type[]" id="sf-input-e3bb9716e539d03ac0d1939cf5f950c0">
                        <label class="sf-label-radio" for="sf-input-e3bb9716e539d03ac0d1939cf5f950c0">Posts</label>
                      </li>
                      <li class="sf-level-0 " data-sf-depth="0"><input class="sf-input-radio" type="radio" value="page" name="_sf_post_type[]" id="sf-input-f28cf570d16f95883225bcf100aba938">
                        <label class="sf-label-radio" for="sf-input-f28cf570d16f95883225bcf100aba938">Pages</label>
                      </li>
                      <li class="sf-level-0 " data-sf-depth="0"><input class="sf-input-radio" type="radio" value="team" name="_sf_post_type[]" id="sf-input-459c97b2f45d5929d2978f0e210512a7">
                        <label class="sf-label-radio" for="sf-input-459c97b2f45d5929d2978f0e210512a7">Team</label>
                      </li>
                      <li class="sf-level-0 " data-sf-depth="0"><input class="sf-input-radio" type="radio" value="press" name="_sf_post_type[]" id="sf-input-a45c1199b9aa907cd30d75cba176ad93">
                        <label class="sf-label-radio" for="sf-input-a45c1199b9aa907cd30d75cba176ad93">Press</label>
                      </li>
                    </ul>
                  </div>
                  <!-- UU: close AlpineJS div -->
                </li>
                <li class="sf-field-search" data-sf-field-name="search" data-sf-field-type="search" data-sf-field-input-type="">
                  <label>
                    <input placeholder="Search" name="_sf_search[]" class="sf-input-text" type="text" value="" title=""></label>
                </li>
                <li class="sf-field-submit" data-sf-field-name="submit" data-sf-field-type="submit" data-sf-field-input-type=""><input type="submit" name="_sf_submit" value="Submit"></li>
              </ul>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
