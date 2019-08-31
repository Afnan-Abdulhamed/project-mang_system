<template>
   

   <div style="padding: 20px;">
    <h3 style="font-weight: bold;">Edit {{ project.name }}</h3>
        <form>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" placeholder="Enter Project Title" name="name" v-model="project.name">
            </div>
            
            <div class="form-group">
                <label for="start-date">Start Date</label>
                <input type="datetime-local" class="form-control" id="start-date" describedby="emailHelp" placeholder="ex 2019-08-12 10:0:0" datetime="YYYY-MM-DDThh:mm:ss" name="start_date" v-model="project.start_date">
            </div>

            <div class="form-group">
                <label for="end-date">End Date</label>
                <input type="datetime-local" class="form-control" id="end-date" describedby="emailHelp" placeholder="ex 2019-08-12 10:0:0" datetime="yyyy-MM-ddThh:mm" name="end_date" v-model="project.end_date" value="08/08/2019 01:01:01">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" rows="3" name="description">{{project.description}}</textarea>
            </div>

            
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="confirmed" name="confirmed" v-model="confirmed">
                <label class="form-check-label" for="confirmed">Confirmed</label>
            </div>

            <select class="custom-select" name="type" v-model="project.type">
                <option selected>Project Type</option>
                <option value="Website">Website</option>
                <option value="Mobile App">Mobile App</option>
                <option value="Desktop App">Desktop App</option>
            </select>
             <div class="form-group mt-3">
                <a class="btn btn-primary"  v-on:click="submit()">Submit</a>
             </div>   
        </form>

    </div>
</template>

<!-- Javascript -->
<script>
    export default {
    
	data() {
		return {
            projectId: "",
            confirmed :false,
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
                    console.log(response.data);
                if(this.project.confirmed == 'Active'){
                    this.confirmed = true;
                }
            })
      },

      methods: {
            submit: function () {
                console.log(this.project)
                axios.post("http://127.0.0.1:8000/api/projects/"+ this.projectId +"/update", this.project)
                .then(function (response) {
                   alert("Success");
                })
                .catch(function (error) {
                    
                });
            }
        },
      
}
</script>

<!-- Styles -->
<style>
 
</style>
