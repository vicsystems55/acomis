<template>
    <div class="container">

         <h2 class="display-4">Monthly Reports</h2>

            <div class="table-responsive p-1">
                <table class="table">
                    <thead>
                        <th>#</th>
                        <th>CBO Name</th>
                        <th>CBO Email</th>
                        <th>Temp Password</th>
                    </thead>
                    <tbody>
     
                    </tbody>
                </table>
            </div>

            <div class="row">
                <div class="col-md-3"></div>
            </div> 

        <h2 class="display-4">Create New</h2>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Name of CBO</label>
                    <input type="text" v-model="cbo_name" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">State</label>
                    <input type="text" v-model="contact_person" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">LGA</label>
                    <input type="text" v-model="email" class="form-control">
                </div>
            </div>

    
        </div>

        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="form-group">
                    <label for="">Upload Report</label>
                    <input type="text" v-model="email" class="form-control">
                </div>
            </div>
        </div>



   

    

        <div class="d-flex justify-content-center p-3">
            <button @click="create_cbo()" class=" btn btn-lg btn-primary shadow col-md-5">{{loading?'Creating CBO Please wait...':'Create Account'}}</button>
        </div>




        
    </div>
</template>

<script>
import axios from 'axios';
import VueToastify from "vue-toastify";
Vue.use(VueToastify);




    export default {
        data() {
            return {
                states: [],
                lgas: [],
                allcbos: [],
                wards:[],
                cbos:[],
                spos:[],
                address: '',
                selected_state: '',
                selected_lga: '',
                selected_cbo: '',
                selected_spo: '',
                selected_cbo_email: '',
                selected_spo_email: '',
                loading: false,
                msg: 'Loading...',
                cbo_name: '',
                contact_person: '',
                email: '',
                phone: '',
                selected_state: '',
                selected_lga: '',
                address: '',

            }
        },
        methods: {


            create_cbo(){
                
              
                this.loading = true;

            axios.post('/create_cbo',{
                cbo_name: this.cbo_name,
                contact_person: this.contact_person,
                email: this.email,
                phone: this.phone,
                state: this.selected_state,
                lga: this.selected_lga,
                address: this.address

            }).then((response)=>(
                    this.loading = false,
                    
                    this.checkEmail(response),

                    this.getAllCBOs(),

                      
                  
                 

                    console.log(response)
                    //  this.results = response.data

                )).catch(function (error) {
                  

                        console.log(error);
                });

            },
            checkEmail(response){
                if (!response.data) {
                    this.$vToastify.error("Email has been taken");
                }else{
                    this.$vToastify.success("CBO Profile created successfully <br> Proceed to login with <b>Email</b> and <b>Phone number</b>");
                }
            },
            loadStates(){

                axios.get('/getStates')
               .then((response)=>(
                    
                    this.states = response.data,
                    console.log(this.states)
                    //  this.results = response.data
                    
             
             
                )).catch(function (error) {
                        console.log(error);
                });


            },
        selectedState(){


                console.log(this.selected_state);

                 axios.post('/getLGAs',{
                     state_name: this.selected_state,
                 })
               .then((response)=>(
                              
                    console.log(this.states),

                     this.lgas = response.data
                    //  this.results = response.data

             ))
                .catch(function (error) {
                    console.log(error);
                });

        },
        getWards(){
            this.loading = true

                console.log(this.selected_lga);

                 axios.post('/getWards',{
                     lga: this.selected_lga,
                 })
               .then((response)=>(
                    
                    this.loading = false,
                
                    console.log(response),

                     this.wards = response.data.wards,

                     this.selected_spo_email = response.data.spo_email.SPO_Email,

                     this.selected_spo = response.data.spo_email.SPO,

                     console.log(this.selected_spo_email)

                    //  console.log(this.wards)
                    //  this.results = response.data
                    
             
             
             ))
                .catch(function (error) {
                    console.log(error);
                });

        },
        getCBOs(){
            this.loading = true

                console.log(this.selected_lga);

                 axios.post('/getCBOs',{
                     lga: this.selected_lga,
                 })
               .then((response)=>(
                    
                    this.loading = false,
                
                    // console.log(this.lgas),

                     this.cbos = response.data,

                     console.log(this.cbos)
                    //  this.results = response.data
                    
             
             
             ))
                .catch(function (error) {
                    console.log(error);
                });

        },
                getAllCBOs(){
            



                 axios.get('/getAllCBOs')
               .then((response)=>(


                     this.allcbos = response.data,

                     console.log(this.allcbos)
                    //  this.results = response.data
                    
             
             
             ))
                .catch(function (error) {
                    console.log(error);
                });

        },
        getCBOEmail(){
            this.loading = true

                console.log(this.selected_cbo);
                console.log('we');

                 axios.post('/getCBOEmail',{
                     cbo: this.selected_cbo,
                 })
               .then((response)=>(
                    
                    this.loading = false,
                
                    // console.log(this.lgas),

                     this.selected_cbo_email = response.data[1].CBO_Email,

                     console.log(response.data[1])
                    //  this.results = response.data
                    
             
             
             ))
                .catch(function (error) {
                    console.log(error);
                });

        },
        },
        mounted() {
            
            this.loadStates()
            this.getAllCBOs()
            console.log('Component mounted.')
        },
        
    }
</script>
