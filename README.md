Excerpt
=======

Excerpt with settings on per-function basis. Made for WordPress.

### Installation
If you're using Composer to manage WordPress, add this plugin to your project's dependencies. Run:
```sh
composer require trendwerk/excerpt 1.0.0
```

Or manually add it to your `composer.json`:
```json
"require": {
	"trendwerk/excerpt": "1.0.0"
},
```

### Usage

```
tp_the_excerpt( $length = 55, $more = '&hellip;', $content = '' );
```

**$length**
Length of the excerpt in words.

**$more**
The string to use when the content is actually longer.

**$content**
Optionally use different content than the current posts.
