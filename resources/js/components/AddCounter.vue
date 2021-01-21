<template>
    <div class="container">
        <div class="field is-grouped">
            <div class="control">
                <button class="button is-primary" v-on:click="addCounter()">Add</button>
            </div>
        </div>
    </div>
</template>
<script>
    // import store from '../store/index'
    import * as type from '../store/mutationTypes/types';
    export default {
        methods: {
            addCounter(){
                this.$store.state.commit()
                this.$store.dispatch({
                    type: type.Increment,
                    amount: 20
                })
            }
        }
    }
</script>
