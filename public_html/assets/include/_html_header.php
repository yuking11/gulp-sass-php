<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width">
<?php if ($image_index!==0): ?><meta name="googlebot" content="noimageindex"><?php endif; ?>
<?php if ($search_index!==0): ?><meta name="robots" content="noindex,nofollow"><?php endif; ?>
<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $description; ?>">
<meta name="keywords" content="<?php echo $keywords; ?>">
<link rel="shortcut icon" href="<?php echo HTTP; ?>/assets/images/favicon.ico">
<link rel="apple-touch-icon" href="<?php echo HTTP; ?>/assets/images/apple-touch-icon.png" type="image/png">
<?php if( !is_local() ): ?>
<link rel="stylesheet" href="<?php echo HTTP; ?>/assets/stylesheets/application.min.css" media="all">
<?php else: ?>
<link rel="stylesheet" href="<?php echo HTTP; ?>/assets/stylesheets/application.css" media="all">
<?php endif; ?>
</head>
