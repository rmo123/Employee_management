function Dobfunction(){
    var x=document.getElementById("date").value;
    var dob_before=parseInt(x);
    var date=new Date();
    var year=date.getFullYear();
    var age=year-dob_before;
    $('#age').val(age);
  }
  function myFunction() {
    var x = document.getElementById("myCheck").checked;
    document.getElementById("demo").innerHTML = x;
  }
function onclick(){
    var valid=false;
    if(document.getElementById("cricket").checked){
        var valid=true;
    }
    else if(document.getElementById("football").checked){
        var valid=true;
    }
    else if(document.getElementById("fighter").checked){
        var valid=true;
    }
    else if(document.getElementById("others").checked){
        var valid=true;
    }
    if(valid)
    {
        alert("ff");
    }
    else
    {
        
        alert("please select hobbiesd");
        return false;
    }

}