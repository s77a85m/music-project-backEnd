<nav id="header-nav" class="h-14 w-full transition-all duration-300 ease-in border-b bg-white dark:bg-dark-800 border-style shadow-lg" x-data="handleMobileMenu">
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
                                        <a href="{{route('all.musics', $artist->slug)}}"
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
        {{-- error --}}
        @if($errors->any())
            <div id="errorBg" class="w-full flex z-40 fixed transition-all duration-500 bottom-0 right-0 mt-2 flex-col items-end h-auto">
                    <div class="rounded-md flex overflow-hidden items-end z-10 flex-col md:w-1/2 w-full h-auto lg:w-1/3  bg-red-400 ">
                        @foreach($errors->all() as $error)
                            <li dir="rtl" id="errorContent" class=" list-disc border-t border-gray-200 w-full px-3 text-xs text-right flex items-center text-gray-100 h-8 ">
                                {{$error}}
                            </li>
                        @endforeach
                        <div id="errorProcess" class=" h-1 bg-gray-200"></div>
                    </div>
            </div>
        @endif
    <!-- darkmod, direction, pro img -->
        <div class="flex flex-row-reverse gap-2 items-center w-64 sm:w-auto" x-data="registerMenu">
            @auth
            <!-- avatar -->
                <div x-data="dashbord" class="relative w-9" x-on:click.away="showDash=false">
                    <img src="/image/user.jpg" title="{{auth()->user()->name}}" alt="{{auth()->user()->name}}" x-on:click="showDash = !showDash" class="h-full w-full cursor-pointer rounded-full" />
                    <div x-cloak x-bind:class="showDash ? 'max-h-96 border border-gray-400' : 'max-h-0' "  class="absolute transition-all  duration-300 sm:w-36 w-32 bg-gray-200 dark:bg-dark-700 right-0 z-20 overflow-hidden rounded-sm flex flex-col">
                        <a href="#" class="w-full py-2 flex gap-2 items-center transition-colors duration-300 justify-center cursor-pointer border-b dark:border-gray-600 border-gray-400 hover:dark:bg-gray-600 hover:text-blue-500 hover:bg-gray-300 text-xs font-medium text-gray-500 dark:text-gray-200">
                            <span>داشبورد</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-toggles2" viewBox="0 0 16 16">
                                <path d="M9.465 10H12a2 2 0 1 1 0 4H9.465c.34-.588.535-1.271.535-2 0-.729-.195-1.412-.535-2z"/>
                                <path d="M6 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 1a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm.535-10a3.975 3.975 0 0 1-.409-1H4a1 1 0 0 1 0-2h2.126c.091-.355.23-.69.41-1H4a2 2 0 1 0 0 4h2.535z"/>
                                <path d="M14 4a4 4 0 1 1-8 0 4 4 0 0 1 8 0z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-full py-2 flex items-center transition-colors hover:text-blue-500 duration-300 justify-center cursor-pointer border-b dark:border-gray-600 border-gray-400 hover:dark:bg-gray-600 hover:bg-gray-300 text-xs font-medium text-gray-500 dark:text-gray-200">
                            <span>داشبورد</span>
                        </a>
                        <form action="{{route('logout')}}" method="post">
                            @csrf
                            @method("DELETE")
                            <button class="w-full py-2 flex gap-2 items-center transition-colors duration-300 justify-center cursor-pointer hover:dark:bg-gray-600 hover:bg-gray-300 text-xs font-medium text-red-500 dark:text-red-500">
                                <span>خروج</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            @else
            <!-- login-regester -->
            <button  x-on:click="openLayer()" class="h-7 border border-gray-500 px-2 bg-gradient-to-r from-gray-900 via-gray-500 to-gray-900 rounded hover:shadow-md transition-all text-gray-300 font-normal text-sm">ورود/ثبت نام</button>
            @endauth
                <!-- register layer -->
            <div x-show="openRegister" x-cloak
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100 "
                 x-transition:leave="transition ease-in duration-300"
                 x-transition:leave-start="opacity-100 "
                 x-transition:leave-end="opacity-0 " class="inset-0 fixed bg-opacity-60 px-3 bg-gray-900 z-20 flex flex-center">
                <div x-on:click.away="closRegister()" class="w-full py-2 px-4 bg-gray-100 bg-opacity-30 border xs:w-10/12 sm:w-2/3 md:w-[430px] border-gray-200 rounded">
                    <div class="w-full h-9 mb-3 flex items-center justify-end text-sm text-gray-100 font-normal gap-2">
                        <button x-on:click="openLog" x-bind:class="{'border-b-2 border-blue-500' : registerTab==3}" class="px-2">ورود</button>
                        <button x-on:click="openReg" x-bind:class="{'border-b-2 border-blue-500' : registerTab==2}" class="px-2">ثبت نام</button>
                    </div>
                    {{--register--}}
                    <form dir="rtl" x-cloak x-show="registerTab==2" action="{{route('register')}}" method="post" class="w-full">
                        @csrf
                        <!-- name -->
                        <label for="name" class="text-xs text-gray-100 font-medium">نام</label>
                        <div class="relative">
                            <input type="text" name="name" id="name" autocomplete="off" class="py-2 flex items-center px-6 text-sm shadow-inner bg-gray-200 rounded-2xl h-8 w-full border border-green-300 focus:ring-0 focus:border-green-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 text-green-400 absolute top-1.5 right-1 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <!-- email -->
                        <label for="email" class="text-xs text-gray-100 font-medium">ايميل</label>
                        <div class="relative">
                            <input type="email" name="email" id="email" autocomplete="off" class="py-2 flex items-center text-sm px-6 shadow-inner bg-gray-200 rounded-2xl h-8 w-full border border-green-300 focus:ring-0 focus:border-green-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 text-green-400 absolute top-1.5 right-1 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M14.243 5.757a6 6 0 10-.986 9.284 1 1 0 111.087 1.678A8 8 0 1118 10a3 3 0 01-4.8 2.401A4 4 0 1114 10a1 1 0 102 0c0-1.537-.586-3.07-1.757-4.243zM12 10a2 2 0 10-4 0 2 2 0 004 0z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <!-- password -->
                        <label for="pass" class="text-xs text-gray-100 font-medium">رمز عبور</label>
                        <div class="relative">
                            <input type="text" name="password" id="pass" autocomplete="off" class="py-2 flex items-center text-sm px-6 shadow-inner bg-gray-200 rounded-2xl h-8 w-full border border-green-300 focus:ring-0 focus:border-green-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 text-green-400 absolute top-1.5 right-1 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M18 8a6 6 0 01-7.743 5.743L10 14l-1 1-1 1H6v2H2v-4l4.257-4.257A6 6 0 1118 8zm-6-4a1 1 0 100 2 2 2 0 012 2 1 1 0 102 0 4 4 0 00-4-4z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <!-- btn -->
                        <button class="w-full rounded-2xl mb-3 h-8 text-sm font-normal mt-5 text-white bg-green-500">ثبت نام</button>
                    </form>
                    {{--login--}}
                    <form dir="rtl" x-cloak x-show="registerTab==3" method="post" action="{{route('login')}}" class="w-full">
                        @csrf
                        <!-- email -->
                        <label for="email" class="text-xs text-gray-100 font-medium">ايميل</label>
                        <div class="relative">
                            <input type="email" name="email" id="email" autocomplete="off" class="py-2 flex items-center text-sm px-6 shadow-inner bg-gray-200 rounded-2xl h-8 w-full border border-blue-300 focus:ring-0 focus:border-blue-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 text-blue-400 absolute top-1.5 right-1 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M14.243 5.757a6 6 0 10-.986 9.284 1 1 0 111.087 1.678A8 8 0 1118 10a3 3 0 01-4.8 2.401A4 4 0 1114 10a1 1 0 102 0c0-1.537-.586-3.07-1.757-4.243zM12 10a2 2 0 10-4 0 2 2 0 004 0z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <!-- password -->
                        <label for="password" class="text-xs text-gray-100 font-medium">رمز عبور</label>
                        <div class="relative">
                            <input type="text" name="password" id="password" autocomplete="off" class="py-2 flex items-center text-sm px-6 shadow-inner bg-gray-200 rounded-2xl h-8 w-full border border-blue-300 focus:ring-0 focus:border-blue-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 text-blue-400 absolute top-1.5 right-1 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M18 8a6 6 0 01-7.743 5.743L10 14l-1 1-1 1H6v2H2v-4l4.257-4.257A6 6 0 1118 8zm-6-4a1 1 0 100 2 2 2 0 012 2 1 1 0 102 0 4 4 0 00-4-4z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <!-- btn login -->
                        <button class="w-full rounded-2xl mb-3 h-8 text-sm font-normal mt-5 text-white bg-blue-500">ورود</button>
                        <!-- btn google -->
                        <a href="{{route('login.google')}}" class="w-full rounded-2xl mb-3 gap-3 h-8 flex-center text-sm font-normal mt-5 text-white bg-red-500">
                            <span>ورود با حساب گوگل</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                                <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
                            </svg>
                        </a>
                    </form>
                </div>
            </div>
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
                     class="inset-0 px-2 lg:px-60 pt-20 fixed z-30 flex justify-center items-start">
                    <div x-on:click.away="closSearch()"
                         class="bg-white dark:bg-dark-600 p-2 rounded-md relative scroll_bar items-center flex-col w-full sm:w-9/12  max-h-[408px] overflow-y-auto">
                        <!-- clos -->
                        <svg x-on:click="closSearch()" xmlns="http://www.w3.org/2000/svg"
                             class="h-5 w-5 title-color absolute left-1 top-1" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <!-- input search -->
                        <input id="inputSearch" autocomplete="off" type="text" placeholder="جست وجو"
                               class="w-full my-4 dark:bg-dark-700 focus:ring-0 focus:border-style text-xs font-normal title-color rounded-lg h-10 border border-style ">
                        <!-- result -->
                        <div id="resultSearch" class="flex flex-col gap-1 w-full h-auto">
                            {{--<!-- slid 1 -->
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
                            </a>--}}
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
                    <div class="flex  items-center cursor-pointer justify-between">
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
                <div class="pl-4 rtl:pl-0 rtl:pr-4 transition-all overflow-y-scroll"
                     x-bind:class="menuTab==2 ? 'max-h-96': 'max-h-0'">
                    <div class="flex flex-col gap-4 pt-4">
                        @foreach($styles as $style)
                        <div class="flex flex-col">
                            <div class="flex items-center justify-between" x-on:click="menuChild({{$style->id}})">
                                <span>{{$style->title}}</span>
                                @if($style->has_artists)
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         x-bind:class="menuTabChild=={{$style->id}} ? 'rotate-90 rtl:rotate-90' : 'rtl:rotate-180'"
                                         class="h-5  transition-all w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                              clip-rule="evenodd" />
                                    </svg>
                                @endif
                            </div>
                            <div class="pl-9 rtl:pl-0 rtl:pr-9 overflow-hidden transition-all"
                                 x-bind:class="menuTabChild=={{$style->id}} ? 'max-h-96' : 'max-h-0'">
                                <div class="flex flex-col gap-4 pt-4">
                                    @foreach($style->artists as $artist)
                                        <a href="{{route('all.musics', $artist->slug)}}">{{$artist->name}}</a>
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
