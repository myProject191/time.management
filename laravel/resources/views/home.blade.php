<x-app-layout>
    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
        <div class="dropdown m-0">
            <button class="dropdown__btn" id="dropdown__btn"><span id="todayTriangle">▶︎</span>Today</button>
            <div class="dropdown__body">
                <ul class="dropdown__list">
                    <li class="dropdown_item"><a href="#" class="dropdown__item-link">Today</a></li>
                    <li class="dropdown_item"><a href="#" class="dropdown__item-link">1 week</a></li>
                    <li class="dropdown_item"><a href="#" class="dropdown__item-link">1 month</a></li>
                    <li class="dropdown_item"><a href="{{ route('schedule')}}" class="dropdown__item-link">Schedule</a></li>
                </ul>
            </div>
        </div>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

            <!-- カテゴリーの追加をする -->

                <div class="editBar">
                                        @if($errors->any())
                                            <div class="alert alert-danger">
	                                            <ul>
	                                                @foreach ($errors->all() as $error)
	                                                    <li>{{ $error }}</li>
	                                                @endforeach
	                                            </ul>
	                                        </div>
                                            @endif
                    
                    <div class="dropdown_tasks">
                        <button class="dropbtn_tasks" id="dropbtn_tasks"><span id="taskTriangle">▶︎</span>タスクを追加</button>
                        <div class="dropbody_tasks">

                            <form action='task_send' method='post'>
                                @csrf
                                <div class="category_name">
                                    <label for="category_name2">カテゴリー名：</label>
                                    <select name="category_name2" id="category_name2">
                                        @foreach($categories as $category)
                                        <option value="{{$category->name}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="start_time">
                                    <label for="start_time">開始時間：</label>
                                    <input type="datetime-local" name="start_time">
                                </div>
                                <div class="finish_time">
                                    <label for="finish_time">終了時間：</label>
                                    <input type="datetime-local" name="finish_time">
                                </div>
                                <input type="submit" value="send" class="send">
                            </form>    


                            <button class="add_category" id="add_category">+</button>
                            <!-- <div class="edit_category"> -->
                                <div class="category_body">
                                    <form action='category_register' method='post'>
                                        @csrf
                                        <div class="category1">
                                            <label for="category_name">カテゴリーを追加：</label>
                                            <input type="text" name="category_name">
                                        </div>
                                        <div class="color_set">
                                            <label for="color">色を選択：</label>
                                            <select name="color" id="color">
                                                <option value="red">Red</option>
                                                <option value="orange">Orange</option>
                                                <option value="yellow">Yellow</option>
                                                <option value="green">Green</option>
                                                <option value="blue">Blue</option>
                                                <option value="indigo">Indigo</option>
                                                <option value="purple">Purple</option>
                                            </select>
                                        </div>
                                        <input type="submit" value="send" class="send">
                                    </form>
                                </div>
                            <!-- </div> -->

                        </div>
                    </div>
                    
                </div>
                


                <!-- <form action='task_send' method='post'>
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
                </form> -->
                
                <div id="app">
                    <Home-gantt />
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
