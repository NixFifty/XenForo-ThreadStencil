<?php

class NixFifty_ThreadStencil_XenForo_ControllerPublic_Forum
	extends XFCP_NixFifty_ThreadStencil_XenForo_ControllerPublic_Forum
{

	public function actionCreateThread()
	{
		$response = parent::actionCreateThread();

		if ($response instanceof XenForo_ControllerResponse_View AND empty($response->params['draft']))
		{
			$response->params['draft']['message'] = $response->params['forum']['thread_stencil'];
		}

		return $response;
	}
}