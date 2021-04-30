let parent = document.getElementById('parent');
let text = document.getElementById('text');
let btn_upload = document.getElementById('btn_upload');
let toastMessage = document.getElementById('alert');
let parent_border = '3px dashed rgba(255, 255, 255, 0.60)';
var image, copyImg;

const message = (type, message) => {
    if(type === 'danger'){
        toastMessage.classList.remove('d-none','alert-success');
        toastMessage.classList.add('alert-danger');
        toastMessage.innerHTML = "<strong>Error! </strong>"+message;
    }else if(type === 'success'){
        toastMessage.classList.remove('d-none','alert-danger');
        toastMessage.classList.add('alert-success');
        toastMessage.innerHTML = "<strong>Success! </strong>"+message;
    }else{
        alert("From message method : Invalid arguments");
    }
    $(toastMessage).fadeIn(500);
    $(toastMessage).fadeOut(3000);
}

parent.addEventListener('dragover',(e) => {
    e.preventDefault();
    parent.style.border = '3px dashed rgba(255, 255, 255, 255)';
});

parent.addEventListener('dragleave',() => {
    parent.style.border = parent_border;
})

parent.addEventListener('drop',(e) => {
    e.preventDefault();
    image = e.dataTransfer.files[0];
    const type = image.type;
    if(type == 'image/png' || type == 'image/jpg' || type == 'image/jpeg'){
        copyImg = image;
        text.innerHTML = copyImg.name;
    }else{
        message('danger','Invalid extension');
        parent.style.border = parent_border;
    }
});

btn_upload.addEventListener('click',() => {
    if(copyImg != null){
        ajax_file_upload(copyImg);
        message('success','File uploaded successfuly');
        copyImg = null;
        text.innerHTML = "Drag and Drop Here";
        parent.style.border = parent_border;
    }else{
        message('danger','Please choose a file');
    } 
});

const ajax_file_upload = (file_data) => {
    if(file_data != undefined){
        var formData = new FormData();
        formData.append('file',file_data);
        $.ajax({
            url : "index.php/upload",
            type : "post",
            data : formData,
            contentType : false,
            processData : false,
        })
    }
}