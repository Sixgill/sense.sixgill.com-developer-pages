<?php
	function makeMenuElement($elementName, $link, $sublinksList, $isSelected, $isExpanded, $listSize) {
		$html = '';
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
				$html .= '<div class="menu-'.$listSize.'">';
					$html .= '<div class="mobile-vertical-centered">';
						$html .= $elementName;
					$html .= '</div>';
				$html .= '</div>';
			$html .= '</a>';
			if($isExpanded) {
				$html .= '<div class="my_subMenus display-only-desktop">';
				foreach($sublinksList as $sublink) {
					$html .= '<a href="#'.$sublink['anchor'].'">';
						$html .= $sublink['name'];
					$html .= '</a>';
				}
				$html .= '</div>';
			}
		} else {
			$html .= '<a href="'.$link.'">';
				$html .= '<div class="menu-'.$listSize.'">';
					$html .= '<div class="mobile-vertical-centered">';
						$html .= $elementName;
					$html .= '</div>';
				$html .= '</div>';
			$html .= '</a>';
		}
		return $html;
	}

	include(locate_template('menu_list.php'));

?>

<nav id="primary-menu">
	<ul>
		<li>
			<!--
			<div class="menu-search-mobile-tablet no-desktop-display">
				<?php get_template_part('searchform-static'); ?>
			</div>
			-->
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
				get_template_part('global_social_buttons');
			?>
		</li>
	</ul>
</nav>
