<?php

declare(strict_types=1);

namespace Boris\LogViewer\Block\Adminhtml\Log;

use Magento\Backend\Block\Template;
use Magento\Backend\Block\Template\Context;
use Magento\Framework\Filesystem\DirectoryList;

class ViewLog extends Template
{
    private const MAX_BYTES = 262144;

    private DirectoryList $directoryList;

    public function __construct(Context $context, DirectoryList $directoryList, array $data = [])
    {
        parent::__construct($context, $data);
        $this->directoryList = $directoryList;
    }

    public function getFileName(): string
    {
        return basename((string)$this->getRequest()->getParam('file'));
    }

    public function getBackUrl(): string
    {
        return $this->getUrl('boris_logviewer/log/index');
    }

    public function getLogContent(): string
    {
        $fileName = $this->getFileName();
        if (!$this->isAllowedLogFile($fileName)) {
            return (string)__('Invalid log file.');
        }

        $path = $this->directoryList->getPath(DirectoryList::LOG) . DIRECTORY_SEPARATOR . $fileName;
        if (!is_file($path) || !is_readable($path)) {
            return (string)__('Log file is not readable.');
        }

        $size = filesize($path) ?: 0;
        $handle = fopen($path, 'rb');
        if (!$handle) {
            return (string)__('Log file could not be opened.');
        }

        if ($size > self::MAX_BYTES) {
            fseek($handle, -self::MAX_BYTES, SEEK_END);
            fgets($handle);
        }

        $content = stream_get_contents($handle) ?: '';
        fclose($handle);

        if ($size > self::MAX_BYTES) {
            $content = '[Showing last 256 KB]' . PHP_EOL . $content;
        }

        return $content;
    }

    private function isAllowedLogFile(string $fileName): bool
    {
        return (bool)preg_match('/^[A-Za-z0-9_.-]+\.log$/', $fileName);
    }
}
