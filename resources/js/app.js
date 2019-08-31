import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)


// import vue components
import App from './components/App'
// import route informations from router.js
import Project from './components/Project'
import Routes from './routes'


const app = new Vue({
    el: '#app',
    router: Routes,
    render: h => h(App),
    components: {
        Project,
    },
});

export default app;