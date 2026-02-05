<?php
// 1. Detect language safely
$current_lang = "en";

if (function_exists("trp_get_current_language")) {
    $current_lang = trp_get_current_language();
} else {
    // Fallback: detect by URL
    $request_uri = $_SERVER["REQUEST_URI"] ?? "";
    if (strpos($request_uri, "/es/") !== false) {
        $current_lang = "es";
    }
}

// 2. Get ACF option fields (correct post_id)
$english_text = get_field("english_top_text", "options");
$spanish_text = get_field("spanish_top_text", "options");

// 3. Choose text
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
