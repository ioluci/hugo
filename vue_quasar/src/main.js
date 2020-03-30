import Vue from 'vue';
import store from './store';

/*
1. Select just one App file
2. Change the paths cssPath and jsPath accordingly, in package.json
*/

//Ricevute
import App from './App_ricevuta_index.vue';
//import App from './App.vue';
import './quasar';

Vue.config.productionTip = false;

new Vue({
      store,
      render: h => h(App),
}).$mount('#app');
