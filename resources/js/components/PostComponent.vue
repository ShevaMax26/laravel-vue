<template>
    <div>
        <SinglePostComponent></SinglePostComponent>
        <CreateComponent></CreateComponent>
<!--        <table class="table">-->
<!--            <thead>-->
<!--            <tr>-->
<!--                <th scope="col">№</th>-->
<!--                <th scope="col">Name</th>-->
<!--                <th scope="col">Age</th>-->
<!--                <th scope="col">Job</th>-->
<!--            </tr>-->
<!--            </thead>-->
<!--            <tbody>-->
<!--            <tr v-for="(person, index) in persons" :key="person.id">-->
<!--                <th scope="row">{{ index + 1 }}</th>-->
<!--                <td>{{ person.name }}</td>-->
<!--                <td>{{ person.age }}</td>-->
<!--                <td>{{ person.job }}</td>-->
<!--            </tr>-->
<!--            </tbody>-->
<!--        </table>-->
    </div>
</template>

<script>
import SinglePostComponent from "./SinglePostComponent.vue";
import CreateComponent from "./CreateComponent.vue";

export default {
    name: "PostComponent",

    data() {
        return {
            persons: null,
        }
    },

    mounted() {
    },

    methods: {

    },

    computed: {},

    components: {
        SinglePostComponent,
        CreateComponent,
    }
}
</script>

<style scoped>

</style>
