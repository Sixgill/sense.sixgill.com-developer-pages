<?php
	$menu = array();

	$isSelected = $isExpanded = strcasecmp(getCurrentSlug(), "home")==0;
	$menu[] = array(
		"elementName" => "Home",
		"link" => "/",
		"sublinksList" => array(),
		"isSelected" => $isSelected,
		"isExpanded" => $isExpanded
	);

	$isExpanded = (strcasecmp(getCurrentSlug(), "solutions")==0);
	$isSelected = $isExpanded || (strcasecmp(getParentSlug(), "solutions")==0);
	$menu[] = array(
		"elementName" => "Solutions",
		"link" => "/solutions/",
		"sublinksList" => array(
			array(
				"name" => "People",
				"anchor" => "people"
				// "anchor" => "solution-second-section"
			),
			array(
				"name" => "Assets",
				"anchor" => "assets"
				// "anchor" => "solution-third-section"
			),
			array(
				"name" => "Crowds",
				"anchor" => "crowds"
				// "anchor" => "solution-fourth-section"
			),
		),
		"isSelected" => $isSelected,
		"isExpanded" => $isExpanded
	);

	$isExpanded = $isSelected  = (strcasecmp(getCurrentSlug(), "products")==0);
	$menu[] = array(
		"elementName" => "Products",
		"link" => "/products/",
		"sublinksList" => array(
			array(
				"name" => "Sixgill Sense",
				"anchor" => "sense"
				// "anchor" => "products-second-section"
			),
			array(
				"name" => "Ancillary Products",
				"anchor" => "ancillary"
				// "anchor" => "products-last-section"
			)
		),
		"isSelected" => $isSelected,
		"isExpanded" => $isExpanded
	);

	$isExpanded = $isSelected  = (strcasecmp(getCurrentSlug(), "tech")==0);
	$menu[] = array(
		"elementName" => "Tech",
		"link" => "/tech/",
		"sublinksList" => array(
			array(
				"name" => "Location",
				"anchor" => "location"
				// "anchor" => "tech-second-section"
			),
			array(
				"name" => "Proximity",
				"anchor" => "proximity"
				// "anchor" => "tech-third-section"
			),
			array(
				"name" => "Open Platform",
				"anchor" => "platform"
				// "anchor" => "tech-fourth-section"
			)
		),
		"isSelected" => $isSelected,
		"isExpanded" => $isExpanded
	);

	$isExpanded = $isSelected  = (strcasecmp(getCurrentSlug(), "company")==0);
	$menu[] = array(
		"elementName" => "Company",
		"link" => "/company/",
		"sublinksList" => array(
			array(
				"name" => "Leadership",
				"anchor" => "leadership"
				// "anchor" => "company-second-section"
			),
			array(
				"name" => "The Board",
				"anchor" => "board"
				// "anchor" => "company-third-section"
			)
		),
		"isSelected" => $isSelected,
		"isExpanded" => $isExpanded
	);

	$isSelected = (strcasecmp(getCurrentSlug(), "blog")==0 || strcasecmp(getCategorySlug(), "blog")==0);
	$isExpanded = (strcasecmp(getCurrentSlug(), "blog")==0);
	$menu[] = array(
		"elementName" => "Blog",
		"link" => "/blog/",
		"sublinksList" => array(),
		"isSelected" => $isSelected,
		"isExpanded" => $isExpanded
	);

	$isSelected = (strcasecmp(getCurrentSlug(), "resources")==0);
	$isExpanded = (strcasecmp(getCurrentSlug(), "resources")==0);
	$menu[] = array(
		"elementName" => "Resources",
		"link" => "/resources/",
		"sublinksList" => array(),
		"isSelected" => $isSelected,
		"isExpanded" => $isExpanded
	);
?>
