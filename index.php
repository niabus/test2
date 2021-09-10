laravel new ชื่อโปรเจ็ค		การสร้างโปรเจ็คใหม่<br>
php artisan route:list		เรียกดูRoute ทั้งหมด<br>
php artisan serve		Start sever laravel<br>
php artisan make:controller AboutController สร้างcontroller ชื่อ AboutController<br>
php artisan make:model -m 	สร้างตารางใน ฐานข้อมูล<br>

<br>
รหัสสถานะ request <br>
200 ok 				(ดำเนินการเสร็จสมบูรณ์)<br>
201 Create 			(สร้างข้อมูลใหม่เรียบร้อย)<br>
400 Bad Request 		(sever ไม่เข้าใจว่า request นี้เกี่ยวกับอะไร)<br>
404 Not Found 			(หาข้อมูลที่เรียกไม่เจอหรือไม่สามารถใช้งานได้)<br>
500 Internal sever Error 	(Request ถูกต้องแต่มีข้อมผิดพลาดที่ฝั่ง Sever)<br>
<br>
view สร้างส่วนแสดง<br>
rout สร้างส่วนติดต่อ ใช้ต่อยอดกับ conroller <br>
การแสดงผลใช้ จาก echo $ตัวแปร   --->   {{$ชื่อตัวแปร}}<br>
การกำหนดเงื่อนไข<br>
php			blade<br>
if(){			@if(เงื่อนไข) ทำส่วนของ else     ไม่ต้องใส่ปีกกา<br>
	<br>
}			@else ทำส่วนของ else<br>
<br>
			@endif แทนปีกกาปิด<br>
--------------------------<br>
foreach(){}		@foeach()<br>
			@endforeach<br>
			<br>
Route::get('/about','AboutController@index'); เรียกcontroller Aboutcontrollerฟังก์ชัน index<br>
Middleware ใช้เป็นตัวกรองการเข้าถึง<br>









