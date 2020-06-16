<?php 
    include '../header.php';
    include 'header_calendar.php';
?>
<div class="contenue">
    <form action="index.php" method="GET" class="col-md-6 ml-2 row" id="form1">
        <select class="form-control form-control-sm col-3 mt-2" name="months" value="months" id="months">
            <?php include 'input_years.php'; ?>
        </select>
        <input class="mt-2 col-3 ml-2" type="submit" value="S'organiser" name="submit">
    </form>
    <?php if (!empty($_GET['months']) && !empty($_GET['years'])) { ?>
    <h1 id="he">Vous avez séléctioner : <?=$_GET['months'].' '.$_GET['years'] ?></h1>
    <div class="contenue-table">
        <table id="calendar">
            <thead>
                <td>Lundi</td>
                <td>Mardi</td>
                <td>Mercredi</td>
                <td>Jeudi</td>
                <td>Vendredi</td>
                <td>Samedi</td>
                <td>Dimanche</td>
            </thead>
            <tbody>
                <tr>
                    <?php include 'week1.php'; ?>
                </tr>
                <tr>
                    <?php include 'week2.php'; ?>
                </tr>
                <tr>
                    <?php include 'week3.php'; ?>
                </tr>
                <tr>
                    <?php include 'week4.php'; ?>
                </tr>
                <tr>
                    <?php include 'week5.php'; ?>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php } ?>
<?php
    include '../footer.php';
?>