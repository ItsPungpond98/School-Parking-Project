<h3 id="title2" style="text-align: left;">กรุณากรอกข้อมูลเพื่อเข้าสู่ระบบจอดรถ</h3>
<form method="POST" action="./parking.php?parking=2">
    <fieldset id="parkingform">
        <legend>โปรดกรอกข้อมูลส่วนตัว</legend>
        <div id="nameinp">
            <select name="pron" required>
                <option disabled selected>คำนำหน้าชื่อ</option>
                <option value="นาย">นาย</option>
                <option value="นาง">นาง</option>
                <option value="นางสาว">นางสาว</option>
                <option value="อื่นๆ/ไม่ระบุ">อื่นๆ/ไม่ระบุ</option>
            </select>
            <input type="text" name="fname" placeholder="ชื่อผู้จอดรถ" required>
            <input type="text" name="lname" placeholder="นามสกุลผู้จอดรถ" required>
        </div>
        <div id="addinp">
            <div>
                <input type="text" name="phone" placeholder="โทรศัพท์ (0XX-XXX-XXXX)" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" style="margin-left: 5px;">
                <select required name="position">
                    <option disabled selected>ตำแหน่ง</option>
                    <option value="นักเรียน">นักเรียน</option>
                    <option value="คุณครู">คุณครู</option>
                    <option value="ผู้ปกครอง/แขก">ผู้ปกครอง/แขก</option>
                </select>
            </div>
            <div id="slotdisplay">
                <input type="text" name="slot" style="display: none;">
                <h2 id="title2" style="font-size: 22px;">
                    <?php
                        if (isset($_GET['slot']) == true and $_GET['slot'] >= 1 and $_GET['slot'] <= 30) {
                            $slot = intval($_GET['slot']);
                            if ($slot < 10) {
                                echo "จอดรถช่องที่ <span style='color: var(--tri)'>0$slot</span>";
                            } else {
                                echo "จอดรถช่องที่ <span style='color: var(--tri)'>$slot</span>";
                            };
                        } else {
                                echo "  <span style='color: crimson'>
                                        <span>ช่องจอดรถไม่ถูกต้อง</span><br>
                                        <span style='margin: 0; font-size: 14px;'>กรุณาสะแกน QR Code ใหม่</span>
                                    </span>";
                        };
                    ?>
                </h2>
            </div>
        </div>
    </fieldset>
    <div style="display: flex; justify-content: center;">
        <input type="submit" id="btn" value="ลงทะเบียนใช้ที่จอดรถ">
    </div>
</form> 