<?php
class Mdl_Mdltestimonials_Adminhtml_MdltestimonialsController extends Mage_Adminhtml_Controller_action {

    protected function _initAction() {
        $this->loadLayout()
                ->_setActiveMenu('mdltestimonials/items')
                ->_addBreadcrumb(Mage::helper('adminhtml')->__('Items Manager'), Mage::helper('adminhtml')->__('Item Manager'));

        return $this;
    }

    public function indexAction() {
        $this->_initAction()
                ->renderLayout();
    }

    public function editAction() {
        $id = $this->getRequest()->getParam('id');
        $model = Mage::getModel('mdltestimonials/mdltestimonials')->load($id);

         if($model->getId() || $id == 0) {
            $data = Mage::getSingleton('adminhtml/session')->getFormData(true);
            if (!empty($data)) {
                $model->setData($data);
            }

            Mage::register('mdltestimonials_data', $model);

            $this->loadLayout();
            $this->_setActiveMenu('mdltestimonials/items');

            $this->_addBreadcrumb(Mage::helper('adminhtml')->__('Item Manager'), Mage::helper('adminhtml')->__('Item Manager'));
            $this->_addBreadcrumb(Mage::helper('adminhtml')->__('Item News'), Mage::helper('adminhtml')->__('Item News'));

            $this->getLayout()->getBlock('head')->setCanLoadExtJs(true);

            $this->_addContent($this->getLayout()->createBlock('mdltestimonials/adminhtml_mdltestimonials_edit'))
                    ->_addLeft($this->getLayout()->createBlock('mdltestimonials/adminhtml_mdltestimonials_edit_tabs'));

            $this->renderLayout();
        } else {
            Mage::getSingleton('adminhtml/session')->addError(Mage::helper('mdltestimonials')->__('Item does not exist'));
            $this->_redirect('*/*/');
        }
    }

    public function newAction() {
        $this->_forward('edit');
    }

    public function saveAction() {
        if ($data = $this->getRequest()->getPost()) {
            if (isset($_FILES['filename']['name']) && $_FILES['filename']['name'] != '') {
                try {
                    /* Starting upload */
                    $uploader = new Varien_File_Uploader('filename');
                    // Any extention would work
                    $uploader->setAllowedExtensions(array('jpg', 'jpeg', 'gif', 'png'));
                    $uploader->setAllowRenameFiles(true);
                    // Set the file upload mode 
                    // false -> get the file directly in the specified folder
                    // true -> get the file in the product like folders 
                    //	(file.jpg will go in something like /media/f/i/file.jpg)
                    $uploader->setFilesDispersion(false);
                    // We set media as the upload dir                    
                    $newDir = "mdltestimonials";

                    $newdirPath = Mage::getBaseDir('media') . DS . "mdltestimonials";

                    if (!file_exists($newdirPath)) {
                        mkdir($newdirPath, 0777);
                    }

                    $path = Mage::getBaseDir('media') . DS . $newDir . DS ;
                    $resizedPath = Mage::getBaseDir('media') . DS . $newDir;
                    $uploader->save($path, $_FILES['filename']['name']);

                    /* Resize the image start */
                    $uploadedFileName = $uploader->getUploadedFileName();
                    $_imgUrl = $resizedPath .'/'. $uploadedFileName;
					
					if (Mage::getStoreConfig('mdltestimonials/general/mdltestimonialsresizeenabled') == 1) {
                        $imgHeight = Mage::getStoreConfig('mdltestimonials/general/thumbheight');
                        $imgWidth = Mage::getStoreConfig('mdltestimonials/general/thumbwidth');
//echo $_imgUrl;die;
                        if (file_exists($_imgUrl)) {

	//echo $_imgUrl.$imgHeight.$imgWidth;die;
							$pi = pathinfo($uploadedFileName);
							$imageName = $pi['filename'].'_thumb.'.$pi['extension'];
							$_imgUrl2 = $resizedPath .'/'. $imageName;
						
							$imageObj = new Varien_Image($_imgUrl);
                            $imageObj->constrainOnly(TRUE);
                            $imageObj->keepAspectRatio(TRUE);
                            $imageObj->keepFrame(FALSE);
                            $imageObj->resize($imgWidth, $imgHeight);
                            $imageObj->save($_imgUrl2);
						}
                    }
                } catch (Exception $e) {
                    
                }
                //this way the name is saved in DB
                $data['filename'] = $uploader->getUploadedFileName();
            }


            $model = Mage::getModel('mdltestimonials/mdltestimonials');
            $model->setData($data)
                    ->setId($this->getRequest()->getParam('id'));

            try {
                if ($model->getCreatedTime == NULL || $model->getUpdateTime() == NULL) {
                    $model->setCreatedTime(now())
                            ->setUpdateTime(now());
                } else {
                    $model->setUpdateTime(now());
                }

                $model->save();
                Mage::getSingleton('adminhtml/session')->addSuccess(Mage::helper('mdltestimonials')->__('Item was successfully saved'));
                Mage::getSingleton('adminhtml/session')->setFormData(false);

                if ($this->getRequest()->getParam('back')) {
                    $this->_redirect('*/*/edit', array('id' => $model->getId()));
                    return;
                }
                $this->_redirect('*/*/');
                return;
            } catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
                Mage::getSingleton('adminhtml/session')->setFormData($data);
                $this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
                return;
            }
        }
        Mage::getSingleton('adminhtml/session')->addError(Mage::helper('mdltestimonials')->__('Unable to find item to save'));
        $this->_redirect('*/*/');
    }

    public function deleteAction() {
        if ($this->getRequest()->getParam('id') > 0) {
            try {
                $model = Mage::getModel('mdltestimonials/mdltestimonials');

                $model->setId($this->getRequest()->getParam('id'))
                        ->delete();

                Mage::getSingleton('adminhtml/session')->addSuccess(Mage::helper('adminhtml')->__('Item was successfully deleted'));
                $this->_redirect('*/*/');
            } catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
                $this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
            }
        }
        $this->_redirect('*/*/');
    }

    public function massDeleteAction() {
        $mdltestimonialsIds = $this->getRequest()->getParam('mdltestimonials');
        if (!is_array($mdltestimonialsIds)) {
            Mage::getSingleton('adminhtml/session')->addError(Mage::helper('adminhtml')->__('Please select item(s)'));
        } else {
            try {
                foreach ($mdltestimonialsIds as $mdltestimonialsId) {
                    $mdltestimonials = Mage::getModel('mdltestimonials/mdltestimonials')->load($mdltestimonialsId);
                    $mdltestimonials->delete();
                }
                Mage::getSingleton('adminhtml/session')->addSuccess(
                        Mage::helper('adminhtml')->__(
                                'Total of %d record(s) were successfully deleted', count($mdltestimonialsIds)
                        )
                );
            } catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
            }
        }
        $this->_redirect('*/*/index');
    }

    public function massStatusAction() {
        $mdltestimonialsIds = $this->getRequest()->getParam('mdltestimonials');
        if (!is_array($mdltestimonialsIds)) {
            Mage::getSingleton('adminhtml/session')->addError($this->__('Please select item(s)'));
        } else {
            try {
                foreach ($mdltestimonialsIds as $mdltestimonialsId) {
                    $mdltestimonials = Mage::getSingleton('mdltestimonials/mdltestimonials')
                            ->load($mdltestimonialsId)
                            ->setStatus($this->getRequest()->getParam('status'))
                            ->setIsMassupdate(true)
                            ->save();
                }
                $this->_getSession()->addSuccess(
                        $this->__('Total of %d record(s) were successfully updated', count($mdltestimonialsIds))
                );
            } catch (Exception $e) {
                $this->_getSession()->addError($e->getMessage());
            }
        }
        $this->_redirect('*/*/index');
    }

    public function exportCsvAction() {
        $fileName = 'mdltestimonials.csv';
        $content = $this->getLayout()->createBlock('mdltestimonials/adminhtml_mdltestimonials_grid')
                ->getCsv();

        $this->_sendUploadResponse($fileName, $content);
    }

    public function exportXmlAction() {
        $fileName = 'mdltestimonials.xml';
        $content = $this->getLayout()->createBlock('mdltestimonials/adminhtml_mdltestimonials_grid')
                ->getXml();

        $this->_sendUploadResponse($fileName, $content);
    }

    protected function _sendUploadResponse($fileName, $content, $contentType = 'application/octet-stream') {
        $response = $this->getResponse();
        $response->setHeader('HTTP/1.1 200 OK', '');
        $response->setHeader('Pragma', 'public', true);
        $response->setHeader('Cache-Control', 'must-revalidate, post-check=0, pre-check=0', true);
        $response->setHeader('Content-Disposition', 'attachment; filename=' . $fileName);
        $response->setHeader('Last-Modified', date('r'));
        $response->setHeader('Accept-Ranges', 'bytes');
        $response->setHeader('Content-Length', strlen($content));
        $response->setHeader('Content-type', $contentType);
        $response->setBody($content);
        $response->sendResponse();
        die;
    }

}