<?php 
//1. Shortcode: [jbeseditor]
function create_jbeseditor_shortcode() {

ob_start();?>

<div class="container">
    <div class="row">
        <?php $args = array(
                    'post_type' => 'jbeseditor',
                );
                $query = new WP_Query($args); if($query->have_posts()) : while ($query->have_posts()) : $query->the_post();?>

        <div class="col-md-12">
            <div class="editor-info clearfix">
                <?php if( get_field('jbes_editor_photos') ): ?>
                <img src="<?php the_field('jbes_editor_photos'); ?>" />
                <?php endif; ?>
                <p class="editor-name"><strong><?php the_title();?></strong></p>
                <p class="editor-designation"><?php the_field('jbes_designation');?></p>
                <p class="editor-qualification"> <?php the_field('jbes_qualification');?> <br></p>
                <p class="editor-address"> <?php the_field('jbes_address');?></p>
                <p class="editor-country"> <?php the_field('jbes_country');?></p>
            </div>
        </div>
        <?php endwhile; else : ?>
        <p>
            <?php _e( 'Sorry, no page id matched your criteria.' ); ?>
        </p>
        <?php endif; ?>
    </div>
</div>
<?php $editorjbes = ob_get_clean();
return $editorjbes;
}
add_shortcode( 'jbeseditor', 'create_jbeseditor_shortcode' );
?>

<?php 
//2. Shortcode: [ijbeditor]
function create_ijbeditor_shortcode() {

ob_start();?>

<div class="container">
    <div class="row">
        <?php $args = array(
                    'post_type' => 'ijbeditor',
                );
                $query = new WP_Query($args); if($query->have_posts()) : while ($query->have_posts()) : $query->the_post();?>

        <div class="col-md-12">
            <div class="editor-info clearfix">
                <?php if( get_field('ijb_editor_photos') ): ?>
                <img src="<?php the_field('ijb_editor_photos'); ?>" />
                <?php endif; ?>
                <p class="editor-name"><strong><?php the_title();?></strong></p>
                <p class="editor-designation"><?php the_field('ijb_designation');?></p>
                <p class="editor-qualification"> <?php the_field('ijb_qualification');?> <br></p>
                <p class="editor-address"> <?php the_field('ijb_address');?></p>
                <p class="editor-country"> <?php the_field('ijb_country');?></p>
            </div>
        </div>
        <?php endwhile; else : ?>
        <p>
            <?php _e( 'Sorry, no page id matched your criteria.' ); ?>
        </p>
        <?php endif; ?>
    </div>
</div>
<?php $editorijb = ob_get_clean();
return $editorijb;
}
add_shortcode( 'ijbeditor', 'create_ijbeditor_shortcode' );
?>

<?php 
//3. Shortcode: [ijaareditor]
function create_ijaarditor_shortcode() {

ob_start();?>

<div class="container">
    <div class="row">
        <?php $args = array(
                    'post_type' => 'ijaareditor',
                );
                $query = new WP_Query($args); if($query->have_posts()) : while ($query->have_posts()) : $query->the_post();?>

        <div class="col-md-12">
            <div class="editor-info clearfix">
                <?php if( get_field('ijaar_editor_photos') ): ?>
                <img src="<?php the_field('ijaar_editor_photos'); ?>" />
                <?php endif; ?>
                <p class="editor-name"><strong><?php the_title();?></strong></p>
                <p class="editor-designation"><?php the_field('ijaar_designation');?></p>
                <p class="editor-qualification"> <?php the_field('ijaar_qualification');?> <br></p>
                <p class="editor-address"> <?php the_field('ijaar_address');?></p>
                <p class="editor-country"> <?php the_field('ijaar_country');?></p>
            </div>
        </div>
        <?php endwhile; else : ?>
        <p>
            <?php _e( 'Sorry, no page id matched your criteria.' ); ?>
        </p>
        <?php endif; ?>
    </div>
</div>
<?php $editorijaar = ob_get_clean();
return $editorijaar;
}
add_shortcode( 'ijaareditor', 'create_ijaarditor_shortcode' );
?>

<?php 
//4. Shortcode: [ijbbeditor]
function create_ijbbeditor_shortcode() {

ob_start();?>

<div class="container">
    <div class="row">
        <?php $args = array(
                    'post_type' => 'ijbbeditor',
                );
                $query = new WP_Query($args); if($query->have_posts()) : while ($query->have_posts()) : $query->the_post();?>

        <div class="col-md-12">
            <div class="editor-info clearfix">
                <?php if( get_field('ijbb_editor_photos') ): ?>
                <img src="<?php the_field('ijbb_editor_photos'); ?>" />
                <?php endif; ?>
                <p class="editor-name"><strong><?php the_title();?></strong></p>
                <p class="editor-designation"><?php the_field('ijbb_designation');?></p>
                <p class="editor-qualification"> <?php the_field('ijbb_qualification');?> <br></p>
                <p class="editor-address"> <?php the_field('ijbb_address');?></p>
                <p class="editor-country"> <?php the_field('ijbb_country');?></p>
            </div>
        </div>
        <?php endwhile; else : ?>
        <p>
            <?php _e( 'Sorry, no page id matched your criteria.' ); ?>
        </p>
        <?php endif; ?>
    </div>
</div>
<?php $editorijbb = ob_get_clean();
return $editorijbb;
}
add_shortcode( 'ijbbeditor', 'create_ijbbeditor_shortcode' );
?>
<?php 
//5. Shortcode: [ijmmeditor]
function create_ijmmeditor_shortcode() {

ob_start();?>

<div class="container">
    <div class="row">
        <?php $args = array(
                    'post_type' => 'ijmmeditor',
                );
                $query = new WP_Query($args); if($query->have_posts()) : while ($query->have_posts()) : $query->the_post();?>

        <div class="col-md-12">
            <div class="editor-info clearfix">
                <?php if( get_field('ijmm_editor_photos') ): ?>
                <img src="<?php the_field('ijmm_editor_photos'); ?>" />
                <?php endif; ?>
                <p class="editor-name"><strong><?php the_title();?></strong></p>
                <p class="editor-designation"><?php the_field('ijmm_designation');?></p>
                <p class="editor-qualification"> <?php the_field('ijmm_qualification');?> <br></p>
                <p class="editor-address"> <?php the_field('ijmm_address');?></p>
                <p class="editor-country"> <?php the_field('ijmm_country');?></p>
            </div>
        </div>
        <?php endwhile; else : ?>
        <p>
            <?php _e( 'Sorry, no page id matched your criteria.' ); ?>
        </p>
        <?php endif; ?>
    </div>
</div>
<?php $editorijmm = ob_get_clean();
return $editorijmm;
}
add_shortcode( 'ijmmeditor', 'create_ijmmeditor_shortcode' );
?>
