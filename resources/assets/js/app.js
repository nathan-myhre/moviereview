import Vue from 'vue'
import VueRouter from 'vue-router'

import Home from './components/Home'
import MovieApiDocs from './components/MovieApiDocs'
import ReviewApiDocs from './components/ReviewApiDocs'


Vue.use(VueRouter)

const router = new VueRouter({
  mode: 'history',
  base: __dirname,
  routes: [
    { path: '/', name: 'home', component: Home },
    { path: '/docs/reviews', name: 'reviewapi', component: ReviewApiDocs },
    { path: '/docs/movies', name: 'movieapi', component: MovieApiDocs },
    
  ]
})

new Vue({
  router,
  template: `
    <div id="app">
      <nav>
        <router-link :to="{ name: 'home' }">Home</router-link> | 
        <router-link :to="{ name: 'reviewapi' }">Review API Docs</router-link> | 
        <router-link :to="{ name: 'movieapi' }">Movie API Docs</router-link>
      </nav>
      <br/><br/>
      <router-view class="view"></router-view>
    </div>
  `
}).$mount('#app')


