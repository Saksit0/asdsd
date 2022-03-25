<!DOCTYPE html>
<html>
<head>
<title>HTML01</title>
</head>
<body>
    <img onmouseover="i()" onmouseout="u()" src ="https://i.pinimg.com/564x/79/24/60/792460313568791faf74177ef2e0b946.jpg"width="300"height = "200">
    <img onmouseover="i1()" onmouseout="u1()" src ="https://i.pinimg.com/564x/bc/f3/87/bcf38775901563b2b3658562bcc81281.jpg"width="300" height = "200">
    <img onmouseover="i2()" onmouseout="u2()" src ="https://scontent.fbkk23-1.fna.fbcdn.net/v/t1.6435-9/87033789_112981883619433_1440022922835001344_n.jpg?_nc_cat=101&ccb=1-5&_nc_sid=8bfeb9&_nc_eui2=AeG000WfYBrXj-7mYoVbXaRoSwBx_sdLm7NLAHH-x0ubszpoXg7W94onu14olPy_KcNXV8erfQEqa-h1AXyrpX-h&_nc_ohc=q_DkKxjPKM4AX_LLx63&_nc_ht=scontent.fbkk23-1.fna&oh=00_AT-yK9TmGZiQX_AR5Q5Hm8BXz1HX_nAOn7tRyrU4f3nkmQ&oe=62405A03" width="300" height = "200">
<script>
    
  
    function i(){
    document.getElementsByTagName("img")[0].style.boxShadow= "0px 0px 10px ";
}
 
function u(){
    document.getElementsByTagName("img")[0].style.boxShadow= "0px 0px 0px ";

}


function i1(){
    document.getElementsByTagName("img")[1].style.boxShadow= "0px 0px 10px ";
}
 
function u1(){
    document.getElementsByTagName("img")[1].style.boxShadow= "0px 0px 0px ";

}


function i2(){
    document.getElementsByTagName("img")[2].style.boxShadow= "0px 0px 10px ";
}
 
function u2(){
    document.getElementsByTagName("img")[2].style.boxShadow= "0px 0px 0px";

}
</script>

</body>
</html>