<?php
$date_field_value = get_user_meta( get_current_user_id(), $field_name, TRUE );
?>
<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
	<label for="reg_<?php echo esc_attr($field_name); ?>">
		<?php echo esc_html($label) ?>
		<?php if ( $required == 'yes' ) : ?>
			<span class="required">*</span>
		<?php endif; ?>
	</label>
	<input type="text" class="input-text"
	       name="<?php echo esc_attr($field_name); ?>"
	       id="dtwcbe_reg_date_picker"
	       value="<?php echo isset( $date_field_value ) ?
		       $date_field_value :
		       NULL ?>"/>
</p>