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
                <td>{{ person.name }}</td>
                <td>{{ person.age }}</td>
                <td>{{ person.job }}</td>
                <td>
                    <router-link :to="{ name: 'person.index'}" class="me-3">
                        <button class="btn btn-primary">Back</button>
                    </router-link>
                    <router-link :to="{ name: 'person.edit', params: {id : person.id}}" class="me-3">
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

    mounted() {
        this.$store.dispatch('getPerson', this.$route.params.id);
    },

    computed: {
        person() {
            return this.$store.getters.person
        }
    }
}
</script>

<style scoped>

</style>
