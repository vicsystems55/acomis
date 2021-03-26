<template>
    <div class="container">

        <h2 class="display-4">Search for CBO Reports</h2>

        <div class="row">
                                        
        <div class="col-md-10 mx-auto">
                <div class="form-group">
                    
                    <input type="text" class="form-control" placeholder="Enter query...">
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="">State</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="">LGA</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="">CBO</label>
                    <input type="text" class="form-control">
                </div>
            </div>
             <div class="col-md-3">
                <div class="form-group">
                    <label for="">Quarter</label>
                    <input type="text" class="form-control">
                </div>
            </div>

             <div class="col-md-3">
                <div class="form-group">
                    <label for="">Period</label>
                    <input type="text" class="form-control">
                </div>
            </div>
           
        </div>


   

    

        <div class="d-flex justify-content-center p-3">
            <button @click="create_cbo()" class=" btn btn-lg btn-primary shadow col-md-5">SEARCH</button>
        </div>




        
    </div>
</template>

<script>
import axios from 'axios';




    export default {
        data() {
            return {
                states: [],
                lgas: [],
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

            }
        },
        methods: {


            create_cbo(){

            },
            loadStates(){

                axios.get('/getStates')
               .then((response)=>(
                    
                    this.states = response.data,
                    console.log(this.states)
                    //  this.results = response.data
                    
             
             
             ))
                .catch(function (error) {
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
            console.log('Component mounted.')
        },
        
    }
</script>
