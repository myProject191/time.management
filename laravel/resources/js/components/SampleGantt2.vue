<template>
  <div class="container">
    <div class="gantt">
      <div class="task" v-for="task in tasks" :key="task.id" :ref="task.id">{{ task.category }}</div>
    </div>
  </div>
</template>
<script>

// vueからcontrollerを呼び出している！！！

export default {
  // mounted：instanceを読み込まれちょっと後に呼び出される。
  mounted() {
    //   ここで、まず必要なデータを引っ張ってくる.
    this.fetchTasks()
    // this.setGantt()
  },
  //サーバから引っ張ってきたデータや、自分で打ち込んだデータを入れていく
  data() {
    return {
      tasks: [
        // {
        //   id: 1,
        //   start_time: '2020/05/08 12:00:00',
        //   end: '2020/05/08 15:45:20',
        //   category: 'sample1'
        // },
      ]
    }
  },

  //methods：処理を埋め込んで、後で呼び出す。
  methods: {
    // awaitを使うときはasyncを書く
    async fetchTasks() {
      // web.phpにfetch_task_dataのURLでリクエストしている。
        const url = "fetch_task_data_2home1day"
        // awaitによって非同期処理を待っている。
        await axios.get(url).then(res => {
            this.tasks = res.data
            console.log(this.tasks)
        })
        this.setGantt()
    },
    setGantt() {
      // const length = this.tasks.length

      console.log(this.tasks)
      const length = Object.keys(this.tasks).length
      for(let i = 0; i < length; i++) {
        this.setCoordinate(this.tasks[i])
      }
    },
    setCoordinate(task) {
      const id = task.id
      // console.log(this.time2coordinate(task.start))
      this.$refs[id][0].style.left = String(this.time2coordinate(task.start_time)) + 'px'
      this.$refs[id][0].style.color = 'red'
    },
    time2coordinate(str) {
      // split：文字列を分割して配列にする。
      const his = str.split(' ')[1]
      const hisArr = his.split(':')
      const h = Number(hisArr[0])
      const i = Number(hisArr[1])
      // const s = Number(hisArr[2])
      const totalMinutes = h * 60 + i
      const dayMinutes = 24 * 60
      const leftCoordinate = 720 * totalMinutes / dayMinutes
      return leftCoordinate
    }
  }
}
</script>
<style scoped lang="scss">
.cantainer {
  width: 100%;
}
$ganttWidth: 720px;
$ganttHeight: 60px;
.gantt {
  margin: 0 auto;
  width: $ganttWidth;
  height: $ganttHeight;
  border: solid 1px rgba(0,0,0,.1);
  position: relative;
  > .task {
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    background-color: gray;
  }
}
</style>