function validate()
      {
        var pss=document.getElementById("pass");
        var em=document.getElementById("mail");
        var ptr=/[A-Z]/;
        var ptr2=/\d{2}/;
        if(pss.value.trim()=='')
        {
          alert("You have not Entered Password");
          pss.style.border="2px solid red";
          return false;
        }
        else if(em.value.trim()=='')
        {
          alert("You have not Entered Email");
          em.style.border="2px solid red";
          return false;
        }
        else if(!em.value.match(ptr))
        {
          em.style.border="2px solid red";
          document.getElementById("usr").style.visibility="visible";
          return false;
        }
        else if(!pss.value.match(ptr2))
        {
          pss.style.border="2px solid red";
          document.getElementById("visi").style.visibility="visible";
          return false;
        }
        else{
          return true;
        }
      }
      function reset1()
      { 
        window.location="login.html";
      }