<?php
/* Course Booking System
================================================================================================================ */

// Show note before availability
function cbs_single_course_note_before_availability( $course_id, $date ) {
	$note = cbs_get_note( $course_id, $date );

	if ( !empty( $note ) ) :
		?>
		<p><?php _e( 'Note' ); ?>: <strong><?= $note ?></strong></p>
		<?php
	endif;
}
add_action( 'cbs_single_course_before_availability', 'cbs_single_course_note_before_availability', 10, 2 );
