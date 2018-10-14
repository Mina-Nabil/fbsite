<!-- Courses Start -->
<div class="content_wrapper">
        <div id="courses_wrapper" class="courses_wrapper">

            <!-- Courses Content Start -->
            <div class="container">
            	<!-- Course Wrapper Start -->
                <div class="course_wrapp col-lg-9 col-md-8 col-sm-12 col-xs-12">


                    <!-- Courses Wrapper Start -->
                    <div class="wrapper_course">


                      <?php foreach ($ArrCourses as $course){?>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="course_block">
                                <div class="img_wrap left">
                                  <a href="<?=base_url() .'course_dtl/' . $course['CRS_ID']  ?>" title="View More" >
                                    <img width="340px" height="180px" alt="<?=$course['CRS_NAME']?>" src="<?=base_url() . "../financialbrainsCP/uploads/courses/" . $course['CRS_IMG']?>">
                                    <div class="course_img_hoverlay_btn">
                                    </div>
                                  </a>

                                </div>

                                <div class="info_wrap">
                                    <div class="business">

                                        <div class="course_info">
                                          <h4><?=$course['CRS_NAME']?></h4>
                                            <p><?=$course['CRS_BRIEF']?></p>
                                        </div>
                                    </div>
                                    <div class="science course_count_wrap">
                                        <div class="course_count">
                                            Duration: <span><?=$course['CRS_DUR']?></span>
                                        </div>
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
                                <li <?php if($pageNum == $i) echo "class='active'"?> ><a href="<?=base_url() . 'courses/' . $i?>" ><?=$i?></a></li>
                                <?php }?>
                                <?php if($pageNum < $pagesCount){?>
                                <li><a  href="<?=base_url() . 'courses/' . ($pageNum+1)?>">Next</a></li>
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
