/*
 const cancelbtn = document.querySelector("#cancel-btn");
 // const wrapper = document.getElementById("#wr");
 const filename = document.querySelector(".file-name");
 //const defaultbtn = document.queryelector("#default-btn");
 const defaultbtn = document.querySelector("#img1");
 const custombtn = document.querySelector("#custom-btn");
 const img = document.querySelector("img");
 let regExp = /[0-9a-zA-Z\^\&\'\@\{\}\[\]\,\$\=\!\-\#\(\)\.\%\+\~\_]+$/;

function ab(){
 
 const file = this.files[0];
 if(file)
 {
   const reader = new FileReader();
   reader.onload=function(){
   const result = reader.result;
   img.src= result;
   document.getElementById("#wr").classList.add("active");
 }
 reader.readAsDataURL(file);
 }
 if(this.value){
   let valueStore =this.value.match(regExp);
   filename.textContent=valueStore;
 }
 
 };
 
*/
