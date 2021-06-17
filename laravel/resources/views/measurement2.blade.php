<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Measurement') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <p>カテゴリー：</p>
                <p>開始時間：</p>
                <p>終了時間：</p>
                <form action="measure_record3" method="post">
                    @csrf
                    <input type="text" name="category" value="{{ $record->name}}" id="category1">
                    <input type="datetime-local" name="start_time" value="{{ $record->start_time}}" id="st1">
                    <input type="datetime-local" name="finish_time" value="{{ $record->finish_time}}" id="ft1">
                    <input type="hidden" name="record_id" value="{{ $record->id }}">
                    <input type="submit" value="Record" id="finish_button2" id="rb1">
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

<style>
#category1{
    
}


</style>
