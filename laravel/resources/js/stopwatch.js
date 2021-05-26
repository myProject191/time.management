

let judge = false;
let timeBool = true;
let ssbutton = document.getElementById("ssbutton");
const start_time = document.getElementById("start_time");
let finish_time = document.getElementById("finish_time");

function getTime(){
    let now = new Date();
    let year = now.getFullYear();
    let month = ( '0' + (now.getMonth() + 1)).slice(-2);
    let date = ( '0' + now.getDate()).slice(-2);
    let hour = ( '0' + now.getHours()).slice(-2);
    let min = ( '0' + now.getMinutes()).slice(-2);

    let time = year + '-' + month + '-' + date + 'T' + hour + ':' + min;

    return time;
}


function stopwatch(){
    
    let nowTime = getTime();

    if(timeBool){
    start_time.value = nowTime;
    timeBool = false;
    }

    if(judge){
        ssbutton.value = "Pause";
        finish_time.value = nowTime;
        console.log(nowTime);
        judge = false;

    }else{
        ssbutton.value = "Restart";
        judge = true;
    }
}

// if(ssbutton)：undefined,nullはfalseになる。ある時はtrueになる。
if(ssbutton){
    ssbutton.addEventListener("click", stopwatch, false);
  }