<template>
    <tr :class="$parent.isEdit(person.id) ? 'd-none' : ''">
        <th scope="row">{{ index + 1 }}</th>
        <td>{{ person.name }}</td>
        <td>{{ person.age }}</td>
        <td>{{ person.job }}</td>
        <td>
            <a href="#" @click.prevent="changeEditPersonId(person.id, person.name, person.age, person.job)"
               class="btn btn-warning me-2">Edit</a>
            <a href="#" @click.prevent="deletePerson(person.id)" class="btn btn-danger">Delete</a>
        </td>
    </tr>
</template>

<script>

export default {
    name: "ShowComponent",

    data() {
        return {

        }
    },

    props: [
        'person',
        'index',
    ],

    methods: {
        deletePerson(id) {
            axios.delete(`/api/people/${id}`)
                .then(res => {
                    this.$parent.getPeople()
                });
        },

        changeEditPersonId(id, name, age, job) {
            this.$parent.editPersonId = id
            let editName = `edit_${id}`
            let fullEditName = this.$parent.$refs[editName][0]
            fullEditName.name = name
            fullEditName.age = age
            fullEditName.job = job
        },
    },
}
</script>

<style scoped>

</style>
