<?php
/**
 * $Author: BEESCMS $
 * ============================================================================
 * 网站地址: http://www.beescms.com
 * 您只能在不用于商业目的的前提下对程序代码进行修改和使用；
 * 不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
*/


 /*获取网页id*/
function out_id(){
	$cate_id = empty($cate_id)?$GLOBALS['cateid']:$cate_id;
	return $cate_id;
}
 

 /*down*/
function get_down($id){
	$sql="select down from ".DB_PRE."down where id=".$id."";
	$down=$GLOBALS['mysql']->fetch_asc($sql);
	return $down[0]['down'];
}

?>