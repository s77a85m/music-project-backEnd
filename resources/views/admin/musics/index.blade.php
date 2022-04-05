@extends('admin.layout.master')

@section('style')
    <link rel="stylesheet" href="/css/persianDatepicker-default.css">
@endsection
@section('content')

    <div x-data="newArtist" class="flex container relative p-7 flex-col gap-2 items-end">
        @include('admin.layout.errors')
        <!-- title -->
        <div class="w-full h-auto flex items-center justify-between">
            <!-- search -->
            <div class="flex md:w-48 w-32 h-full">
                <button class="bg-purple-500 px-1 rounded-l-lg text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                         fill="currentColor">
                        <path fill-rule="evenodd"
                              d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                              clip-rule="evenodd" />
                    </svg>
                </button>
                <input type="text" placeholder="نام آهنگ"
                       class="text-xs text-right font-medium border w-full shadow-md border-gray-200 text-gray-600 rounded-r-lg focus:ring-0 focus:border-gray-200">
            </div>
            <!-- title inside -->
            <div class="flex flex-col">
                <h1>ليست آهنگ ها</h1>
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
                <h3 class="text-sm font-normal text-gray-500">اضافه كردن آهنگ</h3>
            </div>
            <form id="form_1" dir="rtl" action="{{route('store.music')}}" enctype="multipart/form-data" method="post" class="w-full flex relative flex-col gap-2 justify-center items-center ">
                @csrf
                <!-- name -->
                <input name="title" type="text" placeholder="نام آهنگ" class="w-full md:w-1/3 h-8 border border-gray-300 focus:ring-0 focus:border-gray-300 text-xs font-normal  text-gray-500 rounded-lg">
                <!-- date -->
                <div class="relative w-full md:w-1/3 h-8">
                    <input type="text" autocomplete="off" name="date" id="input1" class="w-full pr-7 h-full border border-gray-300 focus:ring-0 focus:border-gray-300 text-xs font-normal  text-gray-500 rounded-lg"/>
                    <svg xmlns="http://www.w3.org/2000/svg" class="absolute h-5 w-5 top-1 right-1 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
                <!-- styles -->
                <select name="style" id="style" class=" w-full md:w-1/3 h-8 border border-gray-300 focus:ring-0 focus:border-gray-300 text-xs font-normal  text-gray-500 rounded-lg">
                    <option disabled selected >سبك</option>
                    @foreach($styles as $style)
                        <option value="{{$style->id}}">{{$style->title}}</option>
                    @endforeach
                </select>
                <!-- artist -->
                <select name="artist" id="artist" class=" w-full md:w-1/3 h-8 border border-gray-300 focus:ring-0 focus:border-gray-300 text-xs font-normal  text-gray-500 rounded-lg">
                    <option disabled selected>خواننده</option>
                    @foreach($artists as $artist)
                        <option value="{{$artist->id}}">{{$artist->name}}</option>
                    @endforeach
                </select>
                <!-- album -->
                <select name="album" id="album" class=" w-full md:w-1/3 h-8 border border-gray-300 focus:ring-0 focus:border-gray-300 text-xs font-normal  text-gray-500 rounded-lg">
                    <option disabled selected value="1">آلبوم</option>
                    @foreach($albums as $album)
                        <option value="{{$album->id}}">{{$album->title}}</option>
                    @endforeach
                </select>
                <!-- text -->
                <textarea name="description" class="resize-none w-full md:w-2/3 text-xs font-medium text-gray-500 rounded-md h-40 border border-gray-200 focus:ring-0 focus:border-gray-200" placeholder="متن آهنگ"></textarea>
                <!-- img -->
                <div class="flex gap-2 flex-center">
                    <!-- img -->
                    <div>
                        <input type="file" id="imageFile" name="image"  value="انتخاب تصوير براي آهنگ" class="absolute invisible">
                        <label for="imageFile" class="text-xs text-white flex flex-col font-normal rounded-md p-2 flex-center bg-green-500 ">
                            <div class="flex">
                                <span>انتخاب كاور</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div id="image" class="w-full h-auto">

                            </div>
                        </label>
                    </div>
                    <!-- 320 -->
                    <div>
                        <input type="file" id="highFile" name="high" value="انتخاب تصوير براي خواننده" class="absolute invisible">
                        <label for="highFile" class="text-xs text-white flex flex-col font-normal rounded-md p-2 flex-center bg-purple-500 ">
                            <div class="flex">
                                <span>كيفيت 320</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M18 3a1 1 0 00-1.196-.98l-10 2A1 1 0 006 5v9.114A4.369 4.369 0 005 14c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V7.82l8-1.6v5.894A4.37 4.37 0 0015 12c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V3z" />
                                </svg>
                            </div>
                            <div id="high" class="w-full h-auto">

                            </div>
                        </label>
                    </div>
                    <!-- 128 -->
                    <div>
                        <input type="file" id="lowFile" name="low"  value="انتخاب تصوير براي خواننده" class="absolute invisible">
                        <label for="lowFile" class="text-xs flex flex-col text-white font-normal rounded-md p-2 flex-center bg-purple-500 ">
                            <div class="flex">
                                <span>كيفيت 128</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M18 3a1 1 0 00-1.196-.98l-10 2A1 1 0 006 5v9.114A4.369 4.369 0 005 14c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V7.82l8-1.6v5.894A4.37 4.37 0 0015 12c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V3z" />
                                </svg>
                            </div>
                            <div id="low" class="w-full h-auto">

                            </div>
                        </label>
                    </div>
                </div>
                <!-- button -->
                <div class="flex w-full p-2 gap-3">
                    <input type="submit" value="ثبت" class="bg-green-500 w-full text-xs font-normal text-white rounded-md p-2">
                    <div x-on:click="closTab()" class="bg-red-400 text-xs w-full text-center font-normal text-white rounded-md p-2">انصراف</div>
                </div>
            </form>
        </div>
        <!-- table -->
        <div class="w-full bg-white py-2  flex flex-col gap-4 shadow-lg h-auto">
            <table dir="rtl" class="w-full px-3 h-auto bg-white rounded-lg  border-collapse ">
                <thead>
                <tr class="text-xs">
                    <th class=" p-2  text-right">#</th>
                    <th class=" p-2  text-right">كاور</th>
                    <th class=" p-2  text-right">نام</th>
                    <th class=" p-2  text-right">خواننده</th>
                    <th class=" p-2  text-right">اقدامات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($musics as $music)
                    <tr class="text-xs odd:bg-white even:bg-gray-100">
                    <td class="p-2  ">{{$music->id}}</td>
                    <td class="p-2">
                        <div class="h-8 w-8 rounded-full overflow-hidden">
                            <img src="{{'/storage/'.$music->image}}" alt="{{$music->name}}" class="w-full h-full">
                        </div>
                    </td>
                    <td class="p-2  ">{{$music->title}}</td>
                    <td class="p-2  ">{{$music->artist->name}}</td>
                    <td class="p-2 flex gap-2">
                        <form action="{{route('delete.music', $music->slug)}}" method="post">
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
                        <a href="{{route('edit.music', $music->slug)}}" title="ويرايش"
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
                {{$musics->links()}}
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script type="text/javascript" src="/js/jquery.js"></script>
    <script type="text/javascript" src="/js/persianDatepicker.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $("#input1").persianDatepicker();
        });
    </script>
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

        const highFile=document.querySelector('#highFile'),
              lowFile=document.querySelector('#lowFile'),
              imageFile=document.querySelector('#imageFile'),
              form=document.querySelector('#form_1');

        imageFile.onchange = ({target}) =>{
            let file= target.files[0];
            if (file){
                let fileName=file.name;
                uploadImage(fileName);
            }
        }
        function uploadImage(name){
            let xhr=new XMLHttpRequest();
            xhr.open("POST", "/musics/store");
            xhr.upload.addEventListener("progress", ({total,loaded}) => {
                let fileLoaded=Math.floor((loaded/total)*100);
                let progressHtml=`<div class="bg-white rounded-full flex justify-end w-full h-0.5">
                                    <div class="bg-red-500 rounded-full h-full" style="width: ${fileLoaded}%;"></div>
                                  </div>`
                document.querySelector('#image').innerHTML = progressHtml
            });
            let formData=new FormData(form);
            xhr.send(formData);
        }

        lowFile.onchange = ({target}) => {
            let file=target.files[0];
            if (file){
                let fileName=file.name;
                uploadLowFile(fileName);
            }
        }
        function uploadLowFile(name){
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "/musics/store");
            xhr.upload.addEventListener("progress", ({loaded, total}) => {
                let uploaded=Math.floor((loaded/total)*100);
                let progressHtml=`<div class="bg-white rounded-full flex justify-end w-full h-0.5">
                                    <div class="bg-red-500 rounded-full h-full" style="width: ${uploaded}%;"></div>
                                  </div>`
                document.querySelector('#low').innerHTML=progressHtml;
            });
            let formData=new FormData(form);
            xhr.send(formData)
        }

        highFile.onchange = ({target}) => {
            let file=target.files[0];
            if (file){
                let fileName=file.name;
                uploadHighFile(fileName);
            }
        }
        function uploadHighFile(name){
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "/musics/store");
            xhr.upload.addEventListener("progress", ({loaded, total}) => {
                let uploaded=Math.floor((loaded/total)*100);
                let progressHtml=`<div class="bg-white rounded-full flex justify-end w-full h-0.5">
                                    <div class="bg-red-500 rounded-full h-full" style="width: ${uploaded}%;"></div>
                                  </div>`
                document.querySelector('#high').innerHTML=progressHtml;
            });
            let formData=new FormData(form);
            xhr.send(formData)
        }


    </script>
@endsection