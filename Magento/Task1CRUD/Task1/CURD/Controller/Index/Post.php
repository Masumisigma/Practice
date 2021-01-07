<?php
/**
 * Created by PhpStorm.
 * User: masumiupadhyay
 * Date: 16/12/20
 * Time: 11:19 AM
 */

namespace Task1\CURD\Controller\Index;
use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\App\Action\Context;
use Task1\CURD\Model\TestFactory;
class Post extends Action
{
    protected $testFactory;

    public function __construct(
        Context $context,
        TestFactory $testFactory
    ) {
        $this->testFactory = $testFactory;
        $this->context = $context;
        parent::__construct($context);
    }

    public function execute()
    {
        if (!$this->getRequest()->isPost()) {
        return $this->resultRedirectFactory->create()->setPath('*/*/');
         }

        // 1. POST request : Get booking data
        $this->validatedParams();
        // print_r($this->getRequest()->getParams());
        //  exit;
        $data = (array) $this->getRequest()->getParams();
         // print_r($data);
        //return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        try{
           // if (!empty($data)) {
                // Retrieve your form data
                /* $firstname   = $post['firstname'];
                 $lastname    = $post['lastname'];
                 $phone       = $post['phone'];
                 $bookingTime = $post['bookingTime'];*/
                $test = $this->testFactory->create();
                $test->setData($data);
                if($test->save()){
                    $this->messageManager->addSuccessMessage(__('You saved the data.'));
                }else{
                    $this->messageManager->addErrorMessage(__('Data was not saved.'));
                }

                //  $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
                //  $resultRedirect->setUrl('/companymodule/index/booking');
              //  return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
                //  return $resultRedirect;
         //   }
            // 2. GET request : Render the booking page
            /*  $this->_view->loadLayout();
              $this->_view->renderLayout();*/
        }
        catch (LocalizedException $e)
        {
            $this->messageManager->addErrorMessage($e);
        }
        catch (\Exception $e)
        {
            $this->messageManager->addErrorMessage($e);
        }
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);

    }



    private function validatedParams()
     {
         $request = $this->getRequest();
         /*print_r($request->getParams());
         exit;*/
         if (trim($request->getParam('firstname')) === '') {
             throw new LocalizedException(__('Enter the First Name and try again.'));
         }
         if (trim($request->getParam('lastname')) === '') {
             throw new LocalizedException(__('Enter the Last Name and try again.'));
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