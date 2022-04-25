@extends('admin.layout.master')


@section('content')

    <div class="flex container relative p-7 flex-col gap-2 items-end">
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
            <form dir="rtl" action="{{route('update.role', $role->slug)}}" method="post" class="w-full gap-3 flex flex-col flex-center h-auto ">
            @csrf
            @method('PATCH')
            <!-- part1 form -->
                <div class="flex flex-col gap-2 md:w-1/2  ">
                    <input type="text" name="role" value="{{$role->title}}" class="w-full h-8 rounded-lg focus:ring-0 focus:border-gray-300 border border-gray-300 text-xs font-normal text-gray-500">
                </div>
                <ul id="form" class="flex w-full h-auto gap-2 flex-wrap">
                    {{-- select all --}}
                    <li class=" relative ">
                        <input type="checkbox" id="checkAll" class="absolute lable-checked:bg-green-700 lable-checked:text-white invisible">
                        <label for="checkAll" class="text-xs text-green-700 font-medium p-1 border border-green-700 transition-colors duration-300 ease-in rounded cursor-pointer">همه</label>
                    </li>
                    {{-- single select --}}
                    @foreach($permissions as $permission)
                        <li class="relative">
                            <input type="checkbox" @if($role->permissions()->where('id', $permission->id)->exists()) checked @endif id="check{{$permission->id}}" name="permission[]" value="{{$permission->id}}" class="absolute lable-checked:bg-purple-700 lable-checked:text-white invisible">
                            <label for="check{{$permission->id}}" class="text-xs text-purple-700 font-medium p-1 border border-purple-700 transition-colors duration-300 ease-in rounded cursor-pointer">{{$permission->title}}</label>
                        </li>
                    @endforeach
                </ul>
                <!-- btn -->
                <div class="col-span-2 flex-center md:w-full">
                    <input type="submit" value="ويرايش" class="bg-green-500 md:w-1/2 w-full text-white rounded-md shadow-md h-7 cursor-pointer">
                </div>
            </form>
            <div class="w-full mt-3 flex-center h-7">
                <a href="{{route('list.roles')}}" class="w-full md:w-1/2 h-full flex-center bg-red-500 text-white rounded-md shadow-md cursor-pointer">انصراف</a>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script src="/js/jquery.js"></script>
    <script>
        $(document).ready(function (){
            $("#checkAll").click(function (){
                $("#form li input[type='checkbox']").prop('checked', this.checked)
            });
        });
    </script>
@endsection