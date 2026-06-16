<?php

declare(strict_types=1);

namespace Boris\LogViewer\Block\Adminhtml\Log;

use Magento\Backend\Block\Template;
use Magento\Backend\Block\Template\Context;
use Magento\Framework\Filesystem\DirectoryList;

class ListLog extends Template
{
    private DirectoryList $directoryList;

    public function __construct(Context $context, DirectoryList $directoryList, array $data = [])
    {
        parent::__construct($context, $data);
        $this->directoryList = $directoryList;
    }

    public function getLogFiles(): array
    {
        $logDir = $this->directoryList->getPath(DirectoryList::LOG);
        $files = glob($logDir . DIRECTORY_SEPARATOR . '*.log') ?: [];
        $items = [];

        foreach ($files as $file) {
            if (!is_file($file) || !is_readable($file)) {
                continue;
            }

            $name = basename($file);
            $items[] = [
                'name' => $name,
                'size' => filesize($file) ?: 0,
                'modified' => filemtime($file) ?: 0,
                'url' => $this->getUrl('boris_logviewer/log/view', ['file' => $name]),
            ];
        }

        usort($items, static fn (array $a, array $b): int => $b['modified'] <=> $a['modified']);

        return $items;
    }

    public function formatSize(int $bytes): string
    {
        if ($bytes >= 1048576) {
            return round($bytes / 1048576, 2) . ' MB';
        }

        if ($bytes >= 1024) {
            return round($bytes / 1024, 2) . ' KB';
        }

        return $bytes . ' B';
    }
}
