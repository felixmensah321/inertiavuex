<template>
    <div>
        <Users :users="users"></Users>
    </div>
</template>
<script>
    import Users from '../../components/Users'
    export default {
        props : {
            users: {
                type: Array,
                default: null
            }
        },
        components: {
            Users
        }
    }
</script>
