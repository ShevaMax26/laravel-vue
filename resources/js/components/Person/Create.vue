<template>
    <div class="w-25">
        <div class="mb-3">
            <input type="text" v-model="person.name" name="name" placeholder="name" class="form-control">
        </div>
        <div class="mb-3">
            <input type="number" v-model="person.age" name="age" placeholder="age" class="form-control">
        </div>
        <div class="mb-3">
            <input type="text" v-model="person.job" name="job" placeholder="job" class="form-control">
        </div>
        <div class="mb-3">
            <input :disabled="!isDisabled" @click.prevent="$store.dispatch('store', {name: person.name, age: person.age, job: person.job})" type="submit" value="Add" class="btn btn-success">
        </div>
    </div>
</template>

<script>
import {mapGetters} from 'vuex'

export default {
    name: "PersonCreate",

    mounted() {
        this.$store.commit('setPerson', {name: null, age: null, job: null})
    },

    computed: {
        ...mapGetters({
            isDisabled: 'isDisabled',
            person: 'person',
        })
    },
}
</script>

<style scoped>

</style>
