import { createStore } from 'vuex'
import Person from './modules/person'

export default new createStore({
    modules: {
        Person
    }
})

