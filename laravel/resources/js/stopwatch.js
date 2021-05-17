

const start_time = document.getElementById("start_stop_time")
let now = new Date();
let judge = true;
let ssbutton = document.getElementById("ssbutton");

function getTime(){
    let year = now.getFullYear();
    let month = ( '0' + now.getMonth() + 1).slice(-2);
    let date = ( '0' + now.getDate()).slice(-2);
    let hour = ( '0' + now.getHours()).slice(-2);
    let min = ( '0' + now.getMinutes()).slice(-2);

    let time = year + '-' + month + '-' + date + 'T' + hour + ':' + min;

    return time;
};


// ↓なぜか読み込めない
function stopwatch(){
    
    if(judge){
        ssbutton.value = Pause;
        judge = false;
    }else{
        ssbutton.value = Restart;
        judge = true;
    }
}