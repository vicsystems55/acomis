<template>
    <div class="container">

         <h2 class="display-4">Monthly Reports</h2>

            <div class="table-responsive p-1">
                <table class="table">
                    <thead>
                        <th>#</th>
                        <th>Report No.</th>
                        <th>Date</th>
                        <th>Details</th>
                    </thead>
                    <tbody>
     
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
                    <label for="">Name of SPO</label>
                    <input type="text" v-model="spo_name" class="form-control" >
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">State</label>
                    <input type="text" v-model="spo_state" class="form-control" >
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


    <h4 class="text-center">Compose Report</h4>
        <div id="editorjs" class="edy shadow">

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
          byFile: 'http://localhost:8008/uploadFile', // Your backend file uploader endpoint
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

                spo_name: '',
                spo_state: '',
             
                spo_id: '',
                date: '',
                newfile_name: '',
                outputData: [],
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

        props:['spo_email'],
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




            submit_report(){

                editor.save().then((outputData) => {
                this.outputData = outputData.blocks;
                console.log('Article to send: ',this. outputData)
                }).catch((error) => {
                console.log('Saving failed: ', error)
                });


                
              
                this.loading = true;

   
                // uploadFiles(),

                    axios.post('/submit_cbo_report',{
                        spo_id: this.spo_id,
                        date: this.date,
                        file_upload: this.newfile_name,
                        text_report: payload.data,
                    

                    }).then((response)=>(
                    this.loading = false,
                    
           

                      
                  
                 

                    console.log(response)
                    //  this.results = response.data

                )).catch(function (error) {
                  

                        console.log(error);
                });

            },

            loadSpoData(){

             

                axios.post('/getSingleSPO',{
                    spo_email: this.spo_email
                })
               .then((response)=>(

                
                    
                    
                    console.log(response.data),
                    this.spo_name = response.data.name,
                    this.spo_state = response.data.state,
                
                    this.spo_id = response.data.id,
                    console.log(this.spo_id)

                    
                    
                    //  this.results = response.data
                    
             
             
                )).catch(function (error) {
                        console.log(error);
                });


            },



        },
        mounted() {
            
            this.loadSpoData()
            console.log(this.cbo_email)
        },
        
    }
</script>


