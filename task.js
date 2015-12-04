/* u is url */
/* function by Mr Aelaf Dafla */
var myurl = "taskAssignment.php?";
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

function assigningTask(){
    alert("clicked");
   /*Task id*/
   var nurseid = $("#nid").val();
   var name = $("#name").val();
    var taskid = $("#taskid").val();
    alert(taskid);
    /*task name*/
    var taskname = $("#taskname").val();
    /*task description*/
    var taskdesc = $("#taskdesc").val();
    /*task start date*/
    var sdate = $("#sdate").val();
    /*task end date*/
    var edate = $("#edate").val();
    
  
var strUrl = myurl+"cmd=1&nid="+nurseid+"&name="+name+"&taskid="+taskid+"&taskname="+taskname+"&taskdesc="
+taskdesc+"&sdate="+sdate+"&edate="+edate;

prompt("url",strUrl);
var objResult = sendRequest(strUrl);
var errorArea = document.getElementById("error_areap");
document.getElementById("error_areap").innerHTML = '<div class="progress"><div class="indeterminate"></div></div>';
if(objResult.result == 0) {
    document.getElementById("error_areap").innerHTML = '<div class="chip red white-text">'+objResult.message+'<i class="material-icons">close</i></div>';
    return;
}
/*Clearing the input text*/
 $("#taskid").val('');
 $("#taskname").val('');
 $("#taskdesc").val('');
 $("#sdate").val('');
 $("#edate").val('');
$("#nid").val();
$("#name").val();

document.getElementById("error_areap").innerHTML = '<div class="chip green white-text">'+objResult.message+'<i class="material-icons">close</i></div>';

// location.reload();
}
