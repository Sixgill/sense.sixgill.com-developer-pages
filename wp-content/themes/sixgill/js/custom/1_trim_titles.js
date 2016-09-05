jQuery(function() {
  $('.ellipsis-3lines').ellipsis({
    lines: 3,
    responsive: true
  });

  $('.ellipsis-2lines').ellipsis({
    lines: 2,
    responsive: true
  });

  $('.ellipsis-3lines-'+window.screenType).ellipsis({
    lines: 3,
    responsive: true
  });

  $('.ellipsis-2lines-'+window.screenType).ellipsis({
    lines: 2,
    responsive: true
  });
})
