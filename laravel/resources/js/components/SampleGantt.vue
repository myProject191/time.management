<template>
  <div class="container">
    <h1>Hello</h1>
    <div class="gantt">
      <div class="task" v-for="task in tasks" :key="task.id" :ref="task.id">{{ task.name }}</div>
    </div>
  </div>
</template>
<script>
export default {
  mounted() {
    this.setGantt()
  },
  data() {
    return {
      tasks: [
        {
          id: 1,
          start: '2020/05/08 12:00:00',
          end: '2020/05/08 15:45:20',
          name: 'sample1'
        },
        {
          id: 2,
          start: '2020/05/08 16:00:00',
          end: '2020/05/08 17:45:20',
          name: 'sample2'
        },
        {
          id: 3,
          start: '2020/05/08 18:00:00',
          end: '2020/05/08 18:45:20',
          name: 'sample3'
        },
        {
          id: 4,
          start: '2020/05/08 20:00:00',
          end: '2020/05/08 23:45:20',
          name: 'sample4'
        },
      ]
    }
  },
  methods: {
    setGantt() {
      const length = this.tasks.length
      for(let i = 0; i < length; i++) {
        this.setCoordinate(this.tasks[i])
      }
    },
    setCoordinate(task) {
      const id = task.id
      console.log(this.time2coordinate(task.start))
      this.$refs[id][0].style.left = String(this.time2coordinate(task.start)) + 'px'
    },
    time2coordinate(str) {
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