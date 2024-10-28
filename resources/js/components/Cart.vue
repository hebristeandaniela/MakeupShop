<template>
    <div>
        <li class="nav-item-cart py-10 pt-10"  style="padding-left:20px">
            <a href="/checkout" class="btn btn-warning btn-sm">   
            <i class="lni-cart-full position-relative ">
  <span class="count-badge">{{itemCount}} </span>
</i>
            </a>
        </li>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                itemCount: '',
            }
        },
        mounted() {
            this.$root.$on('changeInCart', (item) => {
                this.itemCount = item;
            })
        },
        methods:{
            async getCartItemsOnPageLoad(){
                let response = await axios.post('/cart');
                this.itemCount =response.data.items
            }
        },
        created(){
            this.getCartItemsOnPageLoad();
        }
    }
</script>
