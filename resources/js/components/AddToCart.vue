<template>
    <div>
        <hr><button class="btn btn-warning text-center" v-on:click.prevent="addProductToCart()">
            Adaugă în coș</button>
    </div>
</template>
<script>
    export default {
        data(){
            return {
            }
        },
        props:['productId', 'userId'],
        methods:{
            async addProductToCart(){
                if(this.userId == 0){
                    this.$toastr.e('Pentru a adauga acest produs in cos este nevoie sa va autentificati');
                    return;
                }
                let response = await axios.post('/cart', {
                    'product_id': this.productId
                });
                this.$root.$emit('changeInCart', response.data.items)
            },
             async DecrementFromCart()
            {
                 if(this.userId == 0){
                    this.$toastr.e('Pentru a sterge acest produs din cos este nevoie sa va autentificati');
                    return;
                }
                let response = await axios.post('/decrement', {
                    'product_id': this.productId
                });
                this.$root.$emit('changeInCart', response.data.items)
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
