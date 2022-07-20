<?php

namespace Shivjha\Testmodule\Controller\Index;

use Magento\Framework\Controller\ResultFactory;

class Index extends \Magento\Framework\App\Action\Action

{
	
	public function execute()
	
	{
		
		$result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
		$result->setContents('Hello Shiv is TYPING !');
		return $result;
	}
}
