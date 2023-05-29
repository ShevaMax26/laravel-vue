<template>
    <div class="w-25">
        <div class="mb-3">
            <input type="text" v-model="name" name="name" class="form-control">
        </div>
        <div class="mb-3">
            <input type="number" v-model="age" name="age" class="form-control">
        </div>
        <div class="mb-3">
            <input type="text" v-model="job" name="job" class="form-control">
        </div>
        <div class="mb-3">
            <router-link :to="{ name: 'person.index'}" class="me-3">
                <button class="btn btn-primary">Back</button>
            </router-link>
            <input :disabled="!isDisabled" @click.prevent="update" type="submit" value="Update" class="btn btn-warning me-2">
        </div>
    </div>
</template>

<script>
export default {
    name: "PersonEdit",

    data() {
        return {
            name: null,
            age: null,
            job: null,
        }
    },

    mounted() {
        this.getPerson()
    },

    methods: {
        getPerson() {
            axios.get(`/api/people/${this.$route.params.id}`)
                .then(res => {
                    this.name = res.data.data.name
                    this.age = res.data.data.age
                    this.job = res.data.data.job
                })
        },

        update() {
            axios.patch(`/api/people/${this.$route.params.id}`, {name: this.name, age: this.age, job: this.job})
                .then(res => {
                    this.$router.push({name: 'person.show', params: {id: this.$route.params.id}})
                })
        },
    },

    computed: {
        isDisabled() {
            return this.name && this.age && this.job
        }
    },
}
</script>

<style scoped>

</style>
