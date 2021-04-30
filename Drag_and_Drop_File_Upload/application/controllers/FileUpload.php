<?php
    class FileUpload extends CI_Controller{
        function construct(){
            parent::_construct();
        }
        public function index(){
            $this->load->view('file_upload');
        }
        public function uploadFile(){
           $image = $_FILES;
           $file_name = $image['file']['name'];
           $fileTmp = $_FILES['file']['tmp_name'];
           $extension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
           $new_name = rand().".".$extension;
           if(move_uploaded_file($fileTmp, './uploads/'.$new_name)){
               echo "Successfuly Uploaded";
           }
        }
    } 


?>