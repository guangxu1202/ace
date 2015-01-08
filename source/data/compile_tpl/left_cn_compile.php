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
        <a href="<?php cmspath('account');?>/Formal.php"><img src="<?php cmspath('template');?>/images/ad001.gif"></a>
      </div>
      

      <ul class="subnav02">
        <li><a href="<?php cmspath('account');?>/Virtual.php">开通模拟账户</a></li>
        <li><a href="<?php cmspath('alone');?>/alone.php?id=21">开户流程</a></li>
        <li><a href="<?php cmspath('down');?>/down.php?id=24">软件下载</a></li>
      </ul>

      <div class="ader">
        <img src="<?php cmspath('template');?>/images/left01.jpg">
      </div>

      <!-- <div class="ader">
        <img src="<?php cmspath('template');?>/images/left02.jpg">
      </div> -->
    </div>