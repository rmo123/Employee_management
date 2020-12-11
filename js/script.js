function Dobfunction(){
    var x=document.getElementById("date").value;
    var dob_before=parseInt(x);
    var date=new Date();
    var year=date.getFullYear();
    var age=year-dob_before;
    $('#age').val(age);
  }