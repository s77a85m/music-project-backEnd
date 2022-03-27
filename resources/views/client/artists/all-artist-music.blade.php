@extends('client.layout.master')


@section('content')

    <main>
        <!-- top swiper -->
        <div class="container">
            <div class="mb-4 relative top_swiper_singles">
                <div class="swiper top_swiper_single px-3">
                    <div class="swiper-wrapper flex sliders">
                        <div class="swiper-slide slider  w-full shadow-lg rounded-lg overflow-hidden"
                             style="width: 6rem;">
                            <a href="#" class="aspect-square">
                                <img src="/image/slider1.jpg" alt="slider1" class="hover:scale-105 duration-300">
                            </a>
                        </div>
                        <div class="swiper-slide w-full shadow-lg rounded-lg overflow-hidden" style="width: 6rem;">
                            <a href="#" class="aspect-square">
                                <img src="/image/slider2.jpg" alt="slider2" class="hover:scale-105 duration-300">
                            </a>
                        </div>
                        <div class="swiper-slide w-full shadow-lg rounded-lg overflow-hidden" style="width: 6rem;">
                            <a href="#" class="aspect-square">
                                <img src="/image/slider3.jpg" alt="slider3" class="hover:scale-105 duration-300">
                            </a>
                        </div>
                        <div class="swiper-slide w-full shadow-lg rounded-lg overflow-hidden" style="width: 6rem;">
                            <a href="#" class="aspect-square">
                                <img src="/image/slider1.jpg" alt="slider1" class="hover:scale-105 duration-300">
                            </a>
                        </div>
                        <div class="swiper-slide w-full shadow-lg rounded-lg overflow-hidden" style="width: 6rem;">
                            <a href="#" class="aspect-square">
                                <img src="/image/slider2.jpg" alt="slider2" class="hover:scale-105 duration-300">
                            </a>
                        </div>
                        <div class="swiper-slide w-full shadow-lg rounded-lg overflow-hidden" style="width: 6rem;">
                            <a href="#" class="aspect-square">
                                <img src="/image/slider3.jpg" alt="slider3" class="hover:scale-105 duration-300">
                            </a>
                        </div>
                        <div class="swiper-slide w-full shadow-lg rounded-lg overflow-hidden" style="width: 6rem;">
                            <a href="#" class="aspect-square">
                                <img src="/image/slider1.jpg" alt="slider1" class="hover:scale-105 duration-300">
                            </a>
                        </div>
                        <div class="swiper-slide w-full shadow-lg rounded-lg overflow-hidden" style="width: 6rem;">
                            <a href="#" class="aspect-square">
                                <img src="/image/slider2.jpg" alt="slider2" class="hover:scale-105 duration-300">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next swiper_top_next absolute"></div>
                <div class="swiper-button-prev swiper_top_prev absolute"></div>
            </div>
        </div>
        <!-- end top-swiper -->
        <div class="container">
            <!-- new artist music -->
            <div x-data="handleTab" class="flex gap-3 flex-col">
                <!-- title -->
                <ul
                        class="w-full relative gap-2 list-none h-9 flex items-center p-2 justify-end rounded-lg dark:bg-zinc-900 bg-gray-300 text-xs md:text-sm font-normal title-color">
                    <li x-on:click="openTab=3" x-cloak
                        x-bind:class="{'rounded-t-lg bottom-0 dark:bg-dark-600 bg-[#f2f2f2]' : openTab==3}"
                        class=" cursor-pointer transition-all duration-200 ease-in absolute p-1 right-[150px] ">مهدي
                        احمدوند (همه)</li>
                    <li x-on:click="openTab=2" x-cloak
                        x-bind:class="{'rounded-t-lg bottom-0 dark:bg-dark-600 bg-[#f2f2f2]' : openTab==2}"
                        class=" cursor-pointer transition-all duration-200 ease-in absolute p-1 ">مهدي احمدوند (جديد)
                    </li>
                </ul>
                <!-- new -->
                <div x-show="openTab==2" x-cloak class="new_slider relative">
                    <div class="swiper new_swiper">
                        <div class="swiper-wrapper new_swiper_wrapper">
                            <a href="#"
                               class="swiper-slide flex shadow-md flex-col h-auto gap-1 aspect-square border border-style rounded-md dark:bg-dark-700 bg-gray-100">
                                <img src="/image/slider1.jpg" alt="slider1" class="w-full rounded-t-md h-full">
                                <div class="flex flex-col p-1 text-xs font-normal title-color">
                                    <span class="flex flex-center">عشق اول</span>
                                    <span class="flex flex-center">مهدي احمدوند</span>
                                </div>
                            </a>
                            <a href="#"
                               class="swiper-slide flex shadow-md flex-col h-auto gap-1 aspect-square border border-style rounded-md dark:bg-dark-700 bg-gray-100">
                                <img src="/image/slider2.jpg" alt="slider2" class="w-full rounded-t-md h-full">
                                <div class="flex flex-col p-1 text-xs font-normal title-color">
                                    <span class="flex flex-center">عشق اول</span>
                                    <span class="flex flex-center">مهدي احمدوند</span>
                                </div>
                            </a>
                            <a href="#"
                               class="swiper-slide flex shadow-md flex-col h-auto gap-1 aspect-square border border-style rounded-md dark:bg-dark-700 bg-gray-100">
                                <img src="/image/slider3.jpg" alt="slider3" class="w-full rounded-t-md h-full">
                                <div class="flex flex-col p-1 text-xs font-normal title-color">
                                    <span class="flex flex-center">عشق اول</span>
                                    <span class="flex flex-center">مهدي احمدوند</span>
                                </div>
                            </a>
                            <a href="#"
                               class="swiper-slide flex shadow-md flex-col h-auto gap-1 aspect-square border border-style rounded-md dark:bg-dark-700 bg-gray-100">
                                <img src="/image/slider1.jpg" alt="slider1" class="w-full rounded-t-md h-full">
                                <div class="flex flex-col p-1 text-xs font-normal title-color">
                                    <span class="flex flex-center">عشق اول</span>
                                    <span class="flex flex-center">مهدي احمدوند</span>
                                </div>
                            </a>
                            <a href="#"
                               class="swiper-slide flex shadow-md flex-col h-auto gap-1 aspect-square border border-style rounded-md dark:bg-dark-700 bg-gray-100">
                                <img src="/image/slider2.jpg" alt="slider2" class="w-full rounded-t-md h-full">
                                <div class="flex flex-col p-1 text-xs font-normal title-color">
                                    <span class="flex flex-center">عشق اول</span>
                                    <span class="flex flex-center">مهدي احمدوند</span>
                                </div>
                            </a>
                            <a href="#"
                               class="swiper-slide flex shadow-md flex-col h-auto gap-1 aspect-square border border-style rounded-md dark:bg-dark-700 bg-gray-100">
                                <img src="/image/slider3.jpg" alt="slider3" class="w-full rounded-t-md h-full">
                                <div class="flex flex-col p-1 text-xs font-normal title-color">
                                    <span class="flex flex-center">عشق اول</span>
                                    <span class="flex flex-center">مهدي احمدوند</span>
                                </div>
                            </a>
                            <a href="#"
                               class="swiper-slide flex shadow-md flex-col h-auto gap-1 aspect-square border border-style rounded-md dark:bg-dark-700 bg-gray-100">
                                <img src="/image/slider1.jpg" alt="slider1" class="w-full rounded-t-md h-full">
                                <div class="flex flex-col p-1 text-xs font-normal title-color">
                                    <span class="flex flex-center">عشق اول</span>
                                    <span class="flex flex-center">مهدي احمدوند</span>
                                </div>
                            </a>
                            <a href="#"
                               class="swiper-slide flex shadow-md flex-col h-auto gap-1 aspect-square border border-style rounded-md dark:bg-dark-700 bg-gray-100">
                                <img src="/image/slider2.jpg" alt="slider2" class="w-full rounded-t-md h-full">
                                <div class="flex flex-col p-1 text-xs font-normal title-color">
                                    <span class="flex flex-center">عشق اول</span>
                                    <span class="flex flex-center">مهدي احمدوند</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-button-next swiper_new_next absolute"></div>
                    <div class="swiper-button-prev swiper_new_prev absolute"></div>
                </div>
                <!-- all -->
                <div x-show="openTab==3" x-cloak class="all_slider relative">
                    <div class="swiper all_swiper">
                        <div class="swiper-wrapper all_swiper_wrapper">
                            <a href="#"
                               class="swiper-slide flex shadow-md flex-col h-auto gap-1 aspect-square border border-style rounded-md dark:bg-dark-700 bg-gray-100">
                                <img src="/image/slider2.jpg" alt="slider2" class="w-full rounded-t-md h-full">
                                <div class="flex flex-col p-1 text-xs font-normal title-color">
                                    <span class="flex flex-center">عشق اول</span>
                                    <span class="flex flex-center">مهدي احمدوند</span>
                                </div>
                            </a>
                            <a href="#"
                               class="swiper-slide flex shadow-md flex-col h-auto gap-1 aspect-square border border-style rounded-md dark:bg-dark-700 bg-gray-100">
                                <img src="/image/slider1.jpg" alt="slider1" class="w-full rounded-t-md h-full">
                                <div class="flex flex-col p-1 text-xs font-normal title-color">
                                    <span class="flex flex-center">عشق اول</span>
                                    <span class="flex flex-center">مهدي احمدوند</span>
                                </div>
                            </a>
                            <a href="#"
                               class="swiper-slide flex shadow-md flex-col h-auto gap-1 aspect-square border border-style rounded-md dark:bg-dark-700 bg-gray-100">
                                <img src="/image/slider1.jpg" alt="slider1" class="w-full rounded-t-md h-full">
                                <div class="flex flex-col p-1 text-xs font-normal title-color">
                                    <span class="flex flex-center">عشق اول</span>
                                    <span class="flex flex-center">مهدي احمدوند</span>
                                </div>
                            </a>
                            <a href="#"
                               class="swiper-slide flex shadow-md flex-col h-auto gap-1 aspect-square border border-style rounded-md dark:bg-dark-700 bg-gray-100">
                                <img src="/image/slider3.jpg" alt="slider3" class="w-full rounded-t-md h-full">
                                <div class="flex flex-col p-1 text-xs font-normal title-color">
                                    <span class="flex flex-center">عشق اول</span>
                                    <span class="flex flex-center">مهدي احمدوند</span>
                                </div>
                            </a>
                            <a href="#"
                               class="swiper-slide flex shadow-md flex-col h-auto gap-1 aspect-square border border-style rounded-md dark:bg-dark-700 bg-gray-100">
                                <img src="/image/slider2.jpg" alt="slider2" class="w-full rounded-t-md h-full">
                                <div class="flex flex-col p-1 text-xs font-normal title-color">
                                    <span class="flex flex-center">عشق اول</span>
                                    <span class="flex flex-center">مهدي احمدوند</span>
                                </div>
                            </a>
                            <a href="#"
                               class="swiper-slide flex shadow-md flex-col h-auto gap-1 aspect-square border border-style rounded-md dark:bg-dark-700 bg-gray-100">
                                <img src="/image/slider1.jpg" alt="slider1" class="w-full rounded-t-md h-full">
                                <div class="flex flex-col p-1 text-xs font-normal title-color">
                                    <span class="flex flex-center">عشق اول</span>
                                    <span class="flex flex-center">مهدي احمدوند</span>
                                </div>
                            </a>
                            <a href="#"
                               class="swiper-slide flex shadow-md flex-col h-auto gap-1 aspect-square border border-style rounded-md dark:bg-dark-700 bg-gray-100">
                                <img src="/image/slider1.jpg" alt="slider1" class="w-full rounded-t-md h-full">
                                <div class="flex flex-col p-1 text-xs font-normal title-color">
                                    <span class="flex flex-center">عشق اول</span>
                                    <span class="flex flex-center">مهدي احمدوند</span>
                                </div>
                            </a>
                            <a href="#"
                               class="swiper-slide flex shadow-md flex-col h-auto gap-1 aspect-square border border-style rounded-md dark:bg-dark-700 bg-gray-100">
                                <img src="/image/slider2.jpg" alt="slider2" class="w-full rounded-t-md h-full">
                                <div class="flex flex-col p-1 text-xs font-normal title-color">
                                    <span class="flex flex-center">عشق اول</span>
                                    <span class="flex flex-center">مهدي احمدوند</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-button-next swiper_all_next absolute"></div>
                    <div class="swiper-button-prev swiper_all_prev absolute"></div>
                </div>
            </div>
            <!-- album -->
            <div class="flex flex-col w-full gap-2 h-auto">
                <div class="w-full flex items-center justify-end gap-2 h-9 px-2 text-sm font-normal dark:bg-zinc-900 rounded-md bg-gray-300 title-color">
                    <span>آلبوم هاي <span>مهدي احمدوند</span></span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-music-note-list" viewBox="0 0 16 16">
                        <path d="M12 13c0 1.105-1.12 2-2.5 2S7 14.105 7 13s1.12-2 2.5-2 2.5.895 2.5 2z"/>
                        <path fill-rule="evenodd" d="M12 3v10h-1V3h1z"/>
                        <path d="M11 2.82a1 1 0 0 1 .804-.98l3-.6A1 1 0 0 1 16 2.22V4l-5 1V2.82z"/>
                        <path fill-rule="evenodd" d="M0 11.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 7H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 3H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                </div>
                <div class="flex flex-col gap-3">
                    <!-- albom-1 -->
                    <div class="flex flex-col">
                        <!-- title -->
                        <div class="flex flex-row justify-end">
                            <div class="flex flex-initial gap-3 dark:bg-dark-800 dark:text-gray-200 items-center h-5 px-3 text-xs font-medium text-gray-700 rounded-2xl bg-gray-300 ">
                                <div class="flex gap-1 flex-center">
                                    <span>خرداد 1400</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <span>البوم دريا</span>
                            </div>
                        </div>
                        <!-- slider -->
                        <div class="pr-4">
                            <div class="py-2 pr-2 w-full h-auto border-r border-style">
                                <div class="swiper album_slider">
                                    <div class="swiper-wrapper album_slider_wrapper">
                                        <div class="swiper-slide dark:bg-dark-700 border border-style overflow-hidden bg-gray-200 rounded-md">
                                            <a href="#" class="flex فق flex-col text-xs font-medium title-color gap-2 flex-center aspect-square">
                                                <img src="/image/slider1.jpg" alt="slider1" class="w-full h-full">
                                                <span class="pb-1">عشق اول</span>
                                            </a>
                                        </div>
                                        <div class="swiper-slide dark:bg-dark-700 border border-style overflow-hidden bg-gray-200 rounded-md">
                                            <a href="#" class="flex flex-col text-xs font-medium title-color gap-2 flex-center aspect-square">
                                                <img src="/image/slider2.jpg" alt="slider2" class="w-full h-full">
                                                <span class="pb-1">دريا</span>
                                            </a>
                                        </div>
                                        <div class="swiper-slide dark:bg-dark-700 border border-style overflow-hidden bg-gray-200 rounded-md">
                                            <a href="#" class="flex flex-col text-xs font-medium title-color gap-2 flex-center aspect-square">
                                                <img src="/image/slider3.jpg" alt="slider3" class="w-full h-full">
                                                <span class="pb-1">آرامش</span>
                                            </a>
                                        </div>
                                        <div class="swiper-slide dark:bg-dark-700 border border-style overflow-hidden bg-gray-200 rounded-md">
                                            <a href="#" class="flex flex-col text-xs font-medium title-color gap-2 flex-center aspect-square">
                                                <img src="/image/slider1.jpg" alt="slider1" class="w-full h-full">
                                                <span class="pb-1">يادگاري</span>
                                            </a>
                                        </div>
                                        <div class="swiper-slide dark:bg-dark-700 border border-style overflow-hidden bg-gray-200 rounded-md">
                                            <a href="#" class="flex flex-col text-xs font-medium title-color gap-2 flex-center aspect-square">
                                                <img src="/image/slider2.jpg" alt="slider2" class="w-full h-full">
                                                <span class="pb-1">دنيا</span>
                                            </a>
                                        </div>
                                        <div class="swiper-slide dark:bg-dark-700 border border-style overflow-hidden bg-gray-200 rounded-md">
                                            <a href="#" class="flex flex-col text-xs font-medium title-color gap-2 flex-center aspect-square">
                                                <img src="/image/slider3.jpg" alt="slider3" class="w-full h-full">
                                                <span class="pb-1">آروم آروم</span>
                                            </a>
                                        </div>
                                        <div class="swiper-slide dark:bg-dark-700 border border-style overflow-hidden bg-gray-200 rounded-md">
                                            <a href="#" class="flex flex-col text-xs font-medium title-color gap-2 flex-center aspect-square">
                                                <img src="/image/slider1.jpg" alt="slider1" class="w-full h-full">
                                                <span class="pb-1">شمع و پروانه</span>
                                            </a>
                                        </div>
                                        <div class="swiper-slide dark:bg-dark-700 border border-style overflow-hidden bg-gray-200 rounded-md">
                                            <a href="#" class="flex flex-col text-xs font-medium title-color gap-2 flex-center aspect-square">
                                                <img src="/image/slider2.jpg" alt="slider2" class="w-full h-full">
                                                <span class="pb-1">عشق اول</span>
                                            </a>
                                        </div>
                                        <div class="swiper-slide dark:bg-dark-700 border border-style overflow-hidden bg-gray-200 rounded-md">
                                            <a href="#" class="flex flex-col text-xs font-medium title-color gap-2 flex-center aspect-square">
                                                <img src="/image/slider3.jpg" alt="slider3" class="w-full h-full">
                                                <span class="pb-1">عشق اول</span>
                                            </a>
                                        </div>
                                        <div class="swiper-slide dark:bg-dark-700 border border-style overflow-hidden bg-gray-200 rounded-md">
                                            <a href="#" class="flex flex-col text-xs font-medium title-color gap-2 flex-center aspect-square">
                                                <img src="/image/slider1.jpg" alt="slider1" class="w-full h-full">
                                                <span class="pb-1">عشق اول</span>
                                            </a>
                                        </div>
                                        <div class="swiper-slide dark:bg-dark-700 border border-style overflow-hidden bg-gray-200 rounded-md">
                                            <a href="#" class="flex flex-col text-xs font-medium title-color gap-2 flex-center aspect-square">
                                                <img src="/image/slider2.jpg" alt="slider2" class="w-full h-full">
                                                <span class="pb-1">عشق اول</span>
                                            </a>
                                        </div>
                                        <div class="swiper-slide dark:bg-dark-700 border border-style overflow-hidden bg-gray-200 rounded-md">
                                            <a href="#" class="flex flex-col text-xs font-medium title-color gap-2 flex-center aspect-square">
                                                <img src="/image/slider3.jpg" alt="slider3" class="w-full h-full">
                                                <span class="pb-1">عشق اول</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- albom-2 -->
                    <div class="flex flex-col">
                        <!-- title -->
                        <div class="flex flex-row justify-end">
                            <div class="flex flex-initial gap-3 dark:bg-dark-800 dark:text-gray-200 items-center h-5 px-3 text-xs font-medium text-gray-700 rounded-2xl bg-gray-300 ">
                                <div class="flex gap-1 flex-center">
                                    <span>خرداد 1400</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <span>البوم دريا</span>
                            </div>
                        </div>
                        <!-- slider -->
                        <div class="pr-4">
                            <div class="py-2 pr-2 w-full h-auto border-r border-style">
                                <div class="swiper album_slider">
                                    <div class="swiper-wrapper album_slider_wrapper">
                                        <div class="swiper-slide dark:bg-dark-700 border border-style overflow-hidden bg-gray-200 rounded-md">
                                            <a href="#" class="flex flex-col text-xs font-medium title-color gap-2 flex-center aspect-square">
                                                <img src="/image/slider1.jpg" alt="slider1" class="w-full h-full">
                                                <span class="pb-1">عشق اول</span>
                                            </a>
                                        </div>
                                        <div class="swiper-slide dark:bg-dark-700 border border-style overflow-hidden bg-gray-200 rounded-md">
                                            <a href="#" class="flex flex-col text-xs font-medium title-color gap-2 flex-center aspect-square">
                                                <img src="/image/slider2.jpg" alt="slider2" class="w-full h-full">
                                                <span class="pb-1">دريا</span>
                                            </a>
                                        </div>
                                        <div class="swiper-slide dark:bg-dark-700 border border-style overflow-hidden bg-gray-200 rounded-md">
                                            <a href="#" class="flex flex-col text-xs font-medium title-color gap-2 flex-center aspect-square">
                                                <img src="/image/slider3.jpg" alt="slider3" class="w-full h-full">
                                                <span class="pb-1">آرامش</span>
                                            </a>
                                        </div>
                                        <div class="swiper-slide dark:bg-dark-700 border border-style overflow-hidden bg-gray-200 rounded-md">
                                            <a href="#" class="flex flex-col text-xs font-medium title-color gap-2 flex-center aspect-square">
                                                <img src="/image/slider1.jpg" alt="slider1" class="w-full h-full">
                                                <span class="pb-1">يادگاري</span>
                                            </a>
                                        </div>
                                        <div class="swiper-slide dark:bg-dark-700 border border-style overflow-hidden bg-gray-200 rounded-md">
                                            <a href="#" class="flex flex-col text-xs font-medium title-color gap-2 flex-center aspect-square">
                                                <img src="/image/slider2.jpg" alt="slider2" class="w-full h-full">
                                                <span class="pb-1">دنيا</span>
                                            </a>
                                        </div>
                                        <div class="swiper-slide dark:bg-dark-700 border border-style overflow-hidden bg-gray-200 rounded-md">
                                            <a href="#" class="flex flex-col text-xs font-medium title-color gap-2 flex-center aspect-square">
                                                <img src="/image/slider3.jpg" alt="slider3" class="w-full h-full">
                                                <span class="pb-1">آروم آروم</span>
                                            </a>
                                        </div>
                                        <div class="swiper-slide dark:bg-dark-700 border border-style overflow-hidden bg-gray-200 rounded-md">
                                            <a href="#" class="flex flex-col text-xs font-medium title-color gap-2 flex-center aspect-square">
                                                <img src="/image/slider1.jpg" alt="slider1" class="w-full h-full">
                                                <span class="pb-1">شمع و پروانه</span>
                                            </a>
                                        </div>
                                        <div class="swiper-slide dark:bg-dark-700 border border-style overflow-hidden bg-gray-200 rounded-md">
                                            <a href="#" class="flex flex-col text-xs font-medium title-color gap-2 flex-center aspect-square">
                                                <img src="/image/slider2.jpg" alt="slider2" class="w-full h-full">
                                                <span class="pb-1">عشق اول</span>
                                            </a>
                                        </div>
                                        <div class="swiper-slide dark:bg-dark-700 border border-style overflow-hidden bg-gray-200 rounded-md">
                                            <a href="#" class="flex flex-col text-xs font-medium title-color gap-2 flex-center aspect-square">
                                                <img src="/image/slider3.jpg" alt="slider3" class="w-full h-full">
                                                <span class="pb-1">عشق اول</span>
                                            </a>
                                        </div>
                                        <div class="swiper-slide dark:bg-dark-700 border border-style overflow-hidden bg-gray-200 rounded-md">
                                            <a href="#" class="flex flex-col text-xs font-medium title-color gap-2 flex-center aspect-square">
                                                <img src="/image/slider1.jpg" alt="slider1" class="w-full h-full">
                                                <span class="pb-1">عشق اول</span>
                                            </a>
                                        </div>
                                        <div class="swiper-slide dark:bg-dark-700 border border-style overflow-hidden bg-gray-200 rounded-md">
                                            <a href="#" class="flex flex-col text-xs font-medium title-color gap-2 flex-center aspect-square">
                                                <img src="/image/slider2.jpg" alt="slider2" class="w-full h-full">
                                                <span class="pb-1">عشق اول</span>
                                            </a>
                                        </div>
                                        <div class="swiper-slide dark:bg-dark-700 border border-style overflow-hidden bg-gray-200 rounded-md">
                                            <a href="#" class="flex flex-col text-xs font-medium title-color gap-2 flex-center aspect-square">
                                                <img src="/image/slider3.jpg" alt="slider3" class="w-full h-full">
                                                <span class="pb-1">عشق اول</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- albom-3 -->
                    <div class="flex flex-col">
                        <!-- title -->
                        <div class="flex flex-row justify-end">
                            <div class="flex flex-initial gap-3 dark:bg-dark-800 dark:text-gray-200 items-center h-5 px-3 text-xs font-medium text-gray-700 rounded-2xl bg-gray-300 ">
                                <div class="flex gap-1 flex-center">
                                    <span>خرداد 1400</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <span>البوم دريا</span>
                            </div>
                        </div>
                        <!-- slider -->
                        <div class="pr-4">
                            <div class="py-2 pr-2 w-full h-auto border-r border-style">
                                <div class="swiper album_slider">
                                    <div class="swiper-wrapper album_slider_wrapper">
                                        <div class="swiper-slide dark:bg-dark-700 border border-style overflow-hidden bg-gray-200 rounded-md">
                                            <a href="#" class="flex flex-col text-xs font-medium title-color gap-2 flex-center aspect-square">
                                                <img src="/image/slider1.jpg" alt="slider1" class="w-full h-full">
                                                <span class="pb-1">عشق اول</span>
                                            </a>
                                        </div>
                                        <div class="swiper-slide dark:bg-dark-700 border border-style overflow-hidden bg-gray-200 rounded-md">
                                            <a href="#" class="flex flex-col text-xs font-medium title-color gap-2 flex-center aspect-square">
                                                <img src="/image/slider2.jpg" alt="slider2" class="w-full h-full">
                                                <span class="pb-1">دريا</span>
                                            </a>
                                        </div>
                                        <div class="swiper-slide dark:bg-dark-700 border border-style overflow-hidden bg-gray-200 rounded-md">
                                            <a href="#" class="flex flex-col text-xs font-medium title-color gap-2 flex-center aspect-square">
                                                <img src="/image/slider3.jpg" alt="slider3" class="w-full h-full">
                                                <span class="pb-1">آرامش</span>
                                            </a>
                                        </div>
                                        <div class="swiper-slide dark:bg-dark-700 border border-style overflow-hidden bg-gray-200 rounded-md">
                                            <a href="#" class="flex flex-col text-xs font-medium title-color gap-2 flex-center aspect-square">
                                                <img src="/image/slider1.jpg" alt="slider1" class="w-full h-full">
                                                <span class="pb-1">يادگاري</span>
                                            </a>
                                        </div>
                                        <div class="swiper-slide dark:bg-dark-700 border border-style overflow-hidden bg-gray-200 rounded-md">
                                            <a href="#" class="flex flex-col text-xs font-medium title-color gap-2 flex-center aspect-square">
                                                <img src="/image/slider2.jpg" alt="slider2" class="w-full h-full">
                                                <span class="pb-1">دنيا</span>
                                            </a>
                                        </div>
                                        <div class="swiper-slide dark:bg-dark-700 border border-style overflow-hidden bg-gray-200 rounded-md">
                                            <a href="#" class="flex flex-col text-xs font-medium title-color gap-2 flex-center aspect-square">
                                                <img src="/image/slider3.jpg" alt="slider3" class="w-full h-full">
                                                <span class="pb-1">آروم آروم</span>
                                            </a>
                                        </div>
                                        <div class="swiper-slide dark:bg-dark-700 border border-style overflow-hidden bg-gray-200 rounded-md">
                                            <a href="#" class="flex flex-col text-xs font-medium title-color gap-2 flex-center aspect-square">
                                                <img src="/image/slider1.jpg" alt="slider1" class="w-full h-full">
                                                <span class="pb-1">شمع و پروانه</span>
                                            </a>
                                        </div>
                                        <div class="swiper-slide dark:bg-dark-700 border border-style overflow-hidden bg-gray-200 rounded-md">
                                            <a href="#" class="flex flex-col text-xs font-medium title-color gap-2 flex-center aspect-square">
                                                <img src="/image/slider2.jpg" alt="slider2" class="w-full h-full">
                                                <span class="pb-1">عشق اول</span>
                                            </a>
                                        </div>
                                        <div class="swiper-slide dark:bg-dark-700 border border-style overflow-hidden bg-gray-200 rounded-md">
                                            <a href="#" class="flex flex-col text-xs font-medium title-color gap-2 flex-center aspect-square">
                                                <img src="/image/slider3.jpg" alt="slider3" class="w-full h-full">
                                                <span class="pb-1">عشق اول</span>
                                            </a>
                                        </div>
                                        <div class="swiper-slide dark:bg-dark-700 border border-style overflow-hidden bg-gray-200 rounded-md">
                                            <a href="#" class="flex flex-col text-xs font-medium title-color gap-2 flex-center aspect-square">
                                                <img src="/image/slider1.jpg" alt="slider1" class="w-full h-full">
                                                <span class="pb-1">عشق اول</span>
                                            </a>
                                        </div>
                                        <div class="swiper-slide dark:bg-dark-700 border border-style overflow-hidden bg-gray-200 rounded-md">
                                            <a href="#" class="flex flex-col text-xs font-medium title-color gap-2 flex-center aspect-square">
                                                <img src="/image/slider2.jpg" alt="slider2" class="w-full h-full">
                                                <span class="pb-1">عشق اول</span>
                                            </a>
                                        </div>
                                        <div class="swiper-slide dark:bg-dark-700 border border-style overflow-hidden bg-gray-200 rounded-md">
                                            <a href="#" class="flex flex-col text-xs font-medium title-color gap-2 flex-center aspect-square">
                                                <img src="/image/slider3.jpg" alt="slider3" class="w-full h-full">
                                                <span class="pb-1">عشق اول</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection

@section('script')
    <script>
        var album_slider = new Swiper(".album_slider", {
            slidesPerView: 4,
            spaceBetween: 12,
            breakpoints: {
                640: {
                    slidesPerView: 5,
                },
                768: {
                    slidesPerView: 7,
                },
                1024: {
                    slidesPerView: 9,
                }
            },
        });
        var new_swiper = new Swiper(".new_swiper", {
            slidesPerView: 3,
            spaceBetween: 16,
            breakpoints: {
                640: {
                    slidesPerView: 4,
                },
                768: {
                    slidesPerView: 5,
                },
                1024: {
                    slidesPerView: 6,
                }
            },
            navigation: {
                nextEl: ".swiper_new_next",
                prevEl: ".swiper_new_prev",
            }
        });
        var all_swiper = new Swiper(".all_swiper", {
            slidesPerView: 3,
            spaceBetween: 16,
            breakpoints: {
                640: {
                    slidesPerView: 4,
                },
                768: {
                    slidesPerView: 5,
                },
                1024: {
                    slidesPerView: 6,
                }
            },
            navigation: {
                nextEl: ".swiper_all_next",
                prevEl: ".swiper_all_prev",
            }
        });
        var top_swiper_single = new Swiper(".top_swiper_single", {
            slidesPerView: 3,
            spaceBetween: 16,
            breakpoints: {
                640: {
                    slidesPerView: 4,
                },
                760: {
                    slidesPerView: 5,
                },
                1080: {
                    slidesPerView: 6,
                }
            },
            navigation: {
                nextEl: ".swiper_top_next",
                prevEl: ".swiper_top_prev",
            }
        });
        function handleTab() {
            return {
                openTab: 2,

            }
        }
    </script>
@endsection