<!DOCTYPE html>
<html>
<head>
<title>HTML01</title>
</head>
<body>
    <input type="password"id ="password"> 
    <button onclick="p()">Show password</button>
    <p>The text is :</p> 


<script>
    
    function p(){
        let pass = document.getElementById('password').value;
            document.getElementsByTagName("p")[0].innerHTML = "The text is : "+pass;
           
}
 


</script>

</body>
</html>