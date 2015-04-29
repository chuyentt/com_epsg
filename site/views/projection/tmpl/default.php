<?php
/**
 * @version     1.0.0
 * @package     com_epsg
 * @copyright   Copyright (C) 2015. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Chuyen Trung Tran <chuyentt@gmail.com> - http://www.geomatics.vn
 */
// no direct access
defined('_JEXEC') or die;

$canEdit = JFactory::getUser()->authorise('core.edit', 'com_epsg.' . $this->item->id);
if (!$canEdit && JFactory::getUser()->authorise('core.edit.own', 'com_epsg' . $this->item->id)) {
	$canEdit = JFactory::getUser()->id == $this->item->created_by;
}
?>
<?php if ($this->item) : ?>

    <div class="item_fields">
        <table class="table">
            <tr>
			<th><?php echo JText::_('COM_EPSG_FORM_LBL_PROJECTION_ID'); ?></th>
			<td><?php echo $this->item->id; ?></td>
</tr>
<tr>
			<th><?php echo JText::_('COM_EPSG_FORM_LBL_PROJECTION_STATE'); ?></th>
			<td>
			<i class="icon-<?php echo ($this->item->state == 1) ? 'publish' : 'unpublish'; ?>"></i></td>
</tr>
<tr>
			<th><?php echo JText::_('COM_EPSG_FORM_LBL_PROJECTION_CREATED_BY'); ?></th>
			<td><?php echo $this->item->created_by_name; ?></td>
</tr>
<tr>
			<th><?php echo JText::_('COM_EPSG_FORM_LBL_PROJECTION_TITLE'); ?></th>
			<td><?php echo $this->item->title; ?></td>
</tr>
<tr>
			<th><?php echo JText::_('COM_EPSG_FORM_LBL_PROJECTION_ALIAS'); ?></th>
			<td><?php echo $this->item->alias; ?></td>
</tr>
<tr>
			<th><?php echo JText::_('COM_EPSG_FORM_LBL_PROJECTION_EPSG_CODE'); ?></th>
			<td><?php echo $this->item->epsg_code; ?></td>
</tr>
<tr>
			<th><?php echo JText::_('COM_EPSG_FORM_LBL_PROJECTION_VALUE'); ?></th>
			<td><?php echo $this->item->value; ?></td>
</tr>
<tr>
			<th><?php echo JText::_('COM_EPSG_FORM_LBL_PROJECTION_AREA_OF_USE'); ?></th>
			<td><?php echo $this->item->area_of_use; ?></td>
</tr>

        </table>
    </div>
    <?php if($canEdit && $this->item->checked_out == 0): ?>
		<a class="btn" href="<?php echo JRoute::_('index.php?option=com_epsg&task=projection.edit&id='.$this->item->id); ?>"><?php echo JText::_("COM_EPSG_EDIT_ITEM"); ?></a>
	<?php endif; ?>
								<?php if(JFactory::getUser()->authorise('core.delete','com_epsg.projection.'.$this->item->id)):?>
									<a class="btn" href="<?php echo JRoute::_('index.php?option=com_epsg&task=projection.remove&id=' . $this->item->id, false, 2); ?>"><?php echo JText::_("COM_EPSG_DELETE_ITEM"); ?></a>
								<?php endif; ?>
    <?php
else:
    echo JText::_('COM_EPSG_ITEM_NOT_LOADED');
endif;
?>
