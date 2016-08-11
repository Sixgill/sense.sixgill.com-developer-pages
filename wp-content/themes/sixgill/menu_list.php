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
				"anchor" => "solution-second-section"
			),
			array(
				"name" => "Assets",
				"anchor" => "solution-third-section"
			),
			array(
				"name" => "Crowds",
				"anchor" => "solution-fourth-section"
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
				"name" => "Sixgill Sence",
				"anchor" => "products-second-section"
			),
			array(
				"name" => "Ancillary Products",
				"anchor" => "products-last-section"
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
				"anchor" => "tech-second-section"
			),
			array(
				"name" => "Proximity",
				"anchor" => "tech-third-section"
			),
			array(
				"name" => "Open Platform",
				"anchor" => "tech-fourth-section"
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
				"anchor" => "company-second-section"
			),
			array(
				"name" => "The Board",
				"anchor" => "company-third-section"
			)
		),
		"isSelected" => $isSelected,
		"isExpanded" => $isExpanded
	);

	$isSelected = (strcasecmp(getCurrentSlug(), "company_blog")==0 || strcasecmp(getCategorySlug(), "blog")==0);
	$isExpanded = (strcasecmp(getCurrentSlug(), "company_blog")==0);
	$menu[] = array(
		"elementName" => "Blog",
		"link" => "/company_blog/",
		"sublinksList" => array(),
		"isSelected" => $isSelected,
		"isExpanded" => $isExpanded
	);
?>
