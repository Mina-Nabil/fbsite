<div class="content_wrapper">
<!-- Courses Start -->
     <div id="faculty_wrapper" class="faculty_wrapper">
         <!-- Courses Content Start -->
         <div class="container">
           <!-- Course Wrapper Start -->
             <div class="faculty_wrapp col-lg-9 col-md-8 col-sm-12 col-xs-12">


                 <!-- Courses Wrapper Start -->
                 <div class="wrapper_faculty">
                   <?php foreach ($ArrInstructors as $Instructor){?>
                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                         <div class="faculty_block">
                             <div class="img_wrap">
                                 <img alt="<?=$Instructor['INST_NAME']?>" height="350px" src="<?=base_url() . "../financialbrainsCP/uploads/instructors/" . $Instructor['INST_IMG']?>">
                                  <div class="faculty_img_hoverlay_btn"><a href="<?=base_url() . "instructor_dtl/" . $Instructor['INST_ID']?>" title="View Profile" class="btn btn_glob">View Profile</a></div>

                             </div>
                             <div class="science">
                                 <div class="faculty_info">
                                   <h4><?=$Instructor['INST_NAME']?></h4>
                                     <p><?=$Instructor['INST_DESC']?></p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <?php }?>
                 </div>
                 <!-- Courses Wrapper End -->

                 <div class="clearfix"></div>
                 <!-- Pagination Start -->
                 <div class="pager">
                     <div class="pages">
                         <ul class="pagination">
                             <?php for($i = 1 ; $i<=$pagesCount; $i++){?>
                             <li <?if($pageNum == $i) echo "class='active'"?>><a href="<?=base_url() . 'instructors/' . $i?>" ><?=$i?></a></li>
                             <?php }?>
                             <?php if($pageNum < $pagesCount){?>
                             <li><a  href="<?=base_url() . 'instructors/' . ($pageNum+1)?>">Next</a></li>
                             <?php }?>
                         </ul>
                     </div>
                 </div>
                 <!-- Pagination End -->

             </div>
             <!-- Course Wrapper End -->


         </div>
         <!-- Courses Content End -->
     </div>
     <!-- Courses End -->
   </div>
