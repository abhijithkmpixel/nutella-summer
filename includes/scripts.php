

<script src="https://static.addtoany.com/menu/page.js?t=1624611617" async></script>

<script>
  // You are allowed to override block's configuration. List here blocks which you want to attach to header and footer.
  bdiHeaderFooterConfig.header_top.blocks = [
    "headersociallinksblock","languageswitchercontent"
  ];
  bdiHeaderFooterConfig.header.blocks = [
    "nutella20_theme_branding", "nutella20_theme_main_menu"
  ];
  bdiHeaderFooterConfig.footer_pre.blocks = [
    "addtoanybuttons", "newslettersubscription"
  ];

  bdiHeaderFooterConfig.footer.blocks = [
    "mainnavigation", "nutella20_theme_footer"
  ];
  bdiHeaderFooterConfig.copywrite.blocks = [
    "changecountryblock", "headersociallinksblock_2", "copyright", "badges"
  ];

  jQuery(document).ready(function () {
    jQuery('#nutella-embed-header').bdiHeader();
    jQuery('#nutella-embed-header-top').bdiTopHeader();
    jQuery('#nutella-embed-footer-pre').bdiPreFooter();
    jQuery('#nutella-embed-footer').bdiFooter();
    jQuery('#nutella-embed-copywrite').bdiCopy();
  });
</script>
