<?php
/* Course Booking System
================================================================================================================ */
function cbs_timetable_category( $course_id, $date ) {
	$courses = cbs_get_courses( array(
		'id' => $course_id
	) );
	$post_id = reset( $courses )->post_id;
	$categories = get_the_terms( $post_id, 'course_category' );

	foreach ( $categories AS $category ) :
		?>
		<p class="category"><?php _e( 'Category:' ); ?> <?= $category->name ?></p>
		<?php
	endforeach;
}
add_filter( 'cbs_timetable_after_list_item', 'cbs_timetable_category', 10, 2 );
