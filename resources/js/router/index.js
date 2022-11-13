import { createRouter, createWebHistory } from 'vue-router'
import TaskListComponent from '../components/TaskListComponent.vue'
import TaskShowComponent from "../components/TaskShowComponent.vue";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/tasks',
      name: 'task.list',
      component: TaskListComponent
    },
    {
      path: '/tasks/:taskId',
      name: 'task.show',
      component: TaskShowComponent,
      props: true
    },
  ]
})

export default router