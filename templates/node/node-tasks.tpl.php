<?php
?>
<div id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?>">

<?php print $picture ?>

<?php if ($page == 0): ?>
  <h2><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
<?php endif; ?>

  <div class="content clear-block">
    <?php //print $content ?>
  <!-- ******************* -->
    <table id="box-table-a">
        <?php
          if ($node->field_project[0]['view']) { ?>
            <tr class="field field-type-nodereference field-field-project">
              <td class="field-label">
                <?php print $node->content['field_project']['field']['#title'] ?>
              </td>
              <td class="field-items">
                <?php print $node->field_project[0]['view'] ?>
              </td>
            </tr>
        <?php } ?>
      <?php
        if ($node->field_validation[0]['view']) { ?>
          <tr class="field field-type-nodereference field-field-validation">
            <td class="field-label">
              <?php print $node->content['field_validation']['field']['#title'] ?>
            </td>
            <td class="field-items">
              <?php print $node->field_validation[0]['view'] ?>
            </td>
          </tr>
      <?php } ?>
      <?php
        if ($node->field_assign_user[0]['view']) { ?>
          <tr class="field field-type-nodereference field-field-assign_user">
            <td class="field-label">
              <?php print $node->content['field_assign_user']['field']['#title'] ?>
            </td>
            <td class="field-items">
              <?php print $node->field_assign_user[0]['view'] ?>
            </td>
          </tr>
      <?php } ?>
      <?php
        if ($node->field_st_date[0]['view']) { ?>
          <tr class="field field-type-nodereference field-field-st_date">
            <td class="field-label">
              <?php print $node->content['field_st_date']['field']['#title'] ?>
            </td>
            <td class="field-items">
              <?php print $node->field_st_date[0]['view'] ?>
            </td>
          </tr>
      <?php } ?>
      <?php
        if ($node->field_done[0]['view']) { ?>
          <tr class="field field-type-nodereference field-field-done">
            <td class="field-label">
              <?php print $node->content['field_done']['field']['#title'] ?>
            </td>
            <td class="field-items">
              <?php print $node->field_done[0]['view'] ?>
            </td>
          </tr>
      <?php } ?>
      <?php
        if ($node->field_status[0]['view']) { ?>
          <tr class="field field-type-nodereference field-field-status">
            <td class="field-label">
              <?php print $node->content['field_status']['field']['#title'] ?>
            </td>
            <td class="field-items">
              <?php print $node->field_status[0]['view'] ?>
            </td>
          </tr>
      <?php } ?>
      <?php
        if ($node->field_description[0]['view']) { ?>
          <tr class="field field-type-nodereference field-field-description">
            <td class="field-label">
              <?php print $node->content['field_description']['field']['#title'] ?>
            </td>
            <td class="field-items">
              <?php print $node->field_description[0]['view'] ?>
            </td>
          </tr>
      <?php } ?>
    </table>
  </div>
  <!-- ******************* -->  

</div>
