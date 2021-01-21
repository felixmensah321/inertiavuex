<template>
    <div>
        <div class="container">
            <div class="row light">
                <div class="col-lg-12 col-md-12">
                    <h1>Company Profile</h1>
                    <table class="table-condensed wide full-width table-striped ">
                        <tr><th>Company</th>
                            <th>Cell Number</th>
                            <th>Role</th>
                        </tr>
                        <tr>
                            <td>{{ profileData.company }}</td>
                            <td>{{ profileData.cellnumber }}</td>
                            <td>{{ profileData.role }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        props : {
            profileData: {
                type: Object,
                default: null
            }
        },
        /*components: {
            UserProfile
        },
        data(){
            return {
                profileData: null,
                showProfile: false
            }
        },*/
        created() {
            console.log(this.profileData)
        },
        /*methods:{
            fetchProfile(id){
                this.profileData = this.$inertia.get('/admin/users/'+id)
                console.log(typeof this.profileData)
            }
        }*/
    }
</script>
<style scoped>
    .wide{
        width:100%;
    }
</style>
