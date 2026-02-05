<?php
// Detect current language from TranslatePress cookie
$current_lang = $_COOKIE["trp_language"] ?? "en";

// Select the correct ACF option field
$text =
    strpos($current_lang, "es") === 0
        ? get_field("spanish_top_text", "option")
        : get_field("english_top_text", "option");

// Fallback to English if Spanish is empty
if (!$text) {
    $text = get_field("english_top_text", "option");
}
?>

<section id="marquee-primary" class="marquee my-4">
	<div class="marquee-content">
		<?php if ($text): ?>
			<?php for ($i = 0; $i < 16; $i++): ?>
				<h1><?php echo esc_html($text); ?></h1>
			<?php endfor; ?>
		<?php endif; ?>
	</div>
</section>
