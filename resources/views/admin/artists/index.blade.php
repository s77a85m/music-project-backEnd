@extends('admin.layout.master')


@section('content')

    <div x-data="newArtist" class="flex container relative p-7 flex-col gap-2 items-end">
        @include('admin.layout.errors')
        <!-- title -->
        <div class="w-full h-auto flex items-center justify-between">
            <!-- search -->
            <form action="{{route('list.artists')}}">
                @csrf
                <div class="flex md:w-48 w-32 h-full">
                    <button class="bg-purple-500 px-1 rounded-l-lg text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                             fill="currentColor">
                            <path fill-rule="evenodd"
                                  d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                  clip-rule="evenodd" />
                        </svg>
                    </button>
                    <input type="text" name="artist" placeholder="نام خواننده"
                           class="text-xs text-right font-medium border w-full shadow-md border-gray-200 text-gray-600 rounded-r-lg focus:ring-0 focus:border-gray-200">
                </div>
            </form>
            <!-- title inside -->
            <div class="flex flex-col">
                <h1>ليست هنرمندان</h1>
                <button x-on:click="openTab()" class="flex text-xs justify-center font-normal text-white bg-blue-500 rounded-md w-auto p-1 gap-1">
                    <h4>اضافه كردن</h4>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                    </svg>
                </button>
            </div>
        </div>
        <!-- add artist layer -->
        <div x-show="open" x-cloak
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 "
             x-transition:enter-end="opacity-100 "
             x-transition:leave="transition ease-in duration-300"
             x-transition:leave-start="opacity-100 "
             x-transition:leave-end="opacity-0 " class="inset-0 fixed bg-gray-900 opacity-50 "></div>
        <!-- add artist part -->
        <div x-show="open" x-cloak
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 "
             x-transition:enter-end="opacity-100 "
             x-transition:leave="transition ease-in duration-300"
             x-transition:leave-start="opacity-100 "
             x-transition:leave-end="opacity-0 " class="flex flex-col absolute gap-2 h-auto w-72 md:w-2/3 bg-gray-200 rounded-md p-2">
            <div class="w-full flex justify-end items-center h-7 border-b border-gray-300 ">
                <h3 class="text-sm font-normal text-gray-500">اضافه كردن خواننده</h3>
            </div>
            <form dir="rtl" action="{{route('store.artists')}}" enctype="multipart/form-data" method="post" class="w-full flex relative flex-col gap-2 justify-center items-center ">
                @csrf
                <!-- name -->
                <input type="text" name="name" placeholder="نام خواننده" class="w-full md:w-1/3 h-8 border border-gray-300 focus:ring-0 focus:border-gray-300 text-xs font-normal  text-gray-500 rounded-lg">
                <!-- styles -->
                <select name="style" id="style" class=" w-full md:w-1/3 h-8 border border-gray-300 focus:ring-0 focus:border-gray-300 text-xs font-normal  text-gray-500 rounded-lg">
                    <option disabled selected>سبك</option>
                    @foreach($styles as $style)
                        <option value="{{$style->id}}">{{$style->title}}</option>
                    @endforeach
                </select>
                <!-- img -->
                <input type="file" id="image" name="image"  value="انتخاب تصوير براي خواننده" class="absolute invisible">
                <label for="image" class="text-xs text-white font-normal rounded-md p-2 flex-center bg-purple-500 ">
                    <span>انتخاب تصوير</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                    </svg>
                </label>
                <!-- button -->
                <div class="flex w-full p-2 gap-3">
                    <input type="submit" value="ثبت" class="bg-green-500 w-full text-xs font-normal text-white rounded-md p-2">
                    <div x-on:click="closTab()" class="bg-red-400 text-xs w-full font-normal text-center text-white rounded-md p-2">انصراف</div>
                </div>
            </form>
        </div>
        <!-- table -->
        <div class="w-full bg-white py-2  flex flex-col gap-4 shadow-lg h-auto">
            <table dir="rtl" class="w-full px-3 h-auto bg-white rounded-lg  border-collapse ">
                <thead>
                <tr class="text-xs">
                    <th class=" p-2  text-right">#</th>
                    <th class=" p-2  text-right">تصوير</th>
                    <th class=" p-2  text-right">نام</th>
                    <th class=" p-2  text-right">سبك موسيقي</th>
                    <th class=" p-2  text-right">اقدامات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($artists as $artist)
                    <tr class="text-xs odd:bg-white even:bg-gray-100">
                    <td class="p-2  ">{{$artist->id}}</td>
                    <td class="p-2">
                        <div class="h-8 w-8 rounded-full overflow-hidden">
                            <img src="{{'storage/'. $artist->image}}" alt="{{$artist->name}}" class="w-full h-full">
                        </div>
                    </td>
                    <td class="p-2  ">{{$artist->name}}</td>
                    <td class="p-2  ">{{$artist->style->title}}</td>
                    <td class="p-2 flex gap-2">
                        <form action="{{route('delete.artist', $artist->slug)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button title="حذف"
                               class="h-6 w-auto px-2 flex flex-center text-white bg-red-500 rounded-sm ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                                     fill="currentColor">
                                    <path fill-rule="evenodd"
                                          d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                          clip-rule="evenodd" />
                                </svg>
                            </button>
                        </form>
                        <a href="{{route('edit.artist', $artist->slug)}}" title="ويرايش"
                           class="h-6 w-auto px-2 flex flex-center text-white bg-amber-500 rounded-sm ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                            </svg>
                        </a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <!-- pagination -->
            <div class="flex h-6 w-full justify-center ">
                {{ $artists->links() }}
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script>
        function newArtist(){
            return{
                open:false,
                openTab(){
                    this.open=true
                },
                closTab(){
                    this.open=false
                }
            }
        }
    </script>
@endsection