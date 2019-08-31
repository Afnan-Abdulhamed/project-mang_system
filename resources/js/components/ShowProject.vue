<template>
    <div class="row" style="padding: 20px;">
        <div class="col-md-7">
            <h3 style="font-weight: bold;">{{ project.name }}</h3>
            <p style="color:#5a5a5a">{{ project.description }}</p>
        </div>

        <div class="col-md-5">
            <ul class="project-info-box">
                <li><span></span>{{ project.type }}</li>
                <li><span><i class="far fa-check-circle"></i></span>{{ project.confirmed }}</li>
                <li><span><i class="far fa-calendar"></i></span>{{ project.start_date }}</li>
                <li><span><i class="far fa-calendar-times"></i></span>{{ project.end_date }}</li>
            </ul>
        </div>

    </div>
</template>

<!-- Javascript -->
<script>
    export default {
    
	data() {
		return {
            projectId: "",
            project: {
                'title':"",
                'startDate':"",
                'endDate':"",
                'description':"",
                'status':"",
                'type':"",
            },
		}
    },
    mounted() {
        this.projectId = this.$route.params.projectId

        axios.get("http://127.0.0.1:8000/api/projects/"+ this.projectId +"/show").then(
            response => {
                this.project = response.data
                console.log(response.data)
            })
      },
}
</script>

<!-- Styles -->
<style>
    .project-info-box{
        background-color: rgba(255,255,255,1);
        box-shadow: 0px 5px 30px 0px rgba(214,215,216,0.57);
        border-radius: 5px;
        padding: 20px;
        list-style: none;
        margin-top:25px;
    }
    .project-info-box i {
        color: #605ca8;
        font-weight: bold;
        padding: 5px;
        font-size: 18px;
    }
    .project-info-box li{
        font-size: 16px;
        color: #5a5a5a;
        font-weight: 600;
        padding-bottom:10px;
    }
</style>

