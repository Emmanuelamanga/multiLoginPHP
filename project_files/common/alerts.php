<?php
class alerts{

    function message($type, $message){
        if ($type === 'warning') {
            return '<div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Warning!</strong>'.$message.'
          </div>';
        }
      
    }
}