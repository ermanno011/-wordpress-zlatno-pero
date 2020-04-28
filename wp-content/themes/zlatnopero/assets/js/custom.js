 // ---- toggle search input ----
$(".search-icon").click(function() {
  $("form.search-form").fadeToggle( "slow", "linear" );
});
// toggle navigation buttons
$( ".nav-burger" ).click(function() {
  $( ".mob-nav" ).toggleClass( "active" );
});
$( ".close-nav" ).click(function() {
  $( ".mob-nav" ).toggleClass( "active" );
});
