<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin-panel</title>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('/css/swiper-bundle.min.css')}}" />
</head>

<body class="bg-gray-100 sm:scroll_fixed">
<div x-data="mobileMenu" class="flex gap-2 p-3 ">
    <!-- navbar -->
    <div class="h-full w-full flex flex-col">
        <!-- nav -->
        <section class=" h-12 w-full rounded-md shadow-md flex items-center bg-white border-b border-r">
            <nav class="container">
                <div class="flex w-full justify-between items-center">
                    <div class="h-8 w-8 rounded-full overflow-hidden">
                        <img src="/image/avatar.jpg" alt="" class="h-full w-full">
                    </div>
                    <div x-on:click="menuTab()" class="text-gray-500 lg:hidden cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </div>
                </div>
            </nav>
        </section>
        <!-- content -->
        @yield('content')
    </div>
    <!-- layer hamberger -->
    <div x-on:click="closeMenu()" x-show="openMenu" x-cloak
         x-transition:enter="transition-all ease-out duration-300"
         x-transition:enter-start="opacity-30" x-transition:enter-end="opacity-100"
         x-transition:leave="transition-all ease-in duration-300" x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0" class="inset-0 fixed bg-gray-900 bg-opacity-50 "></div>
    <!-- hamberger -->
    <div x-cloak x-bind:class="openMenu ? 'z-10 fixed flex inset-y-0 right-0' : 'lg:flex hidden lg:z-0 right-auto '" class="bg-white w-72 rounded-md  shadow-lg  lg:relative lg:flex flex-col h-screen border-l">
        <!-- Admin logo -->
        <div class="w-full h-12 border-b px-10">
            <img src="/image/admin.png" alt="admin" class="w-full h-full">
        </div>
        <!-- items -->
        <div class="flex flex-col w-full my-2 h-auto">
            <!-- dashbord -->
            <a href="#"
                    class="w-full  h-10 cursor-pointer hover:bg-gray-200 transition-all duration-200 focus:from-blue-100  focus:to-white focus:bg-gradient-to-r gap-2 focus:border-l-4 focus:text-blue-500 focus:border-blue-500 text-sm font-normal px-2 flex title-color justify-end items-center ">
                <span>داشبورد</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" fill="currentColor"
                     class="bi bi-card-checklist" viewBox="0 0 16 16">
                    <path
                            d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                    <path
                            d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z" />
                </svg>
            </a>
            <!-- users -->
            <button
                    class="w-full  h-10 cursor-pointer hover:bg-gray-200 transition-all duration-200 focus:from-blue-100  focus:to-white focus:bg-gradient-to-r gap-2 focus:border-l-4 focus:text-blue-500 focus:border-blue-500 text-sm font-normal px-2 flex title-color justify-end items-center ">
                <span>كاربران سايت</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path
                            d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                </svg>
            </button>
            <!-- artists -->
            <a href="{{route('list.artists')}}"
                    class="{{Nav::isResource('artists')}} w-full  h-10 cursor-pointer hover:bg-gray-200 transition-all duration-200 gap-2 text-sm font-normal px-2 flex title-color justify-end items-center ">
                <span>هنرمندان</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor"
                     class="bi bi-person-hearts" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                          d="M11.5 1.246c.832-.855 2.913.642 0 2.566-2.913-1.924-.832-3.421 0-2.566ZM9 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h10s1 0 1-1-1-4-6-4-6 3-6 4Zm13.5-8.09c1.387-1.425 4.855 1.07 0 4.277-4.854-3.207-1.387-5.702 0-4.276ZM15 2.165c.555-.57 1.942.428 0 1.711-1.942-1.283-.555-2.281 0-1.71Z" />
                </svg>
            </a>
            <!-- musics -->
            <button
                    class="w-full  h-10 cursor-pointer hover:bg-gray-200 transition-all duration-200 focus:from-blue-100  focus:to-white focus:bg-gradient-to-r gap-2 focus:border-l-4 focus:text-blue-500 focus:border-blue-500 text-sm font-normal px-2 flex title-color justify-end items-center ">
                <span>آهنگ ها</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor"
                     class="bi bi-music-note-beamed" viewBox="0 0 16 16">
                    <path
                            d="M6 13c0 1.105-1.12 2-2.5 2S1 14.105 1 13c0-1.104 1.12-2 2.5-2s2.5.896 2.5 2zm9-2c0 1.105-1.12 2-2.5 2s-2.5-.895-2.5-2 1.12-2 2.5-2 2.5.895 2.5 2z" />
                    <path fill-rule="evenodd" d="M14 11V2h1v9h-1zM6 3v10H5V3h1z" />
                    <path d="M5 2.905a1 1 0 0 1 .9-.995l8-.8a1 1 0 0 1 1.1.995V3L5 4V2.905z" />
                </svg>
            </button>
            <!-- styles -->
            <a href="{{route('list.styles')}}"
                    class="{{Nav::isResource('styles')}} w-full  h-10 cursor-pointer hover:bg-gray-200 transition-all duration-200 gap-2 text-sm font-normal px-2 flex title-color justify-end items-center ">
                <span>سبك ها</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-soundwave" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8.5 2a.5.5 0 0 1 .5.5v11a.5.5 0 0 1-1 0v-11a.5.5 0 0 1 .5-.5zm-2 2a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zm4 0a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zm-6 1.5A.5.5 0 0 1 5 6v4a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm8 0a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm-10 1A.5.5 0 0 1 3 7v2a.5.5 0 0 1-1 0V7a.5.5 0 0 1 .5-.5zm12 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0V7a.5.5 0 0 1 .5-.5z"/>
                </svg>
            </a>
            <!-- albums -->
            <a href="{{route('list.albums')}}"
                    class="{{Nav::isResource('albums')}} w-full  h-10 cursor-pointer hover:bg-gray-200 transition-all duration-200 gap-2 text-sm font-normal px-2 flex title-color justify-end items-center ">
                <span>آلبوم ها</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor"
                     class="bi bi-music-note-list" viewBox="0 0 16 16">
                    <path d="M12 13c0 1.105-1.12 2-2.5 2S7 14.105 7 13s1.12-2 2.5-2 2.5.895 2.5 2z" />
                    <path fill-rule="evenodd" d="M12 3v10h-1V3h1z" />
                    <path d="M11 2.82a1 1 0 0 1 .804-.98l3-.6A1 1 0 0 1 16 2.22V4l-5 1V2.82z" />
                    <path fill-rule="evenodd"
                          d="M0 11.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 7H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 3H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z" />
                </svg>
            </a>
            <!-- comments -->
            <button
                    class="w-full  h-10 cursor-pointer hover:bg-gray-200 transition-all duration-200 focus:from-blue-100  focus:to-white focus:bg-gradient-to-r gap-2 focus:border-l-4 focus:text-blue-500 focus:border-blue-500 text-sm font-normal px-2 flex title-color justify-end items-center ">
                <span>نظرات كاربران</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                          d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z"
                          clip-rule="evenodd" />
                </svg>
            </button>
            <!-- logout -->
            <div class="flex w-full mt-4 justify-center h-10">
                <button
                        class=" w-auto rounded-md px-10 h-8 cursor-pointer  gap-2  text-sm font-normal bg-red-500 text-gray-100 flex-center ">
                    <span>خروج</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>




<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
<script src="{{asset('/js/swiper-bundle.min.js')}}"></script>
<script>
    function mobileMenu(){
        return{
            openMenu:false,
            menuTab(){
                this.openMenu=true
            },
            closeMenu(){
                this.openMenu=false
            }
        }
    }
</script>
@yield('script')
</body>

</html>