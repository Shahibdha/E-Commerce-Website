
function checkEmail() {
  var email = document.getElementById("emailid").value;
  var at = email.indexOf("@");
  var dt = email.lastIndexOf(".");
  var len = email.length;

  if (at < 2 || dt - at < 2 || len - dt < 2) {
    alert("plz Enter Valid E-mail");
    return false;
  } else {
    return true;
  }
}
function passCheck() {
  let pass = document.getElementById("passid").value;
  let conPass = document.getElementById("conpassid").value;
  if (pass.length > 7) {
    if (pass != conPass) {
      alert("Password Not Matching");
      return false;
    } else {
      return true;
    }
  } else {
    alert("Password length less Plz Enter More Than 8 Characters");
    return false;
  }
}

function chckBoxCheck() {
  let r1 = document.getElementById("chkboxid");
  if (r1.checked ) {
    return true;
  } else {
    alert("Plz Agree With Trems & Conditions");
    return false;
  }
}



function allToReg()
{
  if(checkEmail()&&
  passCheck()&&
  chckBoxCheck())
  {
    alert("Registration Successful");
  } else {
    event.preventDefault();
  }
}

function allToLog()
{
  if(checkEmail())
  {
    return true;
  } else {
    event.preventDefault();
  }
}

