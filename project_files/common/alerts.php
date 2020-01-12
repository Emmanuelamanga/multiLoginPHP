<?php
class alerts{

    function message($type, $message){
        if ($type === 'warning') {
            return '<div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>WARNING!</strong> '.$message.'
          </div>';
        }else if ($type === 'danger') {
           return '<div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>WARNING!</strong> '.$message.'
          </div>';
        } else if ($type === 'info') {
           return '<div class="alert alert-info alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>IMPORTANT!</strong> '.$message.'
          </div>';
        } else if ($type === 'success') {
           return '<div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>IMPORTANT!</strong> '.$message.'
          </div>';
        }
       
    }
}