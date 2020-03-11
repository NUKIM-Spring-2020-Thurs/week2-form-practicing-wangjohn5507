<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<style type="text/css">
	#a1{
		background-color: #A5C4E7;
		width: 600px;
		height: 1300px;
		margin-left: 300px;
		padding-top: 30px;
		padding-left: 40px;
		padding-right: 40px;
		padding-bottom: 30px;
		text-align:center;
	}
	#a2{
		background-color: #A5E7CE ;
		width: 600px;
		height: 1270px;
		text-align:center;
	}
	#a3{
		background-color: #F2F5F3 ;
		width: 600px;
		height: 50px;
		padding-top: 10px;
	}

</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>資管營報名表</title>
</head>
<body>
    <div id="a1">
    	<div id="a2">
    		<div id="a3">
    			<b><span style="font-family:Microsoft JhengHei;font-size: 30px">資管營報名表填寫</span></b>
       		</div>
       		<br>
       		<b>姓名：</b><input type="text" name="姓名" placeholder="請輸入姓名"><br>
       		<br>
       		<b>您的性別為：</b>
			男<input type="radio" name="gender" value="m">
			女<input type="radio" name="gender" value="f"><br>
			<br>
			<b>您的生日為：</b>
			<input type="date" name=""><br>
			<br>
			<b>您的身分證號碼：</b><input type="text" name="id" placeholder="ex:A123456789"><br>
			<br>
			<b>您的電話號碼：</b><input type="text" name="phone number" placeholder="ex:0987654321"><br>
			<br>
			<b>緊急聯絡人姓名：</b><input type="text" name="name" placeholder="ex:王大明"><br>
			<br>
			<b>緊急聯絡人電話：</b><input type="text" name="phone" placeholder="ex:0987654321"><br>
			<br>
			<b>緊急聯絡人關係：</b><input type="text" name="relationship" placeholder="ex:父子"><br>
			<br>
			<b>您的居住地為：</b><br>
			<select name="city" multiple>
				<option value="Taipei">台北</option>
				<option value="Taichung">台中</option>
				<option value="Tainan">台南</option>
				<option value="Tauyuan">桃園</option>
				<option value="Kaohsiung">高雄</option>
				<option value="countryside">偏鄉及離島</option>
		    </select><br>
		    <br>
		    <b>您的飲食：</b>
		    葷<input type="radio" name="meat" value="葷">
		    素<input type="radio" name="vegetable" value="素"><br>
		    <br>
		    <b>營服尺寸表：</b><br>
		    <img src="https://lh6.googleusercontent.com/TAou6-eVJOe_c0dh1hCcdGXjETZUg157uk4_Ab5CsXneIcelvD_mXGh2omyfk6dZeya-LZc-e9t44pVWIijgaA2jV4u9mI6EG2cFrBl_zXz1XOArCD3Tp9jIXPWy=w1334" width="500px" height="300px"><br>
		    <br>
		    <b>請選擇您的衣服尺寸：</b><br>
		    <select name="size" multiple>
		    	<option value="XS">XS</option>
		    	<option value="S">S</option>
		    	<option value="M">M</option>
		    	<option value="L">L</option>
		    	<option value="XL">XL</option>
		    	<option value="2L">2L</option>
		    	<option value="3L">3L</option>
		    	<option value="4L">4L</option>
		    </select><br>
		    <br>
			<b>您是怎麼知道這個營隊的：</b><br>
			上網查詢<input type="radio" name="gender" value="上網查詢">
			FB粉專<input type="radio" name="gender" value="FB粉專">
			校園宣傳<input type="radio" name="gender" value="校園宣傳">
			朋友推薦<input type="radio" name="gender" value="朋友推薦"><br>
			<br>
			<b>您對營隊的期待：</b><br>
			吃飯<input type="checkbox" name="" checked>
			睡覺<input type="checkbox" name="">
			認識資管系在做什麼<input type="checkbox" name="">
			交朋友<input type="checkbox" name="">
			學習程式設計<input type="checkbox" name=""><br>
			<br>
			<b>有沒有甚麼特殊癖好或需求，在底下告知我們：</b><br>
			<textarea rows="5" cols="50" name="comment" >
			</textarea>
			<br>
			<input type="reset" value="清除">
    	</div>
    	<br>
    	<input type="submit" value="確認送出">
    </div>
</body>
</html>