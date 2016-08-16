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
				$html .= '<div class="menu-'.$listSize.'">';
					$html .= '<div class="tabletmobile-vertical-centered">';
						$html .= $elementName;
					$html .= '</div>';
				$html .= '</div>';
			$html .= '</a>';
			if($isExpanded) {
				$html .= '<div class="display-only-desktop">';
				foreach($sublinksList as $sublink) {
					$html .= '<a class="menu-sublink scroll-section" href="#'.$sublink['anchor'].'">';
						$html .= '<div class="arrow">&gt;</div>';
						$html .= $sublink['name'];
					$html .= '</a>';
					$html .= '<div class="clear"></div>';
				}
				$html .= '</div>';
			}
		} else {
			$html .= '<a href="'.$link.'">';
				$html .= '<div class="menu-'.$listSize.'">';
					$html .= '<div class="tabletmobile-vertical-centered">';
						$html .= $elementName;
					$html .= '</div>';
				$html .= '</div>';
			$html .= '</a>';
		}
		$html .= '<div class="clear"></div>';
		return $html;
	}

	include(locate_template('menu_list.php'));

?>
<div class="clear"></div>
<nav id="primary-menu">
	<ul class="menu-ul-wrapper">
		<li class="menu-li-wrapper">
			<div class="desktop-menu-wrapper">
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
					get_template_part('mobile_social_buttons');
				?>
			</div>
		</li>
	</ul>
</nav>
