<template>
    <div>
        <RolesIndex :roles="roles"></RolesIndex>
    </div>
</template>
<script>
    import RolesIndex from "../../../components/Roles/Index";

    export default{
        props : {
            roles: {
                type: Array,
                default: null
            }
        },
        components: {
            RolesIndex
        }
    }
</script>
