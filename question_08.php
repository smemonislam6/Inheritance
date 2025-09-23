<?php
/**
 * Create an abstract class Document with an abstract method printDocument().
 * Derive two classes PDFDocument and WordDocument that implement printDocument() with different formatting logic.
 */

abstract class Document
{
    protected string $content;

    public function __construct(string $content)
    {
        $this->content = $content;
    }
    abstract public function printDocument();
}

class PDFDocument extends Document
{
    public function printDocument()
    {
        return "PDF Document: Content = '{$this->content}', Format = A4, Font = Helvetica 12pt";
    }
}

class WordDocument extends Document
{
    public function printDocument()
    {
        return "Word Document: Content = '{$this->content}', Style = Times New Roman, Margins = 1 inch";
    }
}

$pdfDocument = new PDFDocument("Sample PDF text");
echo $pdfDocument->printDocument() . PHP_EOL;

$wordDocument = new WordDocument("Sample Word text");
echo $wordDocument->printDocument() . PHP_EOL;
