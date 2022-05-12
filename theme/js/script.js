Dropzone.autoDiscover = false;
var myDropzone = new Dropzone("#drop", {
    url: "/certificate/backend/uploader.php",
    addRemoveLinks: true,
    autoProcessQueue: false,
    uploadMultiple: false,
    parallelUploads: 25,
    maxFiles: 25,
    dictDefaultMessage: "วางไฟล์ที่นี่",
    dictCancelUpload: "<i class='material-icons'>cancel</i>",
    dictRemoveFile: "<i class='material-icons'>cancel</i>",
});