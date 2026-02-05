<?php
// Detect current language (TranslatePress cookie)
$current_lang = $_COOKIE["trp_language"] ?? "en";

// IMPORTANT: Options Page post_id is "options"
$english_text = get_field("english_top_text", "options");
$spanish_text = get_field("spanish_top_text", "options");

// Decide which text to show
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
