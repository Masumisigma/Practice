<?php
/**
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Sigma\Contact\Controller\Index;

use Magento\Framework\App\Action\HttpPostActionInterface as HttpPostActionInterface;
use Sigma\Contact\Model\TestFactory;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Request\DataPersistorInterface;
use Magento\Framework\Controller\Result\Redirect;
use Magento\Framework\Exception\LocalizedException;
use Psr\Log\LoggerInterface;
use Magento\Framework\App\ObjectManager;
use Magento\Framework\DataObject;

class Post extends \Magento\Framework\App\Action\Action implements HttpPostActionInterface
{
    /**
     * @var DataPersistorInterface
     */
    protected $_test;
    private $dataPersistor;

    /**
     * @var Context
     */
    private $context;
  

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @param Context $context
     * @param ConfigInterface $contactsConfig
     * @param MailInterface $mail
     * @param DataPersistorInterface $dataPersistor
     * @param LoggerInterface $logger
     */
    public function __construct(
        Context $context,
        TestFactory $test,
        DataPersistorInterface $dataPersistor,
        LoggerInterface $logger = null
    ) {
        $this->_test = $test;
        parent::__construct($context);
        $this->context = $context;       
        $this->dataPersistor = $dataPersistor;
        $this->logger = $logger ?: ObjectManager::getInstance()->get(LoggerInterface::class);
    }

    /**
     * Mycontact user question
     *
     * @return Redirect
     */
    public function execute()
    {
        if (!$this->getRequest()->isPost()) {
            return $this->resultRedirectFactory->create()->setPath('*/*/');
        }
        try {
            $this->validatedParams();
			 $request = $this->getRequest();
			//print_r($request->getParams());
            $data=$request->getParams(); 
            $test = $this->_test->create();
          //  print_r($test);
          //  die;
          /*  $test->addData([
                "company" => '',
                "name" => 'Content 01',
                "email" => true,
                "telephone" => 1,
                "comment"=>''
            ]);*/
            $test->setData($data);

           /* echo '<pre>'; print_r($test->getCollection()->getData());die((__FILE__).'-->'.(__FUNCTION__).'--Line('. (__LINE__).')');
           print_r($test);*/
           // $test->setData($data);

            if($test->save()){
               // print_r(gettest_id());
               // print_r(getName());
                //print_r("In if");
                //exit;
                $this->messageManager->addSuccessMessage(__('You saved the data.'));
            }else{
                print_r("in else");
                $this->messageManager->addErrorMessage(__('Data was not saved.'));
            }
		//	die;
            /*$this->messageManager->addSuccessMessage(
                __('Thanks for contacting us with your comments and questions. We\'ll respond to you very soon.')
            );
            $this->dataPersistor->clear('contact_us');*/
        } catch (LocalizedException $e) {
            $this->messageManager->addErrorMessage($e->getMessage());
            $this->dataPersistor->set('contact_us', $this->getRequest()->getParams());
        } catch (\Exception $e) {
            $this->logger->critical($e);
            $this->messageManager->addErrorMessage(
                __('An error occurred while processing your form. Please try again later.')
            );
            $this->dataPersistor->set('contact_us', $this->getRequest()->getParams());
        }
        return $this->resultRedirectFactory->create()->setPath('contact/index');
    }

   
    /**
     * @return array
     * @throws \Exception
     */
    private function validatedParams()
    {
        $request = $this->getRequest();
        if (trim($request->getParam('name')) === '') {
            throw new LocalizedException(__('Enter the Name and try again.'));
        }
        if (trim($request->getParam('comment')) === '') {
            throw new LocalizedException(__('Enter the comment and try again.'));
        }
        if (false === \strpos($request->getParam('email'), '@')) {
            throw new LocalizedException(__('The email address is invalid. Verify the email address and try again.'));
        }
        if (trim($request->getParam('hideit')) !== '') {
            throw new \Exception();
        }

        return $request->getParams();
    }
}
