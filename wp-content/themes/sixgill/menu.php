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
					$html .= '<div class="tabletmobile-vertical-centered">';
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
					$html .= '<div class="tabletmobile-vertical-centered">';
						$html .= $elementName;
					$html .= '</div>';
				$html .= '</div>';
			$html .= '</a>';
		}
		return $html;
	}

	include(locate_template('menu_list.php'));

?>
<div class="clear"></div>
<nav id="primary-menu">
	<ul>
		<li>
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
		</li>
	</ul>
</nav>
