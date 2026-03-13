<?php

declare(strict_types=1);

$out = __DIR__ . '/../source/assets/images/og-velyx.png';
$fontRegular = '/usr/share/fonts/truetype/dejavu/DejaVuSans.ttf';
$fontBold = '/usr/share/fonts/truetype/dejavu/DejaVuSans-Bold.ttf';

$width = 1200;
$height = 630;
$image = imagecreatetruecolor($width, $height);
imageantialias($image, true);
imagealphablending($image, true);
imagesavealpha($image, true);

$bg = imagecolorallocate($image, 247, 247, 245);
$bg2 = imagecolorallocate($image, 232, 232, 228);
$ink = imagecolorallocate($image, 24, 24, 27);
$muted = imagecolorallocate($image, 89, 89, 94);
$line = imagecolorallocate($image, 217, 217, 214);
$accent = imagecolorallocate($image, 35, 35, 38);
$white = imagecolorallocate($image, 255, 255, 255);
$panel = imagecolorallocate($image, 255, 255, 255);
$panelSoft = imagecolorallocate($image, 243, 243, 240);
$chip = imagecolorallocate($image, 236, 236, 233);
$shadow = imagecolorallocatealpha($image, 0, 0, 0, 118);

imagefilledrectangle($image, 0, 0, $width, $height, $bg);

for ($i = 0; $i < $height; $i++) {
    $ratio = $i / $height;
    $r = (int)(247 * (1 - $ratio) + 232 * $ratio);
    $g = (int)(247 * (1 - $ratio) + 232 * $ratio);
    $b = (int)(245 * (1 - $ratio) + 228 * $ratio);
    $color = imagecolorallocate($image, $r, $g, $b);
    imageline($image, 0, $i, $width, $i, $color);
}

imagefilledellipse($image, 160, 120, 320, 320, imagecolorallocatealpha($image, 40, 40, 44, 110));
imagefilledellipse($image, 980, 140, 420, 420, imagecolorallocatealpha($image, 50, 50, 55, 116));

imageline($image, 64, 66, 1136, 66, $line);

$left = 84;
$top = 102;

// badge
imagefilledroundedrectangle($image, $left, $top, $left + 260, $top + 42, 18, $white);
imageroundedrectangle($image, $left, $top, $left + 260, $top + 42, 18, $line);
imagefilledellipse($image, $left + 24, $top + 21, 10, 10, $accent);
imagettftext($image, 13, 0, $left + 40, $top + 28, $muted, $fontBold, 'BLADE COMPONENTS FOR PRODUCTS');

imagettftext($image, 38, 0, $left, 208, $ink, $fontBold, 'Copy the UI.');
imagettftext($image, 38, 0, $left, 258, $ink, $fontBold, 'Keep the leverage.');

$body = [
    'Laravel-first UI components you can copy, adapt,',
    'and ship without locking product work to a',
    'dependency-owned design layer.',
];
$y = 320;
foreach ($body as $lineText) {
    imagettftext($image, 20, 0, $left, $y, $muted, $fontRegular, $lineText);
    $y += 34;
}

// CTA buttons
imagefilledroundedrectangle($image, $left, 398, $left + 188, 448, 18, $accent);
imagettftext($image, 15, 0, $left + 26, 430, $white, $fontBold, 'Start Building');
imagettftext($image, 17, 0, $left + 150, 431, $white, $fontBold, '->');

imagefilledroundedrectangle($image, $left + 204, 398, $left + 430, 448, 18, $white);
imageroundedrectangle($image, $left + 204, 398, $left + 430, 448, 18, $line);
imagettftext($image, 15, 0, $left + 230, 430, $ink, $fontBold, 'Component Library');

// info cards
$cardY = 492;
$cards = [
    ['OWNERSHIP', 'Your codebase stays in control.'],
    ['STACK FIT', 'Blade, Alpine, Tailwind v4, Livewire.'],
    ['SHIP FASTER', 'Start sharp, then customize deeply.'],
];
$cardX = $left;
foreach ($cards as [$label, $text]) {
    imagefilledroundedrectangle($image, $cardX, $cardY, $cardX + 168, $cardY + 96, 20, $white);
    imageroundedrectangle($image, $cardX, $cardY, $cardX + 168, $cardY + 96, 20, $line);
    imagettftext($image, 10, 0, $cardX + 16, $cardY + 26, $muted, $fontBold, $label);
    imagettftext($image, 12, 0, $cardX + 16, $cardY + 56, $ink, $fontRegular, $text);
    $cardX += 182;
}

// right preview board
$rx1 = 690; $ry1 = 84; $rx2 = 1114; $ry2 = 550;
imagefilledroundedrectangle($image, $rx1 + 8, $ry1 + 12, $rx2 + 8, $ry2 + 12, 28, $shadow);
imagefilledroundedrectangle($image, $rx1, $ry1, $rx2, $ry2, 28, $panel);
imageroundedrectangle($image, $rx1, $ry1, $rx2, $ry2, 28, $line);
imagefilledrectangle($image, $rx1, $ry1, $rx2, $ry1 + 72, $panelSoft);
imageline($image, $rx1, $ry1 + 72, $rx2, $ry1 + 72, $line);

imagefilledroundedrectangle($image, $rx1 + 24, $ry1 + 20, $rx1 + 64, $ry1 + 60, 16, $accent);
imagettftext($image, 14, 0, $rx1 + 82, $ry1 + 35, $ink, $fontBold, 'VELYX PREVIEW');
imagettftext($image, 11, 0, $rx1 + 82, $ry1 + 55, $muted, $fontRegular, 'Drawer, table, command palette');
imagefilledroundedrectangle($image, $rx2 - 120, $ry1 + 22, $rx2 - 24, $ry1 + 52, 14, $white);
imageroundedrectangle($image, $rx2 - 120, $ry1 + 22, $rx2 - 24, $ry1 + 52, 14, $line);
imagettftext($image, 11, 0, $rx2 - 95, $ry1 + 42, $muted, $fontBold, 'BLADE + ALPINE');

// preview rows
imagefilledroundedrectangle($image, $rx1 + 24, $ry1 + 96, $rx2 - 24, $ry1 + 170, 20, $panelSoft);
imageroundedrectangle($image, $rx1 + 24, $ry1 + 96, $rx2 - 24, $ry1 + 170, 20, $line);
imagettftext($image, 11, 0, $rx1 + 42, $ry1 + 124, $muted, $fontBold, 'REAL PROJECT ASSETS');
imagettftext($image, 18, 0, $rx1 + 42, $ry1 + 152, $ink, $fontBold, 'Docs previews + product-like component layouts');

// command palette box
imagefilledroundedrectangle($image, $rx1 + 24, $ry1 + 190, $rx1 + 194, $ry2 - 24, 22, $panelSoft);
imageroundedrectangle($image, $rx1 + 24, $ry1 + 190, $rx1 + 194, $ry2 - 24, 22, $line);
imagettftext($image, 11, 0, $rx1 + 42, $ry1 + 220, $muted, $fontBold, 'COMMAND');
imagefilledroundedrectangle($image, $rx1 + 42, $ry1 + 240, $rx1 + 176, $ry1 + 274, 12, $white);
imageroundedrectangle($image, $rx1 + 42, $ry1 + 240, $rx1 + 176, $ry1 + 274, 12, $line);
imagettftext($image, 12, 0, $rx1 + 54, $ry1 + 262, $muted, $fontRegular, 'Search components...');
foreach ([0,1,2] as $idx) {
    $yy = $ry1 + 292 + ($idx * 44);
    imagefilledroundedrectangle($image, $rx1 + 42, $yy, $rx1 + 176, $yy + 32, 12, $white);
    imageroundedrectangle($image, $rx1 + 42, $yy, $rx1 + 176, $yy + 32, 12, $line);
}
imagettftext($image, 11, 0, $rx1 + 56, $ry1 + 313, $ink, $fontBold, 'Drawer');
imagettftext($image, 11, 0, $rx1 + 56, $ry1 + 357, $ink, $fontBold, 'Popover');
imagettftext($image, 11, 0, $rx1 + 56, $ry1 + 401, $ink, $fontBold, 'Table');

// table area
imagefilledroundedrectangle($image, $rx1 + 214, $ry1 + 190, $rx2 - 24, $ry2 - 24, 22, $white);
imageroundedrectangle($image, $rx1 + 214, $ry1 + 190, $rx2 - 24, $ry2 - 24, 22, $line);
imagettftext($image, 11, 0, $rx1 + 232, $ry1 + 220, $muted, $fontBold, 'TABLE');
imagefilledrectangle($image, $rx1 + 232, $ry1 + 240, $rx2 - 42, $ry1 + 270, $panelSoft);
imageline($image, $rx1 + 232, $ry1 + 270, $rx2 - 42, $ry1 + 270, $line);
imagettftext($image, 10, 0, $rx1 + 246, $ry1 + 259, $muted, $fontBold, 'COMPONENT');
imagettftext($image, 10, 0, $rx1 + 382, $ry1 + 259, $muted, $fontBold, 'STATUS');
imagettftext($image, 10, 0, $rx1 + 468, $ry1 + 259, $muted, $fontBold, 'USAGE');
$rows = [
    ['Drawer', 'Ready', 'High'],
    ['Popover', 'Ready', 'Medium'],
    ['Command', 'Ready', 'High'],
];
$rowY = $ry1 + 292;
foreach ($rows as [$a, $b, $c]) {
    imagettftext($image, 12, 0, $rx1 + 246, $rowY, $ink, $fontRegular, $a);
    imagettftext($image, 12, 0, $rx1 + 382, $rowY, $ink, $fontRegular, $b);
    imagettftext($image, 12, 0, $rx1 + 468, $rowY, $muted, $fontRegular, $c);
    imageline($image, $rx1 + 232, $rowY + 16, $rx2 - 42, $rowY + 16, $line);
    $rowY += 42;
}

// footer chips
$chips = ['Blade-first', 'Tailwind CSS v4', 'Alpine.js', 'Livewire ready'];
$cx = $rx1 + 232;
$cy = $ry2 - 44;
foreach ($chips as $chipText) {
    $w = 18 + (int)(strlen($chipText) * 7.1);
    imagefilledroundedrectangle($image, $cx, $cy, $cx + $w, $cy + 26, 12, $chip);
    imagettftext($image, 11, 0, $cx + 10, $cy + 17, $muted, $fontRegular, $chipText);
    $cx += $w + 8;
}

imagepng($image, $out);
imagedestroy($image);

echo "Generated: $out\n";

function imagefilledroundedrectangle($image, $x1, $y1, $x2, $y2, $radius, $color): void {
    imagefilledrectangle($image, $x1 + $radius, $y1, $x2 - $radius, $y2, $color);
    imagefilledrectangle($image, $x1, $y1 + $radius, $x2, $y2 - $radius, $color);
    imagefilledellipse($image, $x1 + $radius, $y1 + $radius, $radius * 2, $radius * 2, $color);
    imagefilledellipse($image, $x2 - $radius, $y1 + $radius, $radius * 2, $radius * 2, $color);
    imagefilledellipse($image, $x1 + $radius, $y2 - $radius, $radius * 2, $radius * 2, $color);
    imagefilledellipse($image, $x2 - $radius, $y2 - $radius, $radius * 2, $radius * 2, $color);
}

function imageroundedrectangle($image, $x1, $y1, $x2, $y2, $radius, $color): void {
    imageline($image, $x1 + $radius, $y1, $x2 - $radius, $y1, $color);
    imageline($image, $x1 + $radius, $y2, $x2 - $radius, $y2, $color);
    imageline($image, $x1, $y1 + $radius, $x1, $y2 - $radius, $color);
    imageline($image, $x2, $y1 + $radius, $x2, $y2 - $radius, $color);
    imagearc($image, $x1 + $radius, $y1 + $radius, $radius * 2, $radius * 2, 180, 270, $color);
    imagearc($image, $x2 - $radius, $y1 + $radius, $radius * 2, $radius * 2, 270, 360, $color);
    imagearc($image, $x1 + $radius, $y2 - $radius, $radius * 2, $radius * 2, 90, 180, $color);
    imagearc($image, $x2 - $radius, $y2 - $radius, $radius * 2, $radius * 2, 0, 90, $color);
}
