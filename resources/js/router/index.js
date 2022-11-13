import { createRouter, createWebHistory } from 'vue-router'
import TaskListComponent from '../components/TaskListComponent.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/tasks',
      name: 'task.list',
      component: TaskListComponent
    },
  ]
})

export default router