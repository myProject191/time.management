<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div id="form3">
                    <form action="/record_edit_done" method="post">
                    @csrf
                        @foreach($time_records as $time_record)
                            <select name="trecord" id="trecord">
                                <option value="{{ $time_record->name}}" name="name" selected>{{ $time_record->name}}</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->name}}" name="name">{{$category->name}}</option>
                                @endforeach
                            </select>
                            <input type="hidden" name="record_id" value="{{$time_record->id}}">
                            <input type="datetime-local" name="start_time" value="{{ str_replace(" ", "T", $time_record->start_time)}}" >
                            <input type="datetime-local" name="finish_time" value="{{ str_replace(" ", "T", $time_record->finish_time)}}">
                            <input type="submit">
                        @endforeach
                        </select>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


<style>
#form3{
    font-size: 50px;

}

</style>
