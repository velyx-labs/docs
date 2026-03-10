<?php

declare(strict_types=1);

$root = realpath(__DIR__ . '/..');
$docsRoot = $root . '/source/docs';
$outRoot = $root . '/source/assets/images/og/docs';
$fontRegular = '/usr/share/fonts/truetype/dejavu/DejaVuSans.ttf';
$fontBold = '/usr/share/fonts/truetype/dejavu/DejaVuSans-Bold.ttf';

$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($docsRoot));
$files = [];
foreach ($iterator as $file) {
    if ($file->isFile() && $file->getExtension() === 'md') {
        $files[] = $file->getPathname();
    }
}
sort($files);

foreach ($files as $path) {
    $contents = file_get_contents($path);
    if (!preg_match('/^---\n(.*?)\n---\n/s', $contents, $matches)) {
        continue;
    }

    $frontmatter = $matches[1];
    if (!preg_match('/^title:\s*(.+)$/m', $frontmatter, $titleMatch)) {
        continue;
    }

    $title = trim($titleMatch[1], " \t\n\r\0\x0B\"");
    $relative = substr($path, strlen($root . '/source/'));
    $docPath = preg_replace('/\.md$/', '', substr($relative, strlen('docs/')));
    $slugPath = trim($docPath, '/');
    $segments = explode('/', $slugPath);

    $isComponent = str_starts_with($slugPath, 'components/');
    $isDesign = str_starts_with($slugPath, 'design/');

    $metaTitle = match (true) {
        $isComponent => sprintf('%s Component for Laravel Blade, Alpine.js & Livewire | Velyx', $title),
        $isDesign => sprintf('%s Design Guide for Laravel UI | Velyx', $title),
        $title === 'Installation' => 'Installation Guide for Laravel UI Components | Velyx',
        $title === 'Quick Start' => 'Quick Start Guide for Velyx Components | Velyx',
        $title === 'CLI Reference' => 'Velyx CLI Reference for Laravel Projects | Velyx',
        $title === 'Components' => 'Laravel Component Library for Blade, Alpine.js & Livewire | Velyx',
        default => sprintf('%s Guide for Laravel UI Components | Velyx', $title),
    };

    $label = match (true) {
        $isComponent => 'COMPONENT DOC',
        $isDesign => 'DESIGN GUIDE',
        default => 'DOCS GUIDE',
    };

    $description = '';
    if (preg_match('/^description:\s*(.+)$/m', $frontmatter, $descriptionMatch)) {
        $description = trim($descriptionMatch[1], " \t\n\r\0\x0B\"");
    }

    $imageRelative = '/assets/images/og/docs/' . $slugPath . '.png';
    $imageAbsolute = $outRoot . '/' . $slugPath . '.png';
    @mkdir(dirname($imageAbsolute), 0777, true);

    generateOgImage($imageAbsolute, $title, $label, $description, $fontRegular, $fontBold);

    $updatedFrontmatter = upsert($frontmatter, 'metaTitle', $metaTitle);
    $updatedFrontmatter = upsert($updatedFrontmatter, 'metaImage', $imageRelative);

    $updated = preg_replace('/^---\n.*?\n---\n/s', "---\n" . $updatedFrontmatter . "\n---\n", $contents, 1);
    file_put_contents($path, $updated);
}

echo "Updated SEO assets for " . count($files) . " docs pages\n";

function upsert(string $frontmatter, string $key, string $value): string
{
    $line = $key . ': ' . $value;
    if (preg_match('/^' . preg_quote($key, '/') . ':\s*.*$/m', $frontmatter)) {
        return preg_replace('/^' . preg_quote($key, '/') . ':\s*.*$/m', $line, $frontmatter, 1);
    }

    if (preg_match('/^description:\s*.*$/m', $frontmatter)) {
        return preg_replace('/^description:\s*.*$/m', "$0\n" . $line, $frontmatter, 1);
    }

    return $frontmatter . "\n" . $line;
}

function generateOgImage(string $out, string $title, string $label, string $description, string $fontRegular, string $fontBold): void
{
    $width = 1200;
    $height = 630;
    $image = imagecreatetruecolor($width, $height);
    imageantialias($image, true);
    imagealphablending($image, true);
    imagesavealpha($image, true);

    $bg = imagecolorallocate($image, 247, 247, 245);
    $ink = imagecolorallocate($image, 24, 24, 27);
    $muted = imagecolorallocate($image, 89, 89, 94);
    $line = imagecolorallocate($image, 217, 217, 214);
    $accent = imagecolorallocate($image, 35, 35, 38);
    $white = imagecolorallocate($image, 255, 255, 255);
    $soft = imagecolorallocate($image, 241, 241, 238);
    $shadow = imagecolorallocatealpha($image, 0, 0, 0, 118);

    imagefilledrectangle($image, 0, 0, $width, $height, $bg);
    for ($i = 0; $i < $height; $i++) {
        $ratio = $i / $height;
        $r = (int)(247 * (1 - $ratio) + 235 * $ratio);
        $g = (int)(247 * (1 - $ratio) + 235 * $ratio);
        $b = (int)(245 * (1 - $ratio) + 231 * $ratio);
        $color = imagecolorallocate($image, $r, $g, $b);
        imageline($image, 0, $i, $width, $i, $color);
    }

    imagefilledellipse($image, 180, 110, 280, 280, imagecolorallocatealpha($image, 40, 40, 44, 112));
    imagefilledellipse($image, 1000, 160, 420, 420, imagecolorallocatealpha($image, 50, 50, 55, 116));
    imageline($image, 64, 66, 1136, 66, $line);

    imagefilledroundedrectangle($image, 84, 98, 286, 140, 18, $white);
    imageroundedrectangle($image, 84, 98, 286, 140, 18, $line);
    imagefilledellipse($image, 108, 119, 10, 10, $accent);
    imagettftext($image, 13, 0, 124, 126, $muted, $fontBold, $label);

    $titleLines = wrapText($title, 30);
    $y = 220;
    $titleSize = count($titleLines) > 2 ? 32 : 38;
    foreach ($titleLines as $lineText) {
        imagettftext($image, $titleSize, 0, 84, $y, $ink, $fontBold, $lineText);
        $y += $titleSize + 14;
    }

    $descLines = wrapText($description, 52);
    $descLines = array_slice($descLines, 0, 3);
    $y += 18;
    foreach ($descLines as $lineText) {
        imagettftext($image, 18, 0, 84, $y, $muted, $fontRegular, $lineText);
        $y += 30;
    }

    imagefilledroundedrectangle($image, 84, 474, 286, 524, 18, $accent);
    imagettftext($image, 15, 0, 112, 506, $white, $fontBold, 'Read the Documentation');

    imagefilledroundedrectangle($image, 686, 88, 1114, 542, 30, $white);
    imagefilledroundedrectangle($image, 694, 100, 1122, 554, 30, $shadow);
    imagefilledroundedrectangle($image, 686, 88, 1114, 542, 30, $white);
    imageroundedrectangle($image, 686, 88, 1114, 542, 30, $line);

    imagefilledroundedrectangle($image, 714, 116, 1086, 194, 22, $soft);
    imageroundedrectangle($image, 714, 116, 1086, 194, 22, $line);
    imagettftext($image, 12, 0, 736, 146, $muted, $fontBold, 'VELYX');
    imagettftext($image, 22, 0, 736, 178, $ink, $fontBold, $title);

    imagefilledroundedrectangle($image, 714, 216, 874, 514, 22, $soft);
    imageroundedrectangle($image, 714, 216, 874, 514, 22, $line);
    imagettftext($image, 12, 0, 736, 246, $muted, $fontBold, 'PREVIEW');
    foreach ([0,1,2,3] as $i) {
        $yy = 270 + ($i * 54);
        imagefilledroundedrectangle($image, 736, $yy, 852, $yy + 36, 12, $white);
        imageroundedrectangle($image, 736, $yy, 852, $yy + 36, 12, $line);
    }

    imagefilledroundedrectangle($image, 894, 216, 1086, 514, 22, $white);
    imageroundedrectangle($image, 894, 216, 1086, 514, 22, $line);
    imagefilledrectangle($image, 916, 252, 1062, 282, $soft);
    imageline($image, 916, 282, 1062, 282, $line);
    imagettftext($image, 10, 0, 930, 272, $muted, $fontBold, 'USAGE EXAMPLES');
    $ry = 320;
    foreach (['Install', 'Use', 'Customize'] as $item) {
        imagettftext($image, 15, 0, 930, $ry, $ink, $fontRegular, $item);
        imageline($image, 916, $ry + 16, 1062, $ry + 16, $line);
        $ry += 58;
    }

    imagefilledroundedrectangle($image, 714, 560, 904, 594, 14, $soft);
    imagettftext($image, 11, 0, 728, 582, $muted, $fontRegular, 'Laravel-first UI components');
    imagefilledroundedrectangle($image, 916, 560, 1088, 594, 14, $soft);
    imagettftext($image, 11, 0, 930, 582, $muted, $fontRegular, 'Blade, Alpine, Tailwind v4');

    imagepng($image, $out);
    imagedestroy($image);
}

function wrapText(string $text, int $maxChars): array
{
    $words = preg_split('/\s+/', trim($text)) ?: [];
    $lines = [];
    $current = '';
    foreach ($words as $word) {
        $candidate = $current === '' ? $word : $current . ' ' . $word;
        if (mb_strlen($candidate) <= $maxChars) {
            $current = $candidate;
            continue;
        }
        if ($current !== '') {
            $lines[] = $current;
        }
        $current = $word;
    }
    if ($current !== '') {
        $lines[] = $current;
    }
    return $lines;
}

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
