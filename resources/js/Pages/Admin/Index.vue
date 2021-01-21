<template>
    <div>
        <Users :users="users"></Users>
        <div class="container">
            <Counter></Counter><br />
            <div class="columns">
                <div class="column is-11">
                    <AddCounter></AddCounter>
                </div>
                <div class="column auto">
                    <RemoveCounter></RemoveCounter>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    import Users from '../../components/Users'
    import Counter from '../../components/Counter.vue';
    import AddCounter from '../../components/AddCounter.vue';
    import RemoveCounter from '../../components/RemoveCounter.vue';
    export default {
        props : {
            users: {
                type: Array,
                default: null
            }
        },
        components: {
            Users,
            Counter,
            AddCounter,
            RemoveCounter
        }
    }
</script>
