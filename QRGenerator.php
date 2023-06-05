<?php
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;
use Endroid\QrCode\Label\Alignment\LabelAlignmentCenter;
use Endroid\QrCode\Label\Font\NotoSans;
use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
use Endroid\QrCode\Writer\PngWriter;

require Zutrittscode::class;
$zutrittscode = new Zutrittscode("05.06.2023","Shibboleth");
class QRGenerator
{
static function renderQRCode(Zutrittscode $zutrittscode){
    $result = Builder::create()
        ->writer(new PngWriter())
        ->writerOptions([])
        ->data($zutrittscode->passwort)
        ->encoding(new Encoding('UTF-8'))
        ->errorCorrectionLevel(new ErrorCorrectionLevelHigh())
        ->size(300)
        ->margin(10)
        ->roundBlockSizeMode(new RoundBlockSizeModeMargin())
        ->labelFont(new NotoSans(20))
        ->labelAlignment(new LabelAlignmentCenter())
        ->validateResult(false)
        ->build();

    $result->saveToFile('./QRCodes/qrcode'.$zutrittscode->datum.'.png');

    return('./QRCodes/qrcode'.$zutrittscode->datum.'.png');
}
}