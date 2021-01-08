<template>
    <div>
        <h2>form to create roles</h2>
        <form @submit.prevent="submit">
            <label for="role_name">Role name:</label>
            <input id="role_name" v-model="form.role_name" @input="checkRole"/>
            <button type="submit" :disabled="isRoleFilled">Submit</button>
        </form>
    </div>
</template>
<script>
    export default {
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
