<nav class="h-14 w-full border-b bg-white dark:bg-dark-800 border-style shadow-lg" x-data="handleMobileMenu">
    <section class="container flex justify-between items-center h-full">
        <!-- hamberger menu -->
        <div>
            <svg x-on:click="handleOpenMenu()" xmlns="http://www.w3.org/2000/svg"
                 class="h-6 w-6 title-color md:hidden" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                      d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                      clip-rule="evenodd" />
            </svg>
            <ul class="hidden list-none md:flex items-center gap-2">
                <!-- logo -->
                <a href="{{route('home')}}" class="w-32 sm:w-auto">
                    <img src="/image/smal-dimonds.png" alt="arkenmusic" class="w-full h-full">
                </a>
                <!-- home -->
                <li>
                    <a href="/"
                       class="title-color px-2 py-1 text-xs font-mediom sm:hover:shadow-md duration-300 transition-custom">خانه</a>
                </li>
                <!-- persian music -->
                <li class="relative" x-data="{ open: false }" x-on:click.away="open = false">
                    <div x-on:click="open = !open"
                         class="flex items-center px-2 gap-1 py-1 title-color text-xs font-mediom cursor-pointer sm:hover:shadow-md duration-300 transition-custom">
                        <span>موزيك هاي فارسي</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 custom-transition"
                             x-bind:class="{'rotate-180' : open}" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                  clip-rule="evenodd" />
                        </svg>
                    </div>
                    <ul x-show="open" x-transition.duration.400ms x-cloak
                        class="border border-style list-none absolute left-0 rtl:left-auto rtl:right-0 top-7 w-40 flex flex-col  z-10  rounded-lg dark:bg-dark-800 bg-white">
                        @foreach($styles as $style)
                            <li class="relative group">
                                <div class=" p-2 rounded-lg text-xs font-medium flex justify-between items-center text-gray-600 dark:text-gray-400 dark:hover:bg-transparent dark:hover:text-indigo-600 hover:text-indigo-700 hover:bg-gray-300 custom-transition">
                                    <span>{{$style->title}}</span>
                                    @if($style->has_artists)
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 rtl:rotate-180 w-3"
                                             viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                  clip-rule="evenodd" />
                                        </svg>
                                    @endif
                                </div>
                                @if($style->has_artists)
                                    <ul
                                        class="list-none hidden group-hover:flex absolute rtl:left-auto rtl:right-full dark:bg-dark-800 top-0 left-full bg-white w-40  flex-col rounded-lg  border border-style">
                                    @foreach($style->artists as $artist)
                                        <li>
                                        <a href="#"
                                           class=" p-2 flex text-xs rounded-lg text-gray-700 dark:text-gray-400 dark:hover:bg-transparent dark:hover:text-indigo-600 font-medium hover:bg-gray-300 hover:text-indigo-700 custom-transition">{{$artist->name}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </li>
                <!-- Foreign music -->
                <li class="relative" x-data="{open:false}" x-on:click.away="open = false">
                    <div x-on:click="open= !open"
                         class="flex items-center px-2 gap-1 py-1 title-color text-xs font-mediom cursor-pointer sm:hover:shadow-md duration-300 transition-custom">
                        <span>موزيك هاي خارجي</span>
                        <svg x-bind:class="{'rotate-180' : open}" xmlns="http://www.w3.org/2000/svg"
                             class="h-5 w-5 custom-transition" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                  clip-rule="evenodd" />
                        </svg>
                    </div>
                    <ul x-show="open" x-transition.duration.400ms x-cloak
                        class="absolute flex flex-col rtl:left-auto rtl:right-0 left-0 top-7 w-40 dark:bg-dark-800 bg-white border border-style rounded-lg z-10">
                        <li class="relative group">
                            <a href="#"
                               class="p-2 text-xs flex justify-between font-medium dark:text-gray-400 dark:hover:bg-transparent dark:hover:text-indigo-600 text-gray-700 rounded-lg custom-transition hover:text-indigo-700 hover:bg-gray-200">
                                <span>pop</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 rtl:rotate-180 w-3"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                          clip-rule="evenodd" />
                                </svg>
                            </a>
                            <ul
                                    class="absolute hidden overflow-hidden rtl:left-auto rtl:right-full group-hover:flex flex-col left-full top-0 w-40 rounded-lg dark:bg-dark-800 bg-white border border-style">
                                <li>
                                    <a href="#"
                                       class="p-2 flex text-gray-700 dark:text-gray-400 dark:hover:bg-transparent dark:hover:text-indigo-600 text-xs font-medium  hover:bg-gray-200 custom-transition hover:text-indigo-700">adel</a>
                                </li>
                                <li>
                                    <a href="#"
                                       class="p-2 flex text-gray-700 dark:text-gray-400 dark:hover:bg-transparent dark:hover:text-indigo-600 text-xs font-medium hover:bg-gray-200 custom-transition hover:text-indigo-700">sdfgdfg</a>
                                </li>
                                <li>
                                    <a href="#"
                                       class="p-2 flex text-gray-700 dark:text-gray-400 dark:hover:bg-transparent dark:hover:text-indigo-600 text-xs font-medium hover:bg-gray-200 custom-transition hover:text-indigo-700">adsdfgel</a>
                                </li>
                                <li>
                                    <a href="#"
                                       class="p-2 flex text-gray-700 dark:text-gray-400 dark:hover:bg-transparent dark:hover:text-indigo-600 text-xs font-medium hover:bg-gray-200 custom-transition hover:text-indigo-700">fgg</a>
                                </li>
                                <li>
                                    <a href="#"
                                       class="p-2 flex text-gray-700 dark:text-gray-400 dark:hover:bg-transparent dark:hover:text-indigo-600 text-xs font-medium hover:bg-gray-200 custom-transition hover:text-indigo-700">fffg</a>
                                </li>
                                <li>
                                    <a href="#"
                                       class="p-2 flex text-gray-700 dark:text-gray-400 dark:hover:bg-transparent dark:hover:text-indigo-600 text-xs font-medium hover:bg-gray-200 custom-transition hover:text-indigo-700">adfdsggel</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"
                               class="p-2 text-xs flex font-medium text-gray-700 dark:text-gray-400 dark:hover:bg-transparent dark:hover:text-indigo-600 rounded-lg custom-transition hover:text-indigo-700 hover:bg-gray-200">rap</a>
                        </li>
                        <li class="relative group">
                            <a href="#"
                               class="p-2 text-xs flex justify-between font-medium text-gray-700 dark:text-gray-400 dark:hover:bg-transparent dark:hover:text-indigo-600 rounded-lg custom-transition hover:text-indigo-700 hover:bg-gray-200">
                                <span>action</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 rtl:rotate-180 w-3"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                          clip-rule="evenodd" />
                                </svg>
                            </a>
                            <ul
                                    class="absolute hidden overflow-hidden group-hover:flex flex-col left-full rtl:left-auto rtl:right-full top-0 w-40 rounded-lg dark:bg-dark-800 bg-white border border-style">
                                <li>
                                    <a href="#"
                                       class="p-2 flex text-gray-700 dark:text-gray-400 dark:hover:bg-transparent dark:hover:text-indigo-600 text-xs font-medium hover:bg-gray-200 custom-transition hover:text-indigo-700">adel</a>
                                </li>
                                <li>
                                    <a href="#"
                                       class="p-2 flex text-gray-700 dark:text-gray-400 dark:hover:bg-transparent dark:hover:text-indigo-600 text-xs font-medium hover:bg-gray-200 custom-transition hover:text-indigo-700">sdfgdfg</a>
                                </li>
                                <li>
                                    <a href="#"
                                       class="p-2 flex text-gray-700 dark:text-gray-400 dark:hover:bg-transparent dark:hover:text-indigo-600 text-xs font-medium hover:bg-gray-200 custom-transition hover:text-indigo-700">adsdfgel</a>
                                </li>
                                <li>
                                    <a href="#"
                                       class="p-2 flex text-gray-700 dark:text-gray-400 dark:hover:bg-transparent dark:hover:text-indigo-600 text-xs font-medium hover:bg-gray-200 custom-transition hover:text-indigo-700">fgg</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"
                               class="p-2 text-xs flex font-medium text-gray-700 dark:text-gray-400 dark:hover:bg-transparent dark:hover:text-indigo-600 rounded-lg custom-transition hover:text-indigo-700 hover:bg-gray-200">rap</a>
                        </li>
                    </ul>
                </li>
                <!-- contact -->
                <li>
                    <a href="#"
                       class="title-color px-2 text-xs py-1 font-mediom sm:hover:shadow-md duration-300 transition-custom">ارتبات
                        با ما</a>
                </li>
            </ul>
        </div>
        <!-- darkmod, direction, pro img -->
        <div class="flex flex-row-reverse gap-2 items-center w-64 sm:w-auto">
            <!-- avatar -->
            <a href="#" class=" w-9">
                <img src="/image/avatar.jpg" class="h-full w-full rounded-full" alt="avatar" />
            </a>
            <!-- dark mod -->
            <div x-data="darkMod"
                 class="flex-center w-10 h-10 rounded-full handle_darkmod hover:shadow-lg hover:cursor-pointer custom-transition">
                <!-- moon -->
                <svg x-on:click="moonMod()" xmlns="http://www.w3.org/2000/svg"
                     class="h-6 animate-wiggle moon w-6 rounded-full" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                </svg>
                <!-- sun -->
                <svg x-on:click="sunMod()" xmlns="http://www.w3.org/2000/svg"
                     class="h-6 sun text-yellow-500 animate-wiggle w-6" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
            </div>
            <!-- search -->
            <div x-data="searchBtn">
                <div x-on:click="openSearch()"
                     class=" rounded-full flex flex-center title-color cursor-pointer hover:shadow-md transition-all w-8 h-8">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                              d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                              clip-rule="evenodd" />
                    </svg>
                </div>
                <!-- search layer -->
                <div x-show="btnTab" x-cloak x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                     x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 "
                     x-transition:leave-end="opacity-0 " class="inset-0 fixed z-20 bg-gray-900 bg-opacity-50"></div>
                <!-- search part -->
                <div dir="rtl" x-cloak x-show="btnTab" x-transition:enter="transition-all ease-out duration-300"
                     x-transition:enter-start="-top-96" x-transition:enter-end="top-0"
                     x-transition:leave="transition-all ease-in duration-300" x-transition:leave-start="top-0"
                     x-transition:leave-end="-top-96"
                     class="inset-0 px-2 pt-20 fixed z-30 flex justify-center items-start">
                    <div x-on:click.away="closSearch()"
                         class="bg-white dark:bg-dark-600 p-2 rounded-lg relative scroll_bar items-center flex-col w-full sm:w-9/12  max-h-[408px] overflow-y-auto">
                        <!-- clos -->
                        <svg x-on:click="closSearch()" xmlns="http://www.w3.org/2000/svg"
                             class="h-5 w-5 title-color absolute left-1 top-1" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <!-- input search -->
                        <input type="text" placeholder="جست وجو"
                               class="w-full my-4 dark:bg-dark-700 focus:ring-0 focus:border-style text-xs font-normal title-color rounded-lg h-10 border border-style ">
                        <!-- result -->
                        <div class="flex flex-col gap-1 w-full h-auto">
                            <!-- slid 1 -->
                            <a href="#"
                               class="border border-style dark:bg-dark-800 shadow-md rounded-md p-1 w-full gap-3 h-16 flex ">
                                <div class="aspect-square rounded-md overflow-hidden">
                                    <img src="/image/slider1.jpg" alt="slider1" class="w-full h-full">
                                </div>
                                <div class="flex flex-col text-sm font-normal justify-center title-color">
                                    <h3>دريا</h3>
                                    <h4>مهدي احمدوند</h4>
                                </div>
                            </a>
                            <!-- slid 2 -->
                            <a href="#"
                               class="border border-style dark:bg-dark-800 shadow-md rounded-md p-1 w-full gap-3 h-16 flex ">
                                <div class="aspect-square rounded-md overflow-hidden">
                                    <img src="/image/slider1.jpg" alt="slider1" class="w-full h-full">
                                </div>
                                <div class="flex flex-col text-sm font-normal justify-center title-color">
                                    <h3>دريا</h3>
                                    <h4>مهدي احمدوند</h4>
                                </div>
                            </a>
                            <!-- slid 3 -->
                            <a href="#"
                               class="border border-style dark:bg-dark-800 shadow-md rounded-md p-1 w-full gap-3 h-16 flex ">
                                <div class="aspect-square rounded-md overflow-hidden">
                                    <img src="/image/slider1.jpg" alt="slider1" class="w-full h-full">
                                </div>
                                <div class="flex flex-col text-sm font-normal justify-center title-color">
                                    <h3>دريا</h3>
                                    <h4>مهدي احمدوند</h4>
                                </div>
                            </a>
                            <!-- slid 4 -->
                            <a href="#"
                               class="border border-style dark:bg-dark-800 shadow-md rounded-md p-1 w-full gap-3 h-16 flex ">
                                <div class="aspect-square rounded-md overflow-hidden">
                                    <img src="/image/slider1.jpg" alt="slider1" class="w-full h-full">
                                </div>
                                <div class="flex flex-col text-sm font-normal justify-center title-color">
                                    <h3>دريا</h3>
                                    <h4>مهدي احمدوند</h4>
                                </div>
                            </a>
                            <!-- slid 5 -->
                            <a href="#"
                               class="border border-style dark:bg-dark-800 shadow-md rounded-md p-1 w-full gap-3 h-16 flex ">
                                <div class="aspect-square rounded-md overflow-hidden">
                                    <img src="/image/slider1.jpg" alt="slider1" class="w-full h-full">
                                </div>
                                <div class="flex flex-col text-sm font-normal justify-center title-color">
                                    <h3>دريا</h3>
                                    <h4>مهدي احمدوند</h4>
                                </div>
                            </a>
                            <!-- slid 5 -->
                            <a href="#"
                               class="border border-style dark:bg-dark-800 shadow-md rounded-md p-1 w-full gap-3 h-16 flex ">
                                <div class="aspect-square rounded-md overflow-hidden">
                                    <img src="/image/slider1.jpg" alt="slider1" class="w-full h-full">
                                </div>
                                <div class="flex flex-col text-sm font-normal justify-center title-color">
                                    <h3>دريا</h3>
                                    <h4>مهدي احمدوند</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- menu layer -->
    <div x-show="openMenu" x-on:click="closeAll()" x-transition:enter="transition-all ease-out duration-300"
         x-transition:enter-start="opacity-30" x-transition:enter-end="opacity-100"
         x-transition:leave="transition-all ease-in duration-300" x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0" x-cloak
         class="fixed inset-0 bg-gray-900 bg-opacity-50 z-20 backdrop-blur-sm"></div>
    <!-- menu items -->
    <div class="fixed inset-y-0 left-0 rtl:left-auto rtl:right-0 right-auto w-64 z-30 bg-gray-100 dark:bg-dark-800"
         x-cloak x-show="openMenu" x-transition:enter="transition-all ease-out duration-300"
         x-transition:enter-start="-left-96 rtl:-right-96" x-transition:enter-end="left-0 rtl:right-0"
         x-transition:leave="transition-all ease-in duration-300" x-transition:leave-start="left-0 right-0"
         x-transition:leave-end="-left-96 rtl:-right-96">
        <div class="p-4 flex flex-col text-sm font-medium title-color gap-4">
            {{-- icon site --}}
                <div class="w-full h-16 border-b border-gray-300">
                    <a href="/">
                        <img src="/image/smal-dimonds.png" alt="arkenmusic" class="w-full h-full">
                    </a>
                </div>
            <!-- home -->
            <a href="/">خانه</a>
            <!-- persian music -->
            <div class="flex flex-col">
                <div x-on:click="firstMenu(2)" class="flex flex-col">
                    <div class="flex items-center cursor-pointer justify-between">
                        <span>موزيك هاي فارسي</span>
                        <svg xmlns="http://www.w3.org/2000/svg"
                             x-bind:class="menuTab==2 ? 'rotate-90 rtl:rotate-90': 'rtl:rotate-180'"
                             class="transition-all ease-in h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                  clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
                <div class="pl-4 rtl:pl-0 rtl:pr-4 transition-all overflow-hidden"
                     x-bind:class="menuTab==2 ? 'max-h-96': 'max-h-0'">
                    <div class="flex flex-col gap-4 pt-4">
                        @foreach($styles as $style)
                            <div class="flex flex-col">
                            <div class="flex items-center justify-between" x-on:click="menuChild(1)">
                                <span>{{$style->title}}</span>
                                @if($style->has_artists)
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         x-bind:class="menuTabChild==1 ? 'rotate-90 rtl:rotate-90' : 'rtl:rotate-180'"
                                         class="h-5  transition-all w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                              clip-rule="evenodd" />
                                    </svg>
                                @endif
                            </div>
                            <div class="pl-9 rtl:pl-0 rtl:pr-9 overflow-hidden transition-all"
                                 x-bind:class="menuTabChild==1 ? 'max-h-96' : 'max-h-0'">
                                <div class="flex flex-col gap-4 pt-4">
                                    @foreach($style->artists as $artist)
                                        <a href="#">{{$artist->name}}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- forign music -->
            <div>
                <div x-on:click="firstMenu(3)" class="flex items-center cursor-pointer justify-between">
                    <span>موزك هاي خارجي</span>
                    <svg xmlns="http://www.w3.org/2000/svg"
                         x-bind:class="menuTab==3 ? 'rotate-90 rtl:rotate-90': 'rtl:rotate-180'"
                         class="h-5 transition-all w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="pl-4 rtl:pl-0 rtl:pr-4 transition-all overflow-hidden"
                     x-bind:class="menuTab==3 ? 'max-h-96': 'max-h-0'">
                    <div class="flex flex-col gap-4 pt-4">
                        <a href="#">rap</a>
                        <div class="flex flex-col">
                            <div class="flex items-center justify-between" x-on:click="menuChild(2)">
                                <span>pop</span>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     x-bind:class="menuTabChild==2 ? 'rotate-90 rtl:rotate-90' : 'rtl:rotate-180'"
                                     class="h-5 transition-all w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                          clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="pl-9 rtl:pl-0 rtl:pr-9 overflow-hidden transition-all"
                                 x-bind:class="menuTabChild==2 ? 'max-h-96' : 'max-h-0'">
                                <div class="flex flex-col gap-4 pt-4">
                                    <a href="#">addel</a>
                                    <a href="#">runner</a>
                                    <a href="#">branden</a>
                                    <a href="#">brandesdfasdf</a>
                                </div>
                            </div>
                        </div>
                        <a href="#">action</a>
                        <a href="#">rap</a>
                    </div>
                </div>
            </div>
            <!-- cotacts -->
            <a href="#">ارتباط با ما</a>
        </div>
    </div>
</nav>
