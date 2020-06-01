<?php require_once APPROOT . '/../app/config/config.php';?>
<?php require APPROOT . '/../public/css/style.php'; ?>
    <style> <?php include APPROOT . '/../public/css/style.css'; ?> </style>
    <style> <?php include APPROOT . '/../public/css/faqs/index.css'; ?> </style>

 <?php require APPROOT . '/views/inc/header.php'; ?> 


    <header class="titre">
        <h1>Modifier la FAQ</h1>
    </header>

    <input class="buttonAjout" type=button onclick=window.location.href='./new'; value='Ajouter une question' />
    <div class='body under-container'>
<?php foreach($data as $faq_question): ?>
    <table>
        <thead>
        <tr>
            <td>
                <?= $faq_question->subject ?>
            </td>
        </tr>
        </thead>
        <tbody>
        <tr>

            <td>
                <?= $faq_question->title ?>

            </td>

        </tr>
        <tr>
            <td class="reponse">
                <?= $faq_question->answer ?>
            </td>
        </tr>
        </tbody>
    </table>
    <?php $num=$faq_question->id ?>
    <aside class="sidebar">
        <ul>
            <li>
                <form method="post">
                    <button class="button" type=submit name="idSupp" value=<?php echo($num)?> >Supprimer </button>

            </li>

            <li>

                <button class="button" type=submit name="newQuestion" value=<?php echo($num)?> >Modifier </button>

            </li>
            <li>

                <?php $visible=$faq_question->visible; ?>
                <?php
                $name='Question'.$num;
                ?>
                <?php if ($visible==1){ ?>


                    <input type="radio" name='<?php echo($name) ?>' value=<?php echo($visible)?> id='visible'checked/>
                    <label for="visible">Visible</label>


                    <input onchange='this.form.submit()' type="radio" name='<?php echo($name) ?>' value=<?php echo($visible)?> id="invisible" />
                    <label for="invisible">Invisible</label>

                <?php } ?>
                <input type="hidden" name="idQuestion" value=<?php echo($num)?> />

                <?php if ($visible==0){ ?>
                    <input onchange='this.form.submit()' type="radio" name='<?php echo($name) ?>' value=<?php echo($visible)?> id='visible' />
                    <label for="visible">Visible</label>

                    <input type="radio" name='<?php echo($name) ?>' value=<?php echo($visible)?> id="invisible" checked />
                    <label for="invisible">Invisible</label>
                <?php } ?>
            </li>
            </form>
        </ul>
    </aside>
<?php endforeach ; ?>




<?php require APPROOT . '/views/inc/footer.php'; ?>