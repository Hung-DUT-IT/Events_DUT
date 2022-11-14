<?php
    if(isset($_GET['action']) ) 
    {
        if( $_GET['action'] == 'logout')
        {
            Session::Destroy();
        }
        elseif($_GET['action'] == 'profile')
        {

        }            
    }
        
?>