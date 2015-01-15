<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>问卷调查</title>

		<link href="questionare/style.css" rel="stylesheet" type="text/css">
		<script src="questionare/common.js"></script>
		<style type="text/css">
			.STYLE1 {
				color: #000000
			}

			#votePagingDiv {
				width: 200px;
				margin: auto;
				line-height: 40px;
				CLEAR: both
			}

			#votePagingDiv a {
				border: #eee 1px solid;
				padding: 3px 5px;
				TEXT-DECORATION: none
			}

			li {
				margin: 0px;
				padding: 0px;
				list-style-type: none
			}

			ul {
				margin: 0px;
				padding: 0px;
			}
		</style>		
	</head>
	<body>
		<link rel="stylesheet" href="questionare/main.css" type="text/css">

		<br>
		<table width="950" border="0" align="center" cellpadding="0"
			cellspacing="0" style="border: 1px solid #BDD9E6;">
			<tbody>
				<tr>
					<td width="10" valign="top">
						<img src="images/left.jpg" width="10" height="228" border="0">
					</td>
					<td width="925" valign="top">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tbody>
								<tr>
									<td height="30"></td>
								</tr>
								<tr>
									<td height="60" align="center" class="blue_title">
										大学计算机基础问卷调查
									</td>
								</tr>
							</tbody>
						</table>
						<div id="public-nav" class="clear_fix">
							<ul class="n1" id="ulHeader">
								<li ><a>学生问卷</a><span></span></li>
								<li class="hover"><a href="t_questionare_result.php" hidefocus="true" onclick="sdnClick(12225)" title="教师用户">教师问卷</a><span></span></li>
							</ul>

						</div>
						<br>

						<form name="form_81" method="post" onsubmit="return checkForm1(this);" action="sqSubmit.php">
							<div id="voteLst">
								<?php
									include "../sqlclass/sqlclass.php";
									//获取老师总人数
									$sql_teacher_num = "select count(ID) as all_num from t_questionare_tb";
									$mysql = new mySql();
									$mysql->query($sql_teacher_num);
									$res_teacher_num = $mysql->getnext();
									echo "&nbsp; &nbsp老师问卷总数为：".$res_teacher_num->all_num;

									if($res_teacher_num->all_num!=0)
									{
										//问题1-A
										$sql_question1_A = "select count(*) as count_A from t_questionare_tb where Q1='A'";
										$mysql->query($sql_question1_A);
										$res_question1_A = $mysql->getnext();
										$question1_A_percent = $res_question1_A->count_A / $res_teacher_num->all_num * 100;
										//问题1-B
										$sql_question1_B = "select count(*) as count_B from t_questionare_tb where Q1='B'";
										$mysql->query($sql_question1_B);
										$res_question1_B = $mysql->getnext();
										$question1_B_percent = $res_question1_B->count_B / $res_teacher_num->all_num * 100;
										//问题1-C
										$sql_question1_C = "select count(*) as count_C from t_questionare_tb where Q1='C'";
										$mysql->query($sql_question1_C);
										$res_question1_C = $mysql->getnext();
										$question1_C_percent = $res_question1_C->count_C / $res_teacher_num->all_num * 100;
										//问题1-D
										$sql_question1_D = "select count(*) as count_D from t_questionare_tb where Q1='D'";
										$mysql->query($sql_question1_D);
										$res_question1_D = $mysql->getnext();
										$question1_D_percent = $res_question1_D->count_D / $res_teacher_num->all_num * 100;
							
										//问题2-选项A
										$sql_question2_A = "select count(*) as count_A from t_questionare_tb where Q2='A'";
										$mysql->query($sql_question2_A);
										$res_question2_A = $mysql->getnext();
										$question2_A_percent = $res_question2_A->count_A / $res_teacher_num->all_num * 100;
										//问题2-选项B
										$sql_question2_B = "select count(*) as count_B from t_questionare_tb where Q2='B'";
										$mysql->query($sql_question2_B);
										$res_question2_B = $mysql->getnext();
										$question2_B_percent = $res_question2_B->count_B / $res_teacher_num->all_num * 100;
										//问题2-选项C
										$sql_question2_C = "select count(*) as count_C from t_questionare_tb where Q2='C'";
										$mysql->query($sql_question2_C);
										$res_question2_C = $mysql->getnext();
										$question2_C_percent = $res_question2_C->count_C / $res_teacher_num->all_num * 100;

										//问题3-A
										$sql_question3_A = "select count(*) as count_A from t_questionare_tb where Q3='A'";
										$mysql->query($sql_question3_A);
										$res_question3_A = $mysql->getnext();
										$question3_A_percent = $res_question3_A->count_A / $res_teacher_num->all_num * 100;
										//问题3-B
										$sql_question3_B = "select count(*) as count_B from t_questionare_tb where Q3='B'";
										$mysql->query($sql_question3_B);
										$res_question3_B = $mysql->getnext();
										$question3_B_percent = $res_question3_B->count_B / $res_teacher_num->all_num * 100;
										//问题3-C
										$sql_question3_C = "select count(*) as count_C from t_questionare_tb where Q3='C'";
										$mysql->query($sql_question3_C);
										$res_question3_C = $mysql->getnext();
										$question3_C_percent = $res_question3_C->count_C / $res_teacher_num->all_num * 100;
										//问题3-D
										$sql_question3_D = "select count(*) as count_D from t_questionare_tb where Q3='D'";
										$mysql->query($sql_question3_D);
										$res_question3_D = $mysql->getnext();
										$question3_D_percent = $res_question3_D->count_D / $res_teacher_num->all_num * 100;
										

										//问题4-A
										$sql_question4_A = "select count(*) as count_A from t_questionare_tb where Q4='A'";
										$mysql->query($sql_question4_A);
										$res_question4_A = $mysql->getnext();
										$question4_A_percent = $res_question4_A->count_A / $res_teacher_num->all_num * 100;
										//问题4-B
										$sql_question4_B = "select count(*) as count_B from t_questionare_tb where Q4='B'";
										$mysql->query($sql_question4_B);
										$res_question4_B = $mysql->getnext();
										$question4_B_percent = $res_question4_B->count_B / $res_teacher_num->all_num * 100;
										//问题4-C
										$sql_question4_C = "select count(*) as count_C from t_questionare_tb where Q4='C'";
										$mysql->query($sql_question4_C);
										$res_question4_C = $mysql->getnext();
										$question4_C_percent = $res_question4_C->count_C / $res_teacher_num->all_num * 100;

										//问题5-A
										$sql_question5_A = "select count(*) as count_A from t_questionare_tb where Q5='A'";
										$mysql->query($sql_question5_A);
										$res_question5_A = $mysql->getnext();
										$question5_A_percent = $res_question5_A->count_A / $res_teacher_num->all_num * 100;
										//问题5-B
										$sql_question5_B = "select count(*) as count_B from t_questionare_tb where Q5='B'";
										$mysql->query($sql_question5_B);
										$res_question5_B = $mysql->getnext();
										$question5_B_percent = $res_question5_B->count_B / $res_teacher_num->all_num * 100;
										//问题5-C
										$sql_question5_C = "select count(*) as count_A from t_questionare_tb where Q5='C'";
										$mysql->query($sql_question5_C);
										$res_question5_C = $mysql->getnext();
										$question5_C_percent = $res_question5_C->count_A / $res_teacher_num->all_num * 100;

										//问题6-A
										$sql_question6_A = "select count(*) as count_A from t_questionare_tb where Q6 like '%A%'";
										$mysql->query($sql_question6_A);
										$res_question6_A = $mysql->getnext();
										$question6_A_percent = $res_question6_A->count_A / $res_teacher_num->all_num * 100;
										//问题6-B
										$sql_question6_B = "select count(*) as count_B from t_questionare_tb where Q6 like '%B%'";
										$mysql->query($sql_question6_B);
										$res_question6_B = $mysql->getnext();
										$question6_B_percent = $res_question6_B->count_B / $res_teacher_num->all_num * 100;
										//问题6-C
										$sql_question6_C = "select count(*) as count_C from t_questionare_tb where Q6 like '%C%'";
										$mysql->query($sql_question6_C);
										$res_question6_C = $mysql->getnext();
										$question6_C_percent = $res_question6_C->count_C / $res_teacher_num->all_num * 100;
										//问题6-D
										$sql_question6_D = "select count(*) as count_D from t_questionare_tb where Q6 like '%D%'";
										$mysql->query($sql_question6_D);
										$res_question6_D = $mysql->getnext();
										$question6_D_percent = $res_question6_D->count_D / $res_teacher_num->all_num * 100;
									
										//问题8-A
										$sql_question8_A = "select count(*) as count_A from t_questionare_tb where Q8='A'";
										$mysql->query($sql_question8_A);
										$res_question8_A = $mysql->getnext();
										$question8_A_percent = $res_question8_A->count_A / $res_teacher_num->all_num * 100;
										//问题8-B
										$sql_question8_B = "select count(*) as count_B from t_questionare_tb where Q8='B'";
										$mysql->query($sql_question8_B);
										$res_question8_B = $mysql->getnext();
										$question8_B_percent = $res_question8_B->count_B / $res_teacher_num->all_num * 100;
										//问题8-C
										$sql_question8_C = "select count(*) as count_C from t_questionare_tb where Q8='C'";
										$mysql->query($sql_question8_C);
										$res_question8_C = $mysql->getnext();
										$question8_C_percent = $res_question8_C->count_C / $res_teacher_num->all_num * 100;
										//问题8-D
										$sql_question8_D = "select count(*) as count_D from t_questionare_tb where Q8='D'";
										$mysql->query($sql_question8_D);
										$res_question8_D = $mysql->getnext();
										$question8_D_percent = $res_question8_D->count_D / $res_teacher_num->all_num * 100;
								
										//问题9-A
										$sql_question9_A = "select count(*) as count_A from t_questionare_tb where Q9='A'";
										$mysql->query($sql_question9_A);
										$res_question9_A = $mysql->getnext();
										$question9_A_percent = $res_question9_A->count_A / $res_teacher_num->all_num * 100;
										//问题9-B
										$sql_question9_B = "select count(*) as count_B from t_questionare_tb where Q9='B'";
										$mysql->query($sql_question9_B);
										$res_question9_B = $mysql->getnext();
										$question9_B_percent = $res_question9_B->count_B / $res_teacher_num->all_num * 100;
										//问题9-C
										$sql_question9_C = "select count(*) as count_C from t_questionare_tb where Q9='C'";
										$mysql->query($sql_question9_C);
										$res_question9_C = $mysql->getnext();
										$question9_C_percent = $res_question9_C->count_C / $res_teacher_num->all_num * 100;
										//问题9-D
										$sql_question9_D = "select count(*) as count_D from t_questionare_tb where Q9='D'";
										$mysql->query($sql_question9_D);
										$res_question9_D = $mysql->getnext();
										$question9_D_percent = $res_question9_D->count_D / $res_teacher_num->all_num * 100;
										
										//问题10-A
										$sql_question10_A = "select count(*) as count_A from t_questionare_tb where Q10='A'";
										$mysql->query($sql_question10_A);
										$res_question10_A = $mysql->getnext();
										$question10_A_percent = $res_question10_A->count_A / $res_teacher_num->all_num * 100;
										//问题10-B
										$sql_question10_B = "select count(*) as count_B from t_questionare_tb where Q10='B'";
										$mysql->query($sql_question10_B);
										$res_question10_B = $mysql->getnext();
										$question10_B_percent = $res_question10_B->count_B / $res_teacher_num->all_num * 100;
										//问题10-C
										$sql_question10_C = "select count(*) as count_C from t_questionare_tb where Q10='C'";
										$mysql->query($sql_question10_C);
										$res_question10_C = $mysql->getnext();
										$question10_C_percent = $res_question10_C->count_C / $res_teacher_num->all_num * 100;

										//问题11-A
										$sql_question11_A = "select count(*) as count_A from t_questionare_tb where Q11='A'";
										$mysql->query($sql_question11_A);
										$res_question11_A = $mysql->getnext();
										$question11_A_percent = $res_question11_A->count_A / $res_teacher_num->all_num * 100;
										//问题11-B
										$sql_question11_B = "select count(*) as count_B from t_questionare_tb where Q11='B'";
										$mysql->query($sql_question11_B);
										$res_question11_B = $mysql->getnext();
										$question11_B_percent = $res_question11_B->count_B / $res_teacher_num->all_num * 100;
										//问题11-C
										$sql_question11_C = "select count(*) as count_A from t_questionare_tb where Q11='C'";
										$mysql->query($sql_question11_C);
										$res_question11_C = $mysql->getnext();
										$question11_C_percent = $res_question11_C->count_A / $res_teacher_num->all_num * 100;
										//问题11-D
										$sql_question11_D = "select count(*) as count_B from t_questionare_tb where Q11='D'";
										$mysql->query($sql_question11_D);
										$res_question11_D = $mysql->getnext();
										$question11_D_percent = $res_question11_D->count_B / $res_teacher_num->all_num * 100;

										//问题12-A
										$sql_question12_A = "select count(*) as count_A from t_questionare_tb where Q12 like '%A%'";
										$mysql->query($sql_question12_A);
										$res_question12_A = $mysql->getnext();
										$question12_A_percent = $res_question12_A->count_A / $res_teacher_num->all_num * 100;
										//问题12-B
										$sql_question12_B = "select count(*) as count_B from t_questionare_tb where Q12 like '%B%'";
										$mysql->query($sql_question12_B);
										$res_question12_B = $mysql->getnext();
										$question12_B_percent = $res_question12_B->count_B / $res_teacher_num->all_num * 100;
										//问题12-C
										$sql_question12_C = "select count(*) as count_C from t_questionare_tb where Q12 like '%C%'";
										$mysql->query($sql_question12_C);
										$res_question12_C = $mysql->getnext();
										$question12_C_percent = $res_question12_C->count_C / $res_teacher_num->all_num * 100;
										//问题12-D
										$sql_question12_D = "select count(*) as count_D from t_questionare_tb where Q12 like '%D%'";
										$mysql->query($sql_question12_D);
										$res_question12_D = $mysql->getnext();
										$question12_D_percent = $res_question12_D->count_D / $res_teacher_num->all_num * 100;
										//问题12-E
										$sql_question12_E = "select count(*) as count_E from t_questionare_tb where Q12 like '%E%'";
										$mysql->query($sql_question12_E);
										$res_question12_E = $mysql->getnext();
										$question12_E_percent = $res_question12_E->count_E/ $res_teacher_num->all_num * 100;
										//问题12-F
										$sql_question12_F = "select count(*) as count_F from t_questionare_tb where Q12 like '%F%'";
										$mysql->query($sql_question12_F);
										$res_question12_F = $mysql->getnext();
										$question12_F_percent = $res_question12_F->count_F / $res_teacher_num->all_num * 100;
										//问题12-G
										$sql_question12_G = "select count(*) as count_G from t_questionare_tb where Q12 like '%G%'";
										$mysql->query($sql_question12_G);
										$res_question12_G = $mysql->getnext();
										$question12_G_percent = $res_question12_G->count_G / $res_teacher_num->all_num * 100;
									}
									else 
									{
										//echo "&nbsp; &nbsp老师问卷总数为：".$res_teacher_num->all_num;
									}
																

									$mysql->close();										
								?>
								<div class="voteitem" style="display: block" id="item_719">
									<span class="votetitle STYLE1">
										Q1:您从事“大学计算机基础”或相关课程的时间？
									</span><br>

									<p>
										A．1-2年
											<?php if($res_teacher_num->all_num!=0){ echo round($question1_A_percent, 2)."%";} 
												else {echo "0%";}?><br><br>
										B．3-5年
											<?php if($res_teacher_num->all_num!=0){ echo round($question1_B_percent, 2)."%";} 
												else {echo "0%";}?><br><br>
										C．6-10年
											<?php if($res_teacher_num->all_num!=0){ echo round($question1_C_percent, 2)."%";} 
												else {echo "0%";}?><br><br>
										D．10年以上
											<?php if($res_teacher_num->all_num!=0){ echo round($question1_D_percent, 2)."%";} 
												else {echo "0%";}?><br><br>
									</p>
								</div>

								<div class="voteitem" style="display: block" id="item_720">
									<span class="votetitle STYLE1">
										Q2:您的个人教育背景是？
									</span><br>

									<p>
										A． 计算机专业
											<?php if($res_teacher_num->all_num!=0){ echo round($question2_A_percent, 2)."%";} 
												else {echo "0%";}?><br><br>
										B． 非计算机专业工科
											 <?php if($res_teacher_num->all_num!=0){ echo round($question2_B_percent, 2)."%";} 
												else {echo "0%";}?><br><br>
										C．非计算机专业文科
											<?php if($res_teacher_num->all_num!=0){ echo round($question2_C_percent, 2)."%";} 
												else {echo "0%";}?><br><br>
									</p>
								</div>
																
								<div class="voteitem" style="display: block;" id="item_721">
									<span class="votetitle STYLE1">
										Q3:您对目前“大学计算机基础”课程在高校中开展现状的评价是？
									</span><br>

									<p>
										A．开展十分顺利 
											<?php if($res_teacher_num->all_num!=0){ echo round($question3_A_percent, 2)."%";} 
												else {echo "0%";}?><br><br>
										B．开展顺利但也面临一些困难
											<?php if($res_teacher_num->all_num!=0){ echo round($question3_B_percent, 2)."%";} 
												else {echo "0%";}?><br><br>
										C．开展比较困难
											<?php if($res_teacher_num->all_num!=0){ echo round($question3_C_percent, 2)."%";} 
												else {echo "0%";}?><br><br>
										D.如有困难，请具体说明
											<?php if($res_teacher_num->all_num!=0){ echo round($question3_D_percent, 2)."%";} 
												else {echo "0%";}?><br><br>
									</p>
								</div>

								<div class="voteitem" style="display: block;" id="item_722">
									<span class="votetitle STYLE1">
										Q4:您认为目前“大学计算机基础”课程在大学公共基础课程中的地位是？
									</span><br>

									<p>
										A． 与高数、物理和英语等基础课程一样，不可或缺
											<?php if($res_teacher_num->all_num!=0){ echo round($question4_A_percent, 2)."%";} 
												else {echo "0%";}?><br><br>
										B． 是重要的基础课程，但不如高数、物理和英语
											<?php if($res_teacher_num->all_num!=0){ echo round($question4_B_percent, 2)."%";} 
												else {echo "0%";}?><br><br>
										C．不太受重视，可有可无
											<?php if($res_teacher_num->all_num!=0){ echo round($question4_C_percent, 2)."%";} 
												else {echo "0%";}?><br><br>
									</p>
								</div>

								<div class="voteitem" style="display: block" id="item_723">
									<span class="votetitle STYLE1">
										Q5:您认为学生目前对“大学计算机基础”课程的态度是？
									</span><br>

									<p>
										A． 认为其实非常重要的基础课程，受益良多
											<?php if($res_teacher_num->all_num!=0){ echo round($question5_A_percent, 2)."%";} 
												else {echo "0%";}?><br><br>
										B． 对计算机感兴趣，希望能从课程中学会如何使用
											<?php if($res_teacher_num->all_num!=0){ echo round($question5_B_percent, 2)."%";} 
												else {echo "0%";}?><br><br>
										C．因为是必修课程，不得不学
											<?php if($res_teacher_num->all_num!=0){ echo round($question5_C_percent, 2)."%";} 
												else {echo "0%";}?><br><br>
									</p>
								</div>

								<div class="voteitem" style="display: block" id="item_724">
									<span class="votetitle STYLE1">
										Q6:您认为“大学计算机基础”课程的主要目标应该是:【可多选】
									</span><br>

									<p>
										A． 教会学生如何使用计算机及常用软件工具
											<?php if($res_teacher_num->all_num!=0){ echo round($question6_A_percent, 2)."%";} 
												else {echo "0%";}?><br><br>
										B． 培养学生使用计算机进行信息检索和处理的能力
											<?php if($res_teacher_num->all_num!=0){ echo round($question6_B_percent, 2)."%";} 
												else {echo "0%";}?><br><br>
										C．培养学生运用计算机科学的基础概念求解问题的能力
											<?php if($res_teacher_num->all_num!=0){ echo round($question6_C_percent, 2)."%";} 
												else {echo "0%";}?><br><br>
										D．其他，请具体说明
											<?php if($res_teacher_num->all_num!=0){ echo round($question6_D_percent, 2)."%";} 
												else {echo "0%";}?><br><br>
									</p>
								</div>

								<div class="voteitem" style="display: block;" id="item_725">
									<span class="votetitle STYLE1">
										Q7:您认为目前的“大学计算机基础”课程可以实现问题6中的那些目标？
									</span><br>

									<input type="text" size="80" name="text725">
									<span class="STYLE1">
										<br><br>
									</span>
								</div>

								<div class="voteitem" style="display: block" id="item_726">
									<span class="votetitle STYLE1">
										Q8:您认为自己对“计算思维（Computational Thinking）”这一概念的了解程度是？
									</span><br>
									<p>
										A． 非常了解
											<?php if($res_teacher_num->all_num!=0){ echo round($question8_A_percent, 2)."%";} 
												else {echo "0%";}?><br><br>
										B． 有一定程度的了解
											<?php if($res_teacher_num->all_num!=0){ echo round($question8_B_percent, 2)."%";} 
												else {echo "0%";}?><br><br>
										C．听说过这一概念
											<?php if($res_teacher_num->all_num!=0){ echo round($question8_C_percent, 2)."%";} 
												else {echo "0%";}?><br><br>
										D．从未听说过这一概念
											<?php if($res_teacher_num->all_num!=0){ echo round($question8_D_percent, 2)."%";} 
												else {echo "0%";}?><br><br>
									</p>
								</div>

								<div class="voteitem" style="display: block;" id="item_727">
									<span class="votetitle STYLE1">
										Q9:您如何看待“计算思维”？
									</span><br>
									<p>									
										A.“计算思维”是对计算机科学主要思想和方法论的总结，意义重大
											<?php if($res_teacher_num->all_num!=0){ echo round($question9_A_percent, 2)."%";} 
												else {echo "0%";}?><br><br>
										B.“计算思维”有一定的意义，但目前范畴仍不明确
											<?php if($res_teacher_num->all_num!=0){ echo round($question9_B_percent, 2)."%";} 
												else {echo "0%";}?><br><br>
										C.“计算思维”只是一个概念上的炒作，没有实际意义
											<?php if($res_teacher_num->all_num!=0){ echo round($question9_C_percent, 2)."%";} 
												else {echo "0%";}?><br><br>
										D.其他，请具体说明
											<?php if($res_teacher_num->all_num!=0){ echo round($question9_D_percent, 2)."%";} 
												else {echo "0%";}?><br><br>
									</p>
								</div>

								<div class="voteitem" style="display: block" id="item_728">
									<span class="votetitle STYLE1">
										Q10:就目前国内、外多位专家提出的应以“计算思维”的培养作为“计算机基础”课程的主要目标，您的态度是？
									</span><br>
									<p>					
										A． 非常赞同
											<?php if($res_teacher_num->all_num!=0){ echo round($question10_A_percent, 2)."%";} 
												else {echo "0%";}?><br><br>
										B． 赞同
											<?php if($res_teacher_num->all_num!=0){ echo round($question10_B_percent, 2)."%";} 
												else {echo "0%";}?><br><br>
										C． 不赞同
											<?php if($res_teacher_num->all_num!=0){ echo round($question10_C_percent, 2)."%";} 
												else {echo "0%";}?><br><br>
									</p>
								</div>

								<div class="voteitem" style="display: block" id="item_729">
									<span class="votetitle STYLE1">
										Q11:您如何看待将“计算思维”与“大学计算机基础”结合？
									</span><br>
									<p>									
										A．很有意义，能更好地促进课程的发展，提高课程地位
											<?php if($res_teacher_num->all_num!=0){ echo round($question11_A_percent, 2)."%";} 
												else {echo "0%";}?><br><br>
										B．有一定的意义，能够在一定程度上解决目前课程遇到的困难
											<?php if($res_teacher_num->all_num!=0){ echo round($question11_B_percent, 2)."%";} 
												else {echo "0%";}?><br><br>
										C．没有什么意义
											<?php if($res_teacher_num->all_num!=0){ echo round($question11_C_percent, 2)."%";} 
												else {echo "0%";}?><br><br>
										D．其他，请具体说明
											<?php if($res_teacher_num->all_num!=0){ echo round($question11_D_percent, 2)."%";} 
												else {echo "0%";}?><br><br>
									</p>
								</div>

								<div class="voteitem" style="display: block" id="item_730">
									<span class="votetitle STYLE1">
										Q12:您认为目前将“计算思维”的培养作为“大学计算机基础”课程的主要目标，主要的障碍在于:【可多选】
									</span><br>
									<p>									
										A．学生的基础
											<?php if($res_teacher_num->all_num!=0){ echo round($question12_A_percent, 2)."%";} 
												else {echo "0%";}?><br><br>
										B．教师的认识和能力
											<?php if($res_teacher_num->all_num!=0){ echo round($question12_B_percent, 2)."%";} 
												else {echo "0%";}?><br><br>
										C．教学内容的改革
											<?php if($res_teacher_num->all_num!=0){ echo round($question12_C_percent, 2)."%";} 
												else {echo "0%";}?><br><br>
										D．学生的接受度
											<?php if($res_teacher_num->all_num!=0){ echo round($question12_D_percent, 2)."%";} 
												else {echo "0%";}?><br><br>
										E．没有合适的教材
											<?php if($res_teacher_num->all_num!=0){ echo round($question12_E_percent, 2)."%";} 
												else {echo "0%";}?><br><br>
										F．课程评价体系
											<?php if($res_teacher_num->all_num!=0){ echo round($question12_F_percent, 2)."%";} 
												else {echo "0%";}?><br><br>
										G．其他，请具体说明
											<?php if($res_teacher_num->all_num!=0){ echo round($question12_G_percent, 2)."%";} 
												else {echo "0%";}?><br><br>
									</p>
								</div>

								<div class="voteitem" style="display: block" id="item_731">
									<span class="votetitle STYLE1">		
										Q13：对于基于“计算思维”的“大学计算机基础”课程改革，您的意见和建议:
									</span><br>
										<input type="text" size="80" name="text731">
											<span class="STYLE1">
												<br><br>
											</span>
								</div>	
							</div>

									<input type="hidden" name="version" value="6227">
									<input type="hidden" name="channelID" value="1141">
								</div>
								<input type="hidden" id="txtUseTime" name="txtUseTime"
								value="51">
								<div style="margin: 35px 0 20px; text-align: center;">
									<input type="hidden" name="SurveyID" value="81">
									
									&nbsp;&nbsp;
								</div>
							</form>
						</td>
						<td width="13" valign="top">
							<img src="images/right.jpg" width="10" height="228" border="0">
						</td>
					</tr>
				</tbody>
			</table>
			<script>				
				function go(vote715) {
					window.location.href = vote715;
				}
			</script>
		</body>
	</html>