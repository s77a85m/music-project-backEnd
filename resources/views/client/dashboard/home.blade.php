@extends('client.layout.master')


@section('content')

    <main class="pt-4 lg:mb-0">
        <div class="container w-full h-[690px] sm:h-[565px] px-5">
            <div x-data="handleDashboard" class="flex relative flex-col h-full bg-gray-300 dark:bg-dark-800 overflow-hidden rounded-md">
                <!-- content -->
                <div class="h-auto p-2 w-full">
                    <!-- start home -->
                    <div x-show="isOpen==2" x-cloak>
                        <div class="border-b h-6 w-full dark:border-gray-700 py-4 text-xs text-gray-500 dark:text-gray-500 border-gray-200 flex-center mb-3">
                            <span>پروفايل</span>
                        </div>
                        <!-- content-home -->
                        <div class="flex flex-col items-center ">
                            <!-- prof -->
                            <div class="flex flex-col w-full dark:bg-dark-700 bg-gray-100 py-4 rounded-md shadow-md items-center gap-y-7">
                                <!-- img -->
                                <div class="w-32 h-32">
                                    <img id="avatar" @if($user->avatar != null) src="/storage/{{$user->avatar}}" @else src="/image/user.jpg" @endif alt="avatar" class="rounded-full w-full h-full">
                                </div>
                                <!-- fields -->
                                <div class="flex gap-2 flex-col items-end">
                                    <!-- name -->
                                    <div class="flex-center dark:text-yellow-500 text-gray-500 text-xs font-medium gap-x-2">
                                        <span id="nameHome">{{$user->name}}</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <!-- email -->
                                    <div class="flex-center dark:text-yellow-500 text-gray-500 text-xs font-medium gap-x-2">
                                        <span id="emailHome">{{$user->email}}</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <!-- info -->
                            <div class="flex w-full py-4 gap-2">
                                <!-- favorit -->
                                <div class="flex flex-col justify-center items-center h-16 w-1/2 text-gray-200 rounded-md shadow-md bg-gradient-to-bl from-violet-500 via-purple-700 to-amber-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                                    </svg>
                                    <span>{{$user->musics()->count()}}</span>
                                </div>
                                <!-- comment -->
                                <div class="flex flex-col justify-center items-center h-16 w-1/2 text-gray-200 rounded-md shadow-md dark:bg-dark-700 bg-gradient-to-bl from-amber-500 via-purple-700 to-violet-500 bg-gray-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-chat-fill" viewBox="0 0 16 16">
                                        <path d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9.06 9.06 0 0 0 8 15z"/>
                                    </svg>
                                    <span>{{$user->comments()->count()}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end home -->
                    <!-- start player -->
                    <div x-show="isOpen==3" x-cloak>
                        <div class="border-b h-6 w-full dark:border-gray-700 py-4 text-xs text-gray-500 dark:text-gray-500 border-gray-200 flex-center mb-3">
                            <span>پخش كننده موسيقي</span>
                        </div>
                        <!-- content-player -->
                        <div class="flex flex-col shadow-md items-center">
                            <!-- box -->
                            <div id="container" class="flex flex-col relative w-full h-[580px] sm:h-[460px] dark:bg-dark-700 overflow-auto bg-gray-100 p-1 rounded-md items-center">
                                {{-- loading-player --}}
                                <svg id="loading_player" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="currentColor" class="z-10 hidden bg-gray-100 dark:bg-dark-700 absolute w-full h-full" style="shape-rendering: auto;" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                                    <path fill="none" stroke="#b0b0b0" stroke-width="8" stroke-dasharray="42.76482137044271 42.76482137044271" d="M24.3 30C11.4 30 5 43.3 5 50s6.4 20 19.3 20c19.3 0 32.1-40 51.4-40 C88.6 30 95 43.3 95 50s-6.4 20-19.3 20C56.4 70 43.6 30 24.3 30z" stroke-linecap="round" style="transform:scale(0.3);transform-origin:50px 50px">
                                        <animate attributeName="stroke-dashoffset" repeatCount="indefinite" dur="1.4492753623188404s" keyTimes="0;1" values="0;256.58892822265625"/>
                                    </path>
                                </svg>
                                <!-- image -->
                                <div class="w-56 h-56 mt-4 flex flex-col rounded-lg shadow-lg overflow-hidden">
                                    <img id="image" src="" class="w-full h-full" alt="slider1">
                                </div>
                                <div class=" flex flex-col mt-2 items-center gap-2 dark:text-gray-400 font-medium">
                                    <span id="title" class="text-sm">عشق اول</span>
                                    <span id="artist" class="text-[9px]">مهدي احمدوند</span>
                                </div>
                                <!-- audio -->
                                <audio src="" id="audio"></audio>
                                <!-- proggres -->
                                <div class="mt-20 px-4 w-full gap-1 flex flex-col">
                                    <!-- porggres bar -->
                                    <div id="progressContainer" class="w-full cursor-pointer h-[2px] rounded-full dark:bg-gray-600 bg-gray-300">
                                        <div id="progressBar" class="h-full flex relative dark:bg-gray-300 bg-gray-600" style="width: 0%;">
                                            <div class="absolute w-[7px] h-[7px] -top-0.5 bg-gray-600 dark:bg-gray-300 rounded-full -right-1"></div>
                                        </div>
                                    </div>
                                    <!-- times -->
                                    <div class="flex justify-between dark:text-gray-400 text-gray-600 text-[9px] font-medium w-full">
                                        <span id="current">00:00</span>
                                        <span id="duration"></span>
                                    </div>
                                </div>
                                <!-- buttom -->
                                <div class="flex w-full h-10 gap-4 mt-5 justify-center">
                                    <!-- mix -->
                                    <button id="mix" class="text-gray-700 p-3 rounded-full flex-center active:scale-90 transition-all duration-150 ease-in dark:text-gray-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="16px" height="18px" viewBox="0 0 8 8"><path d="M6 0v1h-.5c-.35 0-.56.1-.78.38L3.31 3.16 1.78 1.38C1.56 1.12 1.34 1 1 1H0v1h1c-.05 0 .01.04.03.03l1.63 1.91L1 6H0v1h1c.35 0 .56-.1.78-.38l1.53-1.91 1.66 1.91c.22.26.44.38.78.38H6v1l2-1.5L6 5v1h-.22c-.01-.01-.05-.04-.06-.03L3.97 3.91 5.5 2H6v1l2-1.5L6 0z"  class="color000 svgShape"></path>
                                        </svg>
                                    </button>
                                    <!-- left -->
                                    <button id="left" class="text-gray-700 flex-center active:scale-90 transition-all duration-150 ease-in dark:text-gray-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-skip-start-fill" viewBox="0 0 16 16">
                                            <path d="M4 4a.5.5 0 0 1 1 0v3.248l6.267-3.636c.54-.313 1.232.066 1.232.696v7.384c0 .63-.692 1.01-1.232.697L5 8.753V12a.5.5 0 0 1-1 0V4z"/>
                                        </svg>
                                    </button>
                                    <!-- play -->
                                    <button id="play" class="dark:text-gray-600 active:scale-90 transition-all duration-150 ease-in shadow-md shadow-red-500 dark:shadow-yellow-700 text-gray-200 p-2 rounded-full flex-center dark:bg-yellow-500 bg-red-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
                                            <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
                                        </svg>
                                    </button>
                                    <!-- right -->
                                    <button id="right" class="text-gray-700 flex-center active:scale-90 transition-all duration-150 ease-in dark:text-gray-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-skip-end-fill" viewBox="0 0 16 16">
                                            <path d="M12.5 4a.5.5 0 0 0-1 0v3.248L5.233 3.612C4.693 3.3 4 3.678 4 4.308v7.384c0 .63.692 1.01 1.233.697L11.5 8.753V12a.5.5 0 0 0 1 0V4z"/>
                                        </svg>
                                    </button>
                                    <!-- reloade -->
                                    <button id="reload" class="text-gray-700 rounded-full p-3 flex-center active:scale-90 transition-all duration-150 ease-in dark:text-gray-200">
                                        <svg xmlns="http://www.w3.org/2000/svg"  width="18px" height="25px" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M7 7h10v1.79c0 .45.54.67.85.35l2.79-2.79c.2-.2.2-.51 0-.71l-2.79-2.79c-.31-.31-.85-.09-.85.36V5H6c-.55 0-1 .45-1 1v4c0 .55.45 1 1 1s1-.45 1-1V7zm10 10H7v-1.79c0-.45-.54-.67-.85-.35l-2.79 2.79c-.2.2-.2.51 0 .71l2.79 2.79c.31.31.85.09.85-.36V19h11c.55 0 1-.45 1-1v-4c0-.55-.45-1-1-1s-1 .45-1 1v3zm-4-2.75V9.81c0-.45-.36-.81-.81-.81-.13 0-.25.03-.36.09l-1.49.74c-.21.1-.34.32-.34.55 0 .34.28.62.62.62h.88v3.25c0 .41.34.75.75.75s.75-.34.75-.75z"  class="color000 svgShape">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end player -->
                    <!-- start favorite -->
                    <div x-show="isOpen==4" x-cloak>
                        <div class="border-b h-6 w-full dark:border-gray-700 py-4 text-xs text-gray-500 dark:text-gray-500 border-gray-200 flex-center mb-3">
                            <span>ليست علاقه مندي</span>
                        </div>
                        <!-- content-favorite -->
                        <div class="flex flex-col shadow-md items-center">
                            <!-- list -->
                            <ul id="favList" class="flex relative flex-col w-full h-[580px] sm:h-[460px] dark:bg-dark-700 overflow-auto bg-gray-100 p-1 rounded-md items-center">
                                {{-- loading-favorite --}}
                                <svg id="loading_favorite" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="currentColor" class="z-10 bg-gray-100 dark:bg-dark-700 absolute w-full h-full" style="shape-rendering: auto;"  viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                                    <path fill="none" stroke="#b0b0b0" stroke-width="8" stroke-dasharray="42.76482137044271 42.76482137044271" d="M24.3 30C11.4 30 5 43.3 5 50s6.4 20 19.3 20c19.3 0 32.1-40 51.4-40 C88.6 30 95 43.3 95 50s-6.4 20-19.3 20C56.4 70 43.6 30 24.3 30z" stroke-linecap="round" style="transform:scale(0.3);transform-origin:50px 50px">
                                        <animate attributeName="stroke-dashoffset" repeatCount="indefinite" dur="1.4492753623188404s" keyTimes="0;1" values="0;256.58892822265625"/>
                                    </path>
                                </svg>
                            </ul>
                        </div>
                    </div>
                    <!-- end favorite -->
                    <!-- setting -->
                    <div x-show="isOpen==5" x-cloak>
                        <div class="border-b h-6 w-full dark:border-gray-700 py-4 text-xs text-gray-500 dark:text-gray-500 border-gray-200 flex-center mb-3">
                            <span>تنظيمات</span>
                        </div>
                        <!-- content-setting -->
                        <div class="flex flex-col relative items-center ">
                            {{-- loading-setting --}}
                            <svg id="loading_setting" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="currentColor" class="z-10 bg-gray-100 dark:bg-dark-700 absolute w-full h-full" style="shape-rendering: auto;"  viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                                <path fill="none" stroke="#b0b0b0" stroke-width="8" stroke-dasharray="42.76482137044271 42.76482137044271" d="M24.3 30C11.4 30 5 43.3 5 50s6.4 20 19.3 20c19.3 0 32.1-40 51.4-40 C88.6 30 95 43.3 95 50s-6.4 20-19.3 20C56.4 70 43.6 30 24.3 30z" stroke-linecap="round" style="transform:scale(0.3);transform-origin:50px 50px">
                                    <animate attributeName="stroke-dashoffset" repeatCount="indefinite" dur="1.4492753623188404s" keyTimes="0;1" values="0;256.58892822265625"/>
                                </path>
                            </svg>
                            <!-- form -->
                            <form action="javascript:void(0)" id="form-data" method="post" enctype="multipart/form-data" class="flex  h-[580px] flex-col w-full sm:h-[460px] dark:bg-dark-700 bg-gray-100 py-4 rounded-md shadow-md items-center gap-y-7 sm:gap-y-4">
                                @csrf
                                @method('PATCH')
                                <!-- img -->
                                <div class="relative w-32 h-32">
                                    <img id="settImg" src="" alt="avatar" class="rounded-full w-full h-full">
                                    <input type="file" id="file" name="file" class="absolute invisible">
                                    <label for="file" class="hover:cursor-pointer absolute -bottom-3 left-14 rounded-full  bg-gray-100 dark:bg-dark-700 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" class=" text-orange-500 h-6 p-0.5 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </label>
                                </div>
                                <span id="file_error" class="text-red-500 flex-center er text-xs font-medium "></span>
                                <!-- fields -->
                                <div class="flex gap-2 px-3 flex-col items-end mt-10 w-full">
                                    <!-- name -->
                                    <div class="flex flex-col w-full items-end gap-1 dark:text-gray-300 text-gray-600 text-xs font-medium gap-x-2">
                                        <label class="px-2" for="name">نام</label>
                                        <div class="relative w-full">
                                            <input dir="rtl" id="settName"  type="text" class="pr-6 border shadow-md text-right text-xs font-normal border-gray-400 focus:ring-0 focus:border-gray-500 dark:bg-dark-700 bg-gray-100 w-full h-8 rounded-xl" >
                                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-2 right-1 h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <span id="name_error" class="text-red-500 er text-xs font-medium "></span>
                                    </div>
                                    <!-- email -->
                                    <div class="flex flex-col w-full items-end gap-1 dark:text-gray-300 text-gray-600 text-xs font-medium gap-x-2">
                                        <label class="px-2" for="email">ايميل</label>
                                        <div class="relative w-full">
                                            <input dir="rtl" type="text" class="pr-6 shadow-md border text-right text-xs font-normal border-gray-400 focus:ring-0 focus:border-gray-500 dark:bg-dark-700 bg-gray-100 w-full h-8 rounded-xl" id="settEmail">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-2 right-1 h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M14.243 5.757a6 6 0 10-.986 9.284 1 1 0 111.087 1.678A8 8 0 1118 10a3 3 0 01-4.8 2.401A4 4 0 1114 10a1 1 0 102 0c0-1.537-.586-3.07-1.757-4.243zM12 10a2 2 0 10-4 0 2 2 0 004 0z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <span id="email_error" class="text-red-500 er text-xs font-medium "></span>
                                    </div>
                                    <!-- password -->
                                    <div class="flex flex-col w-full items-end gap-1 dark:text-gray-300 text-gray-600 text-xs font-medium gap-x-2">
                                        <label class="px-2" for="name">رمزعبور</label>
                                        <div class="relative w-full">
                                            <input dir="rtl" type="text" placeholder="رمز عبور جديد" class="pr-6 shadow-md border text-right text-xs font-normal border-gray-400 focus:ring-0 focus:border-gray-500 dark:bg-dark-700 bg-gray-100 w-full h-8 rounded-xl" id="settPass">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-2 right-1 h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M18 8a6 6 0 01-7.743 5.743L10 14l-1 1-1 1H6v2H2v-4l4.257-4.257A6 6 0 1118 8zm-6-4a1 1 0 100 2 2 2 0 012 2 1 1 0 102 0 4 4 0 00-4-4z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <span id="password_error" class="text-red-500 er text-xs font-medium "></span>
                                    </div>
                                    <input type="submit" id="submit-button" value="ويرايش" class="w-full  active:scale-90 h-8 cursor-pointer rounded-full flex-center mt-3 shadow-md bg-green-500 text-xs font-normal text-gray-200">
                                </div>
                            </form>

                        </div>
                    </div>
                    <!-- end setting -->
                </div>
                <!-- footer-profile -->
                <div class="absolute bottom-0 w-full h-12 flex flex-row-reverse items-center justify-around ">
                    <!-- setting -->
                    <div x-on:click="openSetting()" x-bind:class="isOpen==5 ? 'text-gray-800 bg-purple-600' : 'text-purple-600'" class="h-8 w-8 flex-center rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <!-- favorite -->
                    <div x-on:click="openFavorite()" x-bind:class="isOpen==4 ? 'text-gray-800 bg-purple-600' : 'text-purple-600'" class="h-8 w-8 flex-center rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <!-- play -->
                    <div x-on:click="openPlayer()" x-bind:class="isOpen==3 ? 'text-gray-800 bg-purple-600' : 'text-purple-600'" class="h-8 w-8 flex-center rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <!-- comment -->
                    <div class="h-8 w-8 flex-center rounded-full text-purple-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <!-- home -->
                    <div x-on:click="openHome()" x-bind:class="isOpen==2 ? 'text-gray-800 bg-purple-600' : 'text-purple-600'" class="h-8 w-8 flex-center rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection


@section('script')

    <!-- play music -->
    <script>
        let cover=document.getElementById("image");
        let titleSong=document.getElementById("title");
        let artistTitle=document.getElementById("artist");
        let progressContainer=document.getElementById("progressContainer");
        let progressBar=document.getElementById("progressBar");
        let currenttime=document.getElementById("current");
        let durationtime=document.getElementById("duration");
        let mixBtn=document.getElementById("mix");
        let leftBtn=document.getElementById("left");
        let playBtn=document.getElementById("play");
        let rightBtn=document.getElementById("right");
        let reloadBtn=document.getElementById("reload");
        let audio=document.getElementById("audio");
        let avatar=document.getElementById("avatar");
        let favList=document.getElementById("favList");
        let settName=document.getElementById("settName");
        let settEmail=document.getElementById("settEmail");
        let settPass=document.getElementById("settPass");
        let settImg=document.getElementById("settImg");



        // array title
        let titles=[]
        // array audio
        let songs=[]
        // array image
        let images=[]
        // array artist
        let artists=[]

        // pointer
        let songIndex=0

        // load song


        function loadSong(song, title, image, artist){
            audio.src= song;
            cover.src= `/storage/${image}`;
            titleSong.innerHTML= title;
            artistTitle.innerHTML= artist;
        }

        function playSong(){
            playBtn.classList.add('play');
            playBtn.innerHTML=`<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pause-fill" viewBox="0 0 16 16">
                                    <path d="M5.5 3.5A1.5 1.5 0 0 1 7 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5zm5 0A1.5 1.5 0 0 1 12 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5z"/>
                                </svg>`;
            audio.play();
        }
        function pausingSong(){
            playBtn.classList.remove('play');
            playBtn.innerHTML=`<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
                                    <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/>
                                </svg>`;
            audio.pause();
        }

        function prevSong(){
            songIndex--
            if(songIndex<0){
                songIndex=songs.length - 1
            }
            loadSong(songs[songIndex], titles[songIndex], images[songIndex], artists[songIndex]);
            playSong();
        }
        function nextSong(){

            if(mixBtn.classList.contains('dark:bg-gray-800')){
                let array=[];
                for(let i=0; i<songs.length; i++){
                    if(i===songIndex){
                        continue
                    }
                    array.push(i);
                }
                songIndex=array[Math.floor(Math.random() * array.length)];
            }else if(reloadBtn.classList.contains('dark:bg-gray-800')){
                songIndex;
            }else{
                songIndex++
            }

            if(songIndex > songs.length - 1){
                songIndex = 0;
            }
            loadSong(songs[songIndex], titles[songIndex], images[songIndex], artists[songIndex]);
            playSong();
        }

        function updateProgress(e){
            const {currentTime, duration}=e.srcElement;
            let progressPercent=(currentTime / duration) * 100;
            progressBar.style.width=`${progressPercent}%`;
            // times update
            let newTime = (audio.currentTime/audio.duration) * 100;
            let currMins = Math.floor(audio.currentTime / 60);
            let currSec = Math.floor(audio.currentTime - (currMins * 60));
            let durMins = Math.floor(audio.duration / 60);
            let durSec = Math.floor(audio.duration - (durMins * 60));
            if(currMins < 10){ currMins = "0"+currMins }
            if(currSec < 10){ currSec = "0"+currSec; }
            if(durMins < 10){ durMins = "0"+durMins; }
            if(durSec < 10){ durSec = "0"+durSec; }
            currenttime.innerHTML=`${currMins}:${currSec}`;
            if(!isNaN(durMins)){
                durationtime.innerHTML=`${durMins}:${durSec}`;
            }
        }

        function setProgress(e){
            let width=this.clientWidth;
            let clickX=e.offsetX;
            let duration=audio.duration;

            audio.currentTime=(clickX/width)*duration;
        }

        function setRandom(){
            let isActive = mixBtn.classList.contains('dark:bg-gray-800');

            if(isActive){
                mixBtn.classList.remove('dark:bg-gray-800', 'bg-gray-300')
            }else{
                reloadBtn.classList.remove('dark:bg-gray-800', 'bg-gray-300');
                mixBtn.classList.add('dark:bg-gray-800', 'bg-gray-300')
            }
        }

        function setRepeat(){
            let isRepeat = reloadBtn.classList.contains('dark:bg-gray-800');
            if(isRepeat) {
                reloadBtn.classList.remove('dark:bg-gray-800', 'bg-gray-300');
            }else{
                mixBtn.classList.remove('dark:bg-gray-800', 'bg-gray-300');
                reloadBtn.classList.add('dark:bg-gray-800', 'bg-gray-300');
            }
        }

        function showUser(){
            $.ajax({
                type: 'get',
                url: '/dashboard',
                data: {
                    _token: "{{csrf_token()}}"
                },
                success: function (data){
                    document.getElementById('nameHome').innerHTML=`${data.user.name}`
                    document.getElementById('emailHome').innerHTML=`${data.user.email}`
                    if(data.user.avatar != null){
                        avatar.src=`/storage/${data.user.avatar}`
                    }else{
                        avatar.src="/image/user.jpg"
                    }

                }
            })
        }

        function showFavorite(){
            $.ajax({
                type: 'get',
                url: '/dashboard/favorite',
                data: {
                    _token: "{{csrf_token()}}"
                },
                success: function (data){
                    favList.innerHTML='';
                    data.favorites.forEach(function (favorite){
                        liTag=`<li id="item_${favorite.slug}" class="w-full flex items-center p-2 h-16 gap-2 bg-transparent border-b dark:border-gray-700 border-gray-300">
                                <!-- img -->
                                <a href="/music/${favorite.slug}" class="h-12 w-12 rounded-md overflow-hidden">
                                    <img src="/storage/${favorite.image}" alt="${favorite.title}" title="${favorite.title}" class="w-full h-full">
                                </a>
                                <!-- title -->
                                <div class="flex grow justify-between relative items-center">
                                    <a href="/music/${favorite.slug}" class="flex gap-1 flex-col">
                                        <span class="text-xs font-medium text-gray-500 dark:text-gray-400">${favorite.title}</span>
                                        <div class="flex gap-0.5">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 text-gray-500 dark:text-gray-400 w-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 18h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                            </svg>
                                            <span class="text-[9px] font-medium text-gray-400 dark:text-gray-500">${favorite.artist}</span>
                                        </div>
                                    </a>
                                    <div id="rmFavorite_${favorite.slug}" class="p-2 z-10 runded runded-lg hover:shadow-lg transition-all" onclick="remFavorite('${favorite.slug}')">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 text-gray-500 dark:text-gray-400 w-3" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                            </li>`
                        favList.insertAdjacentHTML("beforeend", liTag)
                    });

                },

            })
        }

        function showSetting(){
            document.getElementById('loading_setting').classList.remove('hidden');
            $.ajax({
                type: 'get',
                url: '/dashboard/setting',
                data: {
                    _token: "{{csrf_token()}}",
                },
                success: function(data){
                    if(data.user.avatar != null){
                        settImg.src=`/storage/${data.user.avatar}`;
                    }else{
                        settImg.src="/image/user.jpg";
                    }
                    settName.value=data.user.name;
                    settEmail.value=data.user.email;
                },
                complete: function(){
                    document.getElementById('loading_setting').classList.add('hidden');
                }
            })
        }

        // send form data in setting
        $(document).ready(function(){
            $('#submit-button').click(function (){
                let myForm=document.getElementById('form-data')
                let formData= new FormData(myForm);
                let file=$('#file')[0].files[0];

                formData.append('file', file);
                formData.append('name', settName.value);
                formData.append('email', settEmail.value);
                formData.append('password', settPass.value);

                $.ajax({
                    type: 'post',
                    enctype: 'multipart/form-data',
                    url: "/dashboard/update",
                    contentType: false,
                    dataType: 'JSON',
                    cache:false,
                    processData: false,
                    data: formData,
                    success: function (data){
                        settImg.src=`/storage/${data.user.avatar}`;
                        for(let er of Array.from(document.getElementsByClassName("er"))) {
                            er.innerHTML=''
                        }
                    },
                    error:function (data){
                        let err=data.responseJSON.errors
                            Object.entries(err).forEach(function ([key, value]){
                            document.getElementById(key+'_error').innerHTML=value[0];
                        })
                    }
                })
            })

        })

        function showPlayer(){
            document.getElementById('loading_player').classList.remove('hidden');
            $.ajax({
                url: '/dashboard/player',
                type: 'get',
                data: {
                    _token: "{{csrf_token()}}"
                },
                success: function(data){
                    titles=[];
                    songs=[];
                    images=[];
                    artists=[];
                    data.musics.forEach(function(music){
                        titles.push(music.title);
                        songs.push(music.mp3_320);
                        images.push(music.image);
                        artists.push(music.artist);
                        if(!playBtn.classList.contains('play')){
                            songIndex=0
                            loadSong(songs[songIndex], titles[songIndex], images[songIndex], artists[songIndex]);
                        }
                    });
                },
                complete: function (){
                    document.getElementById('loading_player').classList.add('hidden');
                }
            })
        }

        function remFavorite(music){
            $.ajax({
                type: 'post',
                url: '/beloved/'+music,
                data: {
                    _token: "{{csrf_token()}}",
                },
                success: function(data){
                    document.getElementById('item_'+music).remove();
                }
            })
        }

        function handleDashboard(){
            return {
                isOpen:2,
                openHome(){
                    this.isOpen=2;
                    showUser();
                },
                openPlayer(){
                    this.isOpen=3
                    showPlayer();
                },
                openFavorite(){
                    this.isOpen=4
                    showFavorite();
                },
                openSetting(){
                    this.isOpen=5;
                    showSetting();
                }
            }
        }

        // Event listeners
        playBtn.addEventListener('click', ()=>{
            let isPlaying = playBtn.classList.contains('play');
            if(isPlaying){
                pausingSong();
            }else{
                playSong();
            }
        })
        // left and right
        leftBtn.addEventListener('click', prevSong);
        rightBtn.addEventListener('click', nextSong);
        // audio progress
        audio.addEventListener('timeupdate', updateProgress)
        // set progress
        progressContainer.addEventListener('click', setProgress)
        // next song
        audio.addEventListener('ended', nextSong)
        // click random
        mixBtn.addEventListener('click', setRandom)
        // click reload
        reloadBtn.addEventListener('click', setRepeat)

    </script>

@endsection
