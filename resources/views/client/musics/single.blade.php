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
            <!-- music for download -->
            <div class="grid grid-cols-1 gap-2 lg:grid-cols-4">
                <!-- relation-styles -->
                <div
                        class=" hidden lg:col-span-1 lg:flex lg:flex-col p-3 bg-gray-200 border border-style dark:bg-dark-700 rounded-lg h-auto w-full">
                    <!-- title -->
                    <div
                            class="w-full h-auto border border-style rounded-lg flex flex-col  items-end gap-3 shadow-md p-3 bg-gray-400 dark:bg-dark-800">
                        <!-- artist title -->
                        <div class="flex">
                            <span class="text-sm font-normal title-color">مرتبط(سبك)</span>
                        </div>
                    </div>
                    <!-- musics -->
                    <div class="p-4">
                        <div
                                class="flex flex-col m-2 gap-4 items-end title-color text-sm font-medium  border-r border-style">
                            <a href="#" class="pr-4 flex relative hover:text-blue-600 transition-all duration-200">
                                <span>فندكتبدار-محسن چاوشي</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 absolute -right-1.5 top-0.5 w-3"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                                          clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="pr-4 flex relative hover:text-blue-600 transition-all duration-200">
                                <span>قول ميدم-محسن يگانه</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 absolute -right-1.5 top-0.5 w-3"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                                          clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="pr-4 flex relative hover:text-blue-600 transition-all duration-200">
                                <span>دلتنگي-مهديجهاني</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 absolute -right-1.5 top-0.5 w-3"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                                          clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="pr-4 flex relative hover:text-blue-600 transition-all duration-200">
                                <span>قول ميدم-محسن يگانه</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 absolute -right-1.5 top-0.5 w-3"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                                          clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="pr-4 flex relative hover:text-blue-600 transition-all duration-200">
                                <span>فندكتبدار-محسن چاوشي</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 absolute -right-1.5 top-0.5 w-3"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                                          clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="pr-4 flex relative hover:text-blue-600 transition-all duration-200">
                                <span>فندكتبدار-محسن چاوشي</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 absolute -right-1.5 top-0.5 w-3"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                                          clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="pr-4 flex relative hover:text-blue-600 transition-all duration-200">
                                <span>قول ميدم-محسن يگانه</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 absolute -right-1.5 top-0.5 w-3"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                                          clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="pr-4 flex relative hover:text-blue-600 transition-all duration-200">
                                <span>دلتنگي-مهديجهاني</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 absolute -right-1.5 top-0.5 w-3"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                                          clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="pr-4 flex relative hover:text-blue-600 transition-all duration-200">
                                <span>قول ميدم-محسن يگانه</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 absolute -right-1.5 top-0.5 w-3"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                                          clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="pr-4 flex relative hover:text-blue-600 transition-all duration-200">
                                <span>فندكتبدار-محسن چاوشي</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 absolute -right-1.5 top-0.5 w-3"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                                          clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="pr-4 flex relative hover:text-blue-600 transition-all duration-200">
                                <span>فندكتبدار-محسن چاوشي</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 absolute -right-1.5 top-0.5 w-3"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                                          clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="pr-4 flex relative hover:text-blue-600 transition-all duration-200">
                                <span>قول ميدم-محسن يگانه</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 absolute -right-1.5 top-0.5 w-3"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                                          clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="pr-4 flex relative hover:text-blue-600 transition-all duration-200">
                                <span>دلتنگي-مهديجهاني</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 absolute -right-1.5 top-0.5 w-3"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                                          clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="pr-4 flex relative hover:text-blue-600 transition-all duration-200">
                                <span>قول ميدم-محسن يگانه</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 absolute -right-1.5 top-0.5 w-3"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                                          clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="pr-4 flex relative hover:text-blue-600 transition-all duration-200">
                                <span>فندكتبدار-محسن چاوشي</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 absolute -right-1.5 top-0.5 w-3"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                                          clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="pr-4 flex relative hover:text-blue-600 transition-all duration-200">
                                <span>فندكتبدار-محسن چاوشي</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 absolute -right-1.5 top-0.5 w-3"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                                          clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="pr-4 flex relative hover:text-blue-600 transition-all duration-200">
                                <span>قول ميدم-محسن يگانه</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 absolute -right-1.5 top-0.5 w-3"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                                          clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="pr-4 flex relative hover:text-blue-600 transition-all duration-200">
                                <span>دلتنگي-مهديجهاني</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 absolute -right-1.5 top-0.5 w-3"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                                          clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="pr-4 flex relative hover:text-blue-600 transition-all duration-200">
                                <span>قول ميدم-محسن يگانه</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 absolute -right-1.5 top-0.5 w-3"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                                          clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="pr-4 flex relative hover:text-blue-600 transition-all duration-200">
                                <span>فندكتبدار-محسن چاوشي</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 absolute -right-1.5 top-0.5 w-3"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                                          clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- music-downloadable -->
                <div
                        class="w-full lg:col-span-2 flex flex-col p-3 gap-2 bg-gray-200 dark:bg-dark-700 border border-style rounded-lg h-auto">
                    <!-- title -->
                    <div
                            class="w-full h-auto border border-style rounded-lg flex flex-col  items-end gap-3 shadow-md p-3 bg-gray-400 dark:bg-dark-800">
                        <!-- artist title -->
                        <div class="flex">
                            <span class="text-sm font-normal title-color">آهنگ <span class="text-red-500">عشق اول
                                </span>از <a href="#" class="text-blue-500">مهدي احمدوند</a></span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 title-color w-5" viewBox="0 0 20 20"
                                 fill="currentColor">
                                <path
                                        d="M18 3a1 1 0 00-1.196-.98l-10 2A1 1 0 006 5v9.114A4.369 4.369 0 005 14c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V7.82l8-1.6v5.894A4.37 4.37 0 0015 12c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V3z" />
                            </svg>
                        </div>
                        <!-- date and comments -->
                        <div class="flex gap-2">
                            <div
                                    class="w-auto p-2 gap-1 dark:bg-dark-700 h-8 flex-center rounded-md text-sm font-medium title-color bg-gray-200 flex">
                                <span>23 نظر</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                                     fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z"
                                          clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div
                                    class="w-auto p-2 h-8 gap-1 dark:bg-dark-700 flex-center rounded-md text-sm font-medium title-color bg-gray-200 flex">
                                <span>فروردين 1401</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                                     fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                          clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <!-- image -->
                    <div class="aspect-video overflow-hidden rounded-lg">
                        <img src="/image/slider1.jpg" alt="slider1" class="w-full h-full">
                    </div>
                    <!-- title-text -->
                    <div
                            class="w-full h-auto border border-style rounded-lg flex flex-col items-center justify-center shadow-md p-2">
                        <span class="text-sm font-bold title-color">متن موسيقي</span>
                        <p class="pt-4 leading-loose text-xs font-medium text-center title-color">لورم ایپسوم متن ساختگی
                            با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه
                            روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و
                            کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته
                            حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای
                            طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت
                            می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و
                            زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی
                            اساسا مورد استفاده قرار گیرد.</p>
                    </div>
                    <!-- download -->
                    <span class="text-sm font-medium text-right title-color">:دانلود</span>
                    <div class="flex flex-col items-center gap-3">
                        <div
                                class="w-5/6 h-8 border border-styel rounded-2xl dark:bg-green-500 bg-green-500 hover:shadow-md transition-all duration-300 ">
                            <a href="http://dl.tabamusic.com/Music/1399/12/Hojat Ashrafzadeh & Reza Rashidpour - Baran Bebarad (128).mp3"
                               download="baran.mp3"
                               class="flex h-full flex-center w-full text-gray-500 dark:text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                </svg>
                                <span class="text-sm font-bold">كيفيت 320</span>
                            </a>
                        </div>
                        <div
                                class="w-5/6 h-8 border border-styel rounded-2xl bg-green-500 hover:shadow-md transition-all duration-300">
                            <a href="http://dl.tabamusic.com/Music/1399/12/Hojat Ashrafzadeh & Reza Rashidpour - Baran Bebarad (128).mp3"
                               download="baran.mp3"
                               class="flex h-full flex-center w-full text-gray-500 dark:text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                </svg>
                                <span class="text-sm font-bold">كيفيت 128</span>
                            </a>
                        </div>
                    </div>
                    <!-- play -->
                    <span class="text-sm font-medium text-right title-color">:پخش آنلاين</span>
                    <div class="flex justify-center">
                        <audio controls name="baran">
                            <source type="audio/mpeg"
                                    src="../mp3/Hojat Ashrafzadeh & Reza Rashidpour - Baran Bebarad.mp3">
                        </audio>
                    </div>
                    <!-- add to favorites -->
                    <span class="text-sm font-medium text-right title-color">:افزودن به علاقه مندي</span>
                    <div class="flex justify-center">
                        <button
                                class="w-auto h-8 border text-xs font-medium items-center px-2 transition-all bg-gray-300 dark:bg-dark-700 text-green-500 hover:shadow-lg border-green-500 rounded-lg flex">
                            <span>اضافه به علاقه مندي</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                        </button>
                    </div>
                </div>
                <!-- relation-artist -->
                <div
                        class=" hidden lg:col-span-1 lg:flex lg:flex-col p-3 bg-gray-200 border border-style dark:bg-dark-700 rounded-lg h-auto w-full">
                    <!-- title -->
                    <div
                            class="w-full h-auto border border-style rounded-lg flex flex-col  items-end gap-3 shadow-md p-3 bg-gray-400 dark:bg-dark-800">
                        <!-- artist title -->
                        <div class="flex">
                            <span class="text-sm font-normal title-color">مرتبط(خواننده)</span>
                        </div>
                    </div>
                    <!-- artists -->
                    <div class="p-4">
                        <div
                                class="flex flex-col m-2 gap-4 items-end title-color text-sm font-medium  border-r border-style">
                            <a href="#" class="pr-4 flex relative hover:text-blue-600 transition-all duration-200">
                                <span>محسن يگانه</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 absolute -right-1.5 top-0.5 w-3"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                                          clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="pr-4 flex relative hover:text-blue-600 transition-all duration-200">
                                <span>علي لهراسبي</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 absolute -right-1.5 top-0.5 w-3"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                                          clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="pr-4 flex relative hover:text-blue-600 transition-all duration-200">
                                <span>محسن يگانه</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 absolute -right-1.5 top-0.5 w-3"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                                          clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="pr-4 flex relative hover:text-blue-600 transition-all duration-200">
                                <span>علي لهراسبي</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 absolute -right-1.5 top-0.5 w-3"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                                          clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="pr-4 flex relative hover:text-blue-600 transition-all duration-200">
                                <span>محسن يگانه</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 absolute -right-1.5 top-0.5 w-3"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                                          clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="pr-4 flex relative hover:text-blue-600 transition-all duration-200">
                                <span>علي لهراسبي</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 absolute -right-1.5 top-0.5 w-3"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                                          clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="pr-4 flex relative hover:text-blue-600 transition-all duration-200">
                                <span>علي لهراسبي</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 absolute -right-1.5 top-0.5 w-3"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                                          clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="pr-4 flex relative hover:text-blue-600 transition-all duration-200">
                                <span>محسن يگانه</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 absolute -right-1.5 top-0.5 w-3"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                                          clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="pr-4 flex relative hover:text-blue-600 transition-all duration-200">
                                <span>علي لهراسبي</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 absolute -right-1.5 top-0.5 w-3"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                                          clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="pr-4 flex relative hover:text-blue-600 transition-all duration-200">
                                <span>محسن يگانه</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 absolute -right-1.5 top-0.5 w-3"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                                          clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="pr-4 flex relative hover:text-blue-600 transition-all duration-200">
                                <span>علي لهراسبي</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 absolute -right-1.5 top-0.5 w-3"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                                          clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="pr-4 flex relative hover:text-blue-600 transition-all duration-200">
                                <span>مهدي جهاني</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 absolute -right-1.5 top-0.5 w-3"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                                          clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="pr-4 flex relative hover:text-blue-600 transition-all duration-200">
                                <span>علي لهراسبي</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 absolute -right-1.5 top-0.5 w-3"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                                          clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="pr-4 flex relative hover:text-blue-600 transition-all duration-200">
                                <span>محسن يگانه</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 absolute -right-1.5 top-0.5 w-3"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                                          clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="pr-4 flex relative hover:text-blue-600 transition-all duration-200">
                                <span>علي لهراسبي</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 absolute -right-1.5 top-0.5 w-3"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                                          clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="pr-4 flex relative hover:text-blue-600 transition-all duration-200">
                                <span>مهدي جهاني</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 absolute -right-1.5 top-0.5 w-3"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                                          clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="pr-4 flex relative hover:text-blue-600 transition-all duration-200">
                                <span>ناصرپوركرم</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 absolute -right-1.5 top-0.5 w-3"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                                          clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="pr-4 flex relative hover:text-blue-600 transition-all duration-200">
                                <span>علي لهراسبي</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 absolute -right-1.5 top-0.5 w-3"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                                          clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="pr-4 flex relative hover:text-blue-600 transition-all duration-200">
                                <span>مهدي جهاني</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 absolute -right-1.5 top-0.5 w-3"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                                          clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="pr-4 flex relative hover:text-blue-600 transition-all duration-200">
                                <span>ناصرپوركرم</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 absolute -right-1.5 top-0.5 w-3"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                                          clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- suggested music in mobile -->
            <div class="flex flex-col my-3 gap-3 lg:hidden">
                <!-- title -->
                <span class="text-right title-color text-sm font-bold">پيشنهادها</span>
                <!-- music -->
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-2">
                    <a href="#"
                       class="flex flex-col items-center justify-center border border-style rounded-lg p-2 w-full">
                        <div class="aspect-square">
                            <img src="/image/slider1.jpg" alt="slider1" class="w-full h-full">
                        </div>
                        <div class="flex flex-col text-sm title-color font-normal flex-center">
                            <span>بارون</span>
                            <span>محدي احمدوند</span>
                        </div>
                    </a>
                    <a href="#"
                       class="flex flex-col items-center justify-center border border-style rounded-lg p-2 w-full">
                        <div class="aspect-square ">
                            <img src="/image/slider3.jpg" alt="slider3" class="w-full h-full">
                        </div>
                        <div class="flex flex-col text-sm title-color font-normal flex-center">
                            <span>بارون</span>
                            <span>محدي احمدوند</span>
                        </div>
                    </a>
                    <a href="#"
                       class="flex flex-col items-center justify-center border border-style rounded-lg p-2 w-full">
                        <div class="aspect-square">
                            <img src="/image/slider3.jpg" alt="slider3" class="w-full h-full">
                        </div>
                        <div class="flex flex-col text-sm title-color font-normal flex-center">
                            <span>بارون</span>
                            <span>محدي احمدوند</span>
                        </div>
                    </a>
                    <a href="#"
                       class="flex flex-col items-center justify-center border border-style rounded-lg p-2 w-full">
                        <div class="aspect-square">
                            <img src="/image/slider2.jpg" alt="slider2" class="w-full h-full">
                        </div>
                        <div class="flex flex-col text-sm title-color font-normal flex-center">
                            <span>دلتنگي</span>
                            <span>مهدي جهاني</span>
                        </div>
                    </a>
                    <a href="#"
                       class="flex flex-col items-center justify-center border border-style rounded-lg p-2 w-full">
                        <div class="aspect-square">
                            <img src="/image/slider2.jpg" alt="slider2" class="w-full h-full">
                        </div>
                        <div class="flex flex-col text-sm title-color font-normal flex-center">
                            <span>عشق اول</span>
                            <span>محدي احمدوند</span>
                        </div>
                    </a>
                    <a href="#"
                       class="flex flex-col items-center justify-center border border-style rounded-lg p-2 w-full">
                        <div class="aspect-square">
                            <img src="/image/slider1.jpg" alt="slider2" class="w-full h-full">
                        </div>
                        <div class="flex flex-col text-sm title-color font-normal flex-center">
                            <span>فندك تبدار</span>
                            <span>مخسن چاوشي</span>
                        </div>
                    </a>
                </div>
            </div>
            <!-- comment -->
            <div class="flex flex-col gap-2 lg:mt-3 mb-3 ">
                <span class="text-right title-color text-sm font-bold">ثبت نظر</span>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-2 md:gap-8">
                    <!-- textarea -->
                    <div class="flex flex-col items-end md:col-span-1 ">
                        <textarea name="" placeholder="...نظر خودرا بنويسيد" id="" cols="30" rows="10"
                                  class="w-full rounded-2xl text-right dark:bg-zinc-800 text-xs font-normal title-color focus:ring-0 resize-none ease-in-out border border-style focus:shadow-md transition-shadow dark:text-gray-400 focus:border-style h-40"></textarea>
                    </div>
                    <!-- button and email and name -->
                    <div class="md:col-span-1 flex flex-col md:pb-2 md:justify-between gap-2 md:gap-4">
                        <!-- name -->
                        <div class="flex flexitems-end">
                            <input type="text" placeholder="نام"
                                   class="w-full  rounded-2xl border text-right dark:bg-zinc-800 border-style text-xs font-normal title-color h-9 focus:ring-0 ease-in-out focus:shadow-md transition-shadow dark:text-gray-400 focus:border-style">
                        </div>
                        <!-- email -->
                        <div class="flex items-end">
                            <input type="email" placeholder="ايميل"
                                   class="w-full rounded-2xl border text-right dark:bg-zinc-800 border-style text-xs font-normal title-color h-9 ease-in-out focus:ring-0 focus:shadow-md transition-shadow dark:text-gray-400 focus:border-style">
                        </div>
                        <!-- btn -->
                        <button
                                class="w-full rounded-2xl md:col-span-1 md:col-start-2 dark:text-gray-500 h-8 bg-yellow-500 text-sm font-normal title-color flex flex-center hover:scale-105 transition-all duration-200 hover:shadow-md">ثبت
                            نظر</button>
                    </div>
                </div>
            </div>
            <!-- users comments -->
            <div class="flex flex-col gap-2 mb-3">
                <!-- title -->
                <span class="text-right title-color text-sm font-bold">نظرات كاربران</span>
                <!-- comments -->
                <div class="flex flex-col w-full gap-3 h-auto">
                    <!-- comment-1 -->
                    <div
                            class="flex dark:bg-dark-700 shadow-md bg-gray-200 flex-row-reverse gap-3 h-auto w-full border border-style rounded-md p-4">
                        <!-- img -->
                        <div class="w-24 h-24">
                            <img src="/image/avatar.jpg" alt="avatar" class="w-full rounded-full">
                        </div>
                        <div class="flex gap-3 flex-col lg:justify-center w-full h-auto">
                            <!-- name and date -->
                            <div class="flex flex-row-reverse gap-3 text-sm font-bold title-color">
                                <span>سيدعلي موسوي</span>
                                <span>1400/12/3</span>
                            </div>
                            <!-- text -->
                            <div class="text-xs font-normal text-right w-auto title-color">
                                <p> از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون، و برای شرایط فعلی
                                    تکنولوژی مورد</p>
                            </div>
                        </div>
                    </div>
                    <!-- comment-2 -->
                    <div
                            class="flex dark:bg-dark-700 shadow-md bg-gray-200 flex-row-reverse gap-3 h-auto w-full border border-style rounded-md p-4">
                        <!-- img -->
                        <div class="w-24 h-24">
                            <img src="/image/avatar.jpg" alt="avatar" class="w-full rounded-full">
                        </div>
                        <div class="flex lg:justify-center gap-3 flex-col w-full h-auto">
                            <!-- name and date -->
                            <div class="flex flex-row-reverse gap-3 text-sm font-bold title-color">
                                <span>سيدعلي موسوي</span>
                                <span>1400/12/3</span>
                            </div>
                            <!-- text -->
                            <div class="text-xs font-normal text-right w-auto title-color">
                                <p> از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                                    است و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد</p>
                            </div>
                        </div>
                    </div>
                    <!-- comment-3 -->
                    <div
                            class="flex dark:bg-dark-700 shadow-md bg-gray-200 flex-row-reverse gap-3 h-auto w-full border border-style rounded-md p-4">
                        <!-- img -->
                        <div class="w-24 h-24">
                            <img src="/image/avatar.jpg" alt="avatar" class="w-full rounded-full">
                        </div>
                        <div class="flex lg:justify-center gap-3 flex-col w-full h-auto">
                            <!-- name and date -->
                            <div class="flex flex-row-reverse gap-3 text-sm font-bold title-color">
                                <span>سيدعلي موسوي</span>
                                <span>1400/12/3</span>
                            </div>
                            <!-- text -->
                            <div class="text-xs font-normal text-right w-auto title-color">
                                <p> از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                                    است، و برای شرایط فعلی تکنولوژی مورد</p>
                            </div>
                        </div>
                    </div>
                    <!-- comment-4 -->
                    <div
                            class="flex dark:bg-dark-700 shadow-md bg-gray-200 flex-row-reverse gap-3 h-auto w-full border border-style rounded-md p-4">
                        <!-- img -->
                        <div class="w-24 h-24">
                            <img src="/image/avatar.jpg" alt="avatar" class="w-full rounded-full">
                        </div>
                        <div class="flex lg:justify-center gap-3 flex-col w-full h-auto">
                            <!-- name and date -->
                            <div class="flex flex-row-reverse gap-3 text-sm font-bold title-color">
                                <span>سيدعلي موسوي</span>
                                <span>1400/12/3</span>
                            </div>
                            <!-- text -->
                            <div class="text-xs font-normal text-right w-auto title-color">
                                <p> از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                                    است، و برای شرایط فعلی تکنولوژی مورد</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection