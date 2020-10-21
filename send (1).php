<?php

        //Variable
        $email= $_REQUEST['email'];

        //Check input field
        if(empty($email) )
        {
            echo "please fill all the fileds";
        }else{
            mail("info@vaibhav-laxmi.co.in","Vaibhav Laxmi MicroBenefit Pvt.Ltd.", $email , "From: $email" );
            // echo "Send SUccesfully";
            echo '<script>window.location="contact.html"</script>';
            
        //   header("Location:./index.html");
                // window.history.log(-1);
            
        }


?>