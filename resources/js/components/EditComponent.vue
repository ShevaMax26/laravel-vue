<template>
    <tr :class="$parent.isEdit(person.id) ? '' : 'd-none'">
        <th scope="row">{{ index + 1 }}</th>
        <td><input type="text" v-model="name" name="name" class="form-control"></td>
        <td><input type="number" v-model="age" name="age" class="form-control"></td>
        <td><input type="text" v-model="job" name="job" class="form-control"></td>
        <td>
            <a href="#" @click.prevent="updatePerson(person.id)" class="btn btn-success">Update</a>
            <a href="#" @click.prevent="updatePerson(null)" class="btn btn-danger ms-2">X</a>
        </td>
    </tr>
</template>

<script>

export default {
    name: "IndexComponent",

    data() {
        return {
            name: null,
            age: null,
            job: null,
        }
    },

    props: [
        'person',
        'index',
    ],

    mounted() {
    },

    methods: {
        updatePerson(id) {
            this.$parent.editPersonId = null;
            axios.patch(`/api/people/${id}`, {name: this.name, age: this.age, job: this.job})
                .then(res => {
                    this.$parent.getPeople()
                });
        },
    },
}
</script>

<style scoped>

</style>
