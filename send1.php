<?php

        //Variable
        $name = $_REQUEST['name'];
        $email= $_REQUEST['email'];
        $subject =$_REQUEST['subject'];
        $message = $_REQUEST['message'];

        //Check input field
        if(empty($name)|| empty($email) || empty($subject) ||empty($message))
        {
            echo "please fill all the fileds";
        }else{
            mail("info@vaibhav-laxmi.co.in","Vaibhav Laxmi MicroBenefit Pvt.Ltd.", $message , "From: $name $email $subject" );
            //  echo "Form Data Send Succssfsully";
              echo '<script>window.location="index.html"</script>';
                // window.history.log(-1);
            
        }


?>