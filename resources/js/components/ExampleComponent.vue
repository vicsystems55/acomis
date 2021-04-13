<template>
    <div class="container">

        <h2 class="display-4">Add Health Facility</h2>

        <div class="row ">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Active States</label>
                    <select @change="selectedState()"  v-model="selected_state" name="" id="" class="form-control">
                        <option v-for="state in states" :key="state.id" >{{state.name}}</option>
                    </select>
                </div>

            </div>
            <div class="col-md-4">

                <div class="form-group">
                    <label for="">Select LGA</label>
                    <select @change="getWards()" v-model="selected_lga" name="" id="" class="form-control">
                        <option v-for="lga in lgas" :key="lga.id" >{{lga.name}}</option>
                    </select>
                </div>

            </div>
            <div class="col-md-4">
                 <div class="form-group">
                     <label v-if="loading" for="">Loading...</label>
                    <label v-else for="">Wards</label>
                    <select @change="getCBOs()"  v-model="selected_ward" id="" class="form-control">
                        <option value="">Select Ward</option>
                        <option v-for="ward in wards" :key="ward.id" >{{ward.ward_name}}</option>
                    </select>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-6">


                <div class="form-group">
                    <lable>Name of Health Facility</lable>
                        <input v-model="health_facility" type="text" class="form-control">
                </div>

                 <div class="form-group">
                    <lable>CBO</lable>
                        <select @change="getCBOEmail()"  v-model="selected_cbo" id="" class="form-control">
                        <option v-for="cbo in cbos" :key="cbo.id" >{{cbo.CBO}}</option>
                    </select>
                </div>


                <div class="form-group">
                    <lable>CBO Email</lable>
                        <input type="text" v-model="selected_cbo_email" class="form-control" readonly>
                </div>


                


            </div>

            <div class="col-md-6">

                
                <div class="form-group">
                    <lable>SPO Email</lable>
                        <input type="text" v-model="selected_spo"  class="form-control" readonly>
                </div>


                <div class="form-group">
                    <lable>SPO Email</lable>
                        <input type="text" v-model="selected_spo_email"  class="form-control" readonly>
                </div>

                
                <div class="form-group">
                    <lable>Unique Fields</lable>
                        <input v-model= "unique_field" type="text" class="form-control" >
                </div>

            </div>
        </div>

        <div class="c justify-content-center">
            <button @click="createHealthFacility()" class="btn btn-primary shadow col-md-5"><span v-if="creating">CREATING...</span><span v-else>SUBMIT</span></button>
        </div>




        
    </div>
</template>

<script>
import axios from 'axios';
import Axios from 'axios';




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
                selected_ward: '',
                health_facility: '',
                unique_field: '',
                selected_cbo: '',
                selected_spo: '',
                selected_cbo_email: '',
                selected_spo_email: '',
                loading: false,
                msg: 'Loading...',

                creating: false

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
            this.loading = true,
            

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
        createHealthFacility(){

            this.creating = true

            axios.post('/create_health_facility',{

                state: this.selected_state,
                lga: this.selected_lga,
                ward: this.selected_ward,
                health_facility: this.health_facility,
                spo: this.selected_spo,
                spo_email: this.selected_spo_email,
                cbo: this.selected_cbo,
                cbo_email: this.selected_cbo_email,
                unique_field: this.unique_field
                
            })
            .then((response) =>(
                alert("health facility has been created"),
                this.creating = false,
                console.log(response)
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
