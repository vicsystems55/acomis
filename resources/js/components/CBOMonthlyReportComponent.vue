<template>
    <div class="container">

         <h2 class="display-4">Monthly Reports</h2>

            <div class="table-responsive p-1">
                <table class="table table-striped">
                    <thead>
                        <th>#</th>
                        <th>Report No.</th>
                        <th>Date</th>
                        <th>Details</th>
                    </thead>
                    <tbody>
                        <tr class="" v-for="cbo_report in cbo_reports" :key="cbo_report.id">

                            <td> # </td>
                            <td>#2233003</td>
                            <td>{{cbo_report.date}}</td>
                            <td>
                                <a class="btn btn-sm shadow btn-secondary" href="/more">view</a>
                            </td>

                        </tr>
     
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
                    <input type="text" v-model="cbo_name" class="form-control" >
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">State</label>
                    <input type="text" v-model="cbo_state" class="form-control" >
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">LGA</label>
                    <input type="text" v-model="cbo_lga" class="form-control" >
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Date</label>
                    <input type="date" v-model="date" class="form-control">
                </div>
            </div>

    
        </div>

        <div class="row">
            <div class="col-md-6 mx-auto">
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


   
        <div id="editorjs" class="edy shadow pt-5">
                 <div class="d-flex justify-content-center p-3">
            <button @click="save_report()" class=" btn btn-lg btn-primary shadow col-md-5">{{loading?'Saving Report':'Save Report'}}</button>
        </div>

            <h4 class="ml-3">Create Report</h4>


        </div>



   
   
    

        <div class="d-flex justify-content-center p-3">
            <button @click="submit_report()" class=" btn btn-lg btn-primary shadow col-md-5">{{loading?'Submitting Report':'Submit Report'}}</button>
        </div>




        
    </div>
</template>

<script>






import EditorJS from '@editorjs/editorjs';
import Header from '@editorjs/header';
import ImageTool from '@editorjs/image';

const editor = new EditorJS({
  /**
   * Id of Element that should contain Editor instance
   */
    tools: {
    
    header: Header,
        image: {
      class: ImageTool,
      config: {
        endpoints: {
          byFile: '/upload_cbo_report', // Your backend file uploader endpoint
          byUrl: 'http://localhost:8008/fetchUrl', // Your endpoint that provides uploading by Url
        }
      }
    }
  },
  
  holder: 'editorjs'
});




import axios from 'axios';
import VueToastify from "vue-toastify";
Vue.use(VueToastify);


import VueFileAgent from 'vue-file-agent';
import VueFileAgentStyles from 'vue-file-agent/dist/vue-file-agent.css';

Vue.use(VueFileAgent);








    export default {
        data() {
            return {

                cbo_name: '',
                cbo_reports: [],
                cbo_state: '',
                cbo_lga: '',
                cbo_id: '',
                date: '',
                newfile_name: '',
                outputData: {},
                loading: false,

                        fileRecords: [],
                        uploadUrl: '/upload_cbo_report',
                        uploadHeaders: { 
                            'X-Test-Header': 'vue-file-agent',
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                         },
                        fileRecordsForUpload: [], // maintain an upload queue
    

            }
        },

        props:['cbo_email'],
        methods: {

                onUpload(responses) {
                  
                  console.log(responses);

                  this.newfile_name = responses[0].data;

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



            save_report(){

                editor.save().then((outputData) => {
                this.outputData = outputData;
                console.log('Article to send: ',this.outputData)
                }).catch((error) => {
                console.log('Saving failed: ', error)
                });


            },

            submit_report(){

          

                
              
                this.loading = true;

   
                // uploadFiles(),

                    axios.post('/submit_cbo_report',{
                        cbo_id: this.cbo_id,
                        date: this.date,
                        file_upload: this.newfile_name,
                        text_report: this.outputData.blocks,
                    

                    }).then((response)=>(
                    this.loading = false,
                    
           

                      this.loadCboData(),

                      this.load_cbo_report(this.cbo_id),
                  
                 

                    console.log(response)
                    //  this.results = response.data

                )).catch(function (error) {
                  

                        console.log(error);
                });

            },





            loadCboData(){

            

                axios.post('/getSingleCBO',{
                    cbo_email: this.cbo_email
                })
               .then((response)=>(
                    
                    console.log(response.data),
                    //  this.cbo_reports = response.data.reports,
                    console.log(response.data.id),
                    this.cbo_name = response.data.cbo_name,
                    this.cbo_state = response.data.state,
                    this.cbo_lga = response.data.lga,
                    this.cbo_id = response.data.id,
                    console.log(this.cbo_id),

                  this.load_cbo_report(this.cbo_id)
                    
                    //  this.results = response.data
                    
             
             
                )).catch(function (error) {
                        console.log(error);
                });


            },

            load_cbo_report(id){
                
                 console.log(id),

                axios.post('/load_cbo_report',{
                    cbo_id: id
                })
               .then((response)=>(
                    
                     console.log(response),
                     this.cbo_reports = response.data
                    // console.log(response.data.id),
                    // this.cbo_name = response.data.cbo_name,
                    // this.cbo_state = response.data.state,
                    // this.cbo_lga = response.data.lga,
                    // this.cbo_id = response.data.id,
                    // console.log(this.cbo_id)

                    
                    
                    //  this.results = response.data
                    
             
             
                )).catch(function (error) {
                        console.log(error);
                });

            },





        },
        mounted() {
            this.loadCboData()
           
            console.log(this.cbo_email)
        },
        
    }
</script>


