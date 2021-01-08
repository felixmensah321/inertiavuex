<template>
    <div>
        <div class="container">
            <div class="row light">
                <div class="col-lg-12 col-md-12">
                    <table class="table-condensed wide full-width table-striped ">
                        <tr><th>Name</th>
                            <th>Action</th>
                        </tr>
                        <tr v-for="role in roles" :key="role.id">
                            <td>{{ role.name }}</td>
                            <td>
                    <span>
                        <a :href="role.id + '/edit'"><i class="fa fa-pencil text-primary"></i></a>
                        <form @submit.prevent="submit">
                            <input type="hidden" v-model="role.id" :id="role.id"/>
                            <button type="submit"><i class="fa fa-trash text-danger"> </i> delete</button>
                        </form>
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
            roles: {
                type: Array,
                default: null
            }
        },
        data(){
            return{
                form: {
                    roleId: this.role.name,
                    role_id: this.role.id,
                    _method: 'PUT'
                },
            }
        },
        methods: {
            submit() {
                this.$inertia.delete('/admin/roles/' + this.role.id, this.form)
            },
        }
    }
</script>
<style scoped>
    .wide{
        width:100%;
    }
</style>
