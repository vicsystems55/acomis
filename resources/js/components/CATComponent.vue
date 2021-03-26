<template>
    <div class="container">

        <h2 class="display-4">Add CAT</h2>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">State</label>
                    <select @change="selectedState()"  v-model="selected_state" name="" id="" class="form-control">
                        <option v-for="state in states" :key="state.id" >{{state.name}}</option>
                    </select>
                </div>

            </div>
            <div class="col-md-4">

                <div class="form-group">
                    <label for="">LGA</label>
                    <select @change="getWards()" v-model="selected_lga" name="" id="" class="form-control">
                        <option v-for="lga in lgas" :key="lga.id" >{{lga.name}}</option>
                    </select>
                </div>

            </div>
            <div class="col-md-4">
                 <div class="form-group">
                     <label v-if="loading" for="">Loading...</label>
                    <label v-else for="">Name of CBO</label>
                    <select @change="getCBOs()"  name="" id="" class="form-control">
                        <option value="">Select Ward</option>
                        <option v-for="ward in wards" :key="ward.id" value="">{{ward.Ward}}</option>
                    </select>
                </div>

            </div>
        </div>


        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Contact Person</label>
                    <select @change="selectedState()"  v-model="selected_state" name="" id="" class="form-control">
                        <option v-for="state in states" :key="state.id" >{{state.name}}</option>
                    </select>
                </div>

            </div>
            <div class="col-md-4">

                <div class="form-group">
                    <label for="">Email</label>
                    <select @change="getWards()" v-model="selected_lga" name="" id="" class="form-control">
                        <option v-for="lga in lgas" :key="lga.id" >{{lga.name}}</option>
                    </select>
                </div>

            </div>
            <div class="col-md-4">
                 <div class="form-group">
                     <label v-if="loading" for="">Loading...</label>
                    <label v-else for="">Phone</label>
                    <select @change="getCBOs()"  name="" id="" class="form-control">
                        <option value="">Select Ward</option>
                        <option v-for="ward in wards" :key="ward.id" value="">{{ward.Ward}}</option>
                    </select>
                </div>

            </div>
        </div>


           <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="">Physical Address</label>
                    <select @change="selectedState()"  v-model="selected_state" name="" id="" class="form-control">
                        <option v-for="state in states" :key="state.id" >{{state.name}}</option>
                    </select>
                </div>

            </div>
            <div class="col-md-6">

                <div class="form-group">
                    <label for="">Date of engagement on project</label>
                    <select @change="getWards()" v-model="selected_lga" name="" id="" class="form-control">
                        <option v-for="lga in lgas" :key="lga.id" >{{lga.name}}</option>
                    </select>
                </div>

            </div>
            <div class="col-md-6">
                 <div class="form-group">
                     <label v-if="loading" for="">Loading...</label>
                    <label v-else for="">Date of Establishment of CAT *</label>
                    <select @change="getCBOs()"  name="" id="" class="form-control">
                        <option value="">Select Ward</option>
                        <option v-for="ward in wards" :key="ward.id" value="">{{ward.Ward}}</option>
                    </select>
                </div>

            </div>
        </div>



        <div class="d-flex justify-content-center">
            <button class="btn btn-primary shadow col-md-5">SUBMIT</button>
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
