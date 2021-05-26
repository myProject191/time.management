<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <form action="/task_edit_done" method="post">
                @csrf
                    @foreach($tasks as $task)
                        <input type="text" name="name" value="{{ $task->name}}">
                        <input type="hidden" name="task_id" value="{{$task->id}}">
                        <input type="datetime-local" name="start_time" value="{{ str_replace(" ", "T", $task->start_time)}}" >
                        <input type="datetime-local" name="finish_time" value="{{ str_replace(" ", "T", $task->finish_time)}}">
                        <input type="submit">
                    @endforeach
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
