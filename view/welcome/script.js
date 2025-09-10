console.log("Script Loading");//if the browser is not loading use ctrl+shift+r for hard refresh
let na=document.getElementById("nam");
let nameerr=document.getElementById("ner");
let email=document.getElementById("eml");
let emailerr=document.getElementById("emlerr");
let num=document.getElementById("pnum");
let numerr=document.getElementById("pnumerr");
let password=document.getElementById("pass");
let passworderr=document.getElementById("passerr");
let confirmpassword=document.getElementById("conpass");
let confirmpassworderr=document.getElementById("conpasserr");
let ck=document.getElementById("ck1");
let cker=document.getElementById("ckk");
let candidate=document.getElementById("can");
let hrb=document.getElementById("hr");
let radioerr=document.getElementById("radio");
let button1=document.getElementById("but2");//signup button
let button2=document.getElementById("but1");//signin button
let button3=document.getElementById("but3");//cross button
let button4=document.getElementById("but4");
let button5=document.getElementById("but5");
let ele2=document.getElementById("d10");
let sub=document.getElementById("submit");
let ele1 = document.getElementById("d2");
let logemail=document.getElementById("log");
let logemailerr=document.getElementById("logerr");
let logp=document.getElementById("logpass");
let logper=document.getElementById("logpasserr");
let logvalid;

let typeo;
let id;
let count=0;
let valid;

//adding eventlistener
button1.addEventListener("click",showForm);
button3.addEventListener("click",closeForm);
sub.addEventListener("click", store);
button2.addEventListener("click",showlog);
button4.addEventListener("click",closeForm);
button5.addEventListener("click",validation);

//design regex
let namregex=/^[A-Za-z\s]{3,50}$/;
let emailregex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
let numregex=/^\d{12}$/;

password.addEventListener("input",verify);
    function verify(){
        if(password.value.length<8){
            passworderr.innerHTML="Password is too small";
            console.log("Checking Password");
        }
        else if(password.value.length>10){
            passworderr.innerHTML="Password is too large to memorise";
            console.log("Checking Password");
        }
        else{
            passworderr.innerHTML="";
            console.log("Checking Password");
        }
    }

confirmpassword.addEventListener("input",match);
    function match(){
        if(password.value.trim()===confirmpassword.value.trim()){
            confirmpassworderr.innerHTML="";
            console.log("Checking confirm Password");
        }
        else{
            confirmpassworderr.innerHTML="Password Didn't match";
            console.log("Checking confirm Password");
        }
    }

function showForm(){
    console.log("Signup Button Clicked");
    ele1.style.display= "flex";
    ele2.style.display="none";
    console.log("Display style Applied");
}

function closeForm(){
    console.log("Closed button Clicked");
    ele1.style.display="none";
    ele2.style.display="none";
    console.log("This Button working properly");
}

function showlog(){
    ele2.style.display="flex";
    ele1.style.display="none";
}

function validation(){
    logvalid=true;
    if(logemail.value.trim()===""){
        logemailerr.innerHTML="Please enter valid email.";
        logvalid=false;
    }
    if(logp.value.trim()===""){
        logper.innerHTML="Please enter valid password";
        logvalid=false;
    }

    if(logvalid){

    }
    return logvalid;
}

function store(){
    let r;
    valid=true;
    if(na.value.trim()===""){
        nameerr.innerHTML="This field cannot be empty";
        valid=false;
    }
    else if(!namregex.test(na.value.trim())){
        nameerr.innerHTML="Please enter valid name";
        valid=false;
    }
    else{
        nameerr.innerHTML="";
    }

    if(email.value.trim()===""){
        emailerr.innerHTML="This field cannot be empty";
        valid=false;
    }
    else if(!emailregex.test(email.value.trim())){
        emailerr.innerHTML="Please enter valid email";
        valid=false;
    }
    else{
        emailerr.innerHTML="";
    }

    if(password.value.trim()===""){
        passworderr.innerHTML="This field cannot be empty";
        valid=false;
    }
    if(confirmpassword.value.trim()!==password.value.trim()){
        confirmpassworderr.innerHTML="Miss-match detected";
        valid=false;
    }


    if(num.value.trim()===""){
        numerr.innerHTML="This field cannot be empty";
        valid=false;
    }
    else if(!numregex.test(num.value)){
        numerr.innerHTML="Please enter valid Number";
        valid=false;
    }
    else{
        numerr.innerHTML="";
    }
    if(!ck.checked){
        cker.innerHTML="To register, you need to acknowledge and accept the Terms and Conditions.";
        valid=false;
    }
    else{
        cker.innerHTML="";
    }

    if(!hrb.checked && !candidate.checked){
        valid=false;
        radioerr.innerHTML="Please select one before submitting";

    }
    else{
        if(hrb.checked){
            typeo=hrb.value.trim();
            r="1";
            radioerr.innerHTML="";
        }
        else if(candidate.checked){
            typeo=candidate.value.trim();
            r="2";
            radioerr.innerHTML="";
        }
    }

    if(valid){
        id = count.toString()+r;
        //INSERT INTO `user`(`type`, `name`, `email`, `userid`, `phone_number`, `password`) VALUES ('typo','na','email','id','num','password');
        console.log(id);
    }

    return valid;
    
}