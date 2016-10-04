<?php
	function makeMenuElement($elementName, $link, $sublinksList, $isSelected, $isExpanded, $listSize) {
		$html .= '';
		if($isSelected) {
			$html .= '<a ';
			if($isSelected) {
				$html .= 'class="menu-link-selected" ';
			}
			if($isExpanded) {
				$html .= 'href="#top">';
			} else {
				$html .= 'href="'.$link.'">';
			}
			$html .= $elementName;
			$html .= '</a>';
			if($isExpanded) {
				$html .= '<div class="display-only-desktop">';
				foreach($sublinksList as $sublink) {
					$html .= '<a class="menu-sublink scroll-section" href="#'.$sublink['anchor'].'">';
						$html .= '<div class="arrow">&gt;</div>';
						$html .= $sublink['name'];
					$html .= '</a>';
				}
				$html .= '</div>';
			}
		} else {
			$html .= '<a href="'.$link.'">';
			$html .= $elementName;
			$html .= '</a>';
		}
		return $html;
	}

	include(locate_template('menu_list.php'));

?>
<nav class="primary-menu hide">
	<img id="close-menu-icon-tablet" class="display-only-tablet primary-menu-close-icon" src="/wp-content/themes/sixgill/images/td/logo/iconExit.svg" alt=""/>
	<div class="primary-menu-top-container no-desktop-display">
		<div class="primary-menu-top-container-divider no-mobile-portrait-display no-mobile-landscape-display"></div>
		<div class="primary-menu-top-container-field">
			<?php get_search_form() ?>
		</div>
	</div>
	<div class="primary-menu-list">
		<?php
			foreach($menu as $menuElement) {
				echo makeMenuElement(
					$menuElement['elementName'],
					$menuElement['link'],
					$menuElement['sublinksList'],
					$menuElement['isSelected'],
					$menuElement['isExpanded'],
					count($menu)
				);
			}
		?>
	</div>
	<div class="primary-menu-bottom-container no-desktop-display">
		<div class="primary-menu-bottom-container-divider no-mobile-portrait-display no-mobile-landscape-display"></div>
		<div class="primary-menu-bottom-container-button button-blue" data-toggle="modal" data-target="#myModal">
			<div class="vertical-centered">
				Schedule a Demo
			</div>
		</div>
	</div>
</nav>
