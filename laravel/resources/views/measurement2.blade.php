<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Measurement') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div id="form1">
                <form action="measure_record3" method="post">
                    @csrf
                    <label for="category1">カテゴリー：</label>
                    <input type="text" name="category" value="{{ $record->name}}" id="category1"><br>
                    <label for="st1">開始時間：</label>
                    <input type="datetime-local" name="start_time" value="{{ $record->start_time}}" id="st1" onchange="time()"><br>
                    <label for="ft1">終了時間：</label>
                    <input type="datetime-local" name="finish_time" value="{{ $record->finish_time}}" id="ft1" onchange="time()"><br>
                    <input type="hidden" name="record_id" value="{{ $record->id }}">
                    <label for="workTime">作業時間：</label>
                    <p id="workTime"></p>
                    <input type="submit" value="Record" id="finish_button2" id="rb1">
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<style>

#category1{
    font-size: 50px;
}
#form1{
    font-size: 40px;
    margin: 10px 10px 10px 30px;
}
#finish_button2{
    height: 100px;
    width: 300px;
    border-radius: 20px;
    margin: 20px;
    background-color: rgba(100,255,100,0.6);
}
#finish_button2:hover{
    background-color: rgba(100,255,100,0.8);
}



</style>

<script>

    let constime = document.getElementById("st1").value;
    let conftime = document.getElementById("ft1").value;

    function time(){

        let stime = document.getElementById("st1").value;
        let ftime = document.getElementById("ft1").value;
        
        let diff1 = Date.parse(ftime) - Date.parse(stime);

        
        let hour1 = Math.floor(diff1/(1000*60*60));
        let minute1 = Math.floor(diff1/(1000*60))%60;
        let second1 = Math.floor(diff1/1000)%60;
        
        hour1 = ('0' + hour1).slice(-2);
        minute1 = ('0' + minute1).slice(-2);
        second1 = ('0' + second1).slice(-2);
        let time1 = hour1 + ":" + minute1 + ":" + second1;

        console.log(diff1);

        if(diff1 < 0){
            time1 = "Error:開始時刻が終了時刻よりも遅いです。";
            document.getElementById("st1").value = constime;
            document.getElementById("ft1").value = conftime;
        }
        document.getElementById("workTime").textContent = time1;
    }

    window.onload = time();
</script>