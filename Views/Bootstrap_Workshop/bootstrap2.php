<!DOCTYPE html>
<html>

<head>
    <title>bootstrap</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>


    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </symbol>
    </svg>
    <style>
        body {
            background-color: #7C91A3;
            max-width: 2000px
        }

        .container {
            background-color: #E4EAF0;
            max-width: 1200px
        }

        .btn {
            white-space: inherit;
        }

        .heart {
            color: red;

        }
    </style>
</head>

<body>
    <div class="container g-5">

        <h1> Bootstrap 5</h1>
        <h2 class="text-muted">Workshop : Newmusic Blog </h2>
        <hr>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Music News</a></li>
                <li class="breadcrumb-item active" aria-current="page">New Music</li>
            </ol>
        </nav>
       
     
        <h3 class="h3 ms-3">Music news</h3>
        <!-- card1 -->
        <div class=" row row-cols-1 row-cols-md-2 ms-1  g-10" style=max-width:1240px>
            <div class="col">
                <div class="card">
                    <div class="card">
                        <div class="card-img-overlay">
                            <p style="background-color: #1A1919; color: white; width: 105px; border-radius:5px;padding:0px 5px; ">24 hours ago</p>
                        </div>
                    

                    <img src="https://i.ytimg.com/vi/rYmAUMfic30/maxresdefault.jpg" class="card-img-top" alt="...">
                    </div>        

                    <div class="card-body ">
                        <h3 class="card-title">“ทรี แมน ดาวน์” ส่ง “รถฉันบินไม่ได้” MV ตัวสุดท้าย </h3>
                        <p class="card-text text-secondary">19 ก.พ. 2565</p>
                        <p class="card-text">หลังจากปล่อยผลงานอัลบั้มเต็มเมื่อต้นปีที่แล้ว กับอัลบั้มชุดแรก “This City
                            Won’t Be Lonely Anymore” ของวง Three Man Down (ทรีแมนดาวน์) วงดนตรีกลุ่มเพื่อนซี้ กิต-กฤตย์
                            (ร้องนำ), ตูน-พีรพล (กีตาร์), เต-เตธนันท์ (กลอง), โอม-กิจฎิเมธ (เบส) และเส็ง-วิศรุต
                            (ซินธิไซเซอร์) ก็เรียกได้ว่าฮิตแทบทุกเพลง จนกระทั่งเดินทางมาถึงเพลงสุดท้าย “รถฉันบินไม่ได้”
                            เพลงเร็วที่วงเลือกเอามาทำเป็น MV ส่งท้ายอัลบั้มแรกของพวกเขา</p>
                        <button type="button" class="btn btn-primary me-3">Read</button> <i class="bi1 bi-heart"></i><i class="bi11 bi-heart-fill"></i>

                    </div>
                </div>

            </div>
            <div class="col ">
                <div class="card">
                    <div class="card">
                        <div class="card-img-overlay">
                            <p style="background-color: #1A1919; color: white; width: 95px; border-radius:5px;padding:0px 5px; ">8 hours ago</p>
                        </div>
                  

                    <img src="https://i.ytimg.com/vi/IOJV7hOB-9c/maxresdefault.jpg" class="card-img-top" alt="...">
                    </div>        
                    <div class="card-body ">
                        <h3 class="card-title">“หนุ่ม กะลา” ชวน “ส้ม มารี” จอยต่อข้ามปี ส่ง “ลืมได้จริงใช่ไหม”</h3>
                        <p class="card-text text-secondary">19 ก.พ. 2565</p>
                        <p class="card-text">หลังจากทยอยปล่อยเพลงฮิตในอัลบั้มชุดที่10 JOY ครั้งนี้ หนุ่ม กะลา ขอจอยต่อข้ามปี ด้วยการคว้าตัว ส้ม-มารี ศิลปินหญิงยืนหนึ่งในอัลบั้มนี้ มาร่วมฟีทเจอริ่งในซิงเกิลที่ 5 กับเพลง ลืมได้จริงใช่ไหม เรียกได้ว่ามาแรงไม่แพ้เพลงอื่น ๆ เพราะเพียงแค่ปล่อยOfficial Audio ลงยูทูบ ยอดวิวก็พุ่งทะยานเกิน 1 ล้านวิวพร้อมติดเทรนด์ดิ้งบนยูทูบ และยังแรงต่อด้วยการไต่ชาร์ตสตรีมมิ่งในหลายๆแพลตฟอร์มแม้ยังไม่ได้ปล่อยมิวสิควีดิโอ </p>
                        <button type="button" class="btn btn-primary me-3">Read</button> <i class="bi2 bi-heart"></i><i class="bi21 bi-heart-fill"></i>

                    </div>
                </div>
            </div>

        </div>
        <br>
        <br>
        <h3 class="h3 ms-3">New Music</h3>
        <div class="card mb-3 ms-3" style="max-width: 1220px;">
            <div class="row g-0">
                <div class="col-md-4">
                <div class="card">
                        <div class="card-img-overlay ">
                            <p style="background-color: #1A1919; color: white; width: 95px; border-radius:5px;padding:0px 5px; ">8 hours ago</p>
                            </div> 
                    
                    <img src="https://f.ptcdn.info/225/075/000/r1dhn288mmj9S8fEO8Q-o.jpg" class="img-fluid rounded-start" alt="..."style="width: 900px; height: 230px; object-fit:cover;">
                       
                </div>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">กลับไปก่อนได้ไหม - NUM KALA Feat.URBOYTJ「Official MV」</h5>
                        <p class="card-text">เพลง : #กลับไปก่อนได้ไหม เนื้อร้อง/ทำนอง : ณพสิน แสงสุวรรณ Rap Lyrics : URBOYTJ </p>
                        <p class="card-text text-secondary">25 ก.พ. 2565</p>
                        <button type="button" class="btn btn-primary me-3">Read</button><i class="bi3 bi-heart"></i><i class="bi33 bi-heart-fill"></i>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="card mb-3 ms-3" style="max-width: 1220px;">
            <div class="row g-0">
                <div class="col-md-4 ">
                <div class="card">
                        <div class="card-img-overlay ">
                            <p style="background-color: #1A1919; color: white; width: 95px; border-radius:5px;padding:0px 5px; ">8 hours ago</p>
                        </div>
                   
                    <img src="https://listentooldmusic.com/wp-content/uploads/2021/12/%E0%B8%96%E0%B9%89%E0%B8%B2%E0%B9%80%E0%B8%A3%E0%B8%B2%E0%B9%80%E0%B8%88%E0%B8%AD%E0%B8%81%E0%B8%B1%E0%B8%99%E0%B8%AD%E0%B8%B5%E0%B8%81-Until-Then-Tilly-Birds-2.jpg" class="img-fluid rounded-start" alt="..." style="width: 900px; height: 230px; object-fit:cover;">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">ถ้าเราเจอกันอีก (Until Then) - Tilly Birds |Lyric Video|</h5>
                        <p class="card-text">Song : ถ้าเราเจอกันอีก (Until Then) Artist : Tilly Birds</p>
                        <p class="card-text text-secondary">30 ก.พ. 2565</p>
                        <button type="button" class="btn btn-primary me-3">Read</button><i class="bi4 bi-heart"></i><i class="bi44 bi-heart-fill"></i>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <a href="#">
            <p style=" text-align: center;">Load more </p>
        </a>
        <br>
        <h3 class="h3 ms-3">Give your feedbalck</h3>
        <p class="h5 ms-3 text-muted">Comments:</p>
        <Textarea class="ms-3" style="width: 500px; height:150px"></Textarea><br>
        <button class="btn btn-primary ms-3" type="submit" data-bs-toggle="modal" data-bs-target="#myModal">submit</button>

        <div class="modal fade" tapindex="-1" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!--head and close-->
                    <div class="modal-header">
                        <h4>Thank for commenting</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <!--contents-->
                    <div>
                        <img src="http://www1.g-pra.com/webboard/showimage.php?table=ans&No=3812059&data=front&date=2017-05-17" alt="" style=" display: block;margin-left: auto;margin-right: auto;  width: 50%;">
                    </div>
                    <!--close tap-->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>

        </div>

        <div style="position: relative;">
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="position:fixed; right: 10px; top:50px"><svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                <use xlink:href="#check-circle-fill" />
            </svg>
            <strong>Added to favorites</strong> 
          
        </div>
    </div>

        <br>
        <br>
    </div>
    <script>
        $(".alert").hide();
        $(".bi11").hide()
        $(".bi21").hide()
        $(".bi33").hide()
        $(".bi44").hide()
        $(document).ready(function() {
            $(".bi1").click(() => {
                $(".bi1").hide()
                $(".bi11").show()
                $(".bi11").addClass("heart");
                $(".alert").show()
                setTimeout(function() {
                    $(".alert").hide()
                }, 1500);
            })
            $(".bi2").click(() => {
                $(".bi2").hide()
                $(".bi21").show()
                $(".bi21").addClass("heart")
                $(".alert").show()
                setTimeout(function() {
                    $(".alert").hide()
                }, 1500);
            })
            $(".bi3").click(() => {
                $(".bi3").hide()
                $(".bi33").show()
                $(".bi33").addClass("heart");
                $(".alert").show()
                setTimeout(function() {
                    $(".alert").hide()
                }, 1500);
            })
            $(".bi4").click(() => {
                $(".bi4").hide()
                $(".bi44").show()
                $(".bi44").addClass("heart")
                $(".alert").show()
                setTimeout(function() {
                    $(".alert").hide()
                }, 1500);
            })
        })
    </script>
</body>

</html>