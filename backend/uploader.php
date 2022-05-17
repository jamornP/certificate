
<?php 
// echo "<pre>"; 
// print_r($_FILES);
// echo "</pre>";
if(isset($_POST['submit'])){
    $project =$_POST['project'];
    mkdir("../upload/$project");
    foreach($_FILES['file']['tmp_name'] as $key => $value) {
        $ext = end(explode(".",$_FILES['file']['name'][$key]));
        if($ext=='pdf'){
            $id = (explode(".",end(explode("-",$_FILES['file']['name'][$key]))))[0];
            $new_name = $id."-".uniqid().".".$ext;
            $file_path = "../upload/".$project."/".$new_name;
            move_uploaded_file($_FILES['file']['tmp_name'][$key],$file_path);
        }
        
        // echo "<pre>"; 
        // print_r($file_path);
        // echo "</pre>";
    }
}




?>