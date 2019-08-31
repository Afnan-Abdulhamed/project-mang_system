<template>
    <div>
        <!-- Header -->
            <div class=" main-head d-flex flex-column flex-md-row align-items-center p-3 px-md-4 border-bottom shadow-sm">
                <h5 class="my-0 mr-md-auto font-weight-normal">Project Management</h5>
                <nav class="my-2 my-md-0 mr-md-3">
                    <router-link :to="{ name: 'Project' }" class="p-2 text-light">Table List</router-link>
                    

                </nav>
                <!-- <a class="btn btn-outline-primary" href="#">Sign up</a> -->
            </div>

        <div class="container">
            <!-- This is where you see your content of the component. -->
            <router-view></router-view> 
        </div>
    </div>

    
</template>


<script>
    export default {}
</script>