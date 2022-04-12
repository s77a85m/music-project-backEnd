@extends('client.layout.master')


@section('content')
    <main class="pt-4 lg:mb-0">
        <!-- slider start -->
        <div class="container mb-10 grid grid-cols-1 sm:grid-cols-3 gap-4">
            <!-- sliders -->
            <div class="pt-md relative w-full sm:col-span-2">
                <div class="absolute inset-0 top_swiper_container">
                    <div class="swiper rtl:text-ltr top_swiper w-full h-full rounded-2xl mb-4 ">
                        <div class="swiper-wrapper">
                            @foreach($topSwipers as $topSwiper)
                                <a href="{{route('single.music', $topSwiper->slug)}}" class="swiper-slide">
                                    <img src="{{'/storage/'.$topSwiper->image}}" title="{{$topSwiper->title}}" class="w-full h-full" alt="{{$topSwiper->title}}">
                                </a>
                            @endforeach
                        </div>
                    </div>
                    <div class="swiper-button-next top_swiper_next"></div>
                    <div class="swiper-button-prev top_swiper_prev"></div>
                </div>
            </div>
            <!-- cards -->
            <div class="col-span-1">
                <div class="grid grid-cols-2 sm:grid-cols-1 gap-4">
                    @foreach($leftSwipers as $leftSwiper)
                        <a href="{{route('single.music', $leftSwiper->slug)}}" class="aspect-video rounded-2xl overflow-hidden">
                            <img src="{{'/storage/'.$leftSwiper->image}}" alt="{{$leftSwiper->title}}" title="{{$leftSwiper->title}}" class="w-full h-full">
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- slider end -->
        <!-- suggested music -->
        <div class="grid grid-cols-1 mb-10 container lg:grid-cols-4 lg:gap-4">
            <!-- title -->
            <div class="flex justify-between items-end">
                <div
                        class="flex title-color lg:w-full lg:h-full lg:justify-center lg:items-center font-medium flex-col gap-1 lg:gap-4">
                    <h3 class="text-base lg:text-xl ">آهنگ هاي پيشنهادي</h3>
                    <h3 class="text-xs lg:text-lg">آهنگ هاي جديد</h3>
                    <svg xmlns="http://www.w3.org/2000/svg" class="hidden lg:block h-24 w-24 text-gray-500"
                         viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                              d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                              clip-rule="evenodd" />
                    </svg>
                </div>
                <a href="#"
                   class=" lg:hidden rounded-full title-color hover:shadow-md hover:shadow-gray-500 hover:cursor-pointer custom-transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 rtl:rotate-180 w-6" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </a>
            </div>
            <!-- slids -->
            <div class="lg:col-span-3 swiper-slider">
                <div class="swiper rtl:text-ltr suggested_musics mini_swiper_cotainer lg:pr-0">
                    <div class="swiper-wrapper">
                        @foreach($suggests as $suggest)
                            <div class="swiper-slide cursor-pointer flex rounded-2xl group overflow-hidden border shadow-md border-style dark:shadow-gray-800 shadow-gray-400 flex-col">
                                <div class="w-full relative pt-md">
                                    <img src="{{'/storage/'.$suggest->image}}" alt="{{$suggest->title}}" title="{{$suggest->title}}" class="absolute inset-0 w-full h-full">
                                    <!-- new -->
                                    <div
                                            class="absolute top-3 group-hover:left-0 -left-7 rtl:left-auto rtl:-right-7 rtl:group-hover:left-auto rtl:group-hover:right-0 w-20 custom-transition h-10 bg-red-600 text-white text-sm font-normal flex items-center justify-end rtl:justify-start pr-4 rtl:pr-0 rtl:pl-4 rounded-r-lg rtl:rounded-r-none rtl:rounded-l-lg ">
                                        NEW</div>
                                </div>
                                <!-- info -->
                                <div class="p-4 flex flex-col bg-white dark:bg-dark-800">
                                    <h2 class="title-color font-normal text-base mb-4 text-center line-clamp-1">{{$suggest->title}}</h2>
                                    <div class="h-12 flex mb-8">
                                        <h3 class="title-color font-medium text-xs text-center leading-6 rtl line-clamp-2">
                                            {{$suggest->description}} </h3>
                                    </div>
                                    <a href="{{route('single.music', $suggest->slug)}}"
                                       class="flex-center rtl:flex-row-reverse title-color hover:bg-indigo-700 hover:text-white transition-colors ease-in duration-300 gap-2 h-10 w-full border rounded-2xl border-style">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viex="0 0 24 24"
                                             stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3" />
                                        </svg>
                                        <span class="font-medium text-sm">مشاهده موزيك</span>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-next swiper_mini_next"></div>
                    <div class="swiper-button-prev swiper_mini_prev"></div>
                </div>
            </div>
        </div>
        <!-- most visited -->
        <div class="flex flex-col sm:container mb-10 gap-4 px-4">
            <h2 id="h11" class=" title-color ">آهنگ هاي پربازديد</h2>
            <!-- cards -->
            <div class="grid grid-cols-1 sm:grid-cols-4  gap-4">
                @foreach($visites as $visit)
                    <div class="flex flex-col rounded-2xl shadow-2xl overflow-hidden">
                    <!-- image -->
                    <div class="relative pt-md w-full cursor-pointer group">
                        <div class="absolute inset-0 overflow-hidden">
                            <img src="{{'/storage/'.$visit->image}}" alt="{{$visit->title}}" title="{{$visit->title}}"
                                 class="w-full h-full group-hover:scale-125 transition-all duration-150 ease-in">
                        </div>
                        <div
                                class="absolute flex-center bg-gray-900 bg-opacity-50 inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-150 ease-in">
                            <a href="{{route('single.music', $visit->slug)}}"
                               class="flex px-4 py-2 rounded-2xl bg-purple-700 dark:bg-indigo-500 text-white text-base font-medium">ادامه
                                مطلب</a>
                        </div>
                    </div>
                    <!-- info -->
                    <div class="flex flex-col p-4">
                        <h2 class="title-color font-normal text-base mb-4 text-center line-clamp-1">{{$visit->title}}</h2>
                        <div class="h-12 flex mb-8">
                            <h3 class="title-color font-medium text-xs text-center leading-6 rtl line-clamp-2">.
                                {{$visit->description}}</h3>
                        </div>
                        <a href="{{route('single.music', $visit->slug)}}" class="flex dark:text-indigo-400 text-purple-700 text-sm font-medium">ادامه
                            مطلب...</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- get ticket -->
        <section class="bg-gray-200 p-4 mb-10 dark:bg-dark-800">
            <div
                    class="bg-white flex flex-col dark:bg-dark-700 rounded-xl sm:max-w-[34rem] md:max-w-2xl lg:max-w-3xl sm:mx-auto">
                <!-- title -->
                <div class="flex-center w-full border-b border-style  h-14 text-base font-medium title-color">درخواست
                    بليط كنسرت(بزودي)</div>
                <!-- count ticket -->
                <div class="px-4 pointer-events-none opacity-50" x-data="handleMenu">
                    <div class="grid grid-cols-1 sm:grid-cols-2 border-b-2 border-dashed border-style">
                        <div class="sm:py-6">
                            <div
                                    class="py-6 border-b border-style sm:border-b-0 sm:border-r rtl:sm:border-r-0 rtl:sm:border-l sm:py-0 sm:pr-4 rtl:sm:pr-0 rtl:sm:pl-4">
                                <h4 class="text-xs font-normal title-color mb-4">تعداد بليط </h4>
                                <div class="flex w-full gap-2 ">
                                    <div class="flex-1 relative">
                                        <input type="radio" name="tickets" id="one"
                                               class="absolute lable-checked:bg-purple-700 dark:lable-checked:bg-indigo-400 lable-checked:text-white top-0 right-0 invisible">
                                        <label for="one"
                                               class="shadow-xl transition-all cursor-pointer duration-150 ease-out text-xl font-normal rtl:number-fa dark:text-indigo-400 dark:border-indigo-400 dark:border  title-color border-2 border-purple-700 w-full h-10 flex-center rounded-xl bg-transparent">1</label>
                                    </div>
                                    <div class="flex-1 relative">
                                        <input type="radio" name="tickets" id="tow"
                                               class="absolute top-0 lable-checked:bg-purple-700 dark:lable-checked:bg-indigo-400 lable-checked:text-white right-0 invisible">
                                        <label for="tow"
                                               class="shadow-xl transition-all duration-150 cursor-pointer ease-out text-xl font-normal title-color dark:text-indigo-400 dark:border-indigo-400 dark:border  rtl:number-fa border-2 border-purple-700 w-full h-10 flex-center rounded-xl bg-transparent">2</label>
                                    </div>
                                    <div class="flex-1 relative">
                                        <input type="radio" name="tickets" id="trhee"
                                               class="absolute top-0 lable-checked:bg-purple-700 dark:lable-checked:bg-indigo-400 lable-checked:text-white right-0 invisible">
                                        <label for="trhee"
                                               class="shadow-xl transition-all duration-150 cursor-pointer ease-out text-xl font-normal title-color dark:text-indigo-400 dark:border-indigo-400 dark:border  rtl:number-fa border-2 border-purple-700 w-full h-10 flex-center rounded-xl bg-transparent">3</label>
                                    </div>
                                    <div class="flex-1 relative">
                                        <input type="radio" name="tickets" id="four"
                                               class="absolute top-0 lable-checked:bg-purple-700 dark:lable-checked:bg-indigo-400 lable-checked:text-white right-0 invisible">
                                        <label for="four"
                                               class="shadow-xl transition-all duration-150 ease-out cursor-pointer text-xl font-normal title-color dark:text-indigo-400 dark:border-indigo-400 dark:border  border-2 rtl:number-fa border-purple-700 w-full h-10 flex-center rounded-xl bg-transparent">4</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- custom count -->
                        <div class="py-6 sm:pl-4 rtl:sm:pl-0 rtl:sm:pr-4">
                            <h4 class="text-xs font-normal title-color mb-4">تعداد دلخواه </h4>
                            <div
                                    class="relative flex w-full text-gray-700 dark:text-gray-300 transition-colors dark:focus-within:text-indigo-400 focus-within:text-purple-800">
                                <input type="number" min="5" value="5"
                                       class="flex text-gray-500 dark:text-gray-400 dark:bg-zinc-700 text-sm font-medium w-full h-9 border border-style rounded-xl pl-7 rtl:pl-0 rtl:pr-7 transition-shadow ease-out focus:shadow-md focus:ring-0 focus:border-style">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                     class="absolute h-4 w-4 top-2 left-2 rtl:left-auto rtl:right-2 right-auto bottom-auto"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                            d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM14 11a1 1 0 011 1v1h1a1 1 0 110 2h-1v1a1 1 0 11-2 0v-1h-1a1 1 0 110-2h1v-1a1 1 0 011-1z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <!-- form -->
                    <div class="grid grid-cols-1 sm:grid-cols-2">
                        <div class="sm:py-6">
                            <div
                                    class="sm:border-r rtl:sm:border-r-0 rtl:sm:border-l sm:border-style sm:pr-4 rtl:sm:pr-0 rtl:sm:pl-4">
                                <!-- name -->
                                <div class="py-6 sm:pt-0">
                                    <h2 class="text-sm font-normal title-color mb-4">اطلاعات شخصي</h2>
                                    <div class="w-full h-9">
                                        <input type="text"
                                               class="rounded-lg dark:text-gray-400 dark:bg-zinc-700 text-xs w-full h-full font-medium title-color border border-style focus:ring-0 focus:border-style transition-shadow ease-out focus:shadow-md"
                                               placeholder="نام">
                                    </div>
                                </div>
                                <!-- lastname -->
                                <div class="pb-6">
                                    <div class="w-full h-9">
                                        <input type="text"
                                               class="rounded-lg text-xs w-full dark:text-gray-400 dark:bg-zinc-700 h-full font-medium title-color border border-style focus:ring-0 focus:border-style transition-shadow ease-out focus:shadow-md"
                                               placeholder="نام خانوادگي">
                                    </div>
                                </div>
                                <!-- email -->
                                <div class="pb-6">
                                    <div class="w-full h-9">
                                        <input type="email"
                                               class="invalid:border-red-500 peer dark:text-gray-400 dark:bg-zinc-700 valid:border-green-500 rounded-lg text-xs w-full h-full mb-2 font-medium title-color border border-style focus:ring-0 focus:border-style transition-shadow ease-out focus:shadow-md"
                                               placeholder="email">
                                        <p class="text-xs font-medium text-red-500 invisible peer-invalid:visible">
                                            format email is not valid!</p>
                                    </div>
                                </div>
                                <!-- gender -->
                                <div class="pb-6 border-b border-style sm:border-0">
                                    <div class="flex gap-12">
                                        <h3 class="text-xs font-normal title-color">جنسيت</h3>
                                        <div class="flex gap-10">
                                            <div
                                                    class=" flex items-center cursor-pointer text-xs gap-3 font-normal title-color">
                                                <input type="radio" name="gender" id="male"
                                                       class="focus:ring-0 dark:text-green-300 dark:bg-gray-500 focus:ring-offset-0">
                                                <label for="male">آقا</label>
                                            </div>
                                            <div
                                                    class="flex items-center cursor-pointer text-xs gap-3 font-normal title-color">
                                                <input type="radio" name="gender" id="female"
                                                       class="focus:ring-0 dark:text-green-300 dark:bg-gray-500 focus:ring-offset-0">
                                                <label for="female">خانوم</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="sm:pl-4 rtl:sm:pl-0 rtl:sm:pr-4">
                            <!-- choose order -->
                            <div class="py-6">
                                <div class="fles flex-col">
                                    <h2 class="text-sm font-normal title-color pb-4">روش پرداخت</h2>
                                    <div class="w-full h-9 ">
                                        <select name="" id=""
                                                class="w-full dark:bg-zinc-700 dark:border-gray-600 h-full rtl:pl-10 rtl:pr-3 rtl:bg-left-center  rounded-lg border text-xs font-normal title-color border-style focus:ring-0 focus:border-gray-300">
                                            <option value="s" class="h-10">بانك سامان</option>
                                            <option value="m">بانك ملي</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- discount -->
                            <div class="pb-6">
                                <div class="flex flex-col gap-4">
                                    <h3 class="text-xs font-normal title-color">.از طرح هاي بعدي باخرم كن</h3>
                                    <div class="flex gap-10">
                                        <div
                                                class=" flex items-center cursor-pointer text-xs gap-3 font-normal title-color">
                                            <input type="radio" name="discount" id="yes"
                                                   class="focus:ring-0 dark:text-green-300 dark:bg-gray-500 focus:ring-offset-0">
                                            <label for="yes">بله</label>
                                        </div>
                                        <div
                                                class="flex items-center cursor-pointer text-xs gap-3 font-normal title-color">
                                            <input type="radio" name="discount" id="no"
                                                   class="focus:ring-0 dark:text-green-300 dark:bg-gray-500 focus:ring-offset-0">
                                            <label for="no">خير</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- btn -->
                    <div class="flex py-5">
                        <button x-on:click="handleOpenMenu()"
                                class="rounded-2xl bg-yellow-500 gap-3 hover:shadow-lg transition-shadow text-gray-700 w-full sm:w-auto sm:px-6 h-12 flex items-center justify-center text-md font-medium">
                            <span x-text="goNext ? 'صبر كنيد' : 'مرحله بعد'">مرحله بعد</span>
                            <svg x-show="!goNext" x-cloak xmlns="http://www.w3.org/2000/svg"
                                 class="hidden rtl:sm:rotate-180 sm:block h-6 w-6" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                            <!-- waiting -->
                            <svg x-show="goNext" x-cloak xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                 style=" background: none; shape-rendering: auto;" width="32px" height="32px"
                                 viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                                <circle cx="50" cy="50" r="0" fill="none" stroke="#000000" stroke-width="1">
                                    <animate attributeName="r" repeatCount="indefinite" dur="0.78125s" values="0;37"
                                             keyTimes="0;1" keySplines="0 0.2 0.8 1" calcMode="spline" begin="0s"></animate>
                                    <animate attributeName="opacity" repeatCount="indefinite" dur="0.78125s"
                                             values="1;0" keyTimes="0;1" keySplines="0.2 0 0.8 1" calcMode="spline"
                                             begin="0s"></animate>
                                </circle>
                                <circle cx="50" cy="50" r="0" fill="none" stroke="#ff0000" stroke-width="1">
                                    <animate attributeName="r" repeatCount="indefinite" dur="0.78125s" values="0;37"
                                             keyTimes="0;1" keySplines="0 0.2 0.8 1" calcMode="spline" begin="-0.390625s">
                                    </animate>
                                    <animate attributeName="opacity" repeatCount="indefinite" dur="0.78125s"
                                             values="1;0" keyTimes="0;1" keySplines="0.2 0 0.8 1" calcMode="spline"
                                             begin="-0.390625s"></animate>
                                </circle>
                            </svg>
                        </button>
                    </div>
                    <!-- menu layer -->
                    <div class="bg-gray-900 bg-opacity-50 inset-0 fixed z-10 " x-show="openMenu" x-cloak
                         x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
                         x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-300"
                         x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                    </div>
                    <!-- menu part -->
                    <div class="fixed inset-0 z-20 flex-center" x-show="openMenu" x-cloak
                         x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="top-96"
                         x-transition:enter-end="top-0" x-transition:leave="transition-all ease-in duration-300 "
                         x-transition:leave-start="top-0" x-transition:leave-end="top-96">
                        <div class="bg-white dark:bg-zinc-800 rounded-2xl max-w-xs sm:max-w-md w-full py-2"
                             x-on:click.away="cancelMenu()">
                            <!-- modal title -->
                            <div class="w-full h-12 title-color text-sm font-medium flex-center">.جايگاه مورد نظر خود را
                                انتخاب كنيد</div>
                            <!-- list -->
                            <ul class="flex flex-col list-none">
                                <li
                                        class="flex even:bg-white dark:even:bg-zinc-700 dark:odd:bg-zinc-800 odd:bg-gray-200 items-center h-12 justify-between px-4">
                                    <!-- title -->
                                    <div>
                                        <h3 class="title-color text-xs font-medium">زمان</h3>
                                    </div>
                                    <!-- chooises -->
                                    <ul class="flex items-center gap-1 list-none">
                                        <li class="relative">
                                            <input type="checkbox" name="time" id="firs"
                                                   class="absolute lable-checked:bg-purple-700 lable-checked:text-white top-0 right-0 invisible">
                                            <label for="firs"
                                                   class="text-xs font-medium text-purple-700 transition-colors ease-out rounded-2xl cursor-pointer border border-purple-700 px-2 py-1">نوبت
                                                اول</label>
                                        </li>
                                        <li class="relative">
                                            <input type="checkbox" name="time" id="second"
                                                   class="absolute lable-checked:bg-purple-700 lable-checked:text-white top-0 right-0 invisible">
                                            <label for="second"
                                                   class="text-xs font-medium transition-colors ease-out text-purple-700 rounded-2xl cursor-pointer border border-purple-700 px-2 py-1">نوبت
                                                دوم</label>
                                        </li>
                                        <li class="relative">
                                            <input type="checkbox" name="time" id="theerd"
                                                   class="absolute top-0 lable-checked:bg-purple-700 lable-checked:text-white right-0 invisible">
                                            <label for="theerd"
                                                   class="text-xs font-medium text-purple-700 transition-colors ease-out rounded-2xl cursor-pointer border border-purple-700 px-2 py-1">نوبت
                                                سوم</label>
                                        </li>
                                    </ul>
                                </li>
                                <li
                                        class="flex even:bg-white dark:even:bg-zinc-700 dark:odd:bg-zinc-800 odd:bg-gray-200 items-center h-12 justify-between px-4">
                                    <!-- title -->
                                    <div>
                                        <h3 class="title-color text-xs font-medium">جايگاه</h3>
                                    </div>
                                    <!-- chooises -->
                                    <div>
                                        <ul class="flex items-center gap-1 list-none">
                                            <li class="relative">
                                                <input type="radio" name="class" id="firsclass"
                                                       class="absolute lable-checked:bg-green-700 lable-checked:text-white top-0 right-0 invisible">
                                                <label for="firsclass"
                                                       class="text-xs font-medium text-green-700 transition-colors ease-out rounded-2xl cursor-pointer border border-green-700 px-2 py-1">طبقه
                                                    اول</label>
                                            </li>
                                            <li class="relative">
                                                <input type="radio" name="class" id="secondclass"
                                                       class="absolute lable-checked:bg-green-700 lable-checked:text-white top-0 right-0 invisible">
                                                <label for="secondclass"
                                                       class="text-xs font-medium transition-colors ease-out text-green-700 rounded-2xl cursor-pointer border border-green-700 px-2 py-1">طبقه
                                                    دوم</label>
                                            </li>
                                            <li class="relative">
                                                <input type="radio" name="class" id="theerdclass"
                                                       class="absolute top-0 lable-checked:bg-green-700 lable-checked:text-white right-0 invisible">
                                                <label for="theerdclass"
                                                       class="text-xs font-medium text-green-700 transition-colors ease-out rounded-2xl cursor-pointer border border-green-700 px-2 py-1">طبقه
                                                    سوم</label>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li
                                        class="grid grid-cols-3 even:bg-white dark:even:bg-zinc-700 dark:odd:bg-zinc-800 odd:bg-gray-200 h-auto px-4">
                                    <!-- title -->
                                    <div class="col-span-1 flex items-center">
                                        <h3 class="title-color text-xs font-medium">شماره صندلي</h3>
                                    </div>
                                    <!-- chooises -->
                                    <div class="col-span-2">
                                        <ul class="grid grid-cols-6 gap-1 list-none">
                                            <li class="relative">
                                                <input type="radio" name="chair" id="c1"
                                                       class="absolute lable-checked:bg-red-700 lable-checked:text-white top-0 right-0 invisible">
                                                <label for="c1"
                                                       class="text-xs font-medium text-red-700 transition-colors ease-out rounded-2xl cursor-pointer border rtl:number-fa border-red-700 px-2">1</label>
                                            </li>
                                            <li class="relative">
                                                <input type="radio" name="chair" id="c2"
                                                       class="absolute lable-checked:bg-red-700 lable-checked:text-white top-0 right-0 invisible">
                                                <label for="c2"
                                                       class="text-xs font-medium transition-colors ease-out text-red-700 rounded-2xl cursor-pointer border rtl:number-fa border-red-700 px-2">2</label>
                                            </li>
                                            <li class="relative">
                                                <input type="radio" name="chair" id="c3"
                                                       class="absolute top-0 lable-checked:bg-red-700 lable-checked:text-white right-0 invisible">
                                                <label for="c3"
                                                       class="text-xs font-medium text-red-700 transition-colors ease-out rounded-2xl cursor-pointer border rtl:number-fa border-red-700 px-2">3</label>
                                            </li>
                                            <li class="relative">
                                                <input type="radio" name="chair" id="c4"
                                                       class="absolute lable-checked:bg-red-700 lable-checked:text-white top-0 right-0 invisible">
                                                <label for="c4"
                                                       class="text-xs font-medium text-red-700 transition-colors ease-out rounded-2xl cursor-pointer border rtl:number-fa border-red-700 px-2">4</label>
                                            </li>
                                            <li class="relative">
                                                <input type="radio" name="chair" id="c5"
                                                       class="absolute lable-checked:bg-red-700 lable-checked:text-white top-0 right-0 invisible">
                                                <label for="c5"
                                                       class="text-xs font-medium transition-colors ease-out text-red-700 rounded-2xl cursor-pointer border rtl:number-fa border-red-700 px-2">5</label>
                                            </li>
                                            <li class="relative">
                                                <input type="radio" name="chair" id="c6"
                                                       class="absolute top-0 lable-checked:bg-red-700 lable-checked:text-white right-0 invisible">
                                                <label for="c6"
                                                       class="text-xs font-medium text-red-700 transition-colors ease-out rounded-2xl cursor-pointer border rtl:number-fa border-red-700 px-2">6</label>
                                            </li>
                                            <li class="relative">
                                                <input type="radio" name="chair" id="c7"
                                                       class="absolute lable-checked:bg-red-700 lable-checked:text-white top-0 right-0 invisible">
                                                <label for="c7"
                                                       class="text-xs font-medium text-red-700 transition-colors ease-out rounded-2xl cursor-pointer border rtl:number-fa border-red-700 px-2">7</label>
                                            </li>
                                            <li class="relative">
                                                <input type="radio" name="chair" id="c8"
                                                       class="absolute lable-checked:bg-red-700 lable-checked:text-white top-0 right-0 invisible">
                                                <label for="c8"
                                                       class="text-xs font-medium transition-colors ease-out text-red-700 rounded-2xl cursor-pointer border rtl:number-fa border-red-700 px-2">8</label>
                                            </li>
                                            <li class="relative">
                                                <input type="radio" name="chair" id="c9"
                                                       class="absolute top-0 lable-checked:bg-red-700 lable-checked:text-white right-0 invisible">
                                                <label for="c9"
                                                       class="text-xs font-medium text-red-700 transition-colors ease-out rounded-2xl cursor-pointer border rtl:number-fa border-red-700 px-2">9</label>
                                            </li>
                                            <li class="relative">
                                                <input type="radio" name="chair" id="c10"
                                                       class="absolute lable-checked:bg-red-700 lable-checked:text-white top-0 right-0 invisible">
                                                <label for="c10"
                                                       class="text-xs font-medium text-red-700 transition-colors ease-out rounded-2xl cursor-pointer border rtl:number-fa border-red-700 px-1.5">10</label>
                                            </li>
                                            <li class="relative">
                                                <input type="radio" name="chair" id="c11"
                                                       class="absolute lable-checked:bg-red-700 lable-checked:text-white top-0 hidden right-0 invisible">
                                                <label for="c11"
                                                       class="text-xs font-medium transition-colors ease-out text-red-700 rounded-2xl cursor-pointer border rtl:number-fa border-red-700 px-1.5">11</label>
                                            </li>
                                            <li class="relative">
                                                <input type="radio" name="chair" id="c12"
                                                       class="absolute top-0 lable-checked:bg-red-700 lable-checked:text-white right-0 invisible">
                                                <label for="c12"
                                                       class="text-xs font-medium text-red-700 transition-colors ease-out rounded-2xl rtl:number-fa cursor-pointer border border-red-700 px-1.5">12</label>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li
                                        class="flex even:bg-white dark:even:bg-zinc-700 dark:odd:bg-zinc-800 odd:bg-gray-200 items-center h-12 justify-between px-4">
                                    <!-- title -->
                                    <div>
                                        <h3 class="title-color text-xs font-medium">كد تخفيف داريد؟</h3>
                                    </div>
                                    <!-- chooises -->
                                    <div>
                                        <div
                                                class="flex flex-center border border-purple-700 rtl:flex-row-reverse w-32 rounded-2xl h-8 relative">
                                            <div x-on:click="yesDiscount()"
                                                 class="flex-1 flex-center text-sm z-10 transition-all"
                                                 x-bind:class="sliderTab?'title-color font-medium':'text-gray-700 dark:text-gray-500 font-normal cursor-pointer'">
                                                بله</div>
                                            <div x-on:click="noDiscount()"
                                                 class="flex-1 flex-center  text-sm z-10 transition-all"
                                                 x-bind:class="!sliderTab?'title-color font-medium':'text-gray-700 dark:text-gray-500 font-normal cursor-pointer'">
                                                خير</div>
                                            <input type="radio" name="discont" id="yes"
                                                   class="absolute top-0 right-0 invisible">
                                            <label x-bind:class="sliderTab ? 'right-1/2' : 'right-0'" for="yes"
                                                   class="transition-all ease-in absolute w-1/2 rounded-2xl top-0  bg-purple-700 h-full"></label>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex even:bg-white dark:even:bg-zinc-700 dark:odd:bg-zinc-800 odd:bg-gray-200 items-center h-12 justify-between px-4 transition-all "
                                    x-bind:class="{'pointer-events-none opacity-60 select-none':!sliderTab}">
                                    <!-- title -->
                                    <div>
                                        <h3 class="title-color text-xs font-medium">كد تخفيف</h3>
                                    </div>
                                    <!-- chooises -->
                                    <div>
                                        <ul class="flex items-center gap-1 list-none">
                                            <li class="relative">
                                                <input type="text"
                                                       class="w-full h-9 rounded-xl text-sm title-color font-medium border border-gray-300 dark:border-gray-600 focus:ring-0 dark:bg-gray-700 dark:focus:border-gray-600 focus:border-gray-300">
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <!-- btn -->
                            <div x-on:click="hnadleCloseMenu()" class="px-4 py-2">
                                <button
                                        class="text-white bg-red-500 rounded-full h-12 w-full flex-center">اعمال</button>
                            </div>
                        </div>
                    </div>
                    <!-- tooltip -->
                    <div class="fixed top-12 rtl:left-auto rtl:right-8 left-8 z-30" x-show="tooltip" x-cloak
                         x-transition:enter="transition-all ease-out"
                         x-transition:enter-start="-left-40 rtl:left-auto rtl:-right-40"
                         x-transition:enter-end="left-8 rtl:left-auto rtl:right-8"
                         x-transition:leave="transition-all ease-in"
                         x-transition:leave-start="left-8 rtl:left-auto rtl:right-8"
                         x-transition:leave-end="-left-40 rtl:left-auto rtl:-right-40">
                        <div class="flex-flex-col rounded-xl overflow-hidden">
                            <div class="bg-green-500 px-6 py-6 text-sm font-medium text-white">درخواست شما انجام شد
                            </div>
                            <!-- proggressbar -->
                            <div class="relative w-full h-2 bg-red-200">
                                <div class="absolute h-full left-0 rtl:left-auto rtl:right-0 bg-red-500 progress"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- flex-table -->
        <section class="container pointer-events-none opacity-50 mb-10">
            <!-- title -->
            <div class="hidden lg:grid grid-cols-12 text-xs font-medium title-color gap-4 p-4">
                <div class="col-span-3 ">خواننده</div>
                <div class="col-span-2 flex justify-center">مكان</div>
                <div class="col-span-2 flex justify-center">تالار</div>
                <div class="col-span-2 flex justify-center">دوروز</div>
                <div class="col-span-3 flex justify-end">ذخيره</div>
            </div>
            <!-- table -->
            <div class="grid grid-cols-1 gap-4">
                <div
                        class="bg-white dark:bg-dark-700 border border-style grid grid-cols-1 gap-4 px-4 pb-6 pt-4 rounded-lg relative lg:grid-cols-12">
                    <!-- profile pic -->
                    <div class="flex flex-col gap-4 items-center lg:flex-row lg:col-span-3">
                        <!-- image -->
                        <div class="relative">
                            <img src="/image/medi-av.jpg" alt="avatar" class="w-12 h-12 rounded-full">
                            <div
                                    class="absolute border-2 animate-pulse dark:border-zinc-600 border-white w-4 h-4 rounded-full bg-green-500 top-8 left-[2.3rem] rtl:left-auto rtl:right-[2.3rem]">
                            </div>
                        </div>
                        <!-- title -->
                        <div class="flex flex-col items-center lg:items-start">
                            <h3 class="text-sm font-normal title-color mb-2">مهدي احمدوند</h3>
                            <h4 class="text-xs font-normal title-color">كيش</h4>
                        </div>
                    </div>
                    <!-- destination -->
                    <div class="flex items-center justify-between lg:justify-center lg:col-span-2">
                        <h3 class="text-xs font-normal lg:hidden title-color">مكان</h3>
                        <h3 class="text-xs font-normal title-color">جزيره كيش</h3>
                    </div>
                    <!-- hall -->
                    <div class="flex items-center justify-between lg:justify-center lg:col-span-2">
                        <h3 class="text-xs font-medium lg:hidden title-color">تالار</h3>
                        <h3 class="text-xs font-medium title-color">نقش جهان</h3>
                    </div>
                    <!-- days -->
                    <div class="flex items-center justify-between lg:justify-center lg:col-span-2">
                        <h3 class="text-xs font-medium lg:hidden title-color">دوروزه</h3>
                        <div class="px-3 py-1 bg-green-200 text-xs font-medium rounded-2xl text-green-700">دارد</div>
                    </div>
                    <!-- submit -->
                    <div class="flex lg:items-center lg:justify-end lg:gap-4 lg:px-0 px-3 lg:col-span-3">
                        <a href="#"
                           class="flex-center rounded-xl border  border-purple-700 w-full lg:w-auto lg:px-6 text-sm font-normal dark:text-indigo-400 dark:hover:bg-indigo-400 dark:hover:text-gray-300 dark:border-indigo-400 text-purple-700  hover:bg-purple-700  hover:text-white transition-colors ease-in h-9">ثبت
                            نام</a>
                        <!-- save -->
                        <button
                                class="absolute dark:bg-zinc-800 bg-gray-300 group top-4 right-4 w-10 h-10 lg:relative lg:top-0 lg:right-0 rounded-full flex-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 dark:text-gray-400 w-4" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                            </svg>
                            <div
                                    class="absolute hidden dark:bg-indigo-500 dark:text-gray-200 lg:block top-0 py-1 group-hover:-top-8 opacity-0 group-hover:opacity-100 transition-all duration-200 ease-in invisible group-hover:visible bg-purple-700 text-white text-xs font-normal px-2 rounded-2xl">
                                ذخيره</div>
                        </button>
                    </div>
                </div>
                <div
                        class="bg-white dark:bg-dark-700 border border-style grid grid-cols-1 gap-4 px-4 pb-6 pt-4 rounded-lg relative lg:grid-cols-12">
                    <!-- profile pic -->
                    <div class="flex flex-col gap-4 items-center lg:flex-row lg:col-span-3">
                        <!-- image -->
                        <div class="relative">
                            <img src="/image/medi-av.jpg" alt="avatar" class="w-12 h-12 rounded-full">
                            <div
                                    class="absolute border-2 animate-pulse border-white dark:border-zinc-600 w-4 h-4 rounded-full bg-green-500 top-8 left-[2.3rem] rtl:left-auto rtl:right-[2.3rem]">
                            </div>
                        </div>
                        <!-- title -->
                        <div class="flex flex-col items-center lg:items-start">
                            <h3 class="text-sm font-normal title-color mb-2">مهدي احمدوند</h3>
                            <h4 class="text-xs font-normal title-color">كيش</h4>
                        </div>
                    </div>
                    <!-- destination -->
                    <div class="flex items-center justify-between lg:justify-center lg:col-span-2">
                        <h3 class="text-xs font-normal lg:hidden title-color">مكان</h3>
                        <h3 class="text-xs font-normal title-color">جزيره كيش</h3>
                    </div>
                    <!-- hall -->
                    <div class="flex items-center justify-between lg:justify-center lg:col-span-2">
                        <h3 class="text-xs font-medium lg:hidden title-color">تالار</h3>
                        <h3 class="text-xs font-medium title-color">نقش جهان</h3>
                    </div>
                    <!-- days -->
                    <div class="flex items-center justify-between lg:justify-center lg:col-span-2">
                        <h3 class="text-xs font-medium lg:hidden title-color">دوروزه</h3>
                        <div class="px-3 py-1 bg-green-200 text-xs font-medium rounded-2xl text-green-700">دارد</div>
                    </div>
                    <!-- submit -->
                    <div class="flex lg:items-center lg:justify-end lg:gap-4 lg:px-0 px-3 lg:col-span-3">
                        <a href="#"
                           class="flex-center rounded-xl border dark:text-indigo-400 dark:hover:bg-indigo-400 dark:hover:text-gray-300 dark:border-indigo-400 border-purple-700 w-full lg:w-auto lg:px-6 text-sm font-normal text-purple-700 hover:bg-purple-700 hover:text-white transition-colors ease-in h-9">ثبت
                            نام</a>
                        <!-- save -->
                        <button
                                class="absolute dark:bg-zinc-800 bg-gray-300 group top-4 right-4 w-10 h-10 lg:relative lg:top-0 lg:right-0 rounded-full flex-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 dark:text-gray-400 w-4" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                            </svg>
                            <div
                                    class="absolute hidden dark:bg-indigo-500 dark:text-gray-200 lg:block top-0 py-1 group-hover:-top-8 opacity-0 group-hover:opacity-100 transition-all duration-200 ease-in invisible group-hover:visible bg-purple-700 text-white text-xs font-normal px-2 rounded-2xl">
                                ذخيره</div>
                        </button>
                    </div>
                </div>
                <div
                        class="bg-white dark:bg-dark-700 border border-style grid grid-cols-1 gap-4 px-4 pb-6 pt-4 rounded-lg relative lg:grid-cols-12">
                    <!-- profile pic -->
                    <div class="flex flex-col gap-4 items-center lg:flex-row lg:col-span-3">
                        <!-- image -->
                        <div class="relative">
                            <img src="/image/medi-av.jpg" alt="avatar" class="w-12 h-12 rounded-full">
                            <div
                                    class="absolute border-2 animate-pulse border-white dark:border-zinc-600 w-4 h-4 rounded-full bg-red-500 top-8 left-[2.3rem] rtl:left-auto rtl:right-[2.3rem]">
                            </div>
                        </div>
                        <!-- title -->
                        <div class="flex flex-col items-center lg:items-start">
                            <h3 class="text-sm font-normal title-color mb-2">مهدي احمدوند</h3>
                            <h4 class="text-xs font-normal title-color">كيش</h4>
                        </div>
                    </div>
                    <!-- destination -->
                    <div class="flex items-center justify-between lg:justify-center lg:col-span-2">
                        <h3 class="text-xs font-normal lg:hidden title-color">مكان</h3>
                        <h3 class="text-xs font-normal title-color">جزيره كيش</h3>
                    </div>
                    <!-- hall -->
                    <div class="flex items-center justify-between lg:justify-center lg:col-span-2">
                        <h3 class="text-xs font-medium lg:hidden title-color">تالار</h3>
                        <h3 class="text-xs font-medium title-color">نقش جهان</h3>
                    </div>
                    <!-- days -->
                    <div class="flex items-center justify-between lg:justify-center lg:col-span-2">
                        <h3 class="text-xs font-medium lg:hidden title-color">دوروزه</h3>
                        <div class="px-3 py-1 bg-red-200 text-xs font-medium rounded-2xl text-red-700">ندارد</div>
                    </div>
                    <!-- submit -->
                    <div class="flex lg:items-center lg:justify-end lg:gap-4 lg:px-0 px-3 lg:col-span-3">
                        <a href="#"
                           class="flex-center rounded-xl dark:text-indigo-400 dark:hover:bg-indigo-400 dark:hover:text-gray-300 dark:border-indigo-400 border border-purple-700 w-full lg:w-auto lg:px-6 text-sm font-normal text-purple-700 hover:bg-purple-700 hover:text-white transition-colors ease-in h-9">ثبت
                            نام</a>
                        <!-- save -->
                        <button
                                class="absolute dark:bg-zinc-800 dark:text-gray-400 bg-gray-300 group top-4 right-4 w-10 h-10 lg:relative lg:top-0 lg:right-0 rounded-full flex-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 dark:text-gray-400 w-4" fill="none"
                                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                            </svg>
                            <div
                                    class="absolute hidden lg:block top-0 py-1 group-hover:-top-8 opacity-0 group-hover:opacity-100 transition-all duration-200 ease-in invisible group-hover:visible bg-purple-700 dark:bg-indigo-500 dark:text-gray-200 text-white text-xs font-normal px-2 rounded-2xl">
                                ذخيره</div>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <!-- bottom icons -->
        <div class="fixed top-auto bottom-0 inset-x-0 lg:hidden h-16 z-30 border-t border-style bg-white dark:bg-dark-800">
            <div class="container h-full flex items-center fixed_navbar">
                <a href="#" class="flex-1 flex-center text-sm font-medium navbar_items active flex-col gap-1">
                    <!-- icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                    </svg>
                    <span class="">خانه</span>
                </a>
                <a href="#" class="flex-1 flex-center text-sm font-medium navbar_items  flex-col gap-1">
                    <!-- icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                    </svg>
                    <span class="">علاقه مندي</span>
                </a>
            </div>
        </div>
    </main>
@endsection

@section('script')
    <script>
        var top_swiper = new Swiper(".top_swiper", {
            slidesPerView: 1,
            navigation: {
                nextEl: ".top_swiper_next",
                prevEl: ".top_swiper_prev",
            },
        });
        var suggested_musics = new Swiper(".suggested_musics", {
            slidesPerView: "auto",
            spaceBetween: 16,
            breakpoints: {
                640: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                }
            },
            navigation: {
                nextEl: ".swiper_mini_next",
                prevEl: ".swiper_mini_prev",
            },
        });
        function handleMenu() {
            return {
                goNext: false,
                openMenu: false,
                sliderTab: false,
                tooltip: false,
                step: 100,
                handleOpenMenu() {
                    this.goNext = true
                    setTimeout(() => {
                        this.openMenu = true
                    }, 1000);
                },
                hnadleCloseMenu() {
                    this.tooltip = true
                    document.querySelector('.progress').style.width = `${this.step}%`
                    let progress = setInterval(() => {
                        this.step -= 1
                        document.querySelector('.progress').style.width = `${this.step}%`
                        if (this.step == 0) {
                            this.tooltip = false
                            this.openMenu = false
                            this.goNext = false
                            clearInterval(progress)
                        }
                    }, 20);
                    this.step = 100
                },
                yesDiscount() {
                    this.sliderTab = true
                },
                noDiscount() {
                    this.sliderTab = false
                },
                cancelMenu() {
                    this.openMenu = false
                    this.goNext = false
                }
            }
        }
    </script>
@endsection