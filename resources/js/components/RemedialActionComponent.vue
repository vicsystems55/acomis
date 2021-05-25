<template>
    <div class="container">

        <h2 class="display-4">Remedial Action and Feedback</h2>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Name of CBO</label>
                    <input v-model="cbo_name" type="text" class="form-control" >
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">State</label>
                    <input v-model="cbo_state" type="text" class="form-control" >
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">LGA</label>
                    <input v-model="cbo_lga" type="text" class="form-control" >
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Ward</label>
                    <select v-model="selected_ward" name="" id="" class="form-control">
                        <option value="">--Select Option--</option>
                        <option v-for="ward in wards" :key="ward.Ward" value="ward.">{{ward.Ward}}</option>
                  
                    </select>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Date of Visit</label>
                    <input v-model="date_visit" class="form-control" type="date" >
                </div>
            </div>

            
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Tracker Type</label>
                    <select v-model="tracker_type" name="" id="" class="form-control">
                        <option value="">--Select Option--</option>
                        <option value="Focus Group Discussion">Focus Group Discussion</option>
                        <option value="Client Exit">Client Exit</option>
                    </select>
                </div>
            </div>
           
        </div>

      <h3>Issue Tracker</h3>
      <hr>
        <div class="row">

            <div class="col-md-4">

                 <div class="form-group">
                    <label for="">Key Findings/Identified Issues</label>
                    <select v-model="key_findings" name="" id="" class="form-control">
                        <option value="">--Select--</option>
                        <option value="LLIN Not Available">LLIN Not Available</option>
                        <option value="No Medical Personnel">No Medical Personnel</option>
                        <option value="No Road Network">No Road Network</option>
                        <option value="Poor Logistics">Poor Logistics</option>

                    </select>
                 </div>

            </div>

            <div class="col-md-4">

                 <div class="form-group">
                    <label for="">Root causes</label>
                    <input v-model="root_cause" type="text" class="form-control">
                 </div>

            </div>


            <div class="col-md-4">

                 <div class="form-group">
                    <label for="">Action taken immediately</label>
                    <input v-model="action_taken" type="text" class="form-control">
                 </div>

            </div>

            <div class="col-md-4">

                 <div class="form-group">
                    <label for="">Resolve</label>
                    <input v-model="resolved_status" type="text" class="form-control">
                 </div>

            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Follow up action</label>
                    <input v-model="followup_action" type="text" class="form-control">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Responsibility</label>
                    <input v-model="responsibility" type="text" class="form-control">
                </div>
            </div>

            
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Time-line</label>
                    <input v-model="time_line" type="date" class="form-control">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label class="text-center" for="">Upload Report</label>
                     <VueFileAgent
                        ref="vueFileAgent"
                        :theme="'grid'"
                        :multiple="false"
                        :deletable="true"
                        :meta="true"
                        :accept="'image/*,.zip'"
                        :maxSize="'10MB'"
                        :maxFiles="14"
                        :helpText="'Upload Report'"
                        :errorText="{
                        type: 'Invalid file type. Only images or zip Allowed',
                        size: 'Files should not exceed 10MB in size',
                        }"
                        @select="filesSelected($event)"
                        @beforedelete="onBeforeDelete($event)"
                        @delete="fileDeleted($event)"
                        v-model="fileRecords"
                        @upload="onUpload($event)"
                    ></VueFileAgent>
                    <button class="btn btn-primary btn-block mt-2" :disabled="!fileRecordsForUpload.length" @click="uploadFiles()">
                        Upload {{ fileRecordsForUpload.length }} files
                    </button>
                   
                </div>
            </div>

           

        </div>

        <div class="row">

        </div>

        <div class="col-md-6 mx-auto d-flex justify-content-center">
            <button @click="sumbit_remedial_report()" class="btn btn-primary btn-block">Add</button>
        </div>

        <hr>


        <!-- <div class="row">
            <div class="col-md-2">
                <div class="form-group">
                    <label for="">Name of assessor</label>
                        <input type="text" class="form-control">
                    </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="">Organization</label>
                        <input type="text" class="form-control">
                    </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="">Designation</label>
                        <input type="text" class="form-control">
                    </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="">Sign</label>
                        <input type="text" class="form-control">
                    </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="">Mobile</label>
                        <input type="text" class="form-control">
                    </div>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="">Contact person</label>
                        <input type="text" class="form-control">
                    </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="">Designation</label>
                        <input type="text" class="form-control">
                    </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="">Signature</label>
                        <input type="text" class="form-control">
                    </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="">Mobile</label>
                        <input type="text" class="form-control">
                    </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="">Date</label>
                        <input type="text" class="form-control">
                    </div>
            </div>
        </div>




   

    

        <div class="d-flex justify-content-center p-3">
            <button @click="create_cbo()" class=" btn btn-lg btn-primary shadow col-md-5">SAVE DRAFT</button>
        </div> -->




        
    </div>
</template>



<script>
import axios from 'axios';
import VueFileAgent from 'vue-file-agent';
import VueFileAgentStyles from 'vue-file-agent/dist/vue-file-agent.css';

import VueToastify from "vue-toastify";
Vue.use(VueToastify);

Vue.use(VueFileAgent);






    export default {
        data() {
            return {
                cbo_name:'',
                cbo_state: '',
                cbo_lga: '',
                wards: [],
                selected_ward: '',
                loading: false,
                date: '',
                date_visit: '',
                tracker_type: '',
                key_findings: '',
                root_cause: '',
                action_taken: '',
                resolved_status: '',
                followup_action: '',
                responsibility: '',
                time_line: '',
                attached_signed_copy: '',
                msg: 'Loading...',

                        fileRecords: [],
                        uploadUrl: '/upload_signed_copy',
                        uploadHeaders: { 
                            'X-Test-Header': 'vue-file-agent',
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                         },
                        fileRecordsForUpload: [], // maintain an upload queue

            }
        },

        props: ['cbo_email'],
        methods: {

                onUpload(responses) {
                  
                  console.log(responses);

                  this.attached_signed_copy = responses[0].data;

                //   console.log(responses[0].data);
                },


                  uploadFiles: function () {
                        // Using the default uploader. You may use another uploader instead.
                        this.$refs.vueFileAgent.upload(this.uploadUrl, this.uploadHeaders, this.fileRecordsForUpload);
                        this.fileRecordsForUpload = [];



                        console.log(this.fileRecordsForUpload);
                    },
                    deleteUploadedFile: function (fileRecord) {
                        // Using the default uploader. You may use another uploader instead.
                        this.$refs.vueFileAgent.deleteUpload(this.uploadUrl, this.uploadHeaders, fileRecord);
                    },
                    filesSelected: function (fileRecordsNewlySelected) {
                        var validFileRecords = fileRecordsNewlySelected.filter((fileRecord) => !fileRecord.error);
                        this.fileRecordsForUpload = this.fileRecordsForUpload.concat(validFileRecords);
                    },
                    onBeforeDelete: function (fileRecord) {
                        var i = this.fileRecordsForUpload.indexOf(fileRecord);
                        if (i !== -1) {
                        // queued file, not yet uploaded. Just remove from the arrays
                        this.fileRecordsForUpload.splice(i, 1);
                        var k = this.fileRecords.indexOf(fileRecord);
                        if (k !== -1) this.fileRecords.splice(k, 1);
                        } else {
                        if (confirm('Are you sure you want to delete?')) {
                            this.$refs.vueFileAgent.deleteFileRecord(fileRecord); // will trigger 'delete' event
                        }
                        }
                    },
                    fileDeleted: function (fileRecord) {
                        var i = this.fileRecordsForUpload.indexOf(fileRecord);
                        if (i !== -1) {
                        this.fileRecordsForUpload.splice(i, 1);
                        } else {
                        this.deleteUploadedFile(fileRecord);
                        }
                    },
            sumbit_remedial_report(){

                this.loading = true

       

                    axios.post('/sumbit_remedial_report',{
                        cbo_id:  this.cbo_id,
                        cbo_state: this.cbo_state,
                        cbo_lga: this.cbo_lga,
                        ward: this.selected_ward,
                        cbo_name: this.cbo_name,
                        tracker_type: this.tracker_type,
                        key_findings: this.key_findings,
                        root_cause: this.root_cause,
                        action_taken: this.action_taken,
                        resolved_status: this.resolved_status,
                        followup_action: this.followup_action,
                        responsibility: this.responsibility,
                        time_line: this.time_line,
                        date: this.date_visit,
                        attached_signed_copy: this.attached_signed_copy,
                    })
                .then((response)=>(
                        
                        this.loading = false,

                          this.$vToastify.success("Report Submitted"),
                    
                        // console.log(this.lgas),

                        this.cbos = response.data,

                        console.log(this.cbos)
                        //  this.results = response.data
                        
                )).catch(function (error) {
                        console.log(error);
                });


            },

            loadCboData(email){

            

                axios.post('/getSingleCBO2',{
                    cbo_email: this.cbo_email
                })
               .then((response)=>(
                    
                    console.log(response.data),
                    //  this.cbo_reports = response.data.reports,
                    console.log(response.data.cbo_details.id),
                    this.cbo_name = response.data.cbo_details.cbo_name,
                    this.cbo_state = response.data.cbo_details.state,
                    this.cbo_lga = response.data.cbo_details.lga,
                    this.cbo_id = response.data.cbo_details.id,

                    this.wards = response.data.wards,

                    console.log(this.wards)

            
                    
                    //  this.results = response.data
                    
             
             
                )).catch(function (error) {
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
            this.loadCboData(this.cbo_email)
            console.log('Component mounted.')
        },
        
    }
</script>
