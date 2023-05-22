<template>
    <div class="w-25 pt-3">
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" v-model="name" id="name">
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Age:</label>
            <input type="number" class="form-control" v-model="age" id="age">
        </div>
        <div class="mb-3">
            <label for="job" class="form-label">Job:</label>
            <input type="text" class="form-control" v-model="job" id="job">
        </div>
        <button @click.prevent="addPerson" class="btn btn-success">Create</button>
    </div>
</template>

<script>

export default {
    name: "CreateComponent",

    data() {
        return {
            name: null,
            age: null,
            job: null,
        }
    },

    mounted() {
        this.$parent.$refs.index.indexLog();
    },

    methods: {
        addPerson() {
            axios.post('/api/people', {name: this.name, age: this.age, job: this.job})
                .then(res => {
                    this.name = null;
                    this.age = null;
                    this.job = null;
                });
        },
    },
}
</script>

<style scoped>

</style>
