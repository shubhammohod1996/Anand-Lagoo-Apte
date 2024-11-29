function emailfloorplan(){
    var para ={
        fullname:document.getElementById("fullname").value,
        mobile:document.getElementById("mobile").value,
        email:document.getElementById("email").value,
        configuration:document.getElementById("configuration").value,
    }
    emailjs.send("service_gi3gbzp","template_5v2c7pp",para).then(function (res){
        window.location.href = "welcome.html"; 
       // YAHA pr brousher downlod hona chahiye pdf mi uski 

    })
}

function enquireemail(){
    var para ={
        fullname:document.getElementById("fullname").value,
        mobile:document.getElementById("mobile").value,
        email:document.getElementById("email").value,
        configuration:document.getElementById("configuration").value,
    }
    emailjs.send("service_gi3gbzp","template_5v2c7pp",para).then(function (res){
        // alert("Email has been Successfully Send !!!" + res.status);
        window.location.href = "welcome.html"; 
    })
}
