<?php
    if(isset($_SESSION['message'])):
?>  

    <div class="alert alert-warning alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Success! </strong><?= $_SESSION['message']; ?>
    </div>

<?php
    unset($_SESSION['message']);
    endif;
?>