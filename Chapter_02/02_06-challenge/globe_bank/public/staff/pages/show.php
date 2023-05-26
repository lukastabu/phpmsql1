<?php require_once('../../../private/initialize.php'); ?>
<?php
$id = $_GET['id'] ?? 'X';
?>

<?php $page_title = 'page ' . h($id); ?>
<head>
    <title>Viewing - <?php echo h($page_title); ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/staff.css'); ?>" />
  </head>

<?php
echo 'You are viewing page number ' . h($id);
?>
<br>
<a href="<?php echo url_for('/staff/pages/index.php'); ?>">Return to pages menu</a>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>