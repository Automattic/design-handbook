<?php
	// The first PHP I've written. Neato.
	function page_title($title) {
		if (isset($title)) {
			$page_title = $title;
		} else {
			$page_title = "WordPress.com Styles";
		}
		echo $page_title;
	}
	function is_current($page, $nav_item) {
		if(isset($page)) {
			if($page == $nav_item) {
				echo "class='current'";
			}
		}
	}
?>