<?php
/**
 * PaymentController
 * @var $this PaymentController
 * Reference start
 *
 * TOC :
 *	Index
 *
 * @author Putra Sudaryanto <putra@ommu.co>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2017 Ommu Platform (www.ommu.co)
 * @link https://github.com/OmmuThemes/adminX-hospital
 *
 *----------------------------------------------------------------------------------------------------------
 */

class PaymentController extends Controller
{
	/**
	 * Initialize public template
	 */
	public function init() 
	{
		Yii::app()->theme = 'adminx-hospital';
		$this->layout = 'main';
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules() 
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','add'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	
	/**
	 * Displays the login page
	 */
	public function actionIndex()
	{
		$this->pageTitle = Yii::t('phrase', 'Payments');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('/adminx/payment/front_index');
	}
	
	/**
	 * Displays the login page
	 */
	public function actionAdd()
	{
		$this->pageTitle = Yii::t('phrase', 'Add Payment');
		$this->pageDescription = '';
		$this->pageMeta = '';
		$this->render('/adminx/payment/front_add');
	}
}