<?php

class NixFifty_ThreadStencil_XenForo_DataWriter_Forum extends XFCP_NixFifty_ThreadStencil_XenForo_DataWriter_Forum
{
	/**
	 * Gets the fields that are defined for the table. See parent for explanation.
	 *
	 * @return array
	 */
	protected function _getFields()
	{
		$fields = parent::_getFields();

		$fields['xf_forum']['thread_stencil'] = array('type' => self::TYPE_STRING, 'default' => '');

		return $fields;
	}
}