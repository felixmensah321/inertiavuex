<template>
    <div>
        <div class="container">
            <div class="row light">
                <div class="col-lg-12 col-md-12">
                    <table class="table-condensed wide full-width table-striped ">
                        <tr><th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                        <tr v-for="user in users" :key="user.id">
                            <td>{{ user.name }}</td>
                            <td>{{ user.email}}</td>
                            <td>to be defined</td>
                            <td>
                    <span>
                        <a @click="fetchProfile(user.id)"><i class="fa fa-user text-primary"></i></a>
                        <a href="#"><i class="fa fa-pencil text-primary"></i></a>
                        <a href="#"><i class="fa fa-trash text-danger"></i></a>
                    </span>
                            </td>
                        </tr>
                    </table>
                    <UserProfile v-if="showProfile" :profile-data="profileData"></UserProfile>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import UserProfile from '../components/UserProfile'
    import axios from '../../../node_modules/axios'

    export default {
        props : {
            users: {
                type: Array,
                default: null
            }
        },
        components: {
            UserProfile
        },
        data(){
            return {
                profileData: null,
                showProfile: false
            }
        },
        created() {
            // console.log(this.users)
        },
/*        computed(){

        },*/
        methods:{
          fetchProfile(id){
              axios.get('/admin/users/'+id).then(response => {
                  this.profileData = response.data
                  this.showProfile = true
              });
              //
              /*console.log(this.$inertia.get('/admin/users/'+id).then(function(response){
              }));*/

              /*.then(response => {
              console.log(response)
          })*/

          },
            getData(data){
              this.profileData = data
            }
        }
    }
</script>
<style scoped>
    .wide{
        width:100%;
    }
</style>
