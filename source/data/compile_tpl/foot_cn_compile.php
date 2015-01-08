<div class="footer">
	<div class="wrap mb20 clearfix">
		<div class="friends fl w380">
			<div class="fhead">
				合作银行
				<img src="<?php cmspath('template');?>/images/line.gif">
			</div>
			<div class="fbody flogo">
				<a href="http://www.ccb.com/" target="_blank"><img src="<?php cmspath('template');?>/images/link002.gif"></a>
				<a href="http://www.hxb.com.cn/" target="_blank"><img src="<?php cmspath('template');?>/images/link003.gif"></a>
				<a href="http://www.icbc.com.cn/" target="_blank"><img src="<?php cmspath('template');?>/images/link004.gif"></a>
				<a href="http://www.abchina.com/" target="_blank"><img src="<?php cmspath('template');?>/images/link005.gif"></a>
			</div>
		</div>
		<div class="friends fl w380 ml20">
			<div class="fhead">
				合作单位
				<img src="<?php cmspath('template');?>/images/line.gif">
			</div>
			<div class="fbody flogo">
				<a href="http://www.yrdce.com/" target="_blank"><img src="<?php cmspath('template');?>/images/link001.gif"></a>
			</div>
		</div>

		<div class="friends fr w380">
			<div class="fhead">
				友情链接
				<img src="<?php cmspath('template');?>/images/line.gif">
			</div>
			<div class="fbody flink">
				<?php $logo=get_link(0);?>

	            <?php 
 $fun_return=$logo;if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
                    <a href="<?php echo $v['link_url'];?>" title="<?php echo $v['link_name'];?>" target="_blank">
                    <?php echo $v['link_name'];?>
                    </a>
                <?php 
}
}?>
			</div>
		</div>
	</div>
	<div class="wrap pr footlink clearfix">
		<div class="footlogo"><img src="<?php cmspath('template');?>/images/logo.png"></div>
		<div class="flinks fr">
			<a href="<?php cmspath('index');?>">首页</a>
			<?php 
 $fun_return=nav_middle();if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $nav_child){?> 
			<a href="<?php echo $nav_child['url'];?>" class="n" <?php echo $nav_child['target'];?>><?php echo $nav_child['cate_name'];?></a>
			<?php 
}
}?>
		</div>
		<!-- <div class="code"><img src="<?php cmspath('template');?>/images/code.gif"></div> -->
	</div>
</div>

<!-- js -->

  <script type="text/javascript" src="<?php cmspath('template');?>/js/index1.js"></script>