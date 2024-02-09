<?php

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

namespace Bcs\RecaptchaBundle;

use Contao\Widget;

/**
 * Class FormExplanation
 *
 * @property string $text
 */
class FormRecaptcha extends Widget
{
	/**
	 * Template
	 *
	 * @var string
	 */
	protected $strTemplate = 'form_recaptcha';

	/**
	 * The CSS class prefix
	 *
	 * @var string
	 */
	protected $strPrefix = 'widget widget-recaptcha';

	/**
	 * Do not validate
	 */
	public function validate()
	{
	}

	/**
	 * Generate the widget and return it as string
	 *
	 * @return string The widget markup
	 */
	public function generate()
	{
        $GLOBALS['TL_JAVASCRIPT'][] = '<script src="https://www.google.com/recaptcha/api.js"></script>';
        
		// Add the static files URL to images
		if ($staticUrl = System::getContainer()->get('contao.assets.files_context')->getStaticUrl())
		{
			$path = System::getContainer()->getParameter('contao.upload_path') . '/';
			$this->text = str_replace(' src="' . $path, ' src="' . $staticUrl . $path, $this->text);
		}

		return StringUtil::encodeEmail($this->text);
	}
}

class_alias(FormRecaptcha::class, 'FormRecaptcha');
