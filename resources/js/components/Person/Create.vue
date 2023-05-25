<template>
    <div class="w-25">
        <div class="mb-3">
            <input type="text" v-model="name" name="name" placeholder="name" class="form-control">
        </div>
        <div class="mb-3">
            <input type="number" v-model="age" name="age" placeholder="age" class="form-control">
        </div>
        <div class="mb-3">
            <input type="text" v-model="job" name="job" placeholder="job" class="form-control">
        </div>
        <div class="mb-3">
            <input @click.prevent="store" type="submit" value="Add" class="btn btn-success">
        </div>
    </div>
</template>

<script>
import routes from "../../routes";
export default {
    name: "PersonCreate",

    data() {
        return {
            name: null,
            age: null,
            job: null,
        }
    },

    methods: {
        store() {
            axios.post('/api/people', {name: this.name, age: this.age, job: this.job})
                .then( res => {
                    routes.push({ name: 'person.index'})
                })
        },
    }
}
</script>

<style scoped>

</style>
