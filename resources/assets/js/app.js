import Datatable from 'vue2-datatable-component';

import Vue from 'vue';
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
Vue.use(Datatable);
window.Vue = require('vue');
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('clientes-component', require('./components/Clientes.vue'));
Vue.component('ramos-component', require('./components/Ramos.vue'));
Vue.component('referencias-component', require('./components/Referencias.vue'));
Vue.component('productos-component', require('./components/Productos'));

Vue.component('nuevo-cliente-component', require('./components/forms/NuevoCliente'));
Vue.component('nuevo-ramo-component', require('./components/forms/NuevoRamo'));
Vue.component('nuevo-referencia-component', require('./components/forms/NuevoReferencia'));
Vue.component('nuevo-producto-component', require('./components/forms/NuevoProducto'));

const app = new Vue({
    el: '#app',
    data:{
        menu:0
    }
});
