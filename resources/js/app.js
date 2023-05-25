import './bootstrap';
import { createApp } from 'vue'
import { createRouter, createWebHistory} from 'vue-router'
import PostsIndex from "./components/Posts/Index.vue"


createApp({})
    .component('PostsIndex', PostsIndex)
    .mount('#app')
