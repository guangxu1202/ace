<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="<?php echo content('info');?>">
<meta name="keywords" content="<?php echo content('keywords');?>">
<title><?php echo content('small_title');?>_<?php echo cateinfo('cate_title_seo');?>_<?php echo webinfo('web_name');?></title>
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
          <h1 class="ntitle"><?php echo content('title');?></h1>
          <div class="ndec">
            <span>点击:<script language="javascript" src="<?php cmspath('includes');?>/hits.php?id=<?php echo content('id');?>"></script></span>
            <span>日期:<?php echo date('Y-m-d H:m:s',content('updatetime'));?></span>
      
          </div>
          <div class="ncontent">
            <div class="click_down">
              <?php echo content('title');?>：
              <a href="<?php echo get_down(content('id'));?>" target="_blank" style="color:blue">点击下载</a>
              
            </div>
            <!-- <div class="arc_info"><?php echo content('info');?></div> --><!--摘要-->
            <?php echo content('content');?>
            <div class="page_fy">
              <?php echo body_pages();?>
            </div>

            

            <div class="arc_link" style="clear:both">
             <?php $prev=content('prev');?>
             <?php if($prev){?><span>上一篇：<a href="<?php echo $prev['url'];?>"><?php echo $prev['title'];?></a></span><?php }else{?><span>上一篇：没有了</span><?php }?>
             <br>
              <?php $next=content('next');?>
             <?php if($next){?><span>下一篇：<a href="<?php echo $next['url'];?>"><?php echo $next['title'];?></a></span><?php }else{?><span>下一篇：没有了</span><?php }?>
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