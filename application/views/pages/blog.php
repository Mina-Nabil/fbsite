<!-- Content Wrapper Start -->
   <div class="content_wrapper">
     <!-- Blog Breadscrumb Start -->
       <div class="breadcrumb_wrap" data-stellar-background-ratio="0.3" style="background: url(images/bg_img.jpg); background-attachment: fixed; background-position: 50% 50%;">
         <div class="breadcrumb_wrap_inner">
             <div class="container">
               <h1>Events</h1>

             </div>
           </div>
       </div>
       <!-- Blog Breadscrumb Start -->

       <!-- Blog Detail Wrapper Start -->
       <div id="blog" class="blog">
           <div class="container">
               <!-- Blog Detail Start -->
               <div class="dtl_wrapper col-lg-12 col-md-8 col-sm-12 col-xs-12">
                 <div class="dtl_inner_wrap">
                   <?php foreach ($Blogs as $blog) { ?>
                       <div class="dtl_inner">
                           <div class="dtl_head">

                               <h2><?=$blog['BLOG_TITLE']?></h2>

                           </div>
                           <div class="dtl_block">
                               <div class="dtl_img">
                                   <img alt="Blog Image" src="<?=base_url() . '../financialbrainsCP/uploads/blog/' . $blog['BLOG_IMGE']?>">
                               </div>
                               <div class="dtl_inner_block">

                                   <div class="blog_info">
                                       <p><?=$blog['BLOG_DESC']?></p>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="clearfix"></div>
                     <?php } ?>

                   </div>




               </div>
               <!-- Blog Detail End -->
             </div>
             </div>
             </div>
