<?php
/**
 * Mageplaza
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the mageplaza.com license that is
 * available through the world-wide-web at this URL:
 * https://www.mageplaza.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Mageplaza
 * @package     Mageplaza_EmailAttachments
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */

namespace Mageplaza\EmailAttachments\Model;

class AttachmentContainer
{
    /**
     * @var array
     */
    protected $attachments = [];

    /**
     * @var AttachmentFactory
     */
    protected $attachmentFactory;

    /**
     * AttachmentContainer constructor.
     * @param AttachmentFactory $attachmentFactory
     */
    public function __construct(
        AttachmentFactory $attachmentFactory
    )
    {
        $this->attachmentFactory = $attachmentFactory;
    }

    public function addAttachment($content, $filename, $mimeType)
    {
        $this->attachments[] = $this->attachmentFactory->create([
            'content'  => $content,
            'filename' => $filename,
            'mimeType' => $mimeType
        ]);
    }

    /**
     * @return array
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * @return void
     */
    public function resetAttachments()
    {
        $this->attachments = [];
    }
}
