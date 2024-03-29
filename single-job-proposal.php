<?php
/**
 * Template used for single posts and other post-types
 * that don't have a specific template.
 *
 * @package Avada
 * @subpackage Templates
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>

<?php get_header(); ?>

<section id="content" style="<?php echo esc_attr( apply_filters( 'awb_content_tag_style', '' ) ); ?>">
        <article id="post-<?php the_ID(); ?>" <?php post_class( 'post' ); ?>>

			<div class="container-fluid">

                <div class="row d-flex gx-5 align-items-center intro">
                   
                    <div class=" col-md-7 col-sm-12 col-xs-12 p-2 intro-content">
                    <!--<h1 class="thanks"><?php echo esc_html( 'Thank you '.get_field('interviewer_name').'!' ); ?></h1>-->
                <h1 class="thanks"><?php echo esc_html( 'Thank you '); ?>
                        <span class="interviewer-name"><?php echo esc_html(get_field('interviewer_name').'!' ); ?></span>
                    </h1>
                    <hr class="divider"></hr>
                    <div class="banner-text"><?php echo esc_html(the_field('thank_you_message')); ?></div>
                    <a class="resume-button" href="/wp-content/uploads/2023/08/KScott-resume-2023.pdf" target="blank">Download my resume</a>
                    <!--<a class="resume-button" href="/wp-content/uploads/2023/08/KScott-resume-2023.pdf" target="blank">Download a copy of my resumé</a>-->

                    
                    </div>
                    <div class="col-md-5 col-sm-12 col-xs-12 p-2 text-center">
                        <img class="company-logo" src="<?php echo esc_html(get_field('company_logo')); ?>" alt="<?php echo esc_html(get_field('company_name')); ?>"/>
                    </div>
                    </div>
                
				
                <div class="thanks-section">
                    
                        <h2><?php echo esc_html(get_field('key_projects_header')); ?></h2>
                        <div><?php echo esc_html(the_field('key_projects_descriptor')); ?></div>
                        <hr class="divider"></hr>
                        <div class="projects">
                        <?php if( have_rows('projects') ): ?>
                            <?php while( have_rows('projects')) : the_row(); ?>
                                <?php $project_name = get_sub_field('project_name'); ?>
                                <?php $project_image = get_sub_field('featured_image'); ?>
                                <?php $project_link = get_sub_field('project_link'); ?>
                                
                                    <div class="project-item row d-flex gx-5">
                                        <div class="col-md-6 col-sm-12 col-xs-12 p-2">
                                            <h3><?php echo esc_html($project_name); ?></h3>
                                            <div><?php echo esc_html(the_sub_field('project_description')); ?></div>
                                            <?php if( $project_link ): ?>
                                               <!--<a class="project-button" href=”<?php esc_attr(get_sub_field('project_link')); ?>”><?php esc_attr(get_sub_field('project_link')); ?>Learn more about this project</a>-->
                                               <div class="project-button"><a href="<?php echo esc_url( $project_link ); ?>" target="blank">View this project</a></div>
                                            <?php endif; ?>

                                            <!--Skill Group-->
                                            <?php if( have_rows('skillset_list') ): ?>
                                            
                                                <?php while( have_rows('skillset_list') ): the_row(); ?>
                                                    <!--CODING LANGUAGES LOOP-->
                                                <?php  if( have_rows('coding_languages') ): ?>
                                                <h4>Coding languages used:</h4>
                                                        <ul>
                                                        <?php while( have_rows('coding_languages') ) : the_row(); ?>

                                                                <?php $code_language_item = get_sub_field('language_name'); ?>
                                                                <li><?php echo esc_html($code_language_item); ?></li>

                                                            <?php endwhile; ?>
                                                        </ul>
                                                    <?php endif; ?> 

                                                    <!--CMS LOOP-->
                                                        <?php  if( have_rows('cms_systems_builders') ): ?>
                                                        <h4>CMS and plug-ins used:</h4>
                                                        <ul>
                                                        <?php while( have_rows('cms_systems_builders') ) : the_row(); ?>

                                                                <?php $system_item = get_sub_field('name_of_system'); ?>
                                                                <li><?php echo esc_html($system_item); ?></li>

                                                            <?php endwhile; ?>
                                                        </ul>
                                                    <?php endif; ?> 

                                                    <!--Software LOOP-->
                                                        <?php  if( have_rows('software') ): ?>
                                                        <h4>Software and apps used:</h4>
                                                        <ul>
                                                        <?php while( have_rows('software') ) : the_row(); ?>

                                                                <?php $software_item = get_sub_field('software_name'); ?>
                                                                <li><?php echo esc_html($software_item); ?></li>

                                                            <?php endwhile; ?>
                                                        </ul>
                                                    <?php endif; ?> 

                                                    <!--Library LOOP-->
                                                        <?php  if( have_rows('coding_libraries_used') ): ?>
                                                        <h4>Coding frameworks and libraries used:</h4>
                                                        <ul>
                                                        <?php while( have_rows('coding_libraries_used') ) : the_row(); ?>

                                                                <?php $library_item = get_sub_field('library_name'); ?>
                                                                <li><?php echo esc_html($library_item); ?></li>

                                                            <?php endwhile; ?>
                                                        </ul>
                                                    <?php endif; ?> 

                                                <?php endwhile; ?>
                                            <?php endif; ?><!--End of skill list-->

                                            

                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12 p-2 text-center">
                                            <img class="project-featured-image" src="<?php echo esc_html(the_sub_field('featured_image')); ?>"/>

                                        </div>
                                    </div>
                                    
                                <?php endwhile; ?>
                        <?php endif; ?>
                        </div>
                    

                </div>

                <div class="thanks-section">

                     <?php if( have_rows('certifications') ): ?>
                                    
                                    <h2>Certifications</h2>

                                    <hr class="divider"></hr>
                                    <div class="row">
                                        <div class="certifications">
                                            <?php while( have_rows('certifications')) : the_row(); ?>
                                            <?php $certification_name = get_sub_field('name_of_certification'); ?>
                                            <?php $certification_logo = get_sub_field('certification_logo'); ?>
                                            <?php $certification_link = get_sub_field('certification_link'); ?>
                                                <div class="col-md-6 col-sm-6 col-xs-12 p-2 text-center">
                                                    <img class="certification-logo" src="<?php echo esc_html($certification_logo); ?>" alt="<?php echo esc_html($certification_name); ?>"/>
                                                    <p><a class="certification-link" href="<?php echo esc_url( $certification_link ); ?>" target="blank"><strong><?php echo esc_html($certification_name); ?></strong></a></p>
                                                </div>
                                            <?php endwhile; ?>
                                        </div>
                                    <div>
                    <?php endif; ?> 

                    <?php if( have_rows('plugin_apps') ): ?>
                                    
                                    <h2>Plug-ins & App Experiences</h2>

                                    <hr class="divider"></hr>
                                    <div class="row">
                                        <div class="certifications">
                                            <?php while( have_rows('plugin_apps')) : the_row(); ?>
                                            <?php $app_name = get_sub_field('name_of_app'); ?>
                                            <?php $app_logo = get_sub_field('app_logo'); ?>
                                            
                                                <div class="col-md-4 col-sm-6 col-xs-12 p-2 text-center">
                                                    <img class="certification-logo" src="<?php echo esc_html($app_logo); ?>" alt="<?php echo esc_html($app_name); ?>"/>
                                                    <p><strong><?php echo esc_html($app_name); ?></strong></p>
                                                </div>
                                            <?php endwhile; ?>
                                        </div>
                                    </div>
                            <?php endif; ?>     

                        
                </div>
                

			</div>

		</article>
	
</section>

