        var e = document.getElementById("ClientName");
        var strUser = e.options[e.selectedIndex].value;
        var e1 = document.getElementById("ClientCode");
        var code = e1.options[e1.selectedIndex].value;
        

function T3(){
      console.log("test it function 1");
    strUser = e.options[e.selectedIndex].value;
    code = e1.value;
      
         $.post("./API/modifyClient.php",
    {
      Client: strUser,
      code1: code 
       
    },
    function(data,status){
        $("#table").html(data);
    document.getElementById("table").innerHTML = data;
    console.log("r"+data);
    //alert("Data: " + data + "\nStatus: " + status);
    });
}


