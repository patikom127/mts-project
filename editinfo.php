<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>Register</title>
  </head>
  <body>
    <!-- ส่วนของข้อมูล -->
            <br><br>
                <center><h1>ข้อมูลของท่าน</h1></center><br><br>
                <div class="container">
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="inputBirthofDate">ต้องการสมัครเข้าเรียนในระดับชั้น</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>อนุบาล 1</option>
                                <option>อนุบาล 2</option>
                                <option>อนุบาล 3</option>
                                <option>ประถมศึกษาปีที่ 1</option>
                                <option>ประถมศึกษาปีที่ 2</option>
                                <option>ประถมศึกษาปีที่ 3</option>
                                <option>ประถมศึกษาปีที่ 4</option>
                                <option>ประถมศึกษาปีที่ 5</option>
                                <option>ประถมศึกษาปีที่ 6</option>
                                <option>มัธยมศึกษาปีที่ 1</option>
                                <option>มัธยมศึกษาปีที่ 2</option>
                                <option>มัธยมศึกษาปีที่ 3</option>
                                <option>มัธยมศึกษาปีที่ 4 แผนการเรียน วิทย์-คณิต</option>
                                <option>มัธยมศึกษาปีที่ 4 แผนการเรียน ศิลป์คำนวณ</option>
                                <option>มัธยมศึกษาปีที่ 4 แผนการเรียน ศิลป์ภาษาจีน</option>
                                <option>มัธยมศึกษาปีที่ 5 แผนการเรียน วิทย์-คณิต</option>
                                <option>มัธยมศึกษาปีที่ 5 แผนการเรียน ศิลป์คำนวณ</option>
                                <option>มัธยมศึกษาปีที่ 5 แผนการเรียน ศิลป์ภาษาจีน</option>
                                <option>มัธยมศึกษาปีที่ 6 แผนการเรียน วิทย์-คณิต</option>
                                <option>มัธยมศึกษาปีที่ 6 แผนการเรียน ศิลป์คำนวณ</option>
                                <option>มัธยมศึกษาปีที่ 6 แผนการเรียน ศิลป์ภาษาจีน</option>
                            </select>
                        </div>
                    </div>
                    <br>
                <h5>ประวัติส่วนตัว</h5><br>
                <form >
                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <label for="inputFullname">ชื่อ-นามสกุล</label>
                            <input type="text" class="form-control"placeholder="ชื่อ-นามสกุล">
                        </div>
                        <div class="form-group col-md-5">
                            <label for="inputFullname">NAME-LASTNAME</label>
                            <input type="text" class="form-control"placeholder="NAME-LASTNAME">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label for="inputBirthofDate">วัน/เดือน/ปีเกิด</label>
                            <input type="text" class="form-control"placeholder="xx/xx/xxxx">
                        </div>
                        <div class="form-group col-md-1">
                            <label for="inputOld">อายุ</label>
                            <input type="text" class="form-control"placeholder="อายุ (ปี)">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputBirthofDate">สถานที่เกิด</label>
                            <input type="text" class="form-control"placeholder="สถานที่เกิด">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputOld">ส่วนสูง</label>
                            <input type="text" class="form-control"placeholder="ส่วนสูง (ซม.)">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputOld">น้ำหนัก</label>
                            <input type="text" class="form-control"placeholder="น้ำหนัก (กก.)">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label for="inputBirthofDate">สัญชาติ</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>ไทย</option>
                                <option>แอฟริกา</option>
                                <option>สหรัฐอเมริกา</option>
                                <option>ออสเตรเลีย</option>
                                <option>เบลเยียม</option>
                                <option>บราซิล</option>
                                <option>กัมพูชา</option>
                                <option>อังกฤษ</option>
                                <option>จีน</option>
                                <option>ฝรั่งเศส</option>
                                <option>ฟิลิปปินส์</option>
                                <option>สเปน</option>
                                <option>เวียดนาม</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputOld">เชื้อชาติ</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>ไทย</option>
                                <option>...</option>
                                <option>...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputOld">ศาสนา</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>พุทธ</option>
                                <option>คริสต์</option>
                                <option>อิสลาม</option>
                                <option>ฮินดู</option>
                                <option>ซิกข์</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputFullname">บัตรประจำตัวประชาชนเลขที่</label>
                            <input type="text" class="form-control"placeholder="บัตรประจำตัวประชาชนเลขที่">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="inputBirthofDate">ออกให้ที่อำเภอ/เขต</label>
                            <input type="text" class="form-control"placeholder="อำเภอ/เขต">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputOld">จังหวัด</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>กรุงเทพมหานคร</option>
                                <option>กระบี่</option>
                                <option>กาญจนบุรี</option>
                                <option>กาฬสินธุ์</option>
                                <option>กำแพงเพชร</option>
                                <option>ขอนแก่น</option>
                                <option>จันทบุรี</option>
                                <option>ฉะเชิงเทรา</option>
                                <option>ชลบุรี</option>
                                <option>ชัยนาท</option>
                                <option>ชัยภูมิ</option>
                                <option>ชุมพร</option>
                                <option>เชียงราย</option>
                                <option>เชียงใหม่</option>
                                <option>ตรัง</option>
                                <option>ตราด</option>
                                <option>ตาก</option>
                                <option>นครนายก</option>
                                <option>นครปฐม</option>
                                <option>นครพนม</option>
                                <option>นครราชสีมา</option>
                                <option>นครศรีธรรมราช</option>
                                <option>นครสวรรค์</option>
                                <option>นนทบุรี</option>
                                <option>นราธิวาส</option>
                                <option>น่าน</option>
                                <option>บึงกาฬ</option>
                                <option>บุรีรัมย์</option>
                                <option>ปทุมธานี</option>
                                <option>ประจวบคีรีขันธ์</option>
                                <option>ปราจีนบุรี</option>
                                <option>ปัตตานี</option>
                                <option>พระนครศรีอยุธยา</option>
                                <option>พังงา</option>
                                <option>พัทลุง</option>
                                <option>พิจิตร</option>
                                <option>พิษณุโลก</option>
                                <option>เพชรบุรี</option>
                                <option>เพชรบูรณ์</option>
                                <option>แพร่</option>
                                <option>พะเยา</option>
                                <option>ภูเก็ต</option>
                                <option>มหาสารคาม</option>
                                <option>มุกดาหาร</option>
                                <option>แม่ฮ่องสอน</option>
                                <option>ยะลา</option>
                                <option>ยโสธร</option>
                                <option>ร้อยเอ็ด</option>
                                <option>ระนอง</option>
                                <option>ระยอง</option>
                                <option>ราชบุรี</option>
                                <option>ลพบุรี</option>
                                <option>ลำปาง</option>
                                <option>ลำพูน</option>
                                <option>เลย</option>
                                <option>ศรีสะเกษ</option>
                                <option>สกลนคร</option>
                                <option>สงขลา</option>
                                <option>สตูล</option>
                                <option>สมุทรปราการ</option>
                                <option>สมุทรสงคราม</option>
                                <option>สมุทรสาคร</option>
                                <option>สระแก้ว</option>
                                <option>สระบุรี</option>
                                <option>สิงห์บุรี</option>
                                <option>สุโขทัย</option>
                                <option>สุพรรณบุรี</option>
                                <option>สุราษฎร์ธานี</option>
                                <option>สุรินทร์</option>
                                <option>หนองคาย</option>
                                <option>หนองบัวลำภู</option>
                                <option>อ่างทอง</option>
                                <option>อุดรธาณี</option>
                                <option>อุทัยธาณี</option>
                                <option>อุตรดิตถ์</option>
                                <option>อุบลราชธาณี</option>
                                <option>อำนาจเจริญ</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputOld">วันออกบัตร</label>
                            <input type="text" class="form-control"placeholder="xx/xx/xxxx">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputFullname">วันหมดอายุ</label>
                            <input type="text" class="form-control"placeholder="xx/xx/xxxx">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputAddress">ที่อยู่ปัจจุบัน</label>
                            <input type="text" class="form-control"placeholder="ที่อยู่ปัจจุบัน">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputAddress">โทร</label>
                            <input type="text" class="form-control"placeholder="โทร">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputBirthofDate">กรณีฉุกเฉินติดต่อบุคคลชื่อ</label>
                            <input type="text" class="form-control"placeholder="ชื่อบุคคลติดต่อฉุกเฉิน">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputOld">ความสัมพันธ์</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>ลุง</option>
                                <option>ป้า</option>
                                <option>น้า</option>
                                <option>อา</option>
                                <option>ปู่</option>
                                <option>ย่า</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputOld">โทร</label>
                            <input type="text" class="form-control"placeholder="โทร">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputAddress">ที่อยู่</label>
                            <input type="text" class="form-control"placeholder="ที่อยู่">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputAddress">สถานที่ทำงาน</label>
                            <input type="text" class="form-control"placeholder="สถานที่ทำงาน">
                        </div>
                    </div>
                </form>
                <br>
                <h5>ประวัติครอบครัว</h5><br>
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <label for="inputFullname">ชื่อ-นามสกุล บิดา</label>
                            <input type="text" class="form-control"placeholder="ชื่อ-นามสกุล บิดา">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputFullname">สถานะการมีชีวิต</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>มีชีวิตอยู่</option>
                                <option>เสียชีวิต</option>
                            </select>
                        </div>
                        <div class="form-group col-md-1">
                            <label for="inputOld">อายุ</label>
                            <input type="text" class="form-control"placeholder="อายุ (ปี)">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputOld">อาชีพ</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>รับจ้าง</option>
                                <option>นักเรียน/นักศึกษา</option>
                                <option>ข้าราชการ</option>
                                <option>หมอ</option>
                                <option>พยาบาล</option>
                                <option>วิศวกร</option>
                                <option>เกษตรกร</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <label for="inputFullname">ชื่อ-นามสกุล มารดา</label>
                            <input type="text" class="form-control"placeholder="ชื่อ-นามสกุล มารดา">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputFullname">สถานะการมีชีวิต</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>มีชีวิตอยู่</option>
                                <option>เสียชีวิต</option>
                            </select>
                        </div>
                        <div class="form-group col-md-1">
                            <label for="inputOld">อายุ</label>
                            <input type="text" class="form-control"placeholder="อายุ (ปี)">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputOld">อาชีพ</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>รับจ้าง</option>
                                <option>นักเรียน/นักศึกษา</option>
                                <option>ข้าราชการ</option>
                                <option>หมอ</option>
                                <option>พยาบาล</option>
                                <option>วิศวกร</option>
                                <option>เกษตรกร</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label for="inputFullname">ปัจจุบันบิดาและมารดา</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>อยู่ด้วยกัน</option>
                                <option>แยกกันอยู่</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputOld">โทร</label>
                            <input type="text" class="form-control"placeholder="โทร">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputOld">จำนวนพี่น้องทั้งหมด</label>
                            <input type="text" class="form-control"placeholder="มีพี่น้องทั้งหมด">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputOld">ท่านเป็นคนที่</label>
                            <input type="text" class="form-control"placeholder="ท่านเป็นคนที่">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputAddress">ปัจจุบัน นักเรียนอยู่ในปกครองของ</label>
                            <input type="text" class="form-control"placeholder="">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputAddress">ความสัมพันธ์</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>ลุง</option>
                                <option>ป้า</option>
                                <option>น้า</option>
                                <option>อา</option>
                                <option>ปู่</option>
                                <option>ย่า</option>
                            </select>
                        </div>
                    </div>
                </form>
                <br>
                <h5>ประวัติการศึกษา</h5><br>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col"><center>ระดับ</center></th>
                            <th scope="col"><center>ชื่อสถานศึกษา/ที่ตั้ง</center></th>
                            <th scope="col"><center>ปีที่เข้า</center></th>
                            <th scope="col"><center>ปีที่สำเร็จ</center></th>
                            <th scope="col"><center>วุฒิที่สำเร็จ</center></th>
                            <th scope="col"><center>คะแนนเฉลี่ย</center></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row"><center>อนุบาล</center></th>
                            <td><input type="text" class="form-control"placeholder=""></td>
                            <td>
                            <div class="form-group col-md-14">
                                <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>2563</option>
                                    <option>2562</option>
                                    <option>2561</option>
                                    <option>2560</option>
                                    <option>2559</option>
                                    <option>2558</option>
                                    <option>2557</option>
                                    <option>2556</option>
                                    <option>2555</option>
                                    <option>2554</option>
                                    <option>2553</option>
                                    <option>2552</option>
                                    <option>2551</option>
                                    <option>2550</option>
                                    <option>2549</option>
                                    <option>2548</option>
                                    <option>2547</option>
                                    <option>2546</option>
                                    <option>2545</option>
                                    <option>2544</option>
                                </select>
                            </div>
                            </td>
                            <td>
                            <div class="form-group col-md-14">
                                <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>2563</option>
                                    <option>2562</option>
                                    <option>2561</option>
                                    <option>2560</option>
                                    <option>2559</option>
                                    <option>2558</option>
                                    <option>2557</option>
                                    <option>2556</option>
                                    <option>2555</option>
                                    <option>2554</option>
                                    <option>2553</option>
                                    <option>2552</option>
                                    <option>2551</option>
                                    <option>2550</option>
                                    <option>2549</option>
                                    <option>2548</option>
                                    <option>2547</option>
                                    <option>2546</option>
                                    <option>2545</option>
                                    <option>2544</option>
                                </select>
                            </div>
                            </td>
                            <td><input type="text" class="form-control"placeholder=""></td>
                            <td><input type="text" class="form-control"placeholder=""></td>
                        </tr>
                        <tr>
                        <th scope="row">ประถมศึกษา</th>
                            <td><input type="text" class="form-control"placeholder=""></td>
                            <td>
                            <div class="form-group col-md-14">
                                <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>2563</option>
                                    <option>2562</option>
                                    <option>2561</option>
                                    <option>2560</option>
                                    <option>2559</option>
                                    <option>2558</option>
                                    <option>2557</option>
                                    <option>2556</option>
                                    <option>2555</option>
                                    <option>2554</option>
                                    <option>2553</option>
                                    <option>2552</option>
                                    <option>2551</option>
                                    <option>2550</option>
                                    <option>2549</option>
                                    <option>2548</option>
                                    <option>2547</option>
                                    <option>2546</option>
                                    <option>2545</option>
                                    <option>2544</option>
                                </select>
                            </div>
                            </td>
                            <td>
                            <div class="form-group col-md-14">
                                <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>2563</option>
                                    <option>2562</option>
                                    <option>2561</option>
                                    <option>2560</option>
                                    <option>2559</option>
                                    <option>2558</option>
                                    <option>2557</option>
                                    <option>2556</option>
                                    <option>2555</option>
                                    <option>2554</option>
                                    <option>2553</option>
                                    <option>2552</option>
                                    <option>2551</option>
                                    <option>2550</option>
                                    <option>2549</option>
                                    <option>2548</option>
                                    <option>2547</option>
                                    <option>2546</option>
                                    <option>2545</option>
                                    <option>2544</option>
                                </select>
                            </div>
                            </td>
                            <td><input type="text" class="form-control"placeholder=""></td>
                            <td><input type="text" class="form-control"placeholder=""></td>
                        </tr>
                        <tr>
                        <th scope="row"><center>มัธยมศึกษา</center></th>
                            <td><input type="text" class="form-control"placeholder=""></td>
                            <td>
                            <div class="form-group col-md-14">
                                <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>2563</option>
                                    <option>2562</option>
                                    <option>2561</option>
                                    <option>2560</option>
                                    <option>2559</option>
                                    <option>2558</option>
                                    <option>2557</option>
                                    <option>2556</option>
                                    <option>2555</option>
                                    <option>2554</option>
                                    <option>2553</option>
                                    <option>2552</option>
                                    <option>2551</option>
                                    <option>2550</option>
                                    <option>2549</option>
                                    <option>2548</option>
                                    <option>2547</option>
                                    <option>2546</option>
                                    <option>2545</option>
                                    <option>2544</option>
                                </select>
                            </div>
                            </td>
                            <td>
                            <div class="form-group col-md-14">
                                <select id="inputState" class="form-control">
                                    <option selected>Choose...</option>
                                    <option>2563</option>
                                    <option>2562</option>
                                    <option>2561</option>
                                    <option>2560</option>
                                    <option>2559</option>
                                    <option>2558</option>
                                    <option>2557</option>
                                    <option>2556</option>
                                    <option>2555</option>
                                    <option>2554</option>
                                    <option>2553</option>
                                    <option>2552</option>
                                    <option>2551</option>
                                    <option>2550</option>
                                    <option>2549</option>
                                    <option>2548</option>
                                    <option>2547</option>
                                    <option>2546</option>
                                    <option>2545</option>
                                    <option>2544</option>
                                </select>
                            </div>
                            </td>
                            <td><input type="text" class="form-control"placeholder=""></td>
                            <td><input type="text" class="form-control"placeholder=""></td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <h5>ความสามารถด้านภาษา/ความสามารถพิเศษ</h5><br>
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="inputOld">ภาษา</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>เกาหลี</option>
                                <option>ญี่ปุ่น</option>
                                <option>จีน</option>
                                <option>อังกฤษ</option>
                                <option>ฝรั่งเศส</option>
                                <option>เยอรมัน</option>
                                <option>โปรตุเกส</option>
                                <option>รัสเซีย</option>
                                <option>สเปน</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputOld">ระดับ</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>พอใจ</option>
                                <option>ดี</option>
                                <option>ดีมาก</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputOld">ความสามารถพิเศษ</label>
                            <input type="text" class="form-control"placeholder="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputOld">ทราบข่าวสารการเรียนจาก</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>แนะแนวที่โรงเรียน</option>
                                <option>วิทยุ</option>
                                <option>แผ่นพับ/ใบปลิว</option>
                                <option>หนังสือพิมพ์</option>
                                <option>เว็บไซต์โรงเรียน</option>
                                <option>บุตรหลานศึกษาอยู่ก่อนแล้ว</option>
                                <option>ป้ายผ้าโฆษณา</option>
                            </select>
                        </div>
                    </div>
                </form>
                <br>
                <!-- ส่วนของปุ่มกด -->
                <div align="right">
                    <a href=""><button type="button" class="btn btn-outline-primary btn-lg">บันทึก</button></a>
                    <a href="main.html"><button type="button" class="btn btn-outline-danger btn-lg">ย้อนกลับ</button></a>
                </div>
            <br>
            </div>
        
        
        

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>