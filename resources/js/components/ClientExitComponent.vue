<template>
    <div class="container">

        <h2 class="display-4">Exit Questionaire</h2>

        

                <div class="form-group">
                    <label for="">{{questions[0].question}}</label>  
                    <p @click="access_questions()"><input  type="radio" value="yes" v-model="answers[0]"  id="">  Yes </p>
                    <p><input  type="radio" value="no" v-model="answers[0]" id="">  No </p>
                </div>

        <div v-if="choose" class="choose">
                    <div class="row">
                    <div class="col-md-4">
                        <label for="">{{questions[1].question}}</label>
                            <input type="text" v-model="answers[1]" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label for="">{{questions[2].question}}</label>
                             <input type="text" v-model="answers[2]" class="form-control">
                    </div>
                    <div class="col-md-4">
                        <label for="">{{questions[3].question}}</label>
                            <select class="form-control" v-model="answers[3]" id="">
                                    <option selected="selected">Select Category</option>
                                    <option value="Male 18-25">Male 18-25</option>
                                    <option value="Male 26-45">Male 26-45</option>
                                    <option value="Male 45 and Above">Male 45 and Above</option>
                                    <option value="Female not Pregnant">Female not Pregnant</option>
                                    <option value="Female Pregnant">Female Pregnant</option>
                                    <option value="Female with under 5 child/">Female with under 5 child/children</option>
                                    <option value="Female with 6-17 years child/children">Female with 6-17 years child/children</option>
                                    <option value="Female 18-25">Female 18-25</option>
                                    <option value="Female 26-45">Female 26-45</option>
                                    <option value="Female 45 and Above">Female 45 and Above</option>  
                            </select>
                             
                    </div>
                    <div class="col-md-4">
                        <label for="">{{questions[4].question}}</label>
                             <input type="text" v-model="answers[4]" class="form-control">
                    </div>

                    <div class="col-md-4">
                        <label for="">{{questions[5].question}}</label>
                             <input type="text" v-model="answers[5]" class="form-control">
                    </div>

                    <div class="col-md-4">
                        <label for="">{{questions[6].question}}</label>
                             <input type="text" v-model="answers[6]" class="form-control">
                    </div>

                    <div class="col-md-6">
                        <label for="">{{questions[7].question}}</label>
                           
                             <select @change="showOccupation()" v-model="answers[7]" class="form-control " >
                                <option selected="selected">Select Category</option>
                                <option value="Government/Civil Servant">Government/Civil Servant</option>
                                <option value="Professional Worker">Professional Worker</option>
                                <option value="Self-Employed Trader">Self-Employed Trader</option>
                                <option value="Business Man/Woman">Business Man/Woman</option>
                                <option value="Farmer/Agric Work">Farmer/Agric Worker</option>
                                <option value="Artisan">Artisan</option>
                                <option value="Religious Leader/Missionary">Religious Leader/Missionary</option>
                                <option value="Youth Corp Member">Youth Corp Member</option>
                                <option value="Student">Student</option>
                                <option value="others">Other (Specify...)</option>  
                             </select>
                    </div>

                    <div  class="col-md-6">
                        <div v-if="other_occupation" class="c">
                            <label for="">Others Occupation</label>
                            <input type="text" v-model="answers[7]" class="form-control">
                        </div>

                    </div>

                    <div class="col-md-6">
                         <label for="">{{questions[8].question}}</label>
                        <select @change="showEducation()" v-model="answers[8]" class="form-control select2" style="width: 100%;">
                            <option selected="selected">Select Category</option>
                            <option value="No Formal Education">No Formal Education</option>
                            <option value="Primary Education (Uncompleted)">Primary Education (Uncompleted)</option>
                            <option value="Primary Education (Completed)">Primary Education (Completed)</option>
                            <option value="Primary Education (Uncompleted)">Primary Education (Uncompleted)</option>
                            <option value="Primary Education (Completed)">Primary Education (Completed)</option>
                            <option value="Vocational School">Vocational School</option>
                            <option value="University/Polytechnic Uncompleted">University/Polytechnic Uncompleted</option>
                            <option value="University/Polytechnic Completed">University/Polytechnic Completed</option>
                            <option value="Post Graduate Degree">Post Graduate Degree</option>
                            <option value="others">Other (Specify...)</option>                   
                        </select>
                    </div>

                    <div class="col-md-6">
                        <div v-if="other_education" class="c">
                            <label for="">Others Education</label>
                            <input type="text" v-model="answers[8]" class="form-control">
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="">
                            <label for="">{{questions[9].question}}</label>
                            <select @change="showServiceCameFor()" v-model="answers[9]"  class="form-control">
                                <option value="Maternal and Newborn Care">Maternal and Newborn Care</option>
                                <option value="Antenatal Care">Antenatal Care</option>
                                <option value="Malaria Services">Malaria Services</option>
                                <option value="Don't Know">Don't Know</option>
                                <option value="others">Other (Specify)</option>
                            </select>
                        </div>
                        <div class="">
                        <div v-if="other_service_came_for" class="c">
                            <label for="">Others Service</label>
                            <input type="text" v-model="answers[9]" class="form-control">
                        </div>
                        </div>
                        
                    </div>
                    <div class="col-md-4">
                        <div class="">
                            <label for="">{{questions[10].question}}</label>
                            <select @change="showServiceReceived()" v-model="answers[10]"  class="form-control">
                                <option value="Maternal and Newborn Care">Maternal and Newborn Care</option>
                                <option value="Antenatal Care">Antenatal Care</option>
                                <option value="Malaria Services">Malaria Services</option>
                                <option value="Don't Know">Don't Know</option>
                                <option value="others">Other (Specify)</option>
                            </select>
                        </div>
                        <div class="">
                        <div v-if="other_service_received" class="c">
                            <label for="">Others Service</label>
                            <input type="text" v-model="answers[10]" class="form-control">
                        </div>
                        </div>
                        
                    </div>
                    <div class="col-md-4">
                        <div class="">
                            <label for="">{{questions[11].question}}</label>
                            <select v-model="answers[11]" class="form-control">
                                <option value="Have not been to the facility in the last 3 Months">Have not been to the facility in the last 3 Months</option>
                                <option value="0-2 Times">0-2 Times</option>
                                <option value="0-5 Times">0-5 Times</option>
                                <option value="3-5 Times">3-5 Times</option>
                                <option value="6-10 Times">6-10 Times</option>
                            </select>
                        </div>

                        
                    </div>
                </div>



                <h3 class="text-center">Question Section 2</h3>

                <div class="row">
                    <div class="col-md-10 ">
                        <div class="form-group">
                            <label for="">{{questions[12].question}}</label>  
                            <p  @click="showLLIN()"><input type="radio" name="yyy" value="yes" v-model="answers[12]"  >  Yes </p>
                            <p @click="hideLLIN()"><input  type="radio" name="yyy" value="no" v-model="answers[12]"  selected="selected">  No </p>
                        </div>
                    </div>
                    
                </div>

                <div v-if="show_LLIN" class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{questions[27].question}}</label>
                            <select @change="showWhereLLIN()" v-model="answers[27]" class="form-control">
                                <option value="Facility (During 1st ANC Attendance)">Facility (During 1st ANC Attendance)</option>
                                <option value="Facility (During 9 Months Immunization)">Facility (During 9 Months Immunization)</option>
                                <option value="Mass Campaign (Community)">Mass Campaign (Community)</option>
                                <option value="others">Others</option>
                            </select>
                        </div>
                        <div v-if="showWhere_LLIN" class="">
                            <label for="">Please indicate</label>
                            <input type="text" v-model="answers[27]" class="form-control">
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{questions[13].question}}</label>
                            <select v-model="answers[13]" class="form-control">
                                <option value="Once">Once</option>
                                <option value="Twice">Twice</option>
                                <option value="Three Times">Three Times</option>
                                <option value="More than three times">More than three times</option>
                            </select>
                        </div>

                    </div>


                    
                </div>

                <div v-else class="sd">

                </div>

                <div class="container">
                    <hr>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">{{questions[26].question}}</label>  
                            <p  @click="showSwallowed()"><input type="radio" name="yyy" value="yes" v-model="answers[26]"  >  Yes </p>
                            <p @click="hideSwallowed()"><input  type="radio" name="yyy" value="no" v-model="answers[26]"  selected="selected">  No </p>
                        </div>
                    </div>
                    <div v-if="show_Swallowed" class="col-md-6">
                        <div class="form-group">
                            <label>{{questions[14].question}}</label>
                            <select class="form-control">
                                <option value="After 13 Weeks (Quickening)">After 13 Weeks (Quickening)</option>
                                <option value="Once Every">Once Every</option>
                                <option value="Once Every 2 Months">Once Every 2 Months</option>
                                <option value="Once Every 3 Months">Once Every 3 Months</option>
                             </select>
                        </div>
                        <div v-if="show_Service" class="">
                            <label for="">Please indicate</label>
                            <input type="text" v-model="answers[27]" class="form-control">
                        </div>

                    </div>



                    
                </div>

                <div class="container">
                    <hr>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">{{questions[15].question}}</label>  
                            <p><input @click="swallowedSP" type="radio" value="yes" v-model="answers[15]"  id="">  Yes </p>
                            <p><input @click="swallowedSP" type="radio" value="no" v-model="answers[15]" id="">  No </p>
                        </div>

                    </div>

                    <div  class="col-md-6">
                        <div v-if="swallowed_SP" class="form-group">
                            <label>{{questions[16].question}}</label>
                            <select @change="others_swallowedSP" v-model="answers[16]" class="form-control">
                              <option value="The Health worker did not ask me to swallow the drug in his/her presence">The Health worker did not ask me to swallow the drug in his/her presence</option>
                            <option value="I was asked to swallow the drug in the presence of the health worker but I declined">I was asked to swallow the drug in the presence of the health worker but I declined</option>
                            <option value="others">Others</option>   
                            </select>
                        </div>
                        <div v-if="others_swallowed_SP" class="">
                            <label for="">Others</label>
                            <input type="text" v-model="answers[16]" class="form-control">
                        </div>

                    </div>
                    <div class="container">
                        <hr>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="were you testes">{{questions[17].question}}</label>  
                            <p><input @click="givenseason($event)" type="radio" value="yes" v-model="answers[17]"  id="">  Yes </p>
                            <p><input  @click="givenseason($event)" type="radio" value="no" v-model="answers[17]" id="">  No </p>
                        </div>

                    </div>

                    <div class="col-md-4">
                        <div v-if="given_season" class="form-group">
                            <label>{{questions[18].question}}</label>
                            <select class="form-control">
                            <option value="3-12 Months">3-12 Months</option>
                            <option value="13-24 Months">13-24 Months</option>
                            <option value="25-36 months">25-36 months</option>
                            <option value="37-48 months">37-48 months</option>
                            <option value="49-59 months">49-59 months</option>
                            <option value="60 and Above">60 and Above</option>
                            </select>
                        </div>
                    </div>


                    
                </div>

                <div class="container">
                    <hr>
                </div>

                <div class="row">

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="tested for malaria">{{questions[19].question}}</label>  
                            <p><input @click="testedmalariawhen($event)" type="radio" value="yes" v-model="answers[19]"  id="">  Yes </p>
                            <p><input @click="testedmalariawhen($event)" type="radio" value="not sure" v-model="answers[19]" id="">  No </p>
                            <p><input   type="radio" value="" v-model="answers[19]" id="">  Not sure</p>
                        </div>
                        <div v-if="tested_malaria" class="">
                            <label for="">Why (If no to above)</label>
                            <input type="text" v-model="answers[19]" class="form-control" placeholder="Why (If no to above)">
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div v-if="tested_malaria_when" class="form-group">
                            <label for="if yes when">{{questions[28].question}}</label>
                            <select v-model="answers[28]" class="form-control">
                            <option value="First Antenatal Visit">First Antenatal Visit</option>
                            <option value="When I was Sick">When I was Sick</option>
                            <option value="Don't Know">Don't Know</option>   
                            </select>
                        </div>

                    </div>


                    
                </div>

                <div class="container">
                    <hr>
                </div>

                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Were You given Arthemisinin-based-Combination Therapy">{{questions[20].question}}</label>  
                            <p><input @click="givenarthemisinin($event)" type="radio" value="yes" v-model="answers[20]"  id="">  Yes </p>
                            <p><input @click="givenarthemisinin($event)" type="radio" value="no" v-model="answers[20]" id="">  No </p>
                            <p><input  type="radio" value="not sure" v-model="answers[20]" id="">  Not sure</p>
                        </div>
                        
                        <div v-if="given_arthemisinin" class="">
                            <label for="if no">Specify Drug Received</label>
                            <input type="text" v-model="answers[20]" class="form-control">
                        </div>

                    </div>
                    <div class="col-md-6">

                        <div v-if="givenarthemisinin_yes" class="">
                            <div class="form-group">
                                <label for="">{{questions[21].question}}</label>  
                                <p><input type="radio" value="yes" v-model="answers[21]"  id="">  Yes </p>
                            </div>
                            <label for="">Kindly State Type of tablet, timing accuracy and adherance, 24 or 6 tablets 3 days</label>
                            <input type="text" v-model="answers[21]" class="form-control" placeholder="Please specify">

                            <div class="form-group">
                                <label for="">{{questions[21].question}}</label>  
                                <p><input type="radio" value="yes" v-model="answers[21]"  id="">  No </p>
                            </div>
                            <label for="">If No why?</label>
                            <input type="text" v-model="answers[21]" class="form-control" placeholder="Please specify">
                        </div>


                    </div>


                    
                </div>

                <div class="container">
                    <hr>
                </div>

                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{questions[22].question}}</label>
                            <select v-model="answers[22]" class="form-control">
                                <option value="Very dissatisfied">Very dissatisfied</option>
                                <option value="Somewhat dissatisfied">Somewhat dissatisfied</option>
                                <option value="Neither dissatisfied nor satisfied">Neither dissatisfied nor satisfied</option>
                                <option value="Very Satisfied">Very Satisfied</option>  
                                <option value="Don't Know">Don't Know</option> 
                            </select>
                        </div>


                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{questions[23].question}}</label>
                            <select class="form-control">
                                <option value="">--Select Option--</option>
                                <option value="Poor Facility Worker Attitude">Poor Facility Worker Attitude</option>
                                <option value="Long Waiting Time">Long Waiting Time</option>
                                <option value="Lack of Drugs">Lack of Drugs</option>  
                                <option value="Shortage of Manpower/Personnel">Shortage of Manpower/Personnel</option>
                                <option value="Others">Others</option>                                                    
                            </select>
                        </div>
                        <div class="">
                            <label for="">Others</label>
                            <input type="text" v-model="answers[23]" class="form-control">
                        </div>
                    </div>


                    
                </div>

                <div class="container">
                    <hr>
                </div>

                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{questions[24].question}}</label>
                            <input type="text" v-model="answers[24]" class="form-control">
                        </div>


                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>{{questions[25].question}}</label>
                            <input type="text" v-model="answers[25]" class="form-control">
                        </div>

                    </div>


                    
                </div>


</div>

        <div class="d-flex justify-content-center p-3">
            <button @click="submit_form()" class="btn btn-lg btn-primary shadow col-md-5">{{loading?'Submitting Please wait...':'Submit'}}</button>
        </div>




        
    </div>
</template>

<script>
import axios from 'axios';




    export default {
        data() {
            return {
                questionaire_code: '',
                    questions: [],
                    question_ids: [],
                    answers: [
                        'no',
                        ' ',
                        ' ',
                        ' ',
                        ' ',
                        ' ',
                        ' ',
                        ' ',
                        ' ',
                        ' ',
                        ' ',
                        ' ',
                        'no',
                    ],
                    given_season: false,
                    givenarthemisinin_yes: false,
                    given_arthemisinin: false,
                    tested_malaria: false,
                    tested_malaria_when: false,
                    swallowed_SP: false,
                    others_swallowed_SP: false,
                    show_LLIN: false,
                    showWhere_LLIN: false,
                    show_Service: false,
                    show_Swallowed: false,
                    swallowed_Service: false,
                    other_Swallowed: false,
                    other_occupation: false,
                    other_education: false,
                    other_service_came_for: false,
                    other_service_received: false,
                    choose: false,
                    loading: false,
                    msg: 'Loading...',

            }
        },
        methods: {

            access_questions(){
                alert('clicked yes');

                this.choose = true;

                // if (answers[0] == 'yes') {
              
                // } else {
                    
                // }
            },
            
            givenarthemisinin(){
                if (event.target.value == 'no') {

                    this.given_arthemisinin = true;
                    this.givenarthemisinin_yes = false;
                    
                }if(event.target.value == 'yes'){
                    this.given_arthemisinin = false;
                    this.givenarthemisinin_yes = true;

                }else{

                }
                
            },
            givenseason(){
                if (event.target.value == 'yes') {

                    this.given_season = true;
                    
                }if((event.target.value == 'no')){

                    this.given_season = false;
                }
                
            },
            testedmalaria(){
                if (event.target.value == 'not sure') {

                    this.tested_malaria = true;
                    
                }else{

                    this.tested_malaria = false;
                }
                
            },
            testedmalariawhen(){
                if (event.target.value == 'yes') {

                    this.tested_malaria_when = true;
                    
                }if(event.target.value == 'not sure'){

                
                    this.tested_malaria_when = false;
                }
                
            },
            showLLIN(){
                alert('hello');
                this.show_LLIN = true;
            },
            hideLLIN(){
                alert('hello');
                this.show_LLIN = false;
            },

            showSwallowed(){
                alert('hello');
                this.show_Swallowed = true;
            },
            hideSwallowed(){
                alert('hello');
                this.show_Swallowed = false;
            },

            others_swallowedSP(){
                
                if (this.answers[16]=='others') {
                    this.others_swallowed_SP = true;
                } else {
                    this.others_swallowed_SP = false;
                    
                }
            },

            swallowedSP(event){

                alert('show llin')

                
                if (event.target.value == 'yes') {
                    alert('other swallowed');
                    this.swallowed_SP = true;


                }else{
                    this.swallowed_SP = false; 
                }
                
            }, 

            otherSwallowed(){

                alert('show llin')

                
                if (this.answers[14] == 'others') {
                    alert('other swallowed');
                    this.other_Swallowed = true;

                }else{
                    this.showWhere_LLIN = false; 
                }
                
            }, 

            showWhereLLIN(){

                alert('show llin')

                
                if (this.answers[27] == 'others') {
                    alert('other LLNI');
                    this.showWhere_LLIN = true;

                }else{
                    this.showWhere_LLIN = false; 
                }
                
            }, 

            showOccupation(){
                
                if (this.answers[7] == 'others') {
                    alert('other occupation');
                    this.other_occupation = true;

                }else{
                    this.other_occupation = false; 
                }
                
            },  
            showEducation(){
                
                if (this.answers[8] == 'others') {
                    alert('other education');
                    this.other_education = true;

                }else{
                    this.other_education = false; 
                }
                
            }, 

            showServiceCameFor(){
                alert('other service came for');
                if (this.answers[9] == 'others') {
                    alert('other service received');
                    this.other_service_came_for = true;

                }else{
                    this.other_service_came_for = false; 
                }
                
            }, 

            showServiceReceived(){
                 alert('other service received');
                if (this.answers[10] == 'others') {
                    alert('other service received');
                    this.other_service_received = true;

                }else{
                    this.other_service_received = false; 
                }
                
            }, 
            submit_form(){
                this.loading = true;

                axios.post('/submit_exit_form',{
                    questions: this.questions,
                    answers: this.answers,
                    questionaire_code: this.questionaire_code

                })
               .then((response)=>(
                    this.loading = false,
                    alert("Exit Form Submitted!!"),
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



mkdir node
cd node

curl -O https://nodejs.org/dist/v11.15.0/node-v11.15.0-linux-x64.tar.gz
tar -xvzf node-v11.15.0-linux-x64.tar.gz --strip-components=1

export PATH=$HOME/node/bin:$PATH
echo 'export PATH=$HOME/node/bin:$PATH' >> ~/.bashrc
