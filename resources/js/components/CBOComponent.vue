<template>
    <div class="container">

         <h2 class="display-4">CBOs</h2>

            <div class="table-responsive p-1">
                <table class="table">
                    <thead>
                        <th>#</th>
                        <th>CBO Name</th>
                        <th>CBO Email</th>
                        <th>Temp Password</th>
                    </thead>
                    <tbody>
                        <tr v-for="cbo in allcbos" :key="cbo.id">

                            <td>*</td>
                            <td>{{cbo.cbo_name}}</td>
                            <td>{{cbo.email}}</td>
                            <td>{{cbo.phone}}</td>
                            <td></td>
                            <td>
                                <a class="btn btn-primary" href="">view more</a>
                            </td>
                            
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="row">
                <div class="col-md-3"></div>
            </div> 

        <h2 class="display-4">Add CBO</h2>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Name of CBO</label>
                    <input type="text" v-model="cbo_name" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Contact Person</label>
                    <input type="text" v-model="contact_person" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" v-model="email" class="form-control">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" v-model="phone" class="form-control">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">State</label>
                    <select @change="selectedState()" class="form-control" v-model="selected_state" name="" id="">
                        <option v-for="state in states" :key="state.id" >{{state.name}}</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">LGA</label>
                      <select class="form-control" v-model="selected_lga" name="" id="">
                        <option v-for="lga in lgas" :key="lga.id" >{{lga.name}}</option>
                    </select>
                </div>
            </div>
        </div>

       <div class="row">
            <div class="col-md-10">
                <div class="form-group">
                    <label for="">Address</label>
                    <input v-model="address" placeholder="Enter address" type="text" class="form-control">
                </div>
            </div>
            
        </div>

   

    

        <div class="d-flex justify-content-center p-3">
            <button @click="create_cbo()" class=" btn btn-lg btn-primary shadow col-md-5">{{loading?'Creating CBO Please wait...':'Create Account'}}</button>
        </div>

                     <div class="d-flex justify-content-center p-3">
            <button @click="import_cbos()" class=" btn btn-lg btn-primary shadow col-md-5">{{importing?'Importing CBOs Please wait.. (this could take a while)':'Import CBOs'}}</button>
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
                importing: false,
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

        import_cbos(){

            
                this.importing = true;

                axios.get('/import_cbos')
               .then((response)=>(
                    this.importing = false,
                    this.$vToastify.success("CBOs records imported successfull, proceed to login CBO with email and phone number as passwords"),
                    console.log(response)
                    //  this.results = response.data
                    
             
             
                ))
                    .catch(function (error) {
                        console.log(error);
                    });
            

        },


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
