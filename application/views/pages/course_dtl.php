<div class="content_wrapper">
<!-- Courses Start -->
       <div id="dtl_wrap" class="dtl_wrap">

           <!-- Courses Content Start -->
           <div class="container">
             <!-- Course Wrapper Start -->
               <div class="dtl_wrapper col-lg-9 col-md-8 col-sm-12 col-xs-12">
                   <!-- Detail Wrapper Start -->
                 <div class="dtl_inner_wrap">
                     <!-- Dtl Inner Start -->
                       <div class="dtl_inner last">
                           <div class="dtl_head">
                               <h1><?=$Course['CRS_NAME']?></h1>
                               <div class="dtl_meta_info">
                                   <p></p>
                               </div>
                           </div>
                           <div class="dtl_block">
                               <div class="dtl_img">
                                   <img alt="Blog Image" src="<?=base_url() . "../financialbrainsCP/uploads/courses/" . $Course['CRS_IMG']?>">
                               </div>
                               <div class="detail_text_wrap">
                                 <div class="info_wrapper">
                                     <div class="info_head">
                                       <h4>Description</h4>
                                           <p><?=$Course['CRS_BRIEF']?></p>
                                       </div>
                                   </div>
                                 <div class="info_wrapper">
                                     <div class="info_head">
                                       <h4>Course Benefits</h4>
                                       <p>Here's a list of what you should expect from our course:.</p>
                                       </div>
                                       <ul class="arr_menu">
                                         <?php foreach ($Benefits as $benefit){?>
                                           <li><?=$benefit['BNFT_DESC']?></li>
                                           <?php }?>

                                       </ul>

                                   </div>

                                   <div class="info_wrapper">
                                     <div class="info_head">
                                       <h4>Course Details</h4>
                                       </div>

                                       <h5>Click for more details</h5>
                                       <div class="panel-group" id="accordion">
                                           <div class="panel panel-default">
                                               <div class="panel-heading" id="head_One">
                                                   <h4 class="panel-title">
                                                       <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#ques_one">
                                                           <i class="fa fa-eyedropper"></i><span>/</span>Course Topics <i class="fa fa-plus"></i>
                                                       </a>
                                                   </h4>
                                               </div>
                                               <div id="ques_one" class="panel-collapse collapse">
                                                   <div class="panel-body">
                                                       <ul>
                                                         <li>
                                                             <ul>
                                                               <?php foreach($Topics as $topic){?>
                                                                   <li>
                                                                     <strong><?=$topic['TOPC_NAME']?></strong>
                                                                    <br>
                                                                    <?=$topic['TOPC_DESC']?></li>
                                                               <?php }?>
                                                           </ul>
                                                           </li>
                                                       </ul>
                                                   </div>
                                               </div>
                                           </div>

                                           <div class="panel panel-default">
                                               <div class="panel-heading" id="head_two">
                                                   <h4 class="panel-title">
                                                       <a class="collapsed" data-toggle="collapse" data-parent="#head_two" href="#ques_two">
                                                         <i class="fa fa-object-group"></i><span>/</span>Candidates <i class="fa fa-plus"></i>
                                                       </a>
                                                   </h4>
                                               </div>
                                               <div id="ques_two" class="panel-collapse collapse">
                                                   <div class="panel-body">
                                                       <ul>
                                                         <li>
                                                             <ul>
                                                               <?php foreach($Candidates as $candidate){?>
                                                                   <li><?=$candidate['CNDT_NAME']?></li>
                                                               <?php }?>
                                                           </ul>
                                                           </li>
                                                       </ul>
                                                   </div>
                                               </div>
                                           </div>

                                           <div class="panel panel-default">
                                               <div class="panel-heading" id="head_three">
                                                   <h4 class="panel-title">
                                                       <a class="collapsed" data-toggle="collapse" data-parent="#head_three" href="#ques_three">
                                                           <i class="fa fa-cubes"></i><span>/</span>Exams <i class="fa fa-plus"></i>
                                                       </a>
                                                   </h4>
                                               </div>
                                               <div id="ques_three" class="panel-collapse collapse">
                                                   <div class="panel-body">
                                                       <ul>
                                                         <li>
                                                             <ul>
                                                               <?php foreach($Exams as $exam){?>
                                                                   <li><?=$exam['EXAM_NAME'] . ":"?>
                                                                     <br><br>
                                                                     <?=$exam['EXAM_DESC']?>
                                                                   </li>
                                                               <?php }?>
                                                           </ul>
                                                           </li>
                                                       </ul>
                                                   </div>
                                               </div>
                                           </div>

                                           <div class="panel panel-default">
                                               <div class="panel-heading" id="head_four">
                                                   <h4 class="panel-title">
                                                       <a class="collapsed" data-toggle="collapse" data-parent="#head_four" href="#ques_four">
                                                         <i class="fa fa-flask"></i><span>/</span>Instructors <i class="fa fa-plus"></i>
                                                       </a>
                                                   </h4>
                                               </div>
                                               <div id="ques_four" class="panel-collapse collapse">
                                                   <div class="panel-body">
                                                       <ul>
                                                         <li>
                                                             <ul>
                                                               <?php foreach($Instructors as $instructor){?>
                                                                   <li><?=$instructor['INST_NAME']?></li>
                                                               <?php }?>
                                                           </ul>
                                                           </li>
                                                       </ul>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>

                               </div>
                           </div>
                       </div>
                       <!-- Dtl Inner End -->
                   </div>
                   <!-- Detail Wrapper End -->
                   <div class="clearfix"></div>

               </div>
               <!-- Course Wrapper End -->

               <!-- Course Aside Start -->
               <div class="aside_wrapper col-lg-3 col-md-4 col-sm-12 col-xs-12">

                 <!-- Course Events Start -->
                   <div class="course_tutor">
                     <h4>Instructors</h4>
                       <ul>
                         <?php foreach($Instructors as $instructor){?>
                         <li>
                             <div class="tutor_img">
                                 <img alt="<?=$instructor['INST_NAME']?>" src="<?=base_url() . "../financialbrainsCP/uploads/instructors/" . $instructor['INST_IMG']?>">
                               </div>
                               <div class="tutor_info">
                                 <h5>
                                     <a href="<?=base_url().'instructor_dtl/' . $instructor['INST_ID']?>"><?=$instructor['INST_NAME']?></a>

                               </div>
                           </li>
                           <?php }?>
                       </ul>
                   </div>
                   <!-- Course Events End -->

               </div>
               <!-- Course Aside End -->
           </div>
           <!-- Courses Content End -->
       </div>
       <!-- Courses End -->
     </div>
