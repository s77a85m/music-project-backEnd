@extends('admin.layout.master')


@section('content')

    <div class="flex container p-7 flex-col gap-2 items-end">
        <!-- title -->
        <div class="w-full h-9 flex justify-between">
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
                <input type="text" placeholder="كلمه موردنظر"
                       class="text-xs text-right font-medium border w-full shadow-md border-gray-200 text-gray-600 rounded-r-lg focus:ring-0 focus:border-gray-200">
            </div>
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
                <tr class="text-xs odd:bg-white even:bg-gray-100">
                    <td class="p-2  ">1</td>
                    <td class="p-2 w-80 ">
                        <p class="w-full text-justify"> استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده</p>
                    </td>
                    <td class="p-2  ">1400-3-1</td>
                    <td class="p-2  ">عشق اول</td>
                    <td class="p-2 flex">
                        <a href="#" title="حذف"
                           class="h-6 w-auto px-2 flex flex-center text-white bg-red-500 rounded-sm ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                                 fill="currentColor">
                                <path fill-rule="evenodd"
                                      d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                      clip-rule="evenodd" />
                            </svg>
                        </a>
                    </td>
                </tr>
                <tr class="text-xs odd:bg-white even:bg-gray-100">
                    <td class="p-2  ">1</td>
                    <td class="p-2 w-80 ">
                        <p class="w-full text-justify"> استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده</p>
                    </td>
                    <td class="p-2  ">1400-3-1</td>
                    <td class="p-2  ">عشق اول</td>
                    <td class="p-2 flex">
                        <a href="#" title="حذف"
                           class="h-6 w-auto px-2 flex flex-center text-white bg-red-500 rounded-sm ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                                 fill="currentColor">
                                <path fill-rule="evenodd"
                                      d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                      clip-rule="evenodd" />
                            </svg>
                        </a>
                    </td>
                </tr>
                <tr class="text-xs odd:bg-white even:bg-gray-100">
                    <td class="p-2  ">1</td>
                    <td class="p-2 w-80 ">
                        <p class="w-full text-justify"> استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده</p>
                    </td>
                    <td class="p-2  ">1400-3-1</td>
                    <td class="p-2  ">عشق اول</td>
                    <td class="p-2 flex">
                        <a href="#" title="حذف"
                           class="h-6 w-auto px-2 flex flex-center text-white bg-red-500 rounded-sm ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                                 fill="currentColor">
                                <path fill-rule="evenodd"
                                      d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                      clip-rule="evenodd" />
                            </svg>
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
            <!-- pagination -->
            <div class="flex h-6 w-full justify-center ">
                <a href="#" class="h-full p-3 hover:bg-red-500 hover:text-white transition-all duration-200 ease-in rounded-sm border flex flex-center border-gray-400 text-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </a>
                <a href="#" class="h-full border p-3 hover:bg-red-500 hover:text-white transition-all duration-200 ease-in flex rounded-sm flex-center border-gray-400 text-gray-500">
                    1
                </a>
                <a href="#" class="h-full border flex p-3 hover:bg-red-500 hover:text-white transition-all duration-200 ease-in rounded-sm flex-center border-gray-400 text-gray-500">
                    2
                </a>
                <h3 class="px-2">...</h3>
                <a href="#" class="h-full border flex p-3 hover:bg-red-500 hover:text-white transition-all duration-200 ease-in rounded-sm flex-center border-gray-400 text-gray-500">
                    3
                </a>
                <a href="#" class="h-full border flex p-3 hover:bg-red-500 hover:text-white transition-all duration-200 ease-in rounded-sm flex-center border-gray-400 text-gray-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
        </div>
    </div>

@endsection
