<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="<?php echo content('info');?>">
<meta name="keywords" content="<?php echo content('keywords');?>">
<title><?php echo content('title');?>_<?php echo webinfo('web_name');?></title>
<!-- css -->
    <link type="text/css" rel="stylesheet" href="<?php cmspath('template');?>/style/common.css" media="screen" />
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
   <script type="text/javascript" src="<?php cmspath('template');?>/js/prototype.js"></script>
<script type="text/javascript" src="<?php cmspath('template');?>/js/effects.js"></script>
<script type="text/javascript" src="<?php cmspath('template');?>/js/accordion.js"></script>
<script type="text/javascript">
    Event.observe(window, 'load', loadAccordions, false);
    function loadAccordions() {
      var bottomAccordion = new accordion('vertical_container');
      
      var nestedVerticalAccordion = new accordion('vertical_nested_container', {
        classNames : {
          toggle : 'vertical_accordion_toggle',
          toggleActive : 'vertical_accordion_toggle_active',
          content : 'vertical_accordion_content'
        }
      });
      
      bottomAccordion.activate($$('#vertical_container .accordion_toggle')[0]);
      
      // Open second one
      topAccordion.activate($$('#horizontal_container .horizontal_accordion_toggle')[2]);
    }
    
</script>



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
          <!-- <h1 class="ntitle"><?php echo content('title');?></h1>
          <div class="ndec">
            <span>点击:<script language="javascript" src="<?php cmspath('includes');?>/hits.php?id=<?php echo content('id');?>"></script></span>
            <span>日期:<?php echo date('Y-m-d H:m:s',content('updatetime'));?></span>
      
          </div> -->
          <div class="ncontent">
            <!-- <div class="arc_info"><?php echo content('info');?></div> --><!--摘要-->
            <?php echo content('content');?>
            <div class="page_fy">
              <?php echo body_pages();?>
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