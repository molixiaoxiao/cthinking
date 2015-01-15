<?php
	//include '../sqlclass/sqlclass.php';
	//var $mysql;
	class studentqa{
		
		function inserttitle($posting_title,$posting_nickname,$posting_content,$posting_time){
			$sql_title_id = "select max(title_id) as MAXID from tb_alltitle";
			$mysql = new mySql();
			$mysql->query($sql_title_id);
			$res_alltitle = $mysql->getnext();
			if($res_alltitle == '0')
			{
				echo $sql_title_id;
			}
			$posting_title_id = $res_alltitle->MAXID + 1;

			//插入tb_alltitle
			$sql_insert_title = "insert into tb_alltitle(id,title,title_id,nickname,post_num,isDelete) values(\"\",'".$posting_title."','".$posting_title_id."','".$posting_nickname."','0','0')";
			$res_insert_title = $mysql->insert($sql_insert_title);
			if($res_insert_title == '0')
			{
				echo $sql_insert_title;
			}

			//插入tb_posting中
			$sql_insert_posting = "insert into tb_posting(id, nickname, title_id, post_id, content, createtime, isDelete) 
				values(\"\", '".$posting_nickname."','".$posting_title_id."','1','".$posting_content."', '".$posting_time."', '0')";
			$res_insert_posting = $mysql->insert($sql_insert_posting);
			if($res_insert_posting == '0')
			{
				echo $sql_insert_posting;
			}

			return $posting_title_id;
		}

		function insertpost($posting_nickname,$posting_title_id,$reply_content,$posting_time){
			$sql_post_id = "select count(id) as MAXID from tb_posting where title_id='".$posting_title_id."'";
			$mysql = new mySql();
			$mysql->query($sql_post_id);
			$res_post_id = $mysql->getnext();
			if($res_post_id == '0')
			{
				echo $sql_post_id;
			}
			$posting_post_id = $res_post_id->MAXID + 1;

			$sql_insert_posting = "insert into tb_posting(id, nickname, title_id, post_id, content, createtime, isDelete) values('','".$posting_nickname."','".$posting_title_id."','".$posting_post_id."','".$reply_content."','".$posting_time."','0')";
			$res_insert_posting = $mysql->insert($sql_insert_posting);			
			if($res_insert_posting == '0')
			{
				echo $sql_insert_posting;
			}

			$sql_post_num = "select post_num from tb_alltitle where title_id='".$posting_title_id."'";
			$mysql->query($sql_post_num);
			$res_post_num = $mysql->getnext();
			if($res_post_num == '0')
			{
				echo $sql_post_num;
			}
			$post_num = $res_post_num->post_num + 1;

			$sql_update_num = "update tb_alltitle set post_num='".$post_num."' where title_id='".$posting_title_id."'";
			$mysql->update($sql_update_num);

			return $posting_post_id;
		}
		
		function insertreply($posting_nickname,$posting_title_id,$posting_post_id,$posting_content,$posting_time){
			$sql_insert_reply = "insert into tb_reply(id,nickname,title_id,post_id,content,createtime,isDelete) values('','".$posting_nickname."','".$posting_title_id."','".$posting_post_id."','".$posting_content."','".$posting_time."','0')";
			$mysql = new mySql();
			$res_insert_reply = $mysql->insert($sql_insert_reply);
			if($res_insert_reply == '0')
			{
				echo $sql_insert_reply;
			}
		}

		function deletetitle($posting_title_id){
			$sql_delete_title = "update tb_alltitle set isDelete='1' where title_id='".$posting_title_id."'";
			$mysql->update($sql_delete_title);

			$sql_delete_posting = "update tb_posting set isDelete='1' where title_id='".$posting_title_id."'";
			$mysql->update($sql_delete_posting);

			$sql_delete_reply = "update tb_reply set isDelete='1' where title_id='".$posting_title_id."'";
			$mysql->update($sql_delete_reply);
		}

		function deleteposting($posting_title_id,$posting_post_id){
			$sql_delete_posting = "update tb_posting set isDelete='1' where title_id='".$posting_title_id."' and post_id='".$posting_post_id."'";
			$mysql->update($sql_delete_posting);

			$sql_delete_reply = "update tb_reply set isDelete='1' where title_id='".$posting_title_id."' and post_id='".$posting_post_id."'";
			$mysql->update($sql_delete_reply);
		}

		function deletereply($posting_title_id,$posting_post_id){
			$sql_delete_reply = "update tb_reply set isDelete='1' where title_id='".$posting_title_id."' and post_id='".$posting_post_id."'";
			$mysql->update($sql_delete_reply);
		}	

		function querytitle(){

		}

		function queryposting(){

		}

		function queryreply(){

		}
	}

?>
