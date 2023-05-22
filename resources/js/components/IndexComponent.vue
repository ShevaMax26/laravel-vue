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
            <tbody>
            <template v-for="(person, index) in people" :key="person.id">
                <tr :class="isEdit(person.id) ? 'd-none' : ''">
                    <th scope="row">{{ index + 1 }}</th>
                    <td>{{ person.name }}</td>
                    <td>{{ person.age }}</td>
                    <td>{{ person.job }}</td>
                    <td>
                        <a href="#" @click.prevent="changeEditPersonId(person.id, person.name, person.age, person.job)" class="btn btn-warning me-2">Edit</a>
                        <a href="#" @click.prevent="deletePerson(person.id)" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <tr :class="isEdit(person.id) ? '' : 'd-none'">
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
            </tbody>
        </table>
    </div>
</template>

<script>

export default {
    name: "IndexComponent",

    data() {
        return {
            people: null,
            editPersonId: null,
            name: null,
            age: null,
            job: null,
        }
    },

    mounted() {
        this.getPeople()
        this.$parent.indexParent()
    },

    methods: {
        brotherMethod() {
            console.log('This is brother method from indexComponent');
        },

        indexLog() {
            console.log('I\'m Index component');
        },

        getPeople() {
            axios.get('/api/people')
                .then(res => {
                    this.people = res.data
                });
        },

        updatePerson(id) {
            this.editPersonId = null;
            axios.patch(`/api/people/${id}`, {name: this.name, age: this.age, job: this.job})
                .then(res => {
                    this.getPeople()
                });
        },

        deletePerson(id) {
            axios.delete(`/api/people/${id}`)
                .then(res => {
                    this.getPeople()
                });
        },

        changeEditPersonId(id, name, age, job) {
            this.editPersonId = id
            this.name = name
            this.age = age
            this.job = job
        },

        isEdit(id) {
            return this.editPersonId === id;
        },
    },
}
</script>

<style scoped>

</style>
