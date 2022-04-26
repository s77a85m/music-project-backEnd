@extends('admin.layout.master')


@section('content')

    <div class="flex container p-7 flex-col gap-2 items-end">
        <!-- title -->
        <div class="w-full h-9 flex justify-between">
            <!-- search -->
            <form action="{{route('list.users')}}">
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
                    <input type="text" name="user" placeholder="نام كاربر"
                           class="text-xs text-right font-medium border w-full shadow-md border-gray-200 text-gray-600 rounded-r-lg focus:ring-0 focus:border-gray-200">
                </div>
            </form>
            <!-- title inside -->
            <h1>ليست كاربران</h1>
        </div>
        <!-- table -->
        <div class="w-full bg-white py-2  flex flex-col gap-4 shadow-lg h-auto">
            <table dir="rtl" class="w-full px-3 h-auto bg-white rounded-lg  border-collapse ">
                <thead>
                <tr class="text-xs">
                    <th class=" p-2  text-right">#</th>
                    <th class=" p-2  text-right">نام</th>
                    <th class=" p-2  text-right">نقش</th>
                    <th class=" p-2  text-right">اقدامات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr class="text-xs odd:bg-white even:bg-gray-100">
                    <td class="p-2  ">{{$user->id}}</td>
                    <td class="p-2  ">{{$user->name}}</td>
                    <td class="p-2  ">كاربر سايت</td>
                    <td class="p-2 flex gap-2">
                        <form action="{{route('delete.user', $user->slug)}}" method="post">
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
                        <a href="{{route('edit.user', $user->slug)}}" title="ويرايش"
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
                {{$users->links()}}
            </div>
        </div>
    </div>

@endsection