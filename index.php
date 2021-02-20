<?php
require __DIR__ . '/vendor/autoload.php';

use Spatie\PdfToText\Pdf;
$text = (new Pdf('/opt/bin/pdftotext'))
    ->setPdf('dummy.pdf')
    ->text();

echo $text;
?>