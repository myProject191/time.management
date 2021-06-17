<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Measurement') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg record">
                <p>カテゴリー：{{ $record->name}}</p>
                <p id="state">計測中</p>
                <p>開始時間：</p>
                <p id="sttime">{{ $record->start_time }}</p>
                <p>経過時間：</p>
                <p id="eltime">00:00:00</p>
                <div>
                    <form action="measure_record" method="post">
                        @csrf
                        <input type="hidden" name="record_id" value="{{ $record->id }}">
                        <input type="submit" value="Finish" id="finish_button">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<style>
.record{
    font-size: 40px;
}
.state{
    color: rgba(0,255,0,0.7);
}
#finish_button{
  height:200px;
  width: 200px;
  border-radius: 100px;
  font-size: 50px;
  background-color: rgba(0,255,0,0.7);
  color: white;
}


</style>

<script>
    let sttime = document.getElementById("sttime").textContent;
    let sttime1 = Date.parse(sttime);
    
    window.setInterval(function(){
        
        let nowTime = new Date();
        let diff = nowTime.getTime() - sttime1;
        let hour = Math.floor(diff/(1000*60*60));
        let minute = Math.floor(diff/(1000*60))%60;
        let second = Math.floor(diff/1000)%60;

        hour = ('0' + hour).slice(-2);
        minute = ('0' + minute).slice(-2);
        second = ('0' + second).slice(-2);

        let time = hour + ":" + minute + ":" + second;
        document.getElementById("eltime").textContent = time;
        
    },1000);


</script>