<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Measurement') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div id="choice_all">
                    <p class="choice">カテゴリーを選択</label><nobr>
                    <form action='measurement_send' method='post'>
                        @csrf
                        <select name="category_choice" id="category_choice">
                            @foreach($categories as $category)
                                <option value="{{$category->name}}">{{$category->name}}</option>
                            @endforeach
                        </select><br>
                        <input type="submit" value="start" id="start_button">
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>

<style>
#choice_all{
    position: relative;
    height:400px;
}

.choice{
    font-size: 50px;
    margin: 20px;
    position: absolute;
    top: 20px;

}
#category_choice{
    height: 100px;
    width: 400px;
    position: absolute;
    top:20px;
    left: 450px;
}
#start_button{
  height:100px;
  width: 200px;
  border-radius: 10px;
  margin: 30px;
  font-size: 56px;
  background-color: rgba(100,250,250,0.7);
  position: absolute;
  top: 150px;
  left:0px;
}
#start_button:hover{
  background-color: rgba(100,250,250,0.9);
}


</style>
