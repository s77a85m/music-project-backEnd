@extends('admin.layout.master')

@section('style')
    <link rel="stylesheet" href="/css/persianDatepicker-default.css">
@endsection

@section('content')

    <div class="flex container relative p-7 flex-col gap-2 items-end">
        <!-- title -->
        <div class="w-full h-auto flex items-center justify-end">
            <!-- title inside -->
            <div class="flex flex-col">
                <h1>ويرايش</h1>
            </div>
        </div>
        <!-- edit form -->
        <div class="bg-white rounded-md shadow-md p-4 w-full h-auto">
            <form dir="rtl" action="{{route('update.album', $album->slug)}}" method="post" class="w-full gap-3 flex flex-col flex-center h-auto ">
               @csrf
               @method('PATCH')
                <!-- part1 form -->
                <div class="flex flex-col gap-2 md:w-1/2  ">
                    <input type="text" name="title" value="{{$album->title}}" class="w-full h-8 rounded-lg focus:ring-0 focus:border-gray-300 border border-gray-300 text-xs font-normal text-gray-500">
                    <div class="relative w-full h-8">
                        <input type="text" value="{{$publish}}" name="date" autocomplete="off" id="input1" class="w-full pr-7 h-full border border-gray-300 focus:ring-0 focus:border-gray-300 text-xs font-normal  text-gray-500 rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="absolute h-5 w-5 top-1 right-1 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <select name="artist" id="artist" class="w-full h-8 rounded-lg focus:ring-0 focus:border-gray-300 border border-gray-300 text-xs font-normal text-gray-500">
                        @foreach($artists as $artist)
                            <option value="{{$artist->id}}"
                            @if($artist->id == $album->artist_id)
                                selected
                            @endif
                            >{{$artist->name}}</option>
                        @endforeach
                    </select>
                </div>
                <!-- btn -->
                <div class="col-span-2 flex-center w-full">
                    <input type="submit" value="ويرايش" class="bg-green-500 md:w-1/2 w-full text-white rounded-md shadow-md h-7 cursor-pointer">
                </div>
            </form>
            <div class="w-full mt-3 flex-center h-7">
                <a href="{{route('list.albums')}}" class="w-full md:w-1/2 h-full flex-center bg-red-500 text-white rounded-md shadow-md cursor-pointer">انصراف</a>
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
@endsection