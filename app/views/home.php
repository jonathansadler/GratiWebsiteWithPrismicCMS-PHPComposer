<?php
use Prismic\Dom\RichText;
 
$document = $WPGLOBAL['document'];
?>
<?php #include_once 'header.php'; ?>
<?php #include_once 'footer.php' ?>
<!DOCTYPE html>
<html lang="en">
<!-- head -->
<?= RichText::asText($document->data->head) ?>
<!-- head -->
	
<body class="home-1">

<?= RichText::asHtml($document->data->blanker) ?>
<?= RichText::asText($document->data->preloader) ?>
<?= RichText::asText($document->data->start_header_area) ?>
<?= RichText::asText($document->data->start_hero_area) ?>
<?= RichText::asText($document->data->start_client_logo_area) ?>
<?= RichText::asText($document->data->start_services_content_area) ?>
<?= RichText::asText($document->data->start_services_tab_area) ?>
<?= RichText::asText($document->data->start_testimonial_area) ?>
<?= RichText::asText($document->data->start_case_study_area) ?>
<?= RichText::asText($document->data->start_contact_area) ?>
<?= RichText::asText($document->data->footer) ?>
<?= RichText::asText($document->data->jsfooter) ?>

</body>

</html>