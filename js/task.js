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
/**
*A function which takes the input from the html file
*
*/
function assigningTask(){
    alert("clicked");
   /*Nurse id*/
   var nurseid = $("#nid").val();
   /*Nurse name*/
   var name = $("#name").val();
   /*Task id*/
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
    
 /* A url to pass variables to the taskAssignment.php*/ 
var strUrl = myurl+"cmd=1&nId="+nurseid+"&name="+name+"&taskId="+taskid+"&taskName="+taskname+"&taskDesc="
+taskdesc+"&sDate="+sdate+"&eDate="+edate;

/*passing the url*/
prompt("url",strUrl);
var objResult = sendRequest(strUrl);


/*Clearing the input text*/
 $("#taskid").val('');
 $("#taskname").val('');
 $("#taskdesc").val('');
 $("#sdate").val('');
 $("#edate").val('');
$("#nid").val();
$("#name").val();

// location.reload();
}
