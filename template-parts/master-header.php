<!DOCTYPE html>

<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<script>
			/* CookieYes Google Consent Mode */
			window.dataLayer = window.dataLayer || [];
			function gtag() {
					dataLayer.push(arguments);
			}
			gtag("consent", "default", {
					ad_storage: "denied",
					analytics_storage: "denied",
					functionality_storage: "denied",
					personalization_storage: "denied",
					security_storage: "granted",
					wait_for_update: 2000,
			});
			gtag("set", "ads_data_redaction", true);
			gtag("set", "url_passthrough", true);
		</script>
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<?php do_action( 'wp_body_open' ); ?>