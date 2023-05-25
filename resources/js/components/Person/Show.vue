<template>
    <div>
        <table class="table" v-if="person">
            <thead>
            <tr>
                <th scope="col">№</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Job</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">ID</th>
                <td>{{ this.person.name }}</td>
                <td>{{ this.person.age }}</td>
                <td>{{ this.person.job }}</td>
                <td>
                    <router-link :to="{ name: 'person.index'}" class="me-3">
                        <button class="btn btn-primary">Back</button>
                    </router-link>
                    <router-link :to="{ name: 'person.edit', params: {id : this.person.id}}" class="me-3">
                        <button class="btn btn-warning">Edit</button>
                    </router-link>
                </td>

            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    name: "PersonShow",

    data() {
        return {
            person: null,
        }
    },

    mounted() {
        this.getPerson();
    },

    methods: {
        getPerson() {
            axios.get('/api/people/' + this.$route.params.id)
                .then(res => {
                    this.person = res.data
                })
        },
    },
}
</script>

<style scoped>

</style>
