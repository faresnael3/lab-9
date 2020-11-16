function check(event)
{
  var email =document.getElementById('email').value;
  let check1 =false;
  let check2 =false;
  for (var i = 0; i<email.length;i++)
  {

    if(email.charAt(i)==="@")
    {
      check1 = true;
    }
    if(email.charAt(i)==="." &&check1 ==true)
    {
      check2 =true;
    }

  }
  if (check2 == false)
  {
    event.preventDefault();
    alert("invalid username");
    return;
  }

    var quant1 = document.getElementById('quantity1').value;
    var quant2 = document.getElementById('quantity2').value;
    var quant3 = document.getElementById('quantity3').value;
    if(quant1 < 0 ||quant2 < 0 || quant3 < 0 || quant1 ==="" || quant2 ===""|| quant3 ==="")
    {
      event.preventDefault();
      alert("Quantity shoud be 0 or a positive number");
      return;
    }
    var pass = document.getElementById('pass').value;
    if(pass === "")
    {
      event.preventDefault();
      alert("You need to insert a password");
      return;
    }
    var choice1 =document.getElementById('free').checked;
    var choice2 =document.getElementById('night').checked;
    var choice3 =document.getElementById('three').checked;
    if(!choice1 && !choice2 && ! choice3)
    {
      event.preventDefault();
      alert("You need to select a shipping option");
      return;
    }

}
function reset()
{
document.getElementById('quantity1').value="";
document.getElementById('quantity2').value="";
document.getElementById('quantity3').value="";
document.getElementById('email').value="";
document.getElementById('pass').value = ""
document.getElementById('free').checked =false;
document.getElementById('night').checked=false;
document.getElementById('three').checked=false;
}
