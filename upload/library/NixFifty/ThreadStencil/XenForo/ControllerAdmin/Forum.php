<?php

class NixFifty_ThreadStencil_XenForo_ControllerAdmin_Forum
	extends XFCP_NixFifty_ThreadStencil_XenForo_ControllerAdmin_Forum
{
	public function actionSave()
	{
		$response = parent::actionSave();
		$nodeId = $this->_input->filterSingle('node_id', XenForo_Input::UINT);

		$stencil = $this->getHelper('Editor')->getMessageText('thread_stencil', $this->_input);
		$stencil = XenForo_Helper_String::autoLinkBbCode($stencil);

		$writer = $this->_getNodeDataWriter();
		$writer->setExistingData($nodeId);
		$writer->set('thread_stencil', $stencil);
		$writer->save();
		return $response;
	}
}