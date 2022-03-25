<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JQuery Tutorials</title>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sDha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>
<body>

    <p id="loading">กำลังโหลดข้อมูล...</p>
    <p></p>

    <script>
        $.ajax({
            url: "http://localhost/camp/public/Home/get_data_ajax",
            method: "POST",
            dataType: "JSON",
            success: function(response) {
                $("#loading").remove();
                $("p").html(`เมนูที่ ${response[0]["food_id"]} : ${response[0]["food_name"]}`);
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            $("button").click(() => {
                const COLOR = $("a").css("color");
                $("p").html(`color is ${COLOR}`).css("color", COLOR);
            });
        });
    </script>
    
    
</body>
</html>