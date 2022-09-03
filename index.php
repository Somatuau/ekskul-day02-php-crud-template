

<?php 

include __DIR__ . './view/layout/header.php';



if(isset($_GET ['menu']) && $_GET['menu'] == 'dashbor'){ 
    include __DIR__ . './view/dashbor.php';
}

elseif(isset)

else{
    echo "ERROR404! Halaman tidak di temukan......."; 
}
include __DIR__ . './view/layout/footer.php';