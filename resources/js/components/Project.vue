<template>
  <div>
        <h3 > My Projects</h3>
        <table id="myTable" lass="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Title</th>
                <th>Type</th>
                <th>Status</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Actions</th>

            </tr>
        </thead>
        <tbody>
            <tr  v-for="project in projects">
                <td>{{ project.name}}</td>
                <td>{{ project.type}}</td>
                <td>{{ project.confirmed}}</td>
                <td>{{ project.start_date}}</td>
                <td>{{ project.end_date}}</td>
                <td>
                    <!-- VIEW -->
                    <span>
                        <router-link :to="{ name: 'ShowProject', params: {projectId: project.id } }"  style="color:#605ca8">
                            <i style="padding:5px"class="fas fa-eye"></i>
                        </router-link>
                    </span>
                    <!-- EDIT -->
                    <span>
                        <router-link :to="{ name: 'EditProject', params: {projectId: project.id } }"  style="color:#605ca8">
                            <i style="padding:5px"class="fas fa-edit"></i>
                        </router-link>
                    </span>
                    <!-- DELETE -->
                    <span>
                        <router-link :to="{ name: 'DeleteProject' }"  style="color:#605ca8">
                            <i style="padding:5px"class="fas fa-trash-alt"></i>
                        </router-link>
                    </span>

                </td>

            </tr>
        
        </tbody>
    </table>
  </div>
</template>

 <link href="../ProjectsComponent/Project.css" rel="stylesheet"/>
<script>

export default {
    
	data() {
		return {
            projects: [],
		}

    },
    mounted() {
        axios.get("http://127.0.0.1:8000/api/projects/1").then(
            response => {
                this.projects = response.data
                console.log(response.data)
            })
      },
}

</script>

<style>
    #myTable{

    }
    #myTable tr:nth-child(even) {
        background-color: #f2f2f2;
    }

     #myTable tbody th, #myTable tbody td {
        padding: 8px 10px;
    }
    #myTable th, td {
        border-bottom: 1px solid #ddd;
    }
</style>