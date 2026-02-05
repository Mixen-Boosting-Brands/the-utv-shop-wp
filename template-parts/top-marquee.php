<?php
// Get TranslatePress instance
if (class_exists("TRP_Translate_Press")) {
    $trp = TRP_Translate_Press::get_trp_instance();
    $current_lang = $trp->get_current_language();
} else {
    $current_lang = "en_US";
}

// Get ACF option fields
$english_text = get_field("english_top_text", "options");
$spanish_text = get_field("spanish_top_text", "options");

// Decide text
if (strpos($current_lang, "es") === 0 && !empty($spanish_text)) {
    $text = $spanish_text;
} else {
    $text = $english_text;
}
?>

<?php if (!empty($text)): ?>
	<section id="marquee-primary" class="marquee my-4">
		<div class="marquee-content">
			<?php for ($i = 0; $i < 16; $i++): ?>
				<h1><?php echo esc_html($text); ?></h1>
			<?php endfor; ?>
		</div>
	</section>
<?php endif; ?>
