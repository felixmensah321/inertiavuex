<template>
    <div>
        <RolesCreate></RolesCreate>
    </div>
</template>
<script>
    import RolesCreate from '../../../components/Roles/Create'
    export default {
       /* props : {
            users: {
                type: Array,
                default: null
            }
        },*/
        components: {
            RolesCreate
        },
        data() {
            return {
                form: {
                    role_name: null,
                },
                isRoleFilled: null
            }
        },
        created() {
            this.checkRole()
        },
        methods: {
            submit() {
                this.$inertia.post('/admin/roles', this.form)
            },
            checkRole() {
                this.isRoleFilled = this.form.role_name == null || this.form.role_name === ''
            }
        },
    }
</script>
