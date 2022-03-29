@if(count($errors->all()) > 0)
    @foreach($errors->all() as $error)
        <ul class="bg-red-300 flex flex-col gap-2 h-auto border p-2 border-red-700 w-full sm:w-1/2 rounded-lg">
            <li class="text-red-700 text-right text-xs font-medium">{{$error}}</li>
        </ul>
    @endforeach
@endif