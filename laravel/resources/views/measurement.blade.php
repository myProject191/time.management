<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Measurement') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action='measurement_send'>
                    @csrf
                    <select name="category_choice" id="category_choice">
                        @foreach($categories as $category)
                            <option value="{{$category->name}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    <input type="datetime-local" name="start_time" id="start_time">
                    <input type="datetime-local" name="finish_time" id="finish_time">

                    <input type="button" value="start" id="ssbutton">
                    <!-- ↑最初はstart、一回押すとpause、２回押すとrestartにする。（３回目はpause...） -->
                    <!-- bool値で決める -->
                    <input type="submit" value="finish">




                </form>
            </div>
        </div>
    </div>
</x-app-layout>


<!-- <script>
let judge = true;
function stopwatch() {
  if (judge) {
    ssbutton.value = "Pause";
    judge = false;
  } else {
    ssbutton.value = "Restart";
    judge = true;
  }
}
</script> -->
