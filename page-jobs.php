<?php
/*
 * 
 * Central list of jobs for the STH Careers website
 * 
 * Template Name: All Jobs
 * @package sth
 */

get_header(); ?>
<section class="breadcrumb-container breadcrumb-container-vacancies">
  <div class="container">
    <div class="col-md-12">
      <?php sth_breadcrumbs(); ?>
    </div>
  </div>
</section>

	 <div id="primary" class="container">
    <div class="row">
      
      
      <main id="main" class="col-md-12" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
        
        <div id="master">
          <div class="row">
            
            <div class="col-md-3">
              <div class="row">
                <div id="job-form-controls">
                
                  <div class="col-md-12 col-sm-6 col-xs-12">
                    <div class="panel panel-primary visible-xs">
                      <div class="panel-heading">
                        <h5 class="panel-title">
                           Join the team!
                        </h5>
                      </div>

                      <div class="panel-body">
                        <p class="lead">Healthcare Scientist, Nurse or looking for your first post? Search our latest vacancies below</p>
                        <p>Use the filters below and our search box to find the right role for you</p>
                        <p>Alternatively, feel free to <a href="#results">jump straight to the posts available</a></p>
                      </div>
                    </div>
                    
                    <div class="panel panel-primary">
                      <div class="panel-heading">
                        <h5 class="panel-title">
                          <a class="" role="button" data-toggle="collapse" href="#staffGroupsControls" aria-expanded="true" aria-controls="collapseExample">
                            Staff Groups <span class="caret"></span>
                          </a>
                        </h5>
                      </div>

                      <div class="panel-body collapse in" id="staffGroupsControls" aria-expanded="true">
                        <aside role="complementary" id="radio-controls">
                          <form id="nhs-staff-groups">
                            <div class="radio">
                              <label>
                                <input id="all-staff-groups" name="nhs-staff-groups" type="radio" value="">
                                All Staff Groups
                              </label>
                            </div>
                            
                            <div class="radio">
                              <label>
                                <input id="admin-clerical" name="nhs-staff-groups" type="radio" value="administrative-clerical">
                                Administrative &amp; Clerical
                              </label>
                            </div>

                            <div class="radio">
                              <label>
                                <input id="allied-health" name="nhs-staff-groups" type="radio" value="allied-health">
                                Allied Health Professionals
                              </label>
                            </div>

                            <div class="radio">
                              <label>
                                <input id="additional-clinical" name="nhs-staff-groups" type="radio" value="additional-clinical">
                                Additional Clinical Services
                              </label>
                            </div>

                            <div class="radio">
                              <label>
                                <input id="additional-professional" name="nhs-staff-groups" type="radio" value="additional-professional">
                                Additional Professional Scientific &amp; Technical
                              </label>
                            </div>

                            <div class="radio">
                              <label>
                                <input id="estates-ancillary" name="nhs-staff-groups" type="radio" value="estates-ancillary">
                                Estates &amp; Ancillary
                              </label>
                            </div>

                            <div class="radio">
                              <label>
                                <input id="healthcare-scientists" name="nhs-staff-groups" type="radio" value="healthcare-scientists">
                                Healthcare Scientists
                              </label>
                            </div>

                            <div class="radio">
                              <label>
                                <input id="medical-dental" name="nhs-staff-groups" type="radio" value="medical-dental">
                                Medical &amp; Dental
                              </label>
                            </div>

                            <div class="radio">
                              <label>
                                <input id="nursing-midwifery" name="nhs-staff-groups" type="radio" value="nursing-midwifery">
                                Nursing &amp; Midwifery
                              </label>
                            </div>

                            <div class="radio">
                              <label>
                                <input id="students" name="nhs-staff-groups" type="radio" value="students">
                                Students
                              </label>
                            </div>
                          </form>
                        </aside>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-md-12 col-sm-6 col-xs-12">
                    <div class="panel panel-primary">
                      <div class="panel-heading">
                        <h5 class="panel-title">
                          <a class="" role="button" data-toggle="collapse" href="#jobtypeControls" aria-expanded="true" aria-controls="collapseExample">
                            Job Type <span class="caret"></span>
                          </a>
                        </h5>
                      </div>


                      <div class="panel-body collapse in" id="jobtypeControls" aria-expanded="true">
                        <aside role="complementary" id="radio-controls-job-type">
                          <form id="nhs-job-type">
                            <div class="radio">
                               <label>
                                 <input id="all-types" name="nhs-job-type" type="radio" value="">
                                 All
                               </label>
                             </div>
                            
                            <div class="radio">
                               <label>
                                 <input id="permanent" name="nhs-job-type" type="radio" value="permanent">
                                 Permanent
                               </label>
                             </div>

                             <div class="radio">
                               <label>
                                 <input id="fixed-term" name="nhs-job-type" type="radio" value="fixed-term">
                                 Fixed Term
                               </label>
                             </div>

                             <div class="radio">
                               <label>
                                 <input id="apprenticeship" name="nhs-job-type" type="radio" value="apprenticeship">
                                 Apprenticeship
                               </label>
                             </div>

                             <div class="radio">
                               <label>
                                 <input id="voluntary" name="nhs-job-type" type="radio" value="voluntary">
                                 Voluntary
                               </label>
                             </div>

                          </form>
                        </aside>
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="panel panel-primary">
                      <div class="panel-heading">
                        <h5 class="panel-title">
                          <a class="" role="button" data-toggle="collapse" href="#popularSearches" aria-expanded="true" aria-controls="collapseExample">
                            Popular Searches <span class="caret"></span>
                          </a>
                        </h5>
                      </div>


                      <div class="panel-body collapse in" id="popularSearches" aria-expanded="true">
                      <a role="role" href="<?php echo the_permalink() . "?referrer=staff%20nurse" ;?>">Staff Nurses</a>
                      </div>
                    </div>
                  </div>
                  
                </div>                
              </div>
            </div>
            
            <div class="col-md-9">
              
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <h5 class="panel-title">
                    <a class="" role="button" data-toggle="collapse" href="#searchForm" aria-expanded="true" aria-controls="collapseExample">
                      Search Vacancies <span class="caret"></span>
                    </a>
                  </h5>
                </div>

                <div class="panel-body collapse in" id="searchForm" aria-expanded="true">
                  <form id="job-search">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search Vacancies">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Search</button>
                      </span>
                    </div>
                  </form>
                </div>
              </div>
              
              
              <div id="results">
                
                <p><span class='job-counter'><span class='job-count'></span> Jobs Returned </span></p>
                
                <div class="row">
                  <?php echo sth_job_feed();?>
                </div>

              </div>
            </div>
            
          </div>
        </div>

			<?php endwhile; // End of the loop. ?>

		  </main><!-- #main -->
      

      
	  </div><!-- #primary -->
  </div>

  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/job.js"></script>

<?php get_footer(); ?>