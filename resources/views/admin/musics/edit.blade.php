@extends('admin.layout.master')

@section('style')
    <link rel="stylesheet" href="/css/persianDatepicker-default.css">
@endsection

@section('content')

    <div class="flex container relative md:h-[560px] md:overflow-y-auto p-7 flex-col gap-2 items-end">
        @include('admin.layout.errors')
        <!-- title -->
        <div class="w-full h-auto flex items-center justify-end">
            <!-- title inside -->
            <div class="flex flex-col">
                <h1>ويرايش</h1>
            </div>
        </div>
        <!-- edit form -->
        <div class="bg-white rounded-md shadow-md p-4 w-full h-auto">
            <form dir="rtl" method="post" id="form_1" action="{{route('update.music', $music->slug)}}" enctype="multipart/form-data" class="w-full gap-3 flex flex-col md:grid md:grid-cols-2 h-auto  ">
                @csrf
                @method('PATCH')
                <!-- part1 form -->
                <div class="flex flex-col gap-2">
                    <input type="text" name="title" value="{{$music->title}}" class="w-full h-8 rounded-lg focus:ring-0 focus:border-gray-300 border border-gray-300 text-xs font-normal text-gray-500">
                    <div class="relative w-full h-8">
                        <input type="text" autocomplete="off" value="{{$publish}}" name="date" id="input1" class="w-full pr-7 h-full border border-gray-300 focus:ring-0 focus:border-gray-300 text-xs font-normal  text-gray-500 rounded-lg"/>
                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute h-5 w-5 top-1 right-1 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <select name="artist" id="artist" class="w-full h-8 rounded-lg focus:ring-0 focus:border-gray-300 border border-gray-300 text-xs font-normal text-gray-500">
                        @foreach($artists as $artist)
                            <option value="{{$artist->id}}"
                            @if($music->artist_id == $artist->id)
                             selected
                            @endif
                            >{{$artist->name}}</option>
                        @endforeach
                    </select>
                    <select name="album" id="album" class="w-full h-8 rounded-lg focus:ring-0 focus:border-gray-300 border border-gray-300 text-xs font-normal text-gray-500">
                        @if($music->album == null)
                            <option selected value="0">آلبوم</option>
                        @endif
                        @foreach($albums as $album)
                            <option value="{{$album->id}}"
                                    @if($music->album_id == $album->id)
                                     selected
                                    @endif
                            >{{$album->title}}</option>
                        @endforeach
                    </select>
                    <select name="style" id="style" class="w-full h-8 rounded-lg focus:ring-0 focus:border-gray-300 border border-gray-300 text-xs font-normal text-gray-500">
                        @foreach($styles as $style)
                            <option value="{{$style->id}}"
                                    @if($music->style_id == $style->id)
                                     selected
                                    @endif
                            >{{$style->title}}</option>
                        @endforeach
                    </select>
                    <textarea name="description" id="" class="w-full h-28 md:h-[151px] rounded-lg focus:ring-0 focus:border-gray-300 border border-gray-300 text-xs font-normal text-gray-500 resize-none">{{$music->description}}</textarea>
                </div>
                <!-- part2 form-->
                <div class="flex flex-col items-center sm:p-4">
                    <div class="w-30 flex flex-col justify-center gap-3 items-center">
                        <div class="w-48 h-36">
                            <img src="{{'/storage/'. $music->image}}" alt="{{$music->title}}" class="w-full h-full rounded-md">
                        </div>
                        <input type="file" id="image" name="image"  value="انتخاب تصوير" class="absolute invisible">
                        <label for="image" class="text-xs text-white font-normal rounded-md p-2 flex-center bg-purple-500 ">
                            <span>انتخاب تصوير جديد</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                            </svg>
                        </label>
                    </div>
                    <div class="flex flex-col w-full">
                        <!-- 128 -->
                        <div class="w-full">
                            <audio class="w-full h-8" controls name="baran">
                                <source type="audio/mpeg"
                                        src="{{'/storage/'. $music->mp3_128}}">
                            </audio>
                            <input type="file" id="mp3_128" name="low" value="انتخاب تصوير" class="absolute invisible">
                            <label for="mp3_128" class="text-xs text-white font-normal rounded-t-md cursor-pointer p-2 flex-center bg-purple-500 ">
                                <span>كيفيت 128</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M18 3a1 1 0 00-1.196-.98l-10 2A1 1 0 006 5v9.114A4.369 4.369 0 005 14c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V7.82l8-1.6v5.894A4.37 4.37 0 0015 12c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V3z" />
                                </svg>
                            </label>
                            <div id="onePart" class="w-full h-auto flex flex-col justify-center items-center bg-blue-200 rounded-b-md">

                            </div>
                        </div>
                        <!-- 320 -->
                        <div class="w-full">
                            <audio class="w-full h-8" controls >
                                <source type="audio/mpeg"
                                        src="{{'/storage/'. $music->mp3_320}}">
                            </audio>
                            <input type="file" id="mp3_320" name="high" value="انتخاب تصوير" class="absolute invisible">
                            <label for="mp3_320" class="text-xs text-white font-normal rounded-t-md p-2 flex-center bg-purple-500 ">
                                <span>كيفيت 320</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M18 3a1 1 0 00-1.196-.98l-10 2A1 1 0 006 5v9.114A4.369 4.369 0 005 14c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V7.82l8-1.6v5.894A4.37 4.37 0 0015 12c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V3z" />
                                </svg>
                            </label>
                            <div id="twoPart" class="w-full h-auto flex flex-col justify-center items-center bg-blue-200 rounded-b-md">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- btn -->
                <div class="col-span-2 flex-center">
                    <input type="submit" value="ويرايش" class="bg-green-500 md:w-1/2 w-full text-white rounded-md shadow-md h-7 cursor-pointer">
                </div>
            </form>
            <div class="w-full mt-3 flex-center h-7">
                <a href="{{route('list.musics')}}" class="w-full md:w-1/2 h-full flex-center bg-red-500 text-white rounded-md shadow-md cursor-pointer">انصراف</a>
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
        //upload progress
        const inputFileLow= document.querySelector('#mp3_128'),
              inputFileHigh= document.querySelector('#mp3_320'),

              form=document.querySelector('#form_1');

        inputFileLow.onchange = ({target}) =>{
            let file=target.files[0];
            if(file){
                let fileName=file.name;
                uploadFileLow(fileName);
            }
        }
        inputFileHigh.onchange = ({target}) =>{
            let file=target.files[0];
            if(file){
                let fileName=file.name;
                uploadFileHigh(fileName);
            }
        }
        function uploadFileLow(name){
            let xhr= new XMLHttpRequest();
            xhr.open("POST", "/musics/update/"+"{{$music->slug}}");
            xhr.upload.addEventListener("progress", ({loaded,total}) => {
                let fileLoaded=Math.floor((loaded/total)*100);
                let progressHtml=`<span class="text-gray-500 mt-1 text-xs font-medium">${name} - uploading</span>
                                <div class="flex-center m-2 px-3 gap-2 w-full">
                                    <span class="text-gray-500 text-xs font-medium">${fileLoaded}%</span>
                                    <div class="w-full flex justify-end bg-white rounded-full h-1">
                                        <div class="h-full bg-blue-600 rounded-full" style="width: ${fileLoaded}%;"></div>
                                    </div>
                                </div>`;
                let uploaded=`<span class="text-gray-500 m-1 text-xs font-medium">${name} - uploaded</span>`;
                document.querySelector('#onePart').innerHTML= progressHtml ;
                if (loaded === total){
                    document.querySelector('#onePart').innerHTML= uploaded ;
                }
            })
            let formData= new FormData(form);
            xhr.send(formData)
        }
        function uploadFileHigh(name){
            let xhr= new XMLHttpRequest();
            xhr.open("POST", "/musics/update/"+"{{$music->slug}}");
            xhr.upload.addEventListener("progress", ({loaded,total}) => {
                let fileLoaded=Math.floor((loaded/total)*100);
                let progressHtml=`<span class="text-gray-500 mt-1 text-xs font-medium">${name} - uploading</span>
                                <div class="flex-center m-2 px-3 gap-2 w-full">
                                    <span class="text-gray-500 text-xs font-medium">${fileLoaded}%</span>
                                    <div class="w-full flex justify-end bg-white rounded-full h-1">
                                        <div class="h-full bg-blue-600 rounded-full" style="width: ${fileLoaded}%;"></div>
                                    </div>
                                </div>`;
                let uploaded=`<span class="text-gray-500 m-1 text-xs font-medium">${name} - uploaded</span>`;
                document.querySelector('#twoPart').innerHTML= progressHtml ;
                if (loaded === total){
                    document.querySelector('#twoPart').innerHTML= uploaded ;
                }
            })
            let formData= new FormData(form);
            xhr.send(formData)
        }
    </script>
@endsection