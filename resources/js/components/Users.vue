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
                        <a href="#"><i class="fa fa-pencil text-primary"></i></a>
                        <a href="#"><i class="fa fa-trash text-danger"></i></a>
                    </span>
                            </td>
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
            users: {
                type: Array,
                default: null
            }
        }
    }
</script>
<style scoped>
    .wide{
        width:100%;
    }
</style>
