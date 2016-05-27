@extends("index")
@section("content")
<div class="row">
  <div class="col-md-10">
      <div class="form-group">
          <a class="btn btn-default" href="{{url("admin/curriculum")}}">Edit curriculum</a>
      </div>

    <table class="table" style="background-color: #8e44ad; color: #ffffff;">
      <tr>
          <th><span style="font-weight:normal;">HOME &gt; </span>CURRICULUM</th>
      </tr>
    </table>

    <dl>
      <dt>ปริญญาตรี หลักสูตร หลังปี 2554</dt>
    <dl>

    <div class="row">
        <dl class="dl-horizontal">
          <dt>ชื่อปริญญา  :</dt>
          <dd>วิทยาศาสตรบัณฑิต (วิทยาการคอมพิวเตอร์) วท.บ. (วิทยาการคอมพิวเตอร์)</dd>
          <dt>ชื่อหลักสูตร :</dt>
          <dd>หลักสูตรวิทยาศาสตรบัณฑิต สาขาวิชาวิทยาการคอมพิวเตอร์</dd>
        </dl>
    </div>

    <div class="row container-fluid">
      <div class="row container-fluid">
        <span class="sp_topic">1. จำนวนหน่วยกิต </span><span class="sp_hilight_thin">รวมตลอดหลักสูตร ไม่น้อยกว่า 130 หน่วยกิต </span>
      </div>

      <div class="row container-fluid">
        <span class="sp_topic ">2. โครงสร้างหลักสูตร </span><span class="sp_hilight_thin">30 หน่วยกิต</span>
        <ul>2.1 หมวดวิชาศึกษาทั่วไป <span class="sp_hilight_thin">30 หน่วยกิต</span>
          <ul><span class="sp_hilight_thin">ให้เลือก 2 กระบวนวิชาจากกระบวนวิชาต่อไปนี้</span>
            <ul>
              <li>กลุ่มวิชาภาษาและการสื่อสาร</li>
              <li>กลุ่มวิชามนุษยศาสตร์และสังคมศาสตร์</li>
              <li>กลุ่มวิชาวิทยาศาสตร์และคณิตศาสตร์</li>
              <li>กลุ่มวิชาการเรียนรู้ผ่านกิจกรรม</li>
            </ul>
          </ul>
        </ul>
        <ul>2.2 หมวดวิชาเฉพาะ <span class="sp_hilight_thin">ไม่น้อยกว่า 94 หน่วยกิต </span>
          <ul><span class="sp_hilight_thin">ให้เลือก 2 กระบวนวิชาจากกระบวนวิชาต่อไปนี้</span>
            <ul>
              <li>วิชาแกน   <span class="sp_hilight_thin">24 หน่วยกิต</span>
              </li>
              <li>วิชาเอก   <span class="sp_hilight_thin">ไม่น้อยกว่า 55 หน่วยกิต</span>
              <ul>
                <li>วิชาเอกบังคับร่วม  <span class="sp_hilight_thin"> 43 หน่วยกิต</span></li>
              </ul>
              <ul>
                <li>วิชาเอกบังคับประจำแผน</li>
                <ul>
                  <li>แผน 1 <span class="sp_hilight_thin">3 หน่วยกิต</span></li>
                  <li>แผน 2 <span class="sp_hilight_thin">6 หน่วยกิต</span></li>
                </ul>
              </ul>
              <ul>
                <li>วิชาเอกเลือก</li>
                <ul>
                  <li>แผน 1 <span class="sp_hilight_thin">ไม่น้อยกว่า 9 หน่วยกิต</span></li>
                  <li>แผน 2 <span class="sp_hilight_thin">ไม่น้อยกว่า 6 หน่วยกิต</span></li>
                </ul>
              </ul>
              </li>
              <li>วิชาโท   <span class="sp_hilight_thin">ไม่น้อยกว่า 15 หน่วยกิต</span>
              </li>
            </ul>
          </ul>
        </ul>
        <ul>2.3 หมวดวิชาเลือกเสรี <span class="sp_hilight_thin">ไม่น้อยกว่า 6 หน่วยกิต </span></ul>
      </div>

      <div class="row container-fluid">
        <span class="sp_topic">3. กระบวนวิชา</span>
        <ul>1) หมวดวิชาศึกษาทั่วไป  <span class="sp_hilight_thin">30 หน่วยกิต</span>
          <ul>1.1 กลุ่มวิชาภาษาและการสื่อสาร  <span class="sp_hilight_thin">12 หน่วยกิต</span>
            <ul>001101 การฟังและพูดภาษาอังกฤษ<span class="sp_credit">3 หน่วยกิต</span></ul>
            <ul>001102 การอ่านและการเขียนภาษาอังกฤษ<span class="sp_credit">3 หน่วยกิต</span></ul>
            <ul>001201 การอ่านเชิงวิเคราะห์และการเขียนอย่างมีประสิทธิผล<span class="sp_credit">3 หน่วยกิต</span></ul>
            <ul>001202 ภาษาอังกฤษในบริบททางอาชีพ<span class="sp_credit">3 หน่วยกิต</span></ul>
          </ul>
          <ul>1.2 กลุ่มวิชามนุษยศาสตร์และสังคมศาสตร์  <span class="sp_hilight_thin">9 หน่วยกิต</span>
            <ul>เลือก 3 กระบวนวิชาจากกระบวนวิชาต่อไปนี</ul>
            <ul>009103 การรู้สารสนเทศและการนำเสนอสารสนเทศ<span class="sp_credit">3 หน่วยกิต</span></ul>
            <ul>013110 จิตวิทยากับชีวิตประจำวัน<span class="sp_credit">3 หน่วยกิต</span></ul>
            <ul>050100 การใช้ภาษาไทย<span class="sp_credit">3 หน่วยกิต</span></ul>
            <ul>154104 การอนุรักษ์สิ่งแวดล้อม<span class="sp_credit">3 หน่วยกิต</span></ul>
            <ul>176100 กฎหมายและโลกสมัยใหม่<span class="sp_credit">3 หน่วยกิต</span></ul>
            <ul>701103 การบัญชีทั่วไป<span class="sp_credit">3 หน่วยกิต</span></ul>
            <ul>702101 การเงินในชีวิตประจำวัน<span class="sp_credit">3 หน่วยกิต</span></ul>
            <ul>703103 การเป็นผู้ประกอบการและธุรกิจเบื้องต้น<span class="sp_credit">3 หน่วยกิต</span></ul>
            <ul>751100 เศรษฐศาสตร์ในชีวิตประจำวัน<span class="sp_credit">3 หน่วยกิต</span></ul>
            <ul>851100 การสื่อสารเบื้องต้น<span class="sp_credit">3 หน่วยกิต</span></ul>
            <ul>851103 ชีวิตและสังคมผ่านสื่อ<span class="sp_credit">3 หน่วยกิต</span></ul>
          </ul>
          <ul>1.3 กลุ่มวิชาวิทยาศาสตร์และคณิตศาสตร์  <span class="sp_hilight_thin">6 หน่วยกิต</span>
            <ul>201110 คณิตศาสตร์บูรณาการ<span class="sp_credit">3 หน่วยกิต</span></ul>
            <ul>201111 โลกแห่งวิทยาศาสตร์<span class="sp_credit">3 หน่วยกิต</span></ul>
          </ul>
          <ul>1.4 กลุ่มวิชาการเรียนรู้ผ่านกิจกรรม  <span class="sp_hilight_thin">3 หน่วยกิต</span>
            <ul>201191 การเรียนรู้ผ่านกิจกรรม<span class="sp_credit">2 หน่วยกิต</span></ul>
            <ul>เลือก 1 หน่วยกิตจากกระบวนวิชาต่อไปนี่</ul>
            <ul>057121 ฟุตบอลเพื่อชีวิตและการออกกำลังกาย<span class="sp_credit">1 หน่วยกิต</span></ul>
            <ul>057122 ว่ายนํ้าเพื่อชีวิตและการออกกำลังกาย<span class="sp_credit">1 หน่วยกิต</span></ul>
            <ul>057123 วอลเลย์บอลเพื่อชีวิตและการออกกำลังกาย<span class="sp_credit">1 หน่วยกิต</span></ul>
            <ul>057125 กิจกรรมเข้าจังหวะเพื่อชีวิตและการออกกำลังกาย<span class="sp_credit">1 หน่วยกิต</span></ul>
            <ul>057126 บาสเก็ตบอลเพื่อชีวิตและการออกกำลังกาย<span class="sp_credit">1 หน่วยกิต</span></ul>
            <ul>057127 แบดมินตันเพื่อชีวิตและการออกกำลังกาย<span class="sp_credit">1 หน่วยกิต</span></ul>
            <ul>057127 แบดมินตันเพื่อชีวิตและการออกกำลังกาย<span class="sp_credit">1 หน่วยกิต</span></ul>
            <ul>057128 เทนนิสเพื่อชีวิตและการออกกำลังกาย<span class="sp_credit">1 หน่วยกิต</span></ul>
            <ul>057129 เทเบิ้ลเทนนิสเพื่อชีวิตและการออกกำลังกาย<span class="sp_credit">1 หน่วยกิต</span></ul>
            <ul>057130 กอล์ฟเพื่อชีวิตและการออกกำลังกาย<span class="sp_credit">1 หน่วยกิต</span></ul>
            <ul>201192 ดอยสุเทพศึกษา<span class="sp_credit">1 หน่วยกิต</span></ul>
            <ul>หรือกระบวนวิชาการเรียนรู้ผ่านกิจกรรมที่เปิดสอนเพิ่มเติมในมหาวิทยาลัยเชียงใหม่</ul>
          </ul>
        </ul>
        <ul>2) หมวดวิชาเฉพาะ  <span class="sp_hilight_thin">ไม่น้อยกว่า 94 หน่วยกิต</span>
          <ul>2.1 วิชาแกน  <span class="sp_hilight_thin">24 หน่วยกิต</span>
            <ul>202111 ชีววิทยา 1<span class="sp_credit">4 หน่วยกิต</span></ul>
            <ul>203111 เคมี 1<span class="sp_credit">3 หน่วยกิต</span></ul>
            <ul>203115 ปฏิบัติการเคมี 1<span class="sp_credit">1 หน่วยกิต</span></ul>
            <ul>206111 แคลคูลัส 1<span class="sp_credit">3 หน่วยกิต</span></ul>
            <ul>206112 แคลคูลัส 2<span class="sp_credit">3 หน่วยกิต</span></ul>
            <ul>206281 คณิตศาสตร์ดีสครีต<span class="sp_credit">3 หน่วยกิต</span></ul>
            <ul>207117 ปฏิบัติการฟิสิกส์ 1<span class="sp_credit">1 หน่วยกิต</span></ul>
            <ul>207187 ฟิสิกส์ 1<span class="sp_credit">3 หน่วยกิต</span></ul>
            <ul>208263 สถิติเบื้องต้น<span class="sp_credit">3 หน่วยกิต</span></ul>
          </ul>
          <ul>2.2 วิชาเอก  <span class="sp_hilight_thin">55 หน่วยกิต</span>
            <ul>วิชาเอกบังคับร่วม  <span class="sp_hilight_thin">43 หน่วยกิต</span>
              <ul>204111 วิทยาการคอมพิวเตอร์เบื้องต้น<span class="sp_credit">3 หน่วยกิต</span></ul>
              <ul>204112 การเขียนโปรแกรมเชิงโครงสร้าง<span class="sp_credit">3 หน่วยกิต</span></ul>
              <ul>204211 การเขียนโปรแกรมเชิงวัตถุ<span class="sp_credit">3 หน่วยกิต</span></ul>
              <ul>204222 หลักการของระบบฐานข้อมูล<span class="sp_credit">3 หน่วยกิต</span></ul>
              <ul>204231 การจัดระบบและสถาปัตยกรรมคอมพิวเตอร์<span class="sp_credit">3 หน่วยกิต</span></ul>
              <ul>204251 โครงสร้างข้อมูล<span class="sp_credit">3 หน่วยกิต</span></ul>
              <ul>204306 จริยธรรมสำหรับผู้ประกอบวิชาชีพคอมพิวเตอร<span class="sp_credit">1 หน่วยกิต</span></ul>
              <ul>204315 การจัดระเบียบของภาษาโปรแกรม<span class="sp_credit">3 หน่วยกิต</span></ul>
              <ul>204362 การออกแบบเชิงวัตถุ<span class="sp_credit">3 หน่วยกิต</span></ul>
              <ul>204363 ความต้องการและการสร้างตัวแบบซอฟต์แวร์<span class="sp_credit">3 หน่วยกิต</span></ul>
              <ul>204451 การออกแบบและการวิเคราะห์อัลกอริทึม<span class="sp_credit">3 หน่วยกิต</span></ul>
              <ul>204452 ทฤษฎีการคำนวณ<span class="sp_credit">3 หน่วยกิต</span></ul>
              <ul>204490 การวิจัยทางวิทยาการคอมพิวเตอร์<span class="sp_credit">3 หน่วยกิต</span></ul>
              <ul>204491 การค้นคว้าอิสระ 1<span class="sp_credit">1 หน่วยกิต</span></ul>
              <ul>204499 การค้นคว้าอิสระ 2<span class="sp_credit">2 หน่วยกิต</span></ul>
            </ul>
            <ul>วิชาเอกบังคับประจำแผน
              <ul>(ก) แผน 1
                <ul>204398 การฝึกงานคอมพิวเตอร์ <span class="sp_credit">3 หน่วยกิต</span></ul>
              </ul>
              <ul>(ข) แผน 2
                <ul>204496 สหกิจศึกษา <span class="sp_credit">6 หน่วยกิต</span></ul>
              </ul>
            </ul>

            <ul>วิชาเอกเลือก  <span class="sp_hilight_thin">ต้องเป็นกระบวนวิชาระดับ 300 หรือ 400 ขึ้นไป</span>
              <ul>(ก) แผน 1  <span class="sp_hilight_thin">ไม่น้อยกว่า 9 หน่วยกิต</span>
                <ul>โดยที่จะต้องเป็นกระบวนวิชาระดับ 400 อย่างน้อย 6 หน่วยกิต</ul>
              </ul>
              <ul>(ข) แผน 2  <span class="sp_hilight_thin">ไม่น้อยกว่า 6 หน่วยกิต</span>
              <ul>โดยทั้งสองแผนเ ลือกจากกระบวนวิชาต่อไปนี</ul>
                <ul>- กระบวนวิชาวิทยาการคอมพิวเตอร์ที่นอกเหนือจากกระบวนวิชาเอกบังคับร่วม
         และกระบวนวิชาเอกบังคับประจำแผน</ul>
                <ul>- กระบวนวิชาคณิตศาสตร์ ดังต่อไปนี้
                  <ul>206325 พีชคณิตเชิงเส้น<span class="sp_credit">3 หน่วยกิต</span></ul>
                  <ul>206327 ทฤษฎีจำนวน 1<span class="sp_credit">3 หน่วยกิต</span></ul>
                  <ul>206355 วิธีเชิงตัวเลข<span class="sp_credit">3 หน่วยกิต</span></ul>
                  <ul>206370 ความน่าจะเป็น 1<span class="sp_credit">3 หน่วยกิต</span></ul>
                  <ul>206423 เวฟเลทส์<span class="sp_credit">3 หน่วยกิต</span></ul>
                  <ul>206427 ทฤษฎีจำนวน 2<span class="sp_credit">3 หน่วยกิต</span></ul>
                  <ul>206455 การวิเคราะห์เชิงตัวเลข<span class="sp_credit">3 หน่วยกิต</span></ul>
                  <ul>206467 นิวรอลเนทเวิร์ค<span class="sp_credit">3 หน่วยกิต</span></ul>
                  <ul>206481 ทฤษฎีกราฟ<span class="sp_credit">3 หน่วยกิต</span></ul>
                </ul>
              </ul>
            </ul>
          </ul>
          <ul>2.3 วิชาโท  <span class="sp_hilight_thin">15 หน่วยกิต</span>
            <ul>- นักศึกษาที่ต้องการเรียนวิชาโท สามารถเลือกเรียนวิชาโทสาขาใดๆ โดยความเห็นชอบของอาจารย์ ที่ปรึกษา</ul>
            <ul>- นักศึกษาที่ไม่ต้องการเรียนวิชาโท ต้องเรียนกระบวนวิชาวิทยาการคอมพิวเตอร์ ไม่น้อยกว่า 15 หน่วยกิต
   ในระดับ 300 หรือ 400 ในส่วนเพิ่มของกระบวนวิชาเอกบังคับประจำแผน</ul>
          </ul>
        </ul>
        <ul>3) หมวดวิชาเลือกเสรี  <span class="sp_hilight_thin">ไม่น้อยกว่า 6 หน่วยกิต</span>
          <ul>- นักศึกษาต้องเลือกเรียนกระบวนวิชานอกเหนือจากวิชาเอกและวิชาโท (ถ้ามี) ไม่น้อยกว่า 6 หน่วยกิต</ul>
        </ul>
      </div>


    </div>

    <!--Table year-->
    <div class = "row">
    <h2 style="text-align: center;">แผนการศึกษา ระดับปริญญาตรี</h2>
      <div class="col-md-12">
      <table class="table table-bordered">
        <tr style="background-color:#8e44ad; color:#ffffff;">
            <th colspan="3" class="text-center">ชั้นปีที่ 1</th>
        </tr>
        <tr>
            <th colspan="3">ภาคการศึกษาที่ 1</th>
        </tr>
        <tbody>
          <tr>
              <td>001101</td>
              <td>การฟังและพูดภาษาอังกฤษ</td>
              <td>3 หน่วยกิต</td>
          </tr>
          <tr>
              <td>001101</td>
              <td>การฟังและพูดภาษาอังกฤษ</td>
              <td>3 หน่วยกิต</td>
          </tr>
          <tr>
              <td colspan="2">รวม</td>
              <td>6 หน่วยกิจ</td>
          </tr>

          <tr>
            <th colspan="3">ภาคการศึกษาที่ 2</th>
          </tr>
          <tr>
              <td>001101</td>
              <td>การฟังและพูดภาษาอังกฤษ</td>
              <td>3 หน่วยกิต</td>
          </tr>
          <tr>
              <td>001101</td>
              <td>การฟังและพูดภาษาอังกฤษ</td>
              <td>3 หน่วยกิต</td>
          </tr>
          <tr>
              <td colspan="2">รวม</td>
              <td>6 หน่วยกิจ</td>
          </tr>
          </tbody>
          </table>

          <table class="table table-bordered">
        <tr  style="background-color:#8e44ad; color:#ffffff;">
            <th colspan="3" class="text-center">ชั้นปีที่ 2</th>
        </tr>
        <tr>
            <th colspan="3">ภาคการศึกษาที่ 1</th>
        </tr>
        <tbody>
          <tr>
              <td>001101</td>
              <td>การฟังและพูดภาษาอังกฤษ</td>
              <td>3 หน่วยกิต</td>
          </tr>
          <tr>
              <td>001101</td>
              <td>การฟังและพูดภาษาอังกฤษ</td>
              <td>3 หน่วยกิต</td>
          </tr>
          <tr>
              <td colspan="2">รวม</td>
              <td>6 หน่วยกิจ</td>
          </tr>
          
          <tr>
            <th colspan="3">ภาคการศึกษาที่ 2</th>
          </tr>
          <tr>
              <td>001101</td>
              <td>การฟังและพูดภาษาอังกฤษ</td>
              <td>3 หน่วยกิต</td>
          </tr>
          <tr>
              <td>001101</td>
              <td>การฟังและพูดภาษาอังกฤษ</td>
              <td>3 หน่วยกิต</td>
          </tr>
          <tr>
              <td colspan="2">รวม</td>
              <td>6 หน่วยกิจ</td>
          </tr>
          </tbody>
          </table>


          <table class="table table-bordered">
        <tr  style="background-color:#8e44ad; color:#ffffff;">
            <th colspan="3" class="text-center">ชั้นปีที่ 3</th>
        </tr>
        <tr>
            <th colspan="3">ภาคการศึกษาที่ 1</th>
        </tr>
        <tbody>
          <tr>
              <td>001101</td>
              <td>การฟังและพูดภาษาอังกฤษ</td>
              <td>3 หน่วยกิต</td>
          </tr>
          <tr>
              <td>001101</td>
              <td>การฟังและพูดภาษาอังกฤษ</td>
              <td>3 หน่วยกิต</td>
          </tr>
          <tr>
              <td colspan="2">รวม</td>
              <td>6 หน่วยกิจ</td>
          </tr>
          
          <tr>
            <th colspan="3">ภาคการศึกษาที่ 2</th>
          </tr>
          <tr>
              <td>001101</td>
              <td>การฟังและพูดภาษาอังกฤษ</td>
              <td>3 หน่วยกิต</td>
          </tr>
          <tr>
              <td>001101</td>
              <td>การฟังและพูดภาษาอังกฤษ</td>
              <td>3 หน่วยกิต</td>
          </tr>
          <tr>
              <td colspan="2">รวม</td>
              <td>6 หน่วยกิจ</td>
          </tr>
          </tbody>
          </table>

          <table class="table table-bordered">
        <tr  style="background-color:#8e44ad; color:#ffffff;">
            <th colspan="3" class="text-center">ชั้นปีที่ 4</th>
        </tr>
        <tr>
            <th colspan="3">ภาคการศึกษาที่ 1</th>
        </tr>
        <tbody>
          <tr>
              <td>001101</td>
              <td>การฟังและพูดภาษาอังกฤษ</td>
              <td>3 หน่วยกิต</td>
          </tr>
          <tr>
              <td>001101</td>
              <td>การฟังและพูดภาษาอังกฤษ</td>
              <td>3 หน่วยกิต</td>
          </tr>
          <tr>
              <td colspan="2">รวม</td>
              <td>6 หน่วยกิจ</td>
          </tr>
          
          <tr>
            <th colspan="3">ภาคการศึกษาที่ 2</th>
          </tr>
          <tr>
              <td>001101</td>
              <td>การฟังและพูดภาษาอังกฤษ</td>
              <td>3 หน่วยกิต</td>
          </tr>
          <tr>
              <td>001101</td>
              <td>การฟังและพูดภาษาอังกฤษ</td>
              <td>3 หน่วยกิต</td>
          </tr>
          <tr>
              <td colspan="2">รวม</td>
              <td>6 หน่วยกิจ</td>
          </tr>
          </tbody>
          </table>


        </div>
      </div>



      
      
  <div class="col-md-2"></div>
  </div>
</div>
@endsection