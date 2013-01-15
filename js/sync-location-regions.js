/*
 * sync-location-regions.js
 * 
 * Ensures Content Taxonomy region field is synced roughly to Location country
 * 
 * LICENSE: program is distributed under the terms of the GNU General Public License
 *
 * @category  Transition Network
 * @package   transition_extras
 * @author  Jim Kirkpatrick <jim@i-jk.co.uk
 * @copyright 2009 Transition network
 * @license   http://www.gnu.org/licenses/gpl.txt GNU General Public License
 */

$(document).ready(function() {
  // get the hierarchical select
  var hs_wrapper = $("#edit-field-region-tids-hierarchical-select-selects-0").parents(".hierarchical-select-wrapper");

  // get the location country dropdown (could be standard node-location or field on user profile)
  var loc = $("#edit-locations-0-country");
  if (!loc.length) loc = $("#edit-field-user-location-0-country");

  // check we're not in need of updating, pass ref to the update handler
  if (hs_wrapper != null && loc != null) {
    // ready - hs_wrapper hide, move inside the location box 
    hs_wrapper.parent().hide();
    hs_wrapper.parent().insertAfter($(loc).parent());
    check_regions(hs_wrapper, loc); 
    $(loc).change( function() { check_regions(hs_wrapper, loc); } );
  }
});

/* check_regions()
 * 
 * Compares the currently selected Location country select box with
 * available country regions in a Hierarchical Select
 * 
 * @param hs_wrapper  the Hierachical Select container/access div
 * @param loc         the Location country dropdown
 */
function check_regions(hs_wrapper, loc) {
  // get country from location box
  //var country_name = $("#edit-locations-0-country option:selected").text();
  var country_name = $(loc).children("option:selected").text();
  
  // see if it's in the regions taxonomy
  var region_option = $("#edit-field-region-tids-hierarchical-select-selects-0 option:contains(" + country_name + ")");
  if (region_option.length == 1) {
    // country has regions - select, update and make disabled
    region_option.attr("selected", "selected");
    hs_wrapper.parent().slideDown("500");
    hs_wrapper.trigger('enforce-update');
    $("#edit-field-region-tids-hierarchical-select-selects-0").attr("disabled", "disabled");
  }
  else {
    // don't have regions: select 'none' if another set and then re-update
    if ($("#edit-field-region-tids-hierarchical-select-selects-0 option:selected").val() != 'none') {
      $("#edit-field-region-tids-hierarchical-select-selects-0 option[value='none']").attr("selected", "selected");
      hs_wrapper.trigger('enforce-update');
    }
    hs_wrapper.parent().slideUp("200");
  }
}
