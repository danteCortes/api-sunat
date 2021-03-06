require('./bootstrap');

import Vue from 'vue';
import VueRouter from 'vue-router';
import Vuex from 'vuex';
import {routes} from './routes';
import MainComponent from './components/MainComponent.vue';
import StoreData from './store';

Vue.use(VueRouter);
Vue.use(Vuex);

const store = new Vuex.Store(StoreData);

const router = new VueRouter({
  routes,
  mode: 'history'
});

router.beforeEach((to, from, next) => {
  const requiresAuth = to.matched.some(record => record.meta.requiresAuth);
  const currentUser = store.state.currentUser;

  if(requiresAuth && !currentUser){
    next('/');
  }else if(to.path == '/' && currentUser){
    next('/dashboard');
  }else{
    next();
  }
})

const app = new Vue({
  el: '#app',
  router,
  store,
  components: {
    MainComponent
  }
});
