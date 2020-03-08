<?php
/**
 * Astra functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Define Constants
 */
define( 'ASTRA_THEME_VERSION', '2.1.3' );
define( 'ASTRA_THEME_SETTINGS', 'astra-settings' );
define( 'ASTRA_THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'ASTRA_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );


/**
 * Minimum Version requirement of the Astra Pro addon.
 * This constant will be used to display the notice asking user to update the Astra addon to latest version.
 */
define( 'ASTRA_EXT_MIN_VER', '2.0.0' );

/**
 * Setup helper functions of Astra.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-theme-options.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-theme-strings.php';
require_once ASTRA_THEME_DIR . 'inc/core/common-functions.php';

/**
 * Update theme
 */
require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-theme-update.php';
require_once ASTRA_THEME_DIR . 'inc/theme-update/astra-update-functions.php';
require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-theme-background-updater.php';
require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-pb-compatibility.php';


/**
 * Fonts Files
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-font-families.php';
if ( is_admin() ) {
	require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts-data.php';
}

require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts.php';

require_once ASTRA_THEME_DIR . 'inc/core/class-astra-walker-page.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-enqueue-scripts.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-gutenberg-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-dynamic-css.php';

/**
 * Custom template tags for this theme.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-attr.php';
require_once ASTRA_THEME_DIR . 'inc/template-tags.php';

require_once ASTRA_THEME_DIR . 'inc/widgets.php';
require_once ASTRA_THEME_DIR . 'inc/core/theme-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/admin-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/sidebar-manager.php';

/**
 * Markup Functions
 */
require_once ASTRA_THEME_DIR . 'inc/extras.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog-config.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog.php';
require_once ASTRA_THEME_DIR . 'inc/blog/single-blog.php';
/**
 * Markup Files
 */
require_once ASTRA_THEME_DIR . 'inc/template-parts.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-loop.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-mobile-header.php';

/**
 * Functions and definitions.
 */
require_once ASTRA_THEME_DIR . 'inc/class-astra-after-setup-theme.php';

// Required files.
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-helper.php';

require_once ASTRA_THEME_DIR . 'inc/schema/class-astra-schema.php';

if ( is_admin() ) {

	/**
	 * Admin Menu Settings
	 */
	require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-settings.php';
	require_once ASTRA_THEME_DIR . 'inc/lib/notices/class-astra-notices.php';

	/**
	 * Metabox additions.
	 */
	require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-boxes.php';
}

require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-box-operations.php';


/**
 * Customizer additions.
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-customizer.php';


/**
 * Compatibility
 */
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-jetpack.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/woocommerce/class-astra-woocommerce.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/edd/class-astra-edd.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/lifterlms/class-astra-lifterlms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/learndash/class-astra-learndash.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bb-ultimate-addon.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-contact-form-7.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-visual-composer.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-site-origin.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gravity-forms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bne-flyout.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-ubermeu.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-divi-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-amp.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-yoast-seo.php';
require_once ASTRA_THEME_DIR . 'inc/addons/transparent-header/class-astra-ext-transparent-header.php';
require_once ASTRA_THEME_DIR . 'inc/addons/breadcrumbs/class-astra-breadcrumbs.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-filesystem.php';

// Elementor Compatibility requires PHP 5.4 for namespaces.
if ( version_compare( PHP_VERSION, '5.4', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor-pro.php';
}

// Beaver Themer compatibility requires PHP 5.3 for anonymus functions.
if ( version_compare( PHP_VERSION, '5.3', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-themer.php';
}

/**
 * Load deprecated functions
 */
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-filters.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-functions.php';


function FLoopMarcas(){
	$terms = get_terms([
	    'taxonomy' => 'clientes',
	    'hide_empty' => false,
	]);
	//$marcas = get_posts( $args );
	
	?>

		<style>
			.marcas{
				width: 19.5%;
				display: inline-block;
			}
			
			.marcas img{
				padding: 1em;
                filter: grayscale(100%);
			}
            
            .marcas img:hover{
                filter: grayscale(0%);
                transition: 0.8ss filter ease;
            }
		</style>

	<?php
	
	
	foreach($terms as $marca){
		$image_url = get_field('logo', $marca->taxonomy .'_'. $marca->term_id);
// 		var_dump($marca);
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $image_url ));
		
		if($marca->count > 0){
			?><a href="https://exemplodesites.top/ionz/trabalhos/?cliente=<?php echo $marca->slug; ?>&projeto=&procura="><div class="marcas"><img src="<?php echo $image_url; ?>"></div></a><?php
		} else {
			?><div class="marcas"><img src="<?php echo $image_url; ?>"></div><?php
		}
	}
}
add_shortcode('LoopMarcas', 'FLoopMarcas');

function Imprimir_case_loop($post){
	
	$subtitulo = get_field('hashtag', $post->ID);
	$nome_cliente = get_field('titulo_1', $post->ID);
	$nome_campanha = get_field('titulo_2', $post->ID);
	$cor_subtitulo = get_field('cor_do_texto_acima_de_titulo', $post->ID);
	$cor_fundo = get_field('cor_de_fundo', $post->ID);
	$Imagem = get_field('imagem_em_destaque_do_case', $post->ID);
	
	
	?>
	
	<div class="item"><a href="<?php echo get_permalink($post->ID); ?>">
		<div class="content">
			
		
		<div class="case-loop" style="background-color: <?php echo $cor_fundo; ?>; background-image:url('<?php echo $Imagem; ?>');background-size: contain;
  background-position: bottom;
  background-repeat: no-repeat;
  min-height: 590px;" >
			<span style="color: <?php echo $cor_subtitulo; ?>"><?php echo $subtitulo; ?></span>
			<h2><b><?php echo $nome_cliente; ?></b></h2>
			<h2><?php echo $nome_campanha; ?></h2>
			<span style="color: <?php echo $cor_subtitulo; ?>" class="dot">...</span>
			
<!-- 			<img src="<?php// echo $Imagem; ?>"> -->
		</div>
		</div>
		</a>
	</div>
	

	<?php
	
}

function Imprimir_caseID_loop($id){
	
	$subtitulo = get_field('hashtag', $id);
	$nome_cliente = get_field('titulo_1', $id);
	$nome_campanha = get_field('titulo_2', $id);
	$cor_subtitulo = get_field('cor_do_texto_acima_de_titulo', $id);
	$cor_fundo = get_field('cor_de_fundo', $id);
	$Imagem = get_field('imagem_em_destaque_do_case', $id);
	
	
	?>
	
	<div class="item"><a href="<?php echo get_permalink($id); ?>">
		<div class="content">
			
		
		<div class="case-loop" style="background-color: <?php echo $cor_fundo; ?>; background-image: url('<?php echo $Imagem ?>');
									  background-size: contain; background-position: bottom; background-repeat:no-repeat">
			<span style="color: <?php echo $cor_subtitulo; ?>"><?php echo $subtitulo; ?></span>
			<h2><b><?php echo $nome_cliente; ?></b></h2>
			<h2><?php echo $nome_campanha; ?></h2>
			<span style="color: <?php echo $cor_subtitulo; ?>" class="dot">...</span>
<!-- 			<img src="<?php// echo $Imagem; ?>"> -->
		</div>
		</div>
		</a>
	</div>
	

	<?php
	
}

function FLoopCasesHome(){
	$args = array(
		'numberposts'	=> 6,
		'post_type' => 'cases'
	);
	$cases = get_posts( $args );
	
	?>
	<style>
        #contato-home-form {
/*            opacity: 0;*/
/*            height: 0;*/
/*            transition: opacity 0.5s ease-in-out;*/
            
        }

		.masonry { /* Masonry container */
			column-count: 2;
			column-gap: 5em;
		}

        
        
		.item { /* Masonry bricks or child elements */
			background-color: #eee;
			display: inline-block;
			margin: 0 0 5em;
			width: 100%;
		}
        
        span.elementor-screen-only{
            display: none;
        }
		.case-loop{
			
		}
		
		.case-loop span{
			font-size: 1.3rem;
			font-weight: 400;
			padding: 50px 50px 0 50px;
			display: block;
		}
		
		.case-loop h2{
			font-size: 3rem;
			font-weight: 300;
			line-height: 1;
			color: white;
			padding: 0 50px 0 50px;
			display: block;
		}
		
		@media(max-width: 768px){
			.case-loop h2{
				font-size: 2.2rem !important;
				font-weight: 300;
				line-height: 1;
				color: white;
				padding: 0 50px 0 50px;
				display: block;
			}
		}
		
		.case-loop .dot{
			font-size: 39px;
			font-weight: bold;
			padding: 0 50px 0 50px;
			display: block;
			margin-top: -15px;
		}
		
		.case-loop img{
			
		}


        
        @media only screen and (max-width: 480px){
            .masonry { /* Masonry container */
                column-count: 1;
                column-gap: 2em;
            }
            
            .item { /* Masonry bricks or child elements */
                background-color: #eee;
                display: inline-block;
                margin: 0 0 2em;
                width: 100%;
            }
        }
	</style>
	
	<div class="masonry">
		<?php
		$i=0;
		foreach($cases as $case){
			if($i==0){
				$i++;
				?><div class="item"><?php echo do_shortcode('[elementor-template id="119"]'); ?></div><?php
				 $image = wp_get_attachment_image_src( get_post_thumbnail_id( $case->ID ), 'full');
				Imprimir_case_loop($case);
			} else if($i==2){
				$i++;
				?><div class="item"><?php echo do_shortcode('[elementor-template id="173"]'); ?></div><?php
				 $image = wp_get_attachment_image_src( get_post_thumbnail_id( $case->ID ), 'full');
				Imprimir_case_loop($case);
			} else{
                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $case->ID ), 'full');
				Imprimir_case_loop($case);
				
				
                ?><!--<a href="<?php echo get_post_permalink($case->ID) ?>"><div class="item"><img class="" src="<?php echo $image[0]; ?>"></div></a>--><?php
            }
			
			
			$i++;
			if($i>=7) break;
		}
	
		?><a href="mailto:vagas@ionz.com.br"><div class="item"><?php echo do_shortcode('[elementor-template id="782"]'); ?></div></a><?php
	?></div>

	<style>
        label.elementor-field-label {
            position: absolute;
            bottom: 0;
            transition: bottom 0.3s linear;
        }
        
        label{
            transition: bottom 0.3s linear;
        }
        input[name="form_fields[name]"]::placeholder {
            text-align: right;
            font-size: 14px;
            vertical-align: bottom;
            line-height: 14px;
            color: #f25f42;
            font-weight: bold;
        }
        
        span.elementor-message.elementor-message-danger.elementor-help-inline.elementor-form-help-inline{
            right: 5px;
            position: absolute;
            bottom: -8px;
            font-size: 11px;
            font-weight: bold;
            display: none;
        }
        
        .elementor-message.elementor-message-success{
            
        }
        
        .elementor-message.elementor-message-danger{
            
        }
        
        #mensagem-de-sucesso-form-home{
/*            display: none;*/
        }
        
        .display-none-absolute{
            display: none !important;
        }
        
    </style>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>

	<script>
	$( document ).ready(function() {
		$('#contato-home-form').hide(500);
		
		$('#switch-home').hover(function() {
			$(this).find('#change-form-home-text').hide(500);
			$(this).find('#change-form-home-div').hide(500);
			$(this).find('#contato-home-form').show(500);
		}, function() {
			$(this).find('#change-form-home-text').show(500);
			$(this).find('#change-form-home-div').show(500);
			$(this).find('#contato-home-form').hide(500);
		});

		$('#double-tap').dblclick(function() {
// 			alert( "Handler for .dblclick() called." );
// 			$(this).find('#change-form-home-text').hide(500);
// 			$(this).find('#change-form-home-div').hide(500);
			$('#switch-home #contato-home-form').show(500);
			$('#double-tap').hide(500);
		});
		
        $('input').attr('autocomplete','off');
        
        var myvalue;
        $( "#contato-home-form button.elementor-button.elementor-size-sm" ).click(function() {
            setTimeout(function() {

                $(".elementor-field-type-text.elementor-field-group.elementor-column.elementor-field-group-name.elementor-col-80.elementor-field-required.elementor-error span.elementor-message.elementor-message-danger.elementor-help-inline.elementor-form-help-inline").text("E SEU NOME?");
                
                $(".elementor-field-type-email.elementor-field-group.elementor-column.elementor-field-group-email.elementor-col-80.elementor-field-required.elementor-error span.elementor-message.elementor-message-danger.elementor-help-inline.elementor-form-help-inline").text("E SEU EMAIL?");
                
                $(".elementor-field-type-tel.elementor-field-group.elementor-column.elementor-field-group-field_1.elementor-col-80.elementor-field-required.elementor-error span.elementor-message.elementor-message-danger.elementor-help-inline.elementor-form-help-inline").text("E SEU TELEFONE?");
                
                $("span.elementor-message.elementor-message-danger.elementor-help-inline.elementor-form-help-inline").css({
                    "display": "block"
                });
                
                var str = $("div.elementor-message.elementor-message-danger").text();
                var n = str.indexOf("Error!!");
                $('section#switch-home').removeAttr('id');
                if(n == 0){
                    $("#mensagem-de-sucesso-form-home").css({
                        "display": "block"
                    })
                    
                    $('#change-form-home-div').addClass('display-none-absolute');
                    $('#change-form-home-text').addClass('display-none-absolute');
                    $('div#contato-home-form').addClass('display-none-absolute');
                }
                
                var inputarray = ["input#form-field-name", "input#form-field-email", "input#form-field-field_1"];
                
                $.each( inputarray, function( i, val ) {
                    if($(val).val()==""){
                        $(val).css({
                            "border-color": "red"
                        });
                        if( !$(val).val() ){
                            $(val).prev("label").css({
                                'color': 'red'
                            })
                        }
                    } else {
                        $(val).css({
                            "border-color": "#d7b2d4"
                        });
                        if( !$(val).val() ){
                            $(val).prev("label").css({
                                'color': '#ffc740'
                            })
                        }
                    }
                });
            }, 1000);
        });
		
        $("#contato-home-form input").focus(function() {
            $(this).css({
                'border-color': "#d7b2d4"
            })
            $(this).prev("label").css({
                'color': '#512870',
                'bottom': '35px'
//                'transition' : 'left 1s linear',
            })
        }); 
        $('#contato-home-form input').removeAttr('required');

        $("#contato-home-form input").focusout(function() {
            $(this).css({
                'border-color': "#d7b2d4"
            })
            if( !$(this).val() ) {
                $(this).prev("label").css({
                    'bottom': '0',
                    'transition' : 'left 1s linear;',
                    'display': 'block',
                    'color': '#512870'
                })
            } else {
                $(this).prev("label").css({
                    'display': 'none'
                });
            }
        });
		
		$("#radar-home-form input").focus(function() {
            $(this).css({
                'border-color': "#6b02d1"
            })
            $(this).prev("label").css({
                'color': '#6b02d1',
                'bottom': '35px'
//                'transition' : 'left 1s linear',
            })
        }); 
        $('#radar-home-form input').removeAttr('required');

        $("#radar-home-form input").focusout(function() {
            $(this).css({
                'border-color': "#6b02d1"
            })
            if( !$(this).val() ) {
                $(this).prev("label").css({
                    'bottom': '0',
                    'transition' : 'left 1s linear;',
                    'display': 'block',
                    'color': '#6b02d1'
                })
            } else {
                $(this).prev("label").css({
                    'display': 'none'
                });
            }
        });
        
//        .elementor-field-type-text.elementor-field-group.elementor-column.elementor-field-group-name.elementor-col-80 input#form-field-name
        
        
	});
    
        
	</script>
	<?php
}
add_shortcode('LoopCasesHome', 'FLoopCasesHome');

function customize_validation_form(){
    
  
    global $post;
//     echo $post->ID;
//     if($post->ID == 102){
//         echo $post->ID;
//         return 0;
//     }
// 	if($id == 6){
//     if( is_page('contato')  || is_page( 'sobre' ) || is_page( '6' ) || is_page( '448' )) {
    
    ?>
	<style>
        label.elementor-field-label {
            position: absolute;
            bottom: 0;
            transition:left 1s linear;
        }
        
        label{
            transition:left 1s linear;
        }
        
        .elementor-field-type-textarea.elementor-field-group.elementor-column.elementor-field-group-field_2.elementor-col-100 label.elementor-field-label{
            position: absolute;
            top: -25px;
        }
        
        textarea#form-field-field_2{
            padding-right: 0;
            padding-left: 0;
        }
        
        #contato-sobre-form textarea#form-field-field_2{
            border-top: 2px solid #d7b2d4 !important;
        }
        
        #contato-contato-form textarea#form-field-field_2{
            border-top: 2px solid #d7b2d4 !important;
        }
        
        .elementor-field-type-textarea.elementor-field-group.elementor-column.elementor-field-group-field_2.elementor-col-100{
            margin-top: 55px;
        }
        
        .icon-formated{
            font-size: 50px !important; 
            margin-top: -16px; 
            margin-left: -6px;
        }
        
        input {
            line-height: 1em !important;
            padding-bottom: 0px !important;
        }
        
        input:placeholder {
            line-height: 1em !important;
            padding-bottom: 0px !important;
        }
        
        a.elementor-item.elementor-item-active:before {
          content: url('https://exemplodesites.top/ionz/wp-content/uploads/2019/12/Menu-icon-1.png');
          display: block;
          position: relative;
        }
        
        a.elementor-item.elementor-item-active{
            margin-left: -43px;
        }
        
        .dialog-close-button.dialog-lightbox-close-button {
          position: absolute !important;
          right: 50%!important;
            margin-right: -17px!important;
            top: 50px!important;
        }
        
        i.eicon-close {
          font-size: 35px;
            color: #6b02d1;
        }
    </style>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>

	<script>
	$( document ).ready(function() {
        $("#contato-sobre-form button.elementor-button.elementor-size-sm" ).click(function() {
            setTimeout(function() {
                $(".elementor-field-type-text.elementor-field-group.elementor-column.elementor-field-group-name.elementor-col-80.elementor-field-required.elementor-error span.elementor-message.elementor-message-danger.elementor-help-inline.elementor-form-help-inline").text("E SEU NOME?");
                
                $(".elementor-field-type-email.elementor-field-group.elementor-column.elementor-field-group-email.elementor-col-80.elementor-field-required.elementor-error span.elementor-message.elementor-message-danger.elementor-help-inline.elementor-form-help-inline").text("E SEU EMAIL?");
                
                $(".elementor-field-type-tel.elementor-field-group.elementor-column.elementor-field-group-field_1.elementor-col-80.elementor-field-required.elementor-error span.elementor-message.elementor-message-danger.elementor-help-inline.elementor-form-help-inline").text("E SEU TELEFONE?");
                
                $("span.elementor-message.elementor-message-danger.elementor-help-inline.elementor-form-help-inline").css({
                    "display": "block"
                });
                
                var inputarray = ["input#form-field-name", "input#form-field-email", "input#form-field-field_1"];
                
                $.each( inputarray, function( i, val ) {
                    if($(val).val()==""){
                        $(val).css({
                            "border-color": "red"
                        });
                        if( !$(val).val() ){
                            $(val).prev("label").css({
                                'color': 'red'
                            })
                        }
                    } else {
                        $(val).css({
                            "border-color": "#d7b2d4"
                        });
                        if( !$(val).val() ){
                            $(val).prev("label").css({
                                'color': 'white'
                            })
                        }
                    }
                });
            }, 800);
        });
		
        $("#contato-sobre-form input").focus(function() {
            $(this).css({
                'border-color': "#d7b2d4"
            })
            $(this).prev("label").css({
                'color': 'white',
                'bottom': '35px',
                'transition' : 'bottom 0.3s linear'
            })
        }); 
        
        $('input').removeAttr('required');

        $("#contato-sobre-form input").focusout(function() {
            $(this).css({
                'border-color': "#d7b2d4"
            })
            if( !$(this).val() ) {
                $(this).prev("label").css({
                    'bottom': '0',
                    'transition' : 'left 1s linear;',
                    'display': 'block',
                    'color': 'white'
                })
            } else {
                $(this).prev("label").css({
                    'display': 'none'
                });
            }
        });
        
        $("#contato-contato-form button.elementor-button.elementor-size-sm" ).click(function() {
            setTimeout(function() {
                $(".elementor-field-type-text.elementor-field-group.elementor-column.elementor-field-group-name.elementor-col-80.elementor-field-required.elementor-error span.elementor-message.elementor-message-danger.elementor-help-inline.elementor-form-help-inline").text("E SEU NOME?");
                
                $(".elementor-field-type-email.elementor-field-group.elementor-column.elementor-field-group-email.elementor-col-80.elementor-field-required.elementor-error span.elementor-message.elementor-message-danger.elementor-help-inline.elementor-form-help-inline").text("E SEU EMAIL?");
                
                $(".elementor-field-type-tel.elementor-field-group.elementor-column.elementor-field-group-field_1.elementor-col-80.elementor-field-required.elementor-error span.elementor-message.elementor-message-danger.elementor-help-inline.elementor-form-help-inline").text("E SEU TELEFONE?");
                
                $("span.elementor-message.elementor-message-danger.elementor-help-inline.elementor-form-help-inline").css({
                    "display": "block"
                });
                
                var inputarray = ["input#form-field-name", "input#form-field-email", "input#form-field-field_1"];
                
                $.each( inputarray, function( i, val ) {
                    if($(val).val()==""){
                        $(val).css({
                            "border-color": "red"
                        });
                        if( !$(val).val() ){
                            $(val).prev("label").css({
                                'color': 'red'
                            })
                        }
                    } else {
                        $(val).css({
                            "border-color": "#d7b2d4"
                        });
                        if( !$(val).val() ){
                            $(val).prev("label").css({
                                'color': 'white'
                            })
                        }
                    }
                });
            }, 800);
        });
		
        $("#contato-contato-form input").focus(function() {
            $(this).css({
               'border-color': "#d7b2d4"
            })
            $(this).prev("label").css({
//                'color': '#3DD6F4',
                'bottom': '35px',
                'transition' : 'bottom 0.3s linear'
            })
        }); 
        
        $('input').removeAttr('required');

        $("#contato-contato-form input").focusout(function() {
            $(this).css({
               'border-color': "#d7b2d4"
            })
            if( !$(this).val() ) {
                $(this).prev("label").css({
                    'bottom': '0',
                    'transition' : 'left 1s linear;',
                    'display': 'block',
//                    'color': 'white'
                })
            } else {
                $(this).prev("label").css({
                    'display': 'none'
                });
            }
        });
        
        $("#radar-radar-form button.elementor-button.elementor-size-sm" ).click(function() {
            setTimeout(function() {
                $(".elementor-field-type-text.elementor-field-group.elementor-column.elementor-field-group-name.elementor-col-80.elementor-field-required.elementor-error span.elementor-message.elementor-message-danger.elementor-help-inline.elementor-form-help-inline").text("E SEU NOME?");
                
                $(".elementor-field-type-email.elementor-field-group.elementor-column.elementor-field-group-email.elementor-col-80.elementor-field-required.elementor-error span.elementor-message.elementor-message-danger.elementor-help-inline.elementor-form-help-inline").text("E SEU EMAIL?");
                
                $(".elementor-field-type-tel.elementor-field-group.elementor-column.elementor-field-group-field_1.elementor-col-80.elementor-field-required.elementor-error span.elementor-message.elementor-message-danger.elementor-help-inline.elementor-form-help-inline").text("E SEU TELEFONE?");
                
                $("span.elementor-message.elementor-message-danger.elementor-help-inline.elementor-form-help-inline").css({
                    "display": "block"
                });
                
                var inputarray = ["input#form-field-name", "input#form-field-email", "input#form-field-field_1"];
                
                $.each( inputarray, function( i, val ) {
                    if($(val).val()==""){
                        $(val).css({
                            "border-color": "red"
                        });
                        if( !$(val).val() ){
                            $(val).prev("label").css({
                                'color': 'red'
                            })
                        }
                    } else {
                        $(val).css({
                            "border-color": "#ffc740"
                        });
                        if( !$(val).val() ){
                            $(val).prev("label").css({
                                'color': '#ffc740'
                            })
                        }
                    }
                });
            }, 800);
        });
		
        $("#radar-radar-form input").focus(function() {
            $(this).css({
//                'border-color': "#3DD6F4"
            })
            $(this).prev("label").css({
//                'color': '#3DD6F4',
                'bottom': '35px',
                'transition' : 'bottom 0.3s linear'
            })
        }); 
        $('input').removeAttr('required');

        $("#radar-radar-form input").focusout(function() {
            $(this).css({
//                'border-color': "#caf706"
            })
            if( !$(this).val() ) {
                $(this).prev("label").css({
                    'bottom': '0',
                    'transition' : 'left 0.3s linear;',
                    'display': 'block',
//                    'color': 'white'
                })
            } else {
                $(this).prev("label").css({
                    'display': 'none'
                });
            }
        });
	});
        
	</script>
	<?php
//     }
}
add_shortcode('validation', 'customize_validation_form');

function FLoop_Radar_Downloads(){
    
    if(!isset($_GET['ano'])) {
        $ano_atual = date('Y');
    } else{
        $ano_atual = $_GET['ano'];
    }
    
    $args = array(
        'post_type' => 'radar_downloads',
        'numberposts' => -1,
        'category_name' => $ano_atual
    );
    
    $posts = get_posts($args);
	
    foreach($posts as $post){
        $mes = get_field("mes", $post->ID);
        $file = get_field("download", $post->ID);
        ?>

        <style>
            .row {
                display: flex; /* equal height of the children */
                margin-bottom: 10px;
                position: relative;
            }
            
            .col {
                flex: 1; /* additionally, equal width */
                padding: 1em;
            }
            
            .col-mes{
                flex: 7;
                background-color: #00ff9d;
                border-radius: 30px 0 0 30px;
            }
            
            .col-download{
                flex: 3;
                background-color: #3f1f60;
                border-radius: 0 30px 30px 0;
            }
            
            .col-mes span{
                text-align: center;
                display: block;
                color: #3f1f60;
                font-weight: bold;
                font-size: 1.5em;
                padding: 15px;
                text-transform: uppercase;
            }
            
            .col-download img.icon{
                padding: 15px;
            }
            
        </style>
        <div class="row">
            <div class="col-mes">
                <span><?php echo $mes; ?></span>
                <img style="position: absolute; top: 34px; left: -4px;" src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/12/Imagem4.png">
            </div>
			
			
            <div class="col-download">
                <img style="position: absolute; top: -4px; right: -4px;" src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/12/Imagem3-1.png">
                
                <a href="<?php echo $file; ?>" target="_blank"><img class="icon"  style="margin: 0 auto; display: block" src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/12/Imagem2-1.png"></a>
            </div>
			
        </div>
        <?php
    }
    
    $ano_atual = $ano_atual-1;
    
    if(isset($_GET['ano'])) {
        $url = $_SERVER['REQUEST_URI'];
        $url = substr($url, 0, -9);
        $url .= "?ano=".$ano_atual;
    } else{
        $url = $_SERVER['REQUEST_URI'];
        $url .= "?ano=".$ano_atual;
    }
    
    ?>
    <style>
        .ano-anterior span{
            text-align: center;
/*            display: block;*/
            color: #3f1f60;
            font-weight: bold;
            font-size: 1.5em;
            padding: 15px;
            text-transform: uppercase;
        }
        
        .ano-anterior .dashicons{
            font-size: 20px;
            margin-top: -4px;
            margin-right: 10px;
            color: #ff4701;
        }
    </style>
    <?php
    $cat_list = get_categories(); 
	
	foreach ($cat_list as $cat){
		if ($ano_atual == $cat->name) {
		?>
			<div class="row">
				<div class="col ano-anterior">
					<a href="<?php echo $url; ?>"><span style="display: block"><span class="dashicons dashicons-arrow-left-alt2"></span><?php echo $ano_atual; ?></span></a>
				</div>
			</div>
		<?php
		}
	}
}
add_shortcode('Loop_Radar_Downloads', 'FLoop_Radar_Downloads');

function FTodosTrabalhos(){
    
    $todosclientes = get_terms( array(
        'taxonomy' => 'clientes',
        'hide_empty' => true,
    ) );
    
    
    ?>

    <style>
    	
        .row-cases{
            display: flex;
            margin-bottom: 65px;
        }
        
        .col-cases{
            flex: 1;
            text-align: center;
        }
        
        .col-cases select {
            background: #6D3D87;
            border: none;
/*             border-bottom: 3px solid #ffdb40; */
            color: white;
            font-weight: bold;
			border-radius: 20px;
            width: 120px;
        }
        
        label:after {
            content:"\f078";   
            font-family: "FontAwesome";
            font-size: 18px;
            color:#4098AB;
            right:8px; top:-6px;
            padding:0 0 2px;
            position:absolute;
            pointer-events:none;
        }
        label:before {
            content:'';
            right:4px; top:0px;
            width:23px; height:18px;
            background:#6D3D87;
            position:absolute;
            pointer-events:none;
            display:block;
        }
        label {position:relative}

        
        .col-cases.select .dashicons{
            color: #ffdb40;
            font-size: 20px;
            margin-top: 15px;
            display: inline-block;
        }
        
        .col-cases.select select:after{
            content: 'o';
        }
        
        .col-cases select option[value]{
            color: white;
            font-weight: bold;
        }
        
        .col-cases.search input[type="text"]{
            background-color: #efefef;
            border: none;
            border-bottom: 3px solid #ffdb40;
            color: #401e5f;
            font-weight: bold;
        }
        
        .col-cases.search input[type="text"]::placeholder{
            font-weight: bold;
            color: #401e5f;
        }
        
        .col-cases.search .dashicons{
            color: #ffdb40;
            display: inline-block;
            margin-top: 15px;
        }
        
	button.button-submit-trabalhos {
		background-color: transparent;
		color: #ffdb40;
		border: none;
		padding: 0;
		width: 0px;
		position: absolute;
		right: 14%;
		top: 16px;
		width: 50px;
		display: none !important;
	}
		
	.case-loop span{
		font-size: 1.3rem;
		font-weight: 400;
		padding: 50px 50px 0 50px;
		display: block;
	}

	.case-loop h2{
		font-size: 3rem;
		font-weight: 300;
		line-height: 1;
		color: white;
		padding: 0 50px 0 50px;
		display: block;
		margin-bottom: 0;
	}
		
		@media(max-width: 768px){
			.case-loop h2{
				font-size: 2.2rem !important;
				font-weight: 300;
				line-height: 1;
				color: white;
				padding: 0 50px 0 50px;
				display: block;
			}
		}

	.case-loop .dot{
		font-size: 39px;
		font-weight: bold;
		padding: 0 50px 0 50px;
		display: block;
		margin-top: -30px;
	}

	@media(max-width: 800px){
    		.row-cases{
    			display: block;
    		}
    		
    		.col-cases.search input{
    			width: 60%;
    		}
    		
    		button.button-submit-trabalhos{
    			right: 8%;
  				top: 10px;
    		}
    	}
        
    </style>

	<script>
		jQuery(document).ready(function(){
			$("select").change(function(){
				console.log(this.value);
				var url = "<?php echo get_site_url(); ?>/trabalhos?cliente=" + this.value;
				console.log(url);
				window.location.href = url;
			})
		})
	</script>

    <form action="" method="get">
        <div class="row-cases">
            <div class="col-cases select"><label><select name="cliente">
				<option value="">CLIENTES</option><?php
            foreach($todosclientes as $cliente){
            ?>
                
                <option value="<?php echo $cliente->slug ?>"><?php echo $cliente->name ?></option>
            <?php
            }
            ?></select></label></div><?php

        $todosprojetos = get_terms( array(
            'taxonomy' => 'projetos',
            'hide_empty' => true,
        ) );

        ?>
<!-- 		<div class="col-cases select"><label><select name="projeto"> -->
<!-- 			<option value="">PROJETOS</option>--><?php 
        foreach($todosprojetos as $projeto){
        ?>
            
<!--             <option value="<?php echo $projeto->slug ?>"><?php echo $projeto->name ?></option> -->
        <?php
        }
            ?>
<!-- 			</select></label></div> -->

<!-- 			<div class="col-cases search"> -->
<!-- 				<input type="text" name="procura" placeholder="O QUE BUSCA?" /> -->
<!-- 			</div> -->
<!-- 			<div class="col-cases select"> -->
				<button type="submit" class="button-submit-trabalhos">
					<img src= "https://exemplodesites.top/ionz/wp-content/uploads/2020/01/lupa.png">
<!-- 					<i class="dashicons dashicons-search"></i> -->
				</button>
<!-- 			</div> -->
			</div>
    </form><?php
    
    $args = array(
		'numberposts'	=> -1,
		'post_type' => 'cases'
    );
    
    if(strlen($_GET['cliente']) > 0){
        $clienteslug = $_GET['cliente'];
        $args = array(
        'numberposts'	=> -1,
		'post_type' => 'cases',
        'tax_query' => array(
            array(
                'taxonomy' => 'clientes',
                'field' => 'slug',
                'terms' => $clienteslug
            )
        ));
    }
    
    if(strlen($_GET['projeto']) > 0){
        $projetoslug = $_GET['projeto'];
        $args = array(
        'numberposts'	=> -1,
		'post_type' => 'cases',
        'tax_query' => array(
            array(
                'taxonomy' => 'projetos',
                'field' => 'slug',
                'terms' => $projetoslug
            )
        ));
    }
    
    if((strlen($_GET['projeto']) > 0) && (strlen($_GET['cliente']) > 0)){
        $projetoslug = $_GET['projeto'];
        $clienteslug = $_GET['cliente'];
        $args = array(
        'numberposts'	=> -1,
		'post_type' => 'cases',
        'tax_query' => array(
            array(
                'taxonomy' => 'projetos',
                'field' => 'slug',
                'terms' => $projetoslug
            )
        ),
        'tax_query' => array(
            array(
                'taxonomy' => 'clientes',
                'field' => 'slug',
                'terms' => $clienteslug
            )
        ));
    }
    
   
	$cases = get_posts( $args );
	
	?>
	<style>
        #contato-home-form {
/*            opacity: 0;*/
/*            height: 0;*/
/*            transition: opacity 0.5s ease-in-out;*/
            
        }

		.masonry { /* Masonry container */
			display: grid;
		   grid-gap: 25px 60px;
		   grid-template-columns: repeat(auto-fill, minmax(500px,1fr));
		   grid-auto-rows: 30px;
/* 			 display: flex; */
/*   flex-flow: column wrap; */
/* 			flex-direction: row */
		}
        
		.item { /* Masonry bricks or child elements */
			background-color: #eee;
/* 			display: inline-block; */
/* 			margin: 0 0 5em; */
		}
		
        span.elementor-screen-only{
            display: none;
        }
		
		
        
        @media only screen and (max-width: 480px){
            .masonry { /* Masonry container */
                column-count: 1;
                column-gap: 2em;
            }
            
            .item { /* Masonry bricks or child elements */
                background-color: #eee;
                display: inline-block;
                margin: 0 0 2em;
                width: 100%;
            }
        }
	</style>
	
	<div class="masonry">
		<?php
		$i=0;
		foreach($cases as $case){
			
			
			if(strlen($_GET['procura']) > 0){
                if(strpos(strtolower($case->post_title), strtolower($_GET['procura'])) !== FALSE){
//                     $image = wp_get_attachment_image_src( get_post_thumbnail_id( $case->ID ), 'full');
					Imprimir_case_loop($case);
                }
            } else {
				Imprimir_case_loop($case);
//                 $image = wp_get_attachment_image_src( get_post_thumbnail_id( $case->ID ), 'full');
            }
			$i++;
// 			if($i==8) break;
		}
// 		$countdivs=1;
// 		$stop = $i;
// 		$stop--;
		
	?></div>

	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<script>
	
	function resizeGridItem(item){
	   grid = document.getElementsByClassName("masonry")[0];
	   rowHeight = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-auto-rows'));
	   rowGap = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-row-gap'));
	   rowSpan = Math.ceil((item.querySelector('.content').getBoundingClientRect().height+rowGap)/(rowHeight+rowGap));
	   item.style.gridRowEnd = "span "+rowSpan;
	}

	function resizeAllGridItems(){
	   allItems = document.getElementsByClassName("item");
	   for(x=0;x<allItems.length;x++){
		  resizeGridItem(allItems[x]);
	   }
	}

	window.onload = resizeAllGridItems();

	window.addEventListener("resize", resizeAllGridItems);

	allItems = document.getElementsByClassName("item");
	for(x=0;x<allItems.length;x++){
// 	   imagesLoaded( allItems[x], resizeInstance);
	}

	function resizeInstance(instance){
	   item = instance.elements[0];
	   resizeGridItem(item);
	}
		
	jQuery(document).ready(function(){
// 		jQuery("<p>You should follow GeeksForGeeks</p>").insertAfter(".item:last-child"); 
		var count = 1;
		var i, j=8;
		var number_of_cases = $(".masonry .item").length;
		number_of_cases++;
		number_of_cases = number_of_cases-7;
		console.log(number_of_cases);
		
		for (i = 8; i < 99; i++) {
			jQuery(".masonry .item:nth-child(" + i + ")").css({"display": "none"});
// 			if(count != number_of_cases){
// 				var str = jQuery(".more-cases .item:nth-child(" + count + ")").html();
// 				jQuery("<div class='item'>" + str + "</div>").insertAfter(".item:last-child"); 
// 				console.log(str);
// 				count++;
// 			}
		}
		
		jQuery(window).scroll(function(){
			if (jQuery(window).scrollTop() >= jQuery(document).height()-jQuery(window).height() - 450){
				console.log("fim");
				if(count != number_of_cases){
					for (i = 1; i < 8; i++) {
						if(count != number_of_cases){
							jQuery(".masonry .item:nth-child(" + j + ")").css({"display": "block"});
// 							var str = jQuery(".more-cases .item:nth-child(" + count + ")").html();
// 							jQuery("<div class='item'>" + str + "</div>").insertAfter(".item:last-child"); 
// 							console.log(str);
							count++;
							j++;
						}
					}
				}
			}
		});
		
// 		if ($('#load-more-man').visible(true)) {
// 				alert("KKKKKKKKKKKKKKKKKKKKKKKKK");
// 		} else {
			// The element is NOT visible, do something else
// 		}
		
	});
	</script>

	<?php
}
add_shortcode('TodosTrabalhos', 'FTodosTrabalhos');

function FMostrarTrabalhos(){
    
}
add_shortcode('MostrarTrabalhos', 'FMostrarTrabalhos');

function FGaleria_Facebook_Single_Case(){
    
    if($_GET['modelo'] == 'C'){
        ?>
        <style>
            .masonry.video, #imagem-singular-case{
               // display: none !important;
            }
        </style>    

        <?php
    } else if ($_GET['modelo'] == 'B'){
        ?>
        <style>
            .masonry.facebook, #imagem-singular-case{
                // display: none !important;
            }
        </style>    

        <?php
    } else {
        ?>
        <style>
            .masonry.video, #video-singular-case{
                // display: none !important;
            }
        </style>    

        <?php
    }
    global $post;
    $galeria = get_field('galeria_facebook', $post->ID);
    
    $fotos = explode(',', $galeria);
    $modelo_case = get_the_terms($post->ID, 'modelo_de_case');
// 	var_dump($modelo_case);
    ?>
    <style>
        #contato-home-form {
/*            opacity: 0;*/
/*            height: 0;*/
/*            transition: opacity 0.5s ease-in-out;*/
            
        }
		<?php if ($modelo_case[0]->slug == 'modelo-outback-festribs-d'){ ?>
		.masonry { /* Masonry container */
			column-count: 1;
			column-gap: 7em;
		}
		<?php } else { ?>
		.masonry { /* Masonry container */
			column-count: 2;
			column-gap: 7em;
		}
		<?php } ?>
		.item { /* Masonry bricks or child elements */
			background-color: #eee;
			display: inline-block;
			margin: 0 0 3em;
			width: 100%;
		}
        
        @media only screen and (max-width: 400px){
            .masonry { /* Masonry container */
                column-count: 1 !important;
                column-gap: 0em!important;
            }

            .item { /* Masonry bricks or child elements */
                background-color: #eee!important;
                display: inline-block!important;
                margin: 0 0 1em!important;
                width: 100%!important;
            }
        }
	</style>
	
	<div class="masonry facebook"><?php
	foreach($fotos as $fotoID){
		if(strlen($fotoID) > 1){
			$url = wp_get_attachment_image_src( $fotoID, 'full' );
			?><div class="item"><img class="" src="<?php echo $url[0]; ?>"></div><?php
		}
	}
    ?></div><?php
}
add_shortcode('Galeria_Facebook_Single_Case', 'FGaleria_Facebook_Single_Case');

function FGaleria_YouTube_Single_Case(){
    global $post;
    $galeria = get_field('url_videos_you_tube', $post->ID);
    
//    var_dump($galeria);
    
    $ids = preg_split('/<br[^>]*>/i', $galeria);
    
//    var_dump($ids);
    
    ?>
    <style>
        #contato-home-form {
/*            opacity: 0;*/
/*            height: 0;*/
/*            transition: opacity 0.5s ease-in-out;*/
            
        }

		.masonry { /* Masonry container */
			column-count: 2;
			column-gap: 7em;
		}

		.item { /* Masonry bricks or child elements */
			background-color: #eee;
			display: inline-block;
			margin: 0 0 3em;
			width: 100%;
		}
        
        @media only screen and (max-width: 400px){
            .masonry.video { /* Masonry container */
                column-count: 1 !important;
                column-gap: 0em!important;
            }

            .masonry.video .item { /* Masonry bricks or child elements */
                background-color: #eee!important;
                display: inline-block!important;
                margin: 0 0 1em!important;
                width: 100%!important;
            }
        }
		
		.masonry.video .item iframe{
		  border: 15px solid #4099ac;
		  border-radius: 20px;
		}
.el
	</style>
	
	<div class="masonry video"><?php
    foreach($ids as $id){
		
// 		echo $id;
		if(strlen($id) < 1) break;
		$id_video = explode('&', $id);
		$id_video = explode('=', $id_video[0]);
// 		echo $id_video[1];
		
// 		echo "<pre>";
// 		var_dump($id_video);
// 		echo "</pre>";
		
        ?><div class="item"><iframe width="420" height="315"
src="https://www.youtube.com/embed/<?php echo $id_video[1]; ?>">
</iframe></div><?php
    }
    ?></div>
<?php
}
add_shortcode('Galeria_YouTube_Single_Case', 'FGaleria_YouTube_Single_Case');

function FGaleria_Stories_Single_Case(){
    global $post;
    ?>

<!--    <div id="AAAAA"></div>-->
<!--    <div id="BBB"></div>-->


<!--    <iframe id="player" type="text/html" width="640" height="360"-->
<!--  src="http://www.youtube.com/embed/GWws9hgt9zU"-->
<!--  frameborder="0"></iframe>-->

    <style>
        iframe#player{
            position: relative;
            z-index: 10;
        }
        #ytplayer1, #ytplayer2, #ytplayer3{
                position: absolute;
                width: 100%;
                height: 100%;
        }
        .container {
            position: relative;
            width: 100%;
            height: 0;
            padding-bottom: 50.25%;
            width: 33%;
            display: inline-block;
        }
        
        @media only screen and (max-width: 400px){
            .container {
                position: relative;
                width: 100%;
                height: 0;
                padding-bottom: 170%;
                width: 100%;
                display: inline-block;
            }
        }
    </style>

    <?php 
    $video1 = get_field("video_storie_1", $post->ID);
    $video2 = get_field("video_storie_2", $post->ID);
    $video3 = get_field("video_storie_3", $post->ID);
?>

    <div class="container"><div id="ytplayer1"></div></div>
    <div class="container"><div id="ytplayer2"></div></div>
    <div class="container"><div id="ytplayer3"></div></div>
    
    <script src="http://www.youtube.com/player_api"></script>
    <script>
    var tag = document.createElement('script');
    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      var player;
      var player2;
        var player3;
      function onYouTubePlayerAPIReady() {
        player = new YT.Player('ytplayer1', {
          height: '500',
          width: '500',
          videoId: '<?php echo $video1 ?>',
            events: {
//            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
        player2 = new YT.Player('ytplayer2', {
          height: 'auto',
          width: 'auto',
          videoId: '<?php echo $video2 ?>',
            events: {
//            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange2
          }
        });
          
        player3 = new YT.Player('ytplayer3', {
          height: 'auto',
          width: 'auto',
          videoId: '<?php echo $video3 ?>',
            events: {
//            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange3
          }
        });
      }
        
    function onPlayerReady(event) {
        event.target.playVideo();
    }
    var done = false;
    function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.ENDED) {
            var videoframe = document.getElementById('ytplayer2');
            videoframe.src = videoframe.src + '?rel=0&autoplay=1';
        }
    }
        
    function onPlayerStateChange2(event) {
        if (event.data == YT.PlayerState.ENDED) {
            var videoframe = document.getElementById('ytplayer3');
            videoframe.src = videoframe.src + '?rel=0&autoplay=1';
        }
    }
        
    function onPlayerStateChange3(event) {
        if (event.data == YT.PlayerState.ENDED) {
            var videoframe = document.getElementById('ytplayer1');
            videoframe.src = videoframe.src + '?rel=0&autoplay=1';
        }
    }
        
    </script>

    <?php
}
add_shortcode('Galeria_Stories_Single_Case', 'FGaleria_Stories_Single_Case');

function FGaleria_Instagram_Single_Case(){
        global $post;
    $galeria = get_field('galeria_instagram', $post->ID);
    
    $fotos = explode(',', $galeria);
//     var_dump($fotos);
    ?>
    <style>
		.masonry-insta { /* Masonry container */
			column-count: 3;
			column-gap: 3em;
		}

		.item-insta { /* Masonry bricks or child elements */
			background-color: #eee;
			display: inline-block;
			margin: 0 0 3em;
			width: 100%;
		}
        
        @media only screen and (max-width: 400px){
            .masonry-insta { /* Masonry container */
                column-count: 1 !important;
                column-gap: 0em!important;
            }

            .masonry-insta .item-insta { /* Masonry bricks or child elements */
                background-color: #eee!important;
                display: inline-block!important;
                margin: 0 0 1em!important;
                width: 100%!important;
            }
        }
        
	</style>
	
	<div class="masonry-insta"><?php
// 	echo count($fotos);
	if(count($fotos) < 4 ){
		?><style>.item-insta {display: flex !important}</style><?php
	}
	
    foreach($fotos as $fotoID){
        $url = wp_get_attachment_image_src( $fotoID, 'full' );
        ?><div class="item-insta"><img class="" src="<?php echo $url[0]; ?>"></div><?php
    }
    ?></div><?php
    
}
add_shortcode('Galeria_Instagram_Single_Case', 'FGaleria_Instagram_Single_Case');

function FCases_Semelhantes(){
    global $post;
    
    $case1 = get_field('case_1', $post->ID);
    $case2 = get_field('case_2', $post->ID);
    $case3 = get_field('case_3', $post->ID);
    
    $cor1 = get_field('cor1', $post->ID);
    $cor2 = get_field('cor2', $post->ID);
    $cor3 = get_field('cor3', $post->ID);
	
	$cor2 = '#401e5f';
    
//    $cor1 = yellow;
        
    
    ?>

    <style>
        .row-cases { /* Masonry container */
			display: inline-block;
		}

		.flex-cases { /* Masonry bricks or child elements */
            width: 33%;
            padding: 1em;
            
		}
        
        @media only screen and (max-width: 450px){
            .flex-cases { /* Masonry bricks or child elements */
                width: 100%;
                padding: 1em;
            }
        }
        
        @media only screen and (min-width: 1200px){
            .row-cases{
            }
        }
        
        img.flex-cases {
          position: relative;
          z-index: 10;
        }
        
        .elementor.elementor-106.elementor-location-header{
            height: 0px;
            z-index: 10;
            position: relative;
        }
        
        .elementor-106 .elementor-element.elementor-element-f9d5f57:not(.elementor-motion-effects-element-type-background), .elementor-106 .elementor-element.elementor-element-f9d5f57 > .elementor-motion-effects-container > .elementor-motion-effects-layer{
            background-color: transparent;
        }
        
        .absolute-bottom-case{
            position: absolute;
            top: -150px;
            z-index: 10;
        }
		
		#Titulo-Sec h2{
			color: #401e5f !important;
		}
        
/*        Cor 1*/
        #Titulo-Principal h1.elementor-heading-title.elementor-size-xxl, #Titulo-Principal span.elementor-heading-title.elementor-size-small, #Titulo-Qto , #Titulo-Quinto span.elementor-heading-title.elementor-size-xxl{
            color: <?php echo $cor1; ?> !important;
        }
        
        #Titulo-Qto .elementor-134 .elementor-element.elementor-element-2542426:not(.elementor-motion-effects-element-type-background), .elementor-134 .elementor-element.elementor-element-2542426 > .elementor-motion-effects-container > .elementor-motion-effects-layer, section.elementor-element.elementor-element-2542426.elementor-section-boxed.elementor-section-height-default.elementor-section-height-default.elementor-section.elementor-top-section, section#Titulo-Qto{
            background-color: <?php echo $cor1; ?> !important;
        }
        
        
/*        Cor 2*/
        #Titulo-Principal h2.elementor-heading-title.elementor-size-xxl, #Titulo-Sec p.elementor-heading-title.elementor-size-large, #Titulo-Terceiro p.elementor-heading-title.elementor-size-large, #Titulo-Quinto p.elementor-heading-title.elementor-size-large, #Titulo-Quinto span.elementor-heading-title.elementor-size-medium, #Titulo-Quinto span.elementor-heading-title.elementor-size-xl{
            color: <?php echo $cor2; ?> !important;
        }
        
/*        Cor 3*/
        section.elementor-element.elementor-element-3ced06a.elementor-section-boxed.elementor-section-height-default.elementor-section-height-default.elementor-section.elementor-top-section, section#Titulo-Sec, #border-stories-back{
            background-color: <?php echo $cor3; ?> !important;
            
        }
		
		#border-stories-back{
			border-radius: 20px;
		}
        
        #Titulo-Terceiro h2.elementor-heading-title.elementor-size-large, #Titulo-Quinto h2.elementor-heading-title.elementor-size-large, h2.elementor-heading-title.elementor-size-large{
            color: <?php echo $cor3; ?> !important;
        }
		
		.masonry.facebook .item img {
			border: 15px solid <?php echo $cor3; ?>;
			border-radius: 20px;
			margin: 0 auto;
			display: block
		}
        
		.case-loop{
			width: 100%;
		}
		
		.case-loop span{
			font-size: 12px;
			font-weight: 400;
			padding: 50px 50px 0 50px;
			display: block;
		}
		
		.case-loop h2{
			font-size: 1.8rem;
			font-weight: 300;
			line-height: 1;
			color: white;
			padding: 0 50px 0 50px;
			display: block;
		}
		
		.case-loop .dot{
			font-size: 30px;
			font-weight: bold;
			padding: 0 50px 0 50px;
			display: block;
			margin-top: -30px;
		}
		
		.case-loop img{
			
		}

		.row-cases .item{
			width: 30%;
			margin: 1.5%;
		}
		
    </style>
    <div class="row-cases">
		<?php Imprimir_caseID_loop($case1); ?>
		<?php Imprimir_caseID_loop($case2); ?>
		<?php Imprimir_caseID_loop($case3); ?>
    </div><?php
	
	$stories_section = get_field("video_storie_1", $post->ID);
	
	
	if($stories_section == false){
		?><style>#Titulo-Qto, #border-stories-back {display: none !important}</style><?php
	}
	
	$comentarios_section = get_field("comentarios_facebook", $post->ID);
	
	
	if($comentarios_section == false){
		?><style>#Comentarios {display: none !important}</style><?php
	}
	
}
add_shortcode('Cases_Semelhantes', 'FCases_Semelhantes');

add_shortcode( 'prev', 'prev_shortcode' );
add_shortcode( 'next', 'next_shortcode' );
function next_shortcode($atts) {
    global $post;

    $urlnextimg = wp_get_attachment_image_src( '390', 'full' );
    $next_post_url = get_permalink( get_adjacent_post(false,'',true)->ID );
    
	$post_atual = get_permalink( $post->id );
	
	
    ?>
    <style>
        .next-post span{
            color: white;
            font-weight: normal;
            line-height: 1em;
            text-align: right;
            float: right;
            margin-bottom: -7px;
            font-size: 12px;
            padding-left: 10px;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .next-post div{
            display: inline-block;
        }
        
        .next-post img{
            display: inline-block;
        }
        .next-post{
            position: absolute;
            right: 50px;
            z-index: 10;
            border-radius: 30px;
			transition: linear all 0.3s;
        }
        
        @media only screen and (max-width: 400px){
            .next-post{
                position: absolute;
                right: 0px;
                top: 0px;
                z-index: 10;
                border-radius: 30px;
            }
        }
    </style>
		<?php if($post_atual !== $next_post_url) {?>
			<div id="mouse-hover">
			<a href="<?php echo $next_post_url ?>">
			<div class="next-post">
				<div><span>PRÓXIMO<br>TRABALHO</span></div>
				<img src="<?php echo $urlnextimg[0]; ?>">
			</div>
			</a>
			</div>
		<?php } ?>
    
	<script>
	jQuery( document ).ready(function() {
        jQuery('.next-post').mouseover(function() {
            jQuery('.next-post div span').css({
                "opacity": "1"
            });
            jQuery('.next-post').css({
                "background-color": "#00000066"
            });
        });
        
       jQuery('.next-post').mouseout(function() {
           jQuery('.next-post div span').css({
               "opacity": "0"
           });
           jQuery('.next-post').css({
               "background-color": "transparent"
           });
       });
    });
    </script>

    <?php
}
function prev_shortcode($atts) {
    global $post;
    
    $previous_post_url = get_permalink( get_adjacent_post(false,'',false)->ID );
	
    $urlprevimg = wp_get_attachment_image_src( '392', 'full' );
    
    ?>
        <style>
        .prev-post span{
            color: white;
            font-weight: normal;
            line-height: 1em;
            text-align: left;
            float: left;
            margin-bottom: -7px;
            font-size: 12px;
            padding-right: 10px;
            opacity: 0;
            transition: opacity 0.3s ease;
			
        }
        
        .prev-post div{
            display: inline-block;
        }
        
        .prev-post img{
            display: inline-block;
        }
        .prev-post{
            position: absolute;
            left: 50px;
            z-index: 10;
            border-radius: 30px;
			transition: linear all 0.3s;
        }
            
        @media only screen and (max-width: 400px){
            .prev-post{
                position: absolute;
                left: 0px;
                top: 0px;
                z-index: 10;
                border-radius: 30px;
            }
        }
    </style>

        <a href="<?php echo $previous_post_url; ?>">
        <div class="prev-post">
            <img src="<?php echo $urlprevimg[0]; ?>">
            <div><span>TRABALHO<br>ANTERIOR</span></div>
            
        </div>
        </a>
    
	<script>
	jQuery( document ).ready(function() {
        jQuery('.prev-post').mouseover(function() {
            jQuery('.prev-post div span').css({
                "opacity": "1"
            });
            jQuery('.prev-post').css({
                "background-color": "#00000066"
            });
        });
        
       jQuery('.prev-post').mouseout(function() {
           jQuery('.prev-post div span').css({
               "opacity": "0"
           });
           jQuery('.prev-post').css({
               "background-color": "transparent"
           });
       });
    });
    </script>
        
    <?php
}

function Fallcases(){
	global $post;
	
	$urlnextimg = wp_get_attachment_image_src( '382', 'full' );
    
    ?>
    <style>
        .all-post span{
            color: white;
            font-weight: normal;
            line-height: 1em;
            text-align: right;
            float: right;
            margin-bottom: -3px;
            font-size: 12px;
            padding-left: 10px;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .all-post div{
            display: inline-block;
        }
        
        .all-post img{
            display: inline-block;
        }
        .all-post{
            position: absolute;
			right:50%;
			margin-right: -27px;
            z-index: 10;
            border-radius: 30px;
			transition: linear all 0.3s;
        }
        
        @media only screen and (max-width: 400px){
            .all-post{
                position: absolute;
                right: 0px;
                top: 0px;
                z-index: 10;
                border-radius: 30px;
            }
        }
    </style>
        <a href="<?php echo get_permalink(488); ?>">
        <div class="all-post">
            <div><span>TRABALHOS</span></div>
            <img src="<?php echo $urlnextimg[0]; ?>">
        </div>
        </a>
    
	<script>
	jQuery( document ).ready(function() {
        jQuery('.all-post').mouseover(function() {
            jQuery('.all-post div span').css({
                "opacity": "1",
				
            });
            jQuery('.all-post').css({
                "background-color": "#00000066",
				"margin-right": "-70px"
            });
        });
        
       jQuery('.all-post').mouseout(function() {
           jQuery('.all-post div span').css({
               "opacity": "0"
           });
           jQuery('.all-post').css({
               "background-color": "transparent",
			   "margin-right": "-27px"
           });
       });
    });
    </script>

    <?php
}

add_shortcode('allcases', 'Fallcases');

add_shortcode('teste_radar_grafico', 'Fteste_radar_grafico');

function paralax(){
	
	$galeria = get_field("galeria", 842);
	
// 	echo "<pre>";
// 	var_dump($galeria);
// 	echo "</pre>";
	
    $fotos = explode(',', $galeria);
	?><div class="paralax-img"><?php
	$i=1;
	foreach($fotos as $fotoID){
        $url = wp_get_attachment_image_src( $fotoID, 'full' );
        ?><img id='para<?php echo $i ?>' src="<?php echo $url[0]; ?>" style='position:absolute; z-index:9; top: <?php echo rand ( 5 , 80 ) ?>%; right:<?php echo rand (0,100) ?>%'><?php
		$i++;
    }
	?></div>
	
	<script>
		
		jQuery( document ).ready(function() {
			var countimg = jQuery(".paralax-img > img").length;
			var position = jQuery(window).scrollTop(); 
			var i;
			var HeightScreen = jQuery(window).height();
			
// 			console.log("img: " + countimg + "HeightScreen: " + HeightScreen);
			jQuery(window).scroll(function(){
				

				var para1 = jQuery( "#para1");
				var offset = para1.offset();
				var posY = offset.top - jQuery(window).scrollTop();
				var posX = offset.left - jQuery(window).scrollLeft(); 
				// 			console.log("left: " + offset.left + ", top: " + offset.top + "Height: " + HeightScreen);

				var posY = offset.top - jQuery(window).scrollTop();
				var posX = offset.left - jQuery(window).scrollLeft(); 
				var topPosition1;
				
	// 			console.log("Y:" + posY + " X:" + posX);


				var scroll = jQuery(window).scrollTop(); 
				if (scroll > position) {
					for(i=1; i<=countimg; i++){
						
						para1 = jQuery( "#para" + i );
// 						para1 = $( "#para1");

						offset = para1.offset();
						posY = offset.top - jQuery(window).scrollTop();
						posX = offset.left - jQuery(window).scrollLeft(); 
			// 			console.log("left: " + offset.left + ", top: " + offset.top + "Height: " + HeightScreen);

						posY = offset.top - jQuery(window).scrollTop();
						posX = offset.left - jQuery(window).scrollLeft(); 
						
						if(posY <= HeightScreen){
							topPosition1 = para1.css("top");
// 							console.log(topPosition1);
							topPosition1 = topPosition1.replace('px', '');
							topPosition1 = parseInt(topPosition1,10)+1.5;
// 							console.log(topPosition1);
							para1.css({"top": topPosition1+"px"})
						}
					}
				} else {
					for(i=1; i<=countimg; i++){
						
						para1 = jQuery( "#para" + i );
// 						para1 = $( "#para1");
						offset = para1.offset();
						posY = offset.top - jQuery(window).scrollTop();
						posX = offset.left - jQuery(window).scrollLeft(); 
				// 			console.log("left: " + offset.left + ", top: " + offset.top + "Height: " + HeightScreen);

						posY = offset.top - jQuery(window).scrollTop();
						posX = offset.left - jQuery(window).scrollLeft(); 

						if(posY <= HeightScreen){
							topPosition1 = para1.css("top");

							topPosition1 = topPosition1.replace('px', '');

							topPosition1 = parseInt(topPosition1,10)-1.5;

// 							console.log(topPosition1);
							para1.css({"top": topPosition1+"px"})
						}
					}
				} 
				position = scroll; 

				

			});
	});
	</script>

	<?php
}

add_action('astra_header_after', 'paralax');

add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts() {
  ?><style>
		div#astra_settings_meta_box{
			display: none;
		}
		
		.close-popup{
			cursor: pointer;
		}
  </style><?php
}

function change_image_close_button(){
	
	global $post;
	
	?>

	<style>
		span.dot, .dot span{
			transition: ease all 0.3s;
		}
		
		.dialog-close-button.dialog-lightbox-close-button i.eicon-close{
			display: none !important;
		}
		
		
	</style>

	<script>
		jQuery(document).ready(function() {
			jQuery(".row-cases .item").mouseover(function(){
				jQuery("span.dot", this).css({
					"letter-spacing": "3px"
				})
			})
			jQuery(".row-cases .item").mouseout(function(){
				jQuery("span.dot").css({
					"letter-spacing": "1px"
				})
			})
			
			jQuery(".case-loop").mouseover(function(){
				jQuery("span.dot", this).css({
					"letter-spacing": "3px"
				})
			})
			jQuery(".case-loop").mouseout(function(){
				jQuery("span.dot").css({
					"letter-spacing": "1px"
				})
			})
			
			jQuery(".spacing-dots").mouseover(function(){
				jQuery(".dot span", this).css({
					"letter-spacing": "3px"
				})
			})
			jQuery(".spacing-dots").mouseout(function(){
				jQuery(".dot span").css({
					"letter-spacing": "1px"
				})
			})
			
			var video_section = jQuery('video.elementor-video');
			video_section.prop('preload','none');
		})
		
		jQuery(".menu-image img").click(function(){
			jQuery(".menu-image img").hide("200");
			jQuery(".logo-hidden-ionz img").hide("200");
		})
		
		jQuery(".dialog-close-button.dialog-lightbox-close-button i.eicon-close:before").click(function(){
			jQuery(".menu-image img").show("200");
			alert("Ok");
		})
		
		jQuery(".dialog-close-button.dialog-lightbox-close-button i.eicon-close").click(function(){
			jQuery(".menu-image img").show("200");
			alert("Ok");
		})
		
		jQuery(".eicon-close:before").click(function(){
			jQuery(".menu-image img").show("200");
			alert("Ok");
		})
		
		jQuery("body.page-template-default.page.page-id-488.logged-in.admin-bar.ast-desktop.ast-page-builder-template.ast-no-sidebar.astra-2.1.3.ast-header-custom-item-inside.ast-single-post.ast-inherit-site-logo-transparent.elementor-default.elementor-page.elementor-page-488.customize-support").on('classChange', function() {
			alert("Ok");
});
		jQuery("div#elementor-popup-modal-112 > div").on('FadeIn'), function(){
			alert("ok");
		}
		
		jQuery( document ).ready( function( ) {
			jQuery( document ).on( 'click', '.close-popup', function( event ) {
				elementorProFrontend.modules.popup.closePopup( {}, event );
				jQuery(".menu-image img").show("200");
				jQuery(".logo-hidden-ionz img").show("200");
			} );
		} );
		
// 		.dialog-widget-content.dialog-lightbox-widget-content.animated
		
	</script>

	<?php
	
	$stories_section = get_field("video_storie_1", $post->ID);
	
// 	var_dump($stories_section);
	
	if($stories_section == FALSE){
		?><style>#Titulo-Qto{ !important}</style><?php
	}
}

add_action('wp_footer', 'change_image_close_button');
