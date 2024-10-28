<template>
  <div class="checkoutBox">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
<div class="box">
    <h3 class="box-title">Produsele dumneavoastră din cărucior</h3>
    <div class="plan-selection" v-for="item in items" :key="item.id">
        <div class="plan-data" v-if="item.name">
            <input
                id="question1"
                name="question"
                type="radio"
                class="with-font"
                value="sel"
            />
            <label for="question1">{{ item.name }}</label>
            <p class="plan-text">Cantitate: 
                
                {{ item.quantity }}
               
            </p>
            <span class="plan-price"> Preț: {{ item.sale_price }} </span>
        </div>
    </div>
    <button
        type="submit"
        class="btn btn-primary btn-submit-fix"
        v-on:click.prevent="deleteCartProduct()"
    >
        șterge produsele și revino la cumpărături
    </button>
    <div><br /></div>
</div>
            <div class="box">
              <!--SHIPPING METHOD-->
              <div class="panel panel-info">
                <div class="panel-body">
                  <div class="form-group">
                    <div class="col-md-12">
                      <h4>Adresa de livrare</h4>
                      <br />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12">
                      <strong>Țara:</strong>
                    </div>
                    <div class="col-md-12">
                      <input
                        type="text"
                        class="form-control"
                        v-model="country"
                        name="country"
                        value=""
                      />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12">
                      <strong>Prenume:</strong>
                      <input
                        type="text"
                        name="first_name"
                        v-model="firstName"
                        class="form-control"
                        value=""
                      />
                    </div>
                    <div class="span1"></div>
                    <div class="col-md-12">
                      <strong>Nume:</strong>
                      <input
                        type="text"
                        name="last_name"
                        v-model="lastName"
                        class="form-control"
                        value=""
                      />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12">
                      <strong>Adresa personală:</strong>
                    </div>
                    <div class="col-md-12">
                      <input
                        type="text"
                        name="address"
                        v-model="address"
                        class="form-control"
                        value=""
                      />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12">
                      <strong>Oraș:</strong>
                    </div>
                    <div class="col-md-12">
                      <input
                        type="text"
                        name="city"
                        v-model="city"
                        class="form-control"
                        value=""
                      />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12">
                      <strong>Județ:</strong>
                    </div>
                    <div class="col-md-12">
                      <input
                        type="text"
                        name="state"
                        v-model="state"
                        class="form-control"
                        value=""
                      />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12">
                      <strong>Cod poștal:</strong>
                    </div>
                    <div class="col-md-12">
                      <input
                        type="text"
                        name="zip_code"
                        v-model="zipCode"
                        class="form-control"
                        value=""
                      />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12">
                      <strong>Număr de telefon:</strong>
                    </div>
                    <div class="col-md-12">
                      <input
                        type="text"
                        v-model="phone"
                        name="phone_number"
                        class="form-control"
                        value=""
                      />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-md-12">
                      <strong>Adresa de email:</strong>
                    </div>
                    <div class="col-md-12">
                      <input
                        type="text"
                        v-model="email"
                        name="email_address"
                        class="form-control"
                        value=""
                      />
                    </div>
                  </div>
                </div>
              </div>
              <!--SHIPPING METHOD END-->
              <hr />
            </div>
            <div class="box">
              <div class="panel panel-info">
                <h4>Metoda de livrare:</h4>
                <br />
                <div class="panel-body">
                  <div class="col-md-12">
                    <div>
                      <input type="radio" id="cargus" />
                      <label for="transport">Urgent Cargus</label><br />
                      <input type="radio" id="fan" />
                      <label for="transport">Fan Curier</label><br />
                      <input type="radio" id="sameday" />
                      <label for="transport">Sameday</label><br />
                    </div>
                  </div>
                </div><p>
  Comanda va fi expediată prin serviciul de curierat în decurs de 2 zile lucrătoare, iar transportul este gratuit. În perioada promoțiilor, termenul de expediere poate ajunge până la 10 zile lucrătoare.
</p>
              </div>
            </div>
            
            <div class="box">
              <div class="panel panel-info">
                <h4>Metoda de plată:</h4>
                <br />
                <div class="panel-body">
                  <div class="col-md-12">
                    <div>
                      <input
                        type="radio"
                        id="CASH"
                        name="paymentMethod"
                        value="CASH"
                        v-model="paymentMethod"
                      />
                      <label for="CASH">Ramburs</label><br />
                      <input
                        type="radio"
                        id="CARD"
                        name="paymentMethod"
                        value="CARD"
                        v-model="paymentMethod"
                      />
                      <label for="CARD">Card Bancar</label><br />
                    </div>
                  </div>
                </div>
              </div>
           
            <div class="form-group">
              <!-- Afiseaza butonul corespunzator -->
              <div v-if="paymentMethod === 'CASH'">
                <div class="d-grid gap-2 col-6 mx-auto mt-10">
                  <button type="submit" class="btn btn-primary btn-submit-fix" v-on:click.prevent="getUserAddress()">
                    Plasează comanda
                  </button>
                </div>
              </div>
              <div v-else-if="paymentMethod === 'CARD'">
                <div class="form-group">
                  <div class="col-md-12">
                    <span>Tranzacție securizată prin intermediul Stripe.</span>
                  </div>
                  <div class="col-md-12">
                    <ul class="cards">
                      <li class="visa hand">Visa</li>
                      <li class="mastercard hand">MasterCard</li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                </div>
                <div class="d-grid gap-2 col-6 mx-auto mt-10">
                  <button class="btn btn-primary"  v-on:click.prevent="fetchPaymentUrl()">
                    Plasează comanda
                  </button>
                </div>
              </div>

              <!--CREDIT CART PAYMENT-->

              <!--CREDIT CART PAYMENT END-->
            </div>
           </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
          <div class="widget">
            <h4 class="widget-title">Rezumat Comanda</h4>
            <div
              class="summary-block"
              v-for="summaryItem in items"
              :key="summaryItem.id"
            >
              <div class="summary-content" v-if="summaryItem.name">
                <div class="summary-head">
                  <h5 class="summary-title">
                    {{ summaryItem.name }}
                  </h5>
                </div>
                <div class="summary-price">
                  <p class="summary-text"> {{ summaryItem.total }} Lei</p>
                  <span class="summary-small-text pull-right">
                    Cantitate {{ summaryItem.quantity }} x Pret
                    {{ summaryItem.sale_price }}
                  </span>
                </div>
              </div>
            </div>

            <div class="summary-block">
              <div class="summary-content">
                <div class="summary-head">
                  <h5 class="summary-title">Total</h5>
                </div>
                <div class="summary-price">
                  <p class="summary-text">{{ items.totalAmount }} Lei</p>
                  <span class="summary-small-text pull-right"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      paymentMethod: "CASH",
      items: [],
      firstName: "",
      lastName: "",
      address: "",
      city: "",
      state: "",
      zipCode: "",
      email: "",
      phone: "",
      country: "",
    };
  },
  methods: {

    async getCartItems() {
      let response = await axios.get("/checkout/get/items");
      this.items = response.data;
      console.log(this.items);
    },
    async deleteCartProduct() {
      let response = await axios.post("/delete", {
        product_id: this.items.id,
      });
      setTimeout(() => {
        window.location.href = "/";
      }, 1);
    },
    async getUserAddress(){
    console.log('paymentMethod:', this.paymentMethod);
    if(this.firstName != '' && this.lastName != '' && this.address != '' && this.city != '' && this.state != '' && this.zipCode != '' && this.email != '' && this.phone != '' && this.country!= '')
    {   let response = await axios.post('/process/user/payment', {
             'firstName':this.firstName,
             'lastName':this.lastName,
             'address':this.address,
             'city':this.city,
             'state':this.state,
             'zipCode':this.zipCode,
             'email':this.email,
             'phone':this.phone,
             'country':this.country,
             'amount': this.items.totalAmount,
             'order': this.items,
            'paymentMethod': this.paymentMethod,
         });
         if(response.data.success){
             this.$toastr.s(response.data.success);
         }else{
             this.$toastr.e(response.data.error);
             this.$toastr.e('Detalii de plata incomplete');
         }
         setTimeout(()=> {
             window.location.href= '/';
         }, 2500);
         console.log(response.data);
    }
    else
    {
        this.$toastr.e('Detalii de plata incomplete');
    }
},
async fetchPaymentUrl() {
      console.log('paymentMethod:', this.paymentMethod);
      try {
        let response = await axios.post('/process/user/payment', {
            firstName: this.firstName,
            lastName: this.lastName,
            address: this.address,
            city: this.city,
            state: this.state,
            zipCode: this.zipCode,
            email: this.email,
            phone: this.phone,
            country: this.country,
            amount: this.items.totalAmount,
            order: this.items,
            paymentMethod: this.paymentMethod,
          success_url: `http://127.0.0.1:8000/success`,
        });

    

        window.location.href = response.data.url;
      } catch (error) {
        console.log(error);
      }
    },
  },
  
  created() {
    this.getCartItems();
  },
};
</script>
