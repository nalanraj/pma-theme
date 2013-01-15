Drupal.behaviors.pm_feature_general = function(context) {

  //***** Accordion for Project page *****
  $(function() {
    $( "#accordion" ).accordion({
      collapsible: true,
      autoHeight: false
    });
  });
}
