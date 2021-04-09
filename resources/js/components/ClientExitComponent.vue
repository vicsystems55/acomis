<template>
    <div class="container">

        <h2 class="display-4">Exit Questionaire</h2>

        

                <div class="form-group">
                    <label for="">{{questions[0].question}}</label>  
                    <p><input type="radio" name="" id="">  Yes </p>
                    <p><input type="radio" name="" id="">  No </p>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <label for="">{{}}</label>
                            <input type="text" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="">{{}}</label>
                            <input type="text" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="">{{}}</label>
                            <input type="text" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="">{{}}</label>
                            <input type="text" class="form-control">
                    </div>
                </div>

                


        



                            <!-- <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Active States</label>
                                        <select @change="selectedState()"  v-model="selected_state" name="" id="" class="form-control">
                                            <option v-for="state in states" :key="state.id" >{{state.name}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Select LGA</label>
                                        <select @change="getWards()" v-model="selected_lga" name="" id="" class="form-control">
                                            <option v-for="lga in lgas" :key="lga.id" >{{lga.name}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Ward Name</label>
                                        <input v-model="ward_name" type="text" class="form-control">
                                    </div>
                                </div>
                            
                            </div> -->


   

    

        <div class="d-flex justify-content-center p-3">
            <button @click="create_ward()" class="btn btn-lg btn-primary shadow col-md-5">{{loading?'Creating Ward':'Submit'}}</button>
        </div>




        
    </div>
</template>

<script>
import axios from 'axios';




    export default {
        data() {
            return {
                states: [],
                questions: [],
                lgas: [],
                wards:[],
                cbos:[],
                spos:[],
                address: '',
                ward_name: '',
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


            create_ward(){
                this.loading = true;

                axios.post('/create_ward',{
                    ward_name: this.ward_name,
                    selected_state: this.selected_state,
                    selected_lga: this.selected_lga

                })
               .then((response)=>(
                    this.loading = false,
                    alert("New Ward Created!!"),
                    console.log(response)
                    //  this.results = response.data
                    
             
             
                ))
                    .catch(function (error) {
                        console.log(error);
                    });


            },
            loadQuestions(){

                axios.get('/getQuestions')
               .then((response)=>(
                    
                    this.questions = response.data,
                    console.log(this.questions)
                    //  this.results = response.data
                    
             
             
             ))
                .catch(function (error) {
                    console.log(error);
                });


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
          

                console.log(this.selected_lga);

                 axios.post('/getWards',{
                     lga: this.selected_lga,
                 })
               .then((response)=>(
                    
                 
                
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
            this.loadQuestions()
            console.log('Component mounted.')
        },

 
        
    }
</script>
