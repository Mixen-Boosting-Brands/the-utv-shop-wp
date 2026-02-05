<?php
// Detect current language from TranslatePress cookie
$current_lang = $_COOKIE["trp_language"] ?? "en";

// Get ACF group field from Options Page
$top_banner = get_field("top_banner_text", "options");

// Default to empty text
$text = "";

// Ensure group exists
if (is_array($top_banner)) {
    // Pick language-specific text
    if (
        strpos($current_lang, "es") === 0 &&
        !empty($top_banner["spanish_top_text"])
    ) {
        $text = $top_banner["spanish_top_text"];
    } elseif (!empty($top_banner["english_top_text"])) {
        $text = $top_banner["english_top_text"];
    }
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
