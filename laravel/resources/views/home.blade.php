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

                <form action='category_register' method='post'>
                    @csrf
                    <label for="category_name">　カテゴリー名：</label>
                    <input type="text" name="category_name">
                    <input type="submit" value="send">
                </form>

                <form action='task_send' method='post'>
                    @csrf
                    <label for="category_name2">カテゴリー名：</label>
                    <select name="category_name2" id="category_name2">
                    @foreach($categories as $category)
                        <option value="{{$category->name}}">{{$category->name}}</option>
                    @endforeach
                    </select>


                    <label for="start_time">開始時間：</label>
                    <input type="datetime-local" name="start_time">
                    <label for="finish_time">終了時間：</label>
                    <input type="datetime-local" name="finish_time">
                    <input type="submit" value="send">
                </form>
                
                <div id="app">
                    <Home-gantt />
                </div>

                <table border="10">
                    <tr>
                        <th>タスク名：</th>
                        <th>開始時間：</th>
                        <th>終了時間：</th>
                        <th>更新：</th>
                        <th>削除：</th>
                    </tr>
                    @foreach($tasks as $task)
                        <tr>
                            <td>{{ $task->name}}</td>
                            <td>{{ $task->start_time}}</td>
                            <td>{{ $task->finish_time}}</td>
                            <td><a href="{{ route('task_edit',['id'=>$task->id])}}">edit</a></td>
                            <form action="task_delete" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $task->id}}">
                                <td><input type="submit" value="delete"></td>
                            </form>
                        </tr>
                    @endforeach

                </table>

            </div>
        </div>
    </div>
</x-app-layout>
