<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="<?php echo webinfo('web_description');?>">
<meta name="keywords" content="<?php echo webinfo('web_keywords');?>">
<title><?php if(webinfo('web_index_name')){?><?php echo webinfo('web_index_name');?><?php }else{?><?php echo webinfo('web_name');?><?php }?></title>
    <!-- css -->
    <link type="text/css" rel="stylesheet" href="<?php cmspath('template');?>/style/common.css" media="screen" />
      <script type="text/javascript" src="<?php cmspath('template');?>/js/jquery-1.10.2.min.js"></script>
</head>
<body>

<div class="train">
  <div class="train_title">
    仲泰业客户服务直通平台
  </div>
  <div class="train_body">
    <ul>
      <li class="tc01"><a href="<?php cmspath('account');?>/Formal.php">网上开户 &gt;&gt;</a></li>
      <li class="tc02"><a href="#">预约开户 &gt;&gt;</a></li>
      <li class="tc03"><a href="<?php cmspath('account');?>/Virtual.php">开通模拟账户 &gt;&gt;</a></li>
      <li class="tc04"><a href="#">在线客服 &gt;&gt;</a></li>
    </ul>
  </div>
</div>

<div class="header mb20 pr">
  <div class="wrap">
    <div class="hotline">
      <div class="fl">
        仲泰业投资管理有限公司<br>
        <span>长三角交易所131号会员单位</span>
      </div>
      财富热线：4000897771
    </div>
    <div class="nav">
      <div class="logo"><img src="<?php cmspath('template');?>/images/logo.gif"></div>
      <ul>

        <li class="<?php echo get_web_param('index_focus');?>"><a href="<?php cmspath('index');?>" class="n">首页</a></li>
         <?php 
 $fun_return=nav_middle();if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $nav_child){?> 
        <li class="<?php echo $nav_child['class'];?>"><a href="<?php echo $nav_child['url'];?>" class="n" <?php echo $nav_child['target'];?>><span><?php echo $nav_child['cate_name'];?></span></a>
          <?php if($nav_child['id']!=26){?>
          <div class="hide nav_sub opac80 ">
            <div class="cbox c<?php echo $nav_child['id'];?>">
            <?php 
 $fun_return=$nav_child['child'];if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
            <a href="<?php echo $v['url'];?>"> <?php echo $v['cate_name'];?> </a>
            <?php 
}
}?>
            </div>
          </div>
          <?php }?>
                            
      </li>
      <?php 
}
}?>
      </ul>
    </div>

    
  </div>
  <div class="banner">
    <ul>
      <li class="b01">
        <a href="<?php cmspath('account');?>/650.html" target="_blank"></a>
      </li>
      <li class="b02"><!-- <a href="#" target="_blank"></a> --></li>
      <li class="b03"><a href="<?php cmspath('account');?>/008.html" target="_blank"></a></li>
      <li class="b04"><a href="<?php cmspath('down');?>/down.php?id=24" target="_blank"></a></li>
    </ul>
  </div>
  <div class="banner_small">
    <div class="wrap">
      <ul>
        <li onclick="change(0)" class="focus"></li>
        <li onclick="change(1)"></li>
        <li onclick="change(2)"></li>
        <li onclick="change(3)"></li>
      </ul>
      <!-- <dl onclick="change(0)" class="focus">
        <dt><img src="<?php cmspath('template');?>/images/banner001.jpg"></dt>
        <dd>方便、安全、快捷</dd>
      </dl>
      <dl onclick="change(1)">
        <dt><img src="<?php cmspath('template');?>/images/banner002.jpg"></dt>
        <dd>微观财经手机客户端即将上市</dd>
      </dl>
      <dl onclick="change(2)">
        <dt><img src="<?php cmspath('template');?>/images/banner003.jpg"></dt>
        <dd>中国力争黄金定价权<br>新批准三家银行进口黄金</dd>
      </dl>
      <dl onclick="change(3)">
        <dt><img src="<?php cmspath('template');?>/images/banner003.jpg"></dt>
        <dd>中国力争黄金定价权<br>新批准三家银行进口黄金</dd>
      </dl> -->

    </div>
  </div>

  <div class="banner_bg"></div>
  
</div>






<div class="wrap clearfix mb20">
  <div class="ibox w698 fl">
    <div class="ihead">
      <div class="tab_t fr">
        <span class="focus" onclick="tab_c(this,0)">白银</span>
        <span onclick="tab_c(this,1)">铜</span>
        <span onclick="tab_c(this,2)">镍</span>
      </div>
      <b>行情走势图</b>
    </div>
    <div class="ibody">
      <div class="tab_img">
        <img src="http://58.215.166.110:16924/hqweb/image/AG100KGKLine.png" width="550" height="270"/>
      </div>
      <div class="tab_img hide">
        <img src="http://58.215.166.110:16924/hqweb/image/CU10TKLine.png" width="550" height="270"/>
      </div>
      <div class="tab_img hide">
        <img src="http://58.215.166.110:16924/hqweb/image/NI1000KGKLine.png" width="550" height="270"/>
      </div>
    </div>
  </div>
  <div class="ibox fr w460">
    <div class="ihead">
      <a href="<?php cmspath('article');?>/article.php?id=31" class="more fr"><img src="<?php cmspath('template');?>/images/ico_readmore.gif"></a>
      <b>市场公告</b>
    </div>
    <div class="ibody">
      <div class="p15">
        <?php 
 $fun_return=get_cate_content($cate_id='31',$limit='0,1');if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
        <dl class="top1 clearfix">
          <dt><img src="<?php echo $v['thumb_pic'];?>" width="140" height="110"  border="0" title="<?php echo $v['title'];?>" /></dt>
          <dd>
            <div class="top1_t"><a href="<?php echo $v['url'];?>" <?php echo $v['target'];?> style="<?php echo $v['style'];?>"><?php echo $v['title'];?></a></div>
            <div class="top1_d">
              <?php echo cn_substr($v['cate_short'],110);?>
            </div>
          </dd>
        </dl>
        <?php 
}
}?>
        <ul class="newlist">
          <?php 
 $fun_return=get_cate_content($cate_id='31',$limit='1,4');if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
          <li>
            <em class="fr"><?php echo date('Y-m-d',$v['updatetime']);?></em>
            <a href="<?php echo $v['url'];?>" <?php echo $v['target'];?> style="<?php echo $v['style'];?>"><?php echo cn_substr($v['title'],45);?></a>
          </li>
          <?php 
}
}?>

        </ul>
      </div>
    </div>
  </div>
</div>


<div class="laster mb20">
  <div class="wrap clearfix">
    <div class="fl last_title">
      <p>LATEST NEWS</p>
      <p>交易所最新动态</p>
      <a href="<?php cmspath('article');?>/article.php?id=32">MORE 更多动态</a>
    </div>
    <div class="last_news w800 pr fr switchbox">
      <a href="javascript:void(0)" class="last_p last_left switchLeft"></a>
      <a href="javascript:void(0)" class="last_p last_right switchRight"></a>
      <div class="last_box">
        <ul class="last_list clearfix switchlist">
          <?php 
 $fun_return=get_cate_content($cate_id='32',$limit='0,3');if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
          <li class="swtchItem">
            <img src="<?php echo $v['thumb_pic'];?>" width="140" height="110"  border="0" title="<?php echo $v['title'];?>" />
            <span class="igrey"><?php echo date('Y-m-d',$v['updatetime']);?></span>
            <h6 class="ititle"><a href="<?php echo $v['url'];?>" <?php echo $v['target'];?> style="<?php echo $v['style'];?>"><?php echo $v['title'];?></a></h6>
            <p class="icontent"><?php echo $v['cate_short'];?></p>
            <a href="<?php echo $v['url'];?>" <?php echo $v['target'];?> class="igrey" style="<?php echo $v['style'];?>">查看详细....</a>
          </li>
          <?php 
}
}?>

        </ul>
      </div>
      
      <div class="last_statu switchStatu">
        <span class="focus"></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
</div>

<div class="wrap clearfix mb20">
  <div class="ibox fl w380">
    <div class="ihead">
      <a href="<?php cmspath('article');?>/article.php?id=12" class="more fr"><img src="<?php cmspath('template');?>/images/ico_readmore.gif"></a>
      <b>财经要闻</b>
    </div>
    <div class="ibody">
      <div class="p15">
        <ul class="newlist">
          <?php 
 $fun_return=get_cate_content($cate_id='12',$limit='0,7');if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
          <li><em class="fr"><?php echo date('Y-m-d',$v['updatetime']);?></em><a href="<?php echo $v['url'];?>" <?php echo $v['target'];?> style="<?php echo $v['style'];?>"><?php echo cn_substr($v['title'],30);?></a></li>
          <?php 
}
}?>
        </ul>
      </div>
    </div>
  </div>
  <div class="ibox fl w380 ml20">
    <div class="ihead">
      <a href="<?php cmspath('article');?>/article.php?id=10" class="more fr"><img src="<?php cmspath('template');?>/images/ico_readmore.gif"></a>
      <b>每日市场行情分析</b>
    </div>
    <div class="ibody">
      <div class="p15">
        <ul class="newlist">
          <?php 
 $fun_return=get_cate_content($cate_id='10',$limit='0,7');if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
          <li><em class="fr"><?php echo date('Y-m-d',$v['updatetime']);?></em><a href="<?php echo $v['url'];?>" <?php echo $v['target'];?> style="<?php echo $v['style'];?>"><?php echo cn_substr($v['title'],30);?></a></li>
          <?php 
}
}?>
        </ul>
      </div>
    </div>
  </div>
  <div class="ibox fr w380">
    <div class="ihead">
      <a href="<?php cmspath('article');?>/article.php?id=11" class="more fr"><img src="<?php cmspath('template');?>/images/ico_readmore.gif"></a>
      <b>每周市场行情分析</b>
    </div>
    <div class="ibody">
      <div class="p15">
        <ul class="newlist">
          <?php 
 $fun_return=get_cate_content($cate_id='11',$limit='0,7');if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
          <li><em class="fr"><?php echo date('Y-m-d',$v['updatetime']);?></em><a href="<?php echo $v['url'];?>" <?php echo $v['target'];?> style="<?php echo $v['style'];?>"><?php echo cn_substr($v['title'],30);?></a></li>
          <?php 
}
}?>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="wrap clearfix mb20">
  <div class="ad fl"> <a href="<?php cmspath('account');?>/Formal.php"><img src="<?php cmspath('template');?>/images/ad01.jpg"></a></div>
  <div class="fast_link fr">
    <img src="<?php cmspath('template');?>/images/dcode.jpg">
    <!-- <ul>
      <li>
        <a href="#"><img src="<?php cmspath('template');?>/images/ico001.gif"></a>
        <a href="#">会员申请</a>
      </li>
      <li>
        <a href="#"><img src="<?php cmspath('template');?>/images/ico002.gif"></a>
        <a href="#">出入金流程</a>
      </li>
      <li>
        <a href="#"><img src="<?php cmspath('template');?>/images/ico003.gif"></a>
        <a href="#">政策法规</a>
      </li>
      <li>
        <a href="#"><img src="<?php cmspath('template');?>/images/ico004.gif"></a>
        <a href="#">上市品种</a>
      </li>
      <li>
        <a href="#"><img src="<?php cmspath('template');?>/images/ico005.gif"></a>
        <a href="#">软件下载</a>
      </li>
      <li>
        <a href="#"><img src="<?php cmspath('template');?>/images/ico006.gif"></a>
        <a href="#">联系我们</a>
      </li>
    </ul> -->
  </div>
</div>

<div class="wrap clearfix mb20">
  <div class="ibox">
    <div class="ihead">
      <a href="<?php cmspath('article');?>/article.php?id=26" class="more fr"><img src="<?php cmspath('template');?>/images/ico_readmore.gif"></a>
      <img src="<?php cmspath('template');?>/images/dun.png" height="30" style="vertical-align:middle;margin-top:-3px;margin-left:-5px;">
      <b>金牌分析师</b>
    </div>
    <div class="p15 pr">
      <div class="teacher clearfix switchbox">
        <a href="javascript:void(0)" class="t_p t_left switchLeft"></a>
        <a href="javascript:void(0)" class="t_p t_right switchRight"></a>
        <ul class="switchlist">
          <?php 
 $fun_return=get_cate_content($cate_id='26',$limit='0,30');if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
          <li class="swtchItem">
            <a href="<?php echo $v['url'];?>" <?php echo $v['target'];?>>
              <img src="<?php echo $v['thumb_pic'];?>" width="100" height="105" class="img" border="0" title="<?php echo $v['title'];?>" />
            </a>
            <div class="inner">
              <b><a href="<?php echo $v['url'];?>" <?php echo $v['target'];?>><?php echo $v['title'];?></a></b>
              <p class="t_dec"><a href="<?php echo $v['url'];?>" <?php echo $v['target'];?>><?php echo cn_substr($v['cate_short'],60);?></a></p>
            </div>
            
          </li>

          <?php 
}
}?>
          
        </ul>
      </div>
    </div>
  </div>
</div>


<div class="wrap clearfix mb20">
  <div class="ibox fl w380">
    <div class="home_down" style="border-bottom:21px solid #e4e5e7;">
      <?php 
 $fun_return=get_cate_content($cate_id='24',$limit='0,1');if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
      <dl>
        <dt>
          <img src="<?php echo $v['thumb_pic'];?>" width="136" height="99"  border="0" title="<?php echo $v['title'];?>" />
          <p class="hd_title"><?php echo $v['title'];?></p>
        </dt>
        <dd>
          <p><?php echo cn_substr($v['cate_short'],150);?></p>
          <a href="<?php echo get_down($v['id']);?>"><img src="<?php cmspath('template');?>/images/btn_download.gif"></a>
        </dd>
      </dl>
      <?php 
}
}?>
    </div>
    <div class="home_down">
      <?php 
 $fun_return=get_cate_content($cate_id='24',$limit='1,1');if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
      <dl>
        <dt>
          <img src="<?php echo $v['thumb_pic'];?>" width="136" height="99"  border="0" title="<?php echo $v['title'];?>" />
          <p class="hd_title"><?php echo $v['title'];?></p>
        </dt>
        <dd>
          <p><?php echo cn_substr($v['cate_short'],150);?></p>
          <a href="<?php echo get_down($v['id']);?>"><img src="<?php cmspath('template');?>/images/btn_download.gif"></a>
        </dd>
      </dl>
      <?php 
}
}?>
    </div>
  </div>
  <div class="ibox fl w380 ml20">
    <div class="ihead">
      <a href="<?php cmspath('article');?>/article.php?id=13" class="more fr"><img src="<?php cmspath('template');?>/images/ico_readmore.gif"></a>
      <b>行业信息</b>
    </div>
    <div class="ibody">
      <div class="p15">
        <ul class="newlist">
          <?php 
 $fun_return=get_cate_content($cate_id='13',$limit='0,7');if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
          <li><em class="fr"><?php echo date('Y-m-d',$v['updatetime']);?></em><a href="<?php echo $v['url'];?>" <?php echo $v['target'];?> style="<?php echo $v['style'];?>"><?php echo cn_substr($v['title'],26);?></a></li>
          <?php 
}
}?>
        </ul>
      </div>
    </div>
  </div>
  <div class="ibox fr w380">
    <div class="ihead">
      <a href="<?php cmspath('article');?>/article.php?id=29" class="more fr"><img src="<?php cmspath('template');?>/images/ico_readmore.gif"></a>
      <b>操作演示</b>
    </div>
    <div class="ibody">
      <div class="p15">
        <ul class="newlist">
          <?php 
 $fun_return=get_cate_content($cate_id='29',$limit='0,7');if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
          <li><em class="fr"><?php echo date('Y-m-d',$v['updatetime']);?></em><a href="<?php echo $v['url'];?>" <?php echo $v['target'];?> style="<?php echo $v['style'];?>"><?php echo cn_substr($v['title'],26);?></a></li>
          <?php 
}
}?>
        </ul>
      </div>
    </div>
  </div>
</div>







<?php $this->display('foot',1,1);?>

</body>
</html>