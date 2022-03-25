<!DOCTYPE html>
<html>
<head>
<title>HTML01</title>
</head>
<body>
    <button onclick="R()"> Red   </button>
    <button onclick="B()"> Blue   </button>
    <button onclick="G()"> Green  </button>
    <br>
    <br>
    <p>The Text</p>
<script>
 
function R(){
    const R = document.getElementsByTagName("p")[0];
    R.style.color = "red";
}
function B(){
    const B = document.getElementsByTagName("p")[0];
    B.style.color = "blue";
}
function G(){
    const G = document.getElementsByTagName("p")[0];
    G.style.color = "green";
}
 


</script>

</body>
</html>