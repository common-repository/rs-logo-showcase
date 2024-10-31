<div class="wrap-meta-group">

    <div style="margin: 10px 0;"><label for="grid_style" style="width:150px; display:inline-block;"><?php esc_html_e( 'Select List Style', 'rst-logo') ?></label>
        <?php $grid_style = get_post_meta( $logo_data->ID, 'grid_style', true );              
        $grid_style = !empty($grid_style) ? $grid_style : esc_html__('Style 1','rst-logo'); ?>

        <select name="grid_style">
            <option value="style1" <?php echo esc_html(($grid_style == 'style1') ? 'selected': ''); ?>><?php echo esc_html__(' Style 1','rst-logo');?></option> 
            
        </select>     
    </div>
        
</div>