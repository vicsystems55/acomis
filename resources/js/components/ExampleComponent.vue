<template>
    <div class="container">

        <h2 class="display-4">Add Health Facility</h2>

        <div class="row">
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
                    <select @change="getCBOs()"  name="" id="" class="form-control">
                        <option v-for="ward in wards" :key="ward.id" value="">{{ward.Ward}}</option>
                    </select>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-6">


                <div class="form-group">
                    <lable>Name of Health Facility</lable>
                        <input type="text" class="form-control">
                </div>

                 <div class="form-group">
                    <lable>CBO</lable>
                        <select  name="" id="" class="form-control">
                        <option v-for="cbo in cbos" :key="cbo.id" value="">{{cbo.CBO}}</option>
                    </select>
                </div>


            </div>
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
                selected_state: '',
                selected_lga: '',
                selected_cbo: '',
                loading: false,

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
                
                    // console.log(this.lgas),

                     this.wards = response.data,

                     console.log(this.wards)
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
        },
        mounted() {
            this.loadStates()
            console.log('Component mounted.')
        }
    }
</script>
