<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Measurement') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <p class="choice">カテゴリーを選択</p>
                <form action='measurement_send' method='post'>
                    @csrf
                    <select name="category_choice" id="category_choice">
                        @foreach($categories as $category)
                            <option value="{{$category->name}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    <input type="submit" value="start" id="start_button">
                </form>
            </div>
        </div>
    </div>
</x-app-layout>

<style>
.choice{
    font-size: 50px;
}
#category_choice{
    height: 100px;
    width: 400px;
}
#start_button{
  height:200px;
  width: 200px;
  border-radius: 100px;
  font-size: 50px;
  background-color: rgba(100,250,250,0.7);
}


</style>
