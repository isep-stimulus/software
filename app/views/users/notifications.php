<?php session_start();
?>
<?php require APPROOT . '/../public/css/style.php'; ?>
<style> <?php include APPROOT . '/../public/css/style.css'; ?> </style>
<style> <?php include APPROOT . '/../public/css/users/notifications.css'; ?> </style>
<?php require APPROOT . '/views/inc/header.php'; ?>
<html>
<title>USER Notifications</title>
<div id="container">
    <header></header>
    <h1>Notifications</h1>
    <form method="post">
        <input type="hidden" name="email" value="<?php echo $_SESSION["email"]?>">
        <input type="submit" value="Regarder ses notifications" name="validation">
    </form>
    <?php if(isset($_POST["validation"])) {
        if(!empty($data['notifications'])) {
            foreach ($data['notifications'] as $notification) {?>
                <p>Vous devez effectuer : le test numéro <?= $notification->number?>, de type :
                    <?= $notification->title?></p>
            <?php }
        } else {
            if(isset($data['absence_notifications'])) {
                echo $data['absence_notifications'];
            } else {
                echo $data['error_email'];
            }
        }
    } ?>

    <footer></footer>
</div>
</html>

<?php require APPROOT . '/views/inc/footer.php'; ?>
