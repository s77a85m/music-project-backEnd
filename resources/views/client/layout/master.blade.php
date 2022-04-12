<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('/css/swiper-bundle.min.css')}}">
    <title>arkenmusic</title>
</head>

<body class="bg-[#f2f2f2] dark:bg-dark-600">
    <!-- navbar start -->
    @include('client.layout.header')
    {{--  main  --}}
    @yield('content')
    {{--  footer  --}}
    @include('client.layout.footer')
    <script src="{{asset('/js/swiper-bundle.min.js')}}"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script>
        function handleMobileMenu() {
            return {
                openMenu: false,
                menuTab: 0,
                menuTabChild: 0,
                handleOpenMenu() {
                    this.openMenu = true
                    document.body.classList.add('scroll_fixed')
                },
                firstMenu(index) {
                    if (this.menuTab == 0) {
                        this.menuTab = index
                    } else {
                        this.menuTab = 0
                    }
                    this.menuTabChild = 0
                },
                closeAll() {
                    this.openMenu = false
                    this.menuTabChild = 0
                    this.menuTab = 0
                    document.body.classList.remove('scroll_fixed')
                },
                menuChild(index) {
                    if (this.menuTabChild == 0) {
                        this.menuTabChild = index
                    } else {
                        this.menuTabChild = 0
                    }
                }
            }
        }
        // function handleDirection() {
        //     return {
        //         // false for ltr & true for rtl
        //         // direction:false,
        //         makeRtl() {
        //             // this.direction=true
        //             document.querySelector('.handle_direction').classList.add('rtl')
        //             document.documentElement.dir = "rtl"
        //             localStorage.setItem('dir', 'rtl')
        //         },
        //         makeLtr() {
        //             // this.direction=false
        //             document.querySelector('.handle_direction').classList.remove('rtl')
        //             document.documentElement.dir = "ltr"
        //             localStorage.setItem('dir', 'ltr')
        //         }
        //     }
        // }
        function darkMod() {
            return {
                moonMod() {
                    localStorage.setItem('mode', 'dark')
                    document.querySelector('.handle_darkmod').classList.add('darkMod')
                    document.documentElement.classList.add('dark')
                },
                sunMod() {
                    localStorage.setItem('mode', 'light')
                    document.querySelector('.handle_darkmod').classList.remove('darkMod')
                    document.documentElement.classList.remove('dark')
                }
            }
        }
        function searchBtn() {
            return{
                btnTab: false,
                openSearch(){
                    this.btnTab = true
                    document.body.classList.add('scroll_fixed')
                },
                closSearch(){
                    this.btnTab=false
                    document.body.classList.remove('scroll_fixed')
                }
            }
        }
        if (localStorage.getItem('mode') === 'dark') {
            document.documentElement.classList.add('dark')
            document.querySelector('.handle_darkmod').classList.add('darkMod')
        } else {
            document.querySelector('.handle_darkmod').classList.remove('darkMod')
            document.documentElement.classList.remove('dark')
        }
        // document.documentElement.dir = localStorage.getItem('dir')
        // if (localStorage.getItem('dir') === 'rtl') {
        //     document.querySelector('.handle_direction').classList.add('rtl')
        // }
    </script>
    @yield('script')
</body>

</html>