(function () {
    document.addEventListener('DOMContentLoaded', function() {
      const btn = document.getElementById('dropdown__btn');
      if(btn) {
        btn.addEventListener('click', function(){
          this.classList.toggle('is-open');
        });
      }
    });
  }());

  (function () {
    document.addEventListener('DOMContentLoaded', function() {
      const btn = document.getElementById('dropbtn_tasks');
      if(btn) {
        btn.addEventListener('click', function(){
          this.classList.toggle('is-open');
        });
      }
    });
  }());

  (function () {
    document.addEventListener('DOMContentLoaded', function() {
      const btn = document.getElementById('add_category');
      if(btn) {
        btn.addEventListener('click', function(){
          this.classList.toggle('is-open');
        });
      }
    });
  }());
  
  const button = document.getElementById("dropbtn_tasks")
  let rotateBool = true;
  
  button.addEventListener("click",function (){
    if(rotateBool){
      document.getElementById("taskTriangle").style.transform = "rotate(90deg)";
      rotateBool = false;
    }else{
      document.getElementById("taskTriangle").style.transform = "rotate(0deg)";
      rotateBool = true;
    }
  });
  
  const todayButton = document.getElementById("dropdown__btn")
  let rotateBool2 = true;

  todayButton.addEventListener("click",function (){
    if(rotateBool2){
      document.getElementById("todayTriangle").style.transform = "rotate(90deg)";
      rotateBool2 = false;
    }else{
      document.getElementById("todayTriangle").style.transform = "rotate(0deg)";
      rotateBool2 = true;
    }
  });

