<template>
<div id="screen3">
    <div class="d-flex align-items-center justify-content-center">
        <div class="text-center">
            <h1>GRAND BARBECUE</h1>
            <h2>ANNUEL</h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="soft col mb-4" v-for="soft in softs" :key="soft.id">
                <button class="btn btn-light shadow-sm" @click.prevent="goToThankYou">{{ soft.name }}</button>
            </div>
        </div>
    </div>
</div>
</template>
<script>
export default {
    data() {
        return {
            softs: [{"id":1,"name":"Coca-Cola"},{"id":2,"name":"Eau Plate"},{"id":3,"name":"Jus d'Orange"},{"id":4,"name":"Jus de Pomme"},{"id":5,"name":"Jus d'Ananas"},{"id":6,"name":"Eau Gazeuze"},{"id":7,"name":"Red Bull"},{"id":8,"name":"Orangina"}]
        }
    },
    methods: {
        goToThankYou() {
            this.$store.dispatch('sendToRobot').then(res => {
                console.log('go to thank-you')
            }, err => {
                console.debug(err)
            })
        }
    }
}
</script>
<style lang="scss">
#screen3 {
    h1 {
        color: #6c5aa7;
        font-weight: 800;
        font-family: 'Roboto Condensed', 'Roboto', sans-serif;
    }

    h2 {
        letter-spacing: 0.3rem;
    }
    .soft {
        max-width: 150px;
        height: 120px;
    }

    .btn-light {
        height: 120px;
        width: 120px;
        color: #6c5aa7;
        font-weight: 600;
    }
}
</style>
