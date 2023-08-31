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

    function myfunction1(){
        var a = document.getElementById("myInput1");
        var b = document.getElementById("hide22");
        var c = document.getElementById("hide11");

        if(a.type === "password"){
            a.type = "text";
            b.style.display = "block";
            c.style.display = "none";
            
        }
        else{
            a.type = "password";
            b.style.display = "none";
            c.style.display = "block";
        
        }
    }

    function myfunction2(){
        var e = document.getElementById("myInput2");
        var f = document.getElementById("hide222");
        var g = document.getElementById("hide111");

        if(e.type === "password"){
            e.type = "text";
            f.style.display = "block";
            g.style.display = "none";
            
        }
        else{
            e.type = "password";
            f.style.display = "none";
            g.style.display = "block";
        
        }
    }


/*eye-hide password*/