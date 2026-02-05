<?php
// Detect current language from TranslatePress cookie
$current_lang = $_COOKIE["trp_language"] ?? "en";

// Get ACF group field (Options Page)
$top_banner = get_field("top_banner_text", "option");

// Safety check — ensure group exists
if (!is_array($top_banner)) {
    return;
}

// Select text based on language
if (
    strpos($current_lang, "es") === 0 &&
    !empty($top_banner["spanish_top_text"])
) {
    $text = $top_banner["spanish_top_text"];
} else {
    $text = $top_banner["english_top_text"] ?? "";
}

// Stop if no text at all
if (empty($text)) {
    return;
}
?>

<section id="marquee-primary" class="marquee my-4">
	<div class="marquee-content">
		<?php for ($i = 0; $i < 16; $i++): ?>
			<h1><?php echo esc_html($text); ?></h1>
		<?php endfor; ?>
	</div>
</section>
