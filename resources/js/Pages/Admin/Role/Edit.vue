<template>
    <div>
        <h2>form to create roles</h2>
        <form @submit.prevent="submit">
            <label for="role_name">Role name:</label>
            <input id="role_name" v-model="form.role_name" @input="checkRole"/>
            <button type="submit" :disabled="isRoleFilled">Update</button>
        </form>
    </div>
</template>
<script>
    export default {
         props : {
             role: {
                 type: Object,
                 default: null
             }
         },
         components: {
         },
        data() {
            return {
                form: {
                    role_name: this.role.name,
                    role_id: this.role.id,
                    _method: 'PUT'
                },
                isRoleFilled: null
            }
        },
        created() {
            this.checkRole()
        },
        methods: {
            submit() {
               /* let data = new FormData()
                data.append('role_name', this.form.role_name)
                data.append('_method', 'PUT')*/
                this.$inertia.post('/admin/roles/' + this.role.id, this.form)
            },
            checkRole() {
                this.isRoleFilled = this.role.name == null || this.role.name === ''
                console.log(this.isRoleFilled)
            }
        },
    }
</script>
<style scoped>
    .disabled{

    }
</style>
