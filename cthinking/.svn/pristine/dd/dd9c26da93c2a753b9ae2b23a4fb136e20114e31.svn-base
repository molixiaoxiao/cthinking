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
								<li class="hover"><a href="s_questionare_result.php" hidefocus="true" title="学生用户" onclick="sdnClick(12224)">学生问卷</a><span></span></li>
								<li><a>教师问卷</a><span></span></li>
							</ul>

						</div>
						<br>

						<form name="form_81" method="post" onsubmit="return checkForm1(this);" action="sqSubmit.php">
							<div id="voteLst">
								<?php
									include "../sqlclass/sqlclass.php";
									//获取学生总人数
									$sql_student_num = "select count(ID) as all_num from s_questionare_tb";
									$mysql = new mySql();
									$mysql->query($sql_student_num);
									$res_student_num = $mysql->getnext();
									echo "&nbsp; &nbsp学生问卷总数为：".$res_student_num->all_num;

									if($res_student_num->all_num!=0)
									{
										//问题1-A
										$sql_question1_A = "select count(*) as count_A from s_questionare_tb where Q1='A'";
										$mysql->query($sql_question1_A);
										$res_question1_A = $mysql->getnext();
										$question1_A_percent = $res_question1_A->count_A / $res_student_num->all_num * 100;
										//问题1-B
										$sql_question1_B = "select count(*) as count_B from s_questionare_tb where Q1='B'";
										$mysql->query($sql_question1_B);
										$res_question1_B = $mysql->getnext();
										$question1_B_percent = $res_question1_B->count_B / $res_student_num->all_num * 100;
							
										//问题2-选项A
										$sql_question2_A = "select count(*) as count_A from s_questionare_tb where Q2='A'";
										$mysql->query($sql_question2_A);
										$res_question2_A = $mysql->getnext();
										$question2_A_percent = $res_question2_A->count_A / $res_student_num->all_num * 100;
										//问题2-选项B
										$sql_question2_B = "select count(*) as count_B from s_questionare_tb where Q2='B'";
										$mysql->query($sql_question2_B);
										$res_question2_B = $mysql->getnext();
										$question2_B_percent = $res_question2_B->count_B / $res_student_num->all_num * 100;

										//问题3-A
										$sql_question3_A = "select count(*) as count_A from s_questionare_tb where Q3 like '%A%'";
										$mysql->query($sql_question3_A);
										$res_question3_A = $mysql->getnext();
										$question3_A_percent = $res_question3_A->count_A / $res_student_num->all_num * 100;
										//问题3-B
										$sql_question3_B = "select count(*) as count_B from s_questionare_tb where Q3 like '%B%'";
										$mysql->query($sql_question3_B);
										$res_question3_B = $mysql->getnext();
										$question3_B_percent = $res_question3_B->count_B / $res_student_num->all_num * 100;
										//问题3-C
										$sql_question3_C = "select count(*) as count_C from s_questionare_tb where Q3 like '%C%'";
										$mysql->query($sql_question3_C);
										$res_question3_C = $mysql->getnext();
										$question3_C_percent = $res_question3_C->count_C / $res_student_num->all_num * 100;
										//问题3-D
										$sql_question3_D = "select count(*) as count_D from s_questionare_tb where Q3 like '%D%'";
										$mysql->query($sql_question3_D);
										$res_question3_D = $mysql->getnext();
										$question3_D_percent = $res_question3_D->count_D / $res_student_num->all_num * 100;
										//问题3-E
										$sql_question3_E = "select count(*) as count_E from s_questionare_tb where Q3 like '%E%'";
										$mysql->query($sql_question3_E);
										$res_question3_E = $mysql->getnext();
										$question3_E_percent = $res_question3_E->count_E / $res_student_num->all_num * 100;
										//问题3-F
										$sql_question3_F = "select count(*) as count_F from s_questionare_tb where Q3 like '%F%'";
										$mysql->query($sql_question3_F);
										$res_question3_F = $mysql->getnext();
										$question3_F_percent = $res_question3_F->count_F / $res_student_num->all_num * 100;
										//问题3-G
										$sql_question3_G = "select count(*) as count_G from s_questionare_tb where Q3 like '%G%'";
										$mysql->query($sql_question3_G);
										$res_question3_G = $mysql->getnext();
										$question3_G_percent = $res_question3_G->count_G / $res_student_num->all_num * 100;
										//问题3-H
										$sql_question3_H = "select count(*) as count_H from s_questionare_tb where Q3 like '%H%'";
										$mysql->query($sql_question3_H);
										$res_question3_H = $mysql->getnext();
										$question3_H_percent = $res_question3_H->count_H / $res_student_num->all_num * 100;
										//问题3-I
										$sql_question3_I = "select count(*) as count_I from s_questionare_tb where Q3 like '%I%'";
										$mysql->query($sql_question3_I);
										$res_question3_I = $mysql->getnext();
										$question3_I_percent = $res_question3_I->count_I / $res_student_num->all_num * 100;
										//问题3-J
										$sql_question3_J = "select count(*) as count_J from s_questionare_tb where Q3 like '%J%'";
										$mysql->query($sql_question3_J);
										$res_question3_J = $mysql->getnext();
										$question3_J_percent = $res_question3_J->count_J / $res_student_num->all_num * 100;
										//问题3-K
										$sql_question3_K = "select count(*) as count_K from s_questionare_tb where Q3 like '%K%'";
										$mysql->query($sql_question3_K);
										$res_question3_K = $mysql->getnext();
										$question3_K_percent = $res_question3_K->count_K / $res_student_num->all_num * 100;
										//问题3-L
										$sql_question3_L = "select count(*) as count_L from s_questionare_tb where Q3 like '%L%'";
										$mysql->query($sql_question3_L);
										$res_question3_L = $mysql->getnext();
										$question3_L_percent = $res_question3_L->count_L / $res_student_num->all_num * 100;
										//问题3-M
										$sql_question3_M = "select count(*) as count_M from s_questionare_tb where Q3 like '%M%'";
										$mysql->query($sql_question3_M);
										$res_question3_M = $mysql->getnext();
										$question3_M_percent = $res_question3_M->count_M / $res_student_num->all_num * 100;

										//问题4-A
										$sql_question4_A = "select count(*) as count_A from s_questionare_tb where Q4 like '%A%'";
										$mysql->query($sql_question4_A);
										$res_question4_A = $mysql->getnext();
										$question4_A_percent = $res_question4_A->count_A / $res_student_num->all_num * 100;
										//问题4-B
										$sql_question4_B = "select count(*) as count_B from s_questionare_tb where Q4 like '%B%'";
										$mysql->query($sql_question4_B);
										$res_question4_B = $mysql->getnext();
										$question4_B_percent = $res_question4_B->count_B / $res_student_num->all_num * 100;
										//问题4-C
										$sql_question4_C = "select count(*) as count_C from s_questionare_tb where Q4 like '%C%'";
										$mysql->query($sql_question4_C);
										$res_question4_C = $mysql->getnext();
										$question4_C_percent = $res_question4_C->count_C / $res_student_num->all_num * 100;
										//问题4-D
										$sql_question4_D = "select count(*) as count_D from s_questionare_tb where Q4 like '%D%'";
										$mysql->query($sql_question4_D);
										$res_question4_D = $mysql->getnext();
										$question4_D_percent = $res_question4_D->count_D / $res_student_num->all_num * 100;
										//问题4-E
										$sql_question4_E = "select count(*) as count_E from s_questionare_tb where Q4 like '%E%'";
										$mysql->query($sql_question4_E);
										$res_question4_E = $mysql->getnext();
										$question4_E_percent = $res_question4_E->count_E / $res_student_num->all_num * 100;
										//问题4-F
										$sql_question4_F = "select count(*) as count_F from s_questionare_tb where Q4 like '%F%'";
										$mysql->query($sql_question4_F);
										$res_question4_F = $mysql->getnext();
										$question4_F_percent = $res_question4_F->count_F / $res_student_num->all_num * 100;
										//问题4-G
										$sql_question4_G = "select count(*) as count_G from s_questionare_tb where Q4 like '%G%'";
										$mysql->query($sql_question4_G);
										$res_question4_G = $mysql->getnext();
										$question4_G_percent = $res_question4_G->count_G / $res_student_num->all_num * 100;
										//问题4-H
										$sql_question4_H = "select count(*) as count_H from s_questionare_tb where Q4 like '%H%'";
										$mysql->query($sql_question4_H);
										$res_question4_H = $mysql->getnext();
										$question4_H_percent = $res_question4_H->count_H / $res_student_num->all_num * 100;

										//问题5-A
										$sql_question5_A = "select count(*) as count_A from s_questionare_tb where Q5='A'";
										$mysql->query($sql_question5_A);
										$res_question5_A = $mysql->getnext();
										$question5_A_percent = $res_question5_A->count_A / $res_student_num->all_num * 100;
										//问题5-B
										$sql_question5_B = "select count(*) as count_B from s_questionare_tb where Q5='B'";
										$mysql->query($sql_question5_B);
										$res_question5_B = $mysql->getnext();
										$question5_B_percent = $res_question5_B->count_B / $res_student_num->all_num * 100;
										//问题5-C
										$sql_question5_C = "select count(*) as count_A from s_questionare_tb where Q5='C'";
										$mysql->query($sql_question5_C);
										$res_question5_C = $mysql->getnext();
										$question5_C_percent = $res_question5_C->count_A / $res_student_num->all_num * 100;
										//问题5-D
										$sql_question5_D = "select count(*) as count_B from s_questionare_tb where Q5='D'";
										$mysql->query($sql_question5_D);
										$res_question5_D = $mysql->getnext();
										$question5_D_percent = $res_question5_D->count_B / $res_student_num->all_num * 100;

										//问题6-A
										$sql_question6_A = "select count(*) as count_A from s_questionare_tb where Q6='A'";
										$mysql->query($sql_question6_A);
										$res_question6_A = $mysql->getnext();
										$question6_A_percent = $res_question6_A->count_A / $res_student_num->all_num * 100;
										//问题6-B
										$sql_question6_B = "select count(*) as count_B from s_questionare_tb where Q6='B'";
										$mysql->query($sql_question6_B);
										$res_question6_B = $mysql->getnext();
										$question6_B_percent = $res_question6_B->count_B / $res_student_num->all_num * 100;
										//问题6-C
										$sql_question6_C = "select count(*) as count_C from s_questionare_tb where Q6='C'";
										$mysql->query($sql_question6_C);
										$res_question6_C = $mysql->getnext();
										$question6_C_percent = $res_question6_C->count_C / $res_student_num->all_num * 100;
									
										//问题7-A
										$sql_question7_A = "select count(*) as count_A from s_questionare_tb where Q7 like '%A%'";
										$mysql->query($sql_question7_A);
										$res_question7_A = $mysql->getnext();
										$question7_A_percent = $res_question7_A->count_A / $res_student_num->all_num * 100;
										//问题7-B
										$sql_question7_B = "select count(*) as count_B from s_questionare_tb where Q7 like '%B%'";
										$mysql->query($sql_question7_B);
										$res_question7_B = $mysql->getnext();
										$question7_B_percent = $res_question7_B->count_B / $res_student_num->all_num * 100;
										//问题7-C
										$sql_question7_C = "select count(*) as count_C from s_questionare_tb where Q7 like '%C%'";
										$mysql->query($sql_question7_C);
										$res_question7_C = $mysql->getnext();
										$question7_C_percent = $res_question7_C->count_C / $res_student_num->all_num * 100;
										//问题7-D
										$sql_question7_D = "select count(*) as count_D from s_questionare_tb where Q7 like '%D%'";
										$mysql->query($sql_question7_D);
										$res_question7_D = $mysql->getnext();
										$question7_D_percent = $res_question7_D->count_D / $res_student_num->all_num * 100;
										//问题7-E
										$sql_question7_E = "select count(*) as count_E from s_questionare_tb where Q7 like '%E%'";
										$mysql->query($sql_question7_E);
										$res_question7_E = $mysql->getnext();
										$question7_E_percent = $res_question7_E->count_E / $res_student_num->all_num * 100;
										//问题7-F
										$sql_question7_F = "select count(*) as count_F from s_questionare_tb where Q7 like '%F%'";
										$mysql->query($sql_question7_F);
										$res_question7_F = $mysql->getnext();
										$question7_F_percent = $res_question7_F->count_F / $res_student_num->all_num * 100;
										//问题7-G
										$sql_question7_G = "select count(*) as count_G from s_questionare_tb where Q7 like '%G%'";
										$mysql->query($sql_question7_G);
										$res_question7_G = $mysql->getnext();
										$question7_G_percent = $res_question7_G->count_G / $res_student_num->all_num * 100;
										//问题7-H
										$sql_question7_H = "select count(*) as count_H from s_questionare_tb where Q7 like '%H%'";
										$mysql->query($sql_question7_H);
										$res_question7_H = $mysql->getnext();
										$question7_H_percent = $res_question7_H->count_H / $res_student_num->all_num * 100;
										//问题7-I
										$sql_question7_I = "select count(*) as count_I from s_questionare_tb where Q7 like '%I%'";
										$mysql->query($sql_question7_I);
										$res_question7_I = $mysql->getnext();
										$question7_I_percent = $res_question7_I->count_I / $res_student_num->all_num * 100;

										//问题8-A
										$sql_question8_A = "select count(*) as count_A from s_questionare_tb where Q8='A'";
										$mysql->query($sql_question8_A);
										$res_question8_A = $mysql->getnext();
										$question8_A_percent = $res_question8_A->count_A / $res_student_num->all_num * 100;
										//问题8-B
										$sql_question8_B = "select count(*) as count_B from s_questionare_tb where Q8='B'";
										$mysql->query($sql_question8_B);
										$res_question8_B = $mysql->getnext();
										$question8_B_percent = $res_question8_B->count_B / $res_student_num->all_num * 100;
										//问题8-C
										$sql_question8_C = "select count(*) as count_C from s_questionare_tb where Q8='C'";
										$mysql->query($sql_question8_C);
										$res_question8_C = $mysql->getnext();
										$question8_C_percent = $res_question8_C->count_C / $res_student_num->all_num * 100;
										//问题8-D
										$sql_question8_D = "select count(*) as count_D from s_questionare_tb where Q8='D'";
										$mysql->query($sql_question8_D);
										$res_question8_D = $mysql->getnext();
										$question8_D_percent = $res_question8_D->count_D / $res_student_num->all_num * 100;
										//问题8-E
										$sql_question8_E = "select count(*) as count_E from s_questionare_tb where Q8='E'";
										$mysql->query($sql_question8_E);
										$res_question8_E = $mysql->getnext();
										$question8_E_percent = $res_question8_E->count_E / $res_student_num->all_num * 100;
										//问题8-F
										$sql_question8_F = "select count(*) as count_F from s_questionare_tb where Q8='F'";
										$mysql->query($sql_question8_F);
										$res_question8_F = $mysql->getnext();
										$question8_F_percent = $res_question8_F->count_F / $res_student_num->all_num * 100;

										//问题9-A
										$sql_question9_A = "select count(*) as count_A from s_questionare_tb where Q9 like '%A%'";
										$mysql->query($sql_question9_A);
										$res_question9_A = $mysql->getnext();
										$question9_A_percent = $res_question9_A->count_A / $res_student_num->all_num * 100;
										//问题9-B
										$sql_question9_B = "select count(*) as count_B from s_questionare_tb where Q9 like '%B%'";
										$mysql->query($sql_question9_B);
										$res_question9_B = $mysql->getnext();
										$question9_B_percent = $res_question9_B->count_B / $res_student_num->all_num * 100;
										//问题9-C
										$sql_question9_C = "select count(*) as count_C from s_questionare_tb where Q9 like '%C%'";
										$mysql->query($sql_question9_C);
										$res_question9_C = $mysql->getnext();
										$question9_C_percent = $res_question9_C->count_C / $res_student_num->all_num * 100;
										//问题9-D
										$sql_question9_D = "select count(*) as count_D from s_questionare_tb where Q9 like '%D%'";
										$mysql->query($sql_question9_D);
										$res_question9_D = $mysql->getnext();
										$question9_D_percent = $res_question9_D->count_D / $res_student_num->all_num * 100;
										//问题9-E
										$sql_question9_E = "select count(*) as count_E from s_questionare_tb where Q9 like '%E%'";
										$mysql->query($sql_question9_E);
										$res_question9_E = $mysql->getnext();
										$question9_E_percent = $res_question9_E->count_E / $res_student_num->all_num * 100;
										//问题9-F
										$sql_question9_F = "select count(*) as count_F from s_questionare_tb where Q9 like '%F%'";
										$mysql->query($sql_question9_F);
										$res_question9_F = $mysql->getnext();
										$question9_F_percent = $res_question9_F->count_F / $res_student_num->all_num * 100;
										//问题9-G
										$sql_question9_G = "select count(*) as count_G from s_questionare_tb where Q9 like '%G%'";
										$mysql->query($sql_question9_G);
										$res_question9_G = $mysql->getnext();
										$question9_G_percent = $res_question9_G->count_G / $res_student_num->all_num * 100;

										//问题10-A
										$sql_question10_A = "select count(*) as count_A from s_questionare_tb where Q10='A'";
										$mysql->query($sql_question10_A);
										$res_question10_A = $mysql->getnext();
										$question10_A_percent = $res_question10_A->count_A / $res_student_num->all_num * 100;
										//问题10-B
										$sql_question10_B = "select count(*) as count_B from s_questionare_tb where Q10='B'";
										$mysql->query($sql_question10_B);
										$res_question10_B = $mysql->getnext();
										$question10_B_percent = $res_question10_B->count_B / $res_student_num->all_num * 100;

										//问题11-A
										$sql_question11_A = "select count(*) as count_A from s_questionare_tb where Q11='A'";
										$mysql->query($sql_question11_A);
										$res_question11_A = $mysql->getnext();
										$question11_A_percent = $res_question11_A->count_A / $res_student_num->all_num * 100;
										//问题11-B
										$sql_question11_B = "select count(*) as count_B from s_questionare_tb where Q11='B'";
										$mysql->query($sql_question11_B);
										$res_question11_B = $mysql->getnext();
										$question11_B_percent = $res_question11_B->count_B / $res_student_num->all_num * 100;
										//问题11-C
										$sql_question11_C = "select count(*) as count_C from s_questionare_tb where Q11='C'";
										$mysql->query($sql_question11_C);
										$res_question11_C = $mysql->getnext();
										$question11_C_percent = $res_question11_C->count_C / $res_student_num->all_num * 100;
										//问题11-D
										$sql_question11_D = "select count(*) as count_D from s_questionare_tb where Q11='D'";
										$mysql->query($sql_question11_D);
										$res_question11_D = $mysql->getnext();
										$question11_D_percent = $res_question11_D->count_D / $res_student_num->all_num * 100;

										//问题12-A
										$sql_question12_A = "select count(*) as count_A from s_questionare_tb where Q12='A'";
										$mysql->query($sql_question12_A);
										$res_question12_A = $mysql->getnext();
										$question12_A_percent = $res_question12_A->count_A / $res_student_num->all_num * 100;
										//问题12-B
										$sql_question12_B = "select count(*) as count_B from s_questionare_tb where Q12='B'";
										$mysql->query($sql_question12_B);
										$res_question12_B = $mysql->getnext();
										$question12_B_percent = $res_question12_B->count_B / $res_student_num->all_num * 100;
										//问题12-C
										$sql_question12_C = "select count(*) as count_C from s_questionare_tb where Q12='C'";
										$mysql->query($sql_question12_C);
										$res_question12_C = $mysql->getnext();
										$question12_C_percent = $res_question12_C->count_C / $res_student_num->all_num * 100;

										//问题13-A
										$sql_question13_A = "select count(*) as count_A from s_questionare_tb where Q13='A'";
										$mysql->query($sql_question13_A);
										$res_question13_A = $mysql->getnext();
										$question13_A_percent = $res_question13_A->count_A / $res_student_num->all_num * 100;
										//问题13-B
										$sql_question13_B = "select count(*) as count_B from s_questionare_tb where Q13='B'";
										$mysql->query($sql_question13_B);
										$res_question13_B = $mysql->getnext();
										$question13_B_percent = $res_question13_B->count_B / $res_student_num->all_num * 100;
										//问题13-C
										$sql_question13_C = "select count(*) as count_A from s_questionare_tb where Q13='C'";
										$mysql->query($sql_question13_C);
										$res_question13_C = $mysql->getnext();
										$question13_C_percent = $res_question13_C->count_A / $res_student_num->all_num * 100;
										//问题13-D
										$sql_question13_D = "select count(*) as count_A from s_questionare_tb where Q13='D'";
										$mysql->query($sql_question13_D);
										$res_question13_D = $mysql->getnext();
										$question13_D_percent = $res_question13_D->count_A / $res_student_num->all_num * 100;

										//问题14-A
										$sql_question14_A = "select count(*) as count_A from s_questionare_tb where Q14 like '%A%'";
										$mysql->query($sql_question14_A);
										$res_question14_A = $mysql->getnext();
										$question14_A_percent = $res_question14_A->count_A / $res_student_num->all_num * 100;
										//问题14-B
										$sql_question14_B = "select count(*) as count_B from s_questionare_tb where Q14 like '%B%'";
										$mysql->query($sql_question14_B);
										$res_question14_B = $mysql->getnext();
										$question14_B_percent = $res_question14_B->count_B / $res_student_num->all_num * 100;
										//问题14-C
										$sql_question14_C = "select count(*) as count_C from s_questionare_tb where Q14 like '%C%'";
										$mysql->query($sql_question14_C);
										$res_question14_C = $mysql->getnext();
										$question14_C_percent = $res_question14_C->count_C / $res_student_num->all_num * 100;
										//问题14-D
										$sql_question14_D = "select count(*) as count_D from s_questionare_tb where Q14 like '%D%'";
										$mysql->query($sql_question14_D);
										$res_question14_D = $mysql->getnext();
										$question14_D_percent = $res_question14_D->count_D / $res_student_num->all_num * 100;
										//问题14-E
										$sql_question14_E = "select count(*) as count_E from s_questionare_tb where Q14 like '%E%'";
										$mysql->query($sql_question14_E);
										$res_question14_E = $mysql->getnext();
										$question14_E_percent = $res_question14_E->count_E / $res_student_num->all_num * 100;
										//问题14-F
										$sql_question14_F = "select count(*) as count_F from s_questionare_tb where Q14 like '%F%'";
										$mysql->query($sql_question14_F);
										$res_question14_F = $mysql->getnext();
										$question14_F_percent = $res_question14_F->count_F / $res_student_num->all_num * 100;

										//问题15-A
										$sql_question15_A = "select count(*) as count_A from s_questionare_tb where Q15 like '%A%'";
										$mysql->query($sql_question15_A);
										$res_question15_A = $mysql->getnext();
										$question15_A_percent = $res_question15_A->count_A / $res_student_num->all_num * 100;
										//问题15-B
										$sql_question15_B = "select count(*) as count_B from s_questionare_tb where Q15 like '%B%'";
										$mysql->query($sql_question15_B);
										$res_question15_B = $mysql->getnext();
										$question15_B_percent = $res_question15_B->count_B / $res_student_num->all_num * 100;
										//问题15-C
										$sql_question15_C = "select count(*) as count_C from s_questionare_tb where Q15 like '%C%'";
										$mysql->query($sql_question15_C);
										$res_question15_C = $mysql->getnext();
										$question15_C_percent = $res_question15_C->count_C / $res_student_num->all_num * 100;
										//问题15-D
										$sql_question15_D = "select count(*) as count_D from s_questionare_tb where Q15 like '%D%'";
										$mysql->query($sql_question15_D);
										$res_question15_D = $mysql->getnext();
										$question15_D_percent = $res_question15_D->count_D / $res_student_num->all_num * 100;
										//问题15-E
										$sql_question15_E = "select count(*) as count_E from s_questionare_tb where Q15 like '%E%'";
										$mysql->query($sql_question15_E);
										$res_question15_E = $mysql->getnext();
										$question15_E_percent = $res_question15_E->count_E / $res_student_num->all_num * 100;
										//问题15-F
										$sql_question15_F = "select count(*) as count_F from s_questionare_tb where Q15 like '%F%'";
										$mysql->query($sql_question15_F);
										$res_question15_F = $mysql->getnext();
										$question15_F_percent = $res_question15_F->count_F / $res_student_num->all_num * 100;
										//问题15-G
										$sql_question15_G = "select count(*) as count_G from s_questionare_tb where Q15 like '%G%'";
										$mysql->query($sql_question15_G);
										$res_question15_G = $mysql->getnext();
										$question15_G_percent = $res_question15_G->count_G / $res_student_num->all_num * 100;
										//问题15-H
										$sql_question15_H = "select count(*) as count_H from s_questionare_tb where Q15 like '%H%'";
										$mysql->query($sql_question15_H);
										$res_question15_H = $mysql->getnext();
										$question15_H_percent = $res_question15_H->count_H / $res_student_num->all_num * 100;
										//问题15-I
										$sql_question15_I = "select count(*) as count_I from s_questionare_tb where Q15 like '%I%'";
										$mysql->query($sql_question15_I);
										$res_question15_I = $mysql->getnext();
										$question15_I_percent = $res_question15_I->count_I / $res_student_num->all_num * 100;
										//问题15-J
										$sql_question15_J = "select count(*) as count_J from s_questionare_tb where Q15 like '%J%'";
										$mysql->query($sql_question15_J);
										$res_question15_J = $mysql->getnext();
										$question15_J_percent = $res_question15_J->count_J / $res_student_num->all_num * 100;

										//问题16-A
										$sql_question16_A = "select count(*) as count_A from s_questionare_tb where Q16 like '%A%'";
										$mysql->query($sql_question16_A);
										$res_question16_A = $mysql->getnext();
										$question16_A_percent = $res_question16_A->count_A / $res_student_num->all_num * 100;
										//问题16-B
										$sql_question16_B = "select count(*) as count_B from s_questionare_tb where Q16 like '%B%'";
										$mysql->query($sql_question16_B);
										$res_question16_B = $mysql->getnext();
										$question16_B_percent = $res_question16_B->count_B / $res_student_num->all_num * 100;
										//问题16-C
										$sql_question16_C = "select count(*) as count_C from s_questionare_tb where Q16 like '%C%'";
										$mysql->query($sql_question16_C);
										$res_question16_C = $mysql->getnext();
										$question16_C_percent = $res_question16_C->count_C / $res_student_num->all_num * 100;
										//问题16-D
										$sql_question16_D = "select count(*) as count_D from s_questionare_tb where Q16 like '%D%'";
										$mysql->query($sql_question16_D);
										$res_question16_D = $mysql->getnext();
										$question16_D_percent = $res_question16_D->count_D / $res_student_num->all_num * 100;
										//问题16-E
										$sql_question16_E = "select count(*) as count_E from s_questionare_tb where Q16 like '%E%'";
										$mysql->query($sql_question16_E);
										$res_question16_E = $mysql->getnext();
										$question16_E_percent = $res_question16_E->count_E / $res_student_num->all_num * 100;
										//问题16-F
										$sql_question16_F = "select count(*) as count_F from s_questionare_tb where Q16 like '%F%'";
										$mysql->query($sql_question16_F);
										$res_question16_F = $mysql->getnext();
										$question16_F_percent = $res_question16_F->count_F / $res_student_num->all_num * 100;
										//问题16-G
										$sql_question16_G = "select count(*) as count_G from s_questionare_tb where Q16 like '%G%'";
										$mysql->query($sql_question16_G);
										$res_question16_G = $mysql->getnext();
										$question16_G_percent = $res_question16_G->count_G / $res_student_num->all_num * 100;
										//问题16-H
										$sql_question16_H = "select count(*) as count_H from s_questionare_tb where Q16 like '%H%'";
										$mysql->query($sql_question16_H);
										$res_question16_H = $mysql->getnext();
										$question16_H_percent = $res_question16_H->count_H / $res_student_num->all_num * 100;
										//问题16-I
										$sql_question16_I = "select count(*) as count_I from s_questionare_tb where Q16 like '%I%'";
										$mysql->query($sql_question16_I);
										$res_question16_I = $mysql->getnext();
										$question16_I_percent = $res_question16_I->count_I / $res_student_num->all_num * 100;
										//问题16-J
										$sql_question16_J = "select count(*) as count_J from s_questionare_tb where Q16 like '%J%'";
										$mysql->query($sql_question16_J);
										$res_question16_J = $mysql->getnext();
										$question16_J_percent = $res_question16_J->count_J / $res_student_num->all_num * 100;
										//问题16-K
										$sql_question16_K = "select count(*) as count_K from s_questionare_tb where Q16 like '%K%'";
										$mysql->query($sql_question16_K);
										$res_question16_K = $mysql->getnext();
										$question16_K_percent = $res_question16_K->count_K / $res_student_num->all_num * 100;

										//问题17-A
										$sql_question17_A = "select count(*) as count_A from s_questionare_tb where Q17 like '%A%'";
										$mysql->query($sql_question17_A);
										$res_question17_A = $mysql->getnext();
										$question17_A_percent = $res_question17_A->count_A / $res_student_num->all_num * 100;
										//问题17-B
										$sql_question17_B = "select count(*) as count_B from s_questionare_tb where Q17 like '%B%'";
										$mysql->query($sql_question17_B);
										$res_question17_B = $mysql->getnext();
										$question17_B_percent = $res_question17_B->count_B / $res_student_num->all_num * 100;
										//问题17-C
										$sql_question17_C = "select count(*) as count_C from s_questionare_tb where Q17 like '%C%'";
										$mysql->query($sql_question17_C);
										$res_question17_C = $mysql->getnext();
										$question17_C_percent = $res_question17_C->count_C / $res_student_num->all_num * 100;
										//问题17-D
										$sql_question17_D = "select count(*) as count_D from s_questionare_tb where Q17 like '%D%'";
										$mysql->query($sql_question17_D);
										$res_question17_D = $mysql->getnext();
										$question17_D_percent = $res_question17_D->count_D / $res_student_num->all_num * 100;
										//问题17-E
										$sql_question17_E = "select count(*) as count_E from s_questionare_tb where Q17 like '%E%'";
										$mysql->query($sql_question17_E);
										$res_question17_E = $mysql->getnext();
										$question17_E_percent = $res_question17_E->count_E / $res_student_num->all_num * 100;
										//问题17-F
										$sql_question17_F = "select count(*) as count_F from s_questionare_tb where Q17 like '%F%'";
										$mysql->query($sql_question17_F);
										$res_question17_F = $mysql->getnext();
										$question17_F_percent = $res_question17_F->count_F / $res_student_num->all_num * 100;
										//问题17-G
										$sql_question17_G = "select count(*) as count_G from s_questionare_tb where Q17 like '%G%'";
										$mysql->query($sql_question17_G);
										$res_question17_G = $mysql->getnext();
										$question17_G_percent = $res_question17_G->count_G / $res_student_num->all_num * 100;

										//问题18-A
										$sql_question18_A = "select count(*) as count_A from s_questionare_tb where Q18='A'";
										$mysql->query($sql_question18_A);
										$res_question18_A = $mysql->getnext();
										$question18_A_percent = $res_question18_A->count_A / $res_student_num->all_num * 100;
										//问题18-B
										$sql_question18_B = "select count(*) as count_B from s_questionare_tb where Q18='B'";
										$mysql->query($sql_question18_B);
										$res_question18_B = $mysql->getnext();
										$question18_B_percent = $res_question18_B->count_B / $res_student_num->all_num * 100;
										//问题18-C
										$sql_question18_C = "select count(*) as count_C from s_questionare_tb where Q18='C'";
										$mysql->query($sql_question18_C);
										$res_question18_C = $mysql->getnext();
										$question18_C_percent = $res_question18_C->count_C / $res_student_num->all_num * 100;

										//问题19-A
										$sql_question19_A = "select count(*) as count_A from s_questionare_tb where Q19 like '%A%'";
										$mysql->query($sql_question19_A);
										$res_question19_A = $mysql->getnext();
										$question19_A_percent = $res_question19_A->count_A / $res_student_num->all_num * 100;
										//问题19-B
										$sql_question19_B = "select count(*) as count_B from s_questionare_tb where Q19 like '%B%'";
										$mysql->query($sql_question19_B);
										$res_question19_B = $mysql->getnext();
										$question19_B_percent = $res_question19_B->count_B / $res_student_num->all_num * 100;
										//问题19-C
										$sql_question19_C = "select count(*) as count_C from s_questionare_tb where Q19 like '%C%'";
										$mysql->query($sql_question19_C);
										$res_question19_C = $mysql->getnext();
										$question19_C_percent = $res_question19_C->count_C / $res_student_num->all_num * 100;
										//问题19-D
										$sql_question19_D = "select count(*) as count_D from s_questionare_tb where Q19 like '%D%'";
										$mysql->query($sql_question19_D);
										$res_question19_D = $mysql->getnext();
										$question19_D_percent = $res_question19_D->count_D / $res_student_num->all_num * 100;
									}
									else
									{

									}

									$mysql->close();										
								?>
									<div class="voteitem" style="display: block" id="item_719">
										<span class="votetitle STYLE1">
											Q1:您的性别？
										</span><br>

										<p>
											A.男 
												<?php if($res_student_num->all_num!=0){echo round($question1_A_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											B.女
												<?php if($res_student_num->all_num!=0){echo round($question1_B_percent, 2)."%";}
													else {echo "0%";}?><br><br>
										</p>
									</div>

									<div class="voteitem" style="display: block" id="item_720">
										<span class="votetitle STYLE1">
											Q2:您的专业属于或倾向？
										</span><br>

										<p>
											A.文科
												<?php if($res_student_num->all_num!=0){echo round($question2_A_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											B.理工科
												<?php if($res_student_num->all_num!=0){echo round($question2_B_percent, 2)."%";}
													else {echo "0%";}?><br><br>
										</p>
									</div>
																	
									<div class="voteitem" style="display: block;" id="item_721">
										<span class="votetitle STYLE1">
											Q3:根据您上大学前的计算机知识掌握情况,以下描述哪些描述符合您的情况？【可多选】
										</span><br>

										<p>
											A.可每分钟录入30个以上汉字或英文词汇 
												<?php if($res_student_num->all_num!=0){echo round($question3_A_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											B.掌握微型计算机原理的基础知识（微机的组装与简单硬件故障分析）
												<?php if($res_student_num->all_num!=0){echo round($question3_B_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											C.能熟练使用Windows操作系统（Windows下管理文件和文件夹及设置控制面板）
												<?php if($res_student_num->all_num!=0){echo round($question3_C_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											D.能熟练使用Word文字处理系统（Word文字、段落、页面格式、图片和表格）
												<?php if($res_student_num->all_num!=0){echo round($question3_D_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											E.能熟练使用Excel电子表格处理软件（Excel表格编辑、公式计算、图表表示）
												<?php if($res_student_num->all_num!=0){echo round($question3_E_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											F.能熟练使用PowerPoint幻灯片(演示文稿)
											制作软件（PowerPoint幻灯片演示文稿的编辑与放映）
												<?php if($res_student_num->all_num!=0){echo round($question3_F_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											G.网页制作（FrontPage或DreamWeaver制作带有文本、图片、表格、链接和表单的网页）
												<?php if($res_student_num->all_num!=0){echo round($question3_G_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											H.多媒体应用（PhotoShop、Flash等多媒体处理软件中的某一种对图、声、动画或视频简单处理）
												<?php if($res_student_num->all_num!=0){echo round($question3_H_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											I.数据库应用（能使用FoxPro、Access等数据库管理软件中的某一种添加、修改、删除、查询数据）
												<?php if($res_student_num->all_num!=0){echo round($question3_I_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											J.程序设计（能使用QB、C、VB、VC、JAVA等程序设计语言中的某一种语言编写简单程序）
												<?php if($res_student_num->all_num!=0){echo round($question3_J_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											K.已获得全国计算机等级考试证书（任一级别）
												<?php if($res_student_num->all_num!=0){echo round($question3_K_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											L.参加过计算机竞赛 
												<?php if($res_student_num->all_num!=0){echo round($question3_L_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											M.几乎没有接触过计算机
												<?php if($res_student_num->all_num!=0){echo round($question3_M_percent, 2)."%";}
													else {echo "0%";}?><br><br>
										</p>
									</div>

									<div class="voteitem" style="display: block;" id="item_722">
										<span class="votetitle STYLE1">
											Q4:您觉得本课程中哪部分内容收获最大？【可多选】
										</span><br>

										<p>
											A.对计算及计算思维的理解 
												<?php if($res_student_num->all_num!=0){echo round($question4_A_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											B.计算机基础知识
												<?php if($res_student_num->all_num!=0){echo round($question4_B_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											C.熟练使用Word文字处理软件
												<?php if($res_student_num->all_num!=0){echo round($question4_C_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											D.熟练使用PowerPoint幻灯片制作软件
												<?php if($res_student_num->all_num!=0){echo round($question4_D_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											E.熟练使用Excel电子表格处理软件
												<?php if($res_student_num->all_num!=0){echo round($question4_E_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											F.计算机网络
												<?php if($res_student_num->all_num!=0){echo round($question4_F_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											G.数据库技术原理
												<?php if($res_student_num->all_num!=0){echo round($question4_G_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											H.多媒体技术原理 
												<?php if($res_student_num->all_num!=0){echo round($question4_H_percent, 2)."%";}
													else {echo "0%";}?><br><br>
										</p>
									</div>

									<div class="voteitem" style="display: block" id="item_723">
										<span class="votetitle STYLE1">
											Q5:您认为本课程授课内容的难易程度？
										</span><br>

										<p>
											A.很难 
												<?php if($res_student_num->all_num!=0){echo round($question5_A_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											B. 较难
												<?php if($res_student_num->all_num!=0){echo round($question5_B_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											C.难易适度
												<?php if($res_student_num->all_num!=0){echo round($question5_C_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											D.容易
												<?php if($res_student_num->all_num!=0){echo round($question5_D_percent, 2)."%";}
													else {echo "0%";}?><br><br>
										</p>
									</div>

									<div class="voteitem" style="display: block" id="item_724">
										<span class="votetitle STYLE1">
											Q6:您认为本课程所选的教材内容？
										</span><br>

										<p>
											A.新颖
												<?php if($res_student_num->all_num!=0){echo round($question6_A_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											B.陈旧
												<?php if($res_student_num->all_num!=0){echo round($question6_B_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											C.一般
												<?php if($res_student_num->all_num!=0){echo round($question6_C_percent, 2)."%";}
													else {echo "0%";}?><br><br>
										</p>
									</div>

									<div class="voteitem" style="display: block;" id="item_725">
										<span class="votetitle STYLE1">
											Q7:假如对非计算机专业开设以下选修课程，您会选择学习哪几门？【可多选】
										</span><br>

										<p>									
											A.微机组装与维护 
												<?php if($res_student_num->all_num!=0){echo round($question7_A_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											B.计算机网络技术及应用
												<?php if($res_student_num->all_num!=0){echo round($question7_B_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											C.网页设计 
												<?php if($res_student_num->all_num!=0){echo round($question7_C_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											D.电子商务 
												<?php if($res_student_num->all_num!=0){echo round($question7_D_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											E.信息安全 
												<?php if($res_student_num->all_num!=0){echo round($question7_E_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											F.多媒体技术 
												<?php if($res_student_num->all_num!=0){echo round($question7_F_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											G.数据库基础及其应用 
												<?php if($res_student_num->all_num!=0){echo round($question7_G_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											H.数据结构和算法设计 
												<?php if($res_student_num->all_num!=0){echo round($question7_H_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											I.三维建模与动画设计
												<?php if($res_student_num->all_num!=0){echo round($question7_I_percent, 2)."%";}
													else {echo "0%";}?><br><br>
										</p>
									</div>

									<div class="voteitem" style="display: block" id="item_726">
										<span class="votetitle STYLE1">
											Q8:您认为学习计算机类课程的最主要目的是什么？
										</span><br>
										<p>
											A.掌握常用工具软件的使用
												<?php if($res_student_num->all_num!=0){echo round($question8_A_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											B. 培养计算思维的能力
												<?php if($res_student_num->all_num!=0){echo round($question8_B_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											C.掌握计算机基础知识
												<?php if($res_student_num->all_num!=0){echo round($question8_C_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											D. 提高就业技能
												<?php if($res_student_num->all_num!=0){echo round($question8_D_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											E. 获取计算机相关等级证书
												<?php if($res_student_num->all_num!=0){echo round($question8_E_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											F. 对付考试
												<?php if($res_student_num->all_num!=0){echo round($question8_F_percent, 2)."%";}
													else {echo "0%";}?><br><br>
										</p>
									</div>

									<div class="voteitem" style="display: block;" id="item_727">
										<span class="votetitle STYLE1">
											Q9:您最愿意与老师交流的方式是什么？【可多选】
										</span><br>
										<p>									
											A.课堂提问
												<?php if($res_student_num->all_num!=0){echo round($question9_A_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											B.课间提问
												<?php if($res_student_num->all_num!=0){echo round($question9_B_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											C.实验课提问
												<?php if($res_student_num->all_num!=0){echo round($question9_C_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											D.课外电话交流
												<?php if($res_student_num->all_num!=0){echo round($question9_D_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											E.课外到办公室交流
												<?php if($res_student_num->all_num!=0){echo round($question9_E_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											F.课外email交流
												<?php if($res_student_num->all_num!=0){echo round($question9_F_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											G.课外即时通讯工具（QQ）交流
												<?php if($res_student_num->all_num!=0){echo round($question9_G_percent, 2)."%";}
													else {echo "0%";}?><br><br>
										</p>
									</div>

									<div class="voteitem" style="display: block" id="item_728">
										<span class="votetitle STYLE1">
											Q10:是否希望学校开设计算机等级考试培训课程？
										</span><br>
										<p>					
											A.是
												<?php if($res_student_num->all_num!=0){echo round($question10_A_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											B.否 
												<?php if($res_student_num->all_num!=0){echo round($question10_B_percent, 2)."%";}
													else {echo "0%";}?><br><br>
										</p>
									</div>

									<div class="voteitem" style="display: block" id="item_729">
										<span class="votetitle STYLE1">
											Q11:如果参加计算机二级考试，您会首先选择？
										</span><br>
										<p>									
											A.C/C++语言程序设计
												<?php if($res_student_num->all_num!=0){echo round($question11_A_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											B.Visual Basic程序设计
												<?php if($res_student_num->all_num!=0){echo round($question11_B_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											C.Java程序设计
												<?php if($res_student_num->all_num!=0){echo round($question11_C_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											D.Access数据库
												<?php if($res_student_num->all_num!=0){echo round($question11_D_percent, 2)."%";}
													else {echo "0%";}?><br><br>
										</p>
									</div>

									<div class="voteitem" style="display: block" id="item_730">
										<span class="votetitle STYLE1">
											Q12:对于“计算思维”，您是？
										</span><br>
										<p>									
											A.第一次听说
												<?php if($res_student_num->all_num!=0){echo round($question12_A_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											B.这种理念在大学之前的课程学习中就有所应用，只是没明确提出这个概念而已
												<?php if($res_student_num->all_num!=0){echo round($question12_B_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											C.之前就有所了解
												<?php if($res_student_num->all_num!=0){echo round($question12_C_percent, 2)."%";}
													else {echo "0%";}?><br><br>
										</p>
									</div>

									<div class="voteitem" style="display: block" id="item_731">
										<span class="votetitle STYLE1">
											Q13:您如何看待“计算思维”？
										</span><br>
										<p>									
											A.“计算思维”是对计算机科学主要思想和方法论的总结，意义重大
												<?php if($res_student_num->all_num!=0){echo round($question13_A_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											B.“计算思维”有一定的意义，但目前范畴仍不明确
												<?php if($res_student_num->all_num!=0){echo round($question13_B_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											C.“计算思维”只是一个概念上的炒作，没有实际意义
												<?php if($res_student_num->all_num!=0){echo round($question13_C_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											D.其他，请具体说明
												<?php if($res_student_num->all_num!=0){echo round($question13_D_percent, 2)."%";}
													else {echo "0%";}?><br><br>
										</p>
									</div>

									<div class="voteitem" style="display: block;" id="item_732">
										<span class="votetitle STYLE1">
											Q14:本课程主要缺陷是什么？【可多选】
										</span><br>
										<p>									
											A.概念多
												<?php if($res_student_num->all_num!=0){echo round($question14_A_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											B.太科普
												<?php if($res_student_num->all_num!=0){echo round($question14_B_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											C.授课时间少
												<?php if($res_student_num->all_num!=0){echo round($question14_C_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											D.实验难
												<?php if($res_student_num->all_num!=0){echo round($question14_D_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											E.实验课时少
												<?php if($res_student_num->all_num!=0){echo round($question14_E_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											F.内容太多
												<?php if($res_student_num->all_num!=0){echo round($question14_F_percent, 2)."%";}
													else {echo "0%";}?><br><br>
										</p>
									</div>

									<div class="voteitem" style="display: block;" id="item_733">
										<span class="votetitle STYLE1">
											Q15:您喜欢实验中的哪些内容？【可多选】
										</span><br>
										<p>								
											A.了解和使用计算机
												<?php if($res_student_num->all_num!=0){echo round($question15_A_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											B.互联网操作
												<?php if($res_student_num->all_num!=0){echo round($question15_B_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											C.文字处理工具
												<?php if($res_student_num->all_num!=0){echo round($question15_C_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											D.电子幻灯片
												<?php if($res_student_num->all_num!=0){echo round($question15_D_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											E.电子表格
												<?php if($res_student_num->all_num!=0){echo round($question15_E_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											F.数据库操作
												<?php if($res_student_num->all_num!=0){echo round($question15_F_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											G.多媒体技术应用
												<?php if($res_student_num->all_num!=0){echo round($question15_G_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											H.Word综合实验
												<?php if($res_student_num->all_num!=0){echo round($question15_H_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											I.Excel综合实验
												<?php if($res_student_num->all_num!=0){echo round($question15_I_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											J.ISAS大作业
												<?php if($res_student_num->all_num!=0){echo round($question15_J_percent, 2)."%";}
													else {echo "0%";}?><br><br>
										</p>
									</div>

									<div class="voteitem" style="display: block" id="item_734">
										<span class="votetitle STYLE1">
											Q16:您最不喜欢哪些实验内容？【可多选】
										</span><br>
										<p>								
											A.了解和使用计算机
												<?php if($res_student_num->all_num!=0){echo round($question16_A_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											B.互联网操作
												<?php if($res_student_num->all_num!=0){echo round($question16_B_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											C.文字处理工具
												<?php if($res_student_num->all_num!=0){echo round($question16_C_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											D.电子幻灯片
												<?php if($res_student_num->all_num!=0){echo round($question16_D_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											E.电子表格
												<?php if($res_student_num->all_num!=0){echo round($question16_E_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											F.数据库操作
												<?php if($res_student_num->all_num!=0){echo round($question16_F_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											G.多媒体技术应用
												<?php if($res_student_num->all_num!=0){echo round($question16_G_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											H.Word综合实验
												<?php if($res_student_num->all_num!=0){echo round($question16_H_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											I.Excel综合实验
												<?php if($res_student_num->all_num!=0){echo round($question16_I_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											J.ISAS大作业
												<?php if($res_student_num->all_num!=0){echo round($question16_J_percent, 2)."%";}
													else {echo "0%";}?><br><br>									
											K.都不喜欢
												<?php if($res_student_num->all_num!=0){echo round($question16_K_percent, 2)."%";}
													else {echo "0%";}?><br><br>
										</p>
									</div>

									<div class="voteitem" style="display: block;" id="item_735">
										<span class="votetitle STYLE1">
											Q17:授课中那些章节内容很难理解？【可多选】
										</span><br>
										<p>									
											A.对计算及计算思维的理解 
												<?php if($res_student_num->all_num!=0){echo round($question17_A_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											B.计算机基础知识
												<?php if($res_student_num->all_num!=0){echo round($question17_B_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											C.熟练使用Word文字处理软件
												<?php if($res_student_num->all_num!=0){echo round($question17_C_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											D.熟练使用Excel电子表格处理软件
												<?php if($res_student_num->all_num!=0){echo round($question17_D_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											E.计算机网络
												<?php if($res_student_num->all_num!=0){echo round($question17_E_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											F.数据库技术原理
												<?php if($res_student_num->all_num!=0){echo round($question17_F_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											G.多媒体技术原理 
												<?php if($res_student_num->all_num!=0){echo round($question17_G_percent, 2)."%";}
													else {echo "0%";}?><br><br>
										</p>
									</div>

									<div class="voteitem" style="display: block" id="item_736">
										<span class="votetitle STYLE1">
											Q18：您对教学进度有什么意见？
										</span><br>
										<p>
											A.适中 
												<?php if($res_student_num->all_num!=0){echo round($question18_A_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											B.太快
												<?php if($res_student_num->all_num!=0){echo round($question18_B_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											C.太慢
												<?php if($res_student_num->all_num!=0){echo round($question18_C_percent, 2)."%";}
													else {echo "0%";}?><br><br>
										</p>
									</div>

									<div class="voteitem" style="display: block;" id="item_737">
										<span class="votetitle STYLE1">
											Q19:您对课程有那些希望或需求？【可多选】
										</span><br>
										<p>									
											A.增加授课时间
												<?php if($res_student_num->all_num!=0){echo round($question19_A_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											B.增加实验时间
												<?php if($res_student_num->all_num!=0){echo round($question19_B_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											C.加强辅导
												<?php if($res_student_num->all_num!=0){echo round($question19_C_percent, 2)."%";}
													else {echo "0%";}?><br><br>
											D.增加练习
												<?php if($res_student_num->all_num!=0){echo round($question19_D_percent, 2)."%";}
													else {echo "0%";}?><br><br>
										</p>
									</div>

									<div class="voteitem" style="display: block" id="item_726">
										<span class="votetitle STYLE1">
											Q20：您对本课程相关的意见和建议还有哪些，请写在下面:
										</span><br>
									<input type="text" size="80" name="text726" class="text737" >
									<span class="STYLE1"><br>
									<br>
									</span>
									</div>

									<div class="voteitem" style="display: block" id="item_727">
										<span class="votetitle STYLE1">
											Q21：举一个与你学习、生活或专业相关的计算思维应用的例子，请写在下面:
										</span><br>
									<input type="text" size="80" name="text727" class="text727">
									<span class="STYLE1"><br>
									<br>
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
									<input id="btnSubmit" type="submit" value="提 交" name = "submit"
									style="width: 80px; display: ">
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