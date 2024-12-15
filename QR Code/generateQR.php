<?php
    require "vendor/autoload.php";

    use Endroid\QrCode\Color\Color;
    use Endroid\QrCode\QrCode;
    use Endroid\QrCode\Writer\PngWriter;
    use Endroid\QrCode\Label\Label;
    use Endroid\QrCode\Logo\logo;
    use Endroid\QrCode\ErrorCorrectionLevel;
    use Endroid\QrCode\RoundBlockSizeMode;

    $text = $_POST['text'];

    $qr_code = QrCode::create($text)
                    ->setSize(500)
                    ->setMargin(30)
                    ->setForegroundColor(new Color(22, 23, 23))
                    ->setBackgroundColor(new Color(161, 40, 74))
                    ->setRoundBlockSizeMode(RoundBlockSizeMode::Margin)
                    ->setErrorCorrectionLevel(ErrorCorrectionLevel::High);

    $label = Label::create("Justine S. Bayron");
    $logo = Logo::create("V.png")
                ->setResizeToWidth(100);

    $writer = new PngWriter();
    $result = $writer->write($qr_code, $logo, $label);

    header("Content-Type: " . $result->getMimeType());
    echo $result->getString();

    $result->saveToFile('generatedQR.png');

?>