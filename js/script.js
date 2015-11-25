/* u is url */
/* function by Mr Aelaf Dafla */
var myurl = "nursesAjax.php?";
var currentCity = "";
function sendRequest(u) {
    // Send request to server
    //u a url as a string
    //async is type of request
    var obj = $.ajax({url: u, async: false});
    //Convert the JSON string to object
    var result = $.parseJSON(obj.responseText);
    return result;	//return object
}

function addNurse(){
   /*nurse id*/
    var nurseid = $("#nurseid").val();
    alert(nurseid);
    /*nurse first name*/
    var nursefname = $("#nursefname").val();
    /*nurse second name*/
    var nursesname = $("#nursesname").val();
    /*nurse contact*/
    var nursecontact = $("#nursecontact").val();
    
  
var strUrl = myurl+"cmd=1&nurseid="+nurseid+"&nursefname="+nursefname+"&nursesname="
+nursesname+"&nursecontact="+nursecontact;

prompt("url",strUrl);
var objResult = sendRequest(strUrl);
var errorArea = document.getElementById("error_areap");
document.getElementById("error_areap").innerHTML = '<div class="progress"><div class="indeterminate"></div></div>';
if(objResult.result == 0) {
    document.getElementById("error_areap").innerHTML = '<div class="chip red white-text">'+objResult.message+'<i class="material-icons">close</i></div>';
    return;
}
/*Clearing the input text*/
 $("#nurseid").val('');
 $("#nursefname").val('');
 $("#nursesname").val('');
 $("#nursecontact").val('');

document.getElementById("error_areap").innerHTML = '<div class="chip green white-text">'+objResult.message+'<i class="material-icons">close</i></div>';

// location.reload();
}
