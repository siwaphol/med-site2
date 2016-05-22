@extends("index")
@section("content")
<div class="row">
  	<div class="col-md-10">

  		<table class="table" style="background-color: #8e44ad; color: #ffffff;">
    		<tr>
      			<th><span style="font-weight:normal;">HOME &gt; </span>COURSES</th>
    		</tr>
  		</table>

  		<div class = "row">
  		<div class="col-md-12">
  		<table class="table table-bordered">
  			<thead>
    		<tr style="background-color: #8e44ad; color: #ffffff;">
      			<th>#</th>
      			<th>รหัสวิชา</th>
      			<th>รายชื่อกระบวนวิชา</th>
    		</tr>
  			</thead>
  			<tbody>
    			<tr>
      				<th scope="row">1</th>
      				<td><a href="#">201110</a></td>
      				<td><a href="#">คณิตศาสตร์บูรณาการ (Integrated Mathematical Sciences )</a></td>
    			</tr>
    			<tr>
              <th scope="row">2</th>
              <td><a href="#">204100</a></td>
              <td><a href="#">เทคโนโลยีสารสนเทศ (Information Technology and Modern Life I )</a></td>
          </tr>
          <tr>
              <th scope="row">3</th>
              <td><a href="#">204101</a></td>
              <td><a href="#">คอมพิวเตอร์เบื้องต้น (Introduction to Computer )</a></td>
          </tr>
          <tr>
              <th scope="row">4</th>
              <td><a href="#">204111</a></td>
              <td><a href="#">วิทยาการคอมพิวเตอร์เบื้องต้น (Fundamentals of Computer Science )</a></td>
          </tr>
  			</tbody>
		</table>
		</div>
  		</div>
            <!--<div style=" height: 133px; width:730px; float: left; display:inline-block; margin:0;">

            <table width="730" border="0" cellspacing="0" cellpadding="0">
  			<tbody><tr>
    			<td><img src="images/tabbanner/course.jpg"></td>
  			</tr>
  			<tr>
    			<td class="path_head"><span class="path_regular">HOME &gt; </span>COURSES</td>
  			</tr>
			</tbody></table>

			<table border="0" cellspacing="0" cellpadding="0" class="teacher_box">
  			<tbody><tr>
    			<td></td>
  			</tr>
  			<tr>
    			<td style="margin-top:20px;">
    			<table border="0" cellspacing="0" cellpadding="0">
      			<tbody><tr>
        			<td class="course_pic">
        				<a href="index.php?name=course">
        					<img src="images/pic_content/computer_science_course.png">
        				</a>
        			</td>
        			<td class=" course_pic">
        				<a href="index.php?name=course&file=homework">
        					<img src="images/pic_content/computer_science_course.png">
        				</a>
        			</td>
        			<td class="course_pic">
        				<a href="http://www.cs.science.cmu.ac.th/person/wss/204399A/index.php?p=news" target="_blank">
        					<img src="images/pic_content/computer_science_course.png">
        				</a>
        			</td>
      			</tr>
      			<tr>
        			<td class="course_content">
        				<a href="index.php?name=course">เว็บเพจของรายวิชาต่างๆ</a></td>
        			<td class="course_content">
        				<a href="index.php?name=course&file=homework">เว็บเพจส่งการบ้าน</a></td>
        			<td class="course_content">
        				<a href="http://www.cs.science.cmu.ac.th/person/wss/204399A/index.php?p=news" target="_blank">เว็บเพจการค้นคว้าอิสระ (IS)</a></td>
      			</tr>
    			</tbody>
    			</table>
  			</div>-->
	<div class="col-md-2"></div>
	</div>
</div>
@endsection