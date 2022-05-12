<?php require $_SERVER['DOCUMENT_ROOT']."/certificate/vendor/claviska/simpleimage/src/claviska/SimpleImage.php" ?>

<?php 
if($_FILE['file']['tmp_name']){
    $ext = end(explode(".",$_FILE['file']['name']));
    $filename = uniqid().".".$ext;
    $file_path = "/certificate/upload/".$filename;
    try {
        // Create a new SimpleImage object
        $image = new \claviska\SimpleImage();
        
        // Magic! ✨
        $image
            ->fromFile($_FILE['file']['tmp_name'])                     // load image.jpg
            ->autoOrient()                              // adjust orientation based on exif data
            // ->resize(320, 200)                          // resize to 320x200 pixels
            // ->flip('x')                                 // flip horizontally
            // ->colorize('DarkBlue')                      // tint dark blue
            // ->border('black', 10)                       // add a 10 pixel black border
            // ->overlay('watermark.png', 'bottom right')  // add a watermark image
            ->toFile($_SERVER['DOCUMENT_ROOT'].$file_path);     // convert to PNG and save a copy to new-image.png
            // ->toScreen();                               // output to the screen
        
        // And much more! 💪
    } catch(Exception $err) {
        // Handle errors
        echo $err->getMessage();
    }
}


?>