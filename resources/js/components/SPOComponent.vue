<template>
    <div class="container">

         <h2 class="display-4">SPOs</h2>

            <div class="table-responsive p-1">
                <table class="table">
                    <thead>
                        <th>#</th>
                        <th>SPO Name</th>
                        <th>SPO Email</th>
                        <th>Temp Password</th>
                        <th></th>
                    </thead>
                    <tbody>
                        <tr v-for="spo in allspos" :key="spo.id">

                            <td>*</td>
                            <td>{{spo.name}}</td>
                            <td>{{spo.email}}</td>
                            <td>{{spo.phone}}</td>
                   
                            <td>
                                <a class="btn btn-primary" href="">view more</a>
                            </td>
                            
                        </tr>
                    </tbody>
                </table>
            </div>


    

        

    <div class="rw">
               

        <h2 class="display-4">Add SPO</h2>

        <div class="row">

            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Spo Name:</label>
                    <input type="text" v-model="name" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" v-model="email" class="form-control">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Phone</label>
                    <input type="text" v-model="phone" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">State</label>
                    <select class="form-control" v-model="state" name="" id="">
                        <option v-for="state in states" :key="state.id" >{{state.name}}</option>
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
            <button @click="create_spo()" class=" btn btn-lg btn-primary shadow col-md-5">{{loading?'Creating SPO Please wait...':'Create SPO'}}</button>
        </div>


        <div class="d-flex justify-content-center p-3">
            <button @click="import_spos()" class=" btn btn-lg btn-primary shadow col-md-5">{{importing?'Importing SPO Please wait...':'Import SPO'}}</button>
        </div>




        
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
                allspos: [],
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
                name: '',
                email: '',
                phone: '',
                state: '',
                selected_lga: '',
                address: '',

            }
        },
        methods: {

            import_spos(){

            
                this.importing = true;

                axios.get('/import_spos')
               .then((response)=>(
                    this.importing = false,

                  
                    this.$vToastify.success("SPOs records imported successfull, proceed to login SPO with email and phone number as passwords"),
                    console.log(response)
                    //  this.results = response.data
                    
             
             
                ))
                    .catch(function (error) {
                          this.$vToastify.error("An unusual error has occured"),
                    console.log(response),
                        console.log(error);
                    });
            

        },


            create_spo(){
                
              
                this.loading = true;

            axios.post('/create_spo',{
                name: this.name,
           
                email: this.email,
                phone: this.phone,
                state: this.state,
               
                address: this.address

            }).then((response)=>(
                    this.loading = false,
                    
                    this.checkEmail(response),

                    this.getAllSPOs(),

                      
                  
                 

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
                    this.$vToastify.success("SPO Profile created successfully <br> Proceed to login with <b>Email</b> and <b>Phone number</b>");
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
                getAllSPOs(){

                 axios.get('/getAllSPOs')
               .then((response)=>(


                     this.allspos = response.data,

                     console.log(this.allspos)
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
            this.getAllSPOs()
            console.log('Component mounted.')
        },
        
    }
</script>
