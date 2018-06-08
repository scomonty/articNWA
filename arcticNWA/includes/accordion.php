<?php
$slide_options = wp_parse_args(  get_theme_mod('arctic_slider_content', array()), theme_setup_data() );
$current_options = wp_parse_args(  get_option( 'arctic_theme_options', array() ), theme_setup_data() );
if( $current_options['accordion_panel_enabled'] == 'on'){
    ?>
<div id="homepage-accordion" class="homepage-accordion">
    <div class="cms--accordion">
        <div class="accordion--container" data-component-id="801">
            <div class="accordion _is-normal _has-scrolled-past _is-scrolled-past" data-accordion="" data-arctic="" data-scroll-past="">
                <div class="accordion--image" data-accordion-image="" data-scroll-past-item=""></div>
                <div class="accordion--headline">
                    <?php if($current_options['accordion_head_title']!='') {?>
                            <h2><?php echo esc_html($current_options['accordion_head_title']); ?></h2>
                            <?php }
                            else { ?> <h2><?php echo ($slide_options['accordion_headline']); ?></h2 <?php }?>
                        </div>
                <div class="accordion--items" data-arctic-items="" data-accordion-items="" data-scroll-past-item="">
                    <div class="accordion-item" data-component-id="803" data-accordion-item="true" data-accordion-item-id="0" data-arctic-item="true" data-arctic-item-id="0">
                        <div class="accordion-item--content -flush-on-mobile">
                            <div class="accordion-item--left">
                                <div class="accordion-item--top">
                                    <h2 class="accordion-item--content-title header_one"><?php if($current_options['accordion_panel_one_head']!='') { echo esc_html($current_options['accordion_panel_one_head']); } else { echo ($slide_options['accordion_panel_one_header']); }?></h2>
                                    <div class="accordion-item--content-body body_one">
                                        <div><?php if($current_options['accordion_panel_one_body']!='') { echo esc_html($current_options['accordion_panel_one_body']); } else { echo ($slide_options['accordion_panel_one_content']); }?></div>
                                        <ul class="markdown--ul">
                                            <?php if($current_options['accordion_panel_one_bullet_one']!='') { ?> <li> <?php echo esc_html($current_options['accordion_panel_one_bullet_one']); ?> </li> <?php }?>
                                            <?php if($current_options['accordion_panel_one_bullet_two']!='') { ?> <li> <?php echo esc_html($current_options['accordion_panel_one_bullet_two']); ?> </li> <?php }?>
                                            <?php if($current_options['accordion_panel_one_bullet_three']!='') { ?> <li> <?php echo esc_html($current_options['accordion_panel_one_bullet_three']); ?> </li> <?php }?>
                                            <?php if($current_options['accordion_panel_one_bullet_four']!='') { ?> <li> <?php echo esc_html($current_options['accordion_panel_one_bullet_four']); ?> </li> <?php }?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item--cover">
                            <div class="accordion-item--cover-blurb">
                                <div class="accordion-item--cover-blurb-title one_head"><?php if($current_options['accordion_panel_one_head']!='') { echo esc_html($current_options['accordion_panel_one_head']); } else { echo ($slide_options['accordion_panel_one_header']); }?></div>
                                <div class="accordion-item--cover-blurb-subtitle one_sub"><?php if($current_options['accordion_panel_one_subhead']!='') { echo esc_html($current_options['accordion_panel_one_subhead']); } else { echo ($slide_options['accordion_panel_one_subheader']); }?></div>
                            </div>
                        </div>
                        <div class="accordion-item--nav-label one_label"><?php if($current_options['accordion_panel_one_head']!='') { echo esc_html($current_options['accordion_panel_one_head']); } else { echo ($slide_options['accordion_panel_one_header']); }?></div>
                        <div class="accordion-item--action" data-arctic-item--action="">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 37 37" version="1.1"><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="Homepage_1024_Expanded-1" transform="translate(-892.000000, -1294.000000)"><g id="Oval-105-Copy-3-+-Line-+-Line-Copy-10-Copy-Copy-Copy-Copy-Copy-Copy-Copy-Copy-Copy-Copy-Copy-Copy-Copy-Copy" transform="translate(892.000000, 1294.000000)"><circle id="Oval-105-Copy-3" fill="#e3d3c6" cx="18.5" cy="18.5" r="17.8833333"></circle><path d="M18.5,11.1 L18.5,25.9" id="Line" stroke="#9B9B9B" stroke-width="1.1" stroke-linecap="square"></path><path d="M25.9,18.5 L11.1,18.5" id="Line-Copy-10" stroke="#9B9B9B" stroke-width="1.1" stroke-linecap="square"></path></g></g></g></svg>
                        </div>
                    </div>
                    <div class="accordion-item" data-component-id="804" data-accordion-item="true" data-accordion-item-id="1" data-arctic-item="true" data-arctic-item-id="1">
                        <div class="accordion-item--content -flush-on-mobile">
                            <div class="accordion-item--left">
                                <div class="accordion-item--top">
                                    <h2 class="accordion-item--content-title header_two"><?php if($current_options['accordion_panel_two_head']!='') { echo esc_html($current_options['accordion_panel_two_head']); } else { echo ($slide_options['accordion_panel_two_header']); }?></h2>
                                    <div class="accordion-item--content-body body_two">
                                        <div><?php if($current_options['accordion_panel_two_body']!='') { echo esc_html($current_options['accordion_panel_two_body']); } else { echo ($slide_options['accordion_panel_two_content']); }?></div>
                                        <ul class="markdown--ul">
                                            <?php if($current_options['accordion_panel_two_bullet_one']!='') { ?> <li> <?php echo esc_html($current_options['accordion_panel_two_bullet_one']); ?> </li> <?php }?>
                                            <?php if($current_options['accordion_panel_two_bullet_two']!='') { ?> <li> <?php echo esc_html($current_options['accordion_panel_two_bullet_two']); ?> </li> <?php }?>
                                            <?php if($current_options['accordion_panel_two_bullet_three']!='') { ?> <li> <?php echo esc_html($current_options['accordion_panel_two_bullet_three']); ?> </li> <?php }?>
                                            <?php if($current_options['accordion_panel_two_bullet_four']!='') { ?> <li> <?php echo esc_html($current_options['accordion_panel_two_bullet_four']); ?> </li> <?php }?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item--cover">
                            <div class="accordion-item--cover-blurb">
                                <div class="accordion-item--cover-blurb-title two_head"><?php if($current_options['accordion_panel_two_head']!='') { echo esc_html($current_options['accordion_panel_two_head']); } else { echo ($slide_options['accordion_panel_two_header']); }?></div>
                                <div class="accordion-item--cover-blurb-subtitle two_sub"><?php if($current_options['accordion_panel_two_subhead']!='') { echo esc_html($current_options['accordion_panel_two_subhead']); } else { echo ($slide_options['accordion_panel_two_subheader']); }?></div>
                            </div>
                        </div>
                        <div class="accordion-item--nav-label two_label"><?php if($current_options['accordion_panel_two_head']!='') { echo esc_html($current_options['accordion_panel_two_head']); } else { echo ($slide_options['accordion_panel_two_header']); }?></div>
                        <div class="accordion-item--action" data-arctic-item--action="">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 37 37" version="1.1"><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="Homepage_1024_Expanded-1" transform="translate(-892.000000, -1294.000000)"><g id="Oval-105-Copy-3-+-Line-+-Line-Copy-10-Copy-Copy-Copy-Copy-Copy-Copy-Copy-Copy-Copy-Copy-Copy-Copy-Copy-Copy" transform="translate(892.000000, 1294.000000)"><circle id="Oval-105-Copy-3" fill="#e3d3c6" cx="18.5" cy="18.5" r="17.8833333"></circle><path d="M18.5,11.1 L18.5,25.9" id="Line" stroke="#9B9B9B" stroke-width="1.1" stroke-linecap="square"></path><path d="M25.9,18.5 L11.1,18.5" id="Line-Copy-10" stroke="#9B9B9B" stroke-width="1.1" stroke-linecap="square"></path></g></g></g></svg>
                        </div>
                    </div>
                    <div class="accordion-item" data-component-id="805" data-accordion-item="true" data-accordion-item-id="2" data-arctic-item="true" data-arctic-item-id="2">
                        <div class="accordion-item--content -flush-on-mobile">
                            <div class="accordion-item--left">
                                <div class="accordion-item--top">
                                    <h2 class="accordion-item--content-title header_three"><?php if($current_options['accordion_panel_three_head']!='') { echo esc_html($current_options['accordion_panel_three_head']); } else { echo ($slide_options['accordion_panel_three_header']); }?></h2>
                                    <div class="accordion-item--content-body body_three">
                                        <div><?php if($current_options['accordion_panel_three_body']!='') { echo esc_html($current_options['accordion_panel_three_body']); } else { echo ($slide_options['accordion_panel_three_content']); }?></div>
                                        <ul class="markdown--ul">
                                            <?php if($current_options['accordion_panel_three_bullet_one']!='') { ?> <li> <?php echo esc_html($current_options['accordion_panel_three_bullet_one']); ?> </li> <?php }?>
                                            <?php if($current_options['accordion_panel_three_bullet_two']!='') { ?> <li> <?php echo esc_html($current_options['accordion_panel_three_bullet_two']); ?> </li> <?php }?>
                                            <?php if($current_options['accordion_panel_three_bullet_three']!='') { ?> <li> <?php echo esc_html($current_options['accordion_panel_three_bullet_three']); ?> </li> <?php }?>
                                            <?php if($current_options['accordion_panel_three_bullet_four']!='') { ?> <li> <?php echo esc_html($current_options['accordion_panel_three_bullet_four']); ?> </li> <?php }?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item--cover">
                            <div class="accordion-item--cover-blurb">
                                <div class="accordion-item--cover-blurb-title three_head"><?php if($current_options['accordion_panel_three_head']!='') { echo esc_html($current_options['accordion_panel_three_head']); } else { echo ($slide_options['accordion_panel_three_header']); }?></div>
                                <div class="accordion-item--cover-blurb-subtitle three_sub"><?php if($current_options['accordion_panel_three_subhead']!='') { echo esc_html($current_options['accordion_panel_three_subhead']); } else { echo ($slide_options['accordion_panel_three_subheader']); }?></div>
                            </div>
                        </div>
                        <div class="accordion-item--nav-label three_label"><?php if($current_options['accordion_panel_three_head']!='') { echo esc_html($current_options['accordion_panel_three_head']); } else { echo ($slide_options['accordion_panel_three_header']); }?></div>
                        <div class="accordion-item--action" data-arctic-item--action="">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 37 37" version="1.1">
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Homepage_1024_Expanded-1" transform="translate(-892.000000, -1294.000000)">
                                        <g id="Oval-105-Copy-3-+-Line-+-Line-Copy-10-Copy-Copy-Copy-Copy-Copy-Copy-Copy-Copy-Copy-Copy-Copy-Copy-Copy-Copy" transform="translate(892.000000, 1294.000000)">
                                            <circle id="Oval-105-Copy-3" fill="#e3d3c6" cx="18.5" cy="18.5" r="17.8833333"></circle>
                                            <path d="M18.5,11.1 L18.5,25.9" id="Line" stroke="#9B9B9B" stroke-width="1.1" stroke-linecap="square"></path>
                                            <path d="M25.9,18.5 L11.1,18.5" id="Line-Copy-10" stroke="#9B9B9B" stroke-width="1.1" stroke-linecap="square"></path>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
<?php } ?>
