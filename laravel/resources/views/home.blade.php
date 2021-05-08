<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <a href="#">Today</a>
                <a href="#">1 week</a>
                <a href="#">1 month</a>

                @foreach($tasks as $task)
                    <p>{{$task->start_time}}</p>
                    <p>{{$task->finish_time}}</p>
                @endforeach
                
            </div>
        </div>
    </div>
</x-app-layout>
