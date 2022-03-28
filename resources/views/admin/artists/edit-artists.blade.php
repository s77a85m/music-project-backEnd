@extends('admin.layout.master')


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
            <form dir="rtl" action="#" class="w-full gap-3 flex flex-col md:grid md:grid-cols-2 h-auto  ">
                <!-- part1 form -->
                <div class="flex flex-col gap-2">
                    <input type="text" value="سيدعلي موسوي" class="w-full h-8 rounded-lg focus:ring-0 focus:border-gray-300 border border-gray-300 text-xs font-normal text-gray-500">
                    <select name="style" id="style" class="w-full h-8 rounded-lg focus:ring-0 focus:border-gray-300 border border-gray-300 text-xs font-normal text-gray-500">
                        <option value="1" selected>پاپ</option>
                        <option value="2" selected>رپ</option>
                        <option value="3" selected>كلاسيك</option>
                        <option value="4" selected>سنتي</option>
                    </select>
                </div>
                <!-- part2 form-->
                <div class="w-30 flex flex-col justify-center gap-3 items-center">
                    <img src="/image/avatar.jpg" alt="avater" class="rounded-md">
                    <input type="file" id="image"  value="انتخاب تصوير" class="absolute invisible">
                    <label for="image" class="text-xs text-white font-normal rounded-md p-2 flex-center bg-purple-500 ">
                        <span>انتخاب تصوير جديد</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                        </svg>
                    </label>
                </div>
                <!-- btn -->
                <div class="col-span-2 flex-center">
                    <input type="submit" value="ويرايش" class="bg-green-500 md:w-1/2 w-full text-white rounded-md shadow-md h-7 cursor-pointer">
                </div>
            </form>
            <div class="w-full mt-3 flex-center h-7">
                <a href="#" class="w-full md:w-1/2 h-full flex-center bg-red-500 text-white rounded-md shadow-md cursor-pointer">انصراف</a>
            </div>
        </div>
    </div>

@endsection