/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('cbo-component', require('./components/CBOComponent.vue').default);

Vue.component('cat-component', require('./components/CATComponent.vue').default);

Vue.component('spo-component', require('./components/SPOComponent.vue').default);

Vue.component('wards-component', require('./components/WardsComponent.vue').default);

Vue.component('cbo-reports-component', require('./components/CBOReportsComponent.vue').default);

Vue.component('spo-reports-component', require('./components/SPOReportsComponent.vue').default);

Vue.component('remedial-action-component', require('./components/RemedialActionComponent.vue').default);


Vue.component('state-level-advocacy-component', require('./components/StateLevelAdvocacyComponent.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app_root',
});
