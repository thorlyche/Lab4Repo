function validate()
{
  let username = document.getElementById("username").value;
  let password = document.getElementById("password").value;
  let puppies = document.getElementById("puppies").value;
  let kittens = document.getElementById("kittens").value;
  let fish = document.getElementById("fish").value;
  let ship1 = document.getElementById("sevenDay").checked;
  let ship2 = document.getElementById("overNight").checked;
  let ship3 = document.getElementById("threeDay").checked;


  if(!(username.includes("@") && username.includes("."))){
    alert("You must provide a valid email!")
    return false;
  }
  else if ((puppies<0) || (kittens<0) || (fish<0)){
    alert("You cannot input a negative number of animals!")
    return false;
  }
  else if((puppies+kittens+fish)==0){
    alert("You must purchase at least 1 animal to receive a receipt")
    return false;
  }
  else if ((puppies=="")|| (kittens=="")||(fish=="")){
    alert("You must insert a valid number of animals")
    return false;
  }
  else if (password.length<1) {
    alert("You must provide your password!")
    return false;
  }
  else if(ship1+ship2+ship3==0)
  {
    alert("You must choose a shipping method!")
    return false;
  }
  return true;

}
//make a new html of the back page
