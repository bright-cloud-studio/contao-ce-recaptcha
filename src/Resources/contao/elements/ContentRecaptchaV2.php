<?php

/**
 * @copyright  Bright Cliud Studio
 * @author     Bright Cloud Studio
 * @package    Contao CE Glide
 * @license    LGPL-3.0+
 * @see	       https://github.com/bright-cloud-studio/contao-ce-recaptcha
 */

namespace Bcs\RecaptchaBundle;

class ContentRecaptchaV2 extends \ContentText
{
	/* Template @var string */
	protected $strTemplate = 'ce_recaptcha_v2';

	/* Generate the content element */
	public function compile()
	{
		$request = \System::getContainer()->get('request_stack')->getCurrentRequest();

		if ($request && \System::getContainer()->get('contao.routing.scope_matcher')->isBackendRequest($request))
		{
			$this->strTemplate = 'be_wildcard';
			$this->Template = new \BackendTemplate($this->strTemplate);
			$this->Template->title = $this->headline;
		}

	}
}
