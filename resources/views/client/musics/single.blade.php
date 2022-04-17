@extends('client.layout.master')


@section('content')

    <main>
        <!-- top swiper -->
        <div class="container">
            <div class="mb-4 relative top_swiper_singles">
                <div class="swiper top_swiper_single px-3">
                    <div class="swiper-wrapper flex sliders">
                        @foreach($topMusics as $topMusic)
                            <div class="swiper-slide slider  w-full shadow-lg rounded-lg overflow-hidden"
                             style="width: 6rem;">
                            <a href="{{route('single.music', $topMusic->slug)}}" class="aspect-square">
                                <img src="{{'/storage/'. $topMusic->image}}" alt="{{$topMusic->title}}" title="{{$topMusic->title}}" class="hover:scale-105 duration-300">
                            </a>
                        </div>
                        @endforeach
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
                            @foreach($relStyles as $relStyle)
                                <a href="{{route('single.music', $relStyle->slug)}}" class="pr-4 flex relative hover:text-blue-600 transition-all duration-200">
                                <span class="text-right">{{$relStyle->title}} - {{$relStyle->artist->name}}</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 absolute -right-1.5 top-0.5 w-3"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                                          clip-rule="evenodd" />
                                </svg>
                            </a>
                            @endforeach
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
                            <span class="text-sm text-right font-normal title-color">آهنگ <span class="text-red-500">{{$music->title}}
                                </span>از <a href="#" class="text-blue-500">{{$music->artist->name}}</a></span>
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
                                <span>{{$music->comments()->count()}} نظر</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                                     fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z"
                                          clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div
                                    class="w-auto p-2 h-8 gap-1 dark:bg-dark-700 flex-center rounded-md text-sm font-medium title-color bg-gray-200 flex">
                                <span>{{\Morilog\Jalali\Jalalian::forge($music->is_publish)->format('%B ، %Y')}}</span>
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
                        <img src="{{'/storage/'.$music->image}}" alt="{{$music->title}}" title="{{$music->title}}" class="w-full h-full">
                    </div>
                    <!-- title-text -->
                    <div
                            class="w-full h-auto border border-style rounded-lg flex flex-col items-center justify-center shadow-md p-2">
                        <span class="text-sm font-bold title-color">متن موسيقي</span>
                        <p class="pt-4 leading-loose text-xs font-medium text-center title-color">{{$music->description}}</p>
                    </div>
                    <!-- download -->
                    <span class="text-sm font-medium text-right title-color">:دانلود</span>
                    <div class="flex flex-col items-center gap-3">
                        @if($music->mp3_320 != null)
                            <div
                                    class="w-5/6 h-8 border border-styel rounded-2xl dark:bg-green-500 bg-green-500 hover:shadow-md transition-all duration-300 ">
                                <a href="{{$music->mp3_320}}"
                                   download="{{$music->slug}}.mp3"
                                   class="flex h-full flex-center w-full text-gray-500 dark:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                    </svg>
                                    <span class="text-sm font-bold">كيفيت 320</span>
                                </a>
                            </div>
                        @endif
                        @if($music->mp3_128 != null)
                            <div
                                    class="w-5/6 h-8 border border-styel rounded-2xl bg-green-500 hover:shadow-md transition-all duration-300">
                                <a href="{{$music->mp3_128}}"
                                   download="{{$music->slug}}.mp3"
                                   class="flex h-full flex-center w-full text-gray-500 dark:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                         stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                    </svg>
                                    <span class="text-sm font-bold">كيفيت 128</span>
                                </a>
                            </div>
                        @endif
                    </div>
                    <!-- play -->
                    <span class="text-sm font-medium text-right title-color">:پخش آنلاين</span>
                    <div class="flex justify-center">
                        <audio controls name="baran">
                            <source type="audio/mpeg"
                                    src="{{$music->mp3_320}}">
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
                            @foreach($relArtists as $relArtist)
                                <a href="#" class="pr-4 flex relative hover:text-blue-600 transition-all duration-200">
                                <span class="text-right">{{$relArtist->name}}</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 absolute -right-1.5 top-0.5 w-3"
                                     viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                                          clip-rule="evenodd" />
                                </svg>
                            </a>
                            @endforeach
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

            <form action="{{route('create.comment', $music->slug)}}" method="post" class="flex flex-col gap-2 lg:mt-3 mb-3 ">
                @csrf
                <span class="text-right title-color text-sm font-bold">ثبت نظر</span>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-2 md:gap-8">
                    <!-- textarea -->
                    <div class="flex flex-col items-end md:col-span-1 ">
                        <textarea dir="rtl" name="content" placeholder="نظر خودرا بنويسيد..." id="" cols="30" rows="10"
                                  class="w-full rounded-2xl text-right dark:bg-zinc-800 text-xs font-normal title-color focus:ring-0 resize-none ease-in-out border border-style focus:shadow-md transition-shadow dark:text-gray-400 focus:border-style h-40"></textarea>
                    </div>
                    <!-- button and email and name -->
                    <div class="md:col-span-1 flex flex-col md:pb-2 md:justify-between gap-2 md:gap-4">
                        <!-- name -->
                        <div class="flex flexitems-end">
                            <input name="name" type="text" @auth value="{{auth()->user()->name}}" @endauth  placeholder="نام"
                                   class="w-full  rounded-2xl border text-right dark:bg-zinc-800 border-style text-xs font-normal title-color h-9 focus:ring-0 ease-in-out focus:shadow-md transition-shadow dark:text-gray-400 focus:border-style">
                        </div>
                        <!-- email -->
                        <div class="flex items-end">
                            <input name="email" @auth value="{{auth()->user()->email}}" @endauth type="email" placeholder="ايميل"
                                   class="w-full rounded-2xl border text-right dark:bg-zinc-800 border-style text-xs font-normal title-color h-9 ease-in-out focus:ring-0 focus:shadow-md transition-shadow dark:text-gray-400 focus:border-style">
                        </div>
                        <!-- btn -->
                        <button
                                class="w-full rounded-2xl md:col-span-1 md:col-start-2 dark:text-gray-500 h-8 bg-yellow-500 text-sm font-normal title-color flex flex-center hover:scale-105 transition-all duration-200 hover:shadow-md">ثبت
                            نظر</button>
                    </div>
                </div>
            </form>
            <!-- users comments -->
            <div class="flex flex-col gap-2 mb-3">
                <!-- title -->
                <span class="text-right title-color text-sm font-bold">نظرات كاربران</span>
                <!-- comments -->
                <div class="flex flex-col w-full gap-3 h-auto">
                    <!-- comment-1 -->
                    @foreach($music->comments as $comment)
                        <div
                            class="flex dark:bg-dark-700 shadow-md bg-gray-200 flex-row-reverse gap-3 h-auto w-full border border-style rounded-md p-4">
                        <!-- img -->
                        <div class="w-12 h-12">
                            <img src="/image/user.jpg" alt="avatar" class="w-full rounded-full">
                        </div>
                        <div class="flex gap-3 flex-col lg:justify-center w-full h-auto">
                            <!-- name and date -->
                            <div class="flex flex-row-reverse gap-3 text-sm font-bold title-color">
                                @if($comment->user_id != null)
                                <span>{{$comment->user->name}}</span>
                                @else
                                    <span>{{$comment->name}}</span>
                                @endif
                                    <span>{{\Morilog\Jalali\Jalalian::forge($comment->created_at)->ago()}}</span>
                            </div>
                            <!-- text -->
                            <div dir="rtl" class="text-xs flex justify-start font-normal w-auto title-color">
                                <p class="text-right">{{$comment->content}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>

@endsection

@section('script')
    <script>
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
    </script>
@endsection