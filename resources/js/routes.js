import Vue from 'vue'
import VueRouter from 'vue-router'

// import and install the VueRouter plugin
Vue.use(VueRouter)

// import vue components
import Project from './components/Project'
import EditProject from './components/EditProject'
import ShowProject from './components/ShowProject'



// new route instance
const router = new VueRouter({
    mode: 'history',

    routes: [

        {
            path: '/projects-manager/',
            name: 'Project',
            component: Project,
        },
        {
            path: '/projects-manager/:projectId/edit',
            name: 'EditProject',
            component: EditProject,
        },
        {
            path: '/projects-manager/:projectId/show',
            name: 'ShowProject',
            component: ShowProject,
        },

    ],
});


export default router;