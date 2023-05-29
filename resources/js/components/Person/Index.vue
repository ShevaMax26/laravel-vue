<template>
    <div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">№</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Job</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody v-for="(person, index) in people">
            <tr>
                <th scope="row">{{ ++index }}</th>
                <td>
                    <router-link :to="{ name: 'person.show', params: {id: person.id}}" class="me-2 text-dark">
                        {{ person.name }}
                    </router-link>
                </td>
                <td>{{ person.age }}</td>
                <td>{{ person.job }}</td>
                <td>
                    <router-link :to="{ name: 'person.edit', params: {id: person.id}}" class="me-2">
                        <button class="btn btn-warning">Edit</button>
                    </router-link>
                    <button @click.prevent="$store.dispatch('destroy', person.id)" class="btn btn-danger">Delete</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    name: "PersonIndex",

    mounted() {
        this.$store.dispatch('getPeople')
    },

    computed: {
        people() {
            return this.$store.getters.people
        },
    },
}
</script>

<style scoped>

</style>
