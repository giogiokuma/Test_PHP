
<?php 
  $page_name = "事業局からのお知らせ";
  $page_title = "|".$page_name;

  date_default_timezone_set('Asia/Tokyo'); 
  $this_year = date('Y'); 
  $this_month = date('m'); 


include_once(dirname(__FILE__).'./common/template/header.php'); 
 ?>

 <main>
    <div class="main">
        <article class="news">
            <h1>
                <i class="fa fa-info-circle" aria-hidden="true"></i>
                <span>
                    <span><em>I</em>nformation</span><br />
                    <span><em>事業局からの最新情報</em></span><br />
                </span>
            </h1>
            <?php 
              if ($this_year-2016 > 0) { ?>
              <ul>
                  <?php for ($count_item=0; $this_year-$count_item <=2016 ; $count_item++) { 
                   ?>
                    <li><a data-slide-index="<?php echo $count_item; ?>">><?php echo 2016; ?></a></li>
                   <?php } ?>   
              </ul>
            <?php } ?>  
              
             
        </article>
    </div>
 </main>