<form action="contact.php" method="post">
    <input type="text" name="nom2">
    <input type="text" name="prenom">
    <input type="submit">
</form>

<?php
if(isset($_GET['truc']))
{
    if($_GET['truc'] == 'ok')
    {
    ?>
    <h2>L'email a bien été envoyé</h2>
    <?php
    }
    else
    {
        ?>
 <h2>Erreur lors de l'envoi</h2>
        <?php
    }
}
?>
