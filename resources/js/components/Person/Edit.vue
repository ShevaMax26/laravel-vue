<template>
    <div class="w-25" v-if="person">
        <div class="mb-3">
            <input type="text" v-model="person.name" name="name" class="form-control">
        </div>
        <div class="mb-3">
            <input type="number" v-model="person.age" name="age" class="form-control">
        </div>
        <div class="mb-3">
            <input type="text" v-model="person.job" name="job" class="form-control">
        </div>
        <div class="mb-3">
            <router-link :to="{ name: 'person.index'}" class="me-3">
                <button class="btn btn-primary">Back</button>
            </router-link>
            <input :disabled="!isDisabled"
                   @click.prevent="$store.dispatch('update', {id: person.id, name: person.name, age: person.age, job: person.job})"
                   type="submit" value="Update" class="btn btn-warning me-2">
        </div>
    </div>
</template>

<script>
import {mapGetters} from "vuex";

export default {
    name: "PersonEdit",

    mounted() {
        this.$store.dispatch('getPerson', this.$route.params.id)
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
