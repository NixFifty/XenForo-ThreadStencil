<?php

class NixFifty_ThreadStencil_XenForo_ViewAdmin_Forum_Edit extends XFCP_NixFifty_ThreadStencil_XenForo_ViewAdmin_Forum_Edit
{
	public function renderHtml()
	{
		$this->_params['editorTemplate'] = XenForo_ViewPublic_Helper_Editor::getEditorTemplate(
			$this, 'thread_stencil',
			$this->_params['forum']['thread_stencil'],
			array(
				'extraClass' => 'NoAutoComplete'
			)
		);
	}
}