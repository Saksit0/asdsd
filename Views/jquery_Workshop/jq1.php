<!DOCTYPE html>
<html>

<head>
    <title>HTML01</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
</head>

<body>
    <button id="add">เพิ่มแถว</button>
    <p></p>



    <script>
        let i = 0;

        $(document).ready(function() {
            $("#add").click(() => {
                i = i + 1;
                $('p').append("คนที่" + " " + i + " " + "ชื่อ" + " " + "<input type='text'>" + "นามสกุล" + " " + "<input type='text'>" + "<br>");

            });

        });
    </script>

</body>

</html>