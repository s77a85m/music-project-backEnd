@extends('admin.layout.master')


@section('content')

    <div class="flex container p-7 flex-col gap-2 items-end">
        <!-- title -->
        <div class="w-full h-9 flex justify-between">
            <!-- search -->
            <form action="{{route('list.comments')}}">
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
                    <input type="text" name="comment" placeholder="كلمه مورد نظر"
                           class="text-xs text-right font-medium border w-full shadow-md border-gray-200 text-gray-600 rounded-r-lg focus:ring-0 focus:border-gray-200">
                </div>
            </form>
            <!-- title inside -->
            <h1>ليست كامنت ها</h1>
        </div>
        <!-- table -->
        <div class="w-full bg-white py-2  flex flex-col gap-4 shadow-lg h-auto">
            <table dir="rtl" class="w-full px-3 h-auto bg-white rounded-lg  border-collapse ">
                <thead>
                <tr class="text-xs">
                    <th class=" p-2  text-right">#</th>
                    <th class=" p-2  text-right">كامنت</th>
                    <th class=" p-2  text-right">زمان</th>
                    <th class=" p-2  text-right">آهنگ</th>
                    <th class=" p-2  text-right">اقدامات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($comments as $comment)
                    @php
                        $date=\Morilog\Jalali\CalendarUtils::strftime('Y/m/d', strtotime($comment->created_at));
                    @endphp
                    <tr class="text-xs odd:bg-white even:bg-gray-100">
                    <td class="p-2  ">{{$comment->id}}</td>
                    <td class="p-2 w-80 max-h-40 overflow-y-auto ">
                        <p class="w-full max-h-20 overflow-y-scroll text-justify">{{$comment->content}}</p>
                    </td>
                    <td class="p-2  ">{{$date}}</td>
                    <td class="p-2  ">{{$comment->music->title}}</td>
                    <td class="p-2 flex">
                        <form action="{{route('delete.comment', $comment)}}" method="post">
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
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <!-- pagination -->
            <div class="flex h-6 w-full justify-center ">
                {{$comments->links()}}
            </div>
        </div>
    </div>

@endsection
