const wrapper = document.querySelector('.wrapper');

hide = document.querySelectorAll(".icon-eye1"),
link = document.querySelectorAll(".icon-eye2")


/*eye-hide password*/

    function myfunction(){
        var x = document.getElementById("myInput");
        var y = document.getElementById("hide2");
        var z = document.getElementById("hide1");

        if(x.type === "password"){
            x.type = "text";
            y.style.display = "block";
            z.style.display = "none";
            
        }
        else{
            x.type = "password";
            y.style.display = "none";
            z.style.display = "block";
        
        }
    }

