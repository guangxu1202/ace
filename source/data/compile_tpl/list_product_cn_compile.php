<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="<?php echo cateinfo('cate_info_seo');?>">
<meta name="keywords" content="<?php echo cateinfo('cate_key_seo');?>">
<title><?php echo cateinfo('cate_title_seo');?>_<?php echo webinfo('web_name');?></title>
<!-- css -->
    <link type="text/css" rel="stylesheet" href="<?php cmspath('template');?>/style/common.css" media="screen" />
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
</head>
<body>
<?php $this->display('head',1,1);?>


<div class="wrap mb20">
  <div class="col2 clearfix">
    <?php $this->display('left',1,1);?>
    <div class="main">
      <div class="mainbox">
        <div class="maintitle pr">
          <div class="fr"><?php position(); ?></div>
          <b class="tit"><?php echo get_cate(out_id());?></b>
        </div>
        <div class="mainbody">
          <ul class="newslist_pic">
            <?php 
 $fun_return=list_article();if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
              <li>
                <a href="<?php echo $v['url'];?>" <?php echo $v['target'];?>><img src="<?php echo $v['thumb_pic'];?>" width="150" height="90"  border="0" title="<?php echo $v['title'];?>" />
                <div class="pic_tite"><a href="<?php echo $v['url'];?>" <?php echo $v['target'];?> style="<?php echo $v['style'];?>"><?php echo $v['title'];?></a></div>
                <div class="pic_info">
                  <a href="<?php echo $v['url'];?>" <?php echo $v['target'];?> style="<?php echo $v['style'];?>"><?php echo $v['cate_short'];?></a>
                </div>
              </li>
            <?php 
}
}?>
          </ul>
          <div class="list_page">
            <div class="page_fy">
              <?php echo list_page();?>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>
</div>

<?php $this->display('foot',1,1);?>

</body>
</html>