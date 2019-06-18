export default {
    state: {
        alcohol: undefined,
        alcohols: []
    },
    mutations: {
        setAlcohol (state, alcohol) {
            state.alcohol = alcohol
        },
        setAlcohols (state, alcohols) {
            state.alcohols = alcohols
        }
    },
    actions: {
        loadAlcohols (context) {
            axios.get('/alcohols').then(res => {
                context.commit('setAlcohols', res.data)
            })
        },
        sendToRobot ({state}) {
            return axios.post('/order/post', {
                alcohol: state.alcohol,
                soft: undefined
            })
        }
    },
    getters: {
        alcohol: state => {
            return state.alcohol
        },
        alcohols: state => {
            return state.alcohols
        }
    }
}