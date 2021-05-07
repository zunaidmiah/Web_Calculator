<?php

?>

<script>
    function checkType()
    {
        var operator= document.getElementById("operator").value;
        // window.alert(operator);
        if(operator=='+' || operator=='-' || operator=='*'  || operator=='/' || operator=='%' )
        {
            document.getElementById("showMsg").innerHTML="";
            document.getElementById("operator").style.border="";
            document.getElementById("button").disabled=false;
        }
        else
        {
            document.getElementById("showMsg").innerHTML="Please Enter Only this character(+, -, *, %, /)";
            document.getElementById("operator").style.border="1px solid red";  
            document.getElementById("button").disabled=true;
        }
        
        
    }
    function isShow()
    {
        var status=document.getElementById("check").value;
        if (status==0)
        {
            // window.alert("here");
            document.getElementById("output").style.display="none";
        }
    }
</script>
