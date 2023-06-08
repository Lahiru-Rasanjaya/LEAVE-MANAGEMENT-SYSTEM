*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins',sans-serif;
}
body{
    background-color: #b3d0fc;  
    background: url('back.jpg')no-repeat;
    justify-content: center;
    background-size: cover;
    background-position: center;

}
/*SLIATE logo and image*/
.SLIATE{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 40vh;
    background: url('SLIATE.jpg')no-repeat;
    background-size: cover;
    background-position: center;
}

/*application leave html cord connect

.LEAVE{
    background-color: #0a1547;
    height: 80px;
    color: white;
    text-align: center;
    font-size: 26px;
    padding: 10px;
}
*/
/*textbox*/



.wrapper label{
    width: 150px;
    display: inline-block;
    font-weight: 550;
}
/*frame*/
.wrapper{
    width: 185vh;
    position: relative;
    background: transparent;
    border:2px solid rgba(255,255,255,.5);
    border-radius: 20px;
    backdrop-filter: blur(20px);
    box-shadow: 0 0 30px rgba(0, 0, 0, .5);   
    display: flex;  
     margin: 20px; 
    overflow: hidden; 
}
.wrapper form{
    margin-left: 90%;
    margin-top: -9%;
  
}

.wrapper .textbox{
    margin-left: 80%;
    margin-top: 20%;
    margin-bottom: 20%;
}


/*TEXTBOX align
.wrapper form{
    margin: 80px;
    border: 100px;
    padding-left: 15%;
}*/
/*YOUR DETAISL*/
.topic{
   margin: -2px;
    position: absolute;
    width: 18%;
    font-size: 1.3em;
    color: #ffffff;
    border:2px solid rgba(255, 255, 255, 0.945);
    background-color: #383838;
    
   
}
.wrapper1 label{
    width: 300px;
    display: inline-block;
    font-weight: 550;
}
/*frame 2*/
.wrapper1{
    width: 195vh;
    position: relative;
    background: transparent;
    border:2px solid rgba(255,255,255,.5);
    border-radius: 20px;
    backdrop-filter: blur(20px);
    box-shadow: 0 0 30px rgba(0, 0, 0, .5);   
    display: flex;
    margin: 20px;
    overflow: hidden;
}
.wrapper1 form{
    margin: 80px;
    border: 100px;
    padding-left: 1%;
}
/*DETAILS OF LEAVE REQUESTS*/
.topic1{
   margin: -2px;
    position: absolute;
    width: 29%;
    font-size: 1.3em;
    color: #ffffff;
    border:2px solid rgba(255, 255, 255, 0.945);
    background-color: #383838;
    
   
}


.sliateID{
    height: 45px;
    display: flex;
    position: relative;    
}
.sliateID input{
    height: 100%;
    width: 150px;
    padding-left: 20px;
    padding-right: 20px;
    font-size: 18px;
    border-color: #b8b5b5;
    color: #000000;
    background: #ffffff;
    border-radius: 5px;
    
}
.wrapper .name{
   margin-top: 50%;
}
.input-box{
    height: 45px;
    display: flex;
    position: relative;
}
.wrapper label{
    margin-left: 40%;
}

.input-box input{
    margin-top: -500px;
    margin-left: 100%;
    height: 100%;
    width: 250px;
    padding-left: 20px;
    padding-right: 20px;
    font-size: 18px;
    border-color: #b8b5b5;
    color: #000000;
    background: #ffffff;
    border-radius: 5px;
  
    
}*/

.wrapper .input-box:nth-child(2){
    margin-top: 20px;
}
.wrapper .input-box:nth-child(3){
    margin-top: 20px;
}
.wrapper .input-box:nth-child(4){
    margin-top: 20px;
}
.wrapper .input-box:nth-child(5){
    margin-top: 20px;
}
.wrapper1 .input-box2:nth-child(2){
    margin-top: 20px;
}
.wrapper1 .input-box3:nth-child(3){
    margin-top: 20px;
}
.wrapper1 .input-box4:nth-child(4){
    margin-top: 20px;
}
.wrapper1 .input-box5:nth-child(5){
    margin-top: 20px;
}
.wrapper1 .input-box6:nth-child(6){
    margin-top: 20px;
}
.wrapper1 .input-box7:nth-child(7){
    margin-top: 20px;
}


/*blur EX ID NO*/
.sliateID b{
   position: absolute;
   top: 50%;
   left: 48px;
   pointer-events: none;
   color: #d3d3d3;
   transform: translateY(-50%);
}
.form-contol input:valid ~ b{
    opacity: 0;
}
/*blur EX ID NO*/

.wrapper1 .submit{
    width: 100px;
    padding: 10px;
    border: none;
    background-color: black;
    color: white;
    border-radius: 15px;
    
}
.submit:hover {
    background-color: #04AA6D;
}




/*details of leave requests*/
.input-box1, .input-box2, .input-box3, .input-box4, .input-box5{
    height: 45px;
    display: flex;
    position: relative;
    
}
.input-box1 input{
    height: 100%;
    width: 160px;
    padding-left: 20px;
    padding-right: 20px;
    font-size: 18px;
    border-color: #ffffff;
    color: #000000;
    background: #f3f3f3;
    border-radius: 5px;
    
    
}
/*
.input-box1 b{
    position: absolute;
    top: 50%;
    left: 328px;
    pointer-events: none;
   color: #c4c4c4;
   transform: translateY(-50%);
}
.input-box1 input:valid ~ b{
    opacity: 0;
}
.select1{
    left: 405px;
    margin: -25px;
    position: absolute;
    top: 50%;
    right: 10px;
    height:  50px; 
    width: 90px;
    background-color: rgb(0, 0, 0);
    color: white;
    border-radius: 5px;
}

.nofd1{
    position: absolute;
    left: 500px;
}
.select11{
    left: 600px;
    margin: -25px;
    position: absolute;
    top: 50%;
    right: 10px;
    height:  50px; 
    width: 90px;
    background-color: rgb(0, 0, 0);
    color: white;
    border-radius: 5px;
}
*/

.input-box2 input{
    height: 100%;
    width:  160px;
    padding-left: 20px;
    padding-right: 20px;
    font-size: 18px;
    border-color: #ffffff;
    color: #000000;
    background: #f3f3f3;
    border-radius: 5px;
    
}
.input-box3 input{
    height: 100%;
    width: 200px;
    padding-left: 20px;
    padding-right: 20px;
    font-size: 18px;
    border-color: #ffffff;
    color: #000000;
    background: #f3f3f3;
    border-radius: 5px;
    
}
.input-box4 input{
    height: 100%;
    width: 200px;
    padding-left: 20px;
    padding-right: 20px;
    font-size: 18px;
    border-color: #ffffff;
    color: #000000;
    background: #f3f3f3;
    border-radius: 5px;
    
}
.input-box5 input{
    height: 100%;
    width: 200px;
    padding-left: 20px;
    padding-right: 20px;
    font-size: 18px;
    border-color: #ffffff;
    color: #000000;
    background: #f3f3f3;
    border-radius: 5px;
    
}

.input-box6{
    height: 150px;
    display: flex;
    position: relative;
    
}
.input-box6 input{
    height: 100%;
    width: 500px;
    padding-left: 20px;
    padding-right: 20px;
    font-size: 18px;
    border-color: #ffffff;
    color: #000000;
    background: #f3f3f3;
    border-radius: 5px;
    
}



.input-box7{
    height: 100px;
    display: flex;
    position: relative;
    
}
.input-box7 input{
    height: 100%;
    width: 500px;
    padding-left: 20px;
    padding-right: 20px;
    font-size: 18px;
    border-color: #ffffff;
    color: #000000;
    background: #f3f3f3;
    border-radius: 5px;
    
}

table {
    border-collapse: collapse;
    border-color: #ffffff;
  }

th, td{
    height: 65px;
    text-align: left;
    padding-left: 10px;
    padding-right: 10px;
    font-weight: 500;
   
}
th{
    text-align: center;
    font-weight: 600;
    font-size: 18px;
}

.Lbtn{
    margin-top: 25%;
    margin-left: 100%;
    width: auto;
    height: 60%;
    background-color: #0c0c0c;
    color: white;
    
}
.Lbtn:hover{
    background-color: #04AA6D;
}