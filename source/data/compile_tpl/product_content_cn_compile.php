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
    <div class="leftbar">
      <?php $tree=get_tpl_list_nav();?>
      <?php if($tree){?>
      <!-- <h2 class="title"><span class="pr_icon">Product navigation</span></h2> -->
      <ul class="subnav">
        <?php 
 $fun_return=$tree;if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
       <li class="<?php echo $v['class'];?>"><span></span><a href="<?php echo $v['url'];?>" <?php echo $v['target'];?> title="<?php echo $v['cate_name'];?>"><?php echo $v['cate_name'];?></a></li>
       <?php 
}
}?>
      </ul>
      <?php }?>

      <div class="ader">
        <img src="<?php cmspath('template');?>/images/left01.jpg">
      </div>
      <div class="ader">
        <img src="<?php cmspath('template');?>/images/left02.jpg">
      </div>
    </div>
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