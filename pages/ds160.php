<?php
  require_once("../scripts/initialize.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>迦南教育信息中心</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="../styles/main.css">
</head>
<body>
	<div>
		<nav class="navbar navbar-light bg-light">
  			<span class="navbar-brand mb-0 h1">迦南教育信息中心</span>
  			<span><a href="index.html">返回目录</a></span>
		</nav>
	</div>
	<div id="bd-img-container">
		<div>
			<form action="login.php" method="post" class="student-form-container">
				<h2>签证信息收集表</h2>
                <br>
                <h6>带*问题若不适用可不填，其他问题都需填写</h6>
                <br>
                <h5>一. 个人信息</h5>
                <hr>
				<label><b>1. 姓氏</b></label>
				<input type="text" placeholder="输入姓氏" name="lastname" required>
				<br>
				<label><b>2. 名字</b></label>
				<input type="text" placeholder="输入名字" name="firstname" required>
				<br>
				<label><b>3. 姓氏拼音</b></label>
				<input type="text" placeholder="输入姓氏拼音" name="lastname-pinyin" required>
				<br>
				<label><b>4. 名字拼音</b></label>
				<input type="text" placeholder="输入名字拼音" name="firstname-pinyin" required>
				<br>
				<label><b>*5. 曾用名</b></label>
				<input type="text" placeholder="输入曾用名" name="used-name">
				<br>
				<label><b>6. 出生年月 (月份/日期/年份)</b></label>
				<input type="text" placeholder="格式：05/31/1998，11/07/2013" name="birthday" required>
				<br>
    			<label><b>7. 性别</b></label>
    			<br>
    			<div class="stuff-container">
    				<label><input type="radio" name="gender" value="男" required> 男</label>
					<label><input type="radio" name="gender" value="女"> 女</label>
    			</div>
    			<br>
    			<label><b>8. 婚姻状况</b></label>
    			<br>
    			<div class="stuff-container">
    				<label><input type="radio" name="m-status" value="已婚" required> 已婚</label>
					<label><input type="radio" name="m-status" value="未婚"> 未婚</label>
					<label><input type="radio" name="m-status" value="离异"> 离异</label>
    			</div>
    			<br>
    			<label><b>9. 出生地（城市)</b></label>
    			<input type="text" placeholder="如：杭州市  北京市" name="born-city" required>
    			<br>
    			<label><b>10. 出生地（省份)</b></label>
    			<input type="text" placeholder="如：浙江省。直辖市直接输入城市，如：上海市" name="born-state" required>
    			<br>
    			<label><b>11. 国籍</b></label>
    			<input type="text" placeholder="输入国籍" name="citizenship" required>
    			<br>
    			<label><b>*12. 其他国籍</b></label>
    			<input type="text" placeholder="输入其他国籍" name="other-czp">
    			<br>
    			<label><b>13. 身份证号码</b></label>
    			<input type="text" placeholder="输入身份证号码" name="id" required>
    			<br>
                <h5>二. 地址及电话信息</h5>
                <hr>
    			<label><b>14. 家庭地址 (包括门牌号及邮编)</b></label>
    			<input type="text" placeholder="输入地址" name="address" required>
    			<br>
    			<label><b>15. 家庭地址英文 (包括门牌号及邮编)</b></label>
    			<input type="text" placeholder="输入地址英文" name="address-english" required>
    			<br>
    			<label><b>*16. 家庭电话</b></label>
    			<input type="text" placeholder="输入家庭电话" name="telephone">
    			<br>
    			<label><b>17. 手机</b></label>
    			<input type="text" placeholder="输入手机" name="cellphone" required>
    			<br>
    			<label><b>*18. 工作电话</b></label>
    			<input type="text" placeholder="输入工作电话" name="workphone">
    			<br>
    			<label><b>*19. 工作传真</b></label>
    			<input type="text" placeholder="输入工作传真" name="fax">
    			<br>
    			<label><b>20. 电子邮箱</b></label>
    			<input type="text" placeholder="输入email" name="email" required>
    			<br>
                <h5>三. 护照信息</h5>
                <hr>
    			<label><b>21. 护照号码</b></label>
    			<input type="text" placeholder="输入护照号" name="passport" required>
    			<br>
    			<label><b>22. 护照签发国家</b></label>
    			<input type="text" placeholder="输入护照签发国家" name="issued-ountry" required>
    			<br>
    			<label><b>23. 护照签发地 (城市)</b></label>
    			<input type="text" placeholder="输入护照签发城市" name="issued-city" required>
    			<br>
    			<label><b>24. 护照签发地 (省份或州)</b></label>
    			<input type="text" placeholder="输入护照签发省份" name="issued-state" required>
    			<br>
    			<label><b>25. 护照签发日期 (月份/日期/年份)</b></label>
    			<input type="text" placeholder="格式：05/31/2015，11/07/2013" name="issued-date" required>
    			<br>
    			<label><b>26. 护照有效期至 (月份/日期/年份)</b></label>
    			<input type="text" placeholder="格式：05/31/2025，11/07/2023" name="expiration-date" required>
    			<br>
    			<label><b>27. 您的护照是否曾经遗失或者被盗, 如果是，请填写问题28和29</b></label>
    			<br>
    			<div class="stuff-container">
    				<label><input type="radio" name="passport-lost" value="是" required> 是</label>
					<label><input type="radio" name="passport-lost" value="否"> 否</label>
    			</div>
    			<br>
    			<label><b>28. 护照号码</b></label>
    			<input type="text" placeholder="输入护照号" name="passport2">
    			<br>
    			<label><b>29. 护照签发国家</b></label>
    			<input type="text" placeholder="输入护照签发国家" name="issued-country2">
    			<br>
                <h5>四. 旅游信息 (若是跟旅行团出行可以不必填写此大类)</h5>
                <hr>
                <label><b>30. 此次赴美目的</b></label>
                <input type="text" placeholder="输入赴美目的" name="purpose" required>
                <br>
                <label><b>31. 列举所有您计划访问的美国城市</b></label>
                <input type="text" placeholder="如：洛杉矶，纽约，西雅图" name="cities" required>
                <br>
                <label><b>32. 到达日期 (月份/日期/年份)</b></label>
                <input type="text" placeholder="格式：05/31/2015，11/07/2013" name="arrival-date" required>
                <br>
                <label><b>33. 到达航班</b></label>
                <input type="text" placeholder="输入航班" name="arrival-plane" required>
                <br>
                <label><b>34. 到达城市</b></label>
                <input type="text" placeholder="输入城市" name="arrival-city" required>
                <br>
                <label><b>35. 离开日期 (月份/日期/年份)</b></label>
                <input type="text" placeholder="格式：05/31/2015，11/07/2013" name="departure-date" required>
                <br>
                <label><b>36. 离开航班</b></label>
                <input type="text" placeholder="输入航班" name="departure-plane" required>
                <br>
                <label><b>37. 离开城市</b></label>
                <input type="text" placeholder="输入城市" name="departure-city" required>
                <br>
                <label><b>38. 在美期间居住地址</b></label>
                <input type="text" placeholder="输入地址" name="us-address" required>
                <br>
                <h5>五. 此次旅行的费用</h5>
                <hr>
                <label><b>39. 谁将支付此次旅行的费用, 若不是自己支付，请回答问题40-44</b></label>
                <div class="stuff-container">
    				<label><input type="radio" name="paid-by" value="自己" required> 自己</label>
					<label><input type="radio" name="paid-by" value="他人"> 他人</label>
					<label><input type="radio" name="paid-by" value="公司或者组织"> 公司或者组织</label>
    			</div>
				<br>
				<label><b>40. 公司或者组织名称</b></label>
                <input type="text" placeholder="输入名称" name="company-name">
                <br>
                <label><b>41. 公司电话</b></label>
                <input type="text" placeholder="输入电话" name="company-phone">
                <br>
                <label><b>42. 付款人姓名</b></label>
                <input type="text" placeholder="输入姓名" name="payer-name">
                <br>
                <label><b>43. 付款人电话</b></label>
                <input type="text" placeholder="输入电话" name="payer-phone">
                <br>
                <label><b>44. 付款人与您的关系</b></label>
                <input type="text" placeholder="输入关系" name="payer-relationship">
                <br>
                <h5>六. 随行人员信息</h5>
                <hr>
                <label><b>45. 是否有人与您同行， 若是请回答问题46</b></label>
    			<br>
    			<div class="stuff-container">
    				<label><input type="radio" name="together" value="是" required> 是</label>
					<label><input type="radio" name="together" value="否"> 否</label>
    			</div>
    			<br>
    			<label><b>46. 同行人姓名</b></label>
                <input type="text" placeholder="输入姓名" name="together-name">
                <br>
                <h5>七. 出行记录</h5>
                <hr>
                <label><b>47. 曾经去过哪些国家(以签证为准)</b></label>
                <input type="text" placeholder="如：美国，日本，韩国，英国" name="visited-countries">
                <br>
                <h5>八. 以往赴美旅行信息</h5>
                <hr>
                <label><b>48. 您曾经是否去过美国，若是，请回答问题49</b></label>
                <div class="stuff-container">
                    <label><input type="radio" name="been-to-us" value="是" required> 是</label>
                    <label><input type="radio" name="been-to-us" value="否"> 否</label>
                </div>
                <br>
                <label><b>49. 请提供之前5次的赴美经历</b></label>
                <input type="text" placeholder="第一次访美日期, 如：05/30/2013" name="first-time">
                <input type="text" placeholder="第一次停留时长，如：3周" name="first-duration">
                <hr>
                <input type="text" placeholder="第二次访美日期， 如：05/30/2013" name="second-time">
                <input type="text" placeholder="第二次停留时长，如：3周" name="second-duration">
                <hr>
                <input type="text" placeholder="第三次访美日期, 如：05/30/2013" name="third-time">
                <input type="text" placeholder="第三次停留时长，如：3周" name="third-duration">
                <hr>
                <input type="text" placeholder="第四次访美日期, 如：05/30/2013" name="fourth-time">
                <input type="text" placeholder="第四次停留时长，如：3周" name="fourth-duration">
                <hr>
                <input type="text" placeholder="第五次访美日期, 如：05/30/2013" name="fifth-time">
                <input type="text" placeholder="第五次停留时长，如：3周" name="fifth-duration">
                <br>
                <label><b>50. 您之前是否持有美国驾照</b></label>
                <div class="stuff-container">
                    <label><input type="radio" name="had-dl" value="是" required> 是</label>
                    <label><input type="radio" name="had-dl" value="否"> 否</label>
                </div>
                <br>
                <label><b>51. 您之前是否获得美国签证, 如果是，请回答问题52-56</b></label>
                <div class="stuff-container">
                    <label><input type="radio" name="had-visa" value="是" required> 是</label>
                    <label><input type="radio" name="had-visa" value="否"> 否</label>
                </div>
                <br>
                <label><b>52. 签证号码 (签证页右下方红色8位数字)</b></label>
                <input type="text" placeholder="输入8位数字" name="visa-number">
                <br>
                <label><b>53. 上一次获得美国签证日期</b></label>
                <input type="text" placeholder="输入日期，如：05/30/2013" name="last-time-issued">
                <br>
                <label><b>54. 您此次是否申请同类型签证</b></label>
                <div class="stuff-container">
                    <label><input type="radio" name="same-type" value="是"> 是</label>
                    <label><input type="radio" name="same-type" value="否"> 否</label>
                </div>
                <br>
                <label><b>55. 上一次申请赴美签证的城市和国家</b></label>
                <input type="text" placeholder="如：上海市 中国" name="last-time-applied">
                <br>
                <label><b>56. 问题55中的城市和国家是否为您主要居住国家</b></label>
                <div class="stuff-container">
                    <label><input type="radio" name="permanent-residence" value="是"> 是</label>
                    <label><input type="radio" name="permanent-residence" value="否"> 否</label>
                </div>
                <br>
                <label><b>57. 您是否在美国任何机构留取过十指指纹</b></label>
                <div class="stuff-container">
                    <label><input type="radio" name="finger-print" value="是" required> 是</label>
                    <label><input type="radio" name="finger-print" value="否"> 否</label>
                </div>
                <br>
                <label><b>58. 您的美国签证是否曾经被盗或者遗失</b></label>
                <div class="stuff-container">
                    <label><input type="radio" name="ever-lost" value="是" required> 是</label>
                    <label><input type="radio" name="ever-lost" value="否"> 否</label>
                </div>
                <br>
                <label><b>59. 您的美国签证是否曾经被撤销或者注销过</b></label>
                <div class="stuff-container">
                    <label><input type="radio" name="ever-cancelled" value="是" required> 是</label>
                    <label><input type="radio" name="ever-cancelled" value="否"> 否</label>
                </div>
                <br>
                <label><b>60. 您是否曾经被美国拒签\被拒绝入境过美国或者在入境时被撤回您的入境申请</b></label>
                <div class="stuff-container">
                    <label><input type="radio" name="refused-entry" value="是" required> 是</label>
                    <label><input type="radio" name="refused-entry" value="否"> 否</label>
                </div>
                <label><b>若是，请列出原因</b></label>
                <input type="text" placeholder="列出原因" name="reason">
                <br>
                <h5>九. 美国联系人信息 (如果您是参加旅行团可以不用填写，如果是商务，探亲或个人旅游必须填写以下内容)</h5>
                <hr>
                <label><b>61. 联系人姓名</b></label>
                <input type="text" placeholder="输入联系人姓名" name="contact-name">
                <br>
                <label><b>62. 与您的关系</b></label>
                <input type="text" placeholder="如：朋友" name="contact-relationship">
                <br>
                <label><b>63. 电话号码</b></label>
                <input type="text" placeholder="输入电话号码" name="contact-number">
                <br>
                <label><b>64. 组织名称</b></label>
                <input type="text" placeholder="输入名称" name="contact-company">
                <br>
                <label><b>65. 联系人地址 (含门牌号及邮编)</b></label>
                <input type="text" placeholder="输入地址" name="contact-address">
                <br>
                <h5>十. 亲属信息(父母) 如果是已故，也必须填写姓名</h5>
                <hr>
                <label><b>66. 父亲姓名</b></label>
                <input type="text" placeholder="输入父亲姓名" name="father-name" required>
                <br>
                <label><b>67. 父亲出生日期</b></label>
                <input type="text" placeholder="格式：05/31/2015，11/07/2013" name="father-birthday" required>
                <br>
                <label><b>68. 父亲是否在美国</b></label>
                <div class="stuff-container">
                    <label><input type="radio" name="father-in-us" value="是" required> 是</label>
                    <label><input type="radio" name="father-in-us" value="否"> 否</label>
                </div>
                <br>
                <label><b>69. 父亲是在美国身份</b></label>
                <div class="stuff-container">
                    <label><input type="radio" name="father-status" value="公民" required> 公民</label>
                    <label><input type="radio" name="father-status" value="绿卡"> 绿卡</label>
                    <label><input type="radio" name="father-status" value="工作"> 工作</label>
                    <label><input type="radio" name="father-status" value="学生"> 学生</label>
                </div>
                <br>
                <label><b>70. 母亲姓名</b></label>
                <input type="text" placeholder="输入母亲姓名" name="mother-name" required>
                <br>
                <label><b>71. 母亲出生日期</b></label>
                <input type="text" placeholder="格式：05/31/2015，11/07/2013" name="mother-birthday" required>
                <br>
                <label><b>72. 母亲是否在美国</b></label>
                <div class="stuff-container">
                    <label><input type="radio" name="mother-in-us" value="是" required> 是</label>
                    <label><input type="radio" name="mother-in-us" value="否"> 否</label>
                </div>
                <br>
                <label><b>73. 母亲是在美国身份</b></label>
                <div class="stuff-container">
                    <label><input type="radio" name="mother-status" value="公民" required> 公民</label>
                    <label><input type="radio" name="mother-status" value="绿卡"> 绿卡</label>
                    <label><input type="radio" name="mother-status" value="工作"> 工作</label>
                    <label><input type="radio" name="mother-status" value="学生"> 学生</label>
                </div>
                <br>
                <label><b>74. 除父母外是否还有其他亲属在美（包括子女、配偶、兄弟姐妹及其他旁系亲属), 若是，请回答问题75-80</b></label>
                <div class="stuff-container">
                    <label><input type="radio" name="mother-in-us" value="是" required> 是</label>
                    <label><input type="radio" name="mother-in-us" value="否"> 否</label>
                </div>
                <br>
                <label><b>75. 其他亲属1</b></label>
                <input type="text" placeholder="亲属姓名" name="others1">
                <br>
                <label><b>76. 与您的关系</b></label>
                <input type="text" placeholder="输入关系" name="others1-relationship">
                <br>
                <label><b>77. 在美国身份</b></label>
                <div class="stuff-container">
                    <label><input type="radio" name="others1-status" value="公民"> 公民</label>
                    <label><input type="radio" name="others1-status" value="绿卡"> 绿卡</label>
                    <label><input type="radio" name="others1-status" value="工作"> 工作</label>
                    <label><input type="radio" name="others1-status" value="学生"> 学生</label>
                </div>
                <br>
                <label><b>78. 其他亲属2</b></label>
                <input type="text" placeholder="亲属姓名" name="others2">
                <br>
                <label><b>79. 与您的关系</b></label>
                <input type="text" placeholder="输入关系" name="others2-relationship">
                <br>
                <label><b>80. 在美国身份</b></label>
                <div class="stuff-container">
                    <label><input type="radio" name="others2-status" value="公民"> 公民</label>
                    <label><input type="radio" name="others2-status" value="绿卡"> 绿卡</label>
                    <label><input type="radio" name="others2-status" value="工作"> 工作</label>
                    <label><input type="radio" name="others2-status" value="学生"> 学生</label>
                </div>
                <br>
                <h5>十一. 配偶信息（如离异需提供前配偶的姓名，出生日期，出生地，现地址，结婚离婚的时间，离婚原因)</h5>
                <hr>
                <label><b>81. 配偶姓名</b></label>
                <input type="text" placeholder="输入配偶姓名" name="spouse-name">
                <br>
                <label><b>82. 配偶国籍</b></label>
                <input type="text" placeholder="输入配偶国籍" name="spouse-citizenship">
                <br>
                <label><b>83. 配偶出生日期</b></label>
                <input type="text" placeholder="格式：05/31/2015，11/07/2013" name="spouse-birthday">
                <br>
                <label><b>84. 配偶出生城市</b></label>
                <input type="text" placeholder="输入配偶出生城市" name="spouse-born-city">
                <br>
                <label><b>85. 配偶出生省份</b></label>
                <input type="text" placeholder="输入配偶出生省份" name="spouse-born-state">
                <br>
                <label><b>86. 配偶手机号</b></label>
                <input type="text" placeholder="输入配偶手机号" name="spouse-phone-number">
                <br>
                <label><b>87. 配偶地址</b></label>
                <input type="text" placeholder="输入配偶地址" name="spouse-address">
                <br>
                <label><b>88. 结婚日期</b></label>
                <input type="text" placeholder="格式：05/31/2015，11/07/2013" name="spouse-marriage-date">
                <br>
                <label><b>89. 离婚日期 (若不适用，不用填写)</b></label>
                <input type="text" placeholder="格式：05/31/2015，11/07/2013" name="spouse-divorce-date">
                <br>
                <label><b>90. 离婚原因 (若不适用，不用填写)</b></label>
                <input type="text" placeholder="请输入离婚原因" name="spouse-divorce-reason">
                <br>
                <h5>十二. 申请人现任工作单位/学校 (如果退休，请在主要职业处填写“退休” 并在以往工作单位处填写相关信息)</h5>
                <hr>
                <label><b>91. 主要职业</b></label>
                <input type="text" placeholder="输入职业" name="job" required>
                <br>
                <label><b>92. 职务</b></label>
                <input type="text" placeholder="输入职务" name="position" required>
                <br>
                <label><b>93. 月薪</b></label>
                <input type="text" placeholder="输入月薪" name="monthly-income" required>
                <br>
                <label><b>94. 现任工作单位名称/如果是学生请填写学校名称(中文)</b></label>
                <input type="text" placeholder="输入中文" name="company-name-chinese" required>
                <br>
                <label><b>95. 现任工作单位名称/如果是学生请填写学校名称(英文)</b></label>
                <input type="text" placeholder="输入英文" name="company-name-english" required>
                <br>
                <label><b>96. 现任工作单位（或学校）地址（要填写门牌号及邮编）中文</b></label>
                <input type="text" placeholder="输入中文" name="company-address-chinese" required>
                <br>
                <label><b>97. 现任工作单位（或学校）地址（要填写门牌号及邮编）英文</b></label>
                <input type="text" placeholder="输入英文" name="company-address-english" required>
                <br>
                <label><b>98. 工作任期时间</b></label>
                <input type="text" placeholder="输入任期时间" name="employment-date" required>
                <br>
                <label><b>99.（如是学生）学校入学时间</b></label>
                <input type="text" placeholder="输入入学时间" name="school-start-date" required>
                <br>
                <label><b>100. 请简要描述您的工作职责</b></label>
                <input type="text" placeholder="输入工作职责" name="job-duty" required>
                <br>
                <h5>十三. 以往工作单位信息</h5>
                <hr>
                <label><b>101. 您是否曾有过工作单位。 若是，请回答问题102-121，过去两任雇主的信息</b></label>
                <div class="stuff-container">
                    <label><input type="radio" name="had-job-before" value="是" required> 是</label>
                    <label><input type="radio" name="had-job-before" value="否"> 否</label>
                </div>
                <br>
                <label><b>前任雇主1信息</b></label>
                <br>
                <label><b>102. 前任工作单位名字(中文)</b></label>
                <input type="text" placeholder="输入中文" name="previous1-company-name-chinese">
                <br>
                <label><b>103. 前任工作单位名字(英文)</b></label>
                <input type="text" placeholder="输入英文" name="previous1-company-name-english">
                <br>
                <label><b>104. 前任工作单位地址(中文)</b></label>
                <input type="text" placeholder="输入中文" name="previous1-company-address-chinese">
                <br>
                <label><b>105. 前任工作单位地址(英文)</b></label>
                <input type="text" placeholder="输入英文" name="previous1-company-address-english">
                <br>
                <label><b>106. 前任工作单位电话</b></label>
                <input type="text" placeholder="输入电话" name="previous1-employment-phone">
                <br>
                <label><b>107. 前任工作单位职务</b></label>
                <input type="text" placeholder="输入职务" name="previous1-employment-job-title">
                <br>
                <label><b>108. 前任工作单位主管姓名</b></label>
                <input type="text" placeholder="输入前任主管姓名" name="previous1-employment-manager">
                <br>
                <label><b>109. 前任工作任期开始日期</b></label>
                <input type="text" placeholder="格式：05/31/2015，11/07/2013" name="previous1-employment-start-date">
                <br>
                <label><b>110. 前任工作任期结束日期</b></label>
                <input type="text" placeholder="格式：05/31/2015，11/07/2013" name="previous1-employment-end-date">
                <br>
                <label><b>111. 前任工作职责</b></label>
                <input type="text" placeholder="输入工作职责" name="previous1-company-job-duty">
                <br>
                <label><b>前任雇主2信息</b></label>
                <br>
                <label><b>112. 前任工作单位名字(中文)</b></label>
                <input type="text" placeholder="输入中文" name="previous2-company-name-chinese">
                <br>
                <label><b>113. 前任工作单位名字(英文)</b></label>
                <input type="text" placeholder="输入英文" name="previous2-company-name-english">
                <br>
                <label><b>114. 前任工作单位地址(中文)</b></label>
                <input type="text" placeholder="输入中文" name="previous2-company-address-chinese">
                <br>
                <label><b>115. 前任工作单位地址(英文)</b></label>
                <input type="text" placeholder="输入英文" name="previous2-company-address-english">
                <br>
                <label><b>116. 前任工作单位电话</b></label>
                <input type="text" placeholder="输入电话" name="previous2-employment-phone">
                <br>
                <label><b>117. 前任工作单位职务</b></label>
                <input type="text" placeholder="输入职务" name="previous2-employment-job-title">
                <br>
                <label><b>118. 前任工作单位主管姓名</b></label>
                <input type="text" placeholder="输入前任主管姓名" name="previous2-employment-manager">
                <br>
                <label><b>119. 前任工作任期开始日期</b></label>
                <input type="text" placeholder="格式：05/31/2015，11/07/2013" name="previous2-employment-start-date">
                <br>
                <label><b>120. 前任工作任期结束日期</b></label>
                <input type="text" placeholder="格式：05/31/2015，11/07/2013" name="previous2-employment-end-date">
                <br>
                <label><b>121. 前任工作职责</b></label>
                <input type="text" placeholder="输入工作职责" name="previous2-company-job-duty">
                <br>
                <h5>十四. 除小学以外,您是否曾经就读过其它教育机构 (请填写学校地址含门牌号及邮编)</h5>
                <hr>
                <label><b>学校1信息</b></label>
                <br>
                <label><b>122. 学校名称(中文)</b></label>
                <input type="text" placeholder="输入学校中文" name="previous1-school-name-chinese" required>
                <br>
                <label><b>123. 学校名称(英文)</b></label>
                <input type="text" placeholder="输入学校英文" name="previous1-school-name-english" required>
                <br>
                <label><b>124. 学校地址(中文)</b></label>
                <input type="text" placeholder="输入地址中文" name="previous1-school-address-chinese" required>
                <br>
                <label><b>125. 学校地址(英文)</b></label>
                <input type="text" placeholder="输入地址英文" name="previous1-school-address-english" required>
                <br>
                <label><b>126. 课程(如果大专\大学请写主修专业名称)</b></label>
                <input type="text" placeholder="输入工作职责" name="previous1-school-major" required>
                <br>
                <label><b>127. 就读开始日期</b></label>
                <input type="text" placeholder="格式：05/31/2015，11/07/2013" name="previous1-school-start-date" required>
                <br>
                <label><b>128. 就读毕业日期</b></label>
                <input type="text" placeholder="格式：05/31/2015，11/07/2013" name="previous1-school-end-date" required>
                <br>
                <label><b>学校2信息</b></label>
                <br>
                <label><b>129. 学校名称(中文)</b></label>
                <input type="text" placeholder="输入学校中文" name="previous2-school-name-chinese">
                <br>
                <label><b>130. 学校名称(英文)</b></label>
                <input type="text" placeholder="输入学校英文" name="previous2-school-name-english">
                <br>
                <label><b>131. 学校地址(中文)</b></label>
                <input type="text" placeholder="输入地址中文" name="previous2-school-address-chinese">
                <br>
                <label><b>132. 学校地址(英文)</b></label>
                <input type="text" placeholder="输入地址英文" name="previous2-school-address-english">
                <br>
                <label><b>133. 课程(如果大专\大学请写主修专业名称)</b></label>
                <input type="text" placeholder="输入工作职责" name="previous2-school-major">
                <br>
                <label><b>134. 就读开始日期</b></label>
                <input type="text" placeholder="格式：05/31/2015，11/07/2013" name="previous2-school-start-date">
                <br>
                <label><b>135. 就读毕业日期</b></label>
                <input type="text" placeholder="格式：05/31/2015，11/07/2013" name="previous2-school-end-date">
                <br>
                <label><b>136. 最近5年里您是否去过其他国家?(不包含港\澳\台)，请列出所去国家（若有，一定要填写)</b></label>
                <input type="text" placeholder="输入所有访问过的国家" name="countries-visited-in-5yrs">
                <br>
                <label><b>137. 您是否属于一个党派或宗教? 如果是，请填写问题138</b></label>
                <div class="stuff-container">
                    <label><input type="radio" name="have-religion" value="是" required> 是</label>
                    <label><input type="radio" name="have-religion" value="否"> 否</label>
                </div>
                <br>
                <label><b>138. 请输入您的党派或者宗教</b></label>
                <input type="text" placeholder="输入党派或者宗教" name="party-religion">
                <br>
                <label><b>139. 您是否属于\捐助过或任职于任何职业机构\社会机构或慈善机构?</b></label>
                <div class="stuff-container">
                    <label><input type="radio" name="have-donated" value="是" required> 是</label>
                    <label><input type="radio" name="have-donated" value="否"> 否</label>
                </div>
                <br>
                <label><b>140. 您是否有枪械\爆炸\核装置\生物或化学方面的经验\特殊技能或受过培训?</b></label>
                <div class="stuff-container">
                    <label><input type="radio" name="special-trained" value="是" required> 是</label>
                    <label><input type="radio" name="special-trained" value="否"> 否</label>
                </div>
                <br>
                <label><b>141. 您是否曾经参军? 如果是，请回答问题142-147</b></label>
                <div class="stuff-container">
                    <label><input type="radio" name="served-in-military" value="是" required> 是</label>
                    <label><input type="radio" name="served-in-military" value="否"> 否</label>
                </div>
                <br>
                <label><b>142. 参军国家</b></label>
                <input type="text" placeholder="输入参军国家" name="served-in-military-country">
                <br>
                <label><b>143. 参军军种</b></label>
                <input type="text" placeholder="输入参军军种" name="served-in-military-type">
                <br>
                <label><b>144. 军队军衔</b></label>
                <input type="text" placeholder="输入军事军衔" name="served-in-military-title">
                <br>
                <label><b>145. 军事特长</b></label>
                <input type="text" placeholder="输入军事特长" name="served-in-military-skills">
                <br>
                <label><b>146. 服役开始日期</b></label>
                <input type="text" placeholder="格式：05/31/2015，11/07/2013" name="served-in-military-start-date">
                <br>
                <label><b>147. 服役结束日期</b></label>
                <input type="text" placeholder="格式：05/31/2015，11/07/2013" name="served-in-military-end-date">
                <br>
                <label><b>148. 您是否曾经服务于或参与过准军事性单位\民间警戒单位\反叛团体\游击队或叛乱组织,或曾经是一员?</b></label>
                <div class="stuff-container">
                    <label><input type="radio" name="served-in-organization" value="是" required> 是</label>
                    <label><input type="radio" name="served-in-organization" value="否"> 否</label>
                </div>
                <br>
                <label><b>若是，请描述详情</b></label>
                <input type="text" placeholder="列出详情" name="details-for-served-in-organization">
                <br>
                <h5>十五. 国内联系人 (无血缘关系，需提供两位)</h5>
                <hr>
                <label><b>联系人1信息</b></label>
                <br>
                <label><b>149. 姓名</b></label>
                <input type="text" placeholder="输入姓名" name="emergency-contact1-name" required>
                <br>
                <label><b>150. 生日</b></label>
                <input type="text" placeholder="输入生日" name="emergency-contact1-birthday" required>
                <br>
                <label><b>151. 电话</b></label>
                <input type="text" placeholder="输入电话" name="emergency-contact1-phone" required>
                <br>
                <label><b>152. 邮箱</b></label>
                <input type="text" placeholder="输入email" name="emergency-contact1-email" required>
                <br>
                <label><b>153. 和申请人关系</b></label>
                <input type="text" placeholder="输入和申请人关系" name="emergency-contact1-relationship" required>
                <br>
                <label><b>154. 地址</b></label>
                <input type="text" placeholder="输入地址" name="emergency-contact1-address" required>
                <br>
                <label><b>联系人2信息</b></label>
                <br>
                <label><b>155. 姓名</b></label>
                <input type="text" placeholder="输入姓名" name="emergency-contact2-name" required>
                <br>
                <label><b>156. 生日</b></label>
                <input type="text" placeholder="输入生日" name="emergency-contact2-birthday" required>
                <br>
                <label><b>157. 电话</b></label>
                <input type="text" placeholder="输入电话" name="emergency-contact2-phone" required>
                <br>
                <label><b>158. 邮箱</b></label>
                <input type="text" placeholder="输入email" name="emergency-contact2-email" required>
                <br>
                <label><b>159. 和申请人关系</b></label>
                <input type="text" placeholder="输入和申请人关系" name="emergency-contact2-relationship" required>
                <br>
                <label><b>160. 地址</b></label>
                <input type="text" placeholder="输入地址" name="emergency-contact2-address" required>
                <br>
                <h5>十六. 子女信息</h5>
                <hr>
                <label><b>子女1信息</b></label>
                <br>
                <label><b>161. 姓名</b></label>
                <input type="text" placeholder="输入姓名" name="children1-name">
                <br>
                <label><b>161. 生日</b></label>
                <input type="text" placeholder="输入生日" name="children1-birthday">
                <br>
                <label><b>163. 出生城市</b></label>
                <input type="text" placeholder="输入出生城市" name="children1-born-city">
                <br>
                <label><b>164. 婚姻状况</b></label>
    			<br>
    			<div class="stuff-container">
    				<label><input type="radio" name="children1-m-status" value="已婚"> 已婚</label>
					<label><input type="radio" name="children1-m-status" value="未婚"> 未婚</label>
					<label><input type="radio" name="children1-m-status" value="离异"> 离异</label>
    			</div>
    			<br>
                <label><b>165. 和申请人关系</b></label>
                <input type="text" placeholder="输入和申请人关系" name="children1-relationship">
                <br>
				<label><b>166. 现在的职业</b></label>
                <input type="text" placeholder="输入职业" name="children1-job">
                <br>
                <label><b>167. 现在地址（若在美国或是加拿大请填写详细地址)</b></label>
                <input type="text" placeholder="输入地址" name="children1-address">
                <br>
                <label><b>子女2信息</b></label>
                <br>
                <label><b>168. 姓名</b></label>
                <input type="text" placeholder="输入姓名" name="children2-name">
                <br>
                <label><b>169. 生日</b></label>
                <input type="text" placeholder="输入生日" name="children2-birthday">
                <br>
                <label><b>170. 出生城市</b></label>
                <input type="text" placeholder="输入出生城市" name="children2-born-city">
                <br>
                <label><b>171. 婚姻状况</b></label>
    			<br>
    			<div class="stuff-container">
    				<label><input type="radio" name="children2-m-status" value="已婚"> 已婚</label>
					<label><input type="radio" name="children2-m-status" value="未婚"> 未婚</label>
					<label><input type="radio" name="children2-m-status" value="离异"> 离异</label>
    			</div>
    			<br>
                <label><b>172. 和申请人关系</b></label>
                <input type="text" placeholder="输入和申请人关系" name="children2-relationship">
                <br>
				<label><b>173. 现在的职业</b></label>
                <input type="text" placeholder="输入职业" name="children2-job">
                <br>
                <label><b>174. 现在地址（若在美国或是加拿大请填写详细地址)</b></label>
                <input type="text" placeholder="输入地址" name="children2-address">
                <br>
                <h5>十七. 兄弟姐妹信息</h5>
                <hr>
                <label><b>兄弟姐妹1信息</b></label>
                <br>
                <label><b>175. 姓名</b></label>
                <input type="text" placeholder="输入姓名" name="sibling1-name">
                <br>
                <label><b>176. 生日</b></label>
                <input type="text" placeholder="输入生日" name="sibling1-birthday">
                <br>
                <label><b>177. 出生城市</b></label>
                <input type="text" placeholder="输入出生城市" name="sibling1-born-city">
                <br>
                <label><b>178. 婚姻状况</b></label>
    			<br>
    			<div class="stuff-container">
    				<label><input type="radio" name="sibling1-m-status" value="已婚"> 已婚</label>
					<label><input type="radio" name="sibling1-m-status" value="未婚"> 未婚</label>
					<label><input type="radio" name="sibling1-m-status" value="离异"> 离异</label>
    			</div>
    			<br>
                <label><b>179. 和申请人关系</b></label>
                <input type="text" placeholder="输入和申请人关系" name="sibling1-relationship">
                <br>
				<label><b>180. 现在的职业</b></label>
                <input type="text" placeholder="输入职业" name="sibling1-job">
                <br>
                <label><b>181. 现在地址（若在美国或是加拿大请填写详细地址)</b></label>
                <input type="text" placeholder="输入地址" name="sibling1-address">
                <br>
                <label><b>兄弟姐妹2信息</b></label>
                <br>
                <label><b>182. 姓名</b></label>
                <input type="text" placeholder="输入姓名" name="sibling2-name">
                <br>
                <label><b>183. 生日</b></label>
                <input type="text" placeholder="输入生日" name="sibling2-birthday">
                <br>
                <label><b>184. 出生城市</b></label>
                <input type="text" placeholder="输入出生城市" name="sibling2-born-city">
                <br>
                <label><b>185. 婚姻状况</b></label>
    			<br>
    			<div class="stuff-container">
    				<label><input type="radio" name="sibling2-m-status" value="已婚"> 已婚</label>
					<label><input type="radio" name="sibling2-m-status" value="未婚"> 未婚</label>
					<label><input type="radio" name="sibling2-m-status" value="离异"> 离异</label>
    			</div>
    			<br>
                <label><b>186. 和申请人关系</b></label>
                <input type="text" placeholder="输入和申请人关系" name="sibling2-relationship">
                <br>
				<label><b>187. 现在的职业</b></label>
                <input type="text" placeholder="输入职业" name="sibling2-job">
                <br>
                <label><b>188. 现在地址（若在美国或是加拿大请填写详细地址)</b></label>
                <input type="text" placeholder="输入地址" name="sibling2-address">
                <br>
                <h5>十八. 个人资产</h5>
                <hr>
                <label><b>房产1信息</b></label>
                <br>
                <label><b>189. 房产所在城市</b></label>
                <input type="text" placeholder="输入所在城市" name="property1-city">
                <br>
                <label><b>190. 房屋面积 (以房产证上数据为准)</b></label>
                <input type="text" placeholder="输入房屋平米数" name="property1-square-meter">
                <br>
                <label><b>191. 房产预估价值 (人民币)</b></label>
                <input type="text" placeholder="输入房屋价值" name="property1-price">
                <br>
                <label><b>192. 备注</b></label>
                <input type="text" placeholder="输入备注" name="property1-comment">
                <br>
                <label><b>房产2信息</b></label>
                <br>
                <label><b>193. 房产所在城市</b></label>
                <input type="text" placeholder="输入所在城市" name="property2-city">
                <br>
                <label><b>194. 房屋面积 (以房产证上数据为准)</b></label>
                <input type="text" placeholder="输入房屋平米数" name="property2-square-meter">
                <br>
                <label><b>195. 房产预估价值 (人民币)</b></label>
                <input type="text" placeholder="输入房屋价值" name="property2-price">
                <br>
                <label><b>196. 备注</b></label>
                <input type="text" placeholder="输入备注" name="property2-comment">
                <br>
    			<button type="submit" class="btn-save" onclick="window.location.href='confirm.html';">保存，稍后完成</button>
    			<hr>
    			<button type="submit" class="btn-submit">提交，确认无误</button>
			</form>
		</div>
	</div>
</body>
</html>
